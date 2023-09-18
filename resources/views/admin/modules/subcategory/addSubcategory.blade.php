@extends('admin.master')
@section('title','Add-subcategory')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Subcategory Add</h5>
                <a href="{{route('all-subcategory')}}" class="btn btn-primary">All Subcategory</a>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Subcategory Name</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                name="subcategory_name"
                                class="form-control"
                                id="basic-default-company"
                                placeholder="Category Name" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Category Name</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="category_id" id="exampleFormControlSelect1" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">New Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
