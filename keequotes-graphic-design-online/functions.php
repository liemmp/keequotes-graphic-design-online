<?php
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
//upload dir
function KGDO_upload_dir_filter($uploads){
    $day = date('d');
    $uploads['path'] .= '/' . $day;
    $uploads['url']  .= '/' . $day;
    return $uploads;
}
add_filter('upload_dir', 'KGDO_upload_dir_filter');
add_theme_support( 'post-thumbnails' );

    add_action('wp_ajax_get_template_data', 'f_get_template_data');
    function f_get_template_data()
    {
        ob_start();
        $keyword = $_POST['keysearch'] ? $_POST['keysearch'] : '';
        $rand_posts = get_products('?search=' . $keyword);
        foreach ($rand_posts->result as $product) :
            ?>
            <a href="javascript:;" onclick="select_template(this)" class="btn-load"
               data-json='<?php _e($product->data); ?>' data-id="<?php _e($product->id); ?>"><img
                        src="<?php _e($rand_posts->image_server_url . '/' . $product->cover_image) ?>"></a>
            <br><?php _e($product->category->name); ?><p></p>
        <?php
        endforeach;
        if (!$rand_posts->result) echo '<p>Not found product</p>';
        $resulf = ob_get_contents();
        ob_end_clean();
        echo $resulf;
        die();
    }

    add_action('wp_ajax_update_json_template', 'f_update_json_template');
    function f_update_json_template()
    {
        $post_id = $_POST['post'];
        $json = $_POST['data_json'];
        update_field('json', $json, $post_id);
        die();
    }

    add_action('wp_ajax_upload_img_wp', 'f_upload_img_wp');
    function f_upload_img_wp()
    {
        $file = $_FILES['upload_image'];
        require_once(ABSPATH . 'wp-admin/includes/admin.php');
        $file_return = wp_handle_upload($file, array('test_form' => false));
        if (isset($file_return['error']) || isset($file_return['upload_error_handler'])) {
            return false;
        } else {
            $filename = $file_return['file'];
            $attachment = array(
                'post_mime_type' => $file_return['type'],
                'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
                'post_content' => '',
                'post_status' => 'inherit',
                'guid' => $file_return['url']
            );
            $attachment_id = wp_insert_attachment($attachment, $file_return['url']);
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            $attachment_data = wp_generate_attachment_metadata($attachment_id, $filename);
            wp_update_attachment_metadata($attachment_id, $attachment_data);
            if (0 < intval($attachment_id)) {
                echo wp_get_attachment_url($attachment_id, 'full');
            }

        }
        die();
    }

    function get_data_api($slug)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => KGDO_URL_API.$slug,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
           // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }

/// get info license
    function check_license_plugin($key)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => KGDO_URL_API . '/user/license-info?license_key='.$key,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        if ($response->name) {
            $response->success = 'License is active.';
            define('KGDO_K_API',$key,true);
            return $response;
        }
        $response->error = 'License key invalid.';
        return $response;
    }

/// check info license
    function check_license($value)
    {
        $check = check_license_plugin($value);

        if ($check->error) {
            add_settings_error('setting_plugin_error', esc_attr('settings_updated'), __($check->error), 'error');
        }
        if ($check->success) {
            add_settings_error('setting_plugin_error', esc_attr('settings_updated'), __($check->success), 'success');
        }
        return $value;
    }

    function check_email($value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            add_settings_error('setting_plugin_error', esc_attr('settings_updated'), __($value . ' is not a valid email address'), 'error');
        }
        return $value;
    }
