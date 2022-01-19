

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
                <label for="tr_status"> tr_status:</label>
                <input type="text" class="form-control" id="tr_status" name='tr_status' placeholder='tr_status'>
              </div>
              
              <div class="form-group">
                <label for="tr_nama"> tr_nama:</label>
                <input type="text" class="form-control" id="tr_nama" name='tr_nama' placeholder='tr_nama'>
              </div>
              
              <div class="form-group">
                <label for="tr_subkeg"> tr_subkeg:</label>
                <select class="dropdown_list" id="tr_subkeg"  name="tr_subkeg">
<?php dropdown('subkeg','alias','alias','sub_id')?></select>
              </div>
              
              <div class="form-group">
                <label for="tgl_ba"> tgl_ba:</label>
                <input type="text" class="form-control" id="tgl_ba" name='tgl_ba' placeholder='tgl_ba'>
              </div>
              
              <div class="form-group">
                <label for="tr_nominal"> tr_nominal:</label>
                <input type="text" class="form-control" id="tr_nominal" name='tr_nominal' placeholder='tr_nominal'>
              </div>
              
              <div class="form-group">
                <label for="tr_ppn"> tr_ppn:</label>
                <input type="text" class="form-control" id="tr_ppn" name='tr_ppn' placeholder='tr_ppn'>
              </div>
              
              <div class="form-group">
                <label for="tr_pph"> tr_pph:</label>
                <input type="text" class="form-control" id="tr_pph" name='tr_pph' placeholder='tr_pph'>
              </div>
              
              <div class="form-group">
                <label for="tr_ket"> tr_ket:</label>
                <input type="text" class="form-control" id="tr_ket" name='tr_ket' placeholder='tr_ket'>
              </div>
              
              <div class="form-group">
                <label for="updoc"> updoc:</label>
                <input type="text" class="form-control" id="updoc" name='updoc' placeholder='updoc'>
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


