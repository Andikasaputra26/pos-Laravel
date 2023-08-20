<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $fillable = ['total_harga', 'status', 'kode_transaksi', 'diskon', 'metode_bayar', 'id_customers', 'diskon_customers', 'total_diskon', 'subtotal'];

    public function PembelianItem(): HasMany
    {
        return $this->hasMany(PembelianItem::class, 'id', 'id_pembelian');
    }

    public static function getNextNomorUrut()
    {
        $lastNomorUrut = static::max('kode_transaksi');
        $nextNomorUrut = $lastNomorUrut ? $lastNomorUrut + 1 : 1;
        $formattedNomorUrut = sprintf('%06d', $nextNomorUrut);

        return $formattedNomorUrut;
    }
}
