@extends('customer.layouts.apps')

@section('apps')



  <div class="room-details">



    <!-- Room Details Section -->
    <section class="my-5">
      <div class="row">
        <div class="col-md-6 room-slider">



          <!-- Slider Carousel -->
          <div id="roomSlider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              @if ($room->image)
              @foreach ($room->image as $img)
              <div>
                  <img src='{{Storage::disk("public")->url($img)}}' class="d-block w-100" >
              </div>


              @endforeach
              
              
              @endif  


            </div>



            <a class="carousel-control-prev" href="#roomSlider" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>



            <a class="carousel-control-next" href="#roomSlider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>



          </div>

        </div>


        <div class="col-md-6">

          <!-- Room Details -->
            <h2>{{$room->roomtitle}}</h2>
            <p>Description: {{$room->description}}</p>
            <p>Room Availability: {{$room->availablerooms}}</p>
            <p>Max Occupancy: {{$room->maxoccupancy}}</p>
            <p>Price: {{$room->price}}</p>
            <p>Facilities: </p>
            @foreach ($room->facilities as $f)
           
            <li class="facilities-item"> {{$f}} </li>
        
        @endforeach   
        
            <p>{{$room->roomprice}}</p>



@include('admin.inc.message')



            <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#reservationModal">Book Now</button>

          </div>

        </div>

    </section>

    </div>


</div>



@include('admin.inc.message')



<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-body">



              <form action="{{ url('/roombook') }}" method="POST" enctype="multipart/form-data">
                @csrf 


                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Enter your name" name="name" class="form-control" id="name" required>
                </div>



                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email"  placeholder="Enter your email" name="email" class="form-control" id="email" required>
                </div>



                <div class="form-group">
                  <label for="roomcategory" class="reserve-label">Room Category </label>
                  <select class="form-control" name="roomcategory" id="roomcategory" required>
                      <option value="Normal">Normal</option>
                      <option value="Standered">Standered</option>
                      <option value="Premium">Premium</option>
                      <option value="Super Premium">Super Premium</option>
                      <option value="Queen">Queen</option>
                  </select>
                </div>



                <div class="form-group">
                  <label for="roomType">Room Type </label>
                  <select class="form-control" name="roomType" id="roomType" required>
                      <option value="Single">Single Room</option>
                      <option value="Double">Double Room</option>
                      <option value="Quad">Quad Room</option>
                      <option value="Hollywood Twin">Hollywood Twin Room</option>
                      <option value="Double-Double">Double-Double Room</option>
                      <option value="Interconnecting">Interconnecting Room</option>
                      <option value="Adjoining"> Adjoining Room</option>
                      <option value="Duplex">Duplex Room</option>
                  </select>
                </div>



                <div class="form-group">
                    <label for="checkInDate">Check-in Date</label>
                    <input type="date" class="form-control" name="checkInDate" id="checkInDate" required>
                </div>
                <div class="form-group">
                    <label for="checkOutDate">Check-out Date</label>
                    <input type="date" class="form-control" name="checkOutDate" id="checkOutDate" required>
                </div>



              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="closeButton">Close</button>
                <button type="button" class="btn btn-primary" id="reserveButton">Reserve</button>
            </div>



          </form>
          


        </div>

    </div>

</div>




@endsection



