<?php
    class SinhVienModel extends Database {
        public function GetSV() {
            $qr="select * from sinhvien";
            return mysqli_query($this->connection, $qr);
        }
    }
?>