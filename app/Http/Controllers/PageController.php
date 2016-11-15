<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function hire()
    {
        return view('pages.hire');
    }

    public function partner()
    {
        return view('pages.partner');
    }

    public function microbiome()
    {
        return view('pages.microbiome');
    }

    public function pathogen()
    {
        return view('pages.pathogen');
    }

    public function baba()
    {
        return view('pages.microbiome.baba');
    }

    public function baby()
    {
        return view('pages.microbiome.baby');
    }

    public function mum()
    {
        return view('pages.microbiome.mum');
    }

    public function obesity()
    {
        return view('pages.microbiome.obesity');
    }

    public function cardio()
    {
        return view('pages.microbiome.cardio');
    }

    public function diabetes()
    {
        return view('pages.microbiome.diabetes');
    }
}
