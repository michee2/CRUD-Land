<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ["Libelle","description","code_indicatif","Continent",
    "population","capitale","monnaie","langue","Superficie","est_laique"];
}
