<?php
session_start();
require_once '../../classes/Database.php';
require_once '../../classes/Customer.php';
require_once '../../classes/Card.php';
$db = new Database;
$customer = new Customer;
$card = new Card;
$cards = $card->all();
$id = $_GET['id'];
$data = $customer->find($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../../assets/css/styles.css" rel="stylesheet" />
    <link href="../../assets/css/sweetalert.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php require_once '../../templates/header.php'; ?>
    <div id="layoutSidenav">
        <?php require_once '../../templates/navbar.php'; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Customer</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Edit Customer</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <div class="title">
                                    <i class="fas fa-table me-1"></i>
                                    Edit Customer
                                </div>
                                <div class="data-add">
                                    <a href="list.php" class="btn btn-primary">List</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="form" method="POST" action="function.php">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="id" value="<?= $data->id ?>">
                                <div class="row">
                                    <!-- Form Group (nama)-->
                                    <div class="col-md-12 gx-3 mb-3">
                                        <label class="small mb-1" for="name">Nama</label>
                                        <input class="form-control" id="name" name="name" type="text" placeholder="Nama" value="<?= $data->name ?>" />
                                    </div>
                                    <!-- Form Group (gender)-->
                                    <div class="col-md-12 gx-3 mb-3">
                                        <label class="small mb-1" for="gender">Jenis Kelamin</label>
                                        <select id="gender" name="gender" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            <option value="L" <?= $data->gender == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                                            <option value="P" <?= $data->gender == 'P' ? 'selected' : '' ?>>Perempuan</option>
                                        </select>
                                    </div>
                                    <!-- Form Group (phone)-->
                                    <div class="col-md-12 gx-3 mb-3">
                                        <label class="small mb-1" for="phone">Telepon</label>
                                        <input class="form-control" id="phone" name="phone" type="text" placeholder="Telepon" value="<?= $data->phone ?>" />
                                    </div>
                                    <!-- Form Group (email)-->
                                    <div class="col-md-12 gx-3 mb-3">
                                        <label class="small mb-1" for="email">Email</label>
                                        <input class="form-control" id="email" name="email" type="text" placeholder="Email" value="<?= $data->email ?>" />
                                    </div>
                                    <!-- Form Group (address)-->
                                    <div class="col-md-12 gx-3 mb-3">
                                        <label class="small mb-1" for="address">Alamat</label>
                                        <textarea class="form-control" id="address" name="address" placeholder="Alamat"><?= $data->address ?></textarea>
                                    </div>
                                    <!-- Form Group (card_id)-->
                                    <div class="col-md-12 gx-3 mb-3">
                                        <label class="small mb-1" for="card_id">Kartu</label>
                                        <select class="form-control" id="card_id" name="card_id">
                                            <option value="">-- Pilih --</option>
                                            <?php foreach ($cards as $card) : ?>
                                                <option value="<?= $card->id ?>" <?= $data->card_id == $card->id ? 'selected' : '' ?>><?= $card->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" id="tombol_submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php require_once '../../templates/footer.php'; ?>
        </div>
    </div>
    <?php require_once '../../templates/script.php'; ?>
</body>

</html>