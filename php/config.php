<?php
    class Config {
        private $host;
        private $username;
        private $password;
        private $schema;
        
        // Fill your DB Config
        function __construct() {
            $this->host = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->schema = "beautyinlogindb";
        }
        
        function get_host() {
            return $this->host;
        }
        function get_user() {
            return $this->username;
        }
        function get_pass() {
            return $this->password;
        }
        function get_schema() {
            return $this->schema;
        }
        
        // Leave it empty
        function __destruct() {
            $this->host = "";
            $this->username = "";
            $this->password = "";
            $this->schema = "";
        }
    }
?>