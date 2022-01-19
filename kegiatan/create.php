

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
                <label for="nm_keg"> nm_keg:</label>
                <input type="text" class="form-control" id="nm_keg" name='nm_keg' placeholder='nm_keg'>
              </div>
              
              <div class="form-group">
                <label for="pagu_awal"> pagu_awal:</label>
                <input type="text" class="form-control" id="pagu_awal" name='pagu_awal' placeholder='pagu_awal'>
              </div>
              
              <div class="form-group">
                <label for="nokeg"> nokeg:</label>
                <input type="text" class="form-control" id="nokeg" name='nokeg' placeholder='nokeg'>
              </div>
              
              <div class="form-group">
                <label for="pptk"> pptk:</label>
                <input type="text" class="form-control" id="pptk" name='pptk' placeholder='pptk'>
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


