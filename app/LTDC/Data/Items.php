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


class Items extends Eloquent {
    protected $fillable =[
        'site_id',
        'name',
        'description',
        'price',
        'qty_included'
    ];
} 