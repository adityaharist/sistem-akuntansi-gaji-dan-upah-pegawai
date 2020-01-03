<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('pekerjaan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pekerjaan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pekerjaan'); ?>" class="btn btn-default">Reset</a>
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
                <th>No</th>
        <th>Jabatan</th>
        <th>Gaji Pokok</th>
        <th>Tunjangan Keluarga</th>
        <th>Tunjangan Kesehatan</th>
        <th>Tunjangan Transfortasi</th>
        <th>Tunjangan Pendidikan</th>
        <th>Action</th>
            </tr><?php
            if ($pekerjaan_data->num_rows() > 0) {
            foreach ($pekerjaan_data->result() as $pekerjaan)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $pekerjaan->pekerjaan ?></td>
            <td><?php echo $pekerjaan->gapok ?></td>
            <td><?php echo $pekerjaan->tukel ?></td>
            <td><?php echo $pekerjaan->tukes ?></td>
            <td><?php echo $pekerjaan->tutra ?></td>
            <td><?php echo $pekerjaan->tupen ?></td>
            <td style="text-align:center" width="200px">
                <?php
                echo anchor(site_url('pekerjaan/update/'.$pekerjaan->id_pekerjaan),'Update'); 
                echo ' | '; 
                echo anchor(site_url('pekerjaan/delete/'.$pekerjaan->id_pekerjaan),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
        </tr>
                <?php
            }
            } else {
                ?>
                <tr>
                    <th colspan="8"><center>DATA TIDAK DI TEMUKAN</center></th>
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