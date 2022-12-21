<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PlanRoom;
use Illuminate\Http\Request;

class PlanRoomController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return PlanRoom::orderBy('created_at', 'DESC')->get();
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
	 * @param  \App\Models\PlanRoom  $planRoom
	 * @return \Illuminate\Http\Response
	 */
	public function show(PlanRoom $planRoom)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\PlanRoom  $planRoom
	 * @return \Illuminate\Http\Response
	 */
	public function edit(PlanRoom $planRoom)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\PlanRoom  $planRoom
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, PlanRoom $planRoom)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\PlanRoom  $planRoom
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(PlanRoom $planRoom)
	{
		//
	}
}
