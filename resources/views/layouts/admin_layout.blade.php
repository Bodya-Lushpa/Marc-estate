<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Админ-панель - @yield('title')</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="/adminDist/plugins/fontawesome-free/css/all.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="/adminDist/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="/adminDist/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="/adminDist/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="/adminDist/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="/adminDist/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="/adminDist/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="/adminDist/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="/adminDist/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="/adminDist/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="/adminDist/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="/adminDist/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="/adminDist/plugins/summernote/summernote-bs4.min.css">
	<link rel="stylesheet" href="/adminDist/dist/css/colorbox.css">
	<link rel="stylesheet" href="/adminDist/admin.css">
	<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon" />
	<link rel="icon" href="/images/favicon.png" type="image/x-icon" />
	</link>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="/adminDist/dist/img/logo-preload.svg" alt="AdminLTELogo" width="160">
		</div>

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>

				<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
					Выйти
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>

			</ul>


		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="{{ route('homeAdmin') }}" class="brand-link">
				<img src="/adminDist/dist/img/logo-head.svg" alt="AdminLTE Logo" class="w-50">
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="/adminDist/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a class="d-block"> {{ Auth::user()->name }} </a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a href="{{ route('homeAdmin') }}" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-home"></i>
								<p>
									Проекты
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{ route('project.index') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Все проекты</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('project.create') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Добавить проект</p>
									</a>
								</li>
							</ul>
						</li>
						@role('admin')
						<li class="nav-item">
							<a href="{{ route('lead.index') }}" class="nav-link">
								<i class="nav-icon fas fa-list"></i>
								<p>
									Заявки
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-newspaper"></i>
								<p>
									Новости
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{ route('news.index') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Все новости</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('news.create') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Добавить новость</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-handshake"></i>
								<p>
									Партнеры
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{ route('partner.index') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Все партнеры</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('partner.create') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Добавить партнеров</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-info-circle"></i>
								<p>
									Поля проектов
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fas fa-circle nav-icon"></i>
										<p>
											Статусы
											<i class="right fas fa-angle-left"></i>
										</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="{{ route('status-project.index') }}" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Все статусы</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('status-project.create') }}" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Добавить статус</p>
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fas fa-circle nav-icon"></i>
										<p>
											Страна
											<i class="right fas fa-angle-left"></i>
										</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="{{ route('country.index') }}" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Все страны</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('country.create') }}" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Добавить страну</p>
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fas fa-circle nav-icon"></i>
										<p>
											Город
											<i class="right fas fa-angle-left"></i>
										</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="{{ route('city.index') }}" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Все города</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('city.create') }}" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Добавить город</p>
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fas fa-circle nav-icon"></i>
										<p>
											Комнатность
											<i class="right fas fa-angle-left"></i>
										</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="{{ route('plan-room.index') }}" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Все комнатности</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('plan-room.create') }}" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Добавить комнатность</p>
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fas fa-circle nav-icon"></i>
										<p>
											Тип недвижимости
											<i class="right fas fa-angle-left"></i>
										</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<a href="{{ route('type-real.index') }}" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Все недвижимости</p>
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('type-real.create') }}" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p>Добавить недвижимость</p>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>
									Менеджеры
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{ route('users.index') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Все менеджеры</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('users.create') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Добавить менеджера</p>
									</a>
								</li>
							</ul>
						</li>
						@endrole
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			@yield('content')
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="/adminDist/plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="/adminDist/plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="/adminDist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="/adminDist/plugins/select2/js/select2.full.min.js"></script>
	<!-- ChartJS -->
	<script src="/adminDist/plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="/adminDist/plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="/adminDist/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="/adminDist/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="/adminDist/plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- DataTables  & Plugins -->
	<script src="/adminDist/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="/adminDist/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="/adminDist/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/adminDist/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="/adminDist/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="/adminDist/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="/adminDist/plugins/jszip/jszip.min.js"></script>
	<script src="/adminDist/plugins/pdfmake/pdfmake.min.js"></script>
	<script src="/adminDist/plugins/pdfmake/vfs_fonts.js"></script>
	<script src="/adminDist/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="/adminDist/plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="/adminDist/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
	<!-- daterangepicker -->
	<script src="/adminDist/plugins/moment/moment.min.js"></script>
	<script src="/adminDist/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="/adminDist/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="/adminDist/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="/adminDist/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="/adminDist/dist/js/adminlte.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="/adminDist/dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="/adminDist/dist/js/pages/dashboard.js"></script>
	<script src="/adminDist/dist/js/jquery.colorbox-min.js"></script>
	<script src="https://cdn.tiny.cloud/1/ku9049marx2dt7adwhttidm8hn9htorq4t3mlbb0vpt0nngo/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
	<script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script>
	<script src="/adminDist/admin.js"></script>
</body>

</html>