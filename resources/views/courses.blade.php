@extends('layouts.modullayout')
@section('title', 'home')
@section('content')

<div class="course-container" style="margin-top: 50px;"> <!-- Menambahkan margin-top untuk memberikan jarak dari navbar -->
  <div class="row">
    <!-- Video Course Section -->
    <div class="col-md-6">
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="course-video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/epRWFH47xCI" allowfullscreen></iframe>
          </div>
          <span class="badge bg-primary mb-2">Developer</span>
          <h5 class="card-title">Introduction Flutter – Memahami Dasar Flutter</h5>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <span class="text-muted">Free</span>
          </div>
          <ul class="list-unstyled mt-3">
            <li class="d-flex align-items-center mb-2">
              <i class="bi bi-star mr-2"></i>
              <span>100% positive reviews</span>
            </li>
            <li class="d-flex align-items-center mb-2">
              <i class="bi bi-people mr-2"></i>
              <span>373 students</span>
            </li>
            <li class="d-flex align-items-center mb-2">
              <i class="bi bi-book mr-2"></i>
              <span>15 lessons</span>
            </li>
            <li class="d-flex align-items-center mb-2">
              <i class="bi bi-translate mr-2"></i>
              <span>Language: English</span>
            </li>
            <li class="d-flex align-items-center mb-2">
              <i class="bi bi-check-square mr-2"></i>
              <span>1 quiz</span>
            </li>
            <li class="d-flex align-items-center mb-2">
              <i class="bi bi-file-earmark mr-2"></i>
              <span>Assessments: Yes</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Video Course Section -->

    <!-- Description, Curriculum, and Instructor Section -->
    <div class="col-md-6">
      <!-- Description Section -->
      <div class="card">
        <div class="card-body">
          <div class="course-header">
            <h3>Description</h3>
            <p>Ini adalah kursus yang menyajikan pemahaman mendalam tentang Flutter, sebuah framework yang revolusioner dalam pengembangan aplikasi mobile.</p>
          </div>
          <div class="course-info">
            <div class="course-details">
              <p>Dalam kursus ini, Anda akan belajar bagaimana Flutter dapat mengubah cara Anda membangun aplikasi, serta bagaimana mengoptimalkan potensi penuhnya untuk menciptakan pengalaman pengguna yang menakjubkan.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Description Section -->

      <!-- Curriculum Section -->
      <div class="card mt-3">
        <div class="card-body">
          <div class="course-header">
            <h3>Curriculum</h3>
            <ul>
              <li>Lesson 1: Pengenalan Flutter</li>
              <li>Lesson 2: Instalasi dan Pengaturan Lingkungan Flutter</li>
              <li>Lesson 3: Memahami Widget dalam Flutter</li>
              <li>Lesson 4: Membangun Tampilan dengan Flutter</li>
              <li>Lesson 5: Interaksi Pengguna dalam Aplikasi Flutter</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Curriculum Section -->

      <!-- Instructor Section -->
      <div class="card mt-3">
        <div class="card-body">
          <div class="course-header">
            <h3>Instructor</h3>
            <div class="instructor-info">
              <img src="images/robot.png" alt="Foto Instruktur" style="width: 50px; height: 50px; border-radius: 50%;">
              <div class="instructor-details">
              <div class="instructor-details">
                <h5>John Doe</h5>
                <p>Profesi: Developer Senior</p>
                <p>Pengalaman: 10 tahun dalam pengembangan aplikasi mobile</p>
                <p>Spesialisasi: Flutter, Mobile App Development</p>
                <p>Deskripsi:<br>John Doe adalah seorang pengembang berpengalaman dalam menciptakan aplikasi mobile dengan menggunakan berbagai teknologi, termasuk Flutter. Dia telah bekerja dalam industri ini selama lebih dari 10 tahun dan memiliki pengetahuan mendalam tentang prinsip-prinsip pengembangan aplikasi yang efektif dan efisien.</p>
                <div class="rating">
                  <p>Rating: <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 4.0 (20 reviews)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
                    <span class="badge bg-primary mb-2">Developer</span>
                    <h5 class="card-title">Introduction Flutter – Memahami Dasar Flutter</h5>
                    <p class="card-text">
                    <img src="{{ asset('images/user.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-people"></i> 370 Students &nbsp;
                        <img src="{{ asset('images/clock.png') }}" alt="Logo" class="small-logo">
                        <i class="bi bi-clock"></i> 10 Weeks
                    </p>
                    <p class="card-text">A Flutter LMS Plugin to create Flutter Learning Management...</p>
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
                        <a href="#" class="btn btn-outline-primary">Start Learning</a>
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

@endsection
