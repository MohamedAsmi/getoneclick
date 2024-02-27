@extends('admin.layouts.app')
@section('content')
<div class="min-height-200px mb-20 pb-20">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Categories</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                {{ \Carbon\Carbon::now()->format('F Y') }}
            </div>
        </div>
    </div>
  
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30 pb-4" >
        <div class="mb-4 row justify-content-end col-md-12">
            <div class="dropdown">
                <a href="javascript:void(0)" class="load-modal" title="Edit" data-url="{{route('categories.create')}}">
                    <button type="button" class="btn btn-dark" fdprocessedid="ruveee">
                        <i class="fa fa-plus"></i>
                        New
                    </button>
                </a>
            </div>
        </div>
        
        <table id="category_table" class="table" data-url="{{route('categories.list')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

@endsection

@push('js')
<script src="{{ asset('assets/admin/category.js') }}"></script>
@endpush