<?php

namespace App\Livewire;

use App\Services\DisciplineYearService;
use Livewire\Component;

class DisciplineSelector extends Component
{
    public $years;
    public $discipline;
    public $oldDiscData;

    public function mount(){
        $this->years = DisciplineYearService::getAllYears();
        $this->discipline = DisciplineYearService::getAllDisciplines($this->years);
    }

    public function updatingDiscipline(){
        $this->oldDiscData = $this->discipline;
    }
    
    public function updatedDiscipline(){

        DisciplineYearService::findeDiffInArray($this->oldDiscData, $this->discipline);
    }
    
    public function render()
    {
        return view('livewire.discipline-selector');
    }
}
