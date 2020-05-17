<?php
declare(strict_types=1);

?>
<div id="main-contain">
    <h2 style="color: red;">Bạn có chắc chắn xóa sinh viên này không?</h2>
    <div class="form">
        <b style="color: red"></b>
        </br></br>
        <form method="post" action="index.php?url=deletesinhvien">
            <input type="hidden" name="id" value="<?php echo $student->sinhvienID; ?>">
            <input type="submit" value="Delete" name="xoa">
            <a href="index.php?url=listsinhvien">Cancel</a>
        </form>

        <br>Chọn menu bên trái hoặc click vào <a href="index.php?url=listsinhvien"
                                                 style="color: blue; text-decoration:underline">đây</a> để quay lại danh
        sách sinh viên.
    </div>

</div>

