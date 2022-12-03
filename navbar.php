<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="resources/fonts/stylesheet.css">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/styles.css">

<body>
    <nav class="navbar sticky-top navbar-expand-lg" style="background-color:#15477A; ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link text-white navlink mr-3 <?= $aktif == 'home' ? 'active' : '' ?>"
                    href="index.php">HOME</a>
                <a class="nav-item nav-link text-white navlink mr-3 <?= $aktif == 'artikel' ? 'active' : '' ?>"
                    href="artikel.php">ARTIKEL</a>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white <?= $active == 'Profile' ? 'active' : '' ?> dropdown-toggle"
                            href="#" id="navbardrop" data-toggle="dropdown">PROFILE</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item <?= $aktif == 'visi_misi' ? 'active' : '' ?>"
                                href="visi_misi.php">VISI MISI</a>
                            <a class="dropdown-item <?= $aktif == 'jurusan' ? 'active' : '' ?>"
                                href="jurusan.php">JURUSAN</a>
                            <a class="dropdown-item <?= $aktif == 'ekskul' ? 'active' : '' ?>"
                                href="ekskul.php">EKSKUL</a>
                            <a class="dropdown-item <?= $aktif == 'guru' ? 'active' : '' ?>" href="guru.php">DATA
                                GURU</a>
                            <a class="dropdown-item <?= $aktif == 'siswa' ? 'active' : '' ?>" href="siswa.php">DATA
                                SISWA</a>
                        </div>
                    </li>
                </ul>
                <a class="nav-item nav-link text-white navlink mr-3 <?= $aktif == 'galeri' ? 'active' : '' ?>"
                    href="galeri.php">GALERI</a>
                <a class="nav-item nav-link text-white navlink mr-3 <?= $aktif == 'kontak' ? 'active' : '' ?>"
                    href="kontak.php">KONTAK</a>
                <a class="nav-item nav-link text-white navlink mr-3 <?= $aktif == 'tentang_website' ? 'active' : '' ?>"
                    href="tentang_website.php">TENTANG</a>
                <a class="nav-item nav-link text-left text-white navlink mr-3 <?= $aktif == 'logout' ? 'active' : '' ?>"
                    href="admin/logout.php" onclick="return confirm('apakah anda yakin ?')">LOGOUT</a>
            </div>
        </div>
    </nav>
</body>

</html>