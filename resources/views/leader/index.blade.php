@extends('layouts.app')
@section('title', 'Student Services')
@section('content')
@include('partials.topNav')
@include('layouts.mainNav')
<!-- banner section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>Leaders</h1>
                </div><!-- Top Row /-->
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                         <li class="active"><a href="/">Home</a></li>
                         <li class="active"><a href="{{ route('leader.index') }}">Leaders</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
            </div><!-- Row /-->
        </div>
<!-- End of the banner section -->
<!-- Content section -->
        <div class="content-section module single-products-page products-page">
        <!-- Content Section Ends /-->
		<!-- Related Products -->
        <div class="row">
                <div class="products-wrap">
                @forelse ($leaders as $leader)
                    <div class="medium-4 small-12 columns">
                            <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
                                    <img src="{{ Voyager::image( $leader->thumbnail('small'))}}" alt="Man with backpack"
                                        class="d-block w-full">
                              <div class="px-2 py-2">
                                <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                                  <a href="{{ route('leader.faculty',$leader->faculty->slug) }}">{{ $leader->faculty->name }} Leadership</a>
                                </p>
                                <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                                </h1>
                                <p class="mb-1">
                                </p>
                              </div>
                              <a href="{{ route('leader.faculty',$leader->faculty->slug) }}" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                               Show all the leaders
                              </a>
                            </div>
                    </div><!-- product Ends here -->
                @empty
                    <h4 align="center">There is no services at moment!</h4>
                @endforelse
                </div><!-- products wrap -->
            </div><!-- Row Ends -->
        </div>
        <!-- Related Products Ends /-->
        <!-- Call to Action box -->
        @include('partials.call')
        <!-- Call to Action End /-->
@include('partials.footer')
@endsection


