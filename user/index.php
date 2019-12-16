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
        User
        <small>bikin projek CMS seperti Wordpress</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active"><i class="fa fa-user"></i> User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="create.php" class="btn btn-sm btn-info">
              <i class="fa fa-plus"></i> Tambah
          </a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tr>
              <th style="width: 10px">No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
            <?php
                include '../koneksi.php';
                $nomor     = 1;
                $sql       = "SELECT * FROM users";
                $results   = mysqli_query($konek, $sql);
                if (mysqli_num_rows($results)>0) {
                    while ($row = mysqli_fetch_assoc($results)) {
                        echo "<tr>
                          <td>".$nomor++."</td>
                          <td>".$row['name']."</td>
                          <td>".$row['email']."</td>
                          <td>
                              <a href='edit.php?id=".$row['id']."' class='btn btn-primary btn-xs'>Edit</a>
                              <a href='delete.php?id=".$row['id']."' class='btn btn-danger btn-xs' onclick=' javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\") '>Hapus</a>
                          </td>
                        </tr>";
                    }
                }
            ?>
          </table>
        </div>
        <!-- /.box-body -->
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
