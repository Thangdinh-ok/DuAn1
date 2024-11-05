<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
  <div class="boxcenter">
    <div class="row mb header">
       <h1> SIÊU THỊ TRỰC TUYẾN</h1>

    </div>
    <form action="index.php?act=listsp" method="POST">
                    <input type="text" name="kyw">
                    <select name="iddm">
                            <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">"'.$name.'"</option>';
                            }
                            ?>
                            <input type="submit" name="listok" value="tìm">
                        </select>
                </form>
    <div class="row mb menu">
        <ul>
            <li><a href="/index.html">Trang chủ</a></li>
            <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
            <li><a href="index.php?act=lienhe">Liên hệ</a></li>
            <li><a href="index.php?act=gopy">Góp ý</a></li>
            <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
        </ul>
        
    </div>
  
