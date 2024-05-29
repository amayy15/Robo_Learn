@extends('layouts.modullayout')

@section('title', 'about')

@section('content')  

<!-- About Us Section -->
<br><br><br>
    <div class="about-text">
        <h4>About Us</h4>
    </div>

    <div class="row justify-content-center my-3">
        <div class="col-lg-8 mb-4 d-flex align-items-center about-section" >
            <div class="text-container" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700">
                <h5 class="card-title">Our Mission</h5>
                <p class="card-text text-justify">Robo Learn adalah kursus daring yang menyajikan materi pembelajaran kepada pelajar di seluruh dunia, membantu mereka mencapai tujuan profesional dan pribadi. Dengan latar belakang yang beragam, kami mampu menciptakan pengalaman belajar yang menarik dan efektif di berbagai bidang. Kami memiliki visi bersama untuk masa depan di mana setiap individu memiliki keterampilan untuk berkembang dalam dunia yang didorong oleh teknologi.</p>
            </div>
            <div class="image-container" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
                <img src="{{ asset('images/learn.jpg') }}" alt="Our Mission">
            </div>
        </div>
    </div>

@endsection