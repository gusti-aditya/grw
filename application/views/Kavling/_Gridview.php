<style>
    .text-center {
    text-align:center;
    }
</style>
<div style="width:100%;">
    <div class="table-responsive">  
      <div class="portlet-body no-padding">
      <table id="tablenya" class="table table-bordered table-striped table-hover">
     <thead>
        <tr>
            <td>Kavling No</td>
            <td>Jenis Kavling</td>
            <td>Status</td>
        </tr>
     </thead>
     <tbody>

     <?php foreach($datanya as $data){ ?>
     <tr>
            <td><?php echo $data->CODE; ?></td>
            <td><?php echo $data->name; ?></td>
            <td><?php echo $data->status; ?></td>
    </tr>
    <?php } ?>

     </tbody>
     </table>
        
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