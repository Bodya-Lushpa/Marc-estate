@extends('layouts.admin_layout')

@section('title', 'Все заявки')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6 d-flex">
				<h1 class="m-0">Все заявки</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}" class="text-info">Главная</a></li>
					<li class="breadcrumb-item active">Все заявки</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
	<div class="container-fluid">

		<div class="card">
			@if (session('success'))
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h5><i class="icon fas fa-check"></i> {{ session('success') }} </h5>
			</div>
			@endif

			<!-- /.card-header -->
			<div class="card-body">

				<table id="leads" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th style="width: 3%;">ID</th>
							<th>Название формы</th>
							<th>Название проекта</th>
							<th>Имя</th>
							<th>Телефон</th>
							<th>Сообщение</th>
							<th>Дата</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($leads as $key => $lead)
						<tr>
							<td>{{ $key + 1 }}</td>
							<td>{{ $lead['title_form'] }}</td>
							<td>{{ $lead['title_project'] }}</td>
							<td>{{ $lead['name'] }}</td>
							<td>{{ $lead['phone'] }}</td>
							<td>{{ $lead['text'] }}</td>
							<td>{{ $lead['created_at'] }}</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th style="width: 3%;">ID</th>
							<th>Название формы</th>
							<th>Название проекта</th>
							<th>Имя</th>
							<th>Телефон</th>
							<th>Сообщение</th>
							<th>Дата</th>
						</tr>
					</tfoot>
				</table>
			</div>
			<!-- /.card-body -->
		</div>


	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection