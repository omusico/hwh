<?php
/**
 * Created by LYNX Technology Development
 * User: LYNXTDC
 * Date: 1/15/2015
 * Time: 2:42 PM
 * http://lynxtdc.com
 */

namespace App\LTDC\Data;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Orders extends Eloquent {
    protected $fillable = [
        'site_id',
        'rep_id',
        'action_code',
        'invoice_number',
        'name_on_card',
        'firstname',
        'lastname',
        'email',
        'phone',
        'dob',
        'billing_address',
        'item_total',
        'sales_tax',
        'tax_rate',
        'order_total',
        'processing_fee',
        'payment_method',
        'payment_id',
        'date_payment_rcvd'
    ];
} 