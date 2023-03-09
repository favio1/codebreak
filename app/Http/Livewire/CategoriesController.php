<?php

namespace App\Http\Livewire;

use Livewire\Component;
//importamos el modelo category
use App\Models\Category;
//fachadas para almacenar archivos en el backend
use Illuminate\Support\Facades\Storage;
//trait para manejar imagenes y la paginacion
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CategoriesController extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $name, $search, $image, $selected_id, $pageTitle, $componentName;
    private $pagination = 5;

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Categorias';
    }
//categories variable que va recibir los datos 
    public function render()
    {
        $data = Category::all();
        return view('livewire.category.categories', ['categories' => $data])
        ->extends('layouts.theme.app')
        ->section('content');
    }
}
