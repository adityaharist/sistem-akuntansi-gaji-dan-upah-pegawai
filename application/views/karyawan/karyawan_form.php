<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Nik <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
        <div class="form-group">
            <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
            <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </div>
        <div class="form-group">
            <label for="varchar">Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></label>
            <!-- <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" /> -->
            <select name="jenis_kelamin" class="form-control">
                <option value="">--Pilih Jenis Kelamin--</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Agama</label>
            <select name="agama" class="form-control">
                <option value="<?php echo $agama ?>"><?php echo $agama ?></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
            </select>
        </div>
        <div class="form-group">
            <label>Pendidikan</label>
            <input type="text" name="pendidikan" class="form-control" value="<?php echo $pendidikan ?>">
        </div>
        <div class="form-group">
            <label>Asal Sekolah</label>
            <input type="text" name="asal_sekolah" class="form-control" value="<?php echo $asal_sekolah ?>">
        </div>
        <div class="form-group">
            <label for="int">Jabatan <?php echo form_error('id_pekerjaan') ?></label>
            <!-- <input type="text" class="form-control" name="id_pekerjaan" id="id_pekerjaan" placeholder="Id Pekerjaan" value="<?php echo $id_pekerjaan; ?>" /> -->
            <select name="id_pekerjaan" class="form-control">
                <option value="<?php echo $id_pekerjaan ?>"><?php echo $id_pekerjaan ?></option>
                <?php 
                $sql = $this->db->get('pekerjaan');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->id_pekerjaan; ?>"><?php echo $row->pekerjaan; ?></option>
                <?php } ?>
            </select>
        </div>
        <input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('karyawan') ?>" class="btn btn-default">Cancel</a>
    </form>