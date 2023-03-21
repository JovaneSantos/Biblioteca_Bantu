<?php
/*
use App\Services\ExemploService;
use  App\Models\Presenca;
use App\Models\Test_funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

require_once __DIR__ . '/vendor/autoload.php';

$funcionarios = DB::table('test_funcionario')
->whereNotIn('id', function($query) {
    $query->select('id_funcionario')
        ->from('presencas')
        ->whereDate('data_entrada', Carbon::now()->format('Y-m-d'));
})->get();

$dados = [
    ['data_falta'],
    ['id_funcionario'],

];


$service = new ExemploService();
$service->salvarDados($dados);
*/
