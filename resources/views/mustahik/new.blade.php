@extends('layouts.master')
@section('tittle','Mustahik')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @section('content')

    <div class="form-group">
        <div class="input-group">
            <h1 class="mustahik-new">INPUT MUSTAHIK BARU</h1>
        </div>
    </div>
    <form method="POST" action="{{ url('/mustahik-add') }}">
        @csrf
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Keluarga</label>
            <input class="form-control" type="text" name="mk_kk" id="example-text-input">
        </div>

        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Mustahik</label>
            <input class="form-control" type="text" name="mk_mustahik" id="example-text-input">
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Tanggal Lahir</label>
            <input class="form-control" type="date" name="mk_ttl" id="example-text-input">
        </div>
        <!---
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Keluarga</label>
            <input class="form-control" type="text" name="mk_agama" id="example-text-input">
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Keluarga</label>
            <input class="form-control" type="text" name="mk_pendidikan" id="example-text-input">
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Keluarga</label>
            <input class="form-control" type="text" name="mk_kelamin" id="example-text-input">
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Keluarga</label>
            <input class="form-control" type="text" name="mk_telefon" id="example-text-input">
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Keluarga</label>
            <input class="form-control" type="text" name="mk_kk" id="example-text-input">
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Nama Keluarga</label>
            <input class="form-control" type="text" name="mk_kk" id="example-text-input">
        </div>
        -->
        <div class="text-center">
            <input type="submit" class="btn btn-success btn-lg" value="Tambahkan"></input>
            <input type="submit" class="btn btn-info btn-lg" value="Reset"></input>
        </div>
    </form>

    @endsection
</body>

</html>