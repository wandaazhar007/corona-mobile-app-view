<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Real Time Covid-19</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style-global.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php 
    // function http_request_country($url){

    //     $ch = curl_init();

    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    //     $output = curl_exec($ch);
    //     curl_close($ch);
    //     // echo $output;
    //     return $output;
    // }
    // $data_country = http_request_country("https://coronavirus-19-api.herokuapp.com/countries");
    // $data_country = json_decode($data_country, true);
    ?>
    <?php 
        $json = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
        $data_provinsi = json_decode($json, true);
        // var_dump($data_provinsi);
        // die;
    ?>

    <div class="navbar">
    <img src="img/img1.png" alt="">
        <i class="fa fa-info"></i>
    </div>

    <div class="container">
        <div class="row">
                <?php 
                    foreach($data_provinsi as $i) {
                ?>  
            <div class="box">
                  
                <h2><?php echo $i['attributes']['Provinsi'] ?></h2>
                <table align="center" class="tabel1">
                    <tr>
                        <td>Positif</td>
                        <td>:</td>
                        <td><?php echo $i['attributes']['Kasus_Posi'] ;?> Orang</td>
                    </tr>
                    <tr>
                        <td>Meninggal</td>
                        <td>:</td>
                        <td><?php echo $i['attributes']['Kasus_Meni'] ;?> Orang</td>
                    </tr>
                    <tr>
                        <td>Sembuh</td>
                        <td>:</td>
                        <td><?php echo $i['attributes']['Kasus_Semb'] ;?> Orang</td>
                    </tr>
                </table>
            </div>
                    <?php } ?>
        </div>
    </div>

    <nav class="nav">
        <a href="index.php" class="nav_link">
            <i class="fa fa-home nav_icon"></i>
            <span class="nav_text">Home</span>
        </a>
        <a href="global-data.php" class="nav_link">
            <i class="fa fa-gratipay nav_icon"></i>
            <span class="nav_text">Indonesia</span>
        </a>
        <a href="#" class="nav_link">
            <i class="fa fa-newspaper-o nav_icon"></i>
            <span class="nav_text">Berita</span>
        </a>
        <a href="#" class="nav_link">
            <i class="fa fa-user nav_icon"></i>
            <span class="nav_text">Profil</span>
        </a>
    </nav>
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>
</html>