<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    protected $table='types';
    protected $guarded = ['id'];
    protected $fillable = ['name','color'];

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
