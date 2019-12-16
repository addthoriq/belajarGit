<!DOCTYPE html>
<html>
<head>
    <?php include '../template/link.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <?php include '../template/header.php';?>
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
    <?php include '../template/sidebar.php';?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubah User
        <small>Mengubah akun User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="index.php"><i class="fa fa-user"></i> User</a></li>
        <li class="active"><i class="fa fa-edit"></i> Edit User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Ubah Akun Login User</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?php
                include '../koneksi.php';
                $id      = $_GET['id'];
                $sql     = "SELECT * FROM users WHERE id = '$id'";
                $result	 = mysqli_query($konek, $sql);
                $row	 = mysqli_fetch_assoc($result);
            ?>
            <form role="form" method="post" action="proses_edit.php">
              <div class="box-body">
                  <input type="hidden" name="id" value="<?= $id ?>" class="form-control" id="name" placeholder="Masukkan Nama">
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control" id="name" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" value="<?= $row['email'] ?>" class="form-control" id="email" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <a href="index.php" class="btn btn-sm btn-default">
                      <i class="fa fa-arrow-left"></i> Kembali
                  </a>
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-send"></i> Submit
                </button>
              </div>
            </form>
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <?php include '../template/footer.php'; ?>

  <!-- Control Sidebar -->
</div>
<!-- ./wrapper -->

    <?php include '../template/script.php' ?>

</body>
</html>
