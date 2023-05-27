<section class="row mt mb">
    <div class="boxtrai mr">
        <div class="row mb ">
            
            <div class="box-title"> SẢN PHẨM</div>
            <div class="box-content mb grid-cols-3">
                <?php
                     $i = 0;
                     foreach ($dssp as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        $hinh =  $img_path.$image;
                        if(($i==2)||($i==5)||($i==8)||($i==11)){
                             $mr="";
                        }else{
                         $mr="mr";
                        }
                        echo '<div class="box-sanpham '.$mr.'">
                        <div class="box-img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                        <p>$'.$price.'</p>
                        <a href="'.$linksp.'">'.$ten_sp.'</a>
                    </div>';
                    $i+=1;
                     }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "boxright.php";
        ?>
    </div>
</section>