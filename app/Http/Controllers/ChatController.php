<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    function index()
    {
        $exemploMensagens = [
            'Olá, tudo bem?',
            'Tudo ótimo, e você?',
            'Tudo ótimo também!',
            'Que bom!',
            'Sim!'
        ];
        return view('chat.index', ['mensagens' => $exemploMensagens]);
    }
    function enviarMensagem(Request $request)
    {
        $mensagem = $request->input('mensagem');
        $mensagens = [];
        $mensagens[] = $mensagem;
        return redirect()->route('chat.mensagens', ['mensagem' => $mensagem]);
    }
}
