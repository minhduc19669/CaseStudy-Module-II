<?php
declare(strict_types=1);

use controllerCase\StudentController;

if (isset($_POST['them']) || isset($_POST['sua']) || isset($_POST['xoa'])) {
    require_once "../../Model/DatabaseConnection.php";
    require_once '../../Model/StudentDB.php';
    require_once '../../Model/Student.php';
    require_once '../../Controller/StudentController.php';
    $controllerStudent = new StudentController();
    $controllerStudent->index();
}
?>

<div id="main-contain">
    <h2>DANH SÁCH SINH VIÊN </h2><br>
    <div id="listSV">
        <form method="post" id="f_search" action="index.php?url=listsinhvien"><input id="txtSearch" type="search" name="search"
                                                 placeholder="Nhập tên hoặc MSSV">
            <input id="btnSearch" type="submit" name="tim" value="">
        </form>

        <table width="70%">
            <tr>
                <th>STT</th>
                <th>Họ Tên</th>
                <th>MSSV</th>
                <th>Lớp</th>
                <th>Ngày sinh</th>
                <th>SĐT</th>
                <th>Địa chỉ</th>
                <th>Chức năng</th>
            </tr>
            <?php foreach ($students as $key => $student): ?>
                <tr>
                    <td><?php echo ++$key; ?></td>
                    <td><?php echo $student->getStudentName(); ?></td>
                    <td><?php echo $student->sinhvienID; ?></td>
                    <td><?php echo $student->lop?></td>
                    <td><?php echo $student->getStudentBirthday(); ?></td>
                    <td><?php echo $student->getPhoneNumber(); ?></td>
                    <td><?php echo $student->getAddress(); ?></td>
                    <td style='text-align: center;'> <a href='index.php?url=editsinhvien&id=<?php echo $student->sinhvienID ?>'><input id='btnSua' type='button' value='sửa' '></a><a href='index.php?url=deletesinhvien&id=<?php echo $student->sinhvienID ?>'><input id='btnXoa' type='button' value='xóa'></a> <a href='index.php?url=detailsinhvien&id=<?php echo $student->sinhvienID ?>'><input id='btnChitiet' type='button' value='chi  tiết' '></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <br>
    <form id="formChucnang">
        <a href="index.php?url=addsinhvien"><input id="btnThemSV" type="button" value="THÊM SV"> </a>
    </form>
</div>