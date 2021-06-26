@extends('back.home')
@section('ContentBackend')
             <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                

                            <div class="form-validation">
                                    <form class="form-valide" action="/TRAINWITHEXPERTSPostUpdate" method="post" enctype="multipart/form-data">
                                    @csrf    
                                    <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Img <span class="text-danger">*</span>
                                            </label>
                                        
                                            <div class="col-lg-6">
                                                <input type="file" id="val-username" name="img">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="name" value="{{$start_section->name}}" placeholder="Enter a Term..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" >Job<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control"  name="Job"value="{{$start_section->Job_title}}" placeholder="Enter a Strong..">
                                            </div>
                                        </div>

                                            <input type="hidden" value="{{$start_section->id }}" name="id">

                                        </div>
                                   
                                      
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



@endsection