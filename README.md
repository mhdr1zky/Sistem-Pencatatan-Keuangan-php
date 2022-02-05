# php-CRUD-Generator-Admin Lte3 -beta this many eror and bugs

```
<select name="rekap" class="form-inline">
                  <?php if (!isset($_GET['rekap'])) {
                    echo "";
                  } else{
                    $status=$_GET['rekap']; } ?>

                  <option value=''>semua</option>
                     <?php dropdown('rekap','nama_rkp','nama_rkp','rekp_id',$status);?>
                    </select>
                    
<select class="dropdown_list" id="tr_subkeg"  name="tr_subkeg">
<?php dropdown('subkeg','alias','alias','sub_id')?></select>

 <select class="dropdown_list" id="tr_subkeg"  name="tr_subkeg">
                  <?php dropdown('subkeg','alias','alias','sub_id',$data['tr_subkeg']);?>
               </select>

this may be out of date but still many use i modified it with nice ui , it can be faster to build app from native php, i hope it's useful

```

| Step | Thumb                                                                  | Demo |
| :--: |:----------------------------------------------------------------------:| :------------ |
|  1   | <a href="screenshot/1.start%20new%20generator.jpg" target="_blank"><img src="screenshot/1.start%20new%20generator.jpg" width="200"></a> | Start New Running |
|  2   | <a href="screenshot/2.in%20menu%20crud%20gen.jpg" target="_blank"><img src="screenshot/2.in%20menu%20crud%20gen.jpg" width="200"></a> | The Menu Generator |
|  3   | <a href="screenshot/3.result%20crud%20dashboard.jpg" target="_blank"><img src="screenshot/3.result%20crud%20dashboard.jpg" width="200"></a> | View Result Crud Generator |
|  4   | <a href="screenshot/4.%20modal%20create%20menu.jpg" target="_blank"><img src="screenshot/4.%20modal%20create%20menu.jpg" width="200"></a> | View Modal Create Menu |
|  5   | <a href="screenshot/5.modal%20edit%20menu.jpg" target="_blank"><img src="screenshot/5.modal%20edit%20menu.jpg" width="200"></a> | View Modal Edit Menu |


## How to use

```

```

## Cooming Soon

1. make feature Import external file from excel (rekap bbm via untuk ke server)

## Update

1. Adding Generate All
2. Adding form for Create connection file from web browser (21 Des 16)
3. Adding Bootstrap Template for Generated file
4. Adding Notif for Generated file (Create, Edit, Delete)
5. Integration Admin lte3
6. Modification crud to Modal System
7. Integration Datable Sort Filter and Export
8. Button Opsi to Simple Icon
9. add Duplicate Function in Crud
10. Move CRUD Menu in Integration App And Add Reset Settings

> written: mhdr1zky
