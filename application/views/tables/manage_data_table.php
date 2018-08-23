        
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Manage Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">  
                                <button  type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Add New</button>
                                <hr>
                                <table class="table table-striped" id="mytable">
                                    <thead>
                                        <tr>
                                        <th>Product Code</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                        </div>
                        
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    
    <!-- Modal Add Product-->
	<form id="add-row-form" action="<?php echo site_url('tables/save');?>" method="post">
		<div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="mediumModalLabel">Add New</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input type="text" name="product_code" class="form-control" placeholder="Product Code" required>
						</div>
						<div class="form-group">
							<input type="text" name="product_name" class="form-control" placeholder="Product Name" required>
						</div>
						<div class="form-group">
							<select name="category" class="form-control" placeholder="Category" required>
								<?php foreach ($category->result() as $row) :?>
										<option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
									<?php endforeach;?>
							</select>
						</div>
						<div class="form-group">
							<input type="text" name="price" class="form-control" placeholder="Price" required>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                  	<button type="submit" class="btn btn-success">Save</button>
					</div>
				</div>
			</div>
		</div>
	</form>

    <!-- Modal Update Product-->
    <form id="add-row-form" action="<?php echo site_url('tables/update');?>" method="post">
        <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	                   <h4 class="modal-title" id="myModalLabel">Update Product</h4>
 	               </div>
 	               <div class="modal-body">
 	                    <div class="form-group">
 	                       <input type="text" name="product_code" class="form-control" placeholder="Product Code" readonly>
 	                    </div>
 					    <div class="form-group">
 	                       <input type="text" name="product_name" class="form-control" placeholder="Product Name" required>
 	                    </div>
 						<div class="form-group">
 	                        <select name="category" class="form-control" required>
                                <?php foreach ($category->result() as $row) :?>
                                    <option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
                                <?php endforeach;?>
                            </select>
 	                    </div>
 						<div class="form-group">
 	                       <input type="text" name="price" class="form-control" placeholder="Price" required>
 	                    </div>

 	               </div>
 	               <div class="modal-footer">
 	                   	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 	                  	<button type="submit" class="btn btn-success">Update</button>
 	               </div>
 	      			</div>
 	        </div>
 	     </div>
 	</form>

    <!-- Modal delete Product-->
    <form id="add-row-form" action="<?php echo site_url('tables/delete');?>" method="post">
 	     <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	                   <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
 	               </div>
 	               <div class="modal-body">
 	                       <input type="hidden" name="product_code" class="form-control" required>
												 <strong>Are you sure to delete this record?</strong>
 	               </div>
 	               <div class="modal-footer">
 	                   	<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
 	                  	<button type="submit" class="btn btn-success">Yes</button>
 	               </div>
 	      			</div>
 	        </div>
 	     </div>
 	 </form>


   

	<!-- Right Panel -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/vendor/jquery-2.1.4.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js') ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/data-table/datatables.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/data-table/dataTables.bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/data-table/dataTables.buttons.min.js') ?>"></script>
    <!--<script type="text/javascript" src="<?php echo base_url('assets/js/lib/data-table/buttons.bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/data-table/jszip.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/data-table/pdfmake.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/data-table/vfs_fonts.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/data-table/buttons.html5.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/data-table/buttons.print.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/data-table/buttons.colVis.min.js') ?>"></script>
    <!<script type="text/javascript" src="<?php echo base_url('assets/js/lib/data-table/datatables-init.js') ?>"></script> -->

<script>
	$(document).ready(function(){
		// Setup datatables
		$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
      	{
          return {
              "iStart": oSettings._iDisplayStart,
              "iEnd": oSettings.fnDisplayEnd(),
              "iLength": oSettings._iDisplayLength,
              "iTotal": oSettings.fnRecordsTotal(),
              "iFilteredTotal": oSettings.fnRecordsDisplay(),
              "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
              "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
          };
      	};

      	var table = $("#mytable").dataTable({
		initComplete: function() {
			var api = this.api();
			$('#mytable_filter input')
				.off('.DT')
				.on('input.DT', function() {
					api.search(this.value).draw();
			});
		},
			oLanguage: {
			sProcessing: "loading..."
		},
			processing: true,
			serverSide: true,
			ajax: {"url": "<?php echo base_url().'tables/get_product_json'?>", "type": "POST"},
				columns: [
							{"data": "product_code"},
							{"data": "product_name"},
							//render number format for price
							{"data": "product_price", render: $.fn.dataTable.render.number(',', '.', '')},
							{"data": "category_name"},
							{"data": "view"}
						],
			order: [[1, 'asc']],
		rowCallback: function(row, data, iDisplayIndex) {
			var info = this.fnPagingInfo();
			var page = info.iPage;
			var length = info.iLength;
			$('td:eq(0)', row).html();
		}

      });
			// end setup datatables
			// get Edit Records
			$('#mytable').on('click','.edit_record',function(){
            var code=$(this).data('code');
						var name=$(this).data('name');
						var price=$(this).data('price');
						var category=$(this).data('category');
            $('#ModalUpdate').modal('show');
            $('[name="product_code"]').val(code);
						$('[name="product_name"]').val(name);
						$('[name="price"]').val(price);
						$('[name="category"]').val(category);
      });
			// End Edit Records
			// get delete Records
			$('#mytable').on('click','.delete_record',function(){
            var code=$(this).data('code');
            $('#ModalDelete').modal('show');
            $('[name="product_code"]').val(code);
      });
			// End delete Records
	});
</script>
</body>
</html>
