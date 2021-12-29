<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
	/**
     * Exibe o formulário para enviar uma mensagem
     */
    public function index(){
    	return view('welcome');
    }
 
	/**
     * Insere a mensagem no banco de dados
     */
    public function enviar(Request $request){
		$contato = new Contato();
 
		$contato->nome = $request->post('nome');
        $contato->sobrenome = $request->post('sobrenome');
		$contato->email = $request->post('email');
        $contato->aniversario = $request->post('niver');
 
		$contato->save();
 
		return view('enviado');
    }
 
	/**
     * Exibe uma lista com as mensagens cadastradas
     */
    public function lista(){
        return view('lista', array('contatos' => Contato::all()));
    }
}