<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diet;

class DietController extends Controller
{
    public function index()
    {
        $diets = Diet::all();

        return inertia('Diet',[
            'diets' => $diets
        ]);
    }
}
