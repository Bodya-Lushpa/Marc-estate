<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
	use HasFactory;

	protected $fillable = ['img', 'rooms', 'description', 'price'];

	public function room()
	{
		return $this->belongsTo('App\Models\PlanRoom');
	}
}
