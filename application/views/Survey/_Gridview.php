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
                    <th rowspan="2" class="text-center">Nama</th>
                    <th rowspan="2" class="text-center">Tanggal survey</th>
                    <th rowspan="2" class="text-center">Nomor Telepon</th>
                    <th rowspan="2" class="text-center">Referal</th>
            </thead>
            <tbody>
            <?php if($dataSurvey !=FALSE):  foreach ($dataSurvey as $brt): ?>
                       <tr>
                           <td><?php echo $brt->NAME; ?></td>
                           <td><?php echo $brt->PHONE; ?></td>
                           <td><?php echo $brt->DATE; ?></td>
                           <td><?php echo $brt->REFERAL; ?></td>
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