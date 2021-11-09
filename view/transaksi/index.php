<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Data Poliklinik</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark-blue">Transaksi Obat</h6>
        </div>
        <div class="card-body">
            <form action="index.php?page=transaksi&aksi=detailtransaksi" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Pasien</label>
                            <select class="form-control" name="pasien" id="pasien">
                                <option value="Muhammad Mudi">Muhammad Mudi</option>
                                <option value="Baktiar Ridho Akbar">Baktiar Ridho Akbar</option>
                                <option value="Bahrul Fahmi">Bahrul Fahmi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-dark-blue">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark-blue">Data Transaksi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pasien</th>
                            <th>Tanggal</th>
                            <th>Jumlah Obat</th>
                            <th>Total Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Muhammad Mudi</td>
                            <td>11/7/2021</td>
                            <td>3</td>
                            <td>50.000</td>
                            <td>
                                <a href="" class="badge badge-primary" style="font-size: 16px;"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Baktiar Ridho Akbar</td>
                            <td>11/7/2021</td>
                            <td>1</td>
                            <td>10.000</td>
                            <td>
                                <a href="" class="badge badge-primary" style="font-size: 16px;"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bahrul Fahmi</td>
                            <td>11/7/2021</td>
                            <td>2</td>
                            <td>20.000</td>
                            <td>
                                <a href="" class="badge badge-primary" style="font-size: 16px;"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>