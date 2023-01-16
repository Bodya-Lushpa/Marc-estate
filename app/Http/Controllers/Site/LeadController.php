<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\LeadRequest;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{

	public function store(LeadRequest $request)
	{
		$lead = new Lead();
		$lead->name = $request->name;
		$lead->phone = $request->phone;
		$lead->title_form = $request->title_form;
		$lead->title_project = $request->title_project;
		$lead->text = $request->text;
		$lead->save();

		$data = array('name' => $request->name, 'phone' => $request->phone, 'text' => $request->text, 'title_form' => $request->title_form, 'title_project' => $request->title_project);


		return Mail::send('mail', $data, function ($message) {
			$message->to(env('MAIL_TO'))->subject('Новая заявка с сайта mark estate');
			$message->from('info@markestate.kz', 'Mark Estate');
		});
	}
}
