<?php

namespace ClientRoutes\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashBenefixController extends Controller
{
    //render dashboard beneficiario view extension .vue
    public function index(Request $request)
    {
        $screenHeight = $request->header('screenHeight', 800);
        $itemHeight = 43;
        $itemsPerPage = (int) floor($screenHeight / $itemHeight);


        $userInfo = auth()->user();

        return Inertia::render('BENEFICIARIO_AUTH/HOME/ModuleWelcame', compact('userInfo'));

    }
}
