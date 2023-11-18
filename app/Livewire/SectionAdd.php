<?php

namespace App\Livewire;

use Livewire\Component;

class SectionAdd extends Component
{
    public $gradee;
    public $list_Grades;


//      public function mount(){
// dd('jjjjjjjjjjjjjjj');
//     }
//     public function storeUser()
//     {
//     dd( 'nnnnnnnnnn');
//    }
    public function render()
    {
        return view('livewire.section-add');
    }
}
