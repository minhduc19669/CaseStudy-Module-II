<div id="main-contain">
    <h2>DANH SÁCH SINH VIÊN LỚP : </h2><br>
    <div id="listSV">
        <form method="post" id="f_search" action="index.php?url=listsinhvien"><input id="txtSearch" type="search" name="search"
                                                                                     placeholder="Nhập tên hoặc MSSV">
            <input id="btnSearch" type="submit" name="tim" value="">
        </form>

        <table width="70%">
            <tr>
                <th>STT</th>
                <th>Họ Tên</th>
                <th>Ngày sinh</th>
                <th>SĐT</th>
                <th>Địa chỉ</th>
                <th>Chức năng</th>
            </tr>
            <?php foreach ($result as $key => $value): ?>
                <tr>
                    <td><?= ++$key; ?></td>
                    <td><?= $value['name']; ?></td>
                    <td><?= $value['birthday']; ?></td>
                    <td><?= $value['phonenumber']; ?></td>
                    <td><?= $value['address']; ?></td>
                    <td style='text-align: center;'> <a href='index.php?url=editsinhvien&id=<?php echo $value['sinhvienID']; ?>'><input id='btnSua' type='button' value='sửa' '></a><a href='index.php?url=deletesinhvien&id=<?php echo $value['sinhvienID']; ?>'><input id='btnXoa' type='button' value='xóa'></a> <a href='index.php?url=detailsinhvien&id=<?php echo $value['sinhvienID']; ?>'><input id='btnChitiet' type='button' value='chi  tiết' '></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p style="color: white; text-align:center;"><b> SĨ SỐ:<?php echo count($result)?> </b></p>

    </div>
    <br>
</div>
