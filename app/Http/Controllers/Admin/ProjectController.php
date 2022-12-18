<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Project;
use App\Models\ProjectImg;
use App\Models\ImportantInformation;
use App\Models\HomeInformation;
use App\Models\ProjectTypereal;
use App\Models\StatusProject;
use App\Models\TypeReal;
use App\Models\Plan;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$projects = Project::orderBy('created_at', 'DESC')->get();
		return view('admin.projects.index', [
			'projects' => $projects
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$typeReals = TypeReal::all();
		$statusProjects = StatusProject::all();
		$cities = City::all();
		$counties = Country::all();
		return view('admin.projects.create', [
			'statusProjects' => $statusProjects,
			'cities' => $cities,
			'typeReals' => $typeReals,
			'counties' => $counties
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
		$project = new Project();
		$project->title = $request->title;
		$project->address = $request->address;
		$project->price = $request->price;
		$project->coordinates1 = $request->coordinates1;
		$project->coordinates2 = $request->coordinates2;
		$project->status_id = $request->status_id;
		$project->country_id = $request->country_id;
		$project->city_id = $request->city_id;
		$project->description = $request->description;
		$project->save();
		$projectImgs = [];
		if ($request->img) {
			foreach ($request->img as $key => $value) {
				array_push($projectImgs, new ProjectImg(['img' => '/' . $value]));
			}
			$project->images()->saveMany($projectImgs);
		}
		$important_information = [];
		if ($request->important_information) {
			foreach ($request->important_information as $key => $value) {
				array_push($important_information, new ImportantInformation(['title' => $value]));
			}
			$project->importantInformation()->saveMany($important_information);
		}
		$home_amenities = [];
		if ($request->home_amenities) {
			foreach ($request->home_amenities as $key => $value) {
				array_push($home_amenities, new HomeInformation(['title' => $value]));
			}
			$project->homeAmenities()->saveMany($home_amenities);
		}
		$type_reals = [];
		if ($request->type_reals) {
			foreach ($request->type_reals as $key => $value) {
				array_push($type_reals, new ProjectTypereal(['real_id' => $value]));
			}
			$project->projectTypereal()->saveMany($type_reals);
		}
		$plans = [];
		if ($request->plan) {
			foreach ($request->plan as $key => $value) {
				array_push($plans, new Plan(['img' => $value['img'], 'rooms' => $value['room'], 'price' => $value['price'], 'description' => $value['description']]));
			}
			$project->plans()->saveMany($plans);
		}

		return redirect()->back()->withSuccess('Проект успешно добавлен');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function show(Project $project)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Project $project)
	{
		$typeReals = TypeReal::all();
		$typeRealsActive = [];
		foreach ($project->reals as $key => $value) {
			$typeRealsActive[] = $value->id;
		}


		$statusProjectsActive = StatusProject::where('id', $project->status_id)->first();
		$statusProjects = StatusProject::where('id', '!=', $project->status_id)->get();
		$countryActive = Country::where('id', $project->country_id)->first();
		$counties = Country::where('id', '!=', $project->country_id)->get();
		$cityActive = City::where('id', $project->city_id)->first();
		$cities = City::where('id', '!=', $project->city_id)->get();
		return view('admin.projects.edit', [
			'project' => $project,
			'statusProjectsActive' => $statusProjectsActive,
			'statusProjects' => $statusProjects,
			'countryActive' => $countryActive,
			'counties' => $counties,
			'cityActive' => $cityActive,
			'cities' => $cities,
			'typeReals' => $typeReals,
			'typeRealsActive' => $typeRealsActive,
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Project $project)
	{
		if ($project->images) {
			$project->images()->delete();
		}
		if ($project->importantInformation) {
			$project->importantInformation()->delete();
		};
		if ($project->homeAmenities) {
			$project->homeAmenities()->delete();
		}
		if ($project->reals) {
			$project->projectTypereal()->delete();
		}
		if ($project->plans) {
			$project->plans()->delete();
		}

		$project->title = $request->title;
		$project->address = $request->address;
		$project->price = $request->price;
		$project->coordinates1 = $request->coordinates1;
		$project->coordinates2 = $request->coordinates2;
		$project->description = $request->description;
		$project->status_id = $request->status_id;
		$project->save();
		$projectImgs = [];
		if ($request->img) {
			foreach ($request->img as $key => $value) {
				array_push($projectImgs, new ProjectImg(['img' => $value]));
			}
			$project->images()->saveMany($projectImgs);
		}

		$important_information = [];
		if ($request->important_information) {
			foreach ($request->important_information as $key => $value) {
				array_push($important_information, new ImportantInformation(['title' => $value]));
			}
			$project->importantInformation()->saveMany($important_information);
		}
		$home_amenities = [];
		if ($request->home_amenities) {
			foreach ($request->home_amenities as $key => $value) {
				array_push($home_amenities, new HomeInformation(['title' => $value]));
			}
			$project->homeAmenities()->saveMany($home_amenities);
		}
		$type_reals = [];
		if ($request->type_reals) {
			foreach ($request->type_reals as $key => $value) {
				array_push($type_reals, new ProjectTypereal(['real_id' => $value]));
			}
			$project->projectTypereal()->saveMany($type_reals);
		}
		$plans = [];
		if ($request->plan) {
			foreach ($request->plan as $key => $value) {
				array_push($plans, new Plan(['img' => $value['img'], 'rooms' => $value['room'], 'price' => $value['price'], 'description' => $value['description']]));
			}
			$project->plans()->saveMany($plans);
		}

		return redirect()->back()->withSuccess('Проект успешно обновлен');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Project $project)
	{
		$project->delete();

		return redirect()->back()->withSuccess('Проект успешно удален');
	}
}
