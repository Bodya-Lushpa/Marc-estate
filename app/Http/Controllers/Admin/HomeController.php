<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$news_count = News::all()->count();
		$project_count = Project::all()->count();
		$user_count = User::all()->count();

		return view('admin.home.index', [
			'news_count' => $news_count,
			'project_count' => $project_count,
			'user_count' => $user_count,
		]);
	}
}
