<p class="title_tuvansanpham">Tìm kiếm</p>
<div style="width: 50%;height: 2px;background-color: red;margin-bottom: 14px;margin-left: 35px;"></div>
<form id="frm_search" action="#tim-kiem.html" method="post">
   <div class="tk-rr">
      <div class="tk-ct">
         <div style="font-size:13px;color:#444;font-weight:bold;padding:10px">
            Bạn muốn tìm bất động sản, hãy theo hướng dẫn dưới đây
         </div>
         <div class="ip-but">
            <p class="p_search_right">Chọn loại tin</p>
            <select class="seldientich lodtin" name="id_item2">
               <option value="0">Loại tin</option>
               <option value="1">Đất nền</option>
               <option value="2">Căn hộ</option>
               <option value="3">Nhà xưởng</option>
            </select>
         </div>
         <div class="ip-but">
            <p class="p_search_right">Tỉnh/Thành</p>
            <select name="tinhthanh" id="isthanhpho">
               <option value="0"> Chọn thành phố</option>
               <option value="3">TP Hồ Chí Minh</option>
               <option value="31">Bình Dương</option>
               <option value="33">long an</option>
            </select>
         </div>
         <div class="ip-but">
            <p class="p_search_right">Quận/Huyện</p>
            <select name="quanhuyen" id="isquanhuyen">
               <option value="0">Quận/ Huyện</option>
            </select>
         </div>
         <div class="ip-but">
            <p class="p_search_right">Diện tích</p>
            <select class="seldientich" id="dientichcc" name="dtbds">
               <option value="0">Diện tích</option>
               <option value="100">Không xác định</option>
               <option value="1">&lt;= 30 m2</option>
               <option value="2">30-50 m2</option>
               <option value="3">50-80 m2</option>
               <option value="4">80-100 m2</option>
               <option value="5">100-150 m2</option>
               <option value="6">150-200 m2</option>
               <option value="7">200-250 m2</option>
               <option value="8">250-300 m2</option>
               <option value="9">300-500 m2</option>
               <option value="10">&gt;=500 m2</option>
            </select>
         </div>
         <div class="ip-but">
            <p class="p_search_right">Chọn giá</p>
            <select class="selgia" name="pricebds" id="cboPrice">
               <option value="0">Mức giá</option>
               <option value="100">Thỏa thuận</option>
               <option value="200">10 - 50 triệu</option>
               <option value="201">50 - 100 triệu</option>
               <option value="202">100 - 300 triệu</option>
               <option value="1">300 - 500 triệu</option>
               <option value="2">500 - 800 triệu</option>
               <option value="3">800 - 1 tỷ</option>
               <option value="4">1 - 2 tỷ</option>
               <option value="5">2 - 3 tỷ</option>
               <option value="6">3 - 5 tỷ</option>
               <option value="7">5 - 7 tỷ</option>
               <option value="8">7 - 10 tỷ</option>
            </select>
         </div>
         <div class="ip-but">
            <input onclick="reset()" style="margin-right:15px" type="button" class="btn_search_right"
               value="Chọn lại">
            <input type="button" class="btn_search_right" value="Tìm kiếm" onclick="load_data()">
         </div>
      </div>
   </div>
</form>
<div class="an_mb">
   <p class="title_tuvansanpham">Tin tức nổi bật</p>
   <div style="width: 50%;height: 2px;background-color: red;margin-bottom: 14px;margin-left: 35px;"></div>
   <div class="clear"></div>
   <div class="tinnoibat">
      <ul class="scroller1">
         <?php 
         $rsAr = DB::table('articles')->where('status', 1)->orderBy('is_hot', 'desc')->orderBy('id', 'desc')->limit(3)->get();
         //dd($rsAr);
         ?>
         @if(!empty($rsAr) > 0)
         @foreach($rsAr as $articles)
         <li style="border-bottom:1px solid #ECECEC;margin-bottom:10px;">
            <div class="div_img_tt">
               <a href="{{ route('news-detail', ['slug' => $articles->slug, 'id' => $articles->id]) }}" title="{!! $articles->title !!}"><img
                  class="img_ttnb" src="{{ Helper::showImage($articles->image_url) }}"
                  width="90" height="90"
                  alt="{!! $articles->title !!}"></a>
               <div class="clear"></div>
            </div>
            <div class="div_tt_tt">
               <h4 style="margin-top:0px"><a class="ten_ttnb"
                  href="{{ route('news-detail', ['slug' => $articles->slug, 'id' => $articles->id]) }}">{!! $articles->title !!}</a>
               </h4>
               <div class="clear"></div>
               <p class="mota_tt" style="height:50px; overflow:hidden">
               {{ $articles->description }}
               </p>
               <a class="xemtiep_tt"
                  href="{{ route('news-detail', ['slug' => $articles->slug, 'id' => $articles->id]) }}">Xem
               tiếp...</a>
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </li>
         @endforeach
         @endif
         <div class="clear"></div>
      </ul>
      <div class="clear"></div>
      <a class="xemtatca_ttnb" href="#tin-tuc.html">Xem tất cả »</a>
   </div>
   <div class="clear"></div>
</div>