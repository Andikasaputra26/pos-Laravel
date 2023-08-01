<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['kode_customers', 'name_customers', 'email', 'telephone', 'address'];

    // public function PembelianItem(): HasMany
    // {
    //     return $this->hasMany(PembelianItem::class, 'id_pembelian_item');
    // }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->kode_customers = static::getNextNomorUrut();
        });
    }

    public static function getNextNomorUrut()
    {
        $lastNomorUrut = static::max('kode_customers');
        $nextNomorUrut = $lastNomorUrut ? $lastNomorUrut + 1 : 1;
        $formattedNomorUrut = sprintf('%06d', $nextNomorUrut);

        return $formattedNomorUrut;
    }
}
