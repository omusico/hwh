<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\LTDC\Common\Site_Data;

class PagesController extends Controller {

    //private $site_data;

    public function __construct(Site_Data $site_data)
    {
        $this->middleware('guest');
        //$this->site_data=$site_data;
        //$this->packageInfo=$site_data->getPackageInfo();
    }

    public function index($page = 'home')
    {
        try
        {
            return view("pages." . $page, ['activePage' => $page]);
        } catch (\InvalidArgumentException $ignored) {
            return view("errors.404", ['activePage' => '']);
        }
    }

    public function slate($which = 'current'){
        $data['title'] = 'This Month';
        if ($which=='next'){
            $data['title'] = 'Next Month';
        }
        $data['activePage'] = 'slate';
        return view("pages.slate", $data);
    }

    public function signup($level = 'tier1'){
        $data['level'] = $level;
        $data['activePage'] = 'signup';
        return view("pages.signup", $data);
    }
/*
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
*/

}
