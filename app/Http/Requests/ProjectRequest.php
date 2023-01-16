<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title' => 'required|string',
			'address' => 'required',
			'price' => 'required',
			'description' => 'required',
			'country_id' => 'required',
			'city_id' => 'required',
			'img' => 'required',
			'type_reals' => 'required',
			'important_information' => 'required',
			'home_amenities' => 'required',
		];
	}
}
