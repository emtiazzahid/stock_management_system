<script src="js/jquery.js"></script>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>   
 
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="assets/packages/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>



<!-- script for tab in content of page -->
<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>


<!-- script for show the datatable -->
<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>


<!-- script for datatable buttons-->
<script>
	var table = $('#example').DataTable( {
    buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
} );
  
table.buttons().container()
    .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
</script>


<!-- script for datepicker -->
<script>
  $('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
</script>