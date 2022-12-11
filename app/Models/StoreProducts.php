<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreProducts extends Model
{
    use HasFactory;

    protected $table = 'store_products';
    protected $primaryKey = 'p_id';

    public $timestamps = false;

    protected $fillable = [
        'varient_id', 'stock', 'store_id', 'mrp', 'price', 'min_ord_qty', 'max_ord_qty'
    ];

    protected $attributes = [
        'min_ord_qty'     => 1,
        'max_ord_qty'     => 100
    ];
}
