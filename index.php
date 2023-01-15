<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// connection databases

session_start();
$koneksi = mysqli_connect("localhost","admin","admin","login");
 
// Check connection
if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
}




// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){

 session_start();
        $_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
       #header('Location:yadi.php');
	# $login = 'login ';
	echo "login ";
        exit;
    } else {
        // Login failed
        $error = 'Incorrect username or password';
    }

// cba 
	#$_SESSION['username'] = $username;
	#$_SESSION['status'] = "login";
	#header("location:https://id-id.facebook.com/");
	#echo "login berhasil";
#}else{
	#echo "belum login";
}
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<link rel="stylesheet" href="style.css">


    <title>PORTOFOLIO-Muhammad Ariyanda</title>
  </head>



  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg shadow-lg navbar-light" style="background-color: #00ff62">
      <div class="container">
        <!-- navbar logo -->
        <img src="web/img/saya.jpeg" alt="" width="50" height="50" class="d-inline-block align-text-top rounded-circle md" />
        <a class="navbar-brand" href="#">   Muhammad Ariyanda Z </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">STUDY</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">STUDY</a>
        </li>
          </ul>
          <!-- <form class="d-flex">
          </form> -->
        </div>
      </div>
    </nav>
    <!--END NAVBAR -->
    <!--  -->
    <!-- JUMBO TRON -->
    <div class="jumbotron text-center ">
      <div class="container">
        <img src="web/img/saya.jpeg" alt="" width="150" height="150" class="img-thumbnail rounded-circle" />
        <h1 class="display-4">Muhammad Ariyanda Zulyadiansyah</h1>
        <p class="lead">Web Programmer | Networking </p>
        
      </div>
     </div>
    </div>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>



<!-- form uji coba  -->
 <form action="/" method="post">
       <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>

<!-- END FORM -->












<?php if (isset($error)) { echo $error; } ?>
<?php if (isset($login)) { echo $login; } ?>

    <!-- END JUMBO TRON -->
    <!--  -->
    <!-- src -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <!-- END SCR -->
  </body>
</html>
