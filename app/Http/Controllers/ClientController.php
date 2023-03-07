<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use Illuminate\Http\Request;
use App\Client;
use App\Contact;
use Illuminate\Contracts\Session\Session;

class ClientController extends Controller
{
    function login(Request $request){
        $client = Client::all()->where('email', $request->email)->where('password', $request->password)->first();
        if($client != null){
            if($client->is_admin == 1){
                $request->session()->put("admin", $client->is_admin );
            }
            $request->session()->put("client_id", $client->id );
            
        }
        return redirect("/");

      

    }

  
    function registre(Request $request){
        $client = new Client;
        $client->first_name = $request->fistname ;
        $client->last_name = $request->lastname;
        $client->email = $request->email;
        $client->password = $request->password;
        $client->is_admin = '0' ;
        $client->save();

        return redirect("Shope");
    }
    function logout(Request $request){
        if(session()->has('client_id')){
            $request->session()->forget('client_id');
            $request->session()->forget('admin');
            return redirect('/');
        }

    }

    function forgetPassword(Request $request){
        $client = Client::all()->where("email", $request->email)->first();
        if($client != null){
            $details = [ $client->first_name, $client->last_name, "your password is  : ".$client->password];
            \Mail::to($client->email)->send(new MyTestMail($details));
            return redirect('/');
        }
    }
    

    function getclients(){
        $client = Client::all() ;
        return view("client" , ["clients" => $client]) ;
    }

    function delete($id){
        $client = Client::find($id);
        $client->delete();
        return redirect("client");
    }

    function contact(Request $request){
        $contact = new Contact();
        $contact->subject = $request->subject ;
        $contact->message = $request->message;
        $contact->client_id = session("client_id");
        $contact->save();
        return redirect("/");
    }


   
}