<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$news = News::orderBy('created_at', 'DESC')->get();
		return view('admin.news.index', [
			'news' => $news
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.news.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(NewsRequest $request)
	{
		$news = new News();
		$news->title = $request->title;

		$news->img = $request->img[0];
		$news->text = $request->text;
		$news->save();

		return redirect()->back()->withSuccess('Новость успешно добавлена');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function show(News $news)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function edit(News $news)
	{
		return view('admin.news.edit', [
			'news' => $news
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function update(NewsRequest $request, News $news)
	{
		$news->title = $request->title;
		$news->img = $request->img[0];
		$news->text = $request->text;
		$news->save();

		return redirect()->back()->withSuccess('Новость успешно обновлена');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(News $news)
	{
		$news->delete();

		return redirect()->back()->withSuccess('Новость успешно удалена');
	}
}
