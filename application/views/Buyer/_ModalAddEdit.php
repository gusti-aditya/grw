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
                                <div class="col-md-6">
                                    <label class="control-label required" style="text-align:left">Nama Depan</label>
                                    <input id="hdnAddEditScreenMode" type="hidden" value="" />
                                    <input id="hdnAddEditId" type="hidden" value="" />
                                    <input type="text" class="form-control" id="txtAddEditFirstName" 
                                            value="" style="width:100%" maxlength="100" />
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label required" style="text-align:left">Nama Belakang</label>
                                    <input type="text" class="form-control" id="txtAddEditLastName" 
                                            value="" style="width:100%" maxlength="100" />
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                        <label class="control-label required" style="text-align:left">Alamat</label>
                                        <textarea id="txtAddEditAddress" class="form-control">
                                        
                                        </textarea>
                            </div>
                            <div class="col-md-6">
                                    <label class="control-label required" style="text-align:left">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="txtAddEditPhoneNo" 
                                            value="" style="width:100%" maxlength="100" />
                                </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                        <label class="control-label required" style="text-align:left">Email</label>
                                        <input type="text" class="form-control" id="txtAddEditEmail" 
                                            value="" style="width:100%" maxlength="100" />
                            </div>
                            <div class="col-md-6">
                                    <label class="control-label required" style="text-align:left">Provinsi</label>
                                    <select  class="form-control" id="cbAddEditRegion">
                                        <option value="">--Pilih--</option>
                                        <?php if($dataProvinsi !=FALSE):  foreach ($dataProvinsi as $dkt): ?>
                                            <option value="<?php echo $dkt->id_prov; ?>"><?php echo $dkt->nama; ?></option>
                                        <?php endforeach; endif; ?>
                                    </select>
                                </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                        <label class="control-label required" style="text-align:left">Kode Pos</label>
                                        <input type="text" class="form-control" id="txtAddEditPostalCode" 
                                            value="" style="width:100%" maxlength="100" />
                            </div>
                            <div class="col-md-6">
                                    <label class="control-label required" style="text-align:left">Kota</label>
                                    <select  class="form-control" id="cbAddEditCity" disabled>
                                        <option value="">--Pilih--</option>
                                    </select>
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