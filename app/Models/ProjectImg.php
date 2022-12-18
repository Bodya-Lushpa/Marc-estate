<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImg extends Model
{
	use HasFactory;

	protected $fillable = ['img'];

	public function product()
	{
		return $this->belongsTo('App\Models\Product');
	}
}
