<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'adresses';

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
    protected $fillable = ['Rua', 'numeroEndereço', 'cep', 'bairro', 'complemento', 'cidade', 'estado', 'pais', 'tipo'];

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
