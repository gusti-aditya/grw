
 <link href="assets/lib/dropzone/dropzone.css" rel="stylesheet"> 
 <link href="assets/lib/dt-picker/jquery.datetimepicker.min.css" rel="stylesheet">
<div class="page-title">
              <div class="title_left">
                <h3>Buyer</h3>
              </div>
            </div>
            <div class="clearfix"></div>
  <div class="col-lg-12 mb-30">
    <div class="portlet-box">
        <div class="portlet-header flex-row flex d-flex align-items-center">
            <div class="flex d-flex flex-column">
              <?php $this->load->view('Buyer/_SearchCriteria');?>
            </div>
        </div>
        <div class="portlet-body no-padding" id="tableData">
            <?php $this->load->view('Buyer/_Gridview');?>
        </div>
    </div>
    <div class="modalAddEdit">
    <?php $this->load->view('Buyer/_ModalAddEdit');?>
    </div>

    <div class="modalUpload">
    <?php $this->load->view('Buyer/_modalUpload');?>
    </div>
</div>
<script type="text/javascript" src="assets/Content/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="assets/lib/dt-picker/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript" src="assets/lib/dropzone/dropzone.js"></script>
<script type="text/javascript">
        // Search [start]


        $("#cbAddEditRegion").change(function(){
            waitMsg();
            $.ajax({
                type: "POST",
                url: "Buyer/getCityById",
                data: {
                    regionId : $(this).val(),
                },
            success: function (returnResult) {
                var obj = $.parseJSON(returnResult);
                console.log(obj);
                
                $("#cbAddEditCity").empty();
                    $(obj).each(function(e,val){
                        $("#cbAddEditCity").append(
                            new Option(val.nama,val.id_kab)
                        );
                    });
                    $("#cbAddEditCity").attr("disabled",false);
                swal.close();
                //$("#modalAddEdit").modal();
            },
            error: function (returnResult) {
                errMsg("Error", returnResult.ErrMesgs[0]);
            }
        });    
        });

        $('#txtSearchDate').datetimepicker({
            format:'Y/m/d',
            timepicker:false
            });

        function btnSearch_onClick() {
            onSearchCriteria();
        }

        function onSearchCriteria(page) {
        
            $.ajax({
                type: "POST",
                url: "Buyer/Search/",
            data: {
                BuyerCd: $("#txtSearchBuyerCd").val(),
                BuyerName: $("#txtSearchName").val(),
                currentPage : page
            },
            success: function (data) {
                $("#tableData").html(data);
            }
        });
        }

        /*ADD [START]*/
        function btnAdd_onClick() {
            setScreenToAddMode();
            $("#modalAddEdit").modal();
        }

        function btnUpload_onClick(){
            $("#modalUpload").modal();
        }

        function setScreenToAddMode() {
            gScreenMode = 'ADD';
            clearAddEdit(gScreenMode);
        }

        /*Clear View Data [START]*/
        function clearAddEdit(data) {

            if (data == "ADD") {
            $("#txtAddEditFirstName").val('');
            $("#txtAddEditLastName").val('');
            $("#txtAddEditAddress").val('');
            $("#txtAddEditPhoneNo").val('');
            $("#txtAddEditEmail").val('');
            $("#txtAddEditPostalCode").val('');
            $("#cbAddEditCity").val('');
            $("#txtAddEditBuyerCd").prop('disabled', false);
            $("#btnSubmit").attr('onclick', 'btnSubmitEdit_onClick("ADD");');
            $("#btnSubmit").show();
        }
        else if (data == "EDIT") {
            $("#txtAddEditBuyerCd").prop('disabled', true);
            $("#btnSubmit").attr('onclick', 'btnSubmitEdit_onClick("EDIT");');
            $("#btnSubmit").show();
            $("#btnCancel").show();
        }

    }
        // Search [end]

        // GetByKey [Start]



        function setScreenToEditMode() {
        gScreenMode = 'EDIT';
        clearAddEdit(gScreenMode);
        }

        function btnEdit_OnClick(BuyerCd) {
            setScreenToEditMode();
           
            $.ajax({
                type: "POST",
                url: "Buyer/edit",
                data: {
                    BuyerId : BuyerCd,
                },
            success: function (returnResult) {
                var obj = $.parseJSON(returnResult);
                onEditGetDataSuccess(obj);
                swal.close();
                $("#modalAddEdit").modal();
            },
            error: function (returnResult) {
                errMsg("Error", returnResult.ErrMesgs[0]);
            }
        });
    }

    function onEditGetDataSuccess(obj) {
        var data = obj.Buyer;
        $("#txtAddEditBuyerCd").val(data.Buyer_CD);
        $("#txtAddEditBuyerName").val(data.Buyer_NAME);
        $("#txtAddEditBuyerDesc").val(data.Buyer_DESC);
        $("#txtAddEditPrice").val(data.PRICE);
        $("#cmbAddEditCategory").val(data.CATEGORY_CD).change();
    }

        // GetByKey [End]

        

        // Save & Edit [start]


        //delete start

        function btnDelete_OnClick(BuyerCd) {
                var params = new Object();
                params.BUYER_ID = BuyerCd;
                $.ajax({
                    type: "POST",
                    url: "Buyer/Delete",
                    contentType: 'application/json',
                    dataType: 'json',
                    traditional: true,
                    data: JSON.stringify(params),
                    success: function (returnResult) {
                        if (returnResult.Result == 'ERROR') {
                            errMsg("Error", returnResult.ErrMesgs[0]);
                        }
                        else {
                            successMsg("Delete", "Data Buyer berhasil dihapus");
                        }
                    },
                    error: function (returnResult) {
                        alert('Action error');
                    }
                });
        }
        //delete end
      </script>