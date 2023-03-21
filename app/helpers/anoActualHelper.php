<?php

    use App\Models\Folha;
    use App\Models\InfoEmpresa;
    use Illuminate\Support\Facades\DB;
    use App\Models\FolhaFuncionario;
    use Carbon\Carbon;

    function anoActual(){
    $ano_actual=Carbon::now()->format('Y');
    $ano=intval($ano_actual);
    return $ano;
    }

    function empresa($id_empresa){
        $em=InfoEmpresa::findOrFail($id_empresa);
        return $em->nome;
    }

    function faltas_do_mes_actual(){
        $falta_fun=DB::table('faltas')->where('mes',Carbon::now()->format('m'))->where('ano')->get();
        return $falta_fun;
    }


    function temfalta($dia,$id_funcionario){
        $falta_fun=DB::table('faltas')
        ->where('mes',Carbon::now()->format('m'))
        ->where('ano',Carbon::now()->format('Y'))
        ->where('dia',$dia)
        ->where('id_funcionario',$id_funcionario)
        ->first();
        return $falta_fun;
    }

    function SalarioMes($mes){
        $sala=DB::table('folha_funcionarios')
        ->where('mes',$mes)
        ->where('ano',Carbon::now()->format('Y'))
        ->get()
        ->count();
        return $sala;
    }
?>
