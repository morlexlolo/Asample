@extends('layouts.app')
@section('title', 'Contact')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')


 <!-- banner section -->
<div class="title-section module">
    <div class="row">
        <div class="small-12 columns">
            <h1>Booking</h1>
        </div><!-- Top Row /-->
        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="#">Booking</a></li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->
    </div><!-- Row /-->
</div>
 <!-- End of the banner section -->
<!-- Content section -->
<div class="content-section module">
    <!-- Contact content area -->
    <div class="content-wrapper">
  <div class="row">
        <div class="medium-3 small-12 columns " style="margin-top:72px;">
            <div class="contact-info application ">
                <h4>LANGATA CAMPUS</h4>
                <p>
                    <strong>P.O. </strong>Box 62157 - 00200<br>
                    Nairobi, Kenya<br>
                  <strong>Email: </strong>admissions@cuea.edu<br>
                    <strong>Mobile: </strong>+(254) 709-691111<br>
                    <strong>Mobile: </strong>+(254) 709-691000<br>
                    <strong>Mobile: </strong>+(254) 704-913318
                </p>
            </div>

            <!-- <div class="contact-info application">
                <h4>ELDORET - GABA CAMPUS</h4>
                <p>
                    <strong>P.O. Box 908 - 30100<br>
                    Eldoret, Kenya<br>
                    <strong>Email: </strong>registrygaba@cuea.edu<br>
                    <strong>Mobile: </strong>+(254) - 728 458276<br>
                    <strong>Mobile: </strong>+(254) - 738 238352<br>
                    <strong>Sms: </strong>+(254) - 729 742791
                </p>
            </div> -->

            <div class="contact-info application">
                <h4>Follow Us</h4>
                    <div class="socialicons">
                    <a href="https://www.facebook.com/TheCatholicUniversityOfEasternAfricaCuea/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/cuea_official" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCkPi1mamzw2vcA97zWS76lw" target="_blank"><i class="fa fa-youtube"></i></a>
                </div><!-- Social Icons /-->
            </div>
        </div><!-- Left column Ends /-->
        <div class="medium-9 small-12 columns">
            <div class="row">
                 <div class="medium-12 small-12 columns">
            @include('partials.message')
                 </div>
          </div>
            <h2>Please fill the form below to book</h2><br>
            <div class="contact-form application">
                <form action="{{ route('booking.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="medium-6 small-12 columns">
                            <label>
                                Full Name *
                                <input type="text" value="{{ old('full_name') }}" required name="full_name" id="full_name" placeholder="Your full name here..." />
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Phone Number *
                                <input type="text" value="{{ old('phone_number') }}" name="phone_number" id="phone_number" required placeholder="Your phone number here..." />
                            </label>
                        </div>
                    </div><!-- Row Ends /-->
                    <div class="row">
                        <div class="medium-6 small-12 columns">
                            <label>
                                Email *
                                <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="Your email here ..." />
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Organization *
                                <input type="text" required name="organization" id="organization" value="{{ old('organization') }}" placeholder="Your organization name here ..." />
                            </label>
                        </div>
                    </div><!-- Row Ends /-->

                    <div class="row">
                        <div class="medium-6 small-12 columns">
                            <label>
                                Nature of the event *
                                <input type="text" required name="nature_of_the_event" id="nature_of_the_event" value="{{ old('nature_of_the_event') }}" placeholder="Nature of the event here ..." />
                            </label>
                        </div>

                        <div class="medium-6 small-12 columns">
                            <label>
                                Date of the event *
                                <input type="date" name="date_of_the_event" id="date_of_the_event" value="{{ old('date_of_the_event') }}"/>
                            </label>
                        </div>
                    </div>
                    <!-- Row Ends / -->

                    <div class="row">
                        <div class="medium-6 small-12 columns">
                            <label>
                                Number of people *
                                <input type="text" required name="number_of_people" id="number_of_people" value="{{ old('number_of_people') }}" placeholder="Number of people here ..." />
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                <legend>Facility Required *</legend>
                                @foreach ($facilities as $facility)
                                    <input type="checkbox" name="facility_required[]" value="{{ $facility->title }}"/> {{ $facility->title }}
<<<<<<< HEAD
                                @endforeach  
=======
                                @endforeach
>>>>>>> d1c7980e40568f754fc4ce77042e884147ac2195
                            </label>
                        </div>
                    </div><!-- Row Ends /-->

                    <div class="row">
                        <div class="medium-12 small-12 columns">
                            <input type="submit" class="button primary" value="Send your Booking" />
                        </div>
                    </div><!-- Row Ends /-->

                </form>
            </div><!-- Contact form /-->
        </div><!-- Right Column Ends /-->
        <div class="clearfix"></div>
        </div>
    </div>
    <!-- Contact Content Area /-->

</div>
<!-- Content Section Ends /-->


<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection
