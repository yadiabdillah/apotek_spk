<?php
    $this->load->view('template/head');
?>
                            <div class="page-header">
                                    <h1>
                                            Vendor
                                            <small>
                                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                                    Lihat data vendor
                                            </small>
                                    </h1>
                            </div><!-- /.page-header -->
                            <div class="row">
                                    <div class="col-xs-12">
                                            <!-- PAGE CONTENT BEGINS -->



                                            <div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-1">
                                                            <div class="widget-box" id="widget-box-1">
                                                                    <div class="widget-header">
                                                                            <h5 class="widget-title">Daftar Vendor</h5>

                                                                            <div class="widget-toolbar">
                                                                                    <a href="#" data-action="fullscreen" class="orange2">
                                                                                            <i class="ace-icon fa fa-expand"></i>
                                                                                    </a>

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

                                                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                                        <thead>
                                                                                <tr>
                                                                                    <th class="center col-lg-1" style="width: 10px">
                                                                                            No
                                                                                    </th>
                                                                                    <th class="center col-lg-2">ID Vendor</th>
                                                                                    <th>Nama Vendor</th>
                                                                                    <th>No. Telp</th>
                                                                                    <th>Alamat</th>
                                                                                    <th class="center col-lg-2">Action</th>
                                                                                </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php
                                                                            $no=1;
                                                                            foreach ($record->result() as $r){ 
                                                                            ?>
                                                                             <tr>
                                                                                <td class="center">	<?php echo $no; ?>	</td>
                                                                                <td> <?php echo  $r->id_vendor; ?> </td>
                                                                                <td> <?php echo  $r->nama_vendor; ?> </td>
                                                                                <td> <?php echo  $r->no_telp; ?> </td>
                                                                                <td> <?php echo $r->alamat; ?></td>
                                                                                 <!-- <td class="hidden-480">
                                                                                        <span class="label label-sm label-warning">Expiring</span>
                                                                                </td>-->

                                                                                <td>
                                                                                    <div class="hidden-sm hidden-xs action-buttons center">
                                                                                           
                                                                                            <a class="green" href="<?php echo base_url()?>index.php/Vendor/edit/<?php echo  $r->id_vendor; ?>">
                                                                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                            </a>
                                                                                            <a class="red" href="javascript:" onclick="jvDelete('<?php echo  $r->id_vendor; ?>')" >
                                                                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                            </a>
                                                                                    </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                        <div class="inline pos-rel">
                                                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                                </button>

                                                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                                        <li>
                                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                                        <span class="blue">
                                                                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                                        </span>
                                                                                                                </a>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                                        <span class="green">
                                                                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                                        </span>
                                                                                                                </a>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                                <a href="<?php echo base_url()?>index.php/vendor/delete/" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                                        <span class="red">
                                                                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                                        </span>
                                                                                                                </a>
                                                                                                        </li>
                                                                                                </ul>
                                                                                        </div>
                                                                                </div>
                                                                            </td>
                                                                    </tr>
                                                                    <?php
                                                                        $no++;   
                                                                       }
                                                                       ?>
                                                                        </tbody>
                                                                        
                                                                </table>
                                                                
                                                                
                                                            
                                                            </div>
                                                <p>
                                                <a href="#my-modal" role="button" class="btn btn-white btn-default  btn-round col-sm-12" data-toggle="modal">
                                                        <i class="ace-icon fa fa-plus green"></i>&nbsp; Tambah vendor baru &nbsp; 
                                                </a>
                                            </p>
                                                    </div>
                                            

								<div id="my-modal" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h3 class="smaller lighter blue no-margin">Tambah data vendor</h3>
											</div>

											<div class="modal-body">
                                                                                            <form method="POST" class="form-horizontal" action="<?php echo base_url()?>index.php/Vendor/view" role="form">
                                                                                                
                                                                                                <div class="form-group">
                                                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID vendor </label>

                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="text" id="form-field-1" required="" name="id_vendor" placeholder="ID Vendor" class="col-xs-10 col-sm-5" />
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama vendor </label>

                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="text" id="form-field-1" required="" name="nama_vendor" placeholder="Nama vendor" class="col-xs-10 col-sm-5" />
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No. Telp </label>

                                                                                                        <div class="col-sm-9">
                                                                                                            <input type="text" id="form-field-1" required="" name="no_telp" placeholder="No. Telp" class="col-xs-10 col-sm-5" />
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>

                                                                                                        <div class="col-sm-9">
                                                                                                            <textarea id="form-field-1" name="alamat" required="" placeholder="Alamat" class="col-xs-10 col-sm-5"></textarea>
                                                                                                            
                                                                                                        </div>
                                                                                                </div>
                                                                                                
                                                                                                <br>
                                                                                                <div class="modal-footer">
                                                                                                    <button type="submit" name="submit" class="btn btn-sm btn-success">
                                                                                                        <i class="ace-icon fa fa-save icon-on-right bigger-110"></i>
                                                                                                        Submit
                                                                                                    </button>
                                                                                                    <button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
                                                                                                            <i class="ace-icon fa fa-times"></i>
                                                                                                            Close
                                                                                                    </button>
                                                                                                </div>
                                                                                        
                                                                                            </form>
                                                                                            </div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
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
<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null,null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})



		</script>
                <script>
	    function jvDelete(id){
	        if(confirm('Hapus Data ? ')==false)return false;
	        window.open('<?php echo base_url()?>index.php/Vendor/delete/'+id,'_self');
	    }
	    </script>