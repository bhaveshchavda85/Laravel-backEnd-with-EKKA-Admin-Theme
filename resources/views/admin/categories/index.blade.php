@extends($adminTheme)
@section("content")
<div class="content">
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Category List</h1>
                    <p class="breadcrumbs"><span><a href="{{ route('admin.dashboard') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Categories
                    </p>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addUser"> Add Category
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="ec-vendor-list card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $key=>$value)
                                            <tr>

                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->description }}</td>
                                                <td>
                                                    <div class="btn-group mb-1">
                                                        <button type="button"
                                                            class="btn btn-outline-success">Info</button>
                                                        <button type="button"
                                                            class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" data-display="static">
                                                            <span class="sr-only">Info</span>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{ route('categories.edit',$value->id) }}">Edit</a>
                                                            <button onclick="loadDeleteModal({{ $value->id }})"  class="dropdown-item" >Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add User Modal  -->
            <div class="modal fade modal-add-contact" id="addUser" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        {!! Form::open(array('route' => 'categories.store','method'=>'POST','files'=>	'true','class'=>'row g-3')) !!}
                            <div class="modal-header px-4">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Category</h5>
                            </div>
                            <div class="modal-body px-4">
                                <div class="row mb-2">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Category Name</label>
                                            <input type="text" class="form-control" id="name" name='name' placeholder="Categry name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label for="seat">Description</label>
                                            <textarea class="form-control" id="seat" name="description" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer px-4">
                                <button type="reset" class="btn btn-secondary btn-pill" data-bs-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-primary btn-pill" value="Save">
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
        <div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document" >
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-content p-2">
							<h4 class="modal-title">Delete</h4>
							<p class="mb-4">Are you sure want to delete?</p>
							<button type="button" class="btn btn-primary" id="modal-confirm_delete">Confirm</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div> <!-- End Content Wrapper -->
</div> <!-- End Content -->
@endsection
@section('script')
<script src={{ asset('adminTheme/assets/plugins/data-tables/jquery.datatables.min.js') }}></script>
<script src={{ asset('adminTheme/assets/plugins/data-tables/datatables.bootstrap5.min.js') }}></script>
<script src={{ asset('adminTheme/assets/plugins/data-tables/datatables.responsive.min.js') }}></script>
<script>

    function loadDeleteModal(id) {

        $('#modal-confirm_delete').attr('onclick', 'confirmDelete('+id+')');
        $('#delete_modal').modal('show');
    }
    function confirmDelete(id) {
        $.ajax({
        url: '{{ url('categories') }}/' + id,
        type: 'post',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            '_method': 'delete',
        },
        success: function (data) {
            // Success logic goes here..!
        $('#delete_modal').modal('hide');
        location.reload();
        },
        error: function (error) {
           console.log(error);
        }
    });
    }
    function refreshTable() {
    $('.datatable').each(function() {
        dt = $(this).dataTable();
        dt.fnDraw();
    })
    }
</script>
@endsection
