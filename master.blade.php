<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Sumbar Rancak</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link href=”css/bootstrap.min.css” rel=”stylesheet”>
		<link href=”fonts\font-awesome-4.6.3\css\font-awesome.min.css” rel=”stylesheet”>
		<link rel=”stylesheet” href=”css/custom.css”>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	</head>
    

<head>
  <title>haii haii</title>
</head>
<body>
<div class="container">


       <header>
        <div class="tanggal">

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{Auth::user()->email}} <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a>Level: {{Auth::user()->role}}</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{route('actionlogout')}}"><i class="fa fa-power-off"></i> Log Out</a></li>
                    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{url('admin')}}">Halaman Admin</a>
    </li>
                  </ul>
                </li>
              </ul>
            </div>            
           </div>

           <div class="logo">
               SUMBAR RANCAK
           </div>
       </header>
       <nav>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="pariwisata">Pariwisata</a></li>
                <li><a href="kontak">Tentang Saya</a></li>
            </ul>
           
        </nav>
  <br/>
  <br/>


  <!-- bagian ini menampung konten blog -->
  @yield('konten')

  <br/>
  <br/>
  <hr/>
  <footer>
    <p>TENTANG KAMI</p>
    <a class="social-media-icon" href="https://m.facebook.com/pg/infoSumbar/posts/"><span class="fab fa-facebook"></span></a>
    <a class="social-media-icon" href="https://www.instagram.com/infosumbar/?hl=en"><span class="fab fa-instagram"></span></a>
    </footer>
</body>
</html>

<style>


    
body{
    font-family: Arial, Helvetica, sans-serif;
    background: #e6e6e6;
    padding: 0;
    margin:0;
    
    }

.container{
    width: 80%;
    height: auto;
    background: white;
    margin:auto;
    margin-top: 5px;

    padding-bottom: 5px;
}

.tanggal {
    font-size: 20px;
    background-color: grey;
    padding: 5px;
    margin: 0;
}

.logo {
    font-size: xx-large;
    padding: 20px 0 20px 10px;
    background-color: #b6a375;
}

nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: grey;
        border: 1px solid gainsboro;
    }

nav li {
    float: left;
    }

nav li a{
    display: inline-block;
    color:#ffffff;
    text-align: center;
    padding: 14px 15px;
    text-decoration: none;
    }

nav li a:hover {
    opacity:0.9;
    background-color: #ffa033;
    }


nav img {
    display: block;
    width: 100%;
    height: 330px;
}

footer {
    clear: both;
    width: 98.8%;
    height: auto;
    text-align: center;
    margin: 5px 5px 5px 5px;
    border-radius: 3px;
    border-bottom: 1px solid gainsboro;
    padding-top: 15px;
    padding-bottom: 15px;  
    background-color: #b6a375;
}
.social-media-icon {
    padding: 5px;
    background: #222;
    color: #fff;
    border-radius: 4px;
}

a.social-media-icon:hover{
    background: #fff!important;
    color: #222!important;
}




</style>