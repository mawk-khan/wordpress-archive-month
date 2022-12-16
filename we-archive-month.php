/**
 * Shortcode to render archive by month.
 *
 * By: Wajid Khan
 */
function expo_custom_archives() {
    ?>
    <div class="expo-archives-dropdown widget">
        <select name="expo-archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
            <option value=""><?php esc_attr( _e( 'Select Month', 'textdomain' ) ); ?></option> 
            <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option' ) ); ?>
        </select>
    <div>
    <?php
} 
add_shortcode('expo_archive', 'expo_custom_archives');
