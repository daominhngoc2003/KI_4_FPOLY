<style>
    
.thongke table{
    width: 1200px;
}

/* title */
.thongke table .a{
    width: 120px;
}
.thongke table .A{
    width: 250px;
}
.thongke table .b{
    width: 150px;
}
.thongke table .c{
    width: 190px;

}
.thongke table .d{
    width: 190px;
}
.thongke table .e{
    width: 190px;
}

.thongke .title td{
    font-size: 20px;
    font-weight: 600;
}
.thongke .title{
    background: lightgreen;
}

/* content-table */
.thongke table .a1{
    width: 120px;
}
.thongke table .A1{
    width: 250px;
}
.thongke table .b1{
    width: 150px;
}
.thongke table .c1{
    width: 190px;

}
.thongke table .d1{
    width: 190px;
}
.thongke table .e1{
    width: 190px;
}





.thongke .border-b{
    display: block;
    border-bottom: 2px solid rgb(188, 187, 187);
    padding:30px 10px;
}



.thongke form .btn a{
    color: black;
    border: 2px solid rgb(188, 187, 187);
    border-radius: 8px;
    padding: 10px 15px;
}
.thongke .btn{
    display: block;
    padding:30px 10px;
}
</style>
<section class="thongke">
    <form action="./index.php?act=listtk" method="post">
        <table>
            <tr class="border-b title">
                <td class="a">MÃ DANH MỤC</td>
                <td class="A">TÊN DANH MỤC</td>
                <td class="b">SỐ LƯỢNG</td>
                <td class="c">GIÁ CAO NHẤT</td>
                <td class="d">GIÁ THẤP NHẤT</td>
                <td class="e">GIÁ TRUNG BÌNH</td>
            </tr>
            <?php
            foreach ($listtK as $tk) {
                extract($tk);
                echo '
                    <tr class="border-b">
                        <td class="a1">'.$id.'</td>
                        <td class="A1">'.$ten_loai.'</td>
                        <td class="b1">'.$countsp.'</td>
                        <td class="c1">'.$maxprice.'</td>
                        <td class="d1">'.$minprice.'</td>
                        <td class="e1">'.$avgprice.'</td>
                    </tr>';
            }
            ?>

         



        </table>
        <div class="btn">
            <a href="./index.php?act=bieudo">Xem biểu đồ</a>
        </div>
    </form>
</section>