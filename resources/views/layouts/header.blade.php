<div class="main-header" data-background-color="purple">
			<!-- Logo Header -->
			<div class="logo-header">

				<a href="index.html" class="logo">
					<h2 class="text-white fw-bold mt-3">SGRH</h2>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">

				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						   <!--<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
               <input type="text" placeholder="Procure algo aqui ..." class="form-control">-->
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								{{-- (($tem_not)<1)?'':'<spanclass="notification">'.$tem_not.'</span>' --}}
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
                                    {{--@if ($tem_not == 0)
                                    <div class="dropdown-title">Nemhuma notificação</div>
                                    @elseif($tem_not ==1)
                                    <div class="dropdown-title">Você tem {{ $tem_not }} notificação</div>
                                    @else
                                    <div class="dropdown-title">Você tem {{ $tem_not }} notificações </div>
                                    @endif --}}
								</li>
								<li>
									<div class="notif-center">
                                          {{--   @foreach (  $notif as $not )
                                        <a href="#">
											<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
											<div class="notif-content">
												<span class="block">

													{{ $not->remetente }} deixou uma mensagem apartir do site
												</span>
												<span class="time">12 minutes ago</span>
											</div>
										</a>
                                        @endforeach --}}
										{{--<a href="#">
											<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													Novo funcionário registrado
												</span>
												<span class="time">5 minutes ago</span>
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad bloqueiou um admin
												</span>
												<span class="time">12 minutes ago</span>
											</div>
										</a> --}}
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">Ver mais notificações<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar avatar-online avatar-sm">
								@if (is_null(auth::user()->imagem))
									<img src="/img/user.png" alt="..." class="avatar-img rounded-circle">
									@else
									<img src="/img/{{auth::user()->imagem}}" alt="..." class="avatar-img rounded-circle">
								@endif
                                </div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<li>
									<div class="user-box">
										<div class="avatar-lg ">
										{{--@if (is_null(auth::user()->imagem))
											<img src="/img/user.png" alt="..." class="avatar-img rounded-circle">
											@else
											<img src="/img/{{auth::user()->imagem}}" alt="..." class="avatar-img rounded-circle" style="width:50px !important; height: 50px !important;">
										@endif--}}
											<div class="u-text">
											<h4>{{auth::user()->nome}}</h4>
											<p class="text-muted" style="text-align:inline;">{{auth::user()->name}}</p>
										</div>
									</div>
								</li>
								<li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Caixa de entrada</a>
									<a class="dropdown-item" href="{{ route('admin.user_perfil')}}">Perfil</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Definições da Conta</a>
									<div class="dropdown-divider"></div>
								  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="auth-login-basic.html">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">
                            Sair
                      </span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>


