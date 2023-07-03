<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comic extends Model
{
    use HasFactory;

    // DA USARE PER IL PRIMO METODO
    protected $fillable = ["title", "thumb", "description", "type", "sale_date", "series", "price"];
}