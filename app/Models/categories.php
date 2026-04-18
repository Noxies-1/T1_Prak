<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
protected $fillable = ['category'];

    // Satu kategori punya banyak buku
    public function books()
    {
        return $this->hasMany(Book::class, 'category_id');
    }
}
