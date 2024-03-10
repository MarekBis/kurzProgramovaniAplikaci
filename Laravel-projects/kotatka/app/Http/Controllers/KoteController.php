<?php

namespace App\Http\Controllers;
use App\Models\Kote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KoteController extends Controller
{
    function index(){
        return view("formularPridatKote");
    }

    function zpracujFormular(Request $request):RedirectResponse
    {
        //validace skip
        $noveKote = new Kote;
        $noveKote->jmeno = $request->jmeno;
        $noveKote->vek = $request->vek;
        $noveKote->pohlavi = $request->pohlavi;
        $noveKote->barva = $request->barva;
        $noveKote->save();
        return redirect('/');
    }
    function detail ($id) {
        $polePromennych = array();

        $objektKote = Kote::find($id);
        $polePromennych["kote"] = $objektKote;

        if ($objektKote == null){
            abort(404);
        }

        return view("detailKotatka", $polePromennych);
    }
}
