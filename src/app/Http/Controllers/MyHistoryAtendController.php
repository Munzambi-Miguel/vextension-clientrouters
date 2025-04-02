<?php

namespace ClientRoutes\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AtendimentoData\AtendimentoData;
use App\Models\Beneficiario\Beneficiario;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MyHistoryAtendController extends Controller
{


    public function index($id, Request $request)
    {
        $screenHeight = $request->header('screenHeight', 800);
        $itemHeight = 43;
        $itemsPerPage = (int) floor($screenHeight / $itemHeight);

        $userInfo = auth()->user();

        $uid = Beneficiario::where('ncartao', $userInfo->email)->pluck('uid')->first();

        $atendimentoData = AtendimentoData::where('beneficiario_uid', $uid)->paginate($itemsPerPage);

        return Inertia::render('BENEFICIARIO_AUTH/HOME/MyHistoryAtendimento', compact('userInfo', 'atendimentoData'));

    }



}