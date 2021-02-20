<div class="wrap">
<?php settings_errors( 'setting_plugin_error' );  ?>
<form method="post" action="options.php" >
<?php
    settings_fields( 'setting_plugin' );
    do_settings_sections( 'setting_plugin' );
?>
    <table class="form-table" role="presentation">
        <tbody>
        <tr>
            <th scope="row">
                <label>Email</label>
            </th>
            <td><input  name="email_keequotes" type="email" value="<?php echo get_option('email_keequotes') ?>" placeholder="Enter email" class="regular-text"></td>
        </tr>
        <tr>
            <th scope="row">
                <label>License</label>
            </th>
            <td><input name="key_keequotes" type="text" value="<?php echo get_option('key_keequotes') ?>" placeholder="Enter key" class="regular-text"></td>
        </tr>
        </tbody>
    </table>
    <p class="submit">
       <?php submit_button( __( 'Save Settings', 'textdomain' ), 'primary', 'wpdocs-save-settings' ); ?>
    </p>
</form>
</div>