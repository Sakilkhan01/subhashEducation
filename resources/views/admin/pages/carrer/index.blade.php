@extends('admin.layouts.header')
	@section('title',__('List Career'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Career
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('admin/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Career</h3>
              <div style="float: right;">
                <a class="btn btn-info btn-sm" role="button" href="{{ route('career.create') }}" title="Add Client">+ Add Client </a>
              </div>
            </div>
            <div class="box-body">
              <table id="table_list" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Logo</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php $i=1 @endphp
                  @foreach($clients as $row)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>
                        <img src="{{ url('upload/client/'.$row->logo) }}" style="border-radius: 50%;height: 80px;object-fit: cover;width:80px;background-size:cover;" class="img-fluid" alt="Product Image">
                      </td>
                      <td>{{ $row->name }}</td>
                      <td>
                        @if($row['status'] == '1')
                          <span class="label label-success">Active</span>
                        @else
                          <span class="label label-danger">Not Active</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('carrer.delete', $row->id) }}" title="Delete Category" onclick="return confirm('Are you sure you want to delete')">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>&nbsp;
                          <a href="{{ route('career.edit', $row->id) }}" title="Edit Category">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                          </a>
                      </td>
                    </tr>
                  @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

	@endsection