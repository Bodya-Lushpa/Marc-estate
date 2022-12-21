<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StatusProject;
use Illuminate\Http\Request;

class StatusProjectController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return StatusProject::orderBy('created_at', 'DESC')->get();
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
	 * @param  \App\Models\StatusProject  $statusProject
	 * @return \Illuminate\Http\Response
	 */
	public function show(StatusProject $statusProject)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\StatusProject  $statusProject
	 * @return \Illuminate\Http\Response
	 */
	public function edit(StatusProject $statusProject)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\StatusProject  $statusProject
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, StatusProject $statusProject)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\StatusProject  $statusProject
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(StatusProject $statusProject)
	{
		//
	}
}
