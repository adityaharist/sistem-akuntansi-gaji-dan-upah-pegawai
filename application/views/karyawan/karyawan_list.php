<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('karyawan/create'),'Tambah', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('karyawan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('karyawan'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Cari</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No.</th>
                <th>NIK</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Pendidikan</th>
                <th>Asal Sekolah</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Unit</th>
                <th>Pangkat</th>
                <th>Fungsional</th>
                <th>Action</th>
            </tr><?php

            // artinya, kalau ada baris data di ditabel karyawan (db)
            if ($karyawan_data->num_rows() > 0) {
              // looping data karyawan
              foreach ($karyawan_data->result() as $karyawan)
              {
                  ?>
                  <tr>
                    <td width="80px"><?php echo ++$start ?></td>
                    <td><?php echo $karyawan->nik ?></td>
                    <td><?php echo $karyawan->username ?></td>
                    <td><?php echo $karyawan->password ?></td>
                    <td><?php echo $karyawan->nama ?></td>
                    <td><?php echo $karyawan->alamat ?></td>
                    <td><?php echo $karyawan->jenis_kelamin ?></td>
                    <td><?php echo $karyawan->agama ?></td>
                    <td><?php echo $karyawan->pendidikan ?></td>
                    <td><?php echo $karyawan->asal_sekolah ?></td>
                    <td><?php echo $karyawan->id_pekerjaan ?></td>
                    <td style="text-align:center" width="200px">
                        <?php
                        echo anchor(site_url('karyawan/update/'.$karyawan->id_karyawan),'Update');
                        echo ' | ';
                        echo anchor(site_url('karyawan/delete/'.$karyawan->id_karyawan),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                        ?>
                    </td>
                    <th>Null</th>
                    <th>Null</th>
                    <th>Null</th>
                    <th>Null</th>
                  </tr>
                  <?php
              }
            } else {
                ?>
                <tr>
                    <th colspan="12"><center>DATA TIDAK DI TEMUKAN</center></th>
                </tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Karyawan : <?php echo $total_rows ?></a>
            </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
