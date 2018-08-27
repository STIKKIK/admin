$(document).ready(function() {
  //$('#bootstrap-data-table-export').DataTable();
    var table = $('#example').DataTable( {
			lengthChange: false,
			buttons: [ 'copy', 'csv', 'excel', 'pdf', 'colvis' ]
		} );
	
		table.buttons().container()
			.appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );

