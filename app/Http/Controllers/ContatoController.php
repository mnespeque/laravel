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
 
		$contato->save();
 
		echo "Seus dados foram armazenados com sucesso! Aguarde seu presente ou visite nossa página para verificar se está tudo correto.";
    }
 
	/**
     * Exibe uma lista com as mensagens cadastradas
     */
    public function lista(){
    	return view('lista', array('contato' => Contato::all()));
    }
}