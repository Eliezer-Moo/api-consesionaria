<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    //protected $table = 'cars';

    protected $fillable = [
        'title',
        'description',
        'price',
    ];
    public function user(){
        $this->belongsTo('App\Models\User');
    }

}
