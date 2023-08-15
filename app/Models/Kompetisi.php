<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetisi extends Model
{
    use HasFactory;
    protected $table = 'kompetisi';
    protected $guarded = [];
    

    // public function maps(){
    //     return $this->hasMany(Map::class);
    // }

    public function maps()
    {
        return $this->hasMany(Map::class, 'kompetisi_id');
    }

}
