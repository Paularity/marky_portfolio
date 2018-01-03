<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
      return view('home');
    }

    public function getCocreate()
    {
      return view('cocreate');
    }

    public function getExperience()
    {
      return view('experience');
    }

    public function getLifehacks()
    {
      return view('lifehacks');
    }

    public function getExpress()
    {
      return view('express');
    }
}
