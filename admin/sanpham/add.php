<div class="row">
            <div class="row_title">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <div class="row_content">
                <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
                <div class="row_mb10">
                        danh mục<br>
                        <select name="iddm">
                            <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">"'.$name.'"</option>';
                            }
                            ?>
                            
                        </select>
                            <?php "<br>" ?>
                        <input type="text" name="masp" disabled>
                    </div>                              
                    <div class="row_mb10">
                        tên sản phẩm<br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row_mb10">
                        giá<br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row_mb10">
                        hình<br>
                        <input type="file" name="hinh">
                    </div>
                    <div class="row_mb10">
                        mô tả<br>
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row_mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚi">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                        
                    ?>
                </form>
            </div>
        </div>
    </div>