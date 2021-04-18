// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable( {
    dom: 'Bfrtip',
    buttons: [
    {
      extend: 'pdf',
      pageSize: 'A4',
      download: 'open',
      exportOptions: {
          columns: [0,1,2,3,4,5]
        }
    },
    ]
} );
});
