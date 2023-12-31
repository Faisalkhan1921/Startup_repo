@php
$id = Auth::user()->id;
$adminData = App\Models\User::find($id);
@endphp
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- jquery.vectormap css -->
        <link href="{{asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- DataTables -->
        <link href="{{asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- Responsive datatable examples -->
        <link href="{{asset('admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />  
        <link rel="stylesheet" href="{{asset('admin/tags-input/tagsinput.css')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        

        
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">

        <link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}
       

     
    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
           @include('body.header')

            <!-- ========== Left Sidebar Start ========== -->
           @include('body.sidebar')  
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

               @yield('admin')
                <!-- End Page-content -->
               
           @include('body.footer')  
              
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

        
        <!-- apexcharts -->
        <script src="{{asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- jquery.vectormap map -->
        <script src="{{asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        
        <!-- Responsive examples -->
        <script src="{{asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <script src="{{asset('admin/assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.js')}}"></script>

        <script src="{{asset('admin\assets\jquery\query.min.js')}}"></script>

        
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 <script src="{{asset('admin/tags-input/tagsinput.js')}}"></script>
 

 {{-- <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>

 <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
 
 <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
 
 <script>
 
     $(document).ready(function(){
 
  $("#datatable").dataTable();
 
 });
 
   </script> --}}

 <script>
  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type','info') }}"
  switch(type){
     case 'info':
     toastr.info(" {{ Session::get('message') }} ");
     break;
 
     case 'success':
     toastr.success(" {{ Session::get('message') }} ");
     break;
 
     case 'warning':
     toastr.warning(" {{ Session::get('message') }} ");
     break;
 
     case 'error':
     toastr.error(" {{ Session::get('message') }} ");
     break; 
  }
  @endif 


 </script>
 

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
$(function(){
$(document).on('click','#delete',function(e){
    e.preventDefault();
    var link = $(this).attr("href");    

    Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = link
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})

});

});
</script>


 
    </body>

</html>