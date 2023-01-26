@extends('layouts.admin_layout')

@section('title', 'Редактирование города')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Редактирование города</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}" class="text-info">Главная</a></li>
					<li class="breadcrumb-item active">Редактирование города</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
	<div class="container-fluid">

		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				@if (session('success'))
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h5><i class="icon fas fa-check"></i> {{ session('success') }} </h5>
				</div>
				@endif
				<!-- general form elements -->
				<div class="card card-primary">
					<!-- /.card-header -->
					<!-- form start -->
					<form action="{{ route('city.update', $city['id']) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="card-body">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Страна</label>
										<select class="form-control select2" name="country_id" style="width: 100%;" required>
											@foreach ($countries as $country)
											<option value="{{ $country->id }}" @if($country->id == $city->country_id) selected @endif>{{ $country->title }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Регион</label>
										<select class="form-control select2" name="region_id" style="width: 100%;" required>
											<option disabled selected>Не выбран</option>
											@foreach ($regions as $region)
											<option value="{{ $region->id }}">{{ $region->title }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Город</label>
										<input type="text" class="form-control" name="title" value="{{ $city['title'] }}" placeholder="Введите название статуса" required>
									</div>
								</div>

							</div>

						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Обновить</button>
						</div>
					</form>
				</div>
				<!-- /.card -->



			</div>
			<!--/.col (left) -->
		</div>


	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection