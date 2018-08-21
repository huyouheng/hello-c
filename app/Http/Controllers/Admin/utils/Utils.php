<?php
/**
 * Created by PhpStorm.
 * User: hyh
 * Date: 18-8-21
 * Time: 下午5:11
 */

namespace App\Http\Controllers\Admin\utils;


class Utils
{
	public static function innerResult($status = 0, $msg = null)
	{
		return ['status' => $status, 'msg' => $msg];
	}
}