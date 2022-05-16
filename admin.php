<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    
</head>
<body>
    <h1>Admin Page</h1>
    <?php
    function get_html($csv_file){
        $html = '<table class="table table-bordered">';
        $file = fopen($csv_file, 'r');
        $header_arr = fgetcsv($file);
        $html.='<thead class="bg-primary">';
        foreach($header_arr as $k => $v){
            $html.='<th>'.$v.'</th>';
        }
        $html.='<th>';
        $html.='Edit';
        $html.='</th>';
        $html.='</thead>';

        $html.='<tbody>';
        while($line = fgetcsv($file)){
            $html.='<tr>';
            foreach($line as $k => $v){
                $html.='<td>'.$v.'</td>';
            }
            $html.='<td class="text-center">';
                $html.= '<button class="btn btn-danger me-3">Delete</button>';
                $html.= '<button class="btn btn-primary">View</button>';
            $html.='</td>';
            $html.='</tr>';
        }
        $html.='</tbody>';
        $html.='</table>';
        return $html;
    }

    echo get_html('accounts_db.csv');
?>
</body>
</html>