<div id="main-contain">
        <h2>SINH VIÊN - Thông tin sinh viên</h2>
        <div id="thongtin">
            <div id="chi_tiet">
                Họ tên : <?php echo $student->getStudentName();?>
                <br>Lớp : <?php echo $student->tenlop;?>
                <br>Ngày sinh : <?php echo $student->getStudentBirthday();?><br>
                Số điện thoại : <?php echo $student->getPhoneNumber();?> <br>
                Quê quán : <?php echo $student->getAddress(); ?> <br>
                <br>Chọn menu bên trái hoặc click vào <a href="index.php?url=listsinhvien"
                                                         style="color: blue; text-decoration:underline">đây</a> để quay lại danh
                sách sinh viên.
            </div>
        </div>
    </div>