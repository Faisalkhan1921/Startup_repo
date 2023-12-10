<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body{
            background-color: gray;
        }
    </style>
  </head>
  <body>
      <div class="container mt-5">
        <div class="row">
            <div class="col-xl-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">
                            Register Vendor
                        </h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('vendor.store')}}" method="POST">
                            @csrf
                            <div class="form-group row">

                                <div class="col-md-6 ">
                                    <label for="">UserName</label>
                                    <input type="text" name="uname" id="" class="form-control">
                                </div>


                                <div class="col-md-6">
                                    <label for="">Department Name</label>
                                    <input type="text" name="dept_name" id="" class="form-control">
                                </div>
        
                                <div class="col-md-12 mt-3">
                                    <label for="">Department Address</label>
                                    <textarea name="dept_address" id="" class="form-control" cols="30" rows="2"></textarea>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label for="">Email Address</label>
                                    <input type="email" name="email" id="" class="form-control">
                                </div>
        
                                <div class="col-md-6 mt-2">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" id="" class="form-control">
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label for="">Street Address</label>
                                    <input type="text" name="st_address" id="" class="form-control">
                                </div>
        
                                <div class="col-md-4 mt-2">
                                    <label for="">Postal Code</label>
                                    <input type="text" name="p_code" id="" class="form-control">
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="">Pasword</label>
                                    <input type="text" name="password" id="" class="form-control">
                                </div>
        
                                <div class="col-12 mt-2" >
                                    <label for="">LTS Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                             <select class="custom-select form-control" id="lts_number" name="countryCode" required="" onchange="updatePlaceholder()">
                                                <optgroup label="Other countries">
                                                    <option data-countryCode="CA" value="+0002" selected>Alberta (RT0-02)</option>
                                                    <option data-countryCode="PK" value="+0003" placeholder="hi">Quebec (RT0001)</option>
                                                    <option data-countryCode="GB" value="+0001" >Ontario (+44)</option>
                                         
                                                </optgroup>
                                            </select>
                                        </div>
                                        <input id="phone" class="form-control" type="text" name="lts_code" required="" placeholder="Enter 9 Digits Number" :value="old('phone')">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <input type="submit" value="Register Vendor" class="form-control btn btn-success">
                                    </div>
                            </div>
                        </form>

                       
                        
                    </div><!-- end card -->
                </div><!-- end card -->
            </div>

            <div class="col-xl-10 m-auto">
               
            </div>
            <!-- end col -->
        
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>