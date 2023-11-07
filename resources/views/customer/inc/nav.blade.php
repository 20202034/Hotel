
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="top-navbar">


    <div class="container">


    <a class="navbar-brand fw-bold" href="#">Hotel Paradise</a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse " id="navbarNav">


      <ul class="navbar-nav ml-auto">


        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="/Allrooms">Rooms</a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="/services">Services</a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="/gallery">Gallery</a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>

    
        @if (Auth::user())
       
        
        <li class="nav-item">


          <form action="{{url('/logout')}}" method="GET">
            @csrf



            <button class="nav-link"  type="submit">LOGOUT</button> 



        </form>
      


        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/Account">Profile</a>
        </li>

        


        @else
        


        
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('login') }}">Login</a>
                </li>



        
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('register') }}">Register</a>
                </li>
        

       
        @endif
         


     
      </ul>


    </div>


  </div>

  
  </nav>