<?php

namespace ClientRoutes\App\Http\Controllers;

use Apoliceplano\app\Modules\ApolicePlano;
use App\Models\Beneficiario\Beneficiario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class ReporHistoryApolice extends Controller
{
    //

    public function index(Request $request)
    {


        $screenHeight = $request->header('screenHeight', 800);
        $itemHeight = 43;
        $itemsPerPage = (int) floor($screenHeight / $itemHeight);

        $userInfo = auth()->user();
        $userInfo = auth()->user();

        $uid = Beneficiario::where('ncartao', $userInfo->email)->pluck('apolice')->first();

        $apolicePlano = ApolicePlano::where('codigo', $uid)->first();

        return Inertia::render('BENEFICIARIO_AUTH/HOME/ReporHistoryApolice', compact('userInfo', 'apolicePlano'));


    }
}
