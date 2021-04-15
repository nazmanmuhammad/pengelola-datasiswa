<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Siswa') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              
              <div class="container">
                    <form class="form-horizontal" action="{{ route('siswa.update',[$data_siswa->id]) }}" method="post">
                        {{csrf_field()}}
                       @method('PUT')
                      <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="number" class="form-control" name="nis" id="nis" value="{{$data_siswa->nis}}"  placeholder="masukan nis..">
                      </div>

                       <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{$data_siswa->nama}}" placeholder="masukan nama..">
                      </div>

                       <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="tempat_lahir">Tempat lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{$data_siswa->tempat_lahir}}" placeholder="masukan tempat_lahir..">
                      </div>

                      <div class="form-group">
                        <label for="tanggal_lahir">Tanggal lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{$data_siswa->tanggal_lahir}}" placeholder="masukan tempat_lahir..">
                      </div>

                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" value="{{$data_siswa->alamat}}" rows="3"></textarea>
                      </div>

                        <div class="form-group">
                        <label for="asal_sekolah">Asal sekolah</label>
                        <input type="text" class="form-control" name="asal_sekolah" value="{{$data_siswa->asal_sekolah}}" id="asal_sekolah" placeholder="masukan Asal sekolah..">
                      </div>

                        <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" name="kelas" value="{{$data_siswa->kelas}}" id="kelas" placeholder="masukan Kelas..">
                      </div>

                      <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan" value="{{$data_siswa->jurusan}}">
                          <option value="RPL">RPL</option>
                          <option value="TKJ">TKJ</option>
                          <option value="MMD">MMD</option>
                          <option value="OTKP">OTKP</option>
                          <option value="BDP">BDP</option>
                        </select>
                      </div>

                      <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">