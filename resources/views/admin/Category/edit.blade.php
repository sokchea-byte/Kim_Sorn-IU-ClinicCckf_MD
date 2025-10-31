@extends('admin.index')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Medicine Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Medicine Categories</a></li>
                <li class="breadcrumb-item active">Edit Category</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">Edit Category</h5>
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" name="name" value="{{ $category->name }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
