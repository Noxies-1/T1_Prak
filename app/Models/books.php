<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = [
        'title', 'author', 'year', 'publisher',
        'city', 'cover', 'bookshelf_id', 'category_id',
    ];
 
    // Buku disimpan di satu rak
    public function bookshelf()
    {
        return $this->belongsTo(Bookshelf::class, 'bookshelf_id');
    }
 
    // Buku termasuk dalam satu kategori
    public function category()
    {
        return $this->belongsTo(categories::class, 'category_id');
    }
 
    // Buku bisa muncul di banyak detail peminjaman
    public function loanDetails()
    {
        return $this->hasMany(loansdetail::class, 'book_id');
    }
}
