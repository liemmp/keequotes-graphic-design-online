<div class="sidebarpost">
    <div class="photodir-logo">
        <?php
        $symbols = get_symbol_types();
        foreach ($symbols->result as $symbol):
            ?>
            <a href="javascript:back_step('#brand .photodir-logo','#group-logo-<?php echo $symbol->id ?>');"><?php echo $symbol->name ?><br>
                <img src="<?php echo $symbols->image_server_url . '/' . $symbol->cover_image ?>"></a>
            <p></p>
        <?php endforeach; ?>
    </div>

    <?php foreach ($symbols->result as $symbol): ?>
        <div id="group-logo-<?php echo $symbol->id ?>" style="display:none;">
            <a href="javascript:back_step('#brand .sidebarpost > div','#brand .photodir-logo');"
               class="photodir-back"><img src="<?php echo KGDO_CD_URL; ?>/images/tools/back.svg"></a>
            <div class="masonry">
                <?php
                 $categories = get_symbol_categories('?symbol_type_id='.$symbol->id);
                 foreach ($categories->result as $category): ?>
                <div class="brick">
                    <a onclick="get_data_symbol(this)" library_id="<?php echo $category->id ?>" data-parent="<?php echo $symbol->id ?>"  class="call-ajax-text-datass"><?php echo $category->name ?>
                        <br><img src="<?php echo $categories->image_server_url . '/' . $category->cover_image ?>"></a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
    <div id="templatelogo" style="display:none;">
        <a href="javascript:back_step('#templatelogo','#group-logo-1');" class="photodir-back"><img
                    src="<?php echo KGDO_CD_URL; ?>/images/tools/back.svg"></a>
        <div class="content-ajax">
        </div>
    </div>
</div>