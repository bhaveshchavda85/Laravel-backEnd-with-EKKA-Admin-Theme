@extends($adminTheme)
@section("content")
<div class="content">
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Category</h1>
                    <p class="breadcrumbs">
                        <span><a href="{{ route('admin.dashboard') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i><a href="{{ route('categories.index') }}">Categories</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Edit Categories
                    </p>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser"> Add Category
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="ec-vendor-list card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                {!! Form::model($category, ['method' => 'PUT','route' => ["categories.update", $category->id],'files'=>true, 'class'=>'row g-3']) !!}
                                <div class="modal-header px-4">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Update Category</h5>
                                </div>
                                <div class="modal-body px-4">
                                    <div class="row mb-2">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name">Category Name</label>
                                                <input type="text" class="form-control" id="name" name='name' placeholder="Inova" value="{{ isset($category)?$category->name:'' }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <label for="seat">Description</label>
                                                <textarea class="form-control" id="seat" name="description" rows="5">{{ isset($category)?$category->description:'' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer px-4">
                                    <input type="submit" class="btn btn-primary btn-pill" value="Update">
                                </div>
                            {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
</div> <!-- End Content -->
@endsection
@section('script')
<script src={{ asset('adminTheme/assets/plugins/data-tables/jquery.datatables.min.js') }}></script>
<script src={{ asset('adminTheme/assets/plugins/data-tables/datatables.bootstrap5.min.js') }}></script>
<script src={{ asset('adminTheme/assets/plugins/data-tables/datatables.responsive.min.js') }}></script>
@endsection
