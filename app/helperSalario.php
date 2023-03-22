<?php

    use App\Models\Folha;
    use Illuminate\Support\Facades\DB;
    use Carbon\Carbon;

    function total_folha($mes){
        $ele=DB::table('folhas')->where('mes',$mes)->first();
        //dd($ele);
        $total_folha=DB::table('folha_funcionarios')->where('mes',$mes)->count();
        //dd($total_folha);
        return $total_folha;
    }
?>
