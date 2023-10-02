@extends('admin.layouts.app')
@section('app')
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
                      <a class="dropdown-item" href="admin/login">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Login
                      </a>
                      <a class="dropdown-item" href="admin/login">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Login
                      </a>
                  @endauth

                  
              </div>
          </li>   
       </nav>




<div class="container mt-3 ">


@include('admin.inc.message')


<h2 class="edit-h2">Edit Reservation</h2>
  
<form action="admin/booking{{$booking->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method ('PUT')


    <div class="editreserve-row editreserve-jumbotron custom-box8">
      
      
      <div class="col-sm-8 form-group">
        <h2 class="text-center">Reservation</h2>
      </div>

      <div class="col-sm-6  form-group">
        <label for="name" class="editreserve-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{$booking->name}}" required>
      </div>

      <div class="col-sm-6 form-group">
        <label for="email" class="editreserve-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{$booking->email}}" required>
      </div>

      <div class="col-sm-6 form-group">
        <label for="tel" class="editreserve-label">Contact No.</label>
        <input type="tel" name="tel" class="form-control" id="tel" placeholder="Enter Contact Number" value="{{$booking->tel}}" required>
      </div>

      <div class="col-sm-6 form-group">
        <label for="email" class="editreserve-label">Input NID</label>
        <input type="nid" class="form-control" name="nid" id="nid" placeholder="Enter NID" value="{{$booking->nid}}" required>
      </div>

      <div class="col-sm-6 form-group">
        <label for="roomType" class="editreserve-label">Room Type </label>
        <select class="form-control" name="roomType" id="roomType" required>
            <option @if($booking->roomType == 'Single Room') selected @endif>Single Room</option>
            <option @if($booking->roomType == 'Double Room') selected @endif>Double Room</option>
            <option @if($booking->roomType == 'Quad Room') selected @endif>Quad Room</option>
            <option @if($booking->roomType == 'Hollywood Twin Room') selected @endif>Hollywood Twin Room</option>
            <option @if($booking->roomType == 'Double-Double Room') selected @endif> Double-Double Room</option>
            <option @if($booking->roomType == 'Interconnecting Room') selected @endif>Interconnecting Room</option>
            <option @if($booking->roomType == 'Adjoining Room') selected @endif> Adjoining Room</option>
            <option @if($booking->roomType == 'Duplex Room') selected @endif>Duplex Room</option>
        </select>
      </div>

      <div class="col-sm-6 form-group">
        <label for="maxoccupancy" class="editreserve-label">Max Occupancy</label>
        <input type="text" class="form-control" name="maxoccupancy" id="maxoccupancy" placeholder="Enter maxoccupancy" value="{{$booking->maxoccupancy}}" required>
      </div>

      <div class="col-sm-6 form-group">
        <label for="checkInDate" class="editreserve-label">Check-in Date</label>
            <input type="date" class="form-control" name="checkInDate" id="checkInDate" value="{{$booking->checkInDate}}" required>
      </div>

      <div class="col-sm-6 form-group">
        <label for="checkOutDate" class="editreserve-label">Check-out Date</label>
        <input type="date" class="form-control" name="checkOutDate" id="checkOutDate" value="{{$booking->checkOutDate}}" required>
      </div>


      <button type="submit" class="btn btn-primary button-form">Save</button>

    </div>
    </form>
</div>



{{-- <!-- Add Bootstrap JS and jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Add custom JS -->
<script src="script.js"></script>
</body>
</html> --}}

@endsection