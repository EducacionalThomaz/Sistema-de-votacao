<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquete extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome','data_inicio','data_final'
    ];

    public function alternativas() {
        return $this->hasMany(Alternativa::class);
    }
}