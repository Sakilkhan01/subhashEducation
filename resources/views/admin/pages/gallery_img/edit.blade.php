@extends('admin.layouts.header')
@section('title',__('Edit Gallery Image'))
@section('content')
<script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Gallery Image</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                                <form class="mb-5" method="post" action="{{ route('image.title.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" name="title" value="{{ $images[0]['title'] }}" placeholder="Enter image title">
                                            <input type="hidden" name="id" value="{{ $images[0]['id'] }}">
                                            @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-3">
                                            <select class="form-control" name="status">
                                                <option value="1" {{ $images[0]['status'] == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="2" {{ $images[0]['status'] == 2 ? 'selected' : '' }}>InActive</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                        <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                        
                                </form>
                           <div class="row">
                        @if(!empty($images))
                            @foreach($images[0]['gallery'] as $item)
                                <div class="col-lg-2 col-3">
                                    <div class="img-view">
                                      <img class="img-fluid" src="{{ asset('upload') }}/{{ $item['image'] }}">
                                    </div>
                                    <div class="d-flex justify-content-around">
                                    <div>
                                        <a  onclick="return confirm('you want to delete?');" href="{{ route('image.delete',  $item['id']) }}">Delete</a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" id="picture" class="file_btn" data-id="{{$item['id']}}">Edit</a>
                                        <input id="fileinput_{{$item['id']}}" type="file" data-id="{{$item['id']}}" accept="image/*" data-type='image' name="fileinput" style="display:none"/>
                                    </div>
                                    </div>
                                </div>

                            @endforeach
                        @else
                        <div class="col-lg-12 col-12">
                                    <p>No record found</p>
                                </div>
                        @endif
                                
                           </div>
                        </div>
                    </div>
                </div>
            </div>
           
                               <script>
                                // $(function() {
                                // $('#picture').on('click', function() {
                                //     $('#fileinput').trigger('click');
                                // });
                                // });
                                // $(document).ready(function () {
                                //     $.ajaxSetup({
                                //             headers: {
                                //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                //             }
                                //         });

                                        
                                //     $('.file_btn').on('click', function () {
                                //         var prop_id = $(this).data('id');
                                //         console.log(prop_id);
                                //         $('#fileinput_'+prop_id).trigger('click');

                                        

                                //     });

                                //     $(":file").on("change", function(e) {
                                //         var form_data = new FormData();
                                //         console.log(this.files[0].type);
                                        
                                //         var prop_id = $(this).data('id');

                                //         var file = this.files[0];
                                //         var filename = this.files[0].name;
                                //         var fileType = this.files[0].type;
                                //         var validImageTypes = ["image/gif", "image/jpeg", "image/png"];
                                //         if ($.inArray(fileType, validImageTypes) < 0) {
                                //             alert('Image not valid');
                                //         }
                                //         else{
                                //             form_data.append("file", filename);
                                //             console.log("form_data", form_data);
                                //             $.ajax({
                                //                 url: "{{ route('image.updateOne') }}",
                                //                 method: 'POST',
                                //                 data: form_data,
                                //                 dataType: 'JSON',
                                //                 processData: false,             
                                //                 contentType: false,
                                //                 success: function (data) {

                                //                 },
                                //             }).then(data => {
                                //                 $('.modal-content').html(data);
                                //                 $('#kt_modal_4_2').modal("show");
                                //             })
                                //             .catch(error => {
                                //                 var xhr = $.ajax();
                                //                 console.log(xhr);
                                //                 console.log(error);
                                //             })
                                //         }

                                //         })
                                // });






                                $(document).ready(function(){
                                    $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                                    $('.file_btn').on('click', function () {
                                    var prop_id = $(this).data('id');
                                    console.log(prop_id);
                                    $('#fileinput_'+prop_id).trigger('click');
                                });

                                $(":file").on("change", function(e) {
                                   
                                    var prop_id = $(this).data('id');
                                    var name = this.files[0].name;

                                var form_data = new FormData();
                                var ext = name.split('.').pop().toLowerCase();
                                if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
                                {
                                    alert("Invalid Image File");
                                    ajax.abort();
                                }
                                var oFReader = new FileReader();
                                oFReader.readAsDataURL(this.files[0]);
                                var f = this.files[0];
                                var fsize = f.size||f.fileSize;
                                if(fsize > 2000000)
                                {
                                    alert("Image File Size is very big");
                                    ajax.abort();
                                }
                                else
                                {
                                form_data.append("file", this.files[0]);
                                form_data.append("id", prop_id);
                                $.ajax({
                                    url:"{{ route('image.updateOne') }}",
                                    method:"POST",
                                    data: form_data,
                                    contentType: false,
                                    cache: false,
                                    processData: false, 
                                    success:function(data)
                                    {
                                        location.reload(true);
                                    }
                                });
                                }
                                });
                                });
</script>
@stop
<style>
    .img-view{
        width:100%;
        height:80px;
    }
    .img-view img{
        width:100%;
        height:100%;
    }
</style>
