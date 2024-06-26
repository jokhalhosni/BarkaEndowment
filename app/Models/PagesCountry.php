<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagesCountry extends Model
{
    use HasFactory;
    protected $fillable = ["CountryName", "CountryFlag", "created_at", "updated_at"];
}
