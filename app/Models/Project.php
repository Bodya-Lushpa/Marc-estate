<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
	use HasFactory, Sluggable;

	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable(): array
	{
		return [
			'slug' => [
				'source' => 'title'
			]
		];
	}

	public function images()
	{
		return $this->hasMany('App\Models\ProjectImg');
	}
	public function status()
	{
		return $this->belongsTo('App\Models\StatusProject');
	}
	public function country()
	{
		return $this->belongsTo('App\Models\Country');
	}
	public function city()
	{
		return $this->belongsTo('App\Models\City');
	}
	public function importantInformation()
	{
		return $this->hasMany('App\Models\ImportantInformation');
	}
	public function homeAmenities()
	{
		return $this->hasMany('App\Models\HomeInformation');
	}
	public function projectTypereal()
	{
		return $this->hasMany('App\Models\ProjectTypereal');
	}
	public function plans()
	{
		return $this->hasMany('App\Models\Plan');
	}
	public function reals()
	{
		return $this->belongsToMany('App\Models\TypeReal', 'project_typereals', 'project_id', 'real_id');
	}
}
