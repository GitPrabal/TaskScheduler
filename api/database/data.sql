CREATE TABLE IF NOT EXISTS ".$this->task_table." (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        job LONGTEXT,
        status varchar(100),
        created_at TIMESTAMP)
