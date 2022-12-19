<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$cities = City::orderBy('created_at', 'desc')->get();
		return view('admin.city.index', [
			'cities' => $cities
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.city.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$city = new City();
		$city->title = $request->title;
		$city->save();

		return redirect('admin/city')->withSuccess('Город успешно добавлен');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\City  $city
	 * @return \Illuminate\Http\Response
	 */
	public function show(City $city)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\City  $city
	 * @return \Illuminate\Http\Response
	 */
	public function edit(City $city)
	{
		return view('admin.city.edit', [
			'city' => $city
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\City  $city
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, City $city)
	{
		$city->title = $request->title;
		$city->save();

		return redirect('admin/city')->withSuccess('Город успешно обновлен');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\City  $city
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(City $city)
	{
		$city->delete();

		return redirect()->back()->withSuccess('Город успешно удален');
	}
}
