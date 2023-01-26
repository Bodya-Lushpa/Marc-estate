<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
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
use App\Models\PlanRoom;
use App\Models\Region;
use ImageOptimizer;
use BlurHash;
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
		$ProjectImg = ProjectImg::orderBy('created_at', 'DESC')->get();
		foreach ($ProjectImg as $img) {
			ImageOptimizer::optimize('.' . $img->img);
		}
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
		$counties = Country::all();
		$regions = Region::all();
		$cities = City::all();
		$planRooms = PlanRoom::all();
		return view('admin.projects.create', [
			'statusProjects' => $statusProjects,
			'cities' => $cities,
			'typeReals' => $typeReals,
			'counties' => $counties,
			'planRooms' => $planRooms,
			'regions' => $regions,
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ProjectRequest $request)
	{
		$project = new Project();
		$project->title = $request->title;
		$project->address = $request->address;
		$project->price = $request->price;
		$project->coordinates1 = $request->coordinates1;
		$project->coordinates2 = $request->coordinates2;
		$project->status_id = $request->status_id;
		$project->country_id = $request->country_id;
		$request->region_id ? $project->region_id = $request->region_id : NULL;
		$project->city_id = $request->city_id;
		$project->description = $request->description;
		$project->images_for_slider = $request->images_for_slider;
		$request->is_slider ? $project->is_slider = 1 : $project->is_slider = 0;
		$request->is_top ? $project->is_top = 1 : $project->is_top = 0;

		$request->img[0] ? $project->hashimg = BlurHash::encode('.' . $request->img[0]) : 'LaFZ4_xui]IT%%WZaJROkERjoct7';
		$project->save();

		$important_information = [];
		if ($request->important_information[0]) {
			foreach ($request->important_information as $key => $value) {
				array_push($important_information, new ImportantInformation(['title' => $value]));
			}
			$project->importantInformation()->saveMany($important_information);
		}
		$home_amenities = [];
		if ($request->home_amenities[0]) {
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
		$projectImgs = [];
		if ($request->img) {
			foreach ($request->img as $key => $value) {
				ImageOptimizer::optimize('.' . $value);
				array_push($projectImgs, new ProjectImg(['img' => $value, 'hashimg' => BlurHash::encode('.' . $value)]));
			}
			$project->images()->saveMany($projectImgs);
		} else {
			$project->images()->saveMany([new ProjectImg(['img' => '/images/background/pexels-azra-tuba-demir-10463590.jpg'])]);
		}
		$plans = [];
		if ($request->plan) {
			foreach ($request->plan as $key => $value) {
				ImageOptimizer::optimize('.' . $value['img']);
				array_push($plans, new Plan(['img' => $value['img'], 'hashimg' => BlurHash::encode('.' . $value['img']), 'rooms' => $value['room'], 'price' => $value['price'], 'area' => $value['area'], 'description' => $value['description']]));
			}
			$project->plans()->saveMany($plans);
		}

		return redirect('admin/project')->withSuccess('Проект успешно добавлен');
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
		$regionActive = Region::where('id', $project->region_id)->first();
		$regions = Region::where('id', '!=', $project->region_id)->get();
		$cityActive = City::where('id', $project->city_id)->first();
		$cities = City::where('id', '!=', $project->city_id)->get();
		$planRooms = PlanRoom::all();
		return view('admin.projects.edit', [
			'project' => $project,
			'statusProjectsActive' => $statusProjectsActive,
			'statusProjects' => $statusProjects,
			'countryActive' => $countryActive,
			'counties' => $counties,
			'regionActive' => $regionActive,
			'regions' => $regions,
			'cityActive' => $cityActive,
			'cities' => $cities,
			'typeReals' => $typeReals,
			'typeRealsActive' => $typeRealsActive,
			'planRooms' => $planRooms,
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
		$project->country_id = $request->country_id;
		$request->region_id ? $project->region_id = $request->region_id : NULL;
		$project->city_id = $request->city_id;
		$project->images_for_slider = $request->images_for_slider;
		$request->is_slider ? $project->is_slider = 1 : $project->is_slider = 0;
		$request->is_top ? $project->is_top = 1 : $project->is_top = 0;
		$request->img[0] ? $project->hashimg = BlurHash::encode('.' . $request->img[0]) : 'LaFZ4_xui]IT%%WZaJROkERjoct7';
		$project->save();

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
		$projectImgs = [];
		if ($request->img) {
			foreach ($request->img as $key => $value) {
				ImageOptimizer::optimize('.' . $value);
				array_push($projectImgs, new ProjectImg(['img' => $value, 'hashimg' => BlurHash::encode('.' . $value)]));
			}
			$project->images()->saveMany($projectImgs);
		} else {
			$project->images()->saveMany([new ProjectImg(['img' => '/images/background/pexels-azra-tuba-demir-10463590.jpg'])]);
		}
		$plans = [];
		if ($request->plan) {
			foreach ($request->plan as $key => $value) {
				ImageOptimizer::optimize('.' . $value['img']);
				array_push($plans, new Plan(['img' => $value['img'], 'hashimg' => BlurHash::encode('.' . $value['img']), 'rooms' => $value['room'], 'price' => $value['price'], 'area' => $value['area'], 'description' => $value['description']]));
			}
			$project->plans()->saveMany($plans);
		}

		return redirect('admin/project')->withSuccess('Проект успешно обновлен');
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
