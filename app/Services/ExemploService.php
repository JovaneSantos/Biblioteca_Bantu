<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class ExemploService
{
    public function salvarDados($dados)
    {
        DB::table('faltas')->insert($dados);
    }
}
