<?php

namespace App\Http\Controllers\Api;

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
		return TypeReal::with('projects')->orderBy('created_at', 'DESC')->get();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
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
		//
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
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\TypeReal  $typeReal
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(TypeReal $typeReal)
	{
		//
	}
}
