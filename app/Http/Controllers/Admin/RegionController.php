<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\Country;
use Illuminate\Http\Request;

class RegionController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$regions = Region::orderBy('created_at', 'desc')->get();
		return view('admin.region.index', [
			'regions' => $regions
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$countries = Country::orderBy('created_at', 'desc')->get();
		return view('admin.region.create', [
			'countries' => $countries
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$region = new Region();
		$region->title = $request->title;
		$region->country_id = $request->country_id;
		$region->save();

		return redirect('admin/region')->withSuccess('Регион успешно добавлена');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Region  $region
	 * @return \Illuminate\Http\Response
	 */
	public function show(Region $region)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Region  $region
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Region $region)
	{
		$countries = Country::orderBy('created_at', 'desc')->get();
		return view('admin.region.edit', [
			'region' => $region,
			'countries' => $countries,
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Region  $region
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Region $region)
	{
		$region->title = $request->title;
		$region->country_id = $request->country_id;
		$region->save();

		return redirect('admin/region')->withSuccess('Регион успешно обновлен');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Region  $region
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Region $region)
	{
		$region->delete();

		return redirect()->back()->withSuccess('Регион успешно удален');
	}
}
