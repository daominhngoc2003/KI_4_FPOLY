
        <section class="list-sanpham">
           <div class="title">
                <h1>DANH SÁCH SẢN PHẨM</h1>
           </div>
            <form action="./index.php?act=listsp" method="post">
                <input type="text" name="kyw">
                <select name="id_dm" id="">
                    <option value="0" selected>Tất cả</option>
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$ten_loai.'</option>';
                                }
                            ?>
                            
                </select>
                <input type="submit" name="listok" value="GO">
                <table>
                    <tr class="border-b title-table">
                        <td class="a"></td>
                        <td class="b">MÃ LOẠI</td>
                        <td class="c">TÊN SẢN PHẨM</td>
                        <td class="d">GIÁ</td>
                        <td class="e">HÌNH ẢNH</td>
                        <td class="f">LƯỢT XEM</td>
                        <td class="g"></td>
                    </tr> 
                    <?php
                        foreach ($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp = "index.php?act=suasp&id=".$id;
                            $xoasp = "index.php?act=xoasp&id=".$id;
                            $hinhpath= "../uploads/".$image;
                            if(is_file($hinhpath)){
                                $image="<img src='".$hinhpath."' height='80'>";
                            }
                            else {
                                $image = "no photo";
                            }
                            echo '<tr class="border-b">
                                            <td class="a1"><input type="checkbox"></td>
                                            <td class="b1">' . $id . '</td>
                                            <td class="c1">' . $ten_sp . '</td>
                                            <td class="c1">' . $price . '</td>
                                            <td class="e1">' . $image . '</td>
                                            <td class="f1">' . $so_luot_xem . '</td>
                                            <td class="g1">
                                                <a href="'.$suasp.'"><input type="button" name="sua" value="Sửa"></a> 
                                                <a href="'.$xoasp.'"><input type="button" name="delete" value="Xóa"></a>
                                            </td>
                                        </tr>';
                }
                ?>
                    
                </table>
                <div class="btn">
                    <input type="submit" value="Chọn tất cả">
                    <input type="submit" value="Bỏ chọn tất cả">
                    <input type="submit" value="Xóa các mục chọn">
                    <a href="./index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
            </form>
        </section>