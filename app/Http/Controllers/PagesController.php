<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\LTDC\Common\Site_Data;

class PagesController extends Controller {

    private $site_data;

    public function __construct(Site_Data $site_data)
    {
        $this->middleware('guest');
        //$this->site_data=$site_data;
        //$this->packageInfo=$site_data->getPackageInfo();
    }

    public function index()
    {
        $data=array();
        return view('landing.landing', $data);
    }

    public function confirmation()
    {
        $data=array();
        return view('landing.confirmation', $data);
    }

}
