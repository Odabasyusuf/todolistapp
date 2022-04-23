<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class NewCategoryModal extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.new-category-modal');
    }

    public function addCategory(){
        $newCategory = new Category();
        $newCategory->name = $this->name;
        $newCategory->save();

        $this->resetInfo();

        session()->flash('success', 'Kategori eklendi.');
    }


    public function resetInfo(){
        $this->name = null;
        session()->forget('message');
        session()->forget('success');
        $this->resetValidation();
    }
}
