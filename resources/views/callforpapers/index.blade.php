@extends('layouts.app')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
<div class="title-section module">
    <div class="row">
        <div class="small-12 columns">
            <h1> Call for papers</h2>
            <div class="tx-div"></div>
        </div>
        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="#">Call for Papers</a></li>
            </ul>
        </div>
    </div><!-- Row /-->
</div>
<!-- End of the banner section -->
<div class="content-section module blog-page">
    <div class="row">
        <div class="medium-8 small-12 columns posts-wrap">
            @forelse($papers as $paper)
                <div class="event-content">
                <ol class="menu vertical">
                    <p><?php $file = (json_decode($paper->file))[0]->download_link; ?>
                     <a href="{{ Voyager::image( $file ) }}" target="_blank" >{!! $paper->title !!}</a></p>
                </ol>
                </div>

            @empty
                <h2>No content at the moment<h2>
            @endforelse
        </div><!-- Posts wrap ends /-->
        <div class="medium-4 small-12 columns sidebar">
            <div class="widget">
                <h2>Call for papers</h2>
                <ul class="menu vertical">
                    @forelse($allpapers as $all)
                        <li><a href="{{ route('callforpapers.show',$all->slug) }}">{!! $all->title !!}</a></li>
                    @empty
                        <li>No requests at the moment<li>
                    @endforelse
                </ul>
            </div>
        </div><!-- right bar ends here /-->

    </div><!-- Row Ends /-->
</div>



<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->
@include('partials.footer')
@endsection
