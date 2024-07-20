<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Brosur;
use App\Models\Chart;
use App\Models\GaleriFoto;
use Illuminate\Http\Request;

class WebBeranda extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['brosurs'] = Brosur::all();

        $data['pie_semua'] = [
            'labels' => [
                'Usia Balita & anak - anak',
                'Usia Remaja dan Dewasa',
                'Usia Lanjut'
            ],
            'data' =>  [
                Chart::where('category', 'Usia Balita & anak - anak')->get()->sum('jumlah'),
                Chart::where('category', 'Usia Remaja dan Dewasa')->get()->sum('jumlah'),
                Chart::where('category', 'Usia Lanjut')->get()->sum('jumlah'),
            ],
            'total' => Chart::all()->sum('jumlah')
        ];

        $data['pie_laki'] = [
            'labels' => [
                'Usia Balita & anak - anak',
                'Usia Remaja dan Dewasa',
                'Usia Lanjut'
            ],
            'data' =>  [
                Chart::where('category', 'Usia Balita & anak - anak')->where('jenis_kelamin', 'L')->get()->sum('jumlah'),
                Chart::where('category', 'Usia Remaja dan Dewasa')->where('jenis_kelamin', 'L')->get()->sum('jumlah'),
                Chart::where('category', 'Usia Lanjut')->where('jenis_kelamin', 'L')->get()->sum('jumlah'),
            ],
            'total' => Chart::where('jenis_kelamin', 'L')->sum('jumlah')
        ];

        $data['pie_perempuan'] = [
            'labels' => [
                'Usia Balita & anak - anak',
                'Usia Remaja dan Dewasa',
                'Usia Lanjut'
            ],
            'data' =>  [
                Chart::where('category', 'Usia Balita & anak - anak')->where('jenis_kelamin', 'P')->get()->sum('jumlah'),
                Chart::where('category', 'Usia Remaja dan Dewasa')->where('jenis_kelamin', 'P')->get()->sum('jumlah'),
                Chart::where('category', 'Usia Lanjut')->where('jenis_kelamin', 'P')->get()->sum('jumlah'),
            ],
            'total' => Chart::where('jenis_kelamin', 'P')->sum('jumlah')
        ];

        $bulans = [
            [
                'id'   => '01',
                'name' => 'Januari'
            ],
            [
                'id'   => '02',
                'name' => 'Februari'
            ],
            [
                'id'   => '03',
                'name' => 'Maret'
            ],
            [
                'id'   => '04',
                'name' => 'April'
            ],
            [
                'id'   => '05',
                'name' => 'Mei'
            ],
            [
                'id'   => '06',
                'name' => 'Juni'
            ],
            [
                'id'   => '07',
                'name' => 'Juli'
            ],
            [
                'id'   => '08',
                'name' => 'Agustus'
            ],
            [
                'id'   => '09',
                'name' => 'September'
            ],
            [
                'id'   => '10',
                'name' => 'Oktober'
            ],
            [
                'id'   => '11',
                'name' => 'November'
            ],
            [
                'id'   => '12',
                'name' => 'Desember'
            ]
        ];

        $balita = [];
        $remaja = [];
        $lanjut = [];
        foreach ($bulans as $key => $bulan) {
            $balita[] = Chart::where('category', 'Usia Balita & anak - anak')->where('bulan', $bulan['id'])->get()->sum('jumlah');
            $remaja[] = Chart::where('category', 'Usia Remaja dan Dewasa')->where('bulan', $bulan['id'])->get()->sum('jumlah');
            $lanjut[] = Chart::where('category', 'Usia Lanjut')->where('bulan', $bulan['id'])->get()->sum('jumlah');
        }

        $data['bar_month'] = [
            'total'    => Chart::all()->sum('jumlah'),
            'labels'   => array_column($bulans, 'name'),
            'datasets' => [
                [
                    'label' => 'Usia Balita & anak - anak',
                    'data'  => $balita
                ],
                [
                    'label' => 'Usia Remaja dan Dewasa',
                    'data'  => $remaja
                ],
                [
                    'label' => 'Usia Lanjut',
                    'data'  => $lanjut
                ],
            ]
        ];

        $data['galeris'] = GaleriFoto::all();
        $data['artikels'] = Artikel::all();

        return view('front.index', $data);
    }
}
