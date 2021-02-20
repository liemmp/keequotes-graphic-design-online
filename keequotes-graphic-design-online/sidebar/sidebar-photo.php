<div class="sidebarpost">
    <div class="photodirunsplashphoto" style="display:none;"></div>
    <div class="photodirphoto">
        <?php
        $the_photo = get_photo_types();
        foreach ($the_photo->result as $photo) :
            ?>
            <a href="javascript:{}" class="<?php echo 'photo-' . $photo->id ?>"><?php echo $photo->name ?><br>
                <img src="<?php echo $the_photo->image_server_url . '/' . $photo->cover_image ?>"></a>
            <p></p>
        <?php endforeach; ?>
    </div>

    <?php foreach ($the_photo->result as $photo) : ?>
        <div id="<?php echo 'photo-'.$photo->id ?>" style="display:none;">
            <a href="javascript:{}" class="photodir-back"><img src="<?php echo KGDO_CD_URL; ?>/images/tools/back.svg"></a>
            <div class="masonry">
                <?php
                $the_categories = get_photo_categories('?photo_type_id=' . $photo->id);
                foreach ($the_categories->result as $category) : ?>
                    <div class="brick">
                        <a href="javascript:{}" library_id="<?php echo $category->unsplash_keyword ?>" data-id="<?php echo 'photo-'.$photo->id ?>"
                           class="call-ajax-unsplashsearch"><?php echo $category->name ?><br><img
                                    src="<?php echo $the_categories->image_server_url . '/' . $category->cover_image ?>"></a>
                    </div>
                <?php endforeach; //end forearch category ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>