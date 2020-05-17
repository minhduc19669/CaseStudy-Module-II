<?php
declare(strict_types=1);
 ?>

<div id="main-contain">
    <h2>DANH SÁCH LỚP </h2><br>
    <div id="listSV">

        <table width="70%">
            <tr>
                <th>STT</th>
                <th>Lớp</th>
                <th>Chủ nhiệm</th>
                <th>Phòng học</th>
                <th>Chức năng</th>
            </tr>
            <?php foreach ($result as $key =>$value): ?>
            <tr>
                <td><?=  ++$key;  ?></td>
                <td><?=  $value['tenlop'];  ?></td>
                <td><?=  $value['chunhiem'];  ?></td>
                <td><?=  $value['phonghoc'];  ?></td>
                <td style='text-align: center;'> <a href='index.php?url=sualop&id=<?= $value['lopID'] ?>'><input id='btnSua' type='button' value='sửa' '></a>
                    <a href='index.php?url=deleteclass&id=<?= $value['lopID']  ?>'><input id='btnXoa' type='button' value='xóa'></a>
                    <a href='index.php?url=viewstudentinclass&id=<?= $value['lopID'] ?>'><input id='btnChitiet' type='button' value='xem danh sách' '></a> </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <b></b>
    </div>
    <form id="formChucnang">
        <a href="index.php?url=addclass"><input id="btnThemSV" type="button" value="THÊM LỚP"> </a>
    </form>
</div>
