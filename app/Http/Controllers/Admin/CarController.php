<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return view('admin.cars.index');
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function cars_model()
    {
        return view('admin.cars.models.index');
    }

    public function cars_model_create()
    {
        $create_row_values = [
            (object)[
                'name' => 'name',
                'type' => 'text',

            ],
            (object)[
                'name' => 'total',
                'type' => 'number',

            ]
        ];
        return view('admin.cars.models.create', compact('create_row_values'));
    }
}
