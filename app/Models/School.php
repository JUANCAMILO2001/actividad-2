<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table = 'schools';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'address',
        'phone',
        'countries_id',
    ];

    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'countries_id');
    }
    public function users()
    {
        return $this->hasMany('App\Models\User', 'schools_id');
    }
}
