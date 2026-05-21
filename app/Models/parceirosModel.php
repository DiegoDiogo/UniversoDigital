<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class parceirosModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'parceiros';

    protected $primaryKey = 'id';


    protected $fillable = [
        'nome',
        'imagem',
    ];

    protected $hidden = [

    ];
    

    public function getParceiros()
    {
        $result = DB::table('parceiros as p')
            ->select(
                'p.id',
                'p.nome',
                'p.imagem',
            )
            ->whereNull('p.deleted_at')
            ->orderBy('p.id', 'desc')
            ->get();

        //print_r($result);die;

        return $result;
    }
}
