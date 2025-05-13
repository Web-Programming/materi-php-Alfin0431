<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    function index()
    {
        $listprodi = Prodi::get();
        return view("prodi.index",
        ['listProdi' => $listprodi]
        );
    }

    function create()
    {
        return view("prodi.create");
    }
}
