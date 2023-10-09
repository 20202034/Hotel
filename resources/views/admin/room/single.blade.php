 @extends('admin.layouts.app')


 @section('app')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

             <!-- Topbar -->
                 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                     </button>

                    

                     <!-- Topbar Search -->
                     <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                       aria-label="Search" aria-describedby="basic-addon2">
                             <div class="input-group-append">
                               <button class="btn btn-primary" type="button">
                                  <i class="fas fa-search fa-sm"></i>
                                </button>
                              </div>
                             </div>
                     </form>

                      <!-- Topbar Navbar -->

                       <!-- Nav Item - User Information -->
                       <li class="nav-item dropdown no-arrow">
                        <a  class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                            <img class="img-profile rounded-circle"
                                src="{{asset('image/undraw_profile.svg')}}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">

                            @auth
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            @else
                                <a class="dropdown-item" href="room/login">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Login
                                </a>
                                <a class="dropdown-item" href="room/login">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Login
                                </a>
                            @endauth

                            
                        </div>
                    </li>   
                   </nav>
                        
                        
                <div class=container>
                <div class= "row">
                    <div class="col-md-6 mt-5">
                    {{-- <div id="roomImageSlider"> --}}
                    <div class="slider">
                        <!-- room images here -->
                                    
                        @if ($room->image)
                            @foreach ($room->image as $img)
                            <div>
                                <img src='{{Storage::disk("public")->url($img)}}' class="d-block w-100 single-image-file" >
                            </div>
                            @endforeach
                         @endif
                    
                    </div>
                

                </div>
        
        <div class="col-md-6">
            <div class="room-details mt-4 mb-2">
            <h2 class="room-title customize-fonts-title">{{$room->roomtitle}}</h2>

            <h6 class="customize-fonts"> Room Category   : {{$room->category_id}} </h6>
            <h6 class="customize-fonts">Room Size : {{$room->roomsize}}</h6>

            <div class="facilities-sec">
                <p class="facility-title customize-fonts">Room Facilities:</p>
                <ul  class="facilities-list">
                @foreach ($room->facilities as $f)
                
                    <li class="facilities-item"><i class="fas fa-check"></i>{{$f}} </li>
                
                @endforeach  
                </ul>
            </div>
            <p class="room-details customize-fonts">{{$room->description}}</p>
            <p class="customize-fonts">View :  {{$room->roomview}} </p>
         </div>

     </div>
   
     
     </div>

    
            
  @endsection