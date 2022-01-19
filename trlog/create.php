

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
                <label for="log_id"> log_id:</label>
                <input type="text" class="form-control" id="log_id" name='log_id' placeholder='log_id'>
              </div>
              
              <div class="form-group">
                <label for="log_status"> log_status:</label>
                <input type="text" class="form-control" id="log_status" name='log_status' placeholder='log_status'>
              </div>
              
              <div class="form-group">
                <label for="log_nama"> log_nama:</label>
                <input type="text" class="form-control" id="log_nama" name='log_nama' placeholder='log_nama'>
              </div>
              
              <div class="form-group">
                <label for="log_keg"> log_keg:</label>
                <input type="text" class="form-control" id="log_keg" name='log_keg' placeholder='log_keg'>
              </div>
              
              <div class="form-group">
                <label for="tgl_ba"> tgl_ba:</label>
                <input type="text" class="form-control" id="tgl_ba" name='tgl_ba' placeholder='tgl_ba'>
              </div>
              
              <div class="form-group">
                <label for="log_nominal"> log_nominal:</label>
                <input type="text" class="form-control" id="log_nominal" name='log_nominal' placeholder='log_nominal'>
              </div>
              
              <div class="form-group">
                <label for="log_ppn"> log_ppn:</label>
                <input type="text" class="form-control" id="log_ppn" name='log_ppn' placeholder='log_ppn'>
              </div>
              
              <div class="form-group">
                <label for="log_pph"> log_pph:</label>
                <input type="text" class="form-control" id="log_pph" name='log_pph' placeholder='log_pph'>
              </div>
              
              <div class="form-group">
                <label for="log_ket"> log_ket:</label>
                <input type="text" class="form-control" id="log_ket" name='log_ket' placeholder='log_ket'>
              </div>
              
              <div class="form-group">
                <label for="log_archive"> log_archive:</label>
                <input type="text" class="form-control" id="log_archive" name='log_archive' placeholder='log_archive'>
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


