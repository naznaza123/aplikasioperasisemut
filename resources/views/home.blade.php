@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                        <div class="">
                            <table class="table table-hover table-stripped table-bordered">
                                <tr>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Kelas
                                            </button>
                                            <ul class="dropdown-menu">
                                               
                                              <li><a class="dropdown-item" href="{{ url('xirpl2') }}">XI RPL 2</a></li>
                                              <li><a class="dropdown-item" href="#">PPLG 2</a></li>
                                              <li><a class="dropdown-item" href="#">XI TJKT 1</a></li>
                                            </ul>
                                          </div>
                                    </th>
                                    <th>
                                        @php
                                            echo date('l, d / m / Y');
                                            
                                        @endphp
                                    </th>
                                </tr>
                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
