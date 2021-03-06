@extends('layouts.app')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

 <!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Current CUEASO LEADERS</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('cueasoleaders.index')}}">CURRENT CUEASO LEADERS</a></li>

                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

<!-- Content Area Starts -->

<div class="content-section">
    <div class="content-section module blog-page">
        <div class="row">
            <div class="medium-8 small-12 columns posts-wrap">
               <table>
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Faculty</th>
                    </tr>
                  </thead>
                 <tbody>
                                                @foreach ($currentleaders as $pastleader)
                                                    <tr>
                                            
                                            
                                                      <td>
                                                       <p>{!!$pastleader->name !!}</p>    
                                                      </td>
                                                      <td>
                                                           {!!$pastleader->position !!}
                                                      </td>
                                                      <td>
                                                            {!!$pastleader->faculty !!}
                                                      </td>
                                            
                                           
                                                     </tr>
                                                      @endforeach
                                            </tbody>
                </tr>
                        </table>
        </div><!-- Posts wrap ends /-->
        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                    <h2>More about student experience</h2>
                    <ol class="menu vertical">
                    @foreach ($studentSide as $ss)
                    
                        <li> <i class="fa fa-list-ul fa-lg"><a href="{{ route('student.show', $ss->slug) }}">  {{ $ss->name }}</a></i></li>
                        <br>
                    @endforeach
                        <li> <i class="fa fa-list-ul fa-lg"><a href="{{ route('cueasoleaders.index') }}"> CUEASO Leaders</a></i></li><br>
                        <li> <i class="fa fa-list-ul fa-lg"><a href="{{ route('cueasoleaders.past_leaders') }}"> Past CUEASO Leaders</a></i></li>
                    </ol>
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
             </div>

        </div><!-- Row Ends /-->
    </div>
</div><!-- Content Section Ends /-->

<!-- Content Area Ends /-->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection
