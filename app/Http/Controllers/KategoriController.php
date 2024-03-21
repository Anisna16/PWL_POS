<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;
use App\DataTables\KategoriDataTable;
//use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        /*$data=[
            'kategori_kode' => 'SNK',
            'nama' => 'Snack/Makanan Ringan',
            'created_at'=> now()
        ];
        DB::table('m_kategori')->insert($data);
        return 'Insert data baru berhasil';*/

        /*$row=DB::table('m_kategori')->where('kategori_kode','SNK')->update(['nama'=>'Camilan']);
        return'Update data berhasil. Jumlah data yang di update:'. $row. 'baris';*/

        /*$row=DB::table('m_kategori')->where('kategori_kode','SNK')->delete();
        return'Delete data berhasil. Jumlah data yang berhasil dihapus:'. $row. 'baris';*/

        //$data=DB::table('m_kategori')->get();
        //return view ('kategori', ['data' => $data]);

        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function edit($id){
        $kategori = KategoriModel::find($id);
        return view('kategori.edit', ['data' =>$kategori]);
        }     

    public function store(Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'nama' => $request->namaKategori,
        ]);
        return redirect('/kategori');
    }

    public function update($id, Request $request)
    {
        $kategori = KategoriModel::find($id);

        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->nama = $request->namaKategori;

        $kategori->save();

        return redirect('/kategori');
    }

    public function delete($id){
        $kategori = KategoriModel::find($id);
        $kategori->delete();

        return redirect('/kategori');
    }

}