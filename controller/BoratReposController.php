<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

/**
 * Class BoratReposController
 * @package App\Http\Controllers
 */
class BoratReposController extends Controller
{
    /**
     * @return mixed
     */
    public function select()
    {
        $validation = $this->validate($this->request, [

        ]);

        $packages = DB::table('packages')->orderBy('created_at');

        $this->addResult('packages', $packages->get());

        return $this->getResponse();
    }
}
