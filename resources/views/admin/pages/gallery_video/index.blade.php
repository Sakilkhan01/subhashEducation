@extends('admin.layouts.header')
@section('title',__('Gallery Video'))
@section('content')
<div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Gallery Video</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                           <div class="d-flex justify-content-between mb-3">
                                <div>
                                     <h3 class="box-title">Gallery Video</h3>
                                </div>
                                <div>
                                    <a href="{{ route('video.create') }}" class="btn btn-primary">Add Video</a>
                                </div>
                           </div>
                            <div class="table-responsive">
                                <table class="table text-nowrap table-striped" id="table_list">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Video</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=1 @endphp
                                    @foreach($video as $item)
                                        <tr class="item{{$item->id}} ">
                                            <td>{{ $i++ }}</td>
                                            <td>
                                            <embed class="w-75" height="150" src="{{$item->youtube_link}}"> </embed>
                                            </td>
                                            @if($item->status == 1)
                                            <td>Active</td>
                                            @else
                                            <td>InActive</td>
                                            @endif
                                            <td class=" text-center">
                                                <a href="{{ route('video.view', $item->id) }}" class="edit-modal btn btn-warning">View</a>
                                                <a href="{{ route('video.edit', $item->id) }}" class="edit-modal btn btn-info">Edit</a>
                                                <a href="{{ route('video.delete', $item->id) }}" onclick="return confirm('you want to delete?');" class="delete-modal btn btn-danger">Delete</a>
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