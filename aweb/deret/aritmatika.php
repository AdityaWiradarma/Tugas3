<?php
//Form submitted
//set input hasil dan deret menjadi kosong
$suku1 = "";           //input1
$beda = "";            //input2
$suku_n = "";          //suku ke - n
$baris = "";           //baris yang akan disimpan
$baristampil = "";       //baris yang akan tampil
$hasil = "";           //hasil yang akan tampil


if (isset($_POST['submit'])) {      //cek jika tombol submit ditekan

    $suku1 = $_POST["suku1"];
    $beda = $_POST["beda"];
    $suku_n = $_POST["suku_n"];

    //aritmatika

    $a = $suku1;
    $b = $beda;
    $n = $suku_n;

    //suku ke n
    $hasil = $a + ($n - 1) * $b;

    //tampilan baris
    for ($i = 1; $i < $n + 1; $i++) {
        $baris = $a + ($i - 1) * $b;
        $baristampil .= $baris . " ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <title>Document</title>
</head>

<body>
    <section class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="asset/img/logo2.jpg.png" alt="" srcset=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto text-right">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../media/about.html">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../media/contact.html">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../media/register.html">REGISTER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../deret/fibonacci.php">FIBONACCI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../deret/aritmatika.php">ARITMATIKA</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Konten -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <form method="POST" action="#" class="bg-white form-container" id="forminput">
                            <h2>Menghitung Baris Aritmatika</h2>
                            <br />
                            <div class="form-group">
                                <label for="input1">Suku Pertama (a)</label>
                                <input type="text" class="form-control" value="<?php echo $suku1; ?>" id="input1" placeholder="Masukkan Suku Pertama" name="suku1" required />
                            </div>
                            <div class="form-group">
                                <label for="input2">Beda (b)</label>
                                <input type="text" class="form-control" value="<?php echo $beda; ?>" id="input2" placeholder="Masukkan Beda Dari Baris" name="beda" required />
                            </div>

                            <div class="form-group">
                                <label for="input2">Suku Yang Dicari (n)</label>
                                <input type="text" class="form-control" value="<?php echo $suku_n; ?>" id="jmlderet" placeholder="Masukkan Suku Yang Ingin Dicari" name="suku_n" required />
                            </div>

                            <button type="submit" class="btn btn-info btn-block daftar-btn" name="submit">
                                Hitung
                            </button>

                            <br />
                            <div class="form-group">
                                <h5> <b>Suku Ke-N (Un): </b> </h5>
                                <h4> <?php echo $hasil; ?> </h4>
                            </div>

                            <div class="form-group">
                                <h5> <b>Baris Aritmatika: </b> </h5>
                                <h4> <?php echo $baristampil; ?> </h4>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- Akhir Container -->
            </div>
            <hr>

            <!--footer-->
            <section class="footer">
                <footer class="bg-dark">
                    <div class="container">
                        <div class="row pt-3">
                            <div class="col text-center text-white">
                                <p> | Nyoman Aditya Wiradarma - 2021 | </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </section>

</body>

</html>