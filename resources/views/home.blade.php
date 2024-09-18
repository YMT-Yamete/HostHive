@extends('layouts.app')

@section('content')
<section class="enhanced-section-gradient py-5 mb-5 text-white">
    <div class="container text-center">
        <h1 class="display-4 mb-4 animated-heading">Powerful Hosting & Fast Support</h1>
        <p class="lead mb-5 animated-subtext">Fast, reliable hosting is your key to a happier and more productive business. See how it feels to stop worrying about hosting.</p>
        
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="card bg-dark text-white border-0 shadow-lg float-card">
                    <div class="card-body">
                        <h2 class="display-4">20</h2>
                        <p class="mb-0">years in business</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card bg-dark text-white border-0 shadow-lg float-card">
                    <div class="card-body">
                        <h2 class="display-4">30k+</h2>
                        <p class="mb-0">websites hosted</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card bg-dark text-white border-0 shadow-lg float-card">
                    <div class="card-body">
                        <h2 class="display-4">97%</h2>
                        <p class="mb-0">customer satisfaction rate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container pb-5">
    <h1 class="text-center mb-5">Our Services</h1>
    <div class="row g-4">
        <!-- Card 1: Cloud Containers -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <!-- Icon on top -->
                <div class="card-header text-center bg-light p-4">
                    <i class="fas fa-cloud fa-3x"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title mt-3">Cloud Containers</h5>
                    <p class="card-text"><strong>Most popular.</strong> A fast, flexible, easy hosting platform. Containers like you've never seen.</p>
                    <p class="card-text"><strong>From $35 /mo</strong></p>
                </div>
            </div>
        </div>

        <!-- Card 2: Linux Virtual Server (VPS) -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <!-- Icon on top -->
                <div class="card-header text-center bg-light p-4">
                    <i class="fas fa-terminal fa-3x text-dark"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title mt-3">Linux Virtual Server (VPS)</h5>
                    <p class="card-text">Run Linux on a scalable server that always offers your full resource allocation.</p>
                    <p class="card-text"><strong>From $30 /mo</strong></p>
                </div>
            </div>
        </div>

        <!-- Card 3: Windows Virtual Servers -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <!-- Icon on top -->
                <div class="card-header text-center bg-light p-4">
                    <i class="fa-brands fa-windows fa-3x text-dark"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title mt-3">Windows Virtual Servers</h5>
                    <p class="card-text">Configurable Windows hosting. Unshared, scalable resources on high-spec hardware.</p>
                    <p class="card-text"><strong>From $75 /mo</strong></p>
                </div>
            </div>
        </div>

        <!-- Card 4: High Performance Virtual Servers -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <!-- Icon on top -->
                <div class="card-header text-center bg-light p-4">
                    <i class="fas fa-bolt fa-3x text-dark"></i> 
                </div>
                <div class="card-body">
                    <h5 class="card-title mt-3">High Performance Virtual Servers</h5>
                    <p class="card-text">Serious speed: Our HPVS platform is about 5× faster than our regular Virtual Servers.</p>
                    <p class="card-text"><strong>From $40 /mo</strong></p>
                </div>
            </div>
        </div>

        <!-- Card 5: Virtual Dedicated Servers -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <!-- Icon on top -->
                <div class="card-header text-center bg-light p-4">
                    <i class="fas fa-server fa-3x text-dark"></i> 
                </div>
                <div class="card-body">
                    <h5 class="card-title mt-3">Virtual Dedicated Servers</h5>
                    <p class="card-text">Massive dedicated drives tuned for either storage or performance, at virtualized prices.</p>
                    <p class="card-text"><strong>From $170 /mo</strong></p>
                </div>
            </div>
        </div>

        <!-- Card 6: Dedicated Servers -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <!-- Icon on top -->
                <div class="card-header text-center bg-light p-4">
                    <i class="fas fa-hdd fa-3x text-dark"></i> 
                </div>
                <div class="card-body">
                    <h5 class="card-title mt-3">Dedicated Servers</h5>
                    <p class="card-text">Large-scale application? Strict privacy requirements? Make a whole server yours.</p>
                    <p class="card-text"><strong>From $260 /mo</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
