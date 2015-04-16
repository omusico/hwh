<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Contracts\Billable as BillableContract;

class Order extends Model implements BillableContract {

    use Billable;

	protected $fillable=[
        'site_id',
        'rep_id',
        'action_code',
        'invoice_number',
        'name_on_card',
        'firstname',
        'lastname',
        'email',
        'dob',
        'billing_address',
        'item_total',
        'sales_tax',
        'tax_rate',
        'order_total',
        'processing_fee',
        'payment_method',
        'payment_id',
        'date_payment_rcvd',
        'stripe_active',
        'stripe_id',
        'stripe_subscription',
        'stripe_plan',
        'last_four',
        'trail_ends_at',
        'subscription_ends_at'
    ];

    protected $dates = ['trail_ends_at', 'subscription_ends_at'];

}
