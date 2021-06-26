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
                    <div class="col-4">
                  
                    </div>
                    <div class="col-12">
                    <div class="card">
                            <div class="card-body">
                           
                                <h4 class="card-title">
                                WHAT WE CAN OFFER
                                <span>
                                <a href="ViewInsert">
                            <i class="fas fa-plus"></i>
                            </a> 
                                </span>
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Text</th>
                                                <th scope="col">Img</th>
                                                <th scope="col">Paragraph</th>
                                               
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($selectsectin as $sel)
                                                <tr>
                                                    <td>{{$sel->text}}</td>
                                                    <td>
                                                        <img width="100px" height="100px" src="{{ asset('img/what_we_can offer/' . $sel->img) }}" alt="">
                                                   
                                                    </td>
                                                    <td>{{$sel->paragraph}}</td>
                                                    
                                                    <td>
                                                    <form action="WHATWECANOFFERUpdate" method="post">
                                                           @csrf 
                                                            <input type="hidden" value="{{$sel->id}}" name="id">
                                                            <button type="submit" class="btn-danger">Update</button>

                                                        </form>
                                                        <form action="DeleteWHATWECANOFFER" method="post">
                                                           @csrf 
                                                            <input type="hidden" value="{{$sel->id}}" name="id">
                                                            <button type="submit" class="btn-danger">delete</button>

                                                        </form>
                                                    </td>
                                                </tr>
                                         <tr>
                                    @endforeach
                                        
                       
                                        </tbody>
                                    </table>
                             
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
