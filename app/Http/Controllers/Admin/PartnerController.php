<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$partners = Partner::all();
		return view('admin.partner.index', [
			'partners' => $partners
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.partner.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$partner = new Partner();
		$partner->title = $request->title;

		$projectImgs = [];
		if ($request->img) {
			foreach ($request->img as $key => $value) {
				array_push($projectImgs, $value);
			}
			$partner->path = $projectImgs[0];
		}

		$partner->save();

		return redirect('admin/partner')->withSuccess('Партнер успешно добавлен');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Partner  $partner
	 * @return \Illuminate\Http\Response
	 */
	public function show(Partner $partner)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Partner  $partner
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Partner $partner)
	{
		return view('admin.partner.edit', [
			'partner' => $partner
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Partner  $partner
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Partner $partner)
	{
		$partner->title = $request->title;
		$projectImgs = [];
		if ($request->img) {
			foreach ($request->img as $key => $value) {
				array_push($projectImgs, $value);
			}
			$partner->path = $projectImgs[0];
		}
		$partner->save();

		return redirect('admin/partner')->withSuccess('Партнер успешно обновлен');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Partner  $partner
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Partner $partner)
	{
		//
	}
}
