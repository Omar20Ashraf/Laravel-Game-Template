<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{	
	protected $table = 'latest_news';

	protected $fillable=['description','tag_name','tag_color'];
}
