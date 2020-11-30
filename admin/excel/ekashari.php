 <?php 
        include "../../control/koneksi.php";

        $title = "Data Gaji";

         header("Content-type: application/vnd-ms-excel");
     
         header("Content-Disposition: attachment; filename=Laporan Data Kas.xls");
         
         header("Pragma: no-cache");
         
         header("Expires: 0");
     ?>
<center>
<h4>Laporan Kas Harian</h4>
<table border="1" cellspacing="0" cellpadding="0">
                  <thead>
                    <tr class="table-info">
                      <th scope="col">No</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Kas Perhari (Rp)</th>
                      <th scope="col">Kas Masuk (Rp)</th>
                      <th scope="col">Laba (Rp)</th>
                      <th scope="col">Rugi (Rp)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include "../../control/koneksi.php";
                      $no = 1;
                      $gj=mysqli_query($conn,"SELECT * FROM tbl_kas ORDER BY tgl_kas_hari DESC");
                      foreach ($gj as $g) : ?>
                    <tr>
                      <th scope="row"><?= $no++; ?></th>
                      <td><?= $g['tgl_kas_hari'];?></td>
                      <td><?= "Rp. ". number_format($g['kas_awal'], 0, ',', '.')?></td>
                      <td><?= "Rp. ". number_format($g['pemasukan'], 0, ',', '.')?></td>
                      <td><?= "Rp. ". number_format($g['laba'], 0, ',', '.')?></td>
                      <td><?= "Rp. ". number_format($g['rugi'], 0, ',', '.')?></td>
                    
                    </tr>
                 <?php endforeach; ?>
                  </tbody>
                </table>

                <script type="text/javascript">
                	window.print();
                </script>