@extends('admin.layouts.header')
@section('title',__('Gallery Image'))
@section('content')
<div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Gallery Image</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                           <div class="d-flex justify-content-between mb-3">
                                <div>
                                     <h3 class="box-title">Gallery Image</h3>
                                </div>
                                <div>
                                    <a href="{{ route('image.create') }}" class="btn btn-primary">Add Images</a>
                                </div>
                           </div>
                            <div class="table-responsive">
                                <table class="table text-nowrap table-striped" id="table_list">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Title</th>
                                            <th class="border-top-0">Total Images</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=1 @endphp
                                    @foreach($images as $item)
                                        <tr class="item{{$item->id}}">
                                            <td>{{ $i++ }}</td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->gallery_count}}</td>
                                            <td>{{$item->status}}</td>
                                            <td class=" text-center">
                                                <a href="{{ route('image.view', $item->id) }}" class="edit-modal btn btn-warning">View</a>
                                                <a href="{{ route('image.edit', $item->id) }}" class="edit-modal btn btn-info">Edit</a>
                                                <a href="{{ route('image.destroy', $item->id) }}" onclick="return confirm('you want to delete?');" class="delete-modal btn btn-danger">Delete</a>
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
           
@stop

@section('js')
<script>
  $(document).ready(function() {
    
    $('#table_list').DataTable();
} );
 </script>
@stop
 <style>
    .text-left{
        text-align:end;
    }
 </style>