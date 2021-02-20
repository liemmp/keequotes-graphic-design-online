<?php
define('KGDO_URL_API','https://keequotes.com/api');
define('KGDO_LIST_PRODUCTS','/products');
define('KGDO_PRODUCT_CATEGORIES','/product-categories');
define('KGDO_BG_TYPES','/background-types');
define('BG_CAT','/background-categories');
define('BG_ITEM','/backgrounds');
define('PT_TYPES','/photo-types');
define('PT_CAT','/photo-categories');
define('E_TYPES','/element-types');
define('E_CAT','/element-categories');
define('E_DETAIL','/elements');
define('T_TYPES','/text-types');
define('T_CAT','/text-categories');
define('T_DETAIL','/texts');
define('S_TYPES','/symbol-types');
define('S_CAT','/symbol-categories');
define('LK','?license_key='.KGDO_K_API);


function get_products($query=''){ if($query)$query=str_replace('?','&',$query); return get_data_api(KGDO_LIST_PRODUCTS.LK.$query);}
function get_background_types(){ return get_data_api(KGDO_BG_TYPES.LK);}
function get_background_categories($slug=''){if($slug)$slug=str_replace('?','&',$slug); return get_data_api(BG_CAT.LK.$slug);}
function get_background_items($slug=''){if($slug)$slug=str_replace('?','&',$slug); return get_data_api(BG_ITEM.LK.$slug);}
function get_photo_types($slug=''){if($slug)$slug=str_replace('?','&',$slug); return get_data_api(PT_TYPES.LK.$slug);}
function get_photo_categories($slug=''){if($slug)$slug=str_replace('?','&',$slug); return get_data_api(PT_CAT.LK.$slug);}
function get_product_detail($id){ return  get_data_api("/products/{$id}/detail".LK);}
function get_element_types($slug=''){if($slug)$slug=str_replace('?','&',$slug); return  get_data_api(E_TYPES.LK.$slug);}
function get_element_categories($slug=''){if($slug)$slug=str_replace('?','&',$slug); return  get_data_api(E_CAT.LK.$slug);}
function get_elements($slug=''){if($slug)$slug=str_replace('?','&',$slug); return  get_data_api(E_DETAIL.LK.$slug);}
function get_text_types($slug=''){if($slug)$slug=str_replace('?','&',$slug); return  get_data_api(T_TYPES.LK.$slug);}
function get_text_categories($slug=''){if($slug)$slug=str_replace('?','&',$slug); return  get_data_api(T_CAT.LK.$slug);}
function get_texts($slug=''){if($slug)$slug=str_replace('?','&',$slug); return  get_data_api(T_DETAIL.LK.$slug);}
function get_symbol_types($slug=''){if($slug)$slug=str_replace('?','&',$slug); return  get_data_api(S_TYPES.LK.$slug);}
function get_symbol_categories($slug=''){if($slug)$slug=str_replace('?','&',$slug); return  get_data_api(S_CAT.LK.$slug);}