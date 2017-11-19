<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Noticia;
use Mail;
use Session;

class PagesController extends Controller
{
    //Pagina de Principal
    public function getIndex() {
    //  $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
      return view('pages.home');//->withPosts($posts);
    }

    public function getContacto() {
      return view('pages.contactenos');
    }

    public function getQuienesSomos() {
      return view('pages.quienes_somos');
    }

    public function getNormatividadComunal() {
      return view('pages.normatividad_comunal');
    }

    public function getOrganizacion() {
      return view('pages.organizacion');
    }

    public function getSitiosInteres() {
      return view('pages.sitios_interes');
    }

    public function getCronograma() {
      return view('pages.cronograma');
    }



    public function getAbout() {
      $first = 'Alex';
      $last = 'Curtis';

      $fullname = $first . " " . $last;
      $email = 'alex@jacurtis.com';
      $data = [];
      $data['email'] = $email;
      $data['fullname'] = $fullname;
      return view('pages.about')->withData($data);
    }

    public function postContact(Request $request) {
      $this->validate($request, [
        'email' => 'required|email',
        'subject' => 'min:3',
        'message' => 'min:10']);

      $data = array(
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message
        );

      Mail::send('emails.contact', $data, function($message) use ($data){
        $message->from($data['email']);
        $message->to('hello@devmarketer.io');
        $message->subject($data['subject']);
      });

      Session::flash('success', 'Your Email was Sent!');

      return redirect('/');
    }
}
