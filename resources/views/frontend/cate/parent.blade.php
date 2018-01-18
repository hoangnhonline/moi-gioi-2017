@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<p class="title-home"><a>{{ $rs->name }}</a></p>
<div class="clear"></div>
@if(!empty( (array) $productList ))
<div>
   
   @foreach( $productList as $pro )
   <div class="product ">
      <div class="hinhsp">
         <a href="{{ route('chi-tiet', [$pro->slug_loai, $pro->slug, $pro->id]) }}"><img
            class="img_trung" src="{{ Helper::showImageThumb($pro->image_urls) }}"
            alt="đất nền xã nhuận đức ,củ chi" style="height: 198.587px;"></a>
         <a class="chitiet" href="{{ route('chi-tiet', [$pro->slug_loai, $pro->slug, $pro->id]) }}">Chi tiết</a>
         <a class="tham-gia-ban" href="#bat-dong-san/dat-nen-xa-nhuan-duc-cu-chi/1147.html">Tham gia ban</a> 
         <div class="clear"></div>
      </div>
      <a class="tensp" href="{{ route('chi-tiet', [$pro->slug_loai, $pro->slug, $pro->id]) }}">{!! $pro->title !!}</a>        
      
         <p class="giagoc">Giá: <span
            style="color:#1060EB;">{!! number_format($pro->price) !!} {!! Helper::getName($pro->price_unit_id, 'price_unit') !!}</span></p>     
      
         <p class="size_chatlieu">Hoa hồng :
            <span style="color:#1060EB;">{{ $pro->hoa_hong }}%</span>
         </p>
      
      <div class="clear"></div>
   </div> 
   @endforeach     
   
   <div class="clear"></div>
</div>
@endif
@stop