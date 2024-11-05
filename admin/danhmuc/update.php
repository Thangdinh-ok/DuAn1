<?php
if(is_array($dm)){
    extract($dm);
} 
?>
<div class="row">
            <div class="row_title">
                <h1>cập nhật loại hàng hóa</h1>
            </div>
            <div class="row_content">
                <form action="index.php?act=updatedm" method="POST">
                <div class="row_mb10">
                        mã loại<br>
                        <input type="text" name="maloai" disabled>
                    </div>                              
                    <div class="row_mb10">
                        tên loại<br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
                    </div>
                    <div class="row_mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
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