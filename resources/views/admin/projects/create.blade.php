@extends('layouts.admin_layout')

@section('title', 'Добавление проекта')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Добавление проекта</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}" class="text-info">Главная</a></li>
					<li class="breadcrumb-item active">Добавление проекта</li>
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
				<!-- form start -->
				<form action="{{ route('project.store') }}" method="POST" enctype='multipart/form-data'>
					@csrf
					<!-- general form elements -->
					<div class="card card-primary">
						<!-- /.card-header -->

						<div class="card-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label for="exampleInputEmail1">Название</label>
										<input type="text" class="form-control" name="title" placeholder="Введите название проекта" required>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Адресс</label>
										<input type="text" class="form-control" name="address" placeholder="Введите адресс проекта" required>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="form-group">
										<label for="exampleInputEmail1">Цена</label>
										<input type="text" class="form-control" name="price" placeholder="Цена проекта от" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Статус</label>
										<select class="form-control select2" name="status_id" style="width: 100%;">
											@foreach ($statusProjects as $statusProject)
											<option value="{{ $statusProject->id }}">{{ $statusProject->title }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Тип недвижимости</label>
										<select class="select2" multiple="multiple" name="type_reals[]" data-placeholder="Выберите тип недвижимости" style="width: 100%;">
											@foreach ($typeReals as $typeReal)
											<option value="{{ $typeReal->id }}">{{ $typeReal->title }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Страна</label>
										<select class="form-control select2" name="country_id" style="width: 100%;">
											@foreach ($counties as $country)
											<option value="{{ $country->id }}">{{ $country->title }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Город</label>
										<select class="form-control select2" name="city_id" style="width: 100%;">
											@foreach ($cities as $city)
											<option value="{{ $city->id }}">{{ $city->title }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Координаты</label>
										<div class="row">
											<div class="col-lg-6"><input type="text" class="form-control" name="coordinates1" placeholder="" required></div>
											<div class="col-lg-6"><input type="text" class="form-control" name="coordinates2" placeholder="" required></div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">

									<div class="form-group">
										<label for="exampleInputEmail1">Основное изображение</label>
										<div class="uploadImgWrap1 d-flex"></div>

										<div class="d-flex">
											<a href="" class="popup_selector  btn btn-block btn-info w-25" data-inputid="uploadImgWrap1">Выбрать</a>
										</div>
									</div>
								</div>




							</div>

						</div>
						<!-- /.card-body -->


					</div>
					<!-- /.card -->

					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Описание</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
							<div class="col-lg-12">
								<div class="form-group">
									<textarea name="description" class="editor"></textarea>
								</div>
							</div>
						</div>
					</div>

					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Важная информация</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
							<div class="repeaterWrap row">

								<div class="repeaterItem col-md-4">
									<a href="#" class="btn btn-tool closeRepeaterItem"><i class="fas fa-times"></i></a>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-check-circle"></i></span>
										</div>
										<input type="text" class="form-control" name="important_information[]" placeholder="">
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<a href="#" class="btn btn-primary repeaterItemAdd">Добавить пункт</a>
						</div>
					</div>

					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Home Amenities</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
							<div class="repeaterWrap row">
								<div class="repeaterItem col-md-4">
									<a href="#" class="btn btn-tool closeRepeaterItem"><i class="fas fa-times"></i></a>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-check-circle"></i></span>
										</div>
										<input type="text" class="form-control" name="home_amenities[]" placeholder="">
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<a href="#" class="btn btn-primary repeaterItemHomeAdd">Добавить пункт</a>
						</div>
					</div>

					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Планировки</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
							<div class="plansWrap">
								<div class="plansItem row">
									<a href="#" class="btn btn-tool closePlanItem"><i class="fas fa-times"></i></a>
									<div class="col-lg-3">
										<div class="form-group">
											<div class="plan_img0 d-flex"></div>
											<div class="d-flex">
												<a href="" class="popup_selector btn btn-block btn-info w-100" data-inputid="plan_img0">Выбрать изображение</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Количество комнат</label>
											<select class="form-control select2" name="plan[0][room]" style="width: 100%;">
												@foreach ($planRooms as $planRoom)
												<option value="{{ $planRoom->id }}">{{ $planRoom->title }}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Цена</label>
											<input type="text" class="form-control" name="plan[0][price]" placeholder="">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="exampleInputEmail1">Описание</label>
											<textarea name="plan[0][description]" class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<a href="#" class="btn btn-primary planItemAdd">Добавить планировку</a>
						</div>
					</div>

					<div class="card-footer text-center">
						<button type="submit" class="btn btn-success btn-lg">Добавить проект</button>
					</div>

				</form>
			</div>
			<!--/.col (left) -->
		</div>


	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection