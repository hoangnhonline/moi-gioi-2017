<div class="block-post-news">
    <h4 class="titile-post-news">THÔNG TIN CƠ BẢN</h4>
    <form method="POST" action="http://thanhphuthinhland.vn/post-ky-gui" class="block-hover-selectpicker">
        <input type="hidden" name="_token" value="jEMNXekRfCsUKdgciJsM6dmQVgjQgF0dNSe4FiSb">
        <div class="form-horizontal">

            <div class="form-group">
                <label class="col-sm-3 control-label">Loại BĐS <span>(*)</span>:</label>
                <div class="col-sm-4">
                    <select class="form-control">
                        <option>Dự án bán</option>
                        <option>Nhà bán</option>
                        <option>Nhà cho thuê </option>
                    </select>
                </div>
            </div><!-- /form-group -->
            <div class="form-group mb0-w600">
                <label class="col-sm-3 control-label">Vị trí <span>(*)</span>:</label>
                <div class="col-sm-3 mb-600">

                    <select class="form-control">
                        <option value="">Tỉnh/TP</option>
                        <option value="1">Hồ Chí Minh</option>
                        <option value="6">Long An</option>
                    </select>
                </div>
                <div class="col-sm-3 mb-600">
                    <select class="form-control">
                        <option value="">Quận/Huyện</option>
                        <option value="1">Quận 1</option>
                        <option value="2" selected="">Quận 2</option>
                        <option value="3">Quận 3</option>
                        <option value="4">Quận 4</option>
                        <option value="5">Quận 5</option>
                        <option value="6">Quận 6</option>
                        <option value="7">Quận 7</option>
                        <option value="8">Quận 8</option>
                        <option value="9">Quận 9</option>
                        <option value="10">Quận 10</option>
                        <option value="11">Quận 11</option>
                        <option value="12">Quận 12</option>
                        <option value="13">Bình Tân</option>
                        <option value="14">Bình Thạnh</option>
                        <option value="15">Gò Vấp</option>
                        <option value="16">Phú Nhuận</option>
                        <option value="17">Tân Bình</option>
                        <option value="18">Tân Phú</option>
                        <option value="19">Thủ Đức</option>
                        <option value="20">Bình Chánh</option>
                        <option value="21">Cần Giờ</option>
                        <option value="22">Củ Chi</option>
                        <option value="23">Hóc Môn</option>
                        <option value="24">Nhà Bè</option>
                    </select>

                </div>
                <div class="col-sm-2">
                    <select class="form-control">
                        <option value="1">Phường 1</option>
                        <option value="2">Phường 2</option>
                        <option value="2">Phường 3</option>

                    </select>
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label mb0"></label>
                <div class="col-sm-4 mb-600">
                    <select class="form-control">
                        <option value="0">Đường phố</option>
                        <option value="1">Phường 1</option>
                        <option value="2">Phường 2</option>
                        <option value="3">Phường 3</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <select class="form-control">
                        <option value="0">Dự án</option>
                        <option value="1">Phường 1</option>
                        <option value="2">Phường 2</option>
                        <option value="3">Phường 3</option>
                    </select>
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Giá <span>(*)</span>:</label>
                <div class="col-sm-3">
                    <input type="text" name="price" class="form-control inline-block form-control2">
                </div>
                <label class="col-sm-2 control-label">Đơn vị <span>(*)</span>:</label>
                <div class="col-sm-3">

                    <select class="form-control">
                        <option value="">--chọn--</option>
                        <option value="1">Thỏa thuận</option>
                        <option value="2">Trăm nghìn/tháng</option>
                        <option value="3">Triệu/tháng</option>
                        <option value="4">Trăm nghìn/m2/tháng</option>
                        <option value="5">Triệu/m2</option>
                        <option value="6">Nghìn/m2/tháng</option>
                        <option value="7">Triệu</option>
                        <option value="8">Tỷ</option>
                        <option value="9">Cây vàng</option>
                        <option value="10">Trăm nghìn/m2</option>
                        <option value="11">Triệu/m2</option>
                        <option value="12">Chỉ vàng/m2</option>
                        <option value="13">Cây vàng/m2</option>
                    </select>

                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Diện tích<span>(*)</span>:</label>
                <div class="col-sm-4">
                    <input type="text" name="area" class="form-control inline-block form-control2 form-control-res" >

                </div>
                <div class="col-sm-1">m2</div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Địa điểm <span>(*)</span>:</label>
                <div class="col-sm-8">
                    <input type="text" name="full_address" class="form-control inline-block form-control2">
                </div>
            </div><!-- /form-group -->

            <hr>

            <h4 class="titile-post-news">THÔNG TIN KHÁC</h4>
            <div class="form-group">
                <label class="col-sm-3 control-label">Mặt tiền:</label>
                <div class="col-sm-3 block-col-width-left">
                    <input type="text" name="front_face" class="form-control inline-block form-control2 form-control-res">
                </div>
                <label class="col-sm-2 control-label">Đường trước nhà:</label>
                <div class="col-sm-3 block-col-width-right">
                    <input type="text" name="street_wide" class="form-control inline-block form-control-res form-control2">
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Số tầng:</label>
                <div class="col-sm-3 block-col-width-left">
                    <input type="text" name="no_floor" class="form-control inline-block form-control2">
                </div>
                <label class="col-sm-2 control-label">Số phòng:</label>
                <div class="col-sm-3 block-col-width-right">
                    <input type="text" name="no_room" class="form-control inline-block form-control2">
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Hướng BĐS:</label>
                <div class="col-sm-3 block-col-width-left">
                    <select class="form-control">
                        <option value="" selected="selected">--chọn--</option>
                        <option value="1">Đông</option>
                        <option value="2">Tây</option>
                        <option value="3">Nam</option>
                        <option value="4">Bắc</option>
                        <option value="5">Đông-Nam</option>
                        <option value="6">Đông-Bắc</option>
                        <option value="7">Tây-Nam</option>
                        <option value="8">Tây-Bắc</option>
                        <option value="9">KXĐ</option>
                    </select>
                </div>
                <label class="col-sm-2 control-label">Số toilet:</label>
                <div class="col-sm-3 block-col-width-right">
                    <input type="text" name="no_wc" class="form-control inline-block form-control2">
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Tiện ích:</label>
                <div class="col-sm-3 block-col-width-left">
                    <select class="form-control">
                        <option value="" selected="selected">--chọn--</option>
                        <option value="1">Đông</option>
                        <option value="2">Tây</option>
                        <option value="3">Nam</option>
                        <option value="4">Bắc</option>
                        <option value="5">Đông-Nam</option>
                        <option value="6">Đông-Bắc</option>
                        <option value="7">Tây-Nam</option>
                        <option value="8">Tây-Bắc</option>
                        <option value="9">KXĐ</option>
                    </select>
                </div>
            </div>

            <hr>

            <h4 class="titile-post-news">MÔ TẢ CHI TIẾT</h4>
            <div class="form-group">
                <label class="col-sm-3 control-label">Tiêu đề <span>(*)</span>:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control2" placeholder="Vui lòng gõ tiếng Việt có dấu để tin đăng được kiểm duyệt nhanh hơn" name="title" id="title">
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Nội dung mô tả <span>(*)</span>:</label>
                <div class="col-sm-8">
                    <textarea rows="5" class="form-control form-control2" name="description" id="description"></textarea>
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Cập nhật hình ảnh:</label>
                <div class="col-sm-8">
                    <p class="text-red" style="padding-top: 12px; padding-bottom: 5px;">(Bạn có thể tải 16 ảnh và mỗi ảnh dung lượng không quá 4mb!)</p>


                    <input type="file" id="file-image" class="inputfile inputfile-5" data-multiple-caption="{count} files selected" multiple="">
                    <label for="file-image"></label>
                    <div class="clearfix" style="margin-top:5px"></div>
                    <div id="div-image" class="clearfix show-image">


                    </div>
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Cập nhật Video:</label>
                <div class="col-sm-8">
                    <p style="padding-top: 12px;">Nếu bạn có nhu cầu Upload video, hãy liên hệ với chúng tôi để được hỗ trợ</p>
                </div>
            </div><!-- /form-group -->

            <hr>
            <h4 class="titile-post-news">THÔNG TIN BẢN ĐỒ</h4>
            <div class="block-map">

                <div id="map-abc" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: 397px; top: 66px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 141px; top: 66px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 397px; top: -190px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 397px; top: 322px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 653px; top: 66px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 141px; top: 322px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 141px; top: -190px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 653px; top: -190px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 653px; top: 322px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 909px; top: 66px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -115px; top: 66px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -115px; top: -190px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 909px; top: -190px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -115px; top: 322px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 909px; top: 322px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 397px; top: 66px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 141px; top: 66px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 397px; top: -190px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 397px; top: 322px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 653px; top: 66px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 141px; top: 322px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 141px; top: -190px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 653px; top: -190px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 653px; top: 322px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 909px; top: 66px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -115px; top: 66px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -115px; top: -190px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 909px; top: -190px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -115px; top: 322px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 909px; top: 322px;"></div></div></div><div style="width: 22px; height: 40px; overflow: hidden; position: absolute; left: 506px; top: 160px; z-index: 200;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: 141px; top: 322px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104381!3i61586!4i256!2m3!1e0!2sm!3i405102014!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=90176" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 653px; top: 66px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104383!3i61585!4i256!2m3!1e0!2sm!3i405102014!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=122750" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 397px; top: -190px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104382!3i61584!4i256!2m3!1e0!2sm!3i405102002!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=76705" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 397px; top: 66px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104382!3i61585!4i256!2m3!1e0!2sm!3i405102014!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=60788" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 141px; top: 66px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104381!3i61585!4i256!2m3!1e0!2sm!3i405102014!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=129897" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 653px; top: 322px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104383!3i61586!4i256!2m3!1e0!2sm!3i405102014!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=83029" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 909px; top: 66px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104384!3i61585!4i256!2m3!1e0!2sm!3i405102002!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=29837" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 397px; top: 322px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104382!3i61586!4i256!2m3!1e0!2sm!3i405102014!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=21067" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 909px; top: -190px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104384!3i61584!4i256!2m3!1e0!2sm!3i405102002!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=69558" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 909px; top: 322px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104384!3i61586!4i256!2m3!1e0!2sm!3i405102002!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=121187" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -115px; top: 322px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104380!3i61586!4i256!2m3!1e0!2sm!3i405102014!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=28214" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -115px; top: -190px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104380!3i61584!4i256!2m3!1e0!2sm!3i405102014!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=107656" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -115px; top: 66px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104380!3i61585!4i256!2m3!1e0!2sm!3i405102014!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=67935" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 653px; top: -190px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104383!3i61584!4i256!2m3!1e0!2sm!3i405102002!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=7596" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 141px; top: -190px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i17!2i104381!3i61584!4i256!2m3!1e0!2sm!3i405102002!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=14743" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.8s;"><p class="gm-style-pbt">Use ⌘ + scroll to zoom the map</p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div class="gmnoprint" style="width: 22px; height: 40px; overflow: hidden; position: absolute; opacity: 0.01; left: 506px; top: 160px; z-index: 200;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png" draggable="false" usemap="#gmimap0" style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map name="gmimap0" id="gmimap0"><area href="javascript:void(0)" log="miw" coords="8,0,5,1,4,2,3,3,2,4,2,5,1,6,1,7,0,8,0,14,1,15,1,16,2,17,2,18,3,19,3,20,4,21,5,22,5,23,6,24,7,25,7,27,8,28,8,29,9,30,9,33,10,34,10,40,11,40,11,34,12,33,12,30,13,29,13,28,14,27,14,25,15,24,16,23,16,22,17,21,18,20,18,19,19,18,19,17,20,16,20,15,21,14,21,8,20,7,20,6,19,5,19,4,18,3,17,2,16,1,14,1,13,0,8,0" shape="poly" title="" style="cursor: pointer;"></map></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=10.786033,106.695015&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 367px; top: 110px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2017 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 121px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="">Map data ©2017 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2017 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" style="background: none; border: 0px; margin: 10px 14px; padding: 0px; position: absolute; cursor: pointer; user-select: none; width: 25px; height: 25px; overflow: hidden; top: 0px; right: 0px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></button><input id="pac-input" class="controls" type="text" placeholder="Nhập địa chỉ để tìm kiếm" style="z-index: 0; position: absolute; left: 113px; top: 0px;" autocomplete="off"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@10.7860332,106.6950147,17z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><button draggable="false" title="Zoom in" aria-label="Zoom in" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></button><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Zoom out" aria-label="Zoom out" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></button></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px;"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5_hdpi.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Pegman is on top of the Map" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5_hdpi.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5_hdpi.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; display: none;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4_hdpi.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; top: 0px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4_hdpi.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left; position: relative;"><div role="button" tabindex="0" title="Show street map" aria-label="Show street map" aria-pressed="true" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 22px; font-weight: 500;">Map</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 29px; text-align: left; display: none;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left; position: relative;"><div role="button" tabindex="0" title="Show satellite imagery" aria-label="Show satellite imagery" aria-pressed="false" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 40px; border-left: 0px;">Satellite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 29px; text-align: left; display: none;"><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div></div>
            </div>
            <input type="hidden" name="longt" id="longt" value="">
            <input type="hidden" name="latt" id="latt" value="">
            <hr>
            <h4 class="titile-post-news">THÔNG TIN LIÊN HỆ</h4>
            <div class="form-group">
                <label class="col-sm-3 control-label">Họ tên <span>(*)</span>:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control2" placeholder="" name="contact_name">
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Địa chỉ:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control2" placeholder="" name="contact_address">
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Điện thoại:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control2" placeholder="" name="contact_phone">
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Di động <span>(*)</span>:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control2" placeholder="" name="contact_mobile">
                </div>
            </div><!-- /form-group -->
            <div class="form-group">
                <label class="col-sm-3 control-label">Email:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-contro form-control2" placeholder="" name="contact_email">
                </div>
            </div><!-- /form-group -->
            <div class="form-group text-center">
                <!--<button type="button" class="btn btn-success"><i class="fa fa-eye"></i> XEM TRƯỚC</button>-->
                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> ĐĂNG TIN</button>
                <button type="button" onclick="location.href='http://thanhphuthinhland.vn'" class="btn btn-primary"><i class="fa fa-times"></i> HỦY BỎ</button>
            </div><!-- /form-group -->
        </div>
    </form>
</div>