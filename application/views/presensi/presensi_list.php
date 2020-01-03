        <div class="row" style="margin-bottom: 10px">
            <!-- Mengarahkan ke controller dan method create -->
            <div class="col-md-4"> 
                <?php echo anchor(site_url('presensi/create'),'New', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('presensi/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('presensi'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Action</th>
                <!-- <th>No</th>
                <th>Tanggal</th>
                <th>Nik</th>
                <th>Action</th> -->
            </tr><?php
            // apa yang dipassing datanya?
            foreach ($gaji_data as $gaji)
            {
                ?>
                <tr>
                    <td width="80px"><?php echo ++$start ?></td>
                    <td><?php echo $gaji->tgl ?></td>
                    <td><?php echo $gaji->tgl ?></td>
                    <td><?php echo $gaji->tgl ?></td>
                    <td><?php echo $gaji->tgl ?></td>
                    <td><?php echo $gaji->nik ?></td>
                    <td style="text-align:center" width="200px">
                        <?php
                        echo anchor(site_url('presensi/update/'.$gaji->id_gaji),'<button class="btn btn-success btn-sm btn-flat"><i class="fa fa-edit"></i> Update </button>');
                        echo " ";
                        echo anchor(site_url('presensi/delete/'.$gaji->id_gaji),'<button class="btn btn-danger btn-sm btn-flat"><i class="fa fa-archive"></i> Hapus </button>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
            </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>