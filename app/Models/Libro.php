<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = "libros";
    protected $fillable = ['titulo', 'editorial', 'precio'];
    
    use HasFactory;

    public function autor(){
        return $this->belongsTo(Autor::class);
    }
}
