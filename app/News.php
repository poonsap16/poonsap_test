<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
			'id',
			'title',
			'news_type',
			'news_detail',
			'name_create',
			'news_at'
	];
}

