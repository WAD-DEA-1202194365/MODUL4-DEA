<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title href="">myBooking</title>

        <?php
        $kode = rand();
        $nama = $_POST['nama'];
        $event = $_POST['event'];
        $mulai = $_POST['mulai'];
        $durasi = $_POST['durasi'];
        $pilihan = $_POST['pilihan'];
        $tel = $_POST['tel'];
        $layanan = $_POST['layanan']
        ?>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand navbar-dark bg-dark">
                <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="Home.php">Home</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
                    <ul class="navbar-nav mr-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="Booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
        <div class="container-lg mt-2 mb-2">
    <h4 class="text-center">
     Thank you for 
                    <?php 
                        echo $nama 
                    ?> 
                    Reserving
    </h4>

                <h4 class="text-center"> Please double check your reservation details</h4>
  </div>
        <div class="container-lg">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Booking Number</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Check-in</th>
                        <th scope="col" class="text-center">Check-out</th>
                        <th scope="col" class="text-center">Building Type</th>
                        <th scope="col" class="text-center">Phone Number</th>
                        <th scope="col" class="text-center">Service</th>
                        <th scope="col" class="text-center">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <th scope="row" class="text-center"><?php echo $kode ?></th>
                    <th class="text-center"><?php echo $nama ?></th>
                    <th class="text-center">
                        <?php 
                            echo strtotime($event)
                        ?>
                    </th>
                    <th class="text-center"><?php echo $mulai?></th>
                    <th class="text-center"><?php echo $pilihan?></th>
                    <th class="text-center"><?php echo $tel?></th>
                    <th class="text-center"><?php echo $layanan?></th>
                    <th class="text-center"><?php echo $layanan?></th>
                </tbody>
            </table>
        </div>
        </main>

        <div id="footer">
            <footer class="footer mt-5 py-3 bg-light">
                <div class="container text-center">
                    <span class="text-muted">dea_1202194365</span>
                </div>
            </footer>
        </div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    <style>
        #footer {
            position:absolute;
            bottom:0;
            width:100%;
            height:60px;   /* tinggi dari footer */
        }
    </style>
</html>