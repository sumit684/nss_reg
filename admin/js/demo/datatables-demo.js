// Call the dataTables jQuery plugin
// $(document).ready(function() {
//   $('#dataTable').DataTable();
// });
// $(document).ready(function() {
//     $('#dataTable').DataTable( {
//         buttons: [
//             'copyHtml5',
//             'excelHtml5',
//             'csvHtml5',
//             'pdfHtml5'
//         ]
//     } );
// } );
//  var buttons = new $.fn.dataTable.Buttons(table, {
//      buttons: [
//        'copyHtml5',
//        'excelHtml5',
//        'csvHtml5',
//        'pdfHtml5'
//     ]
// }).container().appendTo($('#buttons'));
 $('#dataTable').DataTable( {
  dom: 'lBfrtip',
  buttons: ['excelHtml5']
})