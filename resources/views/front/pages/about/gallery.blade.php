
@extends('front.master')
@section('title','Contact')
@push('css')
@endpush
@section('content')
    <section class="inner-banner">
        <div class="container">
            <h2 class="inner-banner__title">Gallery</h2><!-- /.inner-banner__title -->
            <ul class="thm-breadcrumb">
                <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="index.html">Home</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="about.html">About Us</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="gallery.blade.php">Gallery</a></li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <br><br>
    <div class="section">
        <div class="container-fluid">
            <div class="block-title text-left text-center">
                <h2 class="block-title__title">Gallaries</h2>
                <p class="block-title__text">This is our Gallaries. Find us for better service.</p>
            </div><!-- /.block-title -->
            <div class="row mr-3 p-2">
                <div class="col-lg-3 my-2">
                    <img src="images/gallery/gallery-1-1.jpg" alt="Awesome Image"/>
                </div>

                <div class="col-lg-3 my-2">
                    <img src="images/gallery/gallery-1-2.jpg" alt="Awesome Image"/>
                </div>

                <div class="col-lg-3 my-2">
                    <img src="images/gallery/gallery-1-3.jpg" alt="Awesome Image"/>
                </div>

                <div class="col-lg-3 my-2">
                    <img src="images/gallery/gallery-1-3.jpg" alt="Awesome Image"/>
                </div>

                <div class="col-lg-3 my-2">
                    <img src="images/gallery/gallery-1-4.jpg" alt="Awesome Image"/>
                </div>

                <div class="col-lg-3 my-2">
                    <img src="images/gallery/gallery-1-5.jpg" alt="Awesome Image"/>
                </div>
                <div class="col-lg-3 my-2">
                    <img src="images/gallery/gallery-1-3.jpg" alt="Awesome Image"/>
                </div>

                <div class="col-lg-3 my-2">
                    <img src="images/gallery/gallery-1-4.jpg" alt="Awesome Image"/>
                </div>


            </div>
        </div>
    </div>
<br>
  @include('front.layouts.cat_two')
@endsection

@push('js')

@endpush



