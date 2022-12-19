<?php

namespace App\Http\Controllers\Admin;

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
		$statusProjects = StatusProject::orderBy('created_at', 'desc')->get();
		return view('admin.statusProject.index', [
			'statusProjects' => $statusProjects
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.statusProject.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$statusProject = new StatusProject();
		$statusProject->title = $request->title;
		$statusProject->save();

		return redirect('admin/status-project')->withSuccess('Статус успешно добавлен');
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
		return view('admin.statusProject.edit', [
			'statusProject' => $statusProject
		]);
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
		$statusProject->title = $request->title;
		$statusProject->save();

		return redirect('admin/status-project')->withSuccess('Статус успешно обновлен');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\StatusProject  $statusProject
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(StatusProject $statusProject)
	{
		$statusProject->delete();

		return redirect()->back()->withSuccess('Статус успешно удален');
	}
}
