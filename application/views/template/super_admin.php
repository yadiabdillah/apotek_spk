<ul class="nav nav-list">
    <li class="hover">
            <a href="<?php echo base_url()?>index.php/welcome">
                    <i class="menu-icon glyphicon glyphicon-home"></i>
                    <span class="menu-text"> Home </span>
            </a>

            <b class="arrow"></b>
    </li>
    <li class="hover">
            <a href="<?php echo base_url()?>index.php/User/View">
                    <i class="menu-icon fa fa-users"></i>
                    <span class="menu-text"> Management User </span>
            </a>

            <b class="arrow"></b>
    </li>
    <li class="hover">
            <div class="hidden-sm hidden-xs">
                    <button type="button" class="sidebar-collapse btn btn-white btn-primary" data-target="#sidebar">
                            <i class="ace-icon fa fa-angle-double-up" data-icon1="ace-icon fa fa-angle-double-up" data-icon2="ace-icon fa fa-angle-double-down"></i>

                    </button>
            </div>
    </li>


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

