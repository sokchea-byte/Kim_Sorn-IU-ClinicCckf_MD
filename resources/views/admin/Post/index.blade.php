@extends('admin.index')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Doctor Management</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Medicine Post</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <a href="{{ route('post.create') }}" class="btn btn-primary">Add Medicine Post</a>

            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    {{-- table categories List --}}
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Medicine Categories List</h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">SubCategory Name</th>
                                        <th scope="col">created by</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">title Name</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Loop through categories --}}
                                    @foreach ($data as $category)
                                        <tr>
                                            <th scope="row">{{ $category->id }}</th>

                                            <td>
                                                @if ($category->category)
                                                    {{ $category->category->name }}
                                                @else
                                                    No Category
                                                @endif
                                            </td>

                                            <td>
                                                @if ($category->subcategory)
                                                    {{ $category->subcategory->name }}
                                                @else
                                                    No Subcategory
                                                @endif
                                            </td>

                                            <td>
                                                @if ($category->user)
                                                    {{ $category->user->name }}
                                                @else
                                                    No User
                                                @endif
                                            </td>

                                            <td><img src="{{ asset('assets/img/' . $category->image) }}" alt=""
                                                    width="50px"height=""> </td>
                                            <td>{{ $category->title }}</td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Left side columns -->

                <!-- Right side columns -->
                {{-- <div class="col-lg-4">
                    Form to add new category
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Add New Category</h5>
                            <form action="{{ route('category.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="categoryName" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="categoryName" name="name" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div> --}}
                <!-- End Right side columns -->

            </div>
        </section>

    </main>
@endsection
