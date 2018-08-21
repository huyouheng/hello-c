<?php
/**
 * Created by PhpStorm.
 * User: hyh
 * Date: 18-8-21
 * Time: 下午5:34
 */

namespace App\Http\Controllers\Admin\utils;

use Qiniu\Storage\UploadManager;
use Qiniu\Auth;


class QiNiuUtils
{
	public static function QiNiuUploadFile($name, $path)
	{
		$upManager = new UploadManager();
		$auth = new Auth('8n9Gd3vJcFoOX_VzZK903HJthBM3TIchY8qHpLid', 'YLrctQ4vj_Rxc5iUxYKu0tqEup-JbXOMQq8L5daP');
		$token = $auth->uploadToken('images');

		list($ret, $error) = $upManager->putFile($token, $name, $path);

		info($ret);
		info($error);
	}
}