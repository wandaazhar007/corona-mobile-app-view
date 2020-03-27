<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Virus || Wanda Azharr</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php 
    function http_request($url){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch);
        curl_close($ch);
        // echo $output;
        return $output;
    }
    $data = http_request("https://coronavirus-19-api.herokuapp.com/all");
    $data = json_decode($data, true);
    ?>
    <?php 
        function http_request_country($url2){

            $th = curl_init();
    
            curl_setopt($th, CURLOPT_URL, $url2);
            curl_setopt($th, CURLOPT_RETURNTRANSFER, 1); 
            $output2 = curl_exec($th);
            curl_close($th);
            // echo $output;
            return $output2;
        }
        $data_country = http_request_country("https://coronavirus-19-api.herokuapp.com/countries");
        $data_country = json_decode($data_country, true);
    ?>
    
    <div class="navbar">
        <img src="" alt="">
        <i class="fa fa-info"></i>
    </div>
    
    <div class="container">
        <div class="round-medium">
            <div class="caption-center left-15 text-left">
               
            </div>
        </div>
        <div class="cover-round-medium"></div>
        <p id="text_p">Informasi Terkini Wabah Virus Corona</p>
        <div class="card-info">
            <h6 align="center">Data Kasus Covid-19 Dunia</h6>
            <a href="https://coronavirus-19-api.herokuapp.com/all" style="text-decoration: none; color: black"> <p align="center">Sumber Data</p></a>
            <div class="row justify-content-center">
                <div class="items">
                    <h5 align="center">Positif</h5>
                    <i class=" fa fa-user-plus"></i>
                    <p align="center"><?php echo $data['cases']; ?></p>
                </div>
                <div class="items">
                    <h5 align="center">Mati</h5>
                    <i class=" fa fa-user-times" id="icon2"></i>
                    <p align="center"><?php echo $data['deaths']; ?></p>
                </div>
                <div class="items">
                    <h5 align="center">Sembuh</h5>
                    <i class=" fa fa-user" id="icon3"></i>
                    <p align="center"><?php echo $data['recovered']; ?></p>
                </div>
            </div>
        </div>

        <div class="card-info-indonesia">
            <h6 align="center">Data Kasus Covid-19 <?php echo $data_country[36]['country'] ?></h6>
            <a href="https://coronavirus-19-api.herokuapp.com/countries" style="text-decoration: none; color: black;"><p align="center">Sumber Data</p></a>
            <div class="row justify-content-center">
                <div class="items">
                    <h5 align="center">Positif</h5>
                    <i class=" fa fa-user-plus"></i>
                    <p align="center"><?php echo $data_country[36]['cases'] ?></p>
                </div>
                <div class="items">
                    <h5 align="center">Mati</h5>
                    <i class=" fa fa-user-times" id="icon2"></i>
                    <p align="center"><?php echo $data_country[36]['deaths'] ?></p>
                </div>
                <div class="items">
                    <h5 align="center">Sembuh</h5>
                    <i class=" fa fa-user" id="icon3"></i>
                    <p align="center"><?php echo $data_country[36]['recovered'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <nav class="nav">
        <a href="index.php" class="nav_link">
            <i class="fa fa-newspaper-o nav_icon"></i>
            <span class="nav_text">Home</span>
        </a>
        <a href="global-data.php" class="nav_link">
            <i class="fa fa-gratipay nav_icon"></i>
            <span class="nav_text">Global</span>
        </a>
        <a href="#" class="nav_link">
            <i class="fa fa-home nav_icon"></i>
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