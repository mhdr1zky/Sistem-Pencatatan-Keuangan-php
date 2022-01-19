
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
                  <label for="nama"> nama:</label>
                  <input type="text" class="form-control" id="nama" name='nama' value="<?php echo $data['nama']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="nip"> nip:</label>
                  <input type="text" class="form-control" id="nip" name='nip' value="<?php echo $data['nip']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="nick"> nick:</label>
                  <input type="text" class="form-control" id="nick" name='nick' value="<?php echo $data['nick']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="no_wa"> no_wa:</label>
                  <input type="text" class="form-control" id="no_wa" name='no_wa' value="<?php echo $data['no_wa']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="arsip"> arsip:</label>
                  <input type="text" class="form-control" id="arsip" name='arsip' value="<?php echo $data['arsip']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="bidang"> bidang:</label>
                  <input type="text" class="form-control" id="bidang" name='bidang' value="<?php echo $data['bidang']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="pangkat"> pangkat:</label>
                  <input type="text" class="form-control" id="pangkat" name='pangkat' value="<?php echo $data['pangkat']; ?>">
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
