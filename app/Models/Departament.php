<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    use HasFactory;
    protected $table = 'departaments';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'countries_id',
    ];

    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'countries_id');
    }
    public function users()
    {
        return $this->hasMany('App\Models\User', 'departaments_id');
    }
}
