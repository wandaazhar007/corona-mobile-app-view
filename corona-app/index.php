<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Real Time Covid-19</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
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
        <img src="img/img1.png" alt="">
        <i class="fa fa-info"></i>
    </div>

    <div class="container">

        <div class="owl owl-carousel owl-theme">
            <div class="round-medium">
                <div class="caption-center left-15 text-left">

                </div>
            </div>
            <div id="round-medium">
                <div class="caption-center left-15 text-left">

                </div>
            </div>
        </div>


        <div class="cover-round-medium"></div>
        <p id="text_p">Informasi Terkini Wabah Virus Corona</p>
        <a href="https://www.instagram.com/wanda_azharr/" style="text-decoration: none;"><p id="text_p2">Testerrr</p></a>
        <div class="card-info">
            <h6 align="center">Data Kasus Covid-19 Dunia</h6>
            <a href="https://coronavirus-19-api.herokuapp.com/all" style="text-decoration: none; color: black"> <p align="center">Sumber Data</p></a>
            <div class="row justify-content-center">
                <a href="#"data-toggle="modal" class="items" data-target="#positif_dunia" style="text-decoration: none; color: black;">
                    <div class="items">
                        <h5 align="center">Positif</h5>
                        <i class=" fa fa-user-plus"></i>
                        <p align="center"><?php echo $data['cases']; ?></p>
                    </div>
                </a>
                <a href="#"data-toggle="modal" class="items" data-target="#mati_dunia" style="text-decoration: none; color: black;">
                    <div class="items">
                        <h5 align="center">Mati</h5>
                        <i class=" fa fa-user-times" id="icon2"></i>
                        <p align="center"><?php echo $data['deaths']; ?></p>
                    </div>
                </a>
                <a href="#"data-toggle="modal" class="items" data-target="#sembuh_dunia" style="text-decoration: none; color: black;">
                    <div class="items">
                        <h5 align="center">Sembuh</h5>
                        <i class=" fa fa-user" id="icon3"></i>
                        <p align="center"><?php echo $data['recovered']; ?></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="card-info-indonesia">
            <h6 align="center">Data Kasus Covid-19 <?php echo $data_country[35]['country'] ?></h6>
            <a href="https://coronavirus-19-api.herokuapp.com/countries" style="text-decoration: none; color: black;"><p align="center">Sumber Data</p></a>
            <div class="row justify-content-center">
                <a href="#"data-toggle="modal" class="items" data-target="#positif_ind" style="text-decoration: none; color: black;">
                    <div class="items">
                        <h5 align="center">Positif</h5>
                        <i class=" fa fa-user-plus"></i>
                        <p align="center"><?php echo $data_country[35]['cases'] ?></p>
                    </div>
                </a>
                <a href="#"data-toggle="modal" class="items" data-target="#mati_ind" style="text-decoration: none; color: black;">
                    <div class="items">
                        <h5 align="center">Mati</h5>
                        <i class=" fa fa-user-times" id="icon2"></i>
                        <p align="center"><?php echo $data_country[35]['deaths'] ?></p>
                    </div>
                </a>
                <a href="#"data-toggle="modal" class="items" data-target="#sembuh_ind" style="text-decoration: none; color: black;">
                    <div class="items">
                        <h5 align="center">Sembuh</h5>
                        <i class=" fa fa-user" id="icon3"></i>
                        <p align="center"><?php echo $data_country[35]['recovered'] ?></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <nav class="nav">
        <a href="index.php" class="nav_link">
            <i class="fa fa-home nav_icon"></i>
            <span class="nav_text">Home</span>
        </a>
        <a href="global-data.php" class="nav_link">
            <i class="fa fa-gratipay nav_icon"></i>
            <span class="nav_text">Global</span>
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

    <!-- Modal -->
    <div class="modal fade" id="positif_dunia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="card-body">
            <h6 style="color: red; font-weight: 500; text-align: center; margin-top: 20px; font-size: 18px;">Jumlah Orang Positif Covid-19 Diseluruh Negara</h6>
            <i class=" fa fa-user-plus" style="color: red; font-size: 100px; margin-left: 100px;"></i>
            <p style="text-align: center; color: red; font-weight: bold;">
                <?php echo $data['cases']; ?> Orang
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger tombol" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="mati_dunia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="card-body">
            <h6 style="color: black; font-weight: 500; text-align: center; margin-top: 20px; font-size: 18px;">Jumlah Korban Meninggal Covid-19 Diseluruh Negara</h6>
            <i class=" fa fa-user-times" style="color: black; font-size: 100px; margin-left: 100px;"></i>
            <p style="text-align: center; color: black; font-weight: bold;">
                <?php echo $data['deaths']; ?> Orang
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary tombol" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="sembuh_dunia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="card-body">
            <h6 style="color: green; font-weight: 500; text-align: center; margin-top: 20px; font-size: 18px;">Jumlah Korban Sembuh Covid-19 Diseluruh Negara</h6>
            <i class=" fa fa-user" style="color: green; font-size: 100px; margin-left: 100px;"></i>
            <p style="text-align: center; color: green; font-weight: bold;">
                <?php echo $data['recovered']; ?> Orang
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success tombol" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="positif_ind" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="card-body">
            <h6 style="color: red; font-weight: 500; text-align: center; margin-top: 20px; font-size: 18px;">Jumlah Orang Positif Covid-19 Diseluruh Negara</h6>
            <i class=" fa fa-user-plus" style="color: red; font-size: 100px; margin-left: 100px;"></i>
            <p style="text-align: center; color: red; font-weight: bold;">
                <?php echo $data_country[35]['cases']  ?> Orang
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger tombol" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="mati_ind" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="card-body">
            <h6 style="color: black; font-weight: 500; text-align: center; margin-top: 20px; font-size: 18px;">Jumlah Korban Meninggal Covid-19 Diseluruh Indonesia</h6>
            <i class=" fa fa-user-times" style="color: black; font-size: 100px; margin-left: 100px;"></i>
            <p style="text-align: center; color: black; font-weight: bold;">
            <?php echo $data_country[35]['deaths']  ?> Orang
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger tombol" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="sembuh_ind" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="card-body">
            <h6 style="color: green; font-weight: 500; text-align: center; margin-top: 20px; font-size: 18px;">Jumlah Korban Sembuh Covid-19 Diseluruh Indonesia</h6>
            <i class=" fa fa-user" style="color: green; font-size: 100px; margin-left: 100px;"></i>
            <p style="text-align: center; color: green; font-weight: bold;">
            <?php echo $data_country[35]['recovered']  ?> Orang
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger tombol" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="js/owl.carousel.min.js"></script>
      <script>
        // $(document).ready(function () {
        //     $(".owl-carousel").owlCarousel();
        // });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                items: 4,
                autoplay:true,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
                margin: 10,
                //			nav:true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        });
    </script>
</body>

</html>
