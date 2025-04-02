<?php

namespace ClientRoutes\App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class UserProfilePackage extends Controller
{
    //

    public function index(Request $request)
    {


        $screenHeight = $request->header('screenHeight', 800);
        $itemHeight = 43;
        $itemsPerPage = (int) floor($screenHeight / $itemHeight);

        $userInfo = auth()->user();

        return Inertia::render('BENEFICIARIO_AUTH/HOME/UserProfilePackage', compact('userInfo'));


    }
}
