<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_siswa = Siswa::get();
        return view('siswa.index', compact('data_siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nis' => 'required|numeric',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ],
        [
            'nis.required' => 'NIS harus di isi',
            'nama.required' => 'Nama harus di isi',
            'jenis_kelamin.required' => 'Jenis kelamin harus di isi',
            'tempat_lahir.required' => 'Tempat lahir harus di isi',
            'tanggal_lahir.required' => 'Tanggal lahir harus di isi',
            'alamat.required' => 'Alamat harus di isi',
            'asal_sekolah.required' => 'Asal sekolah harus di isi',
            'kelas.required' => 'Kelas harus di isi',
            'jurusan.required' => 'Jurusan harus di isi',
            'nis.numeric' => 'NIS harus menggunakan angka'
        ]);

            Siswa::create([
                'nis' => $request->get('nis'),
                'nama' => $request->get('nama'),
                'jenis_kelamin' => $request->get('jenis_kelamin'),
                'tempat_lahir' => $request->get('tempat_lahir'),
                'tanggal_lahir' => $request->get('tanggal_lahir'),
                'alamat' => $request->get('alamat'),
                'asal_sekolah' => $request->get('asal_sekolah'),
                'kelas' => $request->get('kelas'),
                'jurusan' => $request->get('jurusan')
            ]);

            return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_siswa = Siswa::find($id);
        return view('siswa.edit',compact('data_siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nis' => 'required|numeric',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ],
        [
            'nis.required' => 'NIS harus di isi',
            'nama.required' => 'Nama harus di isi',
            'jenis_kelamin.required' => 'Jenis kelamin harus di isi',
            'tempat_lahir.required' => 'Tempat lahir harus di isi',
            'tanggal_lahir.required' => 'Tanggal lahir harus di isi',
            'alamat.required' => 'Alamat harus di isi',
            'asal_sekolah.required' => 'Asal sekolah harus di isi',
            'kelas.required' => 'Kelas harus di isi',
            'jurusan.required' => 'Jurusan harus di isi',
            'nis.numeric' => 'NIS harus menggunakan angka'
        ]);
            $data_siswa = Siswa::find($id);
            $data_siswa->update([
                'nis' => $request->get('nis'),
                'nama' => $request->get('nama'),
                'jenis_kelamin' => $request->get('jenis_kelamin'),
                'tempat_lahir' => $request->get('tempat_lahir'),
                'tanggal_lahir' => $request->get('tanggal_lahir'),
                'alamat' => $request->get('alamat'),
                'asal_sekolah' => $request->get('asal_sekolah'),
                'kelas' => $request->get('kelas'),
                'jurusan' => $request->get('jurusan')
            ]);

            return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_siswa = Siswa::find($id);
        $data_siswa->delete();

        return redirect()->route('siswa.index');
    }
}
