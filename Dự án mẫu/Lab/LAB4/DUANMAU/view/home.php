<section class="row mt mb">
            <div class="box-title">TRANG CHỦ</div>
            <div class="boxtrai mr">
                <div class="banner">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/slideshow/slideshow1.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="images/slideshow/slideshow2.jpg" style="width:100%">
                    <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="images/slideshow/slideshow3.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                    </div>

                    </div>
                    <br>

                    <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    </div>

                        
                </div>
                <div class=" mb grid-cols-3">
                    <?php 
                        $i = 0;
                        foreach ($spnew as $sp) {
                           extract($sp);
                           $linksp = "index.php?act=sanphamct&idsp=".$id;
                           $hinh =  $img_path.$image;
                           if(($i==2)||($i==5)||($i==8)){
                                $mr="mr";
                           }else{
                            $mr="";
                           }
                           echo '<div class="box-sanpham '.$mr.'">
                           <div class="box-img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                           <p>$'.$price.'</p>
                           <a href="'.$linksp.'">'.$ten_sp.'</a>
                       </div>';
                       $i+=1;
                        }
                    ?>
                    <!-- <div class="box-sanpham">
                        <div class="box-img"><img src="./images/anhnam/image1xxl-1-3e2ac7ae-9be1-42c3-a715-bb170691b9aa.webp" alt=""></div>
                        <p>$30</p>
                        <a href="">Quần short vàng</a>
                    </div>
                    <div class="box-sanpham">
                        <div class="box-img">
                            <img src="./images/anhnam/image1xxl-3.webp" alt="">
                        </div>
                        <p>$30</p>
                        <a href="">Quần short hồng</a>
                    </div>
                    <div class="box-sanpham">
                        <div class="box-img">
                            <img src="./images/anhnam/image4xxl-7.webp" alt="">
                        </div>
                        <p>$30</p>
                        <a href="">Quần jeans dài rách gối</a>
                    </div>
                    <div class="box-sanpham">
                        <div class="box-img">
                            <img src="./images/anhnu/aonu10.webp" alt="">
                        </div>
                        <p>$30</p>
                        <a href="">Áo nữ mau vàng ba lỗ có cổ</a>
                    </div>
                    <div class="box-sanpham">
                        <div class="box-img">
                            <img src="./images/anhnu/aonu14.webp" alt="">
                        </div>
                        <p>$30</p>
                        <a href="">Áo hồng cho nữ</a>
                    </div>
                    <div class="box-sanpham">
                        <div class="box-img">
                            <img src="./images/anhnu/aonu20.webp" alt="">
                        </div>
                        <p>$30</p>
                        <a href="">Áo nữ mau đen ba lỗ có cổ</a>
                    </div>
                    <div class="box-sanpham">
                        <div class="box-img">
                            <img src="./images/anhgiay/images.jfif" alt="">
                        </div>
                        <p>$30</p>
                        <a href="">Giày jodan</a>
                    </div>
                    <div class="box-sanpham">
                        <div class="box-img">
                            <img src="./images/anhgiay/chup-hinh-giay-dincox-shoes-c-photo-studio-4.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="">Giày mcq</a>
                    </div>
                    <div class="box-sanpham">
                        <div class="box-img">
                            <img src="./images/anhgiay/giay-nu-hinh-hoa-cuc-cao-co-bang-vai-dang-phong-cach-han-quoc.png" alt="">
                        </div>
                        <p>$30</p>
                        <a href="">Giày van</a>
                    </div> -->
                </div>
            </div>
            <div class="boxphai">
                <?php
                    include "boxright.php";
                ?>
            </div>
        </section>