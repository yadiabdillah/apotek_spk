<?php
$this->load->view('template/head');
?>
<div class="page-header">
    <h1>
    User
    <small>
    <i class="ace-icon fa fa-angle-double-right"></i>
    Change Password
    </small>
    </h1>
    </div><!-- /.page-header -->
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="hidden-sm hidden-xs">
                <button type="button" class="sidebar-collapse btn btn-white btn-primary" data-target="#sidebar">
                <i class="ace-icon fa fa-angle-double-up" data-icon1="ace-icon fa fa-angle-double-up" data-icon2="ace-icon fa fa-angle-double-down"></i>
                Collapse/Expand Menu
                </button>
            </div>
            <div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-1">
                <div class="widget-box transparent" id="widget-box-12">
                    <div class="widget-header">
                        <h4 class="widget-title lighter">Form edit</h4>
                        <div class="widget-toolbar no-border">
                            <a href="#" data-action="reload">
                                <i class="ace-icon fa fa-refresh"></i>
                            </a>
                            <a href="#" data-action="collapse">
                                <i class="ace-icon fa fa-chevron-up"></i>
                            </a>
                            <a href="#" data-action="close">
                                <i class="ace-icon fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="center">
                        <div class="widget-body">
                            <div class="widget-main padding-6 no-padding-left no-padding-right">
                                <form action="<?php echo base_url()?>index.php/user/change_pass" method="post">
                                    <!-- <legend>Form</legend> -->
                                    <fieldset>
                                        <label class="col-lg-3">New Password</label>
                                        <input required="" type="password" placeholder="" name="password" class="col-lg-3" />
                                    </fieldset>
                                    <div class="form-actions center">
                                        <button type="submit" name="submit" class="btn btn-sm btn-success">
                                        Update
                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
        </div><!-- /.main-content -->
        <?php
        $this->load->view('template/footer');
        ?>