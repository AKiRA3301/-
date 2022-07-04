<?php
/**
 * ZoneController.php
 *
 * @copyright  2022 opencart.cn - All Rights Reserved
 * @link       http://www.guangdawangluo.com
 * @author     TL <mengwb@opencart.cn>
 * @created    2022-07-04 16:21:14
 * @modified   2022-07-04 16:21:14
 */

namespace Beike\Shop\Http\Controllers\Account;

use Beike\Repositories\ZoneRepo;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function index(Request $request, int $countryId)
    {
        ZoneRepo::listByCountry($countryId);

        $data = [
            'zones' => ZoneRepo::listByCountry($countryId),
        ];

        return json_success('成功!', $data);
    }
}
