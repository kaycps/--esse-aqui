<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectProcess extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'select_processes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dataInicio', 'dataFim', 'ativo', 'nome', 'descrição'];

     public function careers()
    {
        return $this->belongsToMany('App\Career')->withPivot('vagas');
    }

    public function quotas()
    {
        return $this->belongsToMany('App\Quotum')->withPivot('vagas');
    }

    public function inscriptions()
    {
        return $this->hasMany('App\Inscription');
    }
}
