@extends('layouts.master')
@section('tittle','Mustahik')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mustahik</title>
</head>

<body>
    @section('content')
    <div style="padding-top:90px">
        <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"></i>Pribadi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Alamat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Kondisi Keluarga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false">Data Keluarga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false">Indek Rumah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-6-tab" data-toggle="tab" href="#tabs-icons-text-6" role="tab" aria-controls="tabs-icons-text-6" aria-selected="false">Kepemilikan Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-7-tab" data-toggle="tab" href="#tabs-icons-text-7" role="tab" aria-controls="tabs-icons-text-7" aria-selected="false">Indikator Keimanan</a>
                </li>
            </ul>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                        @foreach($mustahik as $mk)
                        <form method="POST" action="/mustahik-update/{{$mk->mk_id}}">
                            @csrf
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Kartu Keluarga Mustahik</label>
                                <input class="form-control" type="text" value="{{$mk->mk_kk}}" name="mk_kk" id="example-text-input">
                            </div>
                            <div class="form-group">
                                <label for="example-search-input" class="form-control-label">Search</label>
                                <input class="form-control" type="search" value="Tell me your secret ..." id="example-search-input">
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Email</label>
                                <input class="form-control" type="email" value="argon@example.com" id="example-email-input">
                            </div>
                            <div class="form-group">
                                <label for="example-url-input" class="form-control-label">URL</label>
                                <input class="form-control" type="url" value="https://www.creative-tim.com" id="example-url-input">
                            </div>
                            <div class="form-group">
                                <label for="example-tel-input" class="form-control-label">Phone</label>
                                <input class="form-control" type="tel" value="40-(770)-888-444" id="example-tel-input">
                            </div>
                            <div class="form-group">
                                <label for="example-password-input" class="form-control-label">Password</label>
                                <input class="form-control" type="password" value="password" id="example-password-input">
                            </div>
                            <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Number</label>
                                <input class="form-control" type="number" value="23" id="example-number-input">
                            </div>
                            <div class="form-group">
                                <label for="example-datetime-local-input" class="form-control-label">Datetime</label>
                                <input class="form-control" type="datetime-local" value="2018-11-23T10:30:00" id="example-datetime-local-input">
                            </div>
                            <div class="form-group">
                                <label for="example-date-input" class="form-control-label">Date</label>
                                <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
                            </div>
                            <div class="form-group">
                                <label for="example-month-input" class="form-control-label">Month</label>
                                <input class="form-control" type="month" value="2018-11" id="example-month-input">
                            </div>
                            <div class="form-group">
                                <label for="example-week-input" class="form-control-label">Week</label>
                                <input class="form-control" type="week" value="2018-W23" id="example-week-input">
                            </div>
                            <div class="form-group">
                                <label for="example-time-input" class="form-control-label">Time</label>
                                <input class="form-control" type="time" value="10:30:00" id="example-time-input">
                            </div>
                            <div class="form-group">
                                <label for="example-color-input" class="form-control-label">Color</label>
                                <input class="form-control" type="color" value="#5e72e4" id="example-color-input">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary" value="Perbarui Data"></input>
                                <input type="submit" class="btn btn-danger" value="Reset"></input>
                            </div>
                        </form>
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <p>anak gembala</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                        <p>selalu riang</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
                        <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>

                    <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
                        <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>

                    <div class="tab-pane fade" id="tabs-icons-text-6" role="tabpanel" aria-labelledby="tabs-icons-text-6-tab">
                        <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>

                    <div class="tab-pane fade" id="tabs-icons-text-7" role="tabpanel" aria-labelledby="tabs-icons-text-7-tab">
                        <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>