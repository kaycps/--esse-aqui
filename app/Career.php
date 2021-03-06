<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'careers';

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
    protected $fillable = ['nome'];

    public function selectProcesses()
    {
        return $this->belongsToMany('App\SelectProcess')->withPivot('vagas');
    }
    
    public function inscription()
    {
        return $this->belongsTo('App\Inscription');
    }
}
