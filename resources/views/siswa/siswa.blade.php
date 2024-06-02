@extends('master')

@section('content')
<!-- Main Content Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4">Data Siswa</h3>
                <a href="#" class="btn btn-primary mb-3">Tambah Siswa</a>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No Absen</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tb_siswa as $s)
                            <tr>
                                <td>{{ $s->no_absen }}</td>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->kelas }}</td>
                                <td>
                                    <a href="#" class="btn btn-warning">Edit</a>
                                    <form action="#" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content End -->
@endsection
