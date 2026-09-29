<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $nome;
    public $quantidade;
    public $valor;
    public $cor;
    public $preco;
    public $data_validade;

     public function edit ($id)
    {
    //   Produto::([
        // $produto-> nome = $nome;
        // $produto->quantidade = $quantidade;
        // $produto->valor = $valor;
        // $produto->cor = $cor;

    //   ]);

      return;
    }


    public function render()
    {
        return view('livewire.produto-edit');
    }
}
