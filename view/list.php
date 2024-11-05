<link rel="stylesheet" href="css/index.css">
    <div class="row">
                <div class="row_title">
                    <h1>DANH SÁCH SẢN PHẨM</h1>
                </div>
                <div class="row_mb10">
                    <table border="1">
                        <tr>
                            <th></th>
                            <th>mã loại</th>
                            <th>tên sản phẩm</th>
                            <th>hình</th>
                            <th>giá</th>
                            <th>lượt xem</th>
                            <th></th>
                        </tr>
                     
                        <?php
                        foreach($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp="index.php?act=suasp&id=".$id;
                            $xoasp="index.php?act=xoasp&id=".$id;
                            $hinhpath="../upload/".$img;
                            if(is_file($hinhpath)){
                                $hinh="<img src='".$hinhpath."' height=80>";
                            }else{
                                $hinh="no photo";
                            }
                            
                            echo '<tr>
                            <td> <input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$price.'</td>
                    <td>'.$luotxem.'</td>
                    <td></td>
                        </tr>';

                        }
                        ?> 
                    </table>
                </div>
            </div>
            