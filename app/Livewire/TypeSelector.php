<?php

namespace App\Livewire;

use App\Models\TypeCategoryModel;
use App\Services\TypeService;
use Livewire\Component;

class TypeSelector extends Component
{
    public $typeData;
    public $typeValues;

    protected $rules=[
        'typeValues.M' => 'required',
        'typeValues.Ž' => 'required',
        'typeValues.MIX' => 'required',
    ];

    public function mount(){
        $this->typeData = TypeCategoryModel::get();
        $this->typeValues = TypeService::getTypeArrayAndValues($this->typeData);
    }

    public function updatedTypeValues(){
        TypeService::updateTypeTable($this->typeValues);
    }

    public function test($test){

    }
    
    public function render()
    {
        return view('livewire.type-selector');
    }
}
