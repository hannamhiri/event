<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title','date_begin','date_end','time','location','price','image','id_categorie','id_user','description'];
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categorie'); 
    }
}
