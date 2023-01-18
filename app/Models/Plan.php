<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
	use HasFactory;

	protected $fillable = ['img', 'hashimg', 'rooms', 'description', 'price', 'area'];

	public function planRoom()
	{
		return $this->belongsTo('App\Models\PlanRoom', 'rooms', 'id');
	}
}
