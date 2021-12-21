<?php

namespace App\Http\Controllers;

use App\Models\Makan;
use Illuminate\Http\Request;

class IdController extends Controller
{
    public function getId(Request $request)
    {
        $id = $request->id;

        return Makan::find($id);
    }
}
