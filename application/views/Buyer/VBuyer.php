
 <link href="assets/lib/summernote/summernote-bs4.css" rel="stylesheet">
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
</div>
<script type="text/javascript" src="assets/Content/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="assets/lib/dt-picker/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript" src="assets/lib/dropzone/dropzone.js"></script>
<script type="text/javascript" src="assets/lib/summernote/summernote-bs4.min.js"></script>
<script type="text/javascript" src="assets/js/plugins-custom/summernote-custom.js"></script>
<script type="text/javascript">
        // Search [start]

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
                url: "Berita/Search/",
            data: {
                BeritaCd: $("#txtSearchBeritaCd").val(),
                BeritaName: $("#txtSearchName").val(),
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
        function setScreenToAddMode() {
            gScreenMode = 'ADD';
            clearAddEdit(gScreenMode);
        }

        /*Clear View Data [START]*/
        function clearAddEdit(data) {

            if (data == "ADD") {

            $("#txtAddEditBeritaCd").val('');
            $("#txtAddEditBeritaName").val('');
            $("#txtAddEditPrice").val('');
            $("#txtAddEditBeritaDesc").val('');
            $("#txtAddEditBeritaCd").prop('disabled', false);
            $("#btnSubmit").attr('onclick', 'btnSubmitEdit_onClick("ADD");');
            $("#btnSubmit").show();
        }
        else if (data == "EDIT") {
            $("#txtAddEditBeritaCd").prop('disabled', true);
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

        function btnEdit_OnClick(BeritaCd) {
            setScreenToEditMode();
           
            $.ajax({
                type: "POST",
                url: "Berita/edit",
                data: {
                    BeritaId : BeritaCd,
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
        var data = obj.Berita;
        $("#txtAddEditBeritaCd").val(data.Berita_CD);
        $("#txtAddEditBeritaName").val(data.Berita_NAME);
        $("#txtAddEditBeritaDesc").val(data.Berita_DESC);
        $("#txtAddEditPrice").val(data.PRICE);
        $("#cmbAddEditCategory").val(data.CATEGORY_CD).change();

    }

        // GetByKey [End]

        

        // Save & Edit [start]
        function btnSubmitEdit_onClick(scrnmd) {
            console.log($('.summernote-init').summernote('code'));
            return false;
            if (scrnmd == null)
            {
                errMsg("Error", "Screen mode not detected");
                return false;
            }
            if ($("#txtAddEditTitle").val() == "")
                errMsg("Error","Judul tidak boleh kosong!");
            else if ($('.summernote').summernote('code') == "")
                errMsg("Error","Isi berita tidak boleh kosong!");
            else {
                //alert(scrnmd);
                waitMsg();
                var params = new Object();
                var listDetail = [];
                params.screenMode = scrnmd;
                params.TITLE = $("#txtAddEditTitle").val();
                params.IMAGE = $("#hdImgFile").val();
                params.CONTENT =  $('.summernote').summernote('code');
                params.USER = '<?php echo $this->session->userdata('fname'); ?>';
                $.ajax({
                    type: "POST",
                    url: "Berita/submit",
                contentType: 'application/json',
                dataType: 'json',
                traditional: true,
                data: JSON.stringify(params),
                success: function (returnResult) {
                    if (returnResult.Result == 'ERROR') {
                        swal.close();
                        errMsg("Error", returnResult.message);
                    }
                    else
                    {
                        swal.close();
                        successMsg("Berita", "Berita berhasil ditambahkan/diupdate");
                        $('#modalAddEdit').modal('toggle');
                        onSearchCriteria();
                    }
                },
                error: function (returnResult) {
                    swal.close();
                    errMsg("Error", returnResult.message);
                }
            });
            }
        }

        //delete start

        function btnDelete_OnClick(BeritaCd) {
                var params = new Object();
                params.APPLICANT_ID = BeritaCd;
                $.ajax({
                    type: "POST",
                    url: "",
                    contentType: 'application/json',
                    dataType: 'json',
                    traditional: true,
                    data: JSON.stringify(params),
                    success: function (returnResult) {
                        if (returnResult.Result == 'ERROR') {
                            errMsg("Error", returnResult.ErrMesgs[0]);
                        }
                        else {
                            successMsg("Delete", "Berita berhasil dihapus");
                        }
                    },
                    error: function (returnResult) {
                        alert('Action error');
                    }
                });
            
        }
        //delete end

      </script>