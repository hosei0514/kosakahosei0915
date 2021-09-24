<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Contact;
use App\Mail\ContactMail;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'gender'   => 'required',
            'email'    => 'required|email',
            'postcode' => 'required|max:8',
            'address' => 'required',
            'building' => 'required',
            'contents' => 'required|max:120',
        ]);
        $inputs = $request->all();
        return view('contacts.confirm', ['inputs' => $inputs]);
    }

    public function process()
    {
        $action = $request->get('action', 'return');
        $input  = $request->except('action');

        if($action === 'submit') {

            // DBにデータを保存
            $contact = new Contact();
            $contact->fill($input);
            $contact->save();

            // メール送信
            Mail::to($input['email'])->send(new ContactMail('mails.contact', 'ご意見いただきありがとうございました。', $input));

            return redirect()->route('complete');
        } else {
            return redirect()->route('contact')->withInput($input);
        }
    }

    public function complete()
    {
        return view('contacts.complete');
    }
}
