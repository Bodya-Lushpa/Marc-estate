@extends('layouts.admin_layout')

@section('title', 'Редактирование партнеров')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Редактирование партнеров</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}" class="text-info">Главная</a></li>
					<li class="breadcrumb-item active">Редактирование партнеров</li>
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
					<form action="{{ route('partner.update', $partner['id']) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Название</label>
										<input type="text" class="form-control" name="title" value="{{ $partner['title'] }}" placeholder="Введите название типа недвижимости" required>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label for="exampleInputEmail1">Изображение</label>
										<div class="uploadImgWrap1 d-flex">
											<div class="uploadImgClose"><img src="{{ $partner['path'] }}" alt="" class="uploadImg d-block mb-4 mr-2">
												<input type="text" class="d-none" name="img[]" value="{{ $partner['path'] }}">
											</div>
										</div>
										<div class="d-flex">
											<a href="" class="popup_selector ml-2 btn btn-block btn-info w-25" data-inputid="uploadImgWrap1">Выбрать</a>
										</div>
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