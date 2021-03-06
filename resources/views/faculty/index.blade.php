  @extends('layouts.app')
  @section('title', 'Faculties, Schools and Institute')
	@section('content')
	@include('partials.topNav')
	@include('layouts.mainNav')

<!-- banner section -->
		<div class="title-section module">
			<div class="row">

				<div class="small-12 columns">
					<h1>Faculties, Schools and Institute</h1>
				</div><!-- Top Row /-->

				<div class="small-12 columns">
					<ul class="breadcrumbs">
						 <li class="active"><a href="/">Home</a></li>
						 <li class="active"><a href="">Academics</a></li>
			  			<li class="active"><a href="{{ route('faculty.index') }}">Faculties, Schools and Institute</a></li>
					</ul><!-- Breadcrumbs /-->
				</div><!-- Bottom Row /-->

			</div><!-- Row /-->
		</div>

<!-- End of the banner section -->

<div class="content-section module single-products-page products-page">

    <!-- Content Section Ends /-->

    <!-- Related Products -->

        <div class="row">

            <div class="products-wrap">
            @forelse ($faculties as $faculty)
                <div class="medium-4 small-12 columns">
                    <div class="single-product"
                     data-aos="zoom-in-up"  data-aos-duration="3000"
                    >
                        <div class="product-img thumbnail">
                            <a href="{{route('faculty.show',$faculty->slug)}}">
                                <img   class="front-image" src="{{ Voyager::image( $faculty->thumbnail('cropped'))}}">
                            </a>
                            <div class="add-to-cart-top">
                                    <a href="{{route('faculty.show',$faculty->slug)}}" class="button primary">{{$faculty->name}}</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h6><a href="{{route('faculty.show',$faculty->slug)}}">{{$faculty->name}}</a></h6>
                           <div class="tx-div"></div>
                        </div>
                    </div>
                </div><!-- product Ends here -->
            @empty
                <h4 align="center">There is no services at moment!</h4>
            @endforelse

            </div><!-- products wrap -->

        </div><!-- Row Ends -->
    </div>

    <!-- Call to Action box -->
    @include('partials.call')
    <!-- Call to Action End /-->
@include('partials.footer')
@endsection


