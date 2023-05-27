 <section class="list-danhmuc">
     <form action="./index.php?act=listdm" method="get">
         <table>
             <tr class="border-b title">
                 <td class="a"></td>
                 <td class="b">MÃ LOẠI</td>
                 <td class="c">TÊN LOẠI</td>
                 <td class="d"></td>
             </tr>
             <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=".$id;
                    $xoadm = "index.php?act=xoadm&id=".$id;
                    echo '<tr class="border-b">
                                    <td class="a1"><input type="checkbox"></td>
                                    <td class="b1">' . $id . '</td>
                                    <td class="c1">' . $ten_loai . '</td>
                                    <td class="d1">
                                        <a href="'.$suadm.'"><input type="button" name="sua" value="Sửa"></a> 
                                        <a href="'.$xoadm.'"><input type="button" name="delete" value="Xóa"></a>
                                    </td>
                                </tr>';
                }
                ?>
             


         </table>
         <div class="btn">
             <input type="button" value="Chọn tất cả">
             <input type="button" value="Bỏ chọn tất cả">
             <input type="button" value="Xóa các mục chọn">
             <a href="./index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
         </div>
     </form>
 </section>