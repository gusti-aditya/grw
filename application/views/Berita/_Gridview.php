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
                    <th rowspan="2" class="text-center">Judul berita</th>
                    <th rowspan="2" class="text-center">Tanggal Dibuat</th>
                    <th rowspan="2" class="text-center">Url Berita</th>
                    <th rowspan="2" class="text-center">Gambar</th>
            </thead>
            <tbody>
            <?php if($dataBerita !=FALSE):  foreach ($dataBerita as $brt): ?>
                       <tr>
                           <td scope="row"><a href="#" onclick="btnDelete_OnClick('<?php echo $brt->ID; ?>')" class="btn-icon-o btn-danger btn-icon-sm mr-2 mb-2">
                                                <i class="fa fa-trash"></i>
                                            </a>||
                                            <a href="#" onclick="btnEdit_OnClick('<?php echo $brt->ID; ?>')" class="btn-icon-o btn-primary btn-icon-sm mr-2 mb-2">
                                                <i class="fa fa-edit"></i>
                                            </a>
                            </td>
                           <td><?php echo $brt->TITLE; ?></td>
                           <td><?php echo $brt->DATE; ?></td>
                           <td><?php echo $brt->URL; ?></td>
                           <td><img src="assets/images/<?php echo $brt->IMAGE; ?>" width="100" height="100" /></td>
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