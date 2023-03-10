<?php

namespace App\Http\Livewire\Admin;

use App\Models\lieu as ModelsLieu;
use Livewire\Component;


class Lieu extends Component
{
    public $nom;
    public $lieux;
    public $selectId;


    public function render()
    {
        $this->lieux=ModelsLieu::all();
        return view('livewire.admin.lieu');
    }

    public function store(){
        $record=$this->validate([
            'nom'=>'required',
        ]);
        
        ModelsLieu::create($record);
        $this->clear();
    }

    public function clear(){
        $this->nom="";
    }

    public function select($data){
        $this->selectId = $data["id"];
        $this->nom = $data["nom"];
    }

    public function update(){
        $record=$this->validate([
            'nom'=>'required',
        ]);
        $result=ModelsLieu::find($this->selectId);
        $result->update($record);

        $this->clear();
    }

    public function delete(){
        $record=$this->validate([
            'nom'=>'required'
        ]);
        $result=ModelsLieu::find($this->selectId);
        $result->delete();

        $this->clear();
    }
}
