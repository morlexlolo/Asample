@extends('layouts.app')
@section('title', 'About CUEA')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
<br>
<div>
    <ul class="tabs" id="example-tabs">
        @forelse ($parentTabs as $tab)
        <li class="tabs-title "><a href="{{ route('parent.show',$tab->slug) }}" aria-selected="true">{{ $tab->title }}</a></li>
        @empty
        @endforelse
    </ul>
</div><br>
<!-- Content section -->
<div class="content-section module blog-page">
    <div class="tabs-content" data-tabs-content="example-tabs">
            <div class="row">
                <div class="medium-8 small-12 columns ">
                    <div class="blog-post">
                        {{--  <div class="featured-image">
                            <a>
                                <img alt="{!! $aboutParents->title !!}" src="{{ Voyager::image( $aboutParents->image) }}"  />
                            </a>
                        </div>  --}}
                        <h3><a>{!! $aboutParents->title !!}</a></h3>
                        <div class="tx-div"></div>
                        <div class="post-excerpt">
                            <p>{!! $aboutParents->content !!}</p>
                        </div><!-- post content ends /-->
                    </div><!-- post Ends here /-->
                </div><!-- Posts wrap /-->
                <div class="medium-4 small-12 columns sidebar">
                    <div class="widget">
                        <h2>Upcoming Events</h2>
                        <ul class="menu vertical">
                            @forelse ($events as $event)
                            <li><a href="{{ route('event.show',$event->slug) }}">{!! $event->title !!}</a></li>
                            @empty
                            @endforelse
                        </ul>
                    </div><!-- widget ends /-->
                </div><!-- right bar ends here /-->
            </div><!-- Row Ends /-->
    </div>
</div>
<!-- Content Section Ends /-->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection


