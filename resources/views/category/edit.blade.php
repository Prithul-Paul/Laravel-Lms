@extends('layouts.app')
@section('page_title', 'Edit Category')
@section('category_active_class', 'active')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">{{ __('Edit Category') }}</h2>
            <a href="{{ route('categories') }}" class="au-btn au-btn-icon au-btn--blue">
                <i class="zmdi zmdi-arrow-left"></i>Back</a>
        </div>
    </div>
</div>
<div class="row m-t-30">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('categories.update', $category->id) }}" method="post">
                    @csrf
                    {{ method_field('PUT')}}
                    <div class="form-group">
                        <label for="category" class="control-label mb-1">Category name</label>
                        <input id="category" name="category" type="text" value="{{ $category->category_name }}" class="form-control">
                        @error('category')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <input value="{{  }}" type="hidden" name="author_id"> --}}
                    <div>
                        <button type="submit" class="btn btn-lg btn-info btn-block">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-3"></div>
</div>
@endsection