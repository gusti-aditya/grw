
 <link href="assets/lib/dropzone/dropzone.css" rel="stylesheet"> 
 <link href="assets/lib/dt-picker/jquery.datetimepicker.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<div class="page-title">
              <div class="title_left">
                <h3>Order</h3>
              </div>
            </div>
            <div class="clearfix"></div>
  <div class="col-lg-12 mb-30">
    <div class="portlet-box" >
        <div class="portlet-header flex-row flex d-flex align-items-center">
            <div class="flex d-flex flex-column">
              <?php $this->load->view('Order/_SearchCriteria');?>
            </div>
        </div>
        <div class="portlet-body" id="tableData">
            <?php $this->load->view('Order/_Gridview');?>
        </div>
    </div>

</div>
<script type="text/javascript" src="assets/Content/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="assets/lib/dt-picker/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript" src="assets/lib/dropzone/dropzone.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script type="text/javascript">
        // Search [start]
        $(document).ready(function() {
            $('#tablenya').DataTable();
        });

        function openModal(v1,v2,v3,v4,v5,v6,v7,v8,v9,v10,v11){
          $("#txtFirstName").val(v1);
          $("#txtLastName").val(v2);
          $("#txtEmail").val(v3); 
          $("#txtPhoneNo").val(v4);
          $("#txtKavlingId").val(v5);
          $("#txtOrderDate").val(v6);
          $("#txtPaymentMethod").val(v7);
          $("#txtPaymentProve").val(v8);
          $("#txtPaymentExpired").val(v9);
          $("#txtPaymentApproval").val(v10);
          $("#txtId").val(v11);
        }

        function updateApproval(){
          $.ajax({
            url: "Order/updateOrder",
            type: "POST",
            data: { 
              'PAYMENT_APPROVAL': $("#txtPaymentApproval").val(),
              'ID' : $("#txtId").val() 
            },                     
            success: function()
              {
                location.reload();  
              }
        });
      }
      </script>