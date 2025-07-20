<?php

namespace App\Http\Controllers;

class TodolistController extends Controller
{
    public function getItens()
    {
        return response()->json([
            'itens' => ['item 1', 'item 2', 'item 3']
        ]);
    }
}
