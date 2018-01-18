@include('frontend.partials.meta')
@section('content')
@foreach($estateTypeList as $et)
<p class="title-home"><a>{!! $et->name !!}</a></p>
<div class="clear"></div>
@if(!empty($productArr[$et->id]))
<div>
   
   @foreach($productArr[$et->id] as $pro)
   <?php //dd($pro); ?>
   <div class="product ">
      <div class="hinhsp">
         <a href="{{ route('chi-tiet', [$pro->slug_loai, $pro->slug, $pro->id]) }}"><img
            class="img_trung" src="{{ Helper::showImageThumb($pro->image_url) }}"
            alt="đất nền xã nhuận đức ,củ chi" style="height: 198.587px;"></a>
         <a class="chitiet" href="{{ route('chi-tiet', [$pro->slug_loai, $pro->slug, $pro->id]) }}">Chi tiết</a>
         @if(!in_array($pro->id, $joinedProductArrId))
         <a class="tham-gia-ban" data-id="{{ $pro->id }}" href="javascript:;" data-toggle="modal" @if (!Session::get('login')) data-target="#login-modal" @else data-target="#join-sales-modal" @endif>Tham gia bán</a>
         @endif
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
   
   <div class="phantrang">
      <a href="{{ route('danh-muc', $pro->slug_loai ) }}">Xem thêm</a>
   </div>
   <div class="clear"></div>
</div>
@endif
@endforeach
@stop