<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$countries = Country::orderBy('created_at', 'desc')->get();
		return view('admin.country.index', [
			'countries' => $countries
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.country.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$country = new Country();
		$country->title = $request->title;
		$country->save();

		return redirect('admin/country')->withSuccess('Страна успешно добавлена');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Country  $country
	 * @return \Illuminate\Http\Response
	 */
	public function show(Country $country)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Country  $country
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Country $country)
	{
		return view('admin.country.edit', [
			'country' => $country
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Country  $country
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Country $country)
	{
		$country->title = $request->title;
		$country->save();

		return redirect('admin/country')->withSuccess('Страна успешно обновлена');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Country  $country
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Country $country)
	{
		$country->delete();

		return redirect()->back()->withSuccess('Страна успешно удалена');
	}
}
