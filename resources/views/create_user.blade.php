@extends('layouts.app')

@section('content')
<section class="page-shell">
    <div class="page-heading">
        <p class="page-eyebrow">INPUT DATA / 01</p>
        <h1>Buat Pengguna Baru</h1>
    </div>

    <form class="user-form" action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="form-field">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama">
        </div>
        <div class="form-field">
            <label for="npm">NPM</label>
            <input type="text" id="npm" name="npm">
        </div>
        <div class="form-field">
            <label for="kelas_id">Kelas</label>
            <select name="kelas_id" id="kelas_id">
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
            </select>
        </div>
        <button class="submit-button" type="submit">Simpan Pengguna <span aria-hidden="true">→</span></button>
    </form>
</section>
@endsection