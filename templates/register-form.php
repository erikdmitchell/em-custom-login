<?php
/**
 * Registration form template
 *
 * Can be overriden
 *
 * NOTICE: These fields are required: username, email, password. Please make sure you use the default functions for those fields.
 *
 * @package PickleCustomLogin
 * @since   1.0.0
 */

?>


<div class="pcl-registration">
    <form id="pcl-registration-form" class="pcl-custom-form" action="" method="POST">       
        
        <fieldset>
            
            <p>
                <?php pickle_custom_login()->registration->form_username_field(); ?>
            </p>
            
            <p>
                <?php pickle_custom_login()->registration->form_email_field(); ?>
            </p>
            
            <p>
                <?php pickle_custom_login()->registration->form_name_field(); ?>
            </p>
                
            <p>
                <?php pickle_custom_login()->registration->form_password_field(); ?>
            </p>

            <p>
                <?php pickle_custom_login()->registration->form_recaptcha_field(); ?>
            </p>
            
            <p>
                <?php pickle_custom_login()->registration->form_register_button(); ?>
            </p>

        </fieldset>
    </form>
    
    <?php
    pcl_login_extras(
        array(
            'loginout' => true,
            'register' => false,
            'password' => false,
        )
    );
    ?>
    
</div>
