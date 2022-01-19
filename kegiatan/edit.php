
<?php
$one = GetOne($data['id']);
?>
<div class="modal fade" id="modal_edit_<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="modal_createLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_createLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <form action='func.php' method='POST'>
             <input type='hidden' name='id' value="<?php echo $data['id'];?>">
          <?php
            foreach($one as $data){?>
               
                <div class="form-group">
                  <label for="nm_keg"> nm_keg:</label>
                  <input type="text" class="form-control" id="nm_keg" name='nm_keg' value="<?php echo $data['nm_keg']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="pagu_awal"> pagu_awal:</label>
                  <input type="text" class="form-control" id="pagu_awal" name='pagu_awal' value="<?php echo $data['pagu_awal']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="nokeg"> nokeg:</label>
                  <input type="text" class="form-control" id="nokeg" name='nokeg' value="<?php echo $data['nokeg']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="pptk"> pptk:</label>
                  <input type="text" class="form-control" id="pptk" name='pptk' value="<?php echo $data['pptk']; ?>">
                </div>
            
            <?php } ?>
            
</div>
 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type='submit' class="btn btn-primary" name='update' value="Save changes">
        </form>
      </div>
    </div>
  </div>
</div>
