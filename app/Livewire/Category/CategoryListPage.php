<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryListPage extends Component
{
    use WithPagination;
    
    public function render()
    {
        $categories = Category::paginate();
        return view('livewire.category.category-list-page', compact('categories'));
    }
}
