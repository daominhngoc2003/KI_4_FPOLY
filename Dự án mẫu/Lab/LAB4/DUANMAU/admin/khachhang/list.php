
        <section class="list-kh">
            <form action="./index.php?act=listkh" method="post" >
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
                            $suakh = "index.php?act=suakh&id=".$id;
                            $xoakh = "index.php?act=xoakh&id=".$id;
                            $hinhpath= "../uploads/".$image;
                            if(is_file($hinhpath)){
                                $image="<img src='".$hinhpath."' height='80'>";
                            }
                            else {
                                $image = "no photo";
                            }
                            echo '<tr class="border-b">
                                            <td class="a1"><input type="checkbox"></td>
                                            <td class="b1">'.$id.'</td>
                                            <td class="c1">'.$ten_kh.'</td>
                                            <td class="D1">'.$password.'</td>
                                            <td class="d1">'.$email.'</td>
                                            <td class="e1">'.$image.'</td>
                                            <td class="f1">'.$vai_tro.'</td>
                                            <td class="g1">
                                                <a href="'.$suakh.'"><input type="button" name="sua" value="Sửa"></a> 
                                                <a href="'.$xoakh.'"><input type="button" name="delete" value="Xóa"></a>
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