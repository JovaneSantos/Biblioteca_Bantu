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
                           <h5 class="card-header" style="font-weight:900">Editar Usuários</h5>

                        <div class="card-body">
                            <div class="container">

                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="{{route('update_users',$users->id)}}" role="form" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @include('_formUser.index')
                                            <button type="submit" class="btn btn-primary">Actualizar</button>
                                        </form>
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


    @if (session('admin.user.update.success'))
        <script>
            Swal.fire(
                'Usuário actualizado com sucesso!',
                '',
                'success'
            )
        </script>
    @endif

    @if (session('admin.user.update.error'))
        <script>
            Swal.fire(
                'Erro ao actualizar Usuário!',
                '',
                'error'
            )
        </script>
    @endif

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
