<style>
    /* title */
    .list-kh table .a {
        width: 20px;
    }

    .list-kh table .b {
        width: 70px;
    }

    .list-kh table .c {
        width: 170px;

    }

    .list-kh table .d {
        width: 120px;
    }
    .list-kh table .D {
        width: 120px;
    }

    .list-kh table .e {
        width: 170px;
    }

    .list-kh table .g {
        width: 160px;
    }

    .list-kh table .h {
        width: 160px;
    }

    .list-kh table .i {
        width: 120px;
    }

    .list-kh table .k {
        width: 120px;
    }

    .list-kh .title-table td {
        font-size: 20px;
        font-weight: 600;
    }

    .list-kh .title-table {
        background: lightgreen;
    }

    .list-kh .title {
        background: green;
        width: 1200px;
        border-radius: 10px;
        color: rgb(185, 182, 182);
    }

    .list-kh .title h1 {
        padding: 10px 10px;
    }

    /* content-table */
    .list-kh table .a1 {
        width: 20px;
    }

    .list-kh table .b1 {
        width: 70px;
    }

    .list-kh table .c1 {
        width: 170px;

    }

    .list-kh table .d1 {
        width: 120px;
    }

    .list-kh table .e1 {
        width: 170px;
    }

    .list-kh table .g1 {
        width: 160px;
    }

    .list-kh table .h1 {
        width: 160px;
    }

    .list-kh table .i1 {
        width: 120px;
    }


    .list-kh table .k1 input {
        border: 2px solid rgb(188, 187, 187);
        padding: 10px 20px;
        border-radius: 8px;
    }

    .list-kh .border-b {
        display: block;
        border-bottom: 2px solid rgb(188, 187, 187);
        padding: 30px 10px;
    }





    .list-kh form .btn input {
        color: black;
        border: 2px solid rgb(188, 187, 187);
        border-radius: 8px;
        padding: 10px 15px;
    }
</style>
<section class="list-kh">
    <form action="./index.php?act=listkh" method="post">
        <div class="title">
            <h1>DANH SÁCH KHÁCH HÀNG</h1>
        </div>
        <table>

            <tr class="border-b title-table">
                <td class="a"></td>
                <td class="b">MÃ KH</td>
                <td class="c">HỌ VÀ TÊN</td>
                <td class="D">MẬT KHẨU</td>
                <td class="d">EMAIL</td>
                <td class="e">HÌNH ẢNH</td>
                <td class="f">VAI TRÒ</td>
                <td class="g"></td>
            </tr>
            <?php
            foreach ($listkhachhang as $khachhang) {
                extract($khachhang);
                $suakh = "index.php?act=suakh&id=" . $id;
                $xoakh = "index.php?act=xoakh&id=" . $id;
                $hinhpath = "../uploads/" . $image;
                if (is_file($hinhpath)) {
                    $image = "<img src='" . $hinhpath . "' height='80'>";
                } else {
                    $image = "no photo";
                }
                echo '<tr class="border-b">
                                            <td class="a1"><input type="checkbox"></td>
                                            <td class="b1">' . $id . '</td>
                                            <td class="c1">' . $ten_kh . '</td>
                                            <td class="D1">' . $password . '</td>
                                            <td class="d1">' . $email . '</td>
                                            <td class="e1">' . $image . '</td>
                                            <td class="f1">' . $vai_tro . '</td>
                                            <td class="g1">
                                                <a href="' . $suakh . '"><input type="button" name="sua" value="Sửa"></a> 
                                                <a href="' . $xoakh . '"><input type="button" name="delete" value="Xóa"></a>
                                            </td>
                                        </tr>';
            }
            ?>


        </table>
        <div class="btn">
            <a href=""><input type="submit" value="Chọn tất cả"></a>
            <a href=""><input type="submit" value="Bỏ chọn tất cả"></a>
            <a href=""><input type="submit" value="Xóa các mục chọn"></a>
            <a href="./index.php?act=addkh"><input type="button" value="Nhập thêm"></a>
        </div>
    </form>
</section>