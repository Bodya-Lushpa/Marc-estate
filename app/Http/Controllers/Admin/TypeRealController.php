<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypeReal;
use Illuminate\Http\Request;

class TypeRealController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$typeReals = TypeReal::all();
		return view('admin.typeReal.index', [
			'typeReals' => $typeReals
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.typeReal.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$typeReal = new TypeReal();
		$typeReal->title = $request->title;
		$typeReal->save();

		return redirect('admin/type-real')->withSuccess('Типы недвижимости успешно добавлен');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\TypeReal  $typeReal
	 * @return \Illuminate\Http\Response
	 */
	public function show(TypeReal $typeReal)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\TypeReal  $typeReal
	 * @return \Illuminate\Http\Response
	 */
	public function edit(TypeReal $typeReal)
	{
		return view('admin.typeReal.edit', [
			'typeReal' => $typeReal
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\TypeReal  $typeReal
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, TypeReal $typeReal)
	{
		$typeReal->title = $request->title;
		$typeReal->save();

		return redirect('admin/type-real')->withSuccess('Тип недвижимоости успешно обновлен');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\TypeReal  $typeReal
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(TypeReal $typeReal)
	{
		$typeReal->delete();

		return redirect()->back()->withSuccess('Тип недвижимоости успешно удален');
	}
}
