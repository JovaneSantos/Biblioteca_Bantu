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
                                <form action="{{route('categoria_store')}}" role="form" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @include('_formCategoria.index')
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
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
@endsection


