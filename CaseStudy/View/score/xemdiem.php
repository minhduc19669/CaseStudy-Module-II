<?php
declare(strict_types=1);
use controllerCase\scoreController;
if (isset($_POST['suadiem'])){
    require_once '../../Controller/scoreController.php';
    require_once '../../Model/scoreDB.php';
    $score_controller=new scoreController();
    $score_controller->getScore();
}
?>


<div id="main-contain">
    <h2>CHỌN SỬA Ở CỘT CHỨC NĂNG </h2><br>
    <div id="listSV">
        <table width="70%">
            <tr>
                <th>STT</th>
                <th>Sinh viên</th>
                <th>PHP</th>
                <th>Java</th>
                <th>Python</th>
                <th>Javascript</th>
                <th>Chức năng</th>
            </tr>
            <?php foreach ($result as $key=> $value) :?>
            <tr>
                <td><?php echo ++$key ;?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['PHP']; ?></td>
                <td><?php echo $value['JAVA']; ?></td>
                <td><?php echo $value['PYTHON']; ?></td>
                <td><?php echo $value['JS']; ?></td>
                <td style='text-align: center;'> <a href='index.php?url=editscore&id=<?php echo $value['sinhvienID']?>'><input id='btnSua' type='button' value='sửa'></a> </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <form id="formChucnang">
        <a href=""><input  id="btnThemSV" type="button" value="THÊM ĐIỂM"></a>
    </form>


</div>


