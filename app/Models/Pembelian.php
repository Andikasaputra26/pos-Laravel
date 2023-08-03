<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $fillable = ['total_harga', 'diskon', 'metode_bayar', 'id_customers', 'diskon_customers', 'total_diskon', 'subtotal'];

    public function PembelianItem(): HasMany
    {
        return $this->hasMany(PembelianItem::class, 'id', 'id_pembelian');
    }
}
