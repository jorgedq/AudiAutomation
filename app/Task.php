<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $table='tasks';
    protected $guarded = ['id'];
    protected $fillable = ['tittle','description','type_id'];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }
    
}
