<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\ListHeading;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class CategoryPage extends Component
{
    public $new_list_name, $category_id;

    public function render()
    {
        $listHeadings = ListHeading::query()
            ->where('user_id', Auth::user()->id)
            ->where('category_id', $this->category_id)
            ->get();

        return view('livewire.category-page', compact('listHeadings'));
    }

    public function addNewList(){
        $newCategory = new ListHeading();
        $newCategory->user_id = Auth::user()->id;
        $newCategory->name = $this->new_list_name;
        $newCategory->category_id = $this->category_id;
        $newCategory->save();

        $this->resetInfo();

        session()->flash('success', 'Liste eklendi.');
    }

    public function resetInfo(){
        $this->new_list_name = null;
        session()->forget('message');
        session()->forget('success');
        $this->resetValidation();
    }
}
