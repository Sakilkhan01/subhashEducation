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
                                    <a href="{{ route('news.list') }}" class="btn btn-primary">Back</a>
                                </div>
                           </div>
                            <div class="table-responsive">
                                <table class="table  table-striped" id="table_list">
                                    <tbody>
                                    	<tr>
                                    		<th class="w-25">Title</th>
                                    		<td>{{ $news->title }}</td>
                                    	</tr>	
                                    	<tr>
                                    		<th class="w-25">Description</th>
                                    		<td>{{ $news->description }}</td>
                                    	</tr>
                                    	<tr>
                                    		<th class="w-25">Status</th>
                                    		@if($news->status == 1)
                                            <td>Active</td>
                                            @else
                                            <td>InActive</td>
                                            @endif
                                    	</tr>
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