<div class="modal fade bd-example-modal-lg" id="modalAddEdit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-header">
            <h4 class="modal-title">
                Add Product
            </h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12">
                    <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="control-label required" style="text-align:left">Judul Berita</label>
                                    <input id="hdnAddEditScreenMode" type="hidden" value="" />
                                    <input id="hdnAddEditId" type="hidden" value="" />
                                    <input type="text" class="form-control" id="txtAddEditTitle" 
                                            value="" style="width:100%" maxlength="100" />
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                        <label class="control-label required" style="text-align:left">Gambar</label>
                                        <input type="hidden" id="hdImgFile">
                                        <?php $this->load->view('Berita/_upload');?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                        <div class="portlet-box">
                                            <div class="portlet-header flex-row b-b flex d-flex align-items-center">
                                                <div class="flex d-flex flex-column">
                                                    <h3>Isi Berita</h3> 
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="summernote-init">
                                                    
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
            <!-- Modal Footer -->
                <div class="modal-footer">
                    <div class="col-xs-12 text-right">
                        <button type="button" id="btnSubmit" style="line-height:1" class="btn btn-sm btn-primary" 
                            onclick="btnSaveEdit_onClick()"><i class="ace-icon fa fa-check bigger-110"></i>&nbsp;Simpan</button>
                        <button type="reset" id="btnCancel" style="line-height:1" class="btn btn-sm btn-danger" data-dismiss="modal" onclick=""><i class="ace-icon fa fa-undo bigger-110"></i>&nbsp;Batal</button>
                    </div>
                </div>
    </div>
  </div>
</div>