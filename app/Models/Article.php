<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['titre','id_categorie','image','description' ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'id_categorie'); 
    }
}
