<?php



if (isset($_GET['page']) && isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];
    $page = $_GET['page'];

    if ($page == 'pasien') {
        if ($aksi == 'view') {
            require_once('view/menu/headerRegristrasi.php');
            require_once('view/pasien/index.php');
            require_once('view/menu/footer.php');
        } else if ($aksi == 'tambah') {
            require_once('view/menu/headerRegristrasi.php');
            require_once('view/pasien/tambah.php');
            require_once('view/menu/footer.php');
        }
    } else if ($page == 'poliklinik') {
        if ($aksi == 'view') {
            require_once('view/menu/headerRegristrasi.php');
            require_once('view/poliklinik/index.php');
            require_once('view/menu/footer.php');
        } else if ($aksi == 'tambah') {
            require_once('view/menu/headerRegristrasi.php');
            require_once('view/poliklinik/tambah.php');
            require_once('view/menu/footer.php');
        }
    } else if ($page == 'regristrasi') {
        if ($aksi == 'view') {
            require_once('view/menu/headerRegristrasi.php');
            require_once('view/regristrasi/index.php');
            require_once('view/menu/footer.php');
        } else if ($aksi == 'tambah') {
            require_once('view/menu/headerRegristrasi.php');
            require_once('view/regristrasi/tambah.php');
            require_once('view/menu/footer.php');
        }
    } else if ($page == 'obat') {
        if ($aksi == 'view') {
            require_once('view/menu/headerApotik.php');
            require_once('view/obat/index.php');
            require_once('view/menu/footer.php');
        } else if ($aksi == 'tambah') {
            require_once('view/menu/headerApotik.php');
            require_once('view/obat/tambah.php');
            require_once('view/menu/footer.php');
        }
    } else if ($page == 'transaksi') {
        if ($aksi == 'view') {
            require_once('view/menu/headerApotik.php');
            require_once('view/transaksi/index.php');
            require_once('view/menu/footer.php');
        } else if ($aksi == 'detailtransaksi') {
            require_once('view/menu/headerApotik.php');
            require_once('view/transaksi/detailTransaksi.php');
            require_once('view/menu/footer.php');
        }
    } else if ($page == 'jenisobat') {
        if ($aksi == 'view') {
            require_once('view/menu/headerApotik.php');
            require_once('view/jenis obat/index.php');
            require_once('view/menu/footer.php');
        } else if ($aksi == 'tambah') {
            require_once('view/menu/headerApotik.php');
            require_once('view/jenis obat/tambah.php');
            require_once('view/menu/footer.php');
        }
    } else if ($page == 'kategoriobat') {
        if ($aksi == 'view') {
            require_once('view/menu/headerApotik.php');
            require_once('view/kategori obat/index.php');
            require_once('view/menu/footer.php');
        } else if ($aksi == 'tambah') {
            require_once('view/menu/headerApotik.php');
            require_once('view/kategori obat/tambah.php');
            require_once('view/menu/footer.php');
        }
    }
} else {
    header('location: index.php?page=pasien&aksi=view');
}
