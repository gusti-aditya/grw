<form role="form" id="searchForm" method="post" action="">
    <!-- <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label class="control-label" style="text-align:left">Nama Buyer</label>
                <input type="text" id="txtSearchBuyerName" class="form-control" style="width:100%" />
            </div>
       </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label class="control-label" style="text-align:left">Kota</label>
                <select  class="form-control" id="cbSearchCity">
                <option value="">--Pilih--</option>
                <?php if($dataKota !=FALSE):  foreach ($dataKota as $dkt): ?>
                    <option value="<?php echo $dkt->id_kab; ?>"><?php echo $dkt->nama; ?></option>
                <?php endforeach; endif; ?>
                </select>
            </div>
       </div>
    </div> -->

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
             <!-- <button type="button" class="btn btn-sm btn-success" onclick="btnAdd_onClick()" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> &nbsp;Add</button> -->
             <button type="button" class="btn btn-sm btn-success" onclick="btnUpload_onClick()" data-toggle="modal" data-target=".bd-example-modal-lg-upload"><i class="fa fa-file"></i> &nbsp;Upload</button>
             <button type="button" class="btn btn-sm btn-success"><i class="fa fa-file"></i> &nbsp;<a href="Buyer/excel"> Exports</a></button>

        </div>
        <!-- <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="text-right">
                <button id="btnSearch" type="button" class="btn btn-sm btn-primary" onclick="btnSearch_onClick()">Search</button>
                <button id="btnReset" type="reset" class="btn btn-sm btn-default" onclick="btnClear_onClick()">Clear</button>
            </div>
        </div> -->
    </div>
</form>

<div class="line-br"></div>