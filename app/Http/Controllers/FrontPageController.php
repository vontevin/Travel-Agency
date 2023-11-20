<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        // return "Hello";
        return view(view: 'front_home');
    }

    public function about()
    {
        return view(view: 'front_about');
    }
    public function services()
    {
        return view(view: 'front_services');
    }

    public function packages()
    {
        return view(view: 'front_packages');
    }

    public function destination()
    {
        return view(view: 'front_destination');
    }

    public function booking()
    {
        return view(view: 'front_booking');
    }

    public function guides()
    {
        return view(view: 'front_guides');
    }

    public function testimonial()
    {
        return view(view: 'front_testimonial');
    }
    public function page()
    {
        return view(view: 'front_page');
    }

    public function contact()
    {
        return view(view: 'front_contact');
    }
}
