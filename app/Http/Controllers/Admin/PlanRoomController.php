<?php

namespace App\Http\Controllers\Admin;

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
		$planRooms = PlanRoom::all();
		return view('admin.planRoom.index', [
			'planRooms' => $planRooms
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.planRoom.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$planRoom = new PlanRoom();
		$planRoom->title = $request->title;
		$planRoom->save();

		return redirect('admin/plan-room')->withSuccess('Комнатность успешно добавлена');
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
		return view('admin.planRoom.edit', [
			'planRoom' => $planRoom
		]);
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
		$planRoom->title = $request->title;
		$planRoom->save();

		return redirect('admin/plan-room')->withSuccess('Кмонатность успешно обновлена');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\PlanRoom  $planRoom
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(PlanRoom $planRoom)
	{
		$planRoom->delete();

		return redirect()->back()->withSuccess('Комнатность успешно удалена');
	}
}
