<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loans extends Model
{
    protected $fillable = [
        'user_npm', 'loan_at', 'return_at',
    ];
 
    protected $casts = [
        'loan_at'   => 'date',
        'return_at' => 'date',
    ];
 
    // Pinjaman dimiliki oleh satu user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_npm', 'npm');
    }
 
    // Satu pinjaman bisa terdiri dari banyak buku (detail)
    public function loanDetails()
    {
        return $this->hasMany(loansdetail::class, 'loan_id');
    }
 
    // Helper: ambil semua buku yang dipinjam melalui detail
    public function books()
    {
        return $this->hasManyThrough(
            Book::class,
            loansdetail::class,
            'loan_id',   // FK di loan_detail → loans
            'id',        // FK di books → loan_detail
            'id',        // PK di loans
            'book_id'    // FK di loan_detail → books
        );
    }
}
