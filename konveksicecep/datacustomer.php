global$koneksi; global$koneksi;
<?php

    global $koneksi;
    include('koneksi.php');

    $id = $_GET['id'];

    $cust = mysqli_query($koneksi, "SELECT * FROM customer WHERE id_customer = '$id'");

    $d = mysqli_fetch_array($cust);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Konveksi Cecep</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="formlogin.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="formlogin.php">Login</a>
                                            <a class="nav-link" href="dataadmin.php">Register</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <a class="nav-link" href="dataadmin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Admin
                            </a>
                            <a class="nav-link" href="datacustomer.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Customer
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <h4 class="m-1">Tambah Data Customer</h4>
                                <form class="row g-3 m-1" method="post" action="inputcustomer.php">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">No. Telepon</label>
                                        <input type="text" name="notelepon" class="form-control" placeholder="No. Telepon">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" placeholder="Bandung, Jawa Barat">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputCity" class="form-label">Pesanan</label>
                                        <input type="text" name="produkpesanan" class="form-control" placeholder="Jersey">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Jumlah</label>
                                        <input type="text" name="jumlah" class="form-control" placeholder="100">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputZip" class="form-label">Status</label>
                                        <input type="text" name="status" class="form-control" placeholder="Cutting">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <table class="table" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Customer</th>
                                            <th>No. Telepon</th>
                                            <th>Alamat</th>
                                            <th>Pesanan</th>
                                            <th>Jumlah</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    include 'koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi,"SELECT * FROM customer");
                                    while($d = mysqli_fetch_array($data)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['nama']; ?></td>
                                            <td><?php echo $d['notelepon']; ?></td>
                                            <td><?php echo $d['alamat']; ?></td>
                                            <td><?php echo $d['produkpesanan']; ?></td>
                                            <td><?php echo $d['jumlah']; ?></td>
                                            <td><?php echo $d['status']; ?></td>
                                            <td>
                                                <a role ="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop?id=<?php echo $d['id_customer']; ?>">UBAH</a>
                                                <a role ="button" class="btn btn-danger" href="hapuscustomer.php?id=<?php echo $d['id_customer']; ?>">HAPUS</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop<?php echo $d['id_customer']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Update Data Admin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3 mt-1 mb-3" method="POST" action="updatecustomer.php">
                                    <div class="row m-1">
                                        <div class="col-12 mb-3">
                                            <input type="text" value="<?php echo $d['id_customer']; ?>" name="id_customer" class="form-control" placeholder="ID Customer">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <input type="text" value="<?php echo $d['nama']; ?>" name="nama" class="form-control" placeholder="Nama">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <input type="text" value="<?php echo $d['notelepon']; ?>" name="notelepon" class="form-control" placeholder="No. Telepon">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <input type="text" value="<?php echo $d['alamat']; ?>" name="alamat" class="form-control" placeholder="Alamat">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <input type="text" value="<?php echo $d['produkpesanan']; ?>" name="produkpesanan" class="form-control" placeholder="Produk Pesanan">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <input type="text" value="<?php echo $d['jumlah']; ?>" name="jumlah" class="form-control" placeholder="Jumlah">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <input type="text" value="<?php echo $d['status']; ?>" name="status" class="form-control" placeholder="Status">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>