<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="#" class="brand-link">
					<img src="{{ asset('admin-assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">LARAVEL SHOP</span>
				</a>
				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user (optional) -->
					<nav class="mt-2">
						
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
								with font-awesome or any other icon font library -->
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>Dashboard</p>
								</a>																
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="nav-icon  fas fa-users"></i>
									<p>
										Student
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="{{route('students.list')}}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>All Students</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('students.create')}}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Admission Form</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Student Promotion</p>
										</a>
									</li>
								</ul>
							</li>
										
						</ul>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
</aside>