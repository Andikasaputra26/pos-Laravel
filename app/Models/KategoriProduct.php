<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduct extends Model
{
    use HasFactory;
    protected $table = 'category_product';
    protected $fillable = ['name_category'];

    public function product()
    {
        return $this->hasMany(Product::class, 'id_kategori');
    }
}
