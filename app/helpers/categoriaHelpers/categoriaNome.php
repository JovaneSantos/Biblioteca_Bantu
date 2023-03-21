<?php

    use App\Models\Categoria;
    use Illuminate\Support\Facades\DB;
    use Carbon\Carbon;

    function categoria_nome($id){
    $cate=Categoria::findOrFail($id);
    return $cate->nome;
    }
?>
