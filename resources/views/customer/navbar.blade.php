{{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="top-navbar">
    <div class="container">
    <a class="navbar-brand fw-bold" href="#"><img src="image/logo.png" alt="Hotel Pradise" class="logo mt-5" height="30">Hotel Paradise</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#rooms">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#relaxation">Relaxation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
 
        @if (Auth::user())
       
        
        <li class="nav-item">
          <form action="{{url('/logout')}}" method="GET">
            @csrf

            <button class="nav-link"  type="submit">LOGOUT</button> 
        </form>
      
        </li>

        
        @else
        
        
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('login') }}">Login</a>
                </li>
        
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('register') }}">Register</a>
                </li>
        
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('relaxation') }}">Relaxation</a>
              </li>
      
       
        @endif
         

     
      </ul>
    </div>
  </div>
  </nav> --}}