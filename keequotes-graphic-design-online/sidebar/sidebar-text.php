<div class="sidebarpost">
<div class="photodir-text">
<?php
$text_types = get_text_types();
foreach ($text_types->result as $text_type):
?>
<a href="javascript:back_step('#text > .sidebarpost > div','#group-text-<?php echo $text_type->id ?>');" class="textballoon" data-id="<?php echo $text_type->id ?>" data-type="<?php echo $text_type->type ?>"><?php echo $text_type->name ?><br>
<img src="<?php echo $text_types->image_server_url.'/'.$text_type->cover_image ?>"></a>
<p></p>
<?php endforeach; ?>
</div>

<?php
foreach ($text_types->result as $text_type):
?>
<div id="group-text-<?php echo $text_type->id ?>" style="display:none;">
<a href="javascript:back_step('#text > .sidebarpost > div,.photodirtextdetail-back, #contentajax-textdetail ', '#text > .sidebarpost .photodir-text');" class="photodirtext-back"><img src="<?php echo KGDO_CD_URL; ?>/images/tools/back.svg"></a>
<div class="masonry">
<?php
$the_categories = get_text_categories('?text_type_id='.$text_type->id);
?>
<?php foreach($the_categories->result as $the_category): ?>
  <div class="brick">
  <a href="javascript:{}" library_id="<?php echo $the_category->id ?>" data-parent="<?php echo $text_type->id ?>" data-type="<?php echo $text_type->type ?>" class="call-ajax-text-data"><?php echo $the_category->name ?><br><img src="<?php echo $the_categories->image_server_url.'/'.$the_category->cover_image ?>"></a>
  </div>
<?php endforeach; ?>
</div>
<div style="clear:both"></div>
</div>
<?php endforeach; ?>
</div>