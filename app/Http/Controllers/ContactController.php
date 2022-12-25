<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Contact;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function contactForm()
    {
        return view('contact');
    }
    public function showContact()
    {
        // return'xx';
        return view('admin.contact', [
            'allContacts' => Contact::all()
        ]);
    }

    // public function showSubscribers()
    // {
    //     // return'xx';
    //     return view('admin.subscribers', [
    //         'allSubscribers' => Subscriber::all()
    //     ]);
    // }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function storeContactForm(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',

            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);


        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
