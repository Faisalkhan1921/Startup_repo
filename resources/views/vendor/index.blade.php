@php
$route = Route::current()->getName();
@endphp

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Business Solution</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('front_asset/style.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<script language="javascript" type="text/javascript">
function clearText(field){
if (field.defaultValue == field.value) field.value = '';
else if (field.value == '') field.value = field.defaultValue;
}
</script>
<!--[if lt IE 7]>
<style type="text/css">
.icon_home, .icon_cube, .icon_tick { behavior: url(iepngfix.htc); }
</style>
<![endif]-->

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
alpha/css/bootstrap.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>
<body>
<div id="containering">
  <div id="header">
    <div id="login">
      <form method="post" action="#">
        <label>Client Login:</label>
        <input name="username" value="username" type="text" onfocus="clearText(this)" onblur="clearText(this)" class="textfield"/>
        <input name="password" value="password" type="password" onfocus="clearText(this)" onblur="clearText(this)" class="textfield"/>
        <input type="submit" name="Search" value="" class="button"/>
      </form>
    </div>
  </div>
  <!-- End Of Header -->
  <div id="content">
    <div id="left_content">
      <div class="menu">
        <ul>
          <li class="{{($route == 'register.vendor')? 'active' : ''}}"><a href="{{route('register.vendor')}}" class="current">Vendor Register</a></li>
          <li class="{{($route == 'email.send')? 'active' : ''}}"><a href="{{route('email.send')}}">Send Email</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Testimonials</a></li>
          <li><a href="#">About Our Company</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="section_bottom_line"></div>
      <div class="section">
        <div class="icon_home">
          <h1>OUR COMPANY PROFILE</h1>
          <p> Maecenas aliquam, ligula id egestas suscipit, nisi sapien dignissim nibh, ac vestibulum lorem urna in neque. </p>
        </div>
      </div>
      <div class="section_bottom_line"></div>
      <div class="section">
        <div class="icon_cube">
          <h1>OUR WORKING STRUCTURE</h1>
          <p> Donec eget nulla et dui auctor adipiscing. Nulla vitae erat. Praesent vehicula risus vitae massa. Aenean dui. </p>
        </div>
      </div>
      <div class="section_bottom_line"></div>
      <div class="section">
        <div class="icon_tick">
          <h1>COMPANY FUTURE PLAN</h1>
          <p> Nam lectus. Nulla facilisi. Mauris consectetur. Fusce luctus neque id quam. Phasellus in ante. Suspendisse metus. </p>
        </div>
      </div>
      <div class="section_bottom_line"></div>
    </div>
    <!-- End Of left Content -->
    <div id="" style="background-color: #0A2035; height:100%;">
      <div class="container " >
        <div class="row">
            <div class="col-md-12 ml-5 mt-3 mb-3" >
                <div class="card">
                    <div class="card-header " style="background-color: #0A2035;color:white; border: 2px solid none;">
                        <h4 class="text-center">
                            Register a Vendor
                        </h4>
                    </div>

                    <div class="card-body" style="background-color: #0A2035;color:white; border: 2px solid none;">
                        <form action="{{route('vendor.store')}}" method="POST">
                            @csrf
                            <div class="form-group row">

                                <div class="col-md-6 ">
                                    <label for="">UserName</label>
                                    <input style="background-color: #0A2035; color:white;" type="text" name="uname" id="" class="form-control">
                                </div>


                                <div class="col-md-6">
                                    <label for="">Department Name</label>
                                    <input style="background-color: #0A2035; color:white;" type="text" name="dept_name" id="" class="form-control">
                                </div>
        
                                <div class="col-md-12 mt-3">
                                    <label for="">Department Address</label>
                                    <textarea style="background-color: #0A2035; color:white;" name="dept_address" id="" class="form-control" cols="30" rows="2"></textarea>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label for="">Email Address</label>
                                    <input style="background-color: #0A2035; color:white;" type="email" name="email" id="" class="form-control">
                                </div>
        
                                <div class="col-md-6 mt-2">
                                    <label for="">Phone</label>
                                    <input style="background-color: #0A2035; color:white;" type="text" name="phone" id="" class="form-control">
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label for="">Street Address</label>
                                    <input style="background-color: #0A2035; color:white;" type="text" name="st_address" id="" class="form-control">
                                </div>
        
                                <div class="col-md-4 mt-2">
                                    <label for="">Postal Code</label>
                                    <input style="background-color: #0A2035; color:white;" type="text" name="p_code" id="" class="form-control">
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="">Pasword</label>
                                    <input style="background-color: #0A2035; color:white;" type="text" name="password" id="" class="form-control" >
                                </div>
        
                                <div class="col-12 mt-2" >
                                    <label for="">LTS Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                             <select class="custom-select form-control" id="lts_number" name="countryCode" required="" onchange="updatePlaceholder()" style="background-color: #0A2035; color:white;">
                                                <optgroup label="Other countries">
                                                    <option data-countryCode="CA" value="+0002" selected>Alberta (RT0-02)</option>
                                                    <option data-countryCode="PK" value="+0003" placeholder="hi">Quebec (RT0001)</option>
                                                    <option data-countryCode="GB" value="+0001" >Ontario (+44)</option>
                                         
                                                </optgroup>
                                            </select>
                                        </div>
                                        <input id="phone" class="form-control" type="text" name="lts_code" required="" placeholder="Enter 9 Digits Number" :value="old('phone')" style="background-color: #0A2035; color:white;">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-4">
                                    <input type="submit" value="Register Vendor" class="form-control btn btn-success">
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- End Of Right Content -->
   
    <div class="footer" style="background-color: #0A2035; height:10vh; mt-5">
    
    </div>
  </div>
  <!-- End Of Content -->
</div>
<!-- End Of Container -->

<script>
    @if(Session::has('message'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
          toastr.success("{{ session('message') }}");
    @endif
  
    @if(Session::has('error'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
          toastr.error("{{ session('error') }}");
    @endif
  
    @if(Session::has('info'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
          toastr.info("{{ session('info') }}");
    @endif
  
    @if(Session::has('warning'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
          toastr.warning("{{ session('warning') }}");
    @endif
  </script>
  
</body>
</html>
