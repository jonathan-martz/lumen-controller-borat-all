<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BoratReposController extends Controller
{
    public function select()
    {
        $validation = $this->validate($this->request, [

        ]);

        $packages = DB::table('packages')->orderBy('created_at');

        $this->addResult('packages', $packages->get());

        return $this->getResponse();
    }
}
