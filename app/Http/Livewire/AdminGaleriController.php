<?php

namespace App\Http\Livewire;

use App\Models\GaleriFoto;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use WireUi\Traits\Actions;

class AdminGaleriController extends Component
{

    use Actions;
    use WithFileUploads;

    public $galeriId    = null;
    public $name        = null;
    public $description = null;

    public $image_photo;

    public $modalCreate = false;
    public $modalEdit   = false;

    public function render()
    {
        $galeris = GaleriFoto::all();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        $this->reset();

        $this->modalCreate = true;
    }

    public function store()
    {

        $this->validate(rules: [
            'name'        => 'required',
            'description' => 'required',
            'image_photo' => 'required',
        ]);

        $galeri = new GaleriFoto();
        $galeri->name        = $this->name;
        $galeri->description = $this->description;
        $galeri->image_photo = $this->image_photo->store(path: 'brosur');
        $galeri->save();

        $this->modalCreate = false;
        session()->flash('message', 'Galeri successfully created.');
    }

    public function edit(GaleriFoto $galeri)
    {
        $this->reset(['modalCreate', 'modalEdit']);
        $this->modalEdit   = true;

        $this->galeriId    = $galeri->id;
        $this->name        = $galeri->name;
        $this->description = $galeri->description;
    }

    public function update(GaleriFoto $galeri)
    {
        $galeri->name        = $this->name;
        $galeri->description = $this->description;
        if ($this->image_photo) {
            $galeri->image_photo = $this->image_photo->store(path: 'galeri');
        }

        $galeri->save();

        $this->modalEdit = false;
        session()->flash('message', 'Galeri successfully updated.');
    }

    public function delete(GaleriFoto $galeri)
    {
        $this->dialog()->confirm([
            'title'       => 'DELETE',
            'description' => 'Yakin ingin menghapus data?',
            'acceptLabel' => 'Delete',
            'method'      => 'destroy',
            'params'      => $galeri,
        ]);
    }

    public function destroy(GaleriFoto $galeri)
    {
        Storage::delete($galeri->image_photo);
        $galeri->delete();

        session()->flash('message', 'Galeri successfully deleted.');
    }
}
