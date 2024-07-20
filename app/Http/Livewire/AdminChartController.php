<?php

namespace App\Http\Livewire;

use App\Models\Chart;
use App\Models\GaleriFoto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use WireUi\Traits\Actions;

class AdminChartController extends Component
{

    use Actions;
    use WithFileUploads;

    public $chartId;
    public $category;
    public $description;
    public $jenis_kelamin;
    public $bulan;
    public $tahun;
    public $jumlah;

    public $modalCreate = false;
    public $modalEdit   = false;

    public function render()
    {
        // $jumlah = Chart::select('*')->get()->sum('jumlah');
        // dd($jumlah);
        $charts = Chart::all();
        return view('admin.chart.index', compact('charts'));
    }

    public function create()
    {
        $this->reset();

        $this->modalCreate = true;
    }

    public function store()
    {

        // $this->validate(rules: [
        //     'name'        => 'required',
        //     'description' => 'required',
        //     'image_photo' => 'required',
        // ]);

        $chart = new Chart();

        $chart->category      = $this->category;
        $chart->description   = $this->description;
        $chart->jenis_kelamin = $this->jenis_kelamin;
        $chart->bulan         = $this->bulan;
        $chart->tahun         = $this->tahun;
        $chart->jumlah        = $this->jumlah;
        $chart->save();

        $this->modalCreate = false;
        session()->flash('message', 'Galeri successfully created.');
    }

    public function edit(Chart $chart)
    {
        $this->reset();
        $this->modalEdit = true;

        $this->chartId       = $chart->id;
        $this->category      = $chart->category;
        $this->description   = $chart->description;
        $this->jenis_kelamin = $chart->jenis_kelamin;
        $this->bulan         = $chart->bulan;
        $this->tahun         = $chart->tahun;
        $this->jumlah        = $chart->jumlah;
    }

    public function update(Chart $chart)
    {
        $chart->category      = $this->category;
        $chart->description   = $this->description;
        $chart->jenis_kelamin = $this->jenis_kelamin;
        $chart->bulan         = $this->bulan;
        $chart->tahun         = $this->tahun;
        $chart->jumlah        = $this->jumlah;
        $chart->save();

        $this->modalEdit = false;
    }

    public function delete(Chart $chart)
    {
        $this->dialog()->confirm([
            'title'       => 'DELETE',
            'description' => 'Yakin ingin menghapus data?',
            'acceptLabel' => 'Delete',
            'method'      => 'destroy',
            'params'      => $chart,
        ]);
    }

    public function destroy(Chart $chart)
    {
        $chart->delete();

        session()->flash('message', 'Chart successfully deleted.');
    }
}
