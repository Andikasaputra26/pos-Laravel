<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PembelianItem extends Model
{
    use HasFactory;
    protected $table = 'pembelian_item';
    protected $fillable = ['id_pembelian', 'id_product', 'jumlah_item', 'diskon', 'harga_item', 'total'];

    public function Product(): HasOne
    {
        return $this->hasOne(Product::class, 'id_product');
    }

    public function updateProductStock()
    {
        $product = Product::find($this->id);
        if ($product) {
            $product->stock -= $this->jumlah_item;
            $product->save();
        } else if ($product->isDirty('stock')) {
            // Jika ada perubahan pada stok, pastikan tidak ada stok negatif yang disimpan
            $product->stock = max(0, $product->stock);
        }
    }
}
