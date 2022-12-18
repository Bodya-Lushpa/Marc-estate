@extends('layouts.admin_layout')

@section('title', 'Все города')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6 d-flex">
				<h1 class="m-0">Все города</h1>
				<a href="{{ route('city.create') }}" class="btn bg-gradient-success ml-4">Добавить</a>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
					<li class="breadcrumb-item active">Все города</li>
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
				<table id="news" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th style="width: 3%;">ID</th>
							<th style="width: 38%;">Название</th>
							<th style="width: 20%;">Дата добавление</th>
							<th style="width: 12%;">Действие</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($cities as $city)
						<tr>
							<td>{{ $city['id'] }}</td>
							<td>{{ $city['title'] }}</td>
							<td>{{ $city['created_at'] }}</td>
							<td class="text-right">
								<div class="d-flex justify-content-end">
									<a href="{{ route('city.edit', $city['id']) }}" type="button" class="mr-2 btn btn-success toastsDefaultSuccess"><i class="fas fa-pen"></i></a>
									<form action="{{ route('city.destroy', $city['id']) }}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger toastsDefaultDanger btn-delete"><i class="fas fa-times"></i></button>
									</form>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Название</th>
							<th>Дата добавление</th>
							<th>Действие</th>
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