<?php

namespace ClientRouters\App\Modules;

use App\Models\Beneficiario\Beneficiario;

class UseBeneficiario
{

    protected $beneficiario;
    protected $user;
    public function __construct(string $uid)
    {
        $this->beneficiario = Beneficiario::query()->where('uid', $uid)->first();
        $this->user = auth()->user();
    }

}