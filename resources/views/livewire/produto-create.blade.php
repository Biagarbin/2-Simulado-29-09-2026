<div>
    <form wire:submit="salvar">
        <input type="text" wire:model="nome"> 
        <input type="number" wire:model="quantidade">
        <input type="number" wire:model="valor">
        <input type="text" wire:model="cor">
        <input type="number" wire:model="preco">
        <input type="number" wire:model="data_validade">

        <button type="submit">Salvar</button>
    </form>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success')}}
</div>
@endif

@if (session('error'))
<div class =" alert alert-danger">
    {{ session('error')}}
</div>
</div>