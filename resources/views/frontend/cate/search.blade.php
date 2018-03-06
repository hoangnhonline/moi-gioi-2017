@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<p class="title-home"><a>Kết quả tìm kiếm : có <b>{{ number_format(count($productList)) }}</b> bất động sản</a></p>
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
         <a class="tham-gia-ban" href="#bat-dong-san/dat-nen-xa-nhuan-duc-cu-chi/1147.html">Tham gia bán</a> 
         <div class="clear"></div>
      </div>
      <a class="tensp" href="{{ route('chi-tiet', [$pro->slug_loai, $pro->slug, $pro->id]) }}">{!! $pro->title !!}</a>        
      
          <p class="giagoc"><span
            style="color:#1060EB;">{!! $pro->price_text !!}</span></p>     
      
         <p class="size_chatlieu">Hoa hồng :
            <span style="color:#1060EB;">{{ number_format($pro->hoa_hong_ctv*$pro->hoa_hong*$pro->price/100/100) }}</span>
         </p>
      
      <div class="clear"></div>
   </div> 
   @endforeach     
   
   <div class="clear"></div>
</div>
@endif
@endsection