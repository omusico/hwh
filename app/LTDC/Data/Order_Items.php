<?php
/**
 * Created by LYNX Technology Development
 * User: LYNXTDC
 * Date: 1/15/2015
 * Time: 2:44 PM
 * http://lynxtdc.com
 */

namespace App\LTDC\Data;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Order_Items extends Eloquent {
    protected $fillable = [ 'order_id', 'item_id', 'qty', 'price' ];
} 