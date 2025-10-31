@extends('admin.index')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Doctor Management</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Medicine Categories</a></li>
                    <li class="breadcrumb-item active">Doctor List</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    {{-- table categories List --}}
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Medicine Categories List</h5>
                        </div>
                    </div>
                </div>
                <!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">
                    {{-- Form to add new category --}}
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Add Medicine New Category</h5>
                            <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ Auth::user()->name }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="{{ Auth::user()->phone }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ Auth::user()->email }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>

                                @if (Auth::user()->image)
                                    <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="User Image"
                                        height="100px">
                                @else
                                    <img src="{{ asset('assets/img/profile-img.jpq1.jpg') }}" alt="Default Image" height="100px">
                                @endif

                                <button type="submit" class="btn btn-primary">Update profile</button>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- End Right side columns -->

            </div>
        </section>

    </main>
@endsection
