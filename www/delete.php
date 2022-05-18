<?php
session_start();
    $count = 0;
    if (($handle = fopen("./data/accounts_db.csv", "r")) !== FALSE) {
      while (($csvadata = fgetcsv($handle, 0, ",")) !== FALSE) {      
        $data[$count++] = $csvadata;
        }
        fclose($handle);

        for ($i = 0; $i <= $count; $i++){
            if (isset($_POST['btnDelete_'.$i.''])){
                unset($data[$i]);
                $n = $i-1;
                $filename = "./data/profileImage/avartar_$n.jpg";
                unlink($filename);
                $_SESSION['no'] += 1;
            }
        }
    }
    $fp = fopen('./data/accounts_db.csv', 'w');
    foreach ($data as $fields) {
        fputcsv($fp, $fields);
    }
    fclose($fp);
    header('location:admin.php');
?>