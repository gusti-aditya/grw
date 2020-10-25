
 <link href="assets/lib/dropzone/dropzone.css" rel="stylesheet"> 
 <link href="assets/lib/dt-picker/jquery.datetimepicker.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css"/>
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<div class="page-title">
              <div class="title_left">
                <h3>Kavling</h3>
              </div>
            </div>
            <div class="clearfix"></div>
  <div class="col-lg-12 mb-30">
    <div class="portlet-box">
        <div class="portlet-header flex-row flex d-flex align-items-center">
            <div class="flex d-flex flex-column">
              <?php $this->load->view('Kavling/_SearchCriteria');?>
            </div>
        </div>
        <div class="portlet-body" id="tableData">
            <?php $this->load->view('Kavling/_Gridview');?>
        </div>
    </div>
    <div class="modalUpload">
    <?php $this->load->view('Kavling/_modalUpload');?>
    </div>

</div>
<script type="text/javascript" src="assets/Content/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="assets/lib/dt-picker/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript" src="assets/lib/dropzone/dropzone.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script type="text/javascript">
        // Search [start]
        $(document).ready(function() {
            $('#tablenya').DataTable({
                dom: 'Bfrtip',
        buttons: [
            'excelHtml5'
        ]
            });
        });

        $(document).ready(function() {
            $('#select2').select2();
        });

      </script>