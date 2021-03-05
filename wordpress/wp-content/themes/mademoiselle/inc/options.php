<?php
function mademoiselle_option_page(){
    add_menu_page(
        'Option Page',
        'Contact Data',
        'administrator',
        'option_page',
        'mademoiselle_contact_data',
        'dashicons-id',
        19);
}
add_action('admin_menu', 'mademoiselle_option_page');

function mademoiselle_contact_settings(){
    register_setting('mademoiselle_contact_data', 'mademoiselle_address');
    register_setting('mademoiselle_contact_data', 'mademoiselle_phone');
    register_setting('mademoiselle_contact_data', 'mademoiselle_email');
}
add_action('init', 'mademoiselle_contact_settings');

function mademoiselle_contact_data(){
?>
<form method="post" action="options.php">
    <?php
        settings_fields('mademoiselle_contact_data');
        do_settings_sections('mademoiselle_contact_data');
    ?>
    <table class="form-table">
        <tr>
            <th>
                Info Section Address:
            </th>
            <td>
                <input type="text" name="mademoiselle_address" value="<?php echo get_option('mademoiselle_address'); ?>">
            </td>
        </tr>
        <tr>
            <th>
                Info Section Phone:
            </th>
            <td>
                <input type="text" name="mademoiselle_phone" value="<?php echo get_option('mademoiselle_phone'); ?>">
            </td>
        </tr>
        <tr>
            <th>
                Info Section Email:
            </th>
            <td>
                <input type="text" name="mademoiselle_email" value="<?php echo get_option('mademoiselle_email'); ?>">
            </td>
        </tr>
    </table>
    <?php submit_button(); ?>
</form>
<?php
}