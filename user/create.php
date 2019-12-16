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
        Tambah User
        <small>Membuat akun User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="index.php"><i class="fa fa-user"></i> User</a></li>
        <li class="active"><i class="fa fa-plus"></i> Tambah User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Akun Login User</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="proses_create.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div> -->
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
