

  <button type='button' class="btn btn-default" data-toggle="modal" data-target="#modal_create">
                  Tambah Data
                </button>

<div class="modal fade" id="modal_create" tabindex="-1" role="dialog" aria-labelledby="modal_createLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_createLabel">Create Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <form action='func.php' method='POST'>
          
              <div class="form-group">
                <label for="nama"> nama:</label>
                <input type="text" class="form-control" id="nama" name='nama' placeholder='nama'>
              </div>
              
              <div class="form-group">
                <label for="nip"> nip:</label>
                <input type="text" class="form-control" id="nip" name='nip' placeholder='nip'>
              </div>
              
              <div class="form-group">
                <label for="nick"> nick:</label>
                <input type="text" class="form-control" id="nick" name='nick' placeholder='nick'>
              </div>
              
              <div class="form-group">
                <label for="no_wa"> no_wa:</label>
                <input type="text" class="form-control" id="no_wa" name='no_wa' placeholder='no_wa'>
              </div>
              
              <div class="form-group">
                <label for="arsip"> arsip:</label>
                <input type="text" class="form-control" id="arsip" name='arsip' placeholder='arsip'>
              </div>
              
              <div class="form-group">
                <label for="bidang"> bidang:</label>
                <input type="text" class="form-control" id="bidang" name='bidang' placeholder='bidang'>
              </div>
              
              <div class="form-group">
                <label for="pangkat"> pangkat:</label>
                <input type="text" class="form-control" id="pangkat" name='pangkat' placeholder='pangkat'>
              </div>
              
</div>
 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type='submit' class="btn btn-primary" name='insert' value="Save changes">
        </form>
      </div>
    </div>
  </div>
</div>


