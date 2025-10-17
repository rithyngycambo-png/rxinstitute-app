@extends('layout')
@section('content')

    <div class="container-fluid px-0">


        {{-- ===== HERO SECTION ===== --}}
        <section class="d-flex flex-wrap align-items-center justify-content-center text-white"
            style="background-color: #0B1E53; min-height: 60vh; margin-top: 0px; padding-top: 90px; padding-button: 100px;">


            {{-- Left Text --}}
            <div class="col-lg-6 p-5 text-center text-lg-start">
                <h2 class="fw-bold mb-4" style="font-size: 2rem;">
                    We are a learning community dedicated to inspiring success and nurturing well-being.
                </h2>
                <p class="lead">
                    RX Institute strives for educational excellence in everything we do because
                    we believe that everyone deserves the best possible future.
                </p>
                <p class="mt-4 fst-italic">— RX Institute Principal</p>
            </div>

            {{-- Right Image --}}
            <div class="col-lg-6 text-center p-4">
                <img src="{{ asset('screenshorts/icon.png') }}" alt="RX Institute Illustration"
                    class="img-fluid rounded-4 shadow-sm" style="max-width: 60%; height: 60%;">
            </div>
        </section>

        {{-- ===== STATISTICS SECTION ===== --}}
        <section class="row text-center text-white g-0 each-box">
            {{-- Students --}}
            <div class="col-md bg-danger p-4">
                <i class="bi bi-mortarboard-fill fs-1 mb-2"></i>
                <h3 class="fw-bold">300+</h3>
                <p class="mb-0">Students</p>
            </div>

            {{-- Pedagogical Staff --}}
            <div class="col-md bg-info p-4">
                <i class="bi bi-people-fill fs-1 mb-2"></i>
                <h3 class="fw-bold">30+</h3>
                <p class="mb-0">Pedagogical Staff</p>
            </div>

            {{-- Nationalities --}}
            <div class="col-md bg-warning p-4">
                <i class="bi bi-flag-fill fs-1 mb-2"></i>
                <h3 class="fw-bold">10+</h3>
                <p class="mb-0">Nationalities</p>
            </div>

            {{-- Educators --}}
            <div class="col-md p-4" style="background-color: #8b5cf6;">
                <i class="bi bi-person-workspace fs-1 mb-2"></i>
                <h3 class="fw-bold">12</h3>
                <p class="mb-0">RX Educators</p>
            </div>

            {{-- Ratio --}}
            <div class="col-md bg-success p-4">
                <i class="bi bi-person-lines-fill fs-1 mb-2"></i>
                <h3 class="fw-bold">1 : 12</h3>
                <p class="mb-0">Educator : Student Ratio</p>
            </div>
        </section>

        {{-- ===== FOOTER ===== --}}
        <footer class="text-center py-4 text-muted small bg-light">
            © {{ date('Y') }} RX Institute. All Rights Reserved.
        </footer>
    </div>

@endsection