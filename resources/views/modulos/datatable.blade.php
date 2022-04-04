<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>

    <script>
            $('#{{$nombretabla}}').DataTable
            ({
              dom: '<"col-12 d-flex justify-content-between mt-2"lB>tp',
              buttons: [{
                    extend: 'pdfHtml5',
                    text: 'Reporte',
                    exportOptions: {
                  columns: [0,1],
                  stripHtml: true,
                },

                    download: 'open'
                }],
              responsive: true,
              autoWidth: false,
              language: {
                  url: 'plugins/languaje/datatable/spanish.json'
              }
            });
 
      </script>

      