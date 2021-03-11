<?php
    class TaiKhoanModel extends Database {
        
        public function GetAccount($username,$password) {
            $qr = "SELECT * FROM taikhoan where username=${username} AND password=${password}";
            return mysqli_query($this->connection, $qr);
        }
    }
?>