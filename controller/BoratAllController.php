<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BoratAllController extends Controller
{
    public function select()
    {
        $validation = $this->validate($this->request, [

        ]);

        $packages = DB::table('packages');

        $this->addResult('packages', $packages->get());

        return $this->getResponse();
    }
}
