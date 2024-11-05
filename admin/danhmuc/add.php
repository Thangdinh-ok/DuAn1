<div class="row">
            <div class="row_title">
                <h1>Thêm mới loại hàng hóa</h1>
            </div>
            <div class="row_content">
                <form action="index.php?act=adddm" method="POST">
                <div class="row_mb10">
                        mã loại<br>
                        <input type="text" name="maloai" disabled>
                    </div>                              
                    <div class="row_mb10">
                        tên loại<br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row_mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚi">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                        
                    ?>
                </form>
            </div>
        </div>
    </div>