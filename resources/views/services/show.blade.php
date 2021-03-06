@extends('layouts.app')
@section('title', $service->name)
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>{!! $service->name !!}</h2>
                        <div class="tx-div"></div>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                     <li><a href="/">Home</a></li>
                     <li class="active"><a href="">Academics</a></li>
                     <li class="active"><a href="{{ route('services.index') }}">Student Service Information</a></li>
                     <li class="active"><a href="{{ route('services.show',$service->slug) }}">{{ $service->name }}</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>

<!-- End of the banner section -->

<div class="content-section module blog-page">
    <div class="row">
        <div class="medium-8 small-12 columns posts-wrap">
            <div class="event-thumb">
                <img  src="{{ Voyager::image( $service->image ) }}" onerror="this.style.display='none'"/>
            </div><!-- Course Thumb /-->
            <div class="event-content">
                    <p>{!! $service->content !!}</p>
                </div><!-- Course content /-->
        </div><!-- Posts wrap ends /-->
           <div class="medium-4 small-12 columns sidebar">
                <div class="widget">
                    <h2>More of students services</h2>
                        @foreach ($sideServices as $ss)
                    <ol class="menu vertical">
                        <li>
                             <i class="fa fa-list-ul fa-lg" aria-hidden="true">
                                <a href="{{ route('services.show', $ss->slug) }}">  {{ $ss->name }}</a>
                            </i>
                        </li>
                    </ol>
                    <br>
                    @endforeach
                </div><!-- widget ends /-->
                <div class="widget">
                    <h2>Popular News</h2>
                    @foreach ($newsSide as $item)
                     <div class="popular-post">
                            <a href="{{ route('news.show', $item->slug) }}"><strong>{{ $item->title }}</strong></a>
                            <p><img alt="" src="{{ Voyager::image( $item->thumbnail('small'))}}" class="float-left" />{!!  substr(strip_tags($item->content), 0,90) !!}...<a href="{{ route('news.show', $item->slug) }}">Read more</a></p>
                    </div>
                    @endforeach
                </div><!-- widget ends /-->
            </div><!-- Sidebar Ends /-->
    </div><!-- Row Ends /-->

</div>
<!-- Content Section Ends /-->

<!-- Our Teachers -->

<div class="seminar-events content-area module">
	<div class="row">
        <div class="section-title-wrapper">
                <div class="section-title">
                    <h2>Why CUEA</h2>
                </div>
                <br>
            </div> <!-- Title Ends /-->
                <div class="medium-4 columns our-process">
                  <div class="media-object process">
                    <div class="number media-object-section">
                        <div class="number"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                    </div>
                    <div class="media-object-section right-info">
                        <h5><a href="http://www.cue.or.ke/index.php/component/accreditedinstitutions/?view=university&amp;Itemid=253"><h5> Chartered Private University accredited by Commission of University Education.</h5></a></h5>
                    </div>
                  </div>
                  <div class="media-object process">
                    <div class=" number media-object-section">
                        <div class="number"><i class="fa fa-users" aria-hidden="true"></i></div>
                    </div>
                    <div class="media-object-section right-info">
                        <h5> Rich diversity: Over 30 nationalities and 100+ programmes on offer.</h5>
                    </div>
                  </div>
                  <div class="media-object process">
                    <div class=" number media-object-section">
                        <div class="number"><i class="fa fa-certificate" aria-hidden="true"></i></div>
                    </div>
                    <div class="media-object-section right-info">
                        <h5> Clear learning path from Certificate, Diploma, Degree, Masters and Doctoral Courses with a high completion time rate.</h5>
                    </div>
                  </div>
                </div>
                <div class="medium-4 columns our-process">
                    <div class="media-object process">
                        <div class=" number media-object-section">
                            <div class="number"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                        </div>
                        <div class="media-object-section right-info">
                            <h5> 35 solid years of offering education grounded on values.</h5>
                        </div>
                      </div>
                      <div class="media-object process">
                        <div class=" number media-object-section">
                            <div class="number"><i class="fa fa-files-o" aria-hidden="true"></i></div>
                        </div>
                        <div class="media-object-section right-info">
                            <h5>Training and examination centre for ACCA and KASNEB (CPA & CS).</h5>
                        </div>
                      </div>
                      <div class="media-object process">
                        <div class=" number media-object-section">
                            <div class="number"><i class="fa fa-building" aria-hidden="true"></i></div>
                        </div>
                        <div class="media-object-section right-info">
                            <h5> Two campuses: Main campus located in Langata, Nairobi and Gaba campus located in Eldoret.</h5>
                        </div>
                      </div>
                </div>
                <div class="medium-4 columns our-process">
                    <div class="media-object process">
                        <div class=" number media-object-section">
                            <div class="number"><i class="fa fa-globe" aria-hidden="true"></i></div>
                        </div>
                        <div class="media-object-section right-info">
                            <h5> A leading regional and international University..</h5>
                        </div>
                      </div>
                      <div class="media-object process">
                        <div class=" number media-object-section">
                            <div class="number"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                        </div>
                        <div class="media-object-section right-info">
                            <a href="{{ route('student.index') }}"><h5>Rich extra-curricula activities, innovation and marketable graduates.</h5></a>
                        </div>
                      </div>
                      <div class="media-object process">
                        <div class=" number media-object-section">
                            <div class="number"><i class="fa fa-eye" aria-hidden="true"></i></div>
                        </div>
                        <div class="media-object-section right-info">
                            <h5>Quality and prompt research supervision for postgraduate students.</h5>
                        </div>
                      </div>
                </div>
</div><!-- Row /-->
<br>

<div class="row">
        <div class="small-6 small-centered text-center columns">
                <a href="{{ route('about.index') }}" style="text-align:center;" class="primary button">More about cuea!</a>
        </div>
</div>

</div>
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection
