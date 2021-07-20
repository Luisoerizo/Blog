<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

        //relación muchos a muchos
        public function tags()
        {
            return $this->belongsToMany(Post::class);
        }
}
