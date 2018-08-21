<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';

    protected $fillable = [
    	'title', 'desc', 'url', 'imgUrl', 'sort', 'isShow'
	];

	public statuc function addData($data)
	{
		if (!is_null($result = self::create($data))) {
			return true;
		}

		return false;
    }
}
