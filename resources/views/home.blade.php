@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')   
      <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow bg-pastel">
                <div class="card-body text-center">
                    <img src="{{ asset('images/earth.png') }}" alt="Worldwide Recognize" class="mb-3" style="height: 50px;">
                    <h5 class="card-title">Worldwide Recognize</h5>
                    <p class="card-text">Our online course certificates can be used around the world and also in most popular universities and companies.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow bg-pastel">
                <div class="card-body text-center">
                    <img src="{{ asset('images/computer.png') }}" alt="Mostly Online Learning" class="mb-3" style="height: 50px;">
                    <h5 class="card-title">Mostly Online Learning</h5>
                    <p class="card-text">Masterstudy online certificates can be obtained in a range of specialized areas and typically take about a year to complete.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow bg-pastel">
                <div class="card-body text-center">
                    <img src="{{ asset('images/schedule.png') }}" alt="Graduate in as little as 1 Year" class="mb-3" style="height: 50px;">
                    <h5 class="card-title">Graduate in as little as 1 Year</h5>
                    <p class="card-text">Online post-graduate certificates are a popular way to develop your professional qualifications of Masterstudy.</p>
                </div>
            </div>
        </div>
    </div>

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
                <a href="/about" class="btn btn-primary">Read more</a>
            </div>
            <div class="image-container" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
                <img src="{{ asset('images/learn.jpg') }}" alt="Our Mission">
            </div>
        </div>
    </div>

   
    <!-- Course -->
    <br> <br>
     <div class="course-text">
         <h4>Course</h4>
      </div>

      <!-- <div class="d-flex justify-content-around mb-4">
        <h3 class="text-warning">Photography</h3>
        <h3>Developer</h3>
        <h3>Business</h3>
    </div> -->

    <!-- Courses -->
    <div class="row">
        <!-- Course Card 1 -->
        <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow" data-aos="fade-up" data-aos-duration="900">
                <img src="{{ asset('images/course1.png') }}" class="card-img-top" alt="3D & Animation">
                <div class="card-body">
                    <span class="badge bg-primary mb-2">Unreal Engine</span>
                    <h5 class="card-title">Introduction to Flutter – Understanding the Basics of Flutter</h5>
                    <p class="card-text">
                        <i class="bi bi-people"></i> 370 Students &nbsp;
                        <i class="bi bi-clock"></i> 10 Weeks
                    </p>
                    <p class="card-text">Tutorial ini akan memperkenalkan Anda pada Flutter, sebuah framework pengembangan aplikasi mobile yang menggunakan bahasa ...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">Free</span>
                        <a href="/courses" class="btn btn-outline-primary">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Card 2 -->
        <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow" data-aos="fade-up" data-aos-duration="900">
                <img src="{{ asset('images/course2.jpg') }}" class="card-img-top" alt="3D & Animation">
                <div class="card-body">
                    <span class="badge bg-primary mb-2">Development</span>
                    <h5 class="card-title">Introduction Laravel – Understanding the Basics of Laravel 11</h5>
                    <p class="card-text">
                        <i class="bi bi-people"></i> 100 Students &nbsp;
                        <i class="bi bi-clock"></i> 10 Weeks
                    </p>
                    <p class="card-text">Tutorial ini akan memperkenalkan Anda pada Laravel 11, sebuah framework PHP untuk pengembangan aplikasi web yang......</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">Free</span>
                        <a href="/course2" class="btn btn-outline-primary">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Card 3 -->
        <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow" data-aos="fade-up" data-aos-duration="900">
                <img src="{{ asset('images/course3.jpg') }}" class="card-img-top" alt="Business">
                <div class="card-body">
                    <span class="badge bg-success mb-2">Development</span>
                    <h5 class="card-title">Introduction to React – Understanding the Basics of React</h5>
                    <p class="card-text">
                        <i class="bi bi-people"></i> 28 Students &nbsp;
                        <i class="bi bi-clock"></i> 10 Weeks
                    </p>
                    <p class="card-text">Tutorial ini akan memperkenalkan Anda pada React.js, sebuah framework JavaScript untuk pengembangan aplikasi...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">$69.00</span>
                        <a href="/course3" class="btn btn-outline-primary">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Card 4 -->
        <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow" data-aos="fade-up" data-aos-duration="900">
                <img src="{{ asset('images/course4.jpg') }}" class="card-img-top" alt="Business">
                <div class="card-body">
                    <span class="badge bg-success mb-2">Business</span>
                    <h5 class="card-title">How To Create An Online Course</h5>
                    <p class="card-text">
                        <i class="bi bi-people"></i> 32 Students &nbsp;
                        <i class="bi bi-clock"></i> 10 Weeks
                    </p>
                    <p class="card-text">The jQuery team knows all about cross-browser issues, and they have written...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">$30.00</span>
                        <a href="" class="btn btn-outline-primary">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="/courses" class="btn btn-warning btn-lg btn-block mt-4">View Course</a>


<!-- TESTI -->
<br><br><br><br>
<div class="testimonials my-5">
        <h2 class="text-center mb-5">Why Students Love US?</h2>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-5 mb-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center">
                                    <blockquote class="blockquote">
                                        <p class="mb-4">"Kursus RoboLearn memberikan saya pemahaman yang solid tentang konsep-konsep dasar pemrograman, dan instruktur yang sangat berpengalaman membuat setiap sesi menjadi menyenangkan dan menginspirasi."</p>
                                        <img src="images/jimin.jpg" alt="DeVeor R" class="rounded-circle mb-3" style="width: 50px; height: 50px; object-fit: cover;">
                                        <strong class="mb-1">Park Jimin</strong>
                                        <span>Developer course</span>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-5 mb-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center">
                                    <blockquote class="blockquote">
                                        <p class="mb-4">"I have an understanding that, even if the work is not perfect, it's a work in progress. And the reason why I'm on Skillshare is to develop a skill. I feel that it's a safe space."</p>
                                        <img src="images/robot.png" alt="DeVeor R" class="rounded-circle mb-3" style="width: 50px; height: 50px; object-fit: cover;">
                                        <strong class="mb-1">DeVeor R</strong>
                                        <span>Business course</span>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-5 mb-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body text-center">
                                    <blockquote class="blockquote">
                                        <p class="mb-4">"I have an understanding that, even if the work is not perfect, it's a work in progress. And the reason why I'm on Skillshare is to develop a skill. I feel that it's a safe space."</p>
                                        <img src="images/robot.png" alt="DeVeor R" class="rounded-circle mb-3" style="width: 50px; height: 50px; object-fit: cover;">
                                        <strong class="mb-1">DeVeor R</strong>
                                        <span>Business course</span>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev scroll-btn left-btn" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next scroll-btn right-btn" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


@endsection

   

 
