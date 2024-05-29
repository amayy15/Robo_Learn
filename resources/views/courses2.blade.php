@extends('layouts.mainlayout')

@section('title', 'courses2')

@section('content')  

  <!-- Course -->
  <br> <br>
     <div class="course-text">
         <h4>Course</h4>
      </div>
    <div class="row">
        <!-- Course Card 1 -->
        <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow" data-aos="fade-up" data-aos-duration="900">
                <img src="{{ asset('images/course1.png') }}" class="card-img-top" alt="3D & Animation">
                <div class="card-body">
                <span class="badge bg-primary mb-2">Development</span>
                    <h5 class="card-title">Introduction Laravel – Understanding the Basics of Laravel 11</h5>
                    <p class="card-text">
                    <img src="{{ asset('images/user.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-people"></i> 370 Students &nbsp;
                        <img src="{{ asset('images/clock.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-clock"></i> 10 Weeks
                    </p>
                    <p class="card-text">A WordPress LMS Plugin to create WordPress Learning Management...</p>
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
                    <span class="badge bg-primary mb-2">3D & Animation</span>
                    <h5 class="card-title">Create An LMS Website With LearnPress</h5>
                    <p class="card-text">
                    <img src="{{ asset('images/user.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-people"></i> 100 Students &nbsp;
                        <img src="{{ asset('images/clock.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-clock"></i> 10 Weeks
                    </p>
                    <p class="card-text">Lorem ipsum dolor sit amet. Qui incidunt dolores non similique ducimus...</p>
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
                    <span class="badge bg-success mb-2">Business</span>
                    <h5 class="card-title">How To Teach An Online Course</h5>
                    <p class="card-text">
                          <img src="{{ asset('images/user.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-people"></i> 28 Students &nbsp;
                         <img src="{{ asset('images/clock.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-clock"></i> 10 Weeks
                    </p>
                    <p class="card-text">This tutorial will introduce you to PHP, a server-side scripting language you can...</p>
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
                    <img src="{{ asset('images/user.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-people"></i> 32 Students &nbsp;
                         <img src="{{ asset('images/clock.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-clock"></i> 10 Weeks
                    </p>
                    <p class="card-text">The jQuery team knows all about cross-browser issues, and they have written...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">$30.00</span>
                        <a href="#" class="btn btn-outline-primary">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>

          <!-- Course Card 5 -->
          <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow" data-aos="fade-up" data-aos-duration="900">
                <img src="{{ asset('images/course4.jpg') }}" class="card-img-top" alt="Business">
                <div class="card-body">
                    <span class="badge bg-success mb-2">Business</span>
                    <h5 class="card-title">How To Create An Online Course</h5>
                    <p class="card-text">
                    <img src="{{ asset('images/user.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-people"></i> 32 Students &nbsp;
                         <img src="{{ asset('images/clock.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-clock"></i> 10 Weeks
                    </p>
                    <p class="card-text">The jQuery team knows all about cross-browser issues, and they have written...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">$30.00</span>
                        <a href="#" class="btn btn-outline-primary">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>

          <!-- Course Card 6 -->
          <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow" data-aos="fade-up" data-aos-duration="900">
                <img src="{{ asset('images/course4.jpg') }}" class="card-img-top" alt="Business">
                <div class="card-body">
                    <span class="badge bg-success mb-2">Business</span>
                    <h5 class="card-title">How To Create An Online Course</h5>
                    <p class="card-text">
                    <img src="{{ asset('images/user.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-people"></i> 32 Students &nbsp;
                         <img src="{{ asset('images/clock.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-clock"></i> 10 Weeks
                    </p>
                    <p class="card-text">The jQuery team knows all about cross-browser issues, and they have written...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">$30.00</span>
                        <a href="#" class="btn btn-outline-primary">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>

          <!-- Course Card 7 -->
          <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow" data-aos="fade-up" data-aos-duration="900">
                <img src="{{ asset('images/course4.jpg') }}" class="card-img-top" alt="Business">
                <div class="card-body">
                    <span class="badge bg-success mb-2">Business</span>
                    <h5 class="card-title">How To Create An Online Course</h5>
                    <p class="card-text">
                    <img src="{{ asset('images/user.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-people"></i> 32 Students &nbsp;
                         <img src="{{ asset('images/clock.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-clock"></i> 10 Weeks
                    </p>
                    <p class="card-text">The jQuery team knows all about cross-browser issues, and they have written...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">$30.00</span>
                        <a href="#" class="btn btn-outline-primary">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>

          <!-- Course Card 8 -->
          <div class="col-lg-3 mb-4">
            <div class="card border-0 shadow" data-aos="fade-up" data-aos-duration="900">
                <img src="{{ asset('images/course4.jpg') }}" class="card-img-top" alt="Business">
                <div class="card-body">
                    <span class="badge bg-success mb-2">Business</span>
                    <h5 class="card-title">How To Create An Online Course</h5>
                    <p class="card-text">
                    <img src="{{ asset('images/user.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-people"></i> 32 Students &nbsp;
                         <img src="{{ asset('images/clock.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-clock"></i> 10 Weeks
                    </p>
                    <p class="card-text">The jQuery team knows all about cross-browser issues, and they have written...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">$30.00</span>
                        <a href="#" class="btn btn-outline-primary">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @endsection