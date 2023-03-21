@extends('layouts.main')
@section('titulo','dashboard')
@section('conteudo')
@include('partes.header')
@include('partes.aside1')
	<div class="wrapper">

		<div class="main-panel mb-4 pb-4">
			<div class="content content-documentation">
            <div class="container">
                <div class="page-inner">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-head" style="position:relative">
                           <h5 class="card-header" style="font-weight:900">Usuários do Sistema </h5>

                        <div class="card-body">
                            <div class="container">

                                <div class="row">
                                   <div class="col-md-12">
                                    <table id="basic-datatables" class="display table table-hover" cellspacing="0" width="100%">
                                        <thead class="bg-dark">
                                            <tr>
                                                <th class="text-light">Foto</th>
                                                <th class="text-light">Nome</th>
                                                <th class="text-light">Perfil</th>
                                                <th class="text-light">E-mail</th>
                                                <th class="text-light">Estado</th>
                                                <th class="text-light">Operações</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($users as $ele)
                                                <!-- Modal -->
                                                <div class="modal fade" id="addRowModal{{ $ele->id }}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content" style="padding: 0px;">
                                                            {{--<div class=" no-bd">
                                                                <h5 class="modal-title">
                                                            </div>--}}
                                                            <div class="modal-body text-center" style="padding: 0px;">

                                                                <div class="">
                                                                <button type="button" class="close text-danger" style="margin-right: 2% !important" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <img src="/img/{{ $ele->imagem}}" style="padding:0%; margin-top:-30px; width: 100%; height: 100%; object-fit: cover; object-position: center; ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <tr>
                                                <td>
                                                    <div class="avatar">
                                                        <img src="/img/{{ $ele->imagem}}" style="width: 7vh; height: 7vh; object-fit: cover; object-position: center; border-radius: 50%;" data-toggle="modal" data-target="#addRowModal{{ $ele->id }}">
                                                    </div>
                                                </td>
                                                <td>{{ $ele->name}}</td>
                                                <td>{{ $ele->perfil}}</td>
                                                <td>{{ $ele->email}}</td>
                                                <td>2011/04/25</td>
                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <button class="btn btn-dark btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">

                                                        </button>
                                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                                            <li><a class="dropdown-item" href="{{route('edit_users',$ele->id)}}">Editar        <i class="fa fa-edit text-info"></i></a></li>
                                                            <li><a class="dropdown-item" href="{{route('destroy_users',$ele->id)}}">Eliminar   <i class="fa fa-times text-danger"></i></a></li>
                                                            <li><a class="dropdown-item" href="{{route('purge_users',$ele->id)}}">Purgar       <i class="fa fa-times text-danger"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
<script src="/meus_links/sweetalert2.all.min.js"></script>


    @if (session('admin.user.destroy.success'))
    <script>
        Swal.fire(
            "Usuário Eliminado com sucesso!",
            '',
            'error'
        )
    </script>
@endif
    @if (session('admin.user.destroy.error'))
        <script>
            Swal.fire(
                'Erro ao Eliminar Usuário!',
                '',
                'error'
            )
        </script>
    @endif
    @if (session('admin.user.purge.success'))
        <script>
            Swal.fire(
                'Usuário Purgado com sucesso!',
                '',
                'success'
            )
        </script>
    @endif
    @if (session('admin.user.purge.error'))
        <script>
            Swal.fire(
                'Erro ao Purgar Usuário!',
                '',
                'success'
            )
        </script>
    @endif


@endsection
