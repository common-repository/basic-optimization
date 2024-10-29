<div class="wrap">
    <h1><?php _e( 'Settings', 'basic-optimization' ); ?></h1>

    <?php if ( isset( $_GET['settings-updated'] ) ) { ?>
        <div class="notice notice-success">
            <p><?php _e( 'Settings updated successfully!', 'basic-optimization' ); ?></p>
        </div>
    <?php } ?>

    <form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr class="row">
                    <th scope="row">
                        <?php _e( 'Disable Emojis', 'basic-optimization' ); ?>
                    </th>
                    <td>
                        <fieldset>
                            <label>
                                <input type="radio" name="disable_emojis" value="yes"<?php echo $disable_emojis ? 'checked="checked"' : '' ?>> Yes
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="disable_emojis" value="no"<?php echo !$disable_emojis ? 'checked="checked"' : '' ?>> No
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr class="row">
                    <th scope="row">
                        <?php _e( 'Remove Shortlink', 'basic-optimization' ); ?>
                    </th>
                    <td>
                        <fieldset>
                            <label>
                                <input type="radio" name="remove_shortlink" value="yes"<?php echo $remove_shortlink ? 'checked="checked"' : '' ?>> Yes
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="remove_shortlink" value="no"<?php echo !$remove_shortlink ? 'checked="checked"' : '' ?>> No
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr class="row">
                    <th scope="row">
                        <?php _e( 'Remove CSS/JS version', 'basic-optimization' ); ?>
                    </th>
                    <td>
                        <fieldset>
                            <label>
                                <input type="radio" name="remove_cssjs_ver" value="yes"<?php echo $remove_cssjs_ver ? 'checked="checked"' : '' ?>> Yes
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="remove_cssjs_ver" value="no"<?php echo !$remove_cssjs_ver ? 'checked="checked"' : '' ?>> No
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr class="row">
                    <th scope="row">
                        <?php _e( 'Remove RSD Links', 'basic-optimization' ); ?>
                    </th>
                    <td>
                        <fieldset>
                            <label>
                                <input type="radio" name="remove_rsd_links" value="yes"<?php echo $remove_rsd_links ? 'checked="checked"' : '' ?>> Yes
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="remove_rsd_links" value="no"<?php echo !$remove_rsd_links ? 'checked="checked"' : '' ?>> No
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr class="row">
                    <th scope="row">
                        <?php _e( 'Disable Embeds', 'basic-optimization' ); ?>
                    </th>
                    <td>
                        <fieldset>
                            <label>
                                <input type="radio" name="disable_embed" value="yes"<?php echo $disable_embed ? 'checked="checked"' : '' ?>> Yes
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="disable_embed" value="no"<?php echo !$disable_embed ? 'checked="checked"' : '' ?>> No
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr class="row">
                    <th scope="row">
                        <?php _e( 'Disable XML-RPC', 'basic-optimization' ); ?>
                    </th>
                    <td>
                        <fieldset>
                            <label>
                                <input type="radio" name="disable_xmlrpc" value="yes"<?php echo $disable_xmlrpc ? 'checked="checked"' : '' ?>> Yes
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="disable_xmlrpc" value="no"<?php echo !$disable_xmlrpc ? 'checked="checked"' : '' ?>> No
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr class="row">
                    <th scope="row">
                        <?php _e( 'Remove WLManifest Link', 'basic-optimization' ); ?>
                    </th>
                    <td>
                        <fieldset>
                            <label>
                                <input type="radio" name="remove_wlwmanifest_link" value="yes"<?php echo $remove_wlwmanifest_link ? 'checked="checked"' : '' ?>> Yes
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="remove_wlwmanifest_link" value="no"<?php echo !$remove_wlwmanifest_link ? 'checked="checked"' : '' ?>> No
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr class="row">
                    <th scope="row">
                        <?php _e( 'Disable Self Pingback', 'basic-optimization' ); ?>
                    </th>
                    <td>
                        <fieldset>
                            <label>
                                <input type="radio" name="disable_pingback" value="yes"<?php echo $disable_pingback ? 'checked="checked"' : '' ?>> Yes
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="disable_pingback" value="no"<?php echo !$disable_pingback ? 'checked="checked"' : '' ?>> No
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr class="row">
                    <th scope="row">
                        <?php _e( 'Hide WordPress Version', 'basic-optimization' ); ?>
                    </th>
                    <td>
                        <fieldset>
                            <label>
                                <input type="radio" name="hide_wp_version" value="yes"<?php echo $hide_wp_version ? 'checked="checked"' : '' ?>> Yes
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="hide_wp_version" value="no"<?php echo !$hide_wp_version ? 'checked="checked"' : '' ?>> No
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr class="row">
                    <th scope="row">
                        <?php _e( 'Disable Heartbeat', 'basic-optimization' ); ?>
                    </th>
                    <td>
                        <fieldset>
                            <label>
                                <input type="radio" name="stop_heartbeat" value="yes"<?php echo $stop_heartbeat ? 'checked="checked"' : '' ?>> Yes
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="stop_heartbeat" value="no"<?php echo !$stop_heartbeat ? 'checked="checked"' : '' ?>> No
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <!-- <tr class="row">
                    <th scope="row">
                        <?php _e( 'Disable Dashicons on Front-end', 'basic-optimization' ); ?>
                    </th>
                    <td>
                        <fieldset>
                            <label>
                                <input type="radio" name="dequeue_dashicon" value="yes"<?php // echo $dequeue_dashicon ? 'checked="checked"' : '' ?>> Yes
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="dequeue_dashicon" value="no"<?php // echo !$dequeue_dashicon ? 'checked="checked"' : '' ?>> No
                            </label>
                        </fieldset>
                    </td>
                </tr> -->
            </tbody>
        </table>

        <?php wp_nonce_field( 'general-settings' ); ?>
        <?php submit_button( __( 'Update Settings', 'basic-optimization' ), 'primary', 'submit_general_settings' ); ?>
    </form>
</div>
