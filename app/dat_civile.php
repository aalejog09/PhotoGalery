<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\persona;
class dat_civile extends Model
{
    //

    public function personas(){

        return $this->hasMany(persona::class);
    }
    protected $fillable=["descripcion"];
    protected $table="dat_civiles";
}
