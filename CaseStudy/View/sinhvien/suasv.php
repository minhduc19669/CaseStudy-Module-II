<?php
declare(strict_types=1);
?>
<div id="main-contain">
    <h2>Sửa thông tin Sinh Viên</h2>

    <div class="form">
        <span style="font-size: 20px; color: red; font-style: italic"><b>Mời nhập lại thông tin sinh viên </b> </span> </br>
        (Chú ý điền đủ thông tin)
        <b></b>
        </br></br>
        <form method="post" action="index.php?url=editsinhvien">
            <input type="hidden" name="id" value="<?php echo $student->sinhvienID?>">
            <table>
                <tr>
                    <td>Họ tên </td>
                    <td> <input type="text" name="ten" value="<?php echo $student->getStudentName(); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Ngày sinh </td>
                    <td> <input type="date" name="ngaysinh" value= "<?php echo $student->getStudentBirthday(); ?>" </td>
                </tr>
                <tr>
                    <td>Số điện thoại </td>
                    <td> <input type="text" name="sdt" value="<?php echo $student->getPhoneNumber(); ?>"></td>
                </tr>
                <tr>
                    <td>Quê quán </td>
                    <td> <input type="text" name="quequan" value="<?php echo $student->getAddress(); ?>"></td>
                </tr>
                <tr>
                    <td>Lớp</td>
                    <td><select name="lop">
                            <option value="8" <?php if ($student->getLopID()==8): ?> selected <?php endif; ?>>TÌNH YÊU</option>
                            <option value="9" <?php if ($student->getLopID()==9): ?> selected <?php endif; ?>>PHP</option>
                            <option value="10" <?php if ($student->getLopID()==10): ?> selected<?php endif; ?>>JAVA</option>
                            <option value="11"<?php if ($student->getLopID()==11): ?> selected<?php endif; ?>>PYTHON</option>
                            <option value="12"<?php if ($student->getLopID()==12): ?> selected<?php endif; ?>>JS</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan=2>
                        <input id="btnChapNhan" type="submit" value="Hoàn tất" name="sua"/>
                    </td>
                </tr>
            </table>

        </form>
        <br>Chọn menu bên trái hoặc click vào <a href="index.php?url=listsinhvien" style="color: blue; text-decoration:underline">đây</a> để quay lại danh sách sinh viên.


    </div>

</div>
