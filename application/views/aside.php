<aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="assets/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>
                                <?php 
                                if ($this->session->userdata('username') == 'admin') {
                                    ?>
                                    <a href="app/profiladmin/<?php echo $this->session->userdata('id_user'); ?>">
                                Hello, Mr. <?php echo $this->session->userdata('username'); ?></a>
                                    <?php
                                } else {

                                 ?>
                                <a href="app/profiluser/<?php echo $this->session->userdata('id_user'); ?>">
                                Hello, Mr. <?php echo $this->session->userdata('username'); ?></a>
                                <?php } ?>
                            </p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <!-- akan ditambahkan jika userdatanya selain admin(sdm,keuangan) -->
                        <?php 
                        if ($this->session->userdata('level') == 'admin') {
                         ?>

                        <li class="active">
                            <a href="">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="karyawan">
                                <i class="fa fa-dashboard"></i> <span>Data Karyawan</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <i class="fa fa-dashboard"></i> <span>Skala Gaji Universitas (SK/Total)</span>
                            </a>
                        </li>

                        <li>
                            <a href="presensi">
                                <i class="fa fa-dashboard"></i> <span>Data Presensi</span>
                            </a>
                        </li>

                        <li>
                            <a href="pekerjaan">
                                <i class="fa fa-dashboard"></i> <span>Data Pekerjaan</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>LAYANAN GAJI (_SDM_)</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="gaji"><i class="fa fa-angle-double-right"></i> History Gaji @ Pegawai/Bulan </a></li>
                                <li><a href="gaji"><i class="fa fa-angle-double-right"></i> History Gaji @ Unit/Bulan</a></li>
                                <li><a href="gaji"><i class="fa fa-angle-double-right"></i> History Gaji @ Homebase/Bulan </a></li>
                                <li><a href="gaji"><i class="fa fa-angle-double-right"></i> History Gaji @ Unit/Bulan</a></li>
                                
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>PENGGAJIAN PEGAWAI (_KEU_)</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="gaji"><i class="fa fa-angle-double-right"></i> History SPP Gaji perbulan n tahunan </a></li>
                                <li><a href="gaji"><i class="fa fa-angle-double-right"></i> Rekening Bank @ Pegawai</a></li>
                                <li><a href="gaji"><i class="fa fa-angle-double-right"></i> Potongan Gaji Pegawai </a></li>
                                <li><a href="gaji"><i class="fa fa-angle-double-right"></i> Aturan Perpajakan </a></li>
                                
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Laporan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="app/lap_karyawan"><i class="fa fa-angle-double-right"></i> Laporan Data Karyawan</a></li>
                                <li><a href="app/lap_gajikaryawan"><i class="fa fa-angle-double-right"></i> Laporan Gaji Karyawan</a></li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="user">
                                <i class="fa fa-dashboard"></i> <span>Manajemen User</span>
                            </a>
                        </li>

                        <?php } elseif ($this->session->userdata('level') == 'user') {
                        $iduser = $this->session->userdata('id_user');
                        $data = $this->db->query("SELECT * FROM karyawan, gaji where karyawan.nik=gaji.nik and karyawan.id_karyawan='$iduser' order by gaji.tgl desc")->row();
                            ?>

                        <li>
                            <a href="app/tampilprofil/<?php echo $this->session->userdata('id_user'); ?>">
                                <i class="fa fa-dashboard"></i> <span>Profil</span>
                            </a>
                        </li>

                        <li>
                            <a href="app/slip_gaji/<?php echo $data->nik; ?>/<?php echo $data->tgl; ?>">
                                <i class="fa fa-dashboard"></i> <span>Lihat gaji</span>
                            </a>
                        </li>

                        <li>
                            <a href="app/ubahpass/<?php echo $this->session->userdata('id_user'); ?>">
                                <i class="fa fa-dashboard"></i> <span> Ubah Password</span>
                            </a>
                        </li>
                        <?php } ?>


                        <li>
                            <a href="app/logout">
                                <i class="fa fa-laptop"></i> <span>LogOut</span>
                            </a>
                        </li>
                        
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>