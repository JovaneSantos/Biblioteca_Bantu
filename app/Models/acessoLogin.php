<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acessoLogin extends Model
{
    use HasFactory;
    protected $table = 'acesso_login';
    protected $fillable= [
        'user_id',
        'user_id',
        'ip_address',
        'nome',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
