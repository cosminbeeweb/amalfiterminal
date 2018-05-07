<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function contatti_index()
    {
        return view('pages.contatti');
    }

    public function arsenale_index()
    {
        return view('pages.arsenale');
    }

    public function cafe_index()
    {
        return view('pages.cafe');
    }

    public function sea_food_index()
    {
        return view('pages.sea_food');
    }

    public function meat_dishes_index()
    {
        return view('pages.meat_dishes');
    }

    public function pizzeria_index()
    {
        return view('pages.pizzeria');
    }

    public function street_food_index()
    {
        return view('pages.street_food');
    }

    public function eventi_lounge_index()
    {
        return view('pages.eventi_lounge');
    }

    public function gelateria_index()
    {
        return view('pages.gelateria');
    }
}
