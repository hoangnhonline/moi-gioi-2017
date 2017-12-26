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
         <li style="border-bottom:1px solid #ECECEC;margin-bottom:10px;">
            <div class="div_img_tt">
               <a href="#tin-tuc/sieu-do-thi-moi-cu-chi-va-ly-trinh-dai-lo-ven-song-sai-gon/109.html"><img
                  class="img_ttnb" src="files/sieu-do-thi-moi-cu-chi-1488096283.jpg"
                  width="90" height="90"
                  alt="siêu đô thị mới củ chi và lý trình đại lộ ven sông sài gòn"></a>
               <div class="clear"></div>
            </div>
            <div class="div_tt_tt">
               <h4><a class="ten_ttnb"
                  href="#tin-tuc/sieu-do-thi-moi-cu-chi-va-ly-trinh-dai-lo-ven-song-sai-gon/109.html">siêu
                  đô thị mới củ chi...</a>
               </h4>
               <div class="clear"></div>
               <p class="mota_tt">Sau khi Vingroup tiết lộ vị trí các dự án nhà ở giá rẻ ở TP.HCM thì
                  Tập đoàn Tuần Châu cũng lên...
               </p>
               <a class="xemtiep_tt"
                  href="#tin-tuc/sieu-do-thi-moi-cu-chi-va-ly-trinh-dai-lo-ven-song-sai-gon/109.html">Xem
               tiếp...</a>
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </li>
         <div class="clear"></div>
         <li style="border-bottom:1px solid #ECECEC;margin-bottom:10px;">
            <div class="div_img_tt">
               <a href="#tin-tuc/bang-gia-dat-o-huyen-cu-chi-tphcm-20152019/108.html"><img
                  class="img_ttnb"
                  src="files/bang-gia-dat-o-huyen-cu-chi-tphcm-20152019-1478348748.jpg"
                  width="90" height="90"
                  alt="BẢNG GIÁ ĐẤT Ở HUYỆN CỦ CHI TP.HCM 2015-2019"></a>
               <div class="clear"></div>
            </div>
            <div class="div_tt_tt">
               <h4><a class="ten_ttnb"
                  href="#tin-tuc/bang-gia-dat-o-huyen-cu-chi-tphcm-20152019/108.html">BẢNG GIÁ ĐẤT
                  Ở HUYỆN...</a>
               </h4>
               <div class="clear"></div>
               <p class="mota_tt">BẢNG GIÁ ĐẤT Ở HUYỆN CỦ CHI
                  (Ban hành kèm theo Quyết định số 51/2014/QĐ-UBND
                  ngày 31 tháng 12 năm...
               </p>
               <a class="xemtiep_tt"
                  href="#tin-tuc/bang-gia-dat-o-huyen-cu-chi-tphcm-20152019/108.html">Xem tiếp...</a>
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </li>
         <div class="clear"></div>
      </ul>
      <div class="clear"></div>
      <a class="xemtatca_ttnb" href="#tin-tuc.html">Xem tất cả »</a>
   </div>
   <div class="clear"></div>
</div>