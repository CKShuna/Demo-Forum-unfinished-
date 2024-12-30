<?php
    require_once("database.php");

    class initDatabase extends Database {

        public function create_structure()
        {
            ############### Table USER
            $sql = "CREATE TABLE IF NOT EXISTS User (
                user_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                user_name VARCHAR(50) NOT NULL,
                user_pass VARCHAR(255) NOT NULL,
                user_email VARCHAR(255) NOT NULL UNIQUE,
                role INT(1) NOT NULL DEFAULT 0,
                user_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                );";

            $this->set_query($sql);
            $result = $this->excute_query();

            ############### Table CATEGORY  

            $sql = "CREATE TABLE IF NOT EXISTS Category (
                category_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                category_name VARCHAR(50) NOT NULL UNIQUE
                );";

            $this->set_query($sql);
            $result = $this->excute_query();

            $sql = "INSERT INTO category (category_name) 
                    VALUES 
                        ('Games'),
                        ('Musics'),
                        ('General Discussions');";

            $this->set_query($sql);
            $result = $this->excute_query();
            
            ############### Table TOPIC  

            $sql = "CREATE TABLE IF NOT EXISTS Topic (
                topic_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                topic_subject VARCHAR(255) NOT NULL,
                topic_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                topic_by INT(10) UNSIGNED,
                topic_cat INT(10) UNSIGNED,
                FOREIGN KEY (topic_by) REFERENCES User(user_id) ON DELETE SET NULL,
                FOREIGN KEY (topic_cat) REFERENCES Category(category_id) ON DELETE SET NULL
            );";

            $this->set_query($sql);
            $result = $this->excute_query();

            ############### Table REPLY  

            $sql = "CREATE TABLE IF NOT EXISTS Reply (
                reply_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                reply_content TEXT NOT NULL,
                reply_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                reply_topic INT(10) UNSIGNED,
                reply_by INT(10) UNSIGNED,
                FOREIGN KEY (reply_topic) REFERENCES Topic(topic_id) ON DELETE SET NULL,
                FOREIGN KEY (reply_by) REFERENCES User(user_id) ON DELETE SET NULL
            );";

            $this->set_query($sql);
            $result = $this->excute_query();

            $this->close();
            echo "INIT COMPLETE";
        }   
    }
    
    $myinit = new initDatabase();

    $myinit->create_structure();
?>