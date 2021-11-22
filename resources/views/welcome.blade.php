@extends('layouts.app')

@section('content')
<section class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 copywriting">
                        <p class="story">
                            ASSALAMU'ALAIKUM
                        </p>
                        <h1 class="header">
                            Hello <span class="text-purple">Mari Kita <br> Membuat </span> Resep
                        </h1>
                        <p class="support">
                            Bismillah semoga resep ini membantu penyembuhan<br> penyakit yang dialami oleh pasien.
                        </p>
                        @auth
                        <p class="cta">
                            <a href="{{ route('resep-non-racik.create') }}" class="btn btn-master btn-primary">
                                Resep Non Racik
                            </a>
                            <a href="{{ route('resep-racik.create') }}" class="btn btn-master btn-primary">
                                Resep Racik
                            </a>
                        </p>
                        @else
                        <p class="cta">
                            <a class="btn btn-master btn-secondary disabled">
                                Resep Non Racik
                            </a>
                            <a class="btn btn-master btn-secondary disabled">
                                Resep Racik
                            </a>
                        </p>
                        @endauth
       
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <a href="#">
                            <img src="{{ asset('images/medicine.jpg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection