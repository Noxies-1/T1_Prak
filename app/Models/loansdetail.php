<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loansdetail extends Model
{
    protected $table    = 'loan_detail';
    protected $fillable = ['loan_id', 'book_id', 'is_return'];
 
    protected $casts = [
        'is_return' => 'boolean',
    ];
 
    // Detail pinjaman adalah bagian dari satu transaksi pinjaman
    public function loan()
    {
        return $this->belongsTo(loans::class, 'loan_id');
    }
 
    // Detail pinjaman merujuk ke satu buku
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
 
    // Satu detail pinjaman bisa menghasilkan satu data pengembalian
    public function return()
    {
        return $this->hasOne(returns::class, 'loan_detail_id');
    }
}
