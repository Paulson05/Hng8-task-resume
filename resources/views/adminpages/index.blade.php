
@extends('adminpages.layout.dashboard')
@section('content')

@section('title', '| show post')



<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        @include('adminpages.partials.usernavbar')
        <div id="page-top">
            <div id="wrapper">


                @include('adminpages.partials.alert')
                <button type="button" class="btn btn-primary  m-5" data-toggle="modal" data-target="#myModal">
                    Create  POST
                </button>


            </div>

           </div>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Creat header Post</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="post" enctype= "multipart/form-data" >
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Title</strong>
                                        <input type="text" name="title" class="form-control" placeholder="title">
{{--                                        <span class="text-danger form-text">--}}
{{--                                            @if($errors->has('title'))--}}
{{--                                                {{ $errors->first('title') }}--}}
{{--                                            @endif--}}
{{--                                        </span>--}}
                                    </div>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Slug</strong>
                                        <input type="text" name="slug" class="form-control" placeholder="slug">

                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Category:</strong>
                                       <select class="form-control" name="category_id">


                                       </select>
                                    </div>
                                    </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">


                                        <div class="form-group">
                                            <label><strong>Tags:</strong></label><br>
                                            <select name="name[]" id="cars" multiple class="form-control custom-select">

                                            </select>

                                        </div>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Body:</strong>
                                        <textarea class="form-control"  name="body" value="body"
                                        ></textarea>
{{--                                       <span class="text-danger form-text">--}}
{{--                                            @if($errors->has('body'))--}}
{{--                                               {{ $errors->first('body') }}--}}
{{--                                           @endif--}}
{{--                                       </span>--}}
                                    </div>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </div>
                            </div>

                        </form>
                    </div>



                </div>
            </div>


        </div>




    <div class="text-center">

    </div>
    </div>
</div>


@endsection

