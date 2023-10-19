<!DOCTYPE html>
<html>
<head>
	<title>Smp Hafiz Islamic</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand bg-dark">
    <ul class="nav">
      <li>
        <a href="{{ url('/beranda') }}" class="nav-link" >Home</a>
      </li>
      <li>
        <a href="{{ url('/tentang-kami') }}" class="nav-link">Tentang Kami</a>
      </li>
      <li>
        <a  href="{{ url('/info-kegiatan') }}" class="nav-link">Info Kegiatan</a>
      </li>
    </ul>
  </nav>

  

  @yield('content')

  <footer class="fixed-bottom bg-primary">
  	<div class="text-center">
  		(c) 2023 Copyright Smp Hafizh Islamic
  	</div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>