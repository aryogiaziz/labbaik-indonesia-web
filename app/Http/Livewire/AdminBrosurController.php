<?php

namespace App\Http\Livewire;

use App\Models\Brosur;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use WireUi\Traits\Actions;

class AdminBrosurController extends Component
{

    use Actions;
    use WithFileUploads;

    public $test = "askajksjaks";

    public $brosurId    = null;
    public $name        = null;
    public $description = null;

    public $image_brochure;

    public $modalCreate = false;
    public $modalEdit   = false;

    public function render()
    {
        $brosurs = Brosur::all();
        return view('admin.brosur.index', compact('brosurs'));
    }

    public function create()
    {
        $this->reset();

        $this->modalCreate = true;
    }

    public function store()
    {

        $this->validate(rules: [
            'name'           => 'required',
            'description'    => 'required',
            'image_brochure' => 'required',
        ]);

        $brosur = new Brosur();
        $brosur->name           = $this->name;
        $brosur->description    = $this->description;
        $brosur->image_brochure = $this->image_brochure->store(path: 'brosur');
        $brosur->save();

        $this->modalCreate = false;
        session()->flash('message', 'Brosur successfully created.');
    }

    public function edit(Brosur $brosur)
    {
        $this->reset(['modalCreate', 'modalEdit']);
        $this->modalEdit   = true;

        $this->brosurId    = $brosur->id;
        $this->name        = $brosur->name;
        $this->description = $brosur->description;
        // $this->image_brochure = $brosur->image_brochure;
    }

    public function update(Brosur $brosur)
    {
        $brosur->name        = $this->name;
        $brosur->description = $this->description;
        if ($this->image_brochure) {
            $brosur->image_brochure = $this->image_brochure->store(path: 'brosur');
        }

        $brosur->save();

        $this->modalEdit = false;
        session()->flash('message', 'Brosur successfully updated.');
    }

    public function delete(Brosur $brosur)
    {
        $this->dialog()->confirm([
            'title'       => 'DELETE',
            'description' => 'Yakin ingin menghapus data?',
            'acceptLabel' => 'Delete',
            'method'      => 'destroy',
            'params'      => $brosur,
        ]);
    }

    public function destroy(Brosur $brosur)
    {
        Storage::delete($brosur->image_brochure);
        $brosur->delete();

        session()->flash('message', 'Brosur successfully deleted.');
    }
}
