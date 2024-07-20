<?php

namespace App\Http\Livewire;

use App\Models\Chart;
use App\Models\GaleriFoto;
use App\Models\PaketUmroh;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use WireUi\Traits\Actions;

class AdminPaketController extends Component
{

    use Actions;
    use WithFileUploads;

    public $paketId;

    public $name;
    public $harga;
    public $jadwal_keberangkatan;
    public $durasi;
    public $hotel;
    public $ketersediaan;
    public $berangkat_dari;

    public $modalCreate = false;
    public $modalEdit   = false;

    public function render()
    {
        $pakets = PaketUmroh::all();
        return view('admin.paket.index', compact('pakets'));
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
        ]);

        $paket = new PaketUmroh();

        $paket->name                 = $this->name;
        $paket->harga                = $this->harga;
        $paket->jadwal_keberangkatan = $this->jadwal_keberangkatan;
        $paket->durasi               = $this->durasi;
        $paket->hotel                = $this->hotel;
        $paket->ketersediaan         = $this->ketersediaan;
        $paket->berangkat_dari       = $this->berangkat_dari;
        $paket->save();

        $this->modalCreate = false;
        session()->flash('message', 'Paket successfully created.');
    }

    public function edit(PaketUmroh $paket)
    {
        $this->reset();
        $this->modalEdit = true;

        $this->paketId              = $paket->id;
        $this->name                 = $paket->name;
        $this->harga                = $paket->harga;
        $this->jadwal_keberangkatan = $paket->jadwal_keberangkatan;
        $this->durasi               = $paket->durasi;
        $this->hotel                = $paket->hotel;
        $this->ketersediaan         = $paket->ketersediaan;
        $this->berangkat_dari       = $paket->berangkat_dari;
    }

    public function update(PaketUmroh $paket)
    {
        $paket->name                 = $this->name;
        $paket->harga                = $this->harga;
        $paket->jadwal_keberangkatan = $this->jadwal_keberangkatan;
        $paket->durasi               = $this->durasi;
        $paket->hotel                = $this->hotel;
        $paket->ketersediaan         = $this->ketersediaan;
        $paket->berangkat_dari       = $this->berangkat_dari;
        $paket->save();

        $this->modalEdit = false;
        session()->flash('message', 'Paket successfully updated.');
    }

    public function delete(PaketUmroh $paket)
    {
        $this->dialog()->confirm([
            'title'       => 'DELETE',
            'description' => 'Yakin ingin menghapus data?',
            'acceptLabel' => 'Delete',
            'method'      => 'destroy',
            'params'      => $paket,
        ]);
    }

    public function destroy(PaketUmroh $paket)
    {
        $paket->delete();

        session()->flash('message', 'Paket successfully deleted.');
    }
}
