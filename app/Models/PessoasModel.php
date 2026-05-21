<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class PessoasModel extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'users';

    protected $primaryKey = 'id';


    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password', 
    ];
    

    public function getPessoas()
    {
        $result = DB::table('users as p')
            ->select(
                'p.id',
                'p.name',
                'p.email',
                DB::raw("DATE_FORMAT(p.created_at, '%d/%m/%Y %H:%i:%s') as data_criacao_formatada"),
                'p.created_at',
            )
            ->whereNull('p.deleted_at')
            ->orderBy('p.id', 'desc')
            ->get();

        //print_r($result);die;

        return $result;
    }
}
