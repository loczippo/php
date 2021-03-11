<?php
    class Home extends Controller{
        function Index() {
            // models
            $SinhVien = $this->model("SinhVienModel");
            $data = $SinhVien->GetSV();
            $view = $this->view("Layout1", [
                "SinhVien" => $data,
                "Page" => "news"
            ]);
            echo $view;
            // while($row = mysqli_fetch_array($data)) {
            //     echo $row["hoten"]."<br/>";
            // }

            // views
            
        }
        function Show() {
            $SinhVien = $this->model("SinhVienModel");
            $name = $SinhVien->GetSV();
            $view = $this->view("Layout1", [
                "SinhVien" => $name,
                "Page" => "news",
                ]);
            echo $view;
        }
    }
?>