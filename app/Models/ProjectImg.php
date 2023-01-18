<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImg extends Model
{
	use HasFactory;

	protected $fillable = ['img', 'hashimg'];

	public function product()
	{
		return $this->belongsTo('App\Models\Product');
	}
}
