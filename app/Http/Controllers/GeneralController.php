<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function home()
    {
        return view('pages.home.index');
    }

    public function contatti_index()
    {
        return view('pages.contact.index');
    }

    // cafe

    public function cafe_index()
    {
        return view('pages.cafe.index');
    }

    public function bar_index()
    {
        return view('pages.cafe.bar');
    }

    public function gelateria_index()
    {
        return view('pages.cafe.gelateria');
    }

    // food

    public function food_index()
    {
        return view('pages.food.index');
    }

    public function sea_food_index()
    {
        return view('pages.food.sea_food');
    }

    public function meat_dishes_index()
    {
        return view('pages.food.meat_dishes');
    }

    public function pizzeria_index()
    {
        return view('pages.food.pizzeria');
    }

    public function street_food_index()
    {
        return view('pages.food.street_food');
    }

    // lounge

    public function arsenale_index()
    {
        return view('pages.lounge.arsenale');
    }


}
