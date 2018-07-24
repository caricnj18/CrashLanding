<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    public function index(){
        $title= "welcome to CrashLanding";
        return view ('pages.index', compact('title'));
        
    }
    public function about(){
        $title='About Us';
        return view('pages.about') ->with('title', $title);
    }
    
    public function browse(){
        $title='Browse';
        return view('pages.browse') ->with('title', $title);
    }

    public function services(){
        $data= array(
            'title' => 'services',
            'services' => ['Browse Options', 'Create an Account', 'Make a Reservation', 'Create Reviews']
         );
        return view('pages.services')->with($data);
    }
}