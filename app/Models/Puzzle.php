<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puzzle extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'fk_categorie', 'description', 'image', 'prix', 'fk_fabricant'];
}
