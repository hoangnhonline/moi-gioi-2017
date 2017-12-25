
<script language="javascript">
    function js_submit() {
        if (isEmpty(document.getElementById('ten'), "Chưa nhập tên")) {
            document.getElementById('ten').focus();
            return false;
        }

        if (isEmpty(document.getElementById('diachi'), "Chưa nhập địa chỉ")) {
            document.getElementById('diachi').focus();
            return false;
        }

        if (isEmpty(document.getElementById('dienthoai'), "Chưa nhập điện thoại")) {
            document.getElementById('dienthoai').focus();
            return false;
        }

        if (!isNumber(document.getElementById('dienthoai'), "Sai định dạng điện thoại")) {
            document.getElementById('dienthoai').focus();
            return false;
        }

        if (!check_email(document.frm.email.value)) {
            alert("Sai định dạng email");
            document.frm.email.focus();
            return false;
        }

        if (isEmpty(document.getElementById('tieude1'), "Chưa nhập tiêu đề")) {
            document.getElementById('tieude1').focus();
            return false;
        }

        if (isEmpty(document.getElementById('noidung'), "Chưa nhập nội dung")) {
            document.getElementById('noidung').focus();
            return false;
        }
        document.frm.submit();
    }
</script>
<style>
    .title_sanpham {
        text-transform: uppercase;
        color: #38B04A;
        font-size: 18px;
        background: url(images/icon_lienhe1.png) left no-repeat;
        display: block;
        text-indent: 35px;
        float: left;
        margin-bottom: 22px;
    }

    .khung_sanpham {
        border: 1px solid rgba(204, 204, 204, 0.44);
        background: #fff;
        margin-bottom: 20px;
    }

    #lienhe .lable {
        color: #000;
        font-size: 15px;
    }

    #lienhe .text {
        border: 1px solid #D5D5D5;
        box-shadow: 1px 1px 5px rgba(0, 0, 0, .07) inset;
        padding: 10px;
        margin-bottom: 10px;
        width: 70%;
    }

    #lienhe .noidung {
        border: 1px solid #D5D5D5;
        box-shadow: 1px 1px 5px rgba(0, 0, 0, .07) inset;
        padding: 10px;
        margin-bottom: 10px;
        width: 70%;
        height: 200px;
        resize: none;
    }

    #lienhe .button {
        border: 1px solid #D5D5D5;
        box-shadow: 1px 1px 5px rgba(0, 0, 0, .07) inset;
        padding: 8px;
        margin-bottom: 10px;
        cursor: pointer;
        background: #FBFBFB;
        padding: 10px 20px;
    }

    @media screen and (max-width: 500px) {
        #lienhe .lable {
            font-size: 12px;
        }

        #lienhe .noidung {
            width: 95%;
            height: 100px;
        }

        #lienhe .text {
            width: 95%;
        }
    }
</style>
<p class="title_sanpham"> Liên hệ </p>
<div class="clear"></div>
<div class="khung_sanpham">
    <div style="font-size:16px;line-height:25px;text-align:justify;padding:10px;"><p>0908.842.039</p></div>
    <form id="lienhe" method="post" name="frm" action="lien-he.html" style="padding:10px;">
        <table width="100%" cellpadding="5" cellspacing="5" border="0" class="tablelienhe">
            <tbody>
            <tr>
                <td class="lable">Họ và tên <span>(*)</span></td>
                <td><input class="text" name="ten" type="text" id="ten" maxlength="50" size="50"></td>
            </tr>
            <tr>
                <td class="lable">Địa chỉ <span>(*)</span></td>
                <td><input class="text" name="diachi" type="text" id="diachi" size="50"></td>
            </tr>
            <tr>
                <td class="lable">Điện thoại <span>(*)</span></td>
                <td><input class="text" name="dienthoai" type="text" id="dienthoai" maxlength="15" size="50"></td>
            </tr>
            <tr>
                <td class="lable">Email <span>(*)</span></td>
                <td><input class="text" name="email" type="text" size="50"></td>
            </tr>
            <tr>
                <td class="lable">Tiêu đề <span>(*)</span></td>
                <td>
                    <input class="text" name="tieude1" type="text" id="tieude1" size="50">
                </td>
            </tr>
            <tr>
                <td class="lable">Nội dung <span>(*)</span></td>
                <td>
                    <textarea class="noidung" name="noidung" cols="50" rows="5" id="noidung"></textarea>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input class="button" type="button" value="Gửi" onclick="js_submit();">
                    <input class="button" type="button" value="Nhập lại" onclick="document.frm.reset();">

                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <div class="clear"></div>
    <div style="position:relative;padding-bottom:50%;margin:20px 10px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125326.48058133901!2d106.46191433851148!3d11.004635278304496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310b2cdaa5c0f441%3A0x21974bd41f34c5be!2zTmjDoCDEkOG6pXQgQ2jDonUgQ-G7pyBDaGk!5e0!3m2!1svi!2s!4v1491295572633"
                width="600" height="450" frameborder="0"
                style="border:0;position:absolute;top:0;left:0;right;width:100%;height:100%;"
                allowfullscreen=""></iframe>
        <div class="clear"></div>
    </div>
</div>
