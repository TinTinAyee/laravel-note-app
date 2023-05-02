<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','image','author_id','status'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}