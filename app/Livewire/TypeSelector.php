<?php

namespace App\Livewire;

use App\Models\TypeCategoryModel;
use Livewire\Component;

class TypeSelector extends Component
{
    public $typeData;

    public function mount(){
        $this->typeData = TypeCategoryModel::get();
    }
    
    public function render()
    {
        return view('livewire.type-selector');
    }
}
