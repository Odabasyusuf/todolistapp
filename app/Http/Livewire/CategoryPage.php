<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\ListContent;
use App\Models\ListHeading;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $new_list_name, $category_id;
    public $statusSelectBox;

    public function render()
    {
        $listHeadings = ListHeading::query()
            ->where(function ($query) {
                $query->where('user_id', Auth::user()->id);
            })
            ->where(function ($query) {
                $query->where('category_id', $this->category_id);
            })
            ->where(function ($query) {
                if ($this->statusSelectBox!=null){
                    $query
                        ->where('status', $this->statusSelectBox);
                }
            })
//            ->orderBy('status', 'ASC')
            ->paginate(12);


        return view('livewire.category-page', compact('listHeadings'));
    }

    public function addNewList(){
        $newList = new ListHeading();
        $newList->user_id = Auth::user()->id;
        $newList->name = $this->new_list_name;
        $newList->category_id = $this->category_id;
        $newList->save();

        $this->resetInfo();

        session()->flash('success', 'Liste eklendi.');
    }

    public function changeStatusList($id, $newStatus){
        $selectedList = ListHeading::find($id);
        $selectedList->status = $newStatus;
        $selectedList->save();
    }

    public function changeStatusContent($id){
        $selectedContent = ListContent::find($id);
        if ($selectedContent->status == 0) $selectedContent->status = 1; else $selectedContent->status = 0;
        $selectedContent->save();
    }

    public function resetInfo(){
        $this->new_list_name = null;
        session()->forget('message');
        session()->forget('success');
        $this->resetValidation();
    }
}
