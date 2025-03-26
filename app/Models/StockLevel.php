<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockLevel extends Model
{
    use HasFactory;

    protected $fillable = ['product_variant_id', 'stock'];

    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
