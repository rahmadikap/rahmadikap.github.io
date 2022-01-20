<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/New folder/style-guestbook.css" type="text/css">
    <title>ATK STORE</title>
  </head>
  <body style="background-color: lightgray;">
    <a name="atas"></a>
    <img src="toko.jpg" width="100%" height="130px">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ATK STORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Product.html">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="Buku_Tamu.php">Buku Tamu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

 <!--end navbar-->

 <!--start guestbook-->
 <div class="container mt-3"><div class="judul">
  <h5 class="text-center text-judul">BUKU TAMU</h5>
</div>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
    <input type="text" name="input-nama" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">No Hp</label>
    <input type="text" name="input-nohp" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" name="input-email" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" name="input-alamat" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pesan</label>
    <input type="text" name="input-pesan" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
</div>

<!--start php-->
<?php
if(isset($_POST['input-nama'])){
  $name = $_POST['input-nama'];
  $nohp = $_POST['input-nohp'];
  $email = $_POST['input-email'];
  $alamat = $_POST['input-alamat'];
  $pesan = $_POST['input-pesan'];

  echo "<table>
          
    <tr>
    <td>Nama Lengkap<td>
    <td> ; </td>
    <td>$name</td>
    </tr>
    <tr>
    <td>No Hp<td>
    <td> ; </td>
    <td>$nohp</td>
    </tr>
    <tr>
    <td>Email<td>
    <td> ; </td>
    <td>$email</td>
    </tr>
    <tr>
    <td>Alamat Lengkap<td>
    <td> ; </td>
    <td>$alamat</td>
    </tr>
    <tr>
    <td>Pesan<td>
    <td> ; </td>
    <td>$pesan</td>
    </tr>
</table>
  ";
}
?>
<!--end php-->
 <!--end guestbook-->
    <!--start footer-->
    <footer class="bg-light p-5 mt-5">
      <div class="container">
        <div class="row mt-2">
          <div class="col-md-6 text-md-start text-center pt-2 pb-2">
            <a href="#" class="text-decoration-none">
              <img
                src="../Sources/assets/logo.png"
                style="width: 40px"
                alt=""
              />
            </a>
            <div class="text-center" style="background-color: burlywood;">
                <span>Copyright @2022 | Created with
                  <i class="fas fa-heart text-danger"></i> by
                  <a href="" class="text-decoration-none text-dark fw-bold" >Rahmadika Putri Tresyani</a>
                </span>
            </div>
          </div>

          <div class="col-md-6 text-md-end text-center pt-2 pb-2">
            <a
              href="https://www.instagram.com/krlndssss/"
              class="text-decoration-none"
            >
              <img
                class="ms-2"
                src="../assets/sosmed/instagram.png"
                style="width: 32px"
                alt=""
              />
            </a>
            <a
              href="https://wa.me/085947369676?text=halooo%20gaesss"
              class="text-decoration-none"
            >
              <img
                class="ms-2"
                src="../assets/sosmed/whatsapp.png"
                style="width: 32px"
                alt=""
              />
            </a>
            
          </div>
        </div>
      </div>
    </footer>
    <!--end footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    

  </body>
</html>