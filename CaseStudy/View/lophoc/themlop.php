<?php
declare(strict_types=1);
$a="";
if (isset($alert)){
    $a=$alert;
} ?>

<div id="main-contain">
    <h2>Thêm Lớp</h2>
    <div class="form">
        <span style="font-size: 20px; color: red; font-style: italic"><b>Mời nhập thông tin lớp học : </b> </span> </br>
        (Chú ý điền đủ thông tin)
        </br>
        </br>
        <form method="post" action="index.php?url=addclass">
            <table>
                <tr>
                    <td>Tên Lớp : </td>
                    <td> <input type="text" name="ten" autofocus></td>
                </tr>
                <tr>
                    <td>GVCN :</td>
                    <td> <input type="text" name="gvcn"></td>
                </tr>
                <tr>
                    <td>Phòng học : </td>
                    <td> <select name="phonghoc">
                            <option>P.1</option>
                            <option>P.2</option>
                            <option>P.3</option>
                            <option>P.4</option>
                            <option>P.5</option>
                        </select>
                </tr>
                <tr>
                    <td colspan=2>
                        <input id="btnChapNhan" type="submit" value="Hoàn tất" name="them"/>
                    </td>
                </tr>
            </table>
            <br>
            <b><?php echo $a;?></b>
        </form>
        <br>Chọn menu bên trái hoặc click vào <a href="index.php?url=viewlop" style="color: blue; text-decoration:underline;font-weight:bold;">đây</a> để quay lại danh sách lớp.

    </div>

</div>