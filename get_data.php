<?php
    //Include database connection
    if($_POST['dataid']) {
    //run query against `dataid`
?>
    <div class="modal-header">
        <h4 class="modal-title" id="portfolioModallabel"><?php echo $title; ?></h4>
    </div>
    <div class="modal-body text-center">
        <img class="img-responsive center-block" src="<?php echo $thumbpath; ?>" sizes="100vw" srcset="<?php echo $smallpath; ?> 500w, <?php echo $mediumpath; ?> 1000w, <?php echo $largepath; ?> 1500w" alt="<?php echo $alt ?>">
        <p class="line-height-small"><?php echo $descript; ?></p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
<?php } ?>