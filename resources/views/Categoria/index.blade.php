@extends('layouts.main')
@section('title','Dashboard')
@section('conteudo')
@include('partes.header')
@include('partes.aside1')
<div class="wrapper">
    <div class="main-panel">
        <div class="content">
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
                        <h5 class="card-header" style="font-weight:900">Cadastrar Categória</h5>

                    <div class="card-body">
                        <div class="container">

                            <div class="row">
                               <div class="col-md-12">
                                <table id="basic-datatables" class="display table table-hover" cellspacing="0" width="100%">
                                    <thead class="bg-dark">
                                        <tr>
                                            <th scope="col" class="text-light">#ID</th>
                                            <th scope="col" class="text-light">Nome</th>
                                            <th scope="col" class="text-light">Sálario Base</th>
                                            <th scope="col" class="text-light" style="">Operações</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ( $cat as $ct )
                                        <tr>
                                            <th scope="row">{{ $ct->id }}</th>
                                            <td>{{ $ct->nome}}</td>
                                            <td>{{ $ct->salario_base }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{route('categoria_edit',$ct->id)}}" class="btn btn-link btn-simple-primary btn-lg" data-original-title="Edit Task">
                                                         <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a  href="{{ route('categoria_delete',$ct->id) }}" data-toggle="tooltip"  class="btn btn-link btn-simple-danger" id="alert_demo_7" data-original-title="Remove" >
                                                         <i class="fa fa-times"></i>
                                                     </a>
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
@endsection
