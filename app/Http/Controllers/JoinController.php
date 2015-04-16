<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\MailingList;
use App\Http\Requests\JoinMailingListRequest;
use Mail;
use Mailchimp;
use App\Http\Controllers\Controller;

class JoinController extends Controller {

    private $maillist;
    protected $mailchimp;

    public function __construct(MailingList $maillist, Mailchimp $mailchimp)
    {
        $this->middleware('guest');
        $this->maillist=$maillist;
        $this->mailchimp=$mailchimp;
    }

    public function store(JoinMailingListRequest $request)
    {
        //dd($request->all());

        $list = MailingList::create([
            'email' => $request->get("email")
        ]);

        try {
            $this->mailchimp->lists->subscribe(
                env('MAILCHIMP_LIST_ID', ''),
                ['email' => $request->get("email")]
            );
        }catch(\Mailchimp_List_AlreadySubscribed $e){
            //do nothing for now
        }catch (\Mailchimp_Error $e){
            //for now, doing nothing
        }

        return redirect("confirmation");

    }

}
