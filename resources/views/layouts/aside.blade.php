		<!-- Sidebar -->
		<div class="sidebar">

			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
                            @if (is_null(auth::user()->imagem))
								<img src="/img/user.png" alt="..." class="avatar-img rounded-circle">
                                @else
                                <a href="{{--  --}}"><img src="/img/{{auth::user()->imagem}}" alt="..." class="avatar-img rounded-circle"></a>
                            @endif
						</div>

						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{auth::user()->username}}
                                    @if (auth::user()->perfil=="Usuário Normal")
                                        <span class="user-level">
                                        </span>
                                    @else
                                        <span class="user-level">
                                            {{ auth::user()->perfil }}
                                        </span>
                                   @endif
								</span>
							</a>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="{{Route('dash')}}">
								<i class="fas fa-home"></i>
								<p>Página Inicial</p>
								<span class="badge badge-count"></span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{Route('departamentos')}}">
								<i class="fas fa-layer-group"></i>
								<p>Departamentos</p>
							</a>
						</li>

                        <li class="nav-item">
							<a data-toggle="collapse" href="#custompages">
								<i class="fas fa-layer-group"></i>
								<p>Funcionários</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="custompages">
								<ul class="nav nav-collapse">
                                    <li>
										<a href="{{Route('funcionarios')}}">
											<span class="sub-item">Listar Funcionários</span>
										</a>
									</li>
									<li>
										<a href="{{ route('funcionario_cadastrar') }}">
											<span class="sub-item">Cadastrar Funcionários</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

                        <li class="nav-item">
							<a href="{{Route('index_users')}}">
								<i class="fas fa-layer-group"></i>
								<p>Usuários</p>
							</a>
						</li>

                        <li class="nav-item">
							<a data-toggle="collapse" href="#Categoria">
								<i class="fas fa-layer-group"></i>
								<p>Categoria</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="Categoria">
								<ul class="nav nav-collapse">
                                    <li>
										<a href="{{route('categoria')}}">
											<span class="sub-item">Listar Categorias</span>
										</a>
									</li>
                                    <li>
										<a href="{{route('categoria_criar')}}">
											<span class="sub-item">Cadastrar Categorias</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

                        <li class="nav-item">
							<a data-toggle="collapse" href="#Salarios">
								<i class="fas fa-layer-group"></i>
								<p>Salarios</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="Salarios">
								<ul class="nav nav-collapse">
                                    <li>
										<a href="{{route('processar')}}">
											<span class="sub-item">Processar Salários</span>
										</a>
									</li>
									{{--<li>
										<a href="{{ route('folha') }}">
											<span class="sub-item">Visualizar Salários</span>
										</a>
									</li> --}}
                                    <li>
										<a href="{{ route('folha_index') }}">
											<span class="sub-item">Visualizar Salários</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
                        <li class="nav-item">
							<a href="{{-- route('fff') --}}">
							<i class="fas fa-map-marker-alt"></i>
								<p>Comunicados</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('fff')}}">
							<i class="fas fa-map-marker-alt"></i>
								<p>Faltas</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="{{-- route('justificar_falta') --}}">
								<i class="far fa-chart-bar"></i>
								<p>Faltas Justificadas</p>
							</a>
						</li>

                        <li class="nav-item">
							<a href="{{ route('mensagem_index') }}">
								<i class="far fa-chart-bar"></i>
								<p>Mensagens</p>
							</a>
						</li>


                        <li class="nav-item">
							<a data-toggle="collapse" href="#info_empresa">
								<i class="fas fa-layer-group"></i>
								<p>Info. Empresa</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="info_empresa">
								<ul class="nav nav-collapse">
                                    @if (empty($tem_Empresa))
                                    <li>
										<a href="{{route('info_empresa')}}">
											<span class="sub-item">Cadastrar Empresa</span>
										</a>
									</li>
                                     @else
									<li>
										<a href="{{route('editar_empresa')}}">
											<span class="sub-item">Editar Empresa</span>
										</a>
									</li>
                                    <li>
										<a href="{{ route('visualizar_info_empresa')}}">
											<span class="sub-item">Visualizar Empresa</span>
										</a>
									</li>
                                     @endif
								</ul>
							</div>
						</li>

						{{--<li class="nav-item">
							<a href="#submenu">
								<i class="fas fa-bars"></i>
								<p>Treinamentos</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#submenu">
								<i class="fas fa-bars"></i>
								<p>Recrutamentos</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="logs.html">
								<i class="fas fa-bars"></i>
								<p>logs de actividade</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#submenu">
								<i class="fas fa-bars"></i>
								<p>Relacionado</p>
							</a>
						</li>--}}
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
