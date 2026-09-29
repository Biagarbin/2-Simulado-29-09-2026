<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $quantidade;
    public $valor;
    public $cor;
    public $preco;
    public $data_validade;

    public function store ()

    {
        $this->valitade([
            'nome' => 'required',
            'quantidade' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);
    
        Produto::create([
        'nome'=>$this->nome,
        'quantidade'=>$this->quantidade,
        'valor'=>$this->valor,
        'cor'=>$this->cor,
        'preco'=>$this->preco,
        'data_validade'=>$this->data_validade,
      ]);

    session()->flash(
        'success',
        'Produto cadastrado com sucesso'
    );

    session()->flash(
        'error',
        'Não foi possível concluir a operação'
    );

    return redirect()->route('produtos.index');

    }

    public function render()
    {
        return view('livewire.produto-create');
    }
}
