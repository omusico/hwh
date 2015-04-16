<?php
/**
 * Created by LYNX Technology Development
 * User: LYNXTDC
 * Date: 1/15/2015
 * Time: 2:43 PM
 * http://lynxtdc.com
 */

namespace App\LTDC\Data;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Stripe_Info extends Eloquent {
    protected $fillable = [
        'order_id',
        'stripe_customer_id',
        'stripe_token',
        'stripe_subscription',
        'name_on_card',
        'last_four',
        'exp_date'
    ];
} 