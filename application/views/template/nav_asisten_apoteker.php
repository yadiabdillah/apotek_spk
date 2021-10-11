<ul class="nav nav-list">
    <li class="hover">
        <a href="<?php echo base_url()?>index.php/welcome">
            <i class="menu-icon glyphicon glyphicon-home"></i>
            <span class="menu-text"> Home </span>
        </a>
        <b class="arrow"></b>
    </li>
    <li class="hover">
        <a href="<?php echo base_url()?>index.php/obat/view">
            <i class="menu-icon fa fa-briefcase"></i>
            <span class="menu-text"> Obat </span>
        </a>
        <b class="arrow"></b>
    </li>
     <li class="hover">
        <a href="<?php echo base_url()?>index.php/transaksi/view_masuk">
            <i class="menu-icon fa fa-arrow-circle-o-up"></i>
            <span class="menu-text"> Obat Keluar </span>
        </a>
        <b class="arrow"></b>
    </li>
     <li class="hover">
        <a href="<?php echo base_url()?>index.php/transaksi/view_masuk">
            <i class="menu-icon fa fa-arrow-circle-o-down"></i>
            <span class="menu-text"> Obat Masuk </span>
        </a>
        <b class="arrow"></b>
    </li>
    <li class="hover">
        <a href="<?php echo base_url()?>index.php/vendor/view">
            <i class="menu-icon fa fa-globe"></i>
            <span class="menu-text"> Vendor </span>
        </a>
        <b class="arrow"></b>
    </li>
    <li class="hover">
        <a href="<?php echo base_url()?>index.php/pasien/view">
            <i class="menu-icon fa fa-users"></i>
            <span class="menu-text"> Pasien </span>
        </a>
        <b class="arrow"></b>
    </li>
     <li class="hover">
        <a href="<?php echo base_url()?>index.php/dokter/view">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Dokter </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li class="hover">
        <a href="<?php echo base_url()?>index.php/dokter/view">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Laporan Obat Masuk </span>
        </a>
        <b class="arrow"></b>
    </li>
    <li class="hover">
        <a href="<?php echo base_url()?>index.php/Dokter/View">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Laporan Obat Keluar </span>
        </a>
        <b class="arrow"></b>
    </li>    
    <!--
    <li class="hover">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text"> Tables </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
        <ul class="submenu">
            <li class="hover">
                <a href="tables.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Simple &amp; Dynamic
                </a>
                <b class="arrow"></b>
            </li>
            <li class="hover">
                <a href="jqgrid.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    jqGrid plugin
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="hover">
        <div class="hidden-sm hidden-xs">
            <button type="button" class="sidebar-collapse btn btn-white btn-primary" data-target="#sidebar">
            <i class="ace-icon fa fa-angle-double-up" data-icon1="ace-icon fa fa-angle-double-up" data-icon2="ace-icon fa fa-angle-double-down"></i>
            </button>
        </div>
    </li>-->
    </ul><!-- /.nav-list -->
</div>
<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>
                <div class="ace-settings-box clearfix" id="ace-settings-box">
                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                </select>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                        </div>
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                            <label class="lbl" for="ace-settings-add-container">
                                Inside
                                <b>.container</b>
                            </label>
                        </div>
                        </div><!-- /.pull-left -->
                        <div class="pull-left width-50">
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                                <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                            </div>
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                                <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                            </div>
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                                <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                            </div>
                            </div><!-- /.pull-left -->
                            </div><!-- /.ace-settings-box -->
                            </div><!-- /.ace-settings-container -->