<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'flag',
        'capital',
    ];
    public function departaments()
    {
        return $this->hasMany('App\Models\Departament', 'countries_id');
    }
    public function schools()
    {
        return $this->hasMany('App\Models\School', 'countries_id');
    }
    
}
