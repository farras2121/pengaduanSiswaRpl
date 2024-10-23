<?php

namespace App\Http\Controllers;


use App\Models\Siswa;
use Illuminate\Http\Request;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::latest()->paginate(10);


        return view('siswa.index' , compact('siswas'));;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("siswa.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pelapor' => 'required|string:max:255',
            'terlapor'=> 'required|string:max:255',
             'kelas' => 'required|string:max:255',
            'laporan'=> 'required|string:max:255',
             'bukti' => 'required|image|mimes:png,jpg,jpeg|max:2048',



        ]);


        if ($request->hasFile('bukti')) {
            $image = $request->file('bukti');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $validatedData['bukti'] = '/images/'.$name;
        }

        Siswa::create($validatedData);
// Siswa::create([
//      'pelapor'=> $request->pelapor,
//      'terlapor'=> $request->terlapor,
//      'kelas'=> $request->kelas,
//      'laporan'=> $request->laporan,
//      'bukti'=> $request->bukti,
//      'status'=> $request->status,
// ]);



        return redirect()->route('siswa.index')-> with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function selesai($id)
    {
        $pengaduan = Siswa::find($id);
        $pengaduan->status = 'selesai';
        $pengaduan->save();

        return redirect()->route('guru.index')->with('success', 'Data Berhasil Diubah');
    }
}
