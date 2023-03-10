<?php

namespace App\Http\Livewire;

use App\Models\Denomination;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CoinsController extends Component
{

    use WithPagination;
    use WithFileUploads;

    public $type, $value, $search, $image, $selected_id, $pageTitle, $componentName;
    private $pagination = 5;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }
    
    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Denominaciones';
        $this->type = 'Elegir';
    }

    public function render()
    {
        if(strlen($this->search) > 0)
            $data = Denomination::where('type', 'like', '%'. $this->search . '%')->paginate($this->pagination);
        else
        $data = Denomination::orderBy('id','asc')->paginate($this->pagination);
        return view('livewire.denomination.coins', ['data' => $data])
        ->extends('layouts.theme.app')
        ->section('content');
    }
    public function Edit($id)
    {
        $record = Denomination::find($id,['id','type','value','image']);
        $this->type = $record->type;
        $this->value = $record->value;
        $this->selected_id = $record->id;
        $this->image = null;

        $this->emit('show-modal','show modal!');
    }

    public function Store()
    {
        $rules = [
            'type' =>'required|not_in:Elegir',
            'value' =>'required|unique:Denominations'
        ];
        $messages = [
            'type.required' => 'Tipo es requerido',
            'type.not_in' => 'Elegir un valor valido"',
            'value.required' => 'El valor es requerido',
            'value.unique' => 'El valor ya existe'
        ];

        $this->validate($rules, $messages);

        $denomination = Denomination::create([
            'type' => $this->type,
            'value' => $this->value
        ]);

        if($this->image)
        {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/monedas', $customFileName);
            $denomination->image = $customFileName;
            $denomination->save();
        }
        $this->resetUI();
        $this->emit('item-added','Denominacion registrada');
    }

    public function Update()
    {
        $rules = [
            'type' =>'required|not_in:Elegir',
            'value' =>"required|unique:denominations,value,{$this->selected_id}"
        ];
        $messages = [
            'type.required' => 'El tipo es requerido',
            'type.not_in' => 'Elije un tipo valido',
            'value.required' => 'El valor es requerido',
            'value.unique' => 'El valor ya existe'
        ];

        $this->validate($rules, $messages);

        $denomination = Denomination::find($this->selected_id);
        $denomination->update([
            'type' => $this->type,
            'value' => $this->value
        ]);

        if($this->image)
        {
            $customFileName=uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/monedas', $customFileName);
            $imageName = $denomination->image;
            $denomination->image = $customFileName;
            $denomination->save();

            if($imageName != null)
            {
                if(file_exists('storage/monedas' . $imageName))
                {
                    unlink('storage/monedas'. $imageName);
                }
            }
        }
        $this->resetUI();
        $this->emit('item-updated','Denominación actualizado');
    }

    protected $listeners = [
        'deleteRow'=> 'Destroy'
    ];
    public function Destroy(Denomination $denomination)
    {
        //Forma old para eliminar mediante id
        //$denomination = denomination::find($id);
        //Para probar con DD si se esta mandando el evento para eliminar
        //dd($denomination);
        $imageName = $denomination->image;// imagen temporal
        $denomination->delete();
        if($imageName!= null)
        {
            unlink('storage/monedas/' . $imageName);
        }

        $this->resetUI();
        $this->emit('item-deleted','Categoria eliminado');
    }
    public function resetUI()
    {
        $this->type = '';
        $this->value = '';
        $this->search = '';
        $this->selected_id = 0;
        $this->image = null;
    }
}
