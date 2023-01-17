<div>
    <input type="text" wire:model="nom">

    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>


    @foreach ($lieux as $lieu)
        <p wire:click="select({{$lieu}})">{{ $lieu->nom }}</p>
    @endforeach 
    <div>
        <h1>Lieux</h1>
    </div>
</div>
