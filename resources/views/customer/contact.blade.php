@extends('customer.layouts.apps')

@section('apps')



<div class="contact">


    <div class="row">


        <img src="image/deluxe room.jpg" media="min-width:600px" alt="Contact Image" class="contactimage">


        <div class="text-caption">

            <h1 class="text-contact">Contact Us</h1>

       </div>


    </div>



    <div class="writeus px-5 py-5">


            <h3 class="title-writeus">Write Us</h3>


            <form>


                <div class="row">


                <div class="col-sm-4">

                <div class="form-group">
                    <input type="text"placeholder="Your name..."class="form-control" id="name" name="name" required>
                </div>

                </div>


                <div class="col-sm-4">

                <div class="form-group">
                    <input type="email" placeholder="Your email..." class="form-control" id="email" name="email" required>
                </div>
    
            </div>



            <div class="col-sm-4">

                <div class="form-group">
                    <input type="text" placeholder="Subject..." class="form-control" id="subject" name="subject" required>
                </div>

            </div>



            <div class="col-sm-12">

                <div class="form-group">
                    <textarea class="form-control form-message"  placeholder="Message..."id="message" name="message" rows="5" required></textarea>
                </div>

            </div>


                </div>





                <div class="send-btn-primary">
                <button type="submit" class="send-btn  send-btn-block ">SEND<i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </div>



            </form>


        </div>


    <div class="row maptop">


        <div class="col">


            <!-- Add your map code here (e.g., using Google Maps) -->
            <div class="map-container">
                <!-- Add your map embed code here -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.781722834278!2d91.81870947103317!3d22.361869295692408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd972a7c0913d%3A0xa89bedab30fca683!2sAscii%20System!5e0!3m2!1sen!2sbd!4v1695225952836!5m2!1sen!2sbd" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


        </div>


        <div class="col contact-detail">


            <h2 class="contact-heading">GET IN TOUCH</h2>

            <h3 class="contact-title">Contact Us</h3>

            <div class="iconflex mb-3">

            <i class="fa-solid fa-envelope contact-icon"></i>

             <p class="icon-title"> hotelpradise@email.com</p>

            </div>



            <div class="iconflex mb-3">

            <i class="fa-solid fa-phone contact-icon"></i> 

            <p class="icon-title">+123456789</p>

        </div>



        <div class="iconflex mb-3">

            <i class="fa-solid fa-location-dot contact-icon"></i>

            <p class="icon-title">123 Main St, Cityville</p>

        </div>



            </div>

        </div>

    </div>


    
@endsection