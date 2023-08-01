<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PembelianItem extends Model
{
    use HasFactory;
    protected $table = 'pembelian_item';
    protected $fillable = ['id_pembelian', 'id_product', 'jumlah_item'];

    public function Product(): HasOne
    {
        return $this->hasOne(Product::class, 'id_product');
    }

    // public function Customers(): HasOne
    // {
    //     return $this->hasOne(Customers::class, 'name_customers');
    // }
}
