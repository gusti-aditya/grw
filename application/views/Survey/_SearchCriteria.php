
<form role="form" id="searchForm" method="post" action="">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label class="control-label" style="text-align:left">Nama</label>
                <input type="text" id="txtSearchNewsTitle" class="form-control" style="width:100%" />
            </div>
       </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label class="control-label" style="text-align:left">Tanggal Survey</label>
                <input type="text" id="txtSearchDate" class="form-control" style="width:100%" />
            </div>
       </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="text-right">
                <button id="btnSearch" type="button" class="btn btn-sm btn-primary" onclick="btnSearch_onClick()">Search</button>
                <button id="btnReset" type="reset" class="btn btn-sm btn-default" onclick="btnClear_onClick()">Clear</button>
            </div>
        </div>
    </div>
</form>

<div class="line-br"></div>