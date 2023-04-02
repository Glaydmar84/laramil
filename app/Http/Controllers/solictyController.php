<?php

namespace App\Http\Controllers;

use App\Models\assistente;
use Illuminate\Http\Request;

class solictyController extends Controller
{

public function index()
{

$assistentes = assistente::all();

return view('solicties.solicty', ['assistentes'=>$assistentes]);

}

public function create()
{
    return view('solicties.create');

}

public function store(Request $request)
{
assistente::create($request->all());
return redirect('solicties/create');

}

public function destroy($id)
{
assistente::where('id',$id)->delete();
return redirect()->route('solicty-create');
}

}

