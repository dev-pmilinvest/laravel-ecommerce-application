@extends('site.app')
@section('title', $category->name)
@section('content')
<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <!-- <h2 class="title-page">{{ $category->name }}</h2> -->
        
    </div>
</section>
<section class="section-content bg padding-y">

<div class="main-header-presentation et_pb_row et_pb_row_1">
				<div class="et_pb_column et_pb_column_3_5 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_0">
				
				
				<span class="et_pb_image_wrap "><img src="https://www.argel7.com/wp-content/uploads/2020/01/logo-argel7.png" alt="" title=""></span>
			</div><div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><span style="text-transform: uppercase; font-size: 32px; line-height: 1.2em; color: rgb(255, 255, 255) !important;"><strong>le gel qui facilite et Améliore<br> le massage pour votre bien-être !</strong></span></div><strong>
			</strong></div><strong> <!-- .et_pb_text --><div class="et_pb_button_module_wrapper et_pb_button_0_wrapper  et_pb_module ">
				<a class="et_pb_button et_pb_button_0 et_pb_bg_layout_light" href="https://www.argel7.com/catalogue/">Notre Gamme Argel 7 ®</a>
			</div><div class="et_pb_module et_pb_image et_pb_image_1">
				
				
				<span class="et_pb_image_wrap "><img src="https://www.argel7.com/wp-content/uploads/2020/01/slider-zoning.png" alt="" title="" srcset="https://www.argel7.com/wp-content/uploads/2020/01/slider-zoning.png 417w, https://www.argel7.com/wp-content/uploads/2020/01/slider-zoning-300x85.png 300w" sizes="(max-width: 417px) 100vw, 417px"></span>
			</div>
			</strong></div><strong> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_2_5 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_2">
				
				
				<span class="et_pb_image_wrap "><img src="https://www.argel7.com/wp-content/uploads/2020/01/slider-gamme.png" alt="" title="" srcset="https://www.argel7.com/wp-content/uploads/2020/01/slider-gamme.png 569w, https://www.argel7.com/wp-content/uploads/2020/01/slider-gamme-480x445.png 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 569px, 100vw"></span>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</strong></div>


    <div class="container">
        <div id="code_prod_complex">
            <div class="row">
                @forelse($category->products as $product)
                    <div class="col-md-4 ">
                        <figure class='card card-product ' data-aos="zoom-in" >
                            @if ($product->images->count() > 0)
                                <div class="img-wrap padding-y"><img src="{{ asset('storage/'.$product->images->first()->full) }}" alt=""></div>
                            @else
                                <div class="img-wrap padding-y"><img src="https://via.placeholder.com/176" alt=""></div>
                            @endif
                            <figcaption class="info-wrap">
                                <h4 class="title"><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></h4>
                            </figcaption>
                            <div class="bottom-wrap">
                                <a href="{{ route('product.show', $product->slug) }}" class="btn btn-sm btn-success float-right">Commander</a>
                                @if ($product->sale_price != 0)
                                    <div class="price-wrap h5">
                                        <span class="price"> {{ config('settings.currency_symbol').$product->sale_price }} </span>
                                        <del class="price-old"> {{ config('settings.currency_symbol').$product->price }}</del>
                                    </div>
                                @else
                                    <div class="price-wrap h5">
                                        <span class="price"> {{ config('settings.currency_symbol').$product->price }} </span>
                                    </div>
                                @endif
                            </div>
                        </figure>
                    </div>
                @empty
                    <p>Pas de produit dans la catégorie {{ $category->name }}.</p>
                @endforelse
            </div>
        </div>
    </div>
</section>

<section class="section-content bg padding-y">
    <div class="container">
        <div id="code_prod_complex">
            <div class="row">
                
            </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

</script>
@stop
