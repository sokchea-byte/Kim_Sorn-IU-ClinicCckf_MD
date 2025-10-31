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
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">created by</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Loop through categories --}}
                                    @foreach ($data as $category)
                                        <tr>
                                            <th scope="row">{{ $category->id }}</th>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->user->name }}</td>
                                            <td>
                                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success btn-sm">Edit</a>
                                                <form action="{{ route('category.delete', $category->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?');">Delete</button>
                                                </form>

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
                <div class="col-lg-4">
                    {{-- Form to add new category --}}
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Add Medicine New Category</h5>
                            <form action="{{ route('category.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="categoryName" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="categoryName" name="name" required>
                                </div>
                                <button type="submith4" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Right side columns -->

            </div>
        </section>

    </main>
@endsection
