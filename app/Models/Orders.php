<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'order_id';

    public $timestamps = false;

    protected $fillable = [
        'product_name', 'varient_image', 'quantity', 'unit', 'varient_id', 'qty', 'price', 'total_mrp', 'order_cart_id', 'order_date', 'store_approval', 'store_id', 'description', 'tx_per', 'price_without_tax', 'tx_price', 'tx_name', 'type'
    ];

    protected $attributes = [
        'store_approval'  => 1,
        'tx_per'     => NULL,
        'price_without_tax' => NULL,
        'tx_price'          => NULL,
        'tx_name'           => NULL,
        'type'              => 'Regular'
    ];

    /* **************************************************************************
        Function name: getOrdersIndex
        Description: Provides math calculation 
        returns: Orders Index
        Param 1:
        Param 2:
    */
    public static function getOrdersIndex(float $last_week, float $this_week){
        if($last_week>0){
            $reference = $last_week / 100;
            return ($this_week-$last_week)/$reference;
        } else {
            return $this_week;
        }
    }
}
