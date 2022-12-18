@extends('layouts.admin_layout')

@section('title', 'Главная')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Dashboard</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3>{{ $news_count }}</h3>

						<p>Новостей</p>
					</div>
					<div class="icon">
						<i class="fas fa-newspaper"></i>
					</div>
					<a href="{{ route('news.index') }}" class="small-box-footer">Все новости <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-6">
				<div class="small-box bg-primary">
					<div class="inner">
						<h3>{{ $project_count }}</h3>

						<p>Проекты</p>
					</div>
					<div class="icon">
						<i class="fas fa-home"></i>
					</div>
					<a href="{{ route('project.index') }}" class="small-box-footer">Все проекты <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-6">
				<div class="small-box bg-warning">
					<div class="inner">
						<h3>{{ $user_count }}</h3>

						<p>Пользователи</p>
					</div>
					<div class="icon">
						<i class="fas fa-users"></i>
					</div>
					<a href="{{ route('users.index') }}" class="small-box-footer">Все пользователи <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

		</div>

	</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection