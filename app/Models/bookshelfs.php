<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bookshelf extends Model
{
    protected $table    = 'bookshelfs';
    protected $fillable = ['code', 'name'];

    // Satu rak buku bisa menampung banyak buku
    public function books()
    {
        return $this->hasMany(Book::class, 'bookshelf_id');
    }

}
