<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // $data = Poli::select(
            //     'poli.*'
            //     // 'pegawai.nama as author_name'
            // );
            // // ->join('pegawai', 'berita.author', '=', 'pegawai.id');

            // return DataTables::of($data)
            //     ->addIndexColumn()
            //     ->addColumn('action', function($row){
            //         $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="edit btn btn-icon icon-left btn-warning btn-sm" style="padding: 10px 10px; font-size: 12px;"><i class="fa fa-pencil"></i></a>
            //                 <a onclick="confirmDelete('.$row->id.')" class="btn btn-icon icon-left btn-danger btn-sm" style="padding: 10px 10px; font-size: 12px;"><i class="fa fa-trash"></i></a>';
            //         return $btn;
            //     })
            //     ->rawColumns(['action'])
            //     ->make(true);
    $data = Poli::select('poli.*');

    return DataTables::of($data)
    ->addIndexColumn()
    ->addColumn('action', function($row){
        // Tombol Edit dengan Gambar
        $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="edit btn btn-icon icon-left btn-warning btn-sm" style="padding: 10px 10px; font-size: 12px;">
                    <img src="' . asset('images/edit-icon.png') . '" alt="Edit" style="width: 20px; height: 20px;">
                </a>';

        // Tombol Delete dengan Gambar
        $btn .= '<a onclick="confirmDelete('.$row->id.')" class="btn btn-icon icon-left btn-danger btn-sm" style="padding: 10px 10px; font-size: 12px;">
                    <img src="' . asset('images/delete-icon.png') . '" alt="Delete" style="width: 20px; height: 20px;">
                </a>';
        return $btn;
    })
    ->rawColumns(['action'])
    ->make(true);

        }
        return view('poli.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function create()
    {
        try{
            $poli = Poli::all();
            // $author = Pegawai::select('nama','id')->get();
            return view('poli.create', compact('poli'));
            
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    try {
        // Validasi input
        $request->validate([
            'nama_poli' => 'required|string|max:255|unique:poli,nama_poli',
            'keterangan' => 'nullable'
        ], [
            'nama_poli.required' => 'Nama Poli wajib diisi!',
            'nama_poli.unique' => 'Nama Poli sudah terdaftar, harap pilih nama lain.',
            // 'keterangan.required' => 'Keterangan harus diisi.',
        ]);

        // Menyimpan data ke dalam database
        $poli = new Poli;
        $poli->nama_poli = $request->nama_poli;
        $poli->keterangan = $request->keterangan;
        $poli->save();

        // Menyimpan pesan sukses
        \Session::flash('success', __('Data Poliklinik Berhasil Ditambahkan'));
        return redirect()->route('poli.index');

    } catch (\Illuminate\Validation\ValidationException $e) {
        // Menangani error validasi
        return redirect()->back()->withErrors($e->errors())->withInput();

    } catch (\Exception $e) {
        // Menangani error lainnya
        $errorMessage = $e->getMessage();
        \Session::flash('error', $errorMessage);
        return redirect()->back();
    }
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poli  $poli
     * @return \Illuminate\Http\Response
     */
    public function show(Poli $poli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poli  $poli
     * @return \Illuminate\Http\Response
     */
    public function edit(Poli $poli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poli $poli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poli $poli)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poli  $poli
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
        {
            try {
                $poli= Poli::findOrFail($id);
                $poli->delete();
                return response()->json(['success' => true]);
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()]);
            }
        }
}
