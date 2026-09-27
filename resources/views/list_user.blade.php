@extends('layouts.app')

@section('content')
<section class="page-shell">
    <div class="page-heading">
        <p class="page-eyebrow">DATA AKADEMIK / 01</p>
        <h1>Daftar Pengguna</h1>
    </div>

    <div class="table-wrap">
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="user-table__id">{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td class="user-table__npm">{{ $user->nim }}</td>
                        <td><span class="class-tag">{{ $user->nama_kelas }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection