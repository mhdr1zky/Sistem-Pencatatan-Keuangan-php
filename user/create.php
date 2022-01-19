

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
                <label for="user_nama"> user_nama:</label>
                <input type="text" class="form-control" id="user_nama" name='user_nama' placeholder='user_nama'>
              </div>
              
              <div class="form-group">
                <label for="user_username"> user_username:</label>
                <input type="text" class="form-control" id="user_username" name='user_username' placeholder='user_username'>
              </div>
              
              <div class="form-group">
                <label for="user_password"> user_password:</label>
                <input type="text" class="form-control" id="user_password" name='user_password' placeholder='user_password'>
              </div>
              
              <div class="form-group">
                <label for="user_foto"> user_foto:</label>
                <input type="text" class="form-control" id="user_foto" name='user_foto' placeholder='user_foto'>
              </div>
              
              <div class="form-group">
                <label for="user_level"> user_level:</label>
                <input type="text" class="form-control" id="user_level" name='user_level' placeholder='user_level'>
              </div>
              
              <div class="form-group">
                <label for="setting"> setting:</label>
                <input type="text" class="form-control" id="setting" name='setting' placeholder='setting'>
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


