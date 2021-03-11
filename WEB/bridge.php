<?php
    if(isset($_POST["Thang"], $_POST["Nam"]))
        echo $_POST["Thang"] . " " . $_POST["Nam"];
    else {
        header("Location: ./index.php");
    }
?>

<?php
    require_once "./index.php";
?>

<table border="1" cellspacing="">
    <tr>
        <?php
            for ($i = 2; $i < 8; $i++) {
                echo "<td>"."Thứ " . $i."</td>";
            }
        ?>
        <td>Chủ nhật</td>
    </tr>
    <?php
        $ngay = date("d");
        $thang = $_POST["Thang"];
        $nam = $_POST["Nam"];
        $songay = cal_days_in_month(CAL_GREGORIAN,$thang,$nam);
        $thangtruoc = date("t", mktime(0,0,0,$thang-1,1,$nam));
        $ngaydauthang = date("N", mktime(0,0,0,$thang,1,$nam));
        $ngaycuoithang = date("N", mktime(0,0,0,$thang,$songay,$nam));
        $ngaycuathangtruoc = $ngaydauthang - 1; 
        $demngay = 1;
	    $demthangtieptheo = 1;
        if($ngaydauthang > 5){	$rows = 6; }else {$rows = 5; }
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for ($j = 1; $j <=7; $j++) {
                if(($demngay - $ngaydauthang) < 0){
                    // $date = (($thangtruoc - $ngaycuathangtruoc) + $demngay);
                    $date = null;
                }
                else if(($demngay - $ngaydauthang) >= $songay){
				$date = null;
                // $date = ($demthangtieptheo);
				// $demthangtieptheo++;
                }
            else {
				$date = ($demngay - $ngaydauthang + 1);
			}
            if(date("l", mktime(0,0,0,$thang,$date,$nam)) == "Sunday") {
                echo "<td style='color: red'>";
            }
            else if(date("l", mktime(0,0,0,$thang,$date,$nam)) == "Saturday") {
                echo "<td style='color: cyan'>";
            }
            else {
                echo "<td>";
            }
            echo $date . '</td>';
			$demngay++;
            }
            echo "<tr>";
        }
        
    ?>
</table>
