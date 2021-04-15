<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('siswa.create' )}}" class="btn btn-primary">Tambah</a>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Jenis kelamin</th>
                            <th>Tempat lahir</th>
                            <th>Tanggal lahir</th>
                            <th>Alamat</th>
                            <th>Asal Sekolah</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach($data_siswa as $d)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $d->nis }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->jenis_kelamin }}</td>
                            <td>{{ $d->tempat_lahir }}</td>
                            <td>{{ $d->tanggal_lahir }}</td>
                            <td>{{ $d->alamat }}</td>
                            <td>{{ $d->asal_sekolah }}</td>
                            <td>{{ $d->kelas }}</td>
                            <td>{{ $d->jurusan }}</td>
                            <td><a href="{{route('siswa.edit',[$d->id])}}" class="btn btn-warning">Ubah</a>
                                    <form action="{{route('siswa.destroy',[$d->id])}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">