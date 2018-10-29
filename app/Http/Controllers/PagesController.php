<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Hi I Am A Title From The Controller';
        return view('pages.index')->with('title', $title);
    }

    public function services(){
        // $DishWasher = object(
        //     'name' => 'Dish Washer',
        //     'id' => 54
        // );

        $data = array(
            'title' => 'Services',
            'services' => ['Banana', 'Mango', 'Lichi']
        );

        return view('pages.services')->with($data);
    }
    
    public function about(){
        return view('pages.about');
    }    
}
