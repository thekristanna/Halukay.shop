<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrdersProduct
 * 
 * @property int $op_id
 * @property int $order_id
 * @property int $product_id
 * @property int $shopper_id
 *
 * @package App\Models
 */
class OrdersProduct extends Model
{
    protected $table = 'orders_product';
    protected $primaryKey = 'op_id';
    public $timestamps = false;

    protected $casts = [
        'order_id' => 'int',
        'product_id' => 'int',
        'shopper_id' => 'int'
    ];

    protected $fillable = [
        'order_id',
        'product_id',
        'shopper_id'
    ];
}
