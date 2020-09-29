<?php
    require_once("config.php");

    function execute($sql, $params, $close) {
        
        // Create connection to database
        $config = new Config();
        $mysqli = new mysqli($config->get_host(), $config->get_user(), $config->get_pass(), $config->get_schema());
        
        // Prepare sql statement
        $stmt = $mysqli->prepare($sql) or die("Failed to prepare statement!");
        
        // Bind parameter(s) to prepared sql statement
        if (count($params) > 0) {
            call_user_func_array(array($stmt, 'bind_param'), refValues($params));
        }
        
        // Execute prepared sql statement
        $stmt->execute();
        
        /****************************************************************/
        /* ----------------------- BOOLEAN type ----------------------- */
        /* Always true when execute [INSERT, UPDATE, DELETE] statement. */
        /* Always false when execute [SELECT] statement.                */
        /****************************************************************/
        if ($close) {
            // IF true, return affected row(s)
            $result = $mysqli->affected_rows;
        } else {
            // IF false, fetch result(s)
            $results = [];
            $meta = $stmt->result_metadata();
            
            while ($field = $meta->fetch_field()) {
                $parameters[] = &$row[$field->name];
            }
            
            call_user_func_array(array($stmt, 'bind_result'), refValues($parameters));
            
            while ($stmt->fetch()) { 
               $x = array(); 
               foreach($row as $key => $val) { 
                  $x[$key] = $val; 
               } 
               $results[] = $x; 
            }

            $result = $results;
        }
        
        // Close connection
        $stmt->close();
        $mysqli->close();
        
        return $result;
    }

    function refValues($arr){
        //Reference is required for PHP 5.3+
        if (strnatcmp(phpversion(),'5.3') >= 0) {
            $refs = array();
            foreach($arr as $key => $value)
                $refs[$key] = &$arr[$key];
            return $refs;
        }
        return $arr;
    }
?>