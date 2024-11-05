<link rel="stylesheet" href="css/index.css">
<div class="row mb ">
        <div class="boxtrai mr">
            <div class="row">
                <div class="banner mb">
                       <img src="images/img/4.jpg" alt="">
                       <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/img/6.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/img/5.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/img/8.jpg" alt="">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
                       
                </div>
            </div>
            <div class="row">
                <?php
                $i=0;
                foreach($spnew as $sp){
                    extract($sp);
                    $hinh=$img_path.$img;
                    if(($i==2)||($i==5)||($i==8)){
                        $mr="";
                    }else{
                        $mr="mr"; 
                    }
                    echo '<div class="boxsp '.$mr.'">
                    <div class="row img">
                        <img src="'.$hinh.'" alt="">
                    </div>
                    
                    <p>$'.$price.'</p>
                    <a href="#">'.$name.'</a>
                </div>';
                $i+=1;
                }
                ?>
               
            </div> 
        </div>
        <div class="boxphai">
              <div class="row mb ">
                    <div class="boxtitle">TÀI KHOẢN</div>    
                    <div class="boxcontenr formtaikhoan">
                        <form action="#" method="post">
                            <div class="row mb10">Tên đăng nhập <br>
                                <input type="text" name="user" id=""></div>
                                <div class="row mb10">
                            Mật khẩu <br>
                            <input type="password" name="pass" id="">
                                </div>
                                <div class="row mb10"> <input type="checkbox" name="" id=""> Ghi nhớ tài khoản?</div>
                                <div class="row mb10"><input type="submit" name="" id="" value="Đăng nhập"></div>
                            <li>
                                <a href="#">Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="#">Đăng kí thành viên</a>
                            </li>
                        </form>
                    </div>
              </div>
              <div class="row mb ">
                <div class="boxtitle">DANH MỤC</div>    
                    <div class="boxcontenr2 menudoc">
                        <ul>
                            <?php
                            foreach($dsdm as $dm){
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                            }
                            ?>
                            
        
                            
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="#" method="post">
                            <input type="text" placeholder="Từ khoá tìm kiếm">
                        </form>
                    </div>
              </div>
              <div class="row">
                <div class="boxtitle">TOP 10 YÊU THÍCH</div>    
                <div class="row boxcontenr">
                    <?php
                    foreach($dstop10 as $sp){
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $img=$img_path.$img;
                        echo '<div class="row mb10 top10">
                       <img src="'.$img.'" alt="">
                       <a href="'.$linksp.'">'.$name.'</a>
                    </div>';
                    }
                    ?>
                   

                </div>
              </div>
        </div>
    </div>