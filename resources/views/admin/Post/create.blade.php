@extends('admin.index')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Post</a></li>
                    <li class="breadcrumb-item active">Doctor List</li>
                </ol>
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
                            <h5 class="card-title">Form insert post</h5>
                            {{-- form insert post --}}
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- < class="row mb-3"> --}}
                                <div class="row">
                                    <div class="col-6">
                                        <label for="category" class="form-label">Category</label>
                                        <select id="category" class="form-select" aria-label="Default select example"
                                            name="category_id" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="subcategory" class="form-label">SubCategory</label>
                                        <select class="form-select" aria-label="Default select example"name="subcategory_id"
                                            required>
                                            <option value="">Select SubCategory</option>
                                            @foreach ($subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control title" id="title" name="title"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea class="tinymce-editor"name="content" id="content" cols="40" rows="10" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" class="form-control" id="image" name="image"
                                                required>
                                        </div>
                                        <div class="col-6">
                                            <label for="thumbnail" class="form-label">Preview</label>
                                            <img id="preview" src="#" alt="Image Preview" class="img-fluid"
                                                style="height: 150px;">

                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Post</button>
