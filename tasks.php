<div class="container-fluid px-4">
                        <h1 class="mt-4">Tasks</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tasks</li>
                        </ol>
                        
                        <a href="?page=categories_tambah" class="btn btn-primary">+ tambah Data</a>
                        <hr>
               <table class="table table-bordered">
                <tr class="bg-info">
                    <th>id</th>
                    <th>category id</th>
                    <th>user id</th>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>

                <?php
                    $query = mysqli_query($koneksi, "SELECT*FROM tasks");
                    while($data = mysqli_fetch_array($query)){

                        ?>
                        <tr>
                            <td><?php echo $data['category']; ?></td>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['user_id']; ?></td>
                            <td>
                                <a href="?page=categories_ubah&&id=<?php echo $data['categories']; ?>" class="btn btn-primary">Ubah</a>
                                <a href="?page=pelanggan_hapus&&id=<?php echo $data['categories']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                    
                ?>

               </table>
  </div>