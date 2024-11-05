
<div class="row">
            <div class="row_title">
                <h1>DANH SÁCH SẢN PHẨM</h1>
            </div>
            <form action="index.php?act=listsp" method="POST">
                    <input type="text" name="kyw">
                    <select name="iddm">
                        <option value="0" selected> tất cả </option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">"'.$name.'"</option>';
                            }
                            ?>
                            <input type="submit" name="listok" value="GO">
                        </select>
                </form>
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
                   <td><a href="'.$suasp.'"><input type="button" value="sửa"></a> <a href="'.$xoasp.'"><input type="button" value="xóa"> </a></td>
                    </tr>';

                    }
                    ?> 
                </table>
            </div>
            <div class="row_mb10">
                <input type="button" value="chọn tất cả">
                <input type="button" value="bỏ chọn tất cả">
                <input type="button" value="xóa các mục đã chọn">
                <a href="index.php?act=adddm"> <input type="button" value="nhập thêm"></a>
            </div>
        </div>
        <style>
body {
    font-family: Arial, sans-serif;
}

.row {
    margin: 20px;
}

.row_title h1 {
    text-align: center;
    color: #333;
}

.row_mb10 {
    margin-bottom: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table th, table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

table th {
    background-color: #f4f4f4;
    color: #333;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #f1f1f1;
}

input[type="button"] {
    padding: 10px 20px;
    margin-right: 10px;
    border: none;
    background-color: #5cb85c;
    color: white;
    cursor: pointer;
    border-radius: 5px;
    font-size: 16px;
}

input[type="button"]:hover {
    background-color: #4cae4c;
}

a input[type="button"] {
    background-color: #0275d8;
}

a input[type="button"]:hover {
    background-color: #025aa5;
}
</style>