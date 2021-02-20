<div class="sidebarpost">
<?php $backgrounds =  get_background_types();  ?>
<div class="photodirbackground">
    <?php foreach($backgrounds->result as $background): ?>
<a href="javascript:{}" class="color-<?php _e( $background->type ) ?>"><?php _e( $background->name ) ?><br>
<img src="<?php _e( $backgrounds->image_server_url.'/'.$background->cover_image ) ?>"></a>
<p></p>
    <?php endforeach; ?>
</div>

<?php foreach($backgrounds->result as $background): ?>
<div id="color-<?php _e( $background->type ) ?>" style="display:none;">
<a href="javascript:{}" class="photodirbackground-back"><img src="<?php echo KGDO_CD_URL; ?>/images/tools/back.svg"></a>
<div class="masonry">
<?php
$categories = get_background_categories('?background_type_id='.$background->id);
?>
<?php foreach ($categories->result as $category): ?>
  <div class="brick">
  <a href="javascript:{}" library_id="<?php _e( $category->id ) ?>" data-type="<?php echo $category->background_type->type ?>" class="call-ajax-backgroundList">
      <?php _e( $category->name ) ?><br>
      <img src="<?php _e( $categories->image_server_url.'/'.$category->cover_image ) ?>">
  </a>
  </div>
<?php endforeach; ?>
</div>
<div style="clear:both"></div>
</div>
<?php endforeach; ?>

</div>