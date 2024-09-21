<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['categorie_Name'];

    public function announces()
    {
        return $this->hasMany(Announce::class, 'categorie_id');
    }
}
