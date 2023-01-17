<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Portfolio;

class Site extends Controller
{
    public function index(){
        $sites = Portfolio::all();
        return view('index', ['sites' => $sites]);
    }
    public function formulario(){
        return view('registerSite');
    }

    public function store(Request $request){
        $event = new Portfolio();

        $event->name        = $request->name;
        $event->description = $request->description;
        $event->github      = $request->github;
        $event->visit       = $request->visit;
        $event->tags        = $request->tags;

        /* Upload de Imagem */
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage   = $request->image;
            $extension      = $requestImage->extension();
            $imageName      = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image   = $imageName;
        }
        $event->save();

        return redirect('/')->with('msg','Projeto criado com sucesso!');
    }
}
