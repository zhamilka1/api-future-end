<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;
    protected $table = "notebooks";
    protected $fillable = [
        "initials",
        "birthday",
        "company",
        "number",
        "email",
        "photo_url"
    ];
}
