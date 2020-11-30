<center>
<h4>Laporan Transaksi</h4>
<table border="1" cellspacing="0" cellpadding="0">
                  <thead>
                    <tr class="table-info">
                      <th scope="col">No</th>
                      <th scope="col">Kode Transaksi</th>
                      <th scope="col">Nama Menu</th>
                      <th scope="col">Waktu</th>
                      <th scope="col">Harga (Rp)</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Sub Total (Rp)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include "../../control/koneksi.php";
                      $no = 1;
                      $gj=mysqli_query($conn,"SELECT * FROM tbl_transaksi as a inner join tbl_menu as b on a.id_menu=b.id_menu ORDER BY tgl_transaksi DESC");
                      foreach ($gj as $g) : ?>
                    <tr>
                      <th scope="row"><?= $no++; ?></th>
                      <td>TR<?= date('m-d').$g['id_transaksi'].date('y');?></td>
                      <td><?= $g['nama_m'];?></td>
                      <td><?= $g['tgl_transaksi'];?></td>
                      <td><?= "Rp. ". number_format($g['harga_m'], 0, ',', '.')?></td>
                      <td><?= $g['jumlah_menu'];?></td>
                      <td><?= "Rp. ". number_format($g['total_transaksi'], 0, ',', '.')?></td>
                      
                    </tr>
            
                   <?php endforeach;?> 
               

                  </tbody>
                </table>

                <script type="text/javascript">
                	window.print();
                </script>