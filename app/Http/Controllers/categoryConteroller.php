<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryConteroller extends Controller
{
    public function addCategory()
    {
        return view('admin.categories.add_category');
    }
}
