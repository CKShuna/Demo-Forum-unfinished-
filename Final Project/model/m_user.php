<?php
    require_once("database.php");

    class User extends Database{

        public function create_1_user( $username, $password, $email, $role )
        {
            $sql = "INSERT INTO user (user_name, user_pass, user_email)
                    VALUES ('{$username}', '{$password}', '{$email}')";

            $this->set_query($sql);
            $this->excute_query();
            $this->close();
        }

        public function list_all_user() {

            $sql = "SELECT * FROM user";
            $this->set_query($sql);

            // echo "$this->query <br>";0799

            $result = $this->excute_query();

            $list_user = array();


            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                //    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

                   $list_user[] = $row ;
                }
            } 

            return $list_user;
        }

        public function signin_user($username, $password)
        {
            $sql = "SELECT user_name, role
                    FROM user
                    WHERE user_pass = '$password' AND user_name = '$username'
                    ";
            $this->set_query($sql);

            //echo "$this->query <br>";

            $result = $this->excute_query();
            $this->close();

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    //   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                      
                    session_start();
                    $_SESSION["loginUSER"] = $row["user_name"];
                    $_SESSION["roleUSER"] = $row["role"];
                    
                    return $row;
                }
            } 
            else
            {
                return null;
            }
        }

        // public function signin_user($username, $password)
        // {
        //     $sql = "SELECT user_name, role, user_pass
        //             FROM user
        //             WHERE user_name = '$username'";

        //     $this->set_query($sql);

        //     //echo "$this->query <br>";

        //     $result = $this->excute_query();
        //     $this->close();

        //     if ($result->num_rows > 0) {
        //         $row = $result->fetch_assoc();

        //         // Xác minh mật khẩu
        //         if (password_verify($password, $row['user_pass'])) {
        //             session_start();
        //             $_SESSION["loginUSER"] = $row["user_name"];
        //             $_SESSION["roleUSER"] = $row["role"];

        //             return $row; // Trả về toàn bộ mảng kết quả
        //         } else {
        //             return null; // Sai mật khẩu
        //         }
        //     } else {
        //         return null; // Không tìm thấy user
        //     }
        // }
    }
?>