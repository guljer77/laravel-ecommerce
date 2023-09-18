@extends('admin.master')
@section('title','Edit-subcategory')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Subcategory</h5>
                <a href="{{route('all-subcategory')}}" class="btn btn-primary">All Subcategory</a>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('update-subcategory',$subcategory->id) }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Subcategory Name</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                name="subcategory_name"
                                class="form-control"
                                id="basic-default-company"
                                value="{{ $subcategory->subcategory_name }}" />
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

