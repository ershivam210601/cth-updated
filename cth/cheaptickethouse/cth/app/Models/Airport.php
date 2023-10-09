<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Airport extends Model
{
    use HasFactory;

    protected $table = 'airport';
    public static function all($columns = ['*']) {

    
    return parent::all($columns);

   
    }

   
}
