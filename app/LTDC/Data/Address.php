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

class Address extends Eloquent {
    protected $fillable = [
        'address1',
        'address2',
        'city',
        'state',
        'zip',
        'latitude',
        'longitude'
    ];
} 