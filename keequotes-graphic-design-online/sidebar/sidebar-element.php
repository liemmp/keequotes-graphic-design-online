<div class="sidebarpost">
<div class="photodir-element">
<?php
$types = get_element_types();
foreach ($types->result as $type):
?>
<a onclick="show_element_cat(this)" data-id="vector-element-<?php echo $type->id ?>"><?php echo $type->name ?><br>
<img src="<?php echo $types->image_server_url.'/'.$type->cover_image; ?>"></a>
<p></p>
<?php endforeach; ?>
</div>
<?php
$types = get_element_types();
foreach ($types->result as $type):
?>
<div id="vector-element-<?php echo $type->id ?>" style="display:none;">
<a href="javascript:back_step('#element .sidebarpost > div','#element .photodir-element');" class="photodir-elementback"><img src="<?php echo KGDO_CD_URL; ?>/images/tools/back.svg"></a>
<div class="masonry">
<?php 
$the_categories = get_element_categories('?element_type_id='.$type->id);
?>
<?php foreach ($the_categories->result as $the_category): ?>
  <div class="brick">
  <a href="javascript:{}" library_id="<?php echo $the_category->id ?>" data-parent="<?php echo $type->id ?>" class="call-ajax-vector-detail"><?php echo $the_category->name;?><br><img src="<?php echo $the_categories->image_server_url.'/'.$the_category->cover_image; ?>"></a>
  </div>
<?php endforeach; ?>
</div>
<div style="clear:both"></div>
</div>
<?php endforeach; ?>

<div id="vector-comflex" style="display:none;">
<a href="javascript:{}" class="photodir-elementback"><img src="<?php echo KGDO_CD_URL; ?>/images/tools/back.svg"></a>
<div class="masonry">
<?php 
$the_query = new WP_Query( array(
    'post_type' => 'library',
    'posts_per_page' => -1,
    'tax_query' => array(
        array (
            'taxonomy' => 'element',
            'field' => 'slug',
            'terms' => 'vector-comflex',
        )
    ),
) );
?>
<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
  <div class="brick">
  <a href="javascript:{}" library_id="<?php $post_id = get_the_ID(); echo $post_id; ?>" class="call-ajax-vectorcomflex"><?php the_title();?><br><img src="<?php the_post_thumbnail_url('medium'); ?>"></a>
  </div>
<?php endwhile; ?>
</div>
<?php wp_reset_postdata(); ?>
<div style="clear:both"></div>
</div>

<div id="transparentelements" style="display:none;">
<a href="javascript:{}" class="photodir-elementback"><img src="<?php echo KGDO_CD_URL; ?>/images/tools/back.svg"></a>
<div class="masonry">
<?php 
$the_query = new WP_Query( array(
    'post_type' => 'library',
    'posts_per_page' => -1,
    'tax_query' => array(
        array (
            'taxonomy' => 'element',
            'field' => 'slug',
            'terms' => 'hinh-ve-tach-nen',
        )
    ),
) );
?>
<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
  <div class="brick">
  <a href="javascript:{}" library_id="<?php $post_id = get_the_ID(); echo $post_id; ?>" class="call-ajax-transparentelements"><?php the_title();?><br><img src="<?php the_post_thumbnail_url('medium'); ?>"></a>
  </div>
<?php endwhile; ?>
</div>
<?php wp_reset_postdata(); ?>
<div style="clear:both"></div>
</div>

</div>