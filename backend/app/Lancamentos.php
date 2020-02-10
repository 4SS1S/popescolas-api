<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lancamentos extends Model
{
    protected $table = 'lancamento';

    protected $primaryKey = 'id_lancamento';

    protected $fillable = [
        'valor',
        'fk_atendente',
        'fk_unidade',
        'data',
        'fk_caixa',
        'fk_parcela',
        'fk_forma'
    ];

    protected $timestamps = true;

    public function colaborador()
    {
        return $this->hasOne(Usuario::class,'id_user','fk_atendente');
    }

    public function unidade()
    {
        return $this->hasOne(Unidade::class, 'id_unidade','fk_unidade');
    }

    public function caixa()
    {
        return $this->hasOne(Caixa::class, 'id_caixa', 'fk_caixa');
    }

    public function parcela()
    {
        return $this->hasOne(Parcelas::class, 'id_parcela', 'fk_parcela');
    }

    public function forma()
    {
        return $this->hasOne(ModoDePagamento::class, 'id_modo', 'fk_forma');
    }
}
