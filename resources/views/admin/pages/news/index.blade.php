@extends('admin.layouts.header')
@section('title',__('News List'))
@section('content')
<div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">News List</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                           <div class="d-flex justify-content-between mb-3">
                                <div>
                                     <h3 class="box-title">News List</h3>
                                </div>
                                <div>
                                    <a href="{{ route('news.create') }}" class="btn btn-primary">Add News</a>
                                </div>
                           </div>
                            <div class="table-responsive">
                                <table class="table  table-striped" id="table_list">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Title</th>
                                            <th class="border-top-0">Description</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0 text-center w-25">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=1 @endphp
                                    @foreach($news as $item)
                                        <tr class="item{{$item->id}} ">
                                            <td>{{ $i++ }}</td>
                                            <td class="fixtext">{{ Str::limit($item->title, 100) }}</td>
                                            <td class="fixtext">{{ Str::limit($item->description, 100) }}</td>
                                            @if($item->status == 1)
                                            <td>Active</td>
                                            @else
                                            <td>InActive</td>
                                            @endif
                                            <td class="text-center w-25">
                                            	<a href="{{ route('news.view', $item->id) }}" class="edit-modal btn btn-warning">View</a>
                                                <a href="{{ route('news.edit', $item->id) }}" class="edit-modal btn btn-info">Edit</a>
                                                <a href="{{ route('news.delete', $item->id) }}" onclick="return confirm('you want to delete?');" class="delete-modal btn btn-danger">Delete</a>
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