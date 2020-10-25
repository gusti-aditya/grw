<style>
    .text-center {
    text-align:center;
    }
</style>
<div style="width:100%;">
    <div class="table-responsive">  
      <div class="portlet-body no-padding">
      <table id="tablenya" class="table table-bordered table-striped table-hover table">
     <thead>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Phone No</td>
            <td>Kavling ID</td>
            <td>Order Date</td>
            <td>Payment Method</td>
            <td>Payment Prove</td>
            <td>Order Expired</td>
            <td>Payment Approval</td>
            <td>Approve</td>
        </tr>
     </thead>
     <tbody>

     <?php foreach($datanya as $data){ ?>
     <tr>
            <td><?php echo $data->FIRST_NAME; ?></td>
            <td><?php echo $data->LAST_NAME; ?></td>
            <td><?php echo $data->EMAIL; ?></td>
            <td><?php echo $data->PHONE_NO; ?></td>
            <td><?php echo $data->KAVLING_ID; ?></td>
            <td><?php echo $data->ORDER_DATE; ?></td>
            <td><?php echo $data->PAYMENT_METHOD; ?></td>
            <td><?php echo $data->PAYMENT_PROVE; ?></td>
            <td><?php echo $data->ORDER_EXPIRED; ?></td>
            <td><?php echo $data->PAYMENT_APPROVAL; ?></td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onClick="openModal(
            '<?php echo $data->FIRST_NAME; ?>',
            '<?php echo $data->LAST_NAME; ?>',
            '<?php echo $data->PAYMENT_APPROVAL; ?>',
            '<?php echo $data->PHONE_NO; ?>',
            '<?php echo $data->KAVLING_ID; ?>',
            '<?php echo $data->ORDER_DATE; ?>',
            '<?php echo $data->PAYMENT_METHOD; ?>',
            '<?php echo $data->PAYMENT_PROVE; ?>',
            '<?php echo $data->ORDER_EXPIRED; ?>',
            '<?php echo $data->PAYMENT_APPROVAL; ?>',
            '<?php echo $data->ORDER_ID; ?>',
            )">
                <i class="fa fa-check"></i>
            </button>
            </td>
    </tr>
    <?php } ?>
        </tbody>
    </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="portlet-body">
                <form>
                <input type="hidden" class="form-control" id="txtOrderId">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtFirstName">First Name</label>
                            <input type="text" class="form-control" id="txtFirstName" disabled="disabled">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtLastName">Last Name</label>
                            <input type="text" class="form-control" id="txtLastName" disabled="disabled"> </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtEmail">Email</label>
                            <input type="text" class="form-control" id="txtEmail" disabled="disabled">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtPhoneNo">Phone No</label>
                            <input type="text" class="form-control" id="txtPhoneNo" disabled="disabled"> </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtKavlingId">Kavling ID</label>
                            <input type="text" class="form-control" id="txtKavlingId" disabled="disabled">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtOrderDate">Order Date</label>
                            <input type="text" class="form-control" id="txtOrderDate" disabled="disabled"> </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtPaymentMethod">Payment Method</label>
                            <input type="text" class="form-control" id="txtPaymentMethod" disabled="disabled">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtPaymentProve">Payment Prove</label>
                            <input type="text" class="form-control" id="txtPaymentProve" disabled="disabled"> </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtPaymentExpired">Payment Expired</label>
                            <input type="text" class="form-control" id="txtPaymentExpired" disabled="disabled">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtPaymentApproval">Payment Approval</label>
                            <!-- <input type="text" class="form-control" id="txtPaymentApproval" disabled="disabled"></div> -->
                            <select class="form-control" id="txtPaymentApproval">
                                <option value="1">Approve</option>
                                <option value="0">Not Approve</option>
                            </select>
                    </div>
                    
                    <input type="hidden" class="form-control" id="txtId">
                    
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick=updateApproval()>Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $("#checkall").click(function () {
            $(".grid-checkbox-body").prop("checked", $("#checkall").is(":checked"));
        });

        $(".grid-checkbox-body").click(function () {
            $("#checkall").prop("checked", $('.grid-checkbox-body:not(#checkall)').not(':checked').length == 0);
        });
    });
</script>