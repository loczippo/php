<form action="bridge.php" method="POST">
    <div>
        <h4>Chọn tháng</h4>
        <select name="Thang" id="Thang">
            <?php
                for($i=1;$i<=12;$i++) {
                    echo "<option value='".$i."'>".$i."</option>";
                }
            ?>
        </select>
    </div>
    <div>
        <h4>Chọn năm</h4>
        <select name="Nam" id="Nam">
            <?php
                for($i=2020;$i<=2030;$i++) {
                    echo "<option value='".$i."'>".$i."</option>";
                }
            ?>
        </select>
    </div>
    <br/>
    <input type="submit" value="Bóc lịch ngay">
</form>