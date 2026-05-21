<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class ProdutosModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'produtos';

    protected $primaryKey = 'id';


    protected $fillable = [
        'nome',
        'imagem',
        'descricao',
        'id_empresa'
    ];

    protected $hidden = [
    ];
    

    public function getProdutos()
    {
        $result = DB::table('produtos as p')
            ->select(
                'p.id',
                'p.imagem',
                'p.nome',
                'p.descricao',
                'e.nome as nome_empresa',
                DB::raw("DATE_FORMAT(p.created_at, '%d/%m/%Y %H:%i:%s') as data_criacao_formatada"),
                'p.created_at',
            )
            ->join('empresas as e', 'e.id', '=', 'p.id_empresa')
            ->whereNull('p.deleted_at')
            ->orderBy('p.id', 'desc')
            ->get();

        //print_r($result);die;

        return $result;
    }

    public function getProdutosIndex()
    {
        $result = DB::table('produtos as p')
            ->select(
                'p.id',
                'p.imagem',
                'p.nome',
                'p.descricao',
                'e.nome as nome_empresa',
                DB::raw("DATE_FORMAT(p.created_at, '%d/%m/%Y %H:%i:%s') as data_criacao_formatada"),
                'p.created_at',
            )
            ->join('empresas as e', 'e.id', '=', 'p.id_empresa')
            ->whereNull('p.deleted_at')
            ->orderBy('p.id', 'desc')
            ->limit(10)
            ->get();

        //print_r($result);die;

        return $result;
    }

    public function getProdutosByEmpresa($id){
        $result = DB::table('produtos as p')
            ->select(
                'p.id',
                'p.imagem',
                'p.nome',
                'p.descricao',
                'e.nome as nome_empresa',
                DB::raw("DATE_FORMAT(p.created_at, '%d/%m/%Y %H:%i:%s') as data_criacao_formatada"),
                'p.created_at',
            )
            ->join('empresas as e', 'e.id', '=', 'p.id_empresa')
            ->where('p.id_empresa', '=', $id)
            ->whereNull('p.deleted_at')
            ->orderBy('p.id', 'desc')
            ->get();

        //print_r($result);die;

        return $result;
    }

    public function empresa()
    {
        return $this->belongsTo(EmpresasModel::class, 'id');
    }
}
