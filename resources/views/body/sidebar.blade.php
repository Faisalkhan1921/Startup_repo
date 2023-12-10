<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ (!empty($iddata->image))? url('upload/admin_images/'.$iddata->image):url('upload/no_image.jpg') }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{Auth::user()->name}}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <LI>Vendor</LI>
            <ul class="metismenu list-unstyled" id="side-menu">
            <li>
                <a href="{{route('white.list')}}">Show White List</a>
            </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>