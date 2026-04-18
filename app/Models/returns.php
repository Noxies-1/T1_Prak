<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class returns extends Model
{
    protected $table    = 'returns';
    public $timestamps  = false; // tabel returns tidak punya timestamps
 
    protected $fillable = ['loan_detail_id', 'charge', 'amount'];
 
    protected $casts = [
        'charge' => 'boolean',
        'amount' => 'integer',
    ];
 
    // Pengembalian merujuk ke satu detail pinjaman
    public function loanDetail()
    {
        return $this->belongsTo(loansdetail::class, 'loan_detail_id');
    }

}
