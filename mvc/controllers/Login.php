<?php
    class Login extends Controller{
        
        function Index(){
            $view = $this->view("Layout1", [
                "Page" => "login",
            ]);
            echo $view;
        }

        function Auth() {
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
                $Account = $this->model("TaiKhoanModel");
                $data = $Account->GetAccount($_POST["username"],$_POST['password']);
                
                
                
            }
        }
    }
?>