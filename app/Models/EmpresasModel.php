<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class EmpresasModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'empresas';

    protected $primaryKey = 'id';


    protected $fillable = [
        'nome',
        'imagem',
    ];

    protected $hidden = [
    
    ];
    

    public function getEmpresas()
    {
        $result = DB::table('empresas as p')
            ->select(
                'p.id',
                'p.nome',
                'p.imagem',
                DB::raw("DATE_FORMAT(p.created_at, '%d/%m/%Y %H:%i:%s') as data_criacao_formatada"),
                'p.created_at',
            )
            ->whereNull('p.deleted_at')
            ->orderBy('p.id', 'desc')
            ->get();

        //print_r($result);die;

        return $result;
    }

    public function produtos()
    {
        return $this->hasMany(ProdutosModel::class, 'id_empresa');
    }
}
