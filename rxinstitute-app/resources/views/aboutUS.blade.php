@extends('layout')
@section('content')

    <style>
        /* Make the content area fill the entire right section beside the sidebar */
        .about-container {
            min-height: 100vh;
            background-color: #0B1E53;
            color: #ffffff;
            padding: 60px 80px;
            margin: 0;
            width: 100%;
        }

        /* Cards styling */
        .about-card {
            background-color: #d9d2d2ff;
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease-in-out;
        }

        .about-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
        }

        /* Typography improvements */
        .about-title {
            color: #3fa9f5;
            font-weight: 700;
        }

        .about-subtext {
            color: #d0d6de;
        }

        /* Remove body and container margin conflicts */
        body,
        html {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
    </style>

    <div class="about-container">

        <!-- About Section -->
        <div class="text-center mb-5">
            <h1 class="about-title mb-3">About RX Institute 💡</h1>
            <p class="about-subtext fs-5" style="max-width: 800px; margin: 0 auto;">
                RX Institute is a modern educational platform dedicated to building future-ready learners.
                We aim to inspire innovation, empower creative thinking, and promote lifelong education.
            </p>
        </div>

        <!-- Mission, Vision, Values -->
        <div class="row text-center justify-content-center g-4">
            <div class="col-md-3">
                <div class="about-card p-4 h-100 shadow-sm">
                    <div class="mb-3 text-primary fs-1"><i class="bi bi-eye-fill"></i></div>
                    <h5 class="fw-bold text-dark">Our Vision</h5>
                    <p class="text-muted">To be a leading institution fostering excellence in technology and innovation for
                        the next generation.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="about-card p-4 h-100 shadow-sm">
                    <div class="mb-3 text-success fs-1"><i class="bi bi-bullseye"></i></div>
                    <h5 class="fw-bold text-dark">Our Mission</h5>
                    <p class="text-muted">To deliver high-quality education through practical learning, research, and global
                        collaboration.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="about-card p-4 h-100 shadow-sm">
                    <div class="mb-3 text-warning fs-1"><i class="bi bi-heart-fill"></i></div>
                    <h5 class="fw-bold text-dark">Our Values</h5>
                    <p class="text-muted">Integrity, curiosity, teamwork, and innovation are at the heart of everything we
                        do.</p>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="mt-5 text-center">
            <h2 class="fw-bold about-title mb-4">Thanks in advanced</h2>
            <p class="about-subtext mb-4">A passionate community of educators and students shaping the future together.</p>


        </div>

    </div>

@endsection