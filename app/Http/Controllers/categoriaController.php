<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\categoria\CategoriaFormRequest;
use App\Models\Categoria;
use App\Models\InfoEmpresa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class categoriaController extends Controller
{
  public function index(){
    $cat=Categoria::all();
    return view('categoria.index',compact('cat'));
  }
  public function criar(){
    return view('categoria.criar.index');
  }

  public function store(Request $req){

   /* $info=InfoEmpresa::first();

    $cat=Categoria::create([
        'nome'=>$req->nome,
        'salario_base'=>$req->salario_base,
        'id_empresa'=>$info->id,
    ]);*/

    //dd($req);
    return redirect()->back()->with('success','Categoria cirada com sucesso');

  }
  public function edit(Request $req, $id){

    $cai_ele=DB::table('categorias')->where('id',$id)->first();

    return view('categoria.edit.index',compact('cai_ele'));
  }

  public function update(Request $req,$id){

    /*$info_emp=InfoEmpresa::first();

    DB::table('categorias')->where('id',$id)->update([
        'nome'=>$req->nome,
        'salario_base'=>$req->salario_base,
        'id_empresa'=>$info_emp->id,
    ]);*/

    return redirect()->back()->with('success','Actualização feita com sucesso');
  }

  public function delete(Request $req,$id){
     DB::table('categorias')->where('id',$id)->delete();
    return redirect()->back()->with('success','Categoria apagada com sucesso');

  }
}
