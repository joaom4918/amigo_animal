<?php

namespace App\Http\Controllers;

use App\Animais;
use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    
    public function adicionar_animal(){

        return view("admin.animais.adicionar_animal");
    }

    public function salvar_animal(Request $req){


        $dados=$req->all();

        if($req->hasFile('imagem')){
            $imagem=$req->file('imagem');
            $num=rand(1111,9999);
            $dir="img/animais/";
            $extencao=$imagem->guessClientExtension();
            $nomeImagem="Imagem".$num.".".$extencao;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem']=$dir."/".$nomeImagem;
            
        }

        Animais::create($dados);

        return redirect()->route('site.home');
    }

    public function lista_animal(){

        $registros=Animais::all();
        return view("admin.animais.lista_animal",compact('registros'));
    }

    public function excluir_animal(Request $req,$idani){

        $dados=$req->all();

        Animais::find($idani)->delete($dados);

        return redirect()->route('admin.animais.lista_animal');
    }

    public function editar_animal($idani){

        $registro=Animais::find($idani);
        

        return view('admin.animais.editar',compact('registro'));
    }

    public function atualizar_animal(Request $req,$idani){

        $dados=$req->all();
        if($req->hasFile('imagem')){
            $imagem=$req->file('imagem');
            $num=rand(1111,9999);
            $dir="img/animais/";
            $extencao=$imagem->guessClientExtension();
            $nomeImagem="Imagem".$num.".".$extencao;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem']=$dir."/".$nomeImagem;
            
        }
        Animais::find($idani)->update($dados);

        return redirect()->route("admin.animais.lista_animal");
    }


    public function lista_caes(){

        $registros=Animais::where('especie','cao')->get(); 

         return view("listas.lista_caes",compact('registros'));
    }

    public function lista_gatos(){

        $registros=Animais::where('especie','gato')->get();

        return view("listas.lista_gatos",compact('registros'));
    }

    public function lista_aves(){

        $registros=Animais::where('especie','ave')->get();

        return view("listas.lista_aves",compact('registros'));
    }

    public function lista_peixes(){

        $registros=Animais::where('especie','peixe')->get();

        return view("listas.lista_peixes",compact('registros'));
    }

    
    public function lista_outros(){
        $registros=Animais::where('especie','Outro')->get();

        return view("listas.lista_outros",compact('registros'));
    }

    
}
