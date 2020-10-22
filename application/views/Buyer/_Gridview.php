<style>
    .text-center {
    text-align:center;
    }
</style>
<div style="width:100%;">
    <div class="table-responsive">  
      <div class="portlet-body no-padding">
        <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th rowspan="2" style="width:30%">Action</th>
                    <th rowspan="2" class="text-center">Nama Lengkap</th>
                    <th rowspan="2" class="text-center">Alamat</th>
                    <th rowspan="2" class="text-center">No Telepon</th>
                    <th rowspan="2" class="text-center">Email</th>
            </thead>
            <tbody>
            <?php if($row !=FALSE):  foreach ($row as $brt): ?>
                       <tr>
                           <td scope="row"><a href="#" onclick="btnDelete_OnClick('<?php echo $brt->BUYER_ID; ?>')" class="btn-icon-o btn-danger btn-icon-sm mr-2 mb-2">
                                                <i class="fa fa-trash"></i>
                                            </a>||
                                            <a href="#" onclick="btnEdit_OnClick('<?php echo $brt->BUYER_ID; ?>')" class="btn-icon-o btn-primary btn-icon-sm mr-2 mb-2">
                                                <i class="fa fa-edit"></i>
                                            </a>
                            </td>
                            <td> <?php echo $brt->FIRST_NAME; ?> &nbsp 
                                <?php echo $brt->LAST_NAME ; ?></td>
                            <td> <?php echo $brt->ADDRESS; ?></td>
                            <td> <?php echo $brt->PHONE_NO; ?></td>
                            <td> <?php echo $brt->EMAIL; ?></td>
                       </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td align="center" colspan="5">Tidak ada data</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
                <div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate">
                <nav aria-label="Page navigation example">
                <?php 
                echo $this->pagination->create_links();
                ?>
                </nav>
                
                </div>
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