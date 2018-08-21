<?php

namespace App\Http\Controllers\Admin\utils;


use ErrorException;

class UploadFileUtil extends Utils
{
	public static function upload($file)
	{
		if ($file){
			try {

				$path = $file->store('','images');

//				$path = '/home/hyh/workspace/study/hello-c/public/images/'.$path;
				$path = public_path('images/'.$path);

				$name = basename($path);
				QiNiuUtils::QiNiuUploadFile($name,$path);

				return self::innerResult(0, $path);

			} catch (ErrorException $exception) {
				return self::innerResult(1, $exception->getMessage());
			}
		}
		return self::innerResult(1, '文件不存在!');
	}
}