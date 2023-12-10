@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-6 m-auto mt-4">
                <div class="card">
                    <br> <br>
                   <center>
                    <img class="rounded-circle avatar-xl" src="{{ (!empty($iddata->image))? url('upload/admin_images/'.$iddata->image):url('upload/no_image.jpg') }}" alt="Card image cap">
                   </center>
                    <div class="card-body">
                        <hr>
                        <h4 class="card-title">Name : <b>{{$iddata->name}}</b></h4>
                        <hr>
                        <h4 class="card-title">Email : <b>{{$iddata->email}}</b></h4>
                        <hr>
                        {{-- <h4 class="card-title">Username : <b>{{$iddata->username}}</b></h4> --}}
                        <hr>
                       <a href="{{route('edit.profile')}}" class="btn btn-info btn-rounded waves-effect waves-light">
                        Edit Profile
                       </a>
                    </div>
                </div>
            </div>

          

        </div>



    </div>
</div>

@endsection