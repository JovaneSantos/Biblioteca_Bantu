@extends('layouts.main')
@section('titulo','dashboard')
@section('conteudo')
@include('partes.header')
@include('partes.aside1')
	<div class="wrapper">
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                            <div class="col-md-6" style="display:block; position:absolute">
                                <ul class="breadcrumbs" style="position:relative; left:800px">
                                    <li class="nav-home">
                                        <a href="{{ route('dash') }}">
                                            <i class="flaticon-home"></i>
                                        </a>
                                    </li>
                                    <li class="separator">
                                        <i class="flaticon-right-arrow"></i>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('site') }}">Site</a>
                                    </li>
                                    <li class="separator">
                                        <i class="flaticon-right-arrow"></i>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">Outro</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-primary bubble-shadow-small">
												<i class="fas fa-users"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category" style="">Usuários : {{ $totalUser }}</p>
												<h4 class="card-title"></h4>
                                                <a href="{{ route('index_users') }}" class="badge badge-danger">Ver <i class="fa fa-eye text-white"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-info bubble-shadow-small">
												<i class="far fa-newspaper"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Total Departamentos</p>
												<h4 class="card-title">{{ $t_dep }}</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-success bubble-shadow-small">
												<i class="far fa-chart-bar"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Total Funcionários</p>
												<h4 class="card-title">{{ $t_fun }}</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-secondary bubble-shadow-small">
												<i class="far fa-check-circle"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Salários</p>
												<h4 class="card-title">{{$tf}}</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						@if (auth::user()->perfil=="Usuário Normal")
                        <div class="col-md-9">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-secondary bubble-shadow-small">
												<i class="far fa-check-circle"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
													{{--<script>function entrada(){let data= new Date(); document.getElementById("falta").innerHTML=data.getHours()+":"+data.getMinutes()+":"+data.getSeconds();document.getElementById("falta").style.color="red";}</script>--}}
													<a  href="{{ route('marcarPresenca') }}" type="submit" class="card-category btn bg-white" style="margin-left: -15px;" {{--onclick="entrada()"--}}>Marcar Entrada</a>
											</div>
										</div>
										<div class="col-icon">
											<div class="icon-big text-center icon-secondary bubble-shadow-small">
												<i class="far fa-check-circle"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
                                            <div class="numbers">
                                                {{--<script>function entrada(){let data= new Date(); document.getElementById("falta").innerHTML=data.getHours()+":"+data.getMinutes()+":"+data.getSeconds();document.getElementById("falta").style.color="red";}</script>--}}
                                                <a  href="{{ route('marcarSaida') }}" type="submit" class="card-category btn bg-white" style="margin-left: -15px;" {{--onclick="entrada()"--}}>Marcar Saída</a>
                                        </div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        @endif
						<div class="col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-icon">
											<div class="icon-big text-center icon-secondary bubble-shadow-small">
												<i class="far fa-check-circle"></i>
											</div>
										</div>
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<p class="card-category">Faltas</p>
												<h4 class="card-title">{{$t_fa}}</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Estatísticas de Faltas</h3>
                                </div>
								<div class="card-body">
									<div id="chart-container" style="height: 60vh !important">
                                        <canvas id="barChart"></canvas>
                                    </div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Estatísticas de Salários</h3>
                                </div>
								<div class="card-body">
									<div id="chart-container_a" style="height: 60vh !important; padding-top:22px !important">
                                        <canvas id="myChart" style="width:100%;max-width:600px; "></canvas>
                                    </div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title fw-mediumbold">Funcionários Presentes</div>
                                    <div class="card-list">
                                            <div class="avatar-group">
                                                @foreach ( $f_presentes as $ele)
                                                        <div class="avatar avatar-online">
                                                            <img src="/img/{{ $ele->imagem }}" alt="..." class="avatar-img rounded-circle">
                                                        </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	@endsection
