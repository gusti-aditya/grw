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
            <td>FirstName</td>
            <td>LastName</td>
            <td>Address</td>
            <td>Phone No</td>
            <td>Email</td>
            <td>City</td>
            <td>Province</td>
            <td>Postal Code</td>
        </tr>
     </thead>
     <tbody>

     <?php foreach($datanya as $brt){ ?>
     <tr>
            <td><?php echo $brt->FIRST_NAME; ?></td>
            <td><?php echo $brt->LAST_NAME; ?></td>
            <td><?php echo $brt->ADDRESS; ?></td>
            <td><?php echo $brt->PHONE_NO; ?></td>
            <td><?php echo $brt->EMAIL; ?></td>
            <td><?php echo $brt->CITY; ?></td>
            <td><?php echo $brt->PROVINCE; ?></td>
            <td><?php echo $brt->POSTAL_CODE; ?></td>
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