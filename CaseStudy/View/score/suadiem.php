<div id="main-contain">
    <h2>Sửa điểm</h2>

    <div class="form">

        </br></br>
        <form method="post" action="index.php?url=editscore">
            <input type="hidden" name="id" value="<?php echo $scoreStudent['sinhvienID']; ?>">
            <table>
                <tr>
                    <td>Họ tên</td>
                    <td><?php echo $scoreStudent['name']?></td>
                </tr>

                <tr>
                    <td>PHP</td>
                    <td><input type="text" name="php" value="<?php echo $scoreStudent['PHP']?>"></td>
                </tr>
                <tr>
                    <td>JAVA</td>
                    <td><input type="text" name="java" value="<?php echo $scoreStudent['JAVA']?>"></td>
                </tr>
                <tr>
                    <td>PYTHON</td>
                    <td><input type="text" name="python" value="<?php echo $scoreStudent['PYTHON']?>"></td>
                </tr>
                <tr>
                    <td>JS</td>
                    <td><input type="text" name="js" value="<?php echo $scoreStudent['JS']?>"></td>
                </tr>
                <tr>
                    <td colspan=2>
                        <input id="btnChapNhan" type="submit" value="Hoàn tất" name="suadiem"/>
                    </td>
                </tr>
            </table>

        </form>
        <br>
        Chọn menu bên trái hoặc click vào <a href="index.php?url=viewscore"
                                             style="color: white; text-decoration:underline; font-weight:bold;">đây</a>
        để quay lại bảng điểm.
        <br>
        <br>


    </div>

</div>
