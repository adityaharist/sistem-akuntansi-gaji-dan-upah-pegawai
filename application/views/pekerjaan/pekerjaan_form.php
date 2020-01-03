<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Jabatan <?php echo form_error('pekerjaan') ?></label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $pekerjaan; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Gaji Pokok <?php echo form_error('gapok') ?></label>
            <input type="text" class="form-control" name="gapok" id="gapok" placeholder="Gapok" value="<?php echo $gapok; ?>" />
        </div>
        <div class="form-group">
            <label>Tunjangan Keluarga</label>
            <select name="tukel" class="form-control">
                <option value="<?php echo $tukel ?>"><?php echo $tukel ?></option>
                <option value="300000">KK0</option>
                <option value="500000">KK1</option>
                <option value="700000">KK2</option>
                <option value="1000000">KK3</option>
                <option value="1200000">KK4</option>
            </select>
        </div>
        <div class="form-group">
            <label for="int">Tunjangan Kesehatan <?php echo form_error('tukes') ?></label>
            <input type="text" class="form-control" name="tukes" id="tukes" placeholder="Tukes" value="<?php echo $tukes; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Tunjangan Transportasi <?php echo form_error('tutra') ?></label>
            <input type="text" class="form-control" name="tutra" id="tutra" placeholder="Tutra" value="<?php echo $tutra; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Tunjangan Pendidikan <?php echo form_error('tupen') ?></label>
            <input type="text" class="form-control" name="tupen" id="tupen" placeholder="Tupen" value="<?php echo $tupen; ?>" />
        </div>
        <input type="hidden" name="id_pekerjaan" value="<?php echo $id_pekerjaan; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('pekerjaan') ?>" class="btn btn-default">Cancel</a>
    </form>