<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'jobportal');

if (isset($_GET['term'])){
    $return_arr = array();
/*port=8889;*/
    try {
        $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare('SELECT DISTINCT jobskill FROM tbljobmst WHERE jobskill LIKE :term');
        $stmt->execute(array('term' => '%'.$_GET['term'].'%'));
        
        while($row = $stmt->fetch()) {
            $return_arr[] =  $row['jobskill'];
        }
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}
?>