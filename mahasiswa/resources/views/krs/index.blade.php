<html>
    <head>
        <title>
            Index Mahasiswa
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="">Database</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/mahasiswa/new">Create</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Show</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              </div>
          </nav>
        <h1>
            Index Mahasiswa
        </h1>
        <table>
            <th>
                <tr>Student ID</tr>
                <tr>Nama</tr>
                <tr>Jurusan</tr>
                <tr>Tahun</tr>
            </th>
            <?php

            use App\Models\mahasiswa;

            $mahasiswas = mahasiswa::get();
    
            foreach ($mahasiswas as $mahasiswa) {
                echo "<tr>";
                echo "<td>".$mahasiswa->studentID."<td>";
                echo "<td>".$mahasiswa->nama."<td>";
                echo "<td>".$mahasiswa->jurusan."<td>";
                echo "<td>".$mahasiswa->tahunMasuk."<td>";
                echo"</tr>";
                };
            ?>
        </table>
    </body>
</html>