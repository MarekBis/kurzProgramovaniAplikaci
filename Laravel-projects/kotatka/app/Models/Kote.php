<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kote extends Model
{
    use HasFactory;
        //muzem zde specifikovat nekolik veci
    //specikikovat k jake tabulce se tento model vaze
    protected $table = "kote";
    //dalse musime rict jaky je primarni klic tabulky
    protected $primaryKey = "id";
}
