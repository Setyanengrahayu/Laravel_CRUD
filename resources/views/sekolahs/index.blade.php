@extends('template.default')

@push('page-action')
     <a href="{{ route ('sekolahs.tambah')}}" class="btn btn-primary">Tambah Data</a>
@endpush

@section('body')
<h1>SMKN 1 SAYUNG</h1>

<div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Nama Sekolah</th>
                                <th>Alamat</th>
                                <th>Jurusan</th>
                                <th>Jumlah Guru</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sekolahs as $sekolah)
                            <tr>
                                <td>{{ $sekolah->nama_sekolah }}</td>
                                <td>{{ $sekolah->alamat }}</td>
                                <td>{{ $sekolah->jurusan }}</td>
                                <td>{{ $sekolah->jumlah_guru }}</td>
                                <td>
                                    <a href="{{ route('sekolahs.edit', $sekolah->id) }}">Edit</a>
                                    <form action="{{ route('sekolahs.destroy', $sekolah->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                       <input type="submit" value="Hapus" class="btn btn-danger btn">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection