<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class Menu extends Component
{
    public $name;

    public function render()
    {
        $categories = Category::query()->where('user_id', Auth::user()->id)->where('status', 1)->get();
        return view('livewire.menu', compact(['categories']));
    }

    public function addCategory(){
        $newCategory = new Category();
        $newCategory->user_id = Auth::user()->id;
        $newCategory->name = $this->name;
        $newCategory->slug = Str::slug($this->name, '-');
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
