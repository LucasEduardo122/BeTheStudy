<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $course = new Course();

        $products = $course->offset(0)->limit(6)->get(); 

        return view('site.index', ['courses' => $products]);
    }

    public function contact() {
        return view('site.contact');
    }
}
