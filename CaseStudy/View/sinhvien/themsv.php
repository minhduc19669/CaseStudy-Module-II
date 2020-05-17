<?php
declare(strict_types=1);
$alert="";
if (isset($mess)){
    $alert=$mess;
}elseif (isset($error)){
    $alert=$error;
}
?>
<div id="main-contain">
    <h2>Thêm Sinh Viên</h2>

    <div class="form">
        <span style="font-size: 20px; color: red; font-style: italic"><b>Mời nhập thông tin sinh viên : </b> </span> </br>
        (Chú ý điền đủ thông tin)<br>
        <b style="color: red"><?php echo $alert ;?></b>
        </br></br>
        <form method="post" action="index.php?url=addsinhvien">
            <table>
                <tr>
                    <td>Họ tên </td>
                    <td> <input type="text" name="name" autofocus></td>
                </tr>

                <tr>
                    <td>Ngày sinh </td>
                    <td> <input type="date" name="ngaysinh"></td>
                </tr>
                <tr>
                    <td>Số điện thoại </td>
                    <td> <input type="text" name="sdt"></td>
                </tr>
                <tr>
                    <td>Quê quán </td>
                    <td> <input type="text" name="quequan"></td>
                </tr>
                <tr>
                    <td>Chọn Lớp  </td>
                    <td> <select name="lop">
                            <?php foreach ($class as $key=> $value): ?>
                            <option value="<?php echo $value['lopID']?>"><?php echo $value['tenlop'];?></option>
                            <?php endforeach;  ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <input id="btnChapNhan" type="submit" value="Hoàn tất" name="them"/>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        Chọn menu bên trái hoặc click vào <a href="index.php?url=listsinhvien" style="color: blue; text-decoration:underline; font-weight:bold;">đây</a> để quay lại danh sách sinh viên.
        <br>
        <br>
    </div>

</div>
