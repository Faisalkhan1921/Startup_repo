@extends('admin.admin_master')
@section('admin')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
<script src="{{asset('admin\assets\jquery\query.min.js')}}"></script>

<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body m-auto">

                        <h4 class="card-title">Profile Page Edit</h4>
                   
                        <form method="post" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                            @csrf
            
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                                <input name="name" class="form-control" type="text" value="{{$iddata->name}}" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email Address</label>
                            <div class="col-sm-10">
                                <input name="email" class="form-control" type="email" value="{{$iddata->email}}" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        {{-- <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input name="username" class="form-control" type="text" value="{{$iddata->username}}" id="example-text-input">
                            </div>
                        </div> --}}
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                            <div class="col-sm-10">
                                <input name="image" class="form-control" type="file"  id="image">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                           
                            <div class="col-sm-10">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                                 
                                <img id="showImage" class="rounded-circle avatar-xl" src="{{ (!empty($iddata->image))? url('upload/admin_images/'.$iddata->image):url('upload/no_image.jpg') }}" alt="Card image cap">
                                   
                                   
                            </div>
                        </div>
                        <!-- end row -->
                        <input type="submit" value="Update Profile" class="btn btn-info waves-effect waves-light">
                     </form>
                     
                    </div>
                </div>
            </div> <!-- end col -->
        </div>



    </div>
</div>

<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection