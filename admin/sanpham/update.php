<?php
if(is_array($sanpham)){
    extract($sanpham);
} 
$hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height=80>";
    }else{
        $hinh="no photo";
    }
?>
<div class="row">
            <div class="row_title">
                <h1>cập nhật loại hàng hóa</h1>
            </div>
            <div class="row_content">
            <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">                            
                    <div class="row_mb10">
                    <select name="iddm">
                        <option value="0" selected>tất cả</option>
                        <?php foreach($listdanhmuc as $danhmuc) {
                       if($iddm==$danhmuc['id'])echo '<option value="'.$danhmuc['id'].'" selected>'.$danhmuc['name'].'</option>';
                       else echo '<option value="'.$danhmuc['id'].'">'.$danhmuc['name'].'</option>';
                    
                    }
            ?>
                            <input type="submit" name="listok" value="GO">
                        </select>
                        tên sản phẩm<br>
                        <input type="text" name="tensp" value="<?=$name?>">
                    </div>
                    <div class="row_mb10">
                        giá<br>
                        <input type="text" name="giasp" value="<?=$price?>">
                    </div>
                    <div class="row_mb10">
                        hình<br>
                        <input type="file" name="hinh">
                        <?=$hinh;?>
                    </div>
                    <div class="row_mb10">
                        mô tả<br>
                        <textarea name="mota" cols="30" rows="10"><?=$mota?> </textarea>
                    </div>
                    <div class="row_mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="cập nhật">
                        <input type="reset" value="nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="danh sách"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                        
                    ?>
                </form>
            </div>
        </div>
    </div>