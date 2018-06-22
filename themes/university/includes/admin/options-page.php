<?php

function fu_theme_opts_page() {
    $opts = get_option( 'fu_opts' );
?>

<div class="wrap">
    <div class="card app-card card-inverse card-success">
        <div class="card-header">
            <h3 class="card-title"><?php _e( 'University Theme Settings', 'university' ); ?></h3>
        </div>
        <div class="card-body">

            <?php if ( get_transient( 'success') ) : ?>
            
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo get_transient( 'success'); ?>
                </div>
            
                <?php delete_transient( 'success'); ?>
            <?php endif; ?>

            <form method="post" action="admin-post.php" id="fu_theme_options_form">
                <input type="hidden" name="action" value="fu_save_options">
                <?php wp_nonce_field( 'fu_options_verify' ); ?>
                
                <h4><?php _e( 'Favicon', 'university' ); ?></h4>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Favicon Image" name="fu_inputFaviconImg" value="<?php echo $opts['favicon']; ?>">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button" id="fu_uploadFaviconBtn">
                            <?php _e( 'Upload Favicon', 'university' ); ?>
                        </button>
                    </span>
                </div>
                <hr>

                <h4><?php _e( 'Phone', 'university' ); ?></h4>
                <div class="form-group">
                    <label><?php _e( 'Add phone here', 'university' ); ?></label>
                    <input type="text" class="form-control" name="fu_inputPhone" value="<?php echo $opts['phone']; ?>">
                </div>
                <hr>
                
                <h4><?php _e( 'Social Icons', 'university' ); ?></h4>
                <div class="form-group">
                    <label><?php _e( 'Facebook', 'university' ); ?></label>
                    <input type="text" class="form-control" name="fu_inputFacebook" value="<?php echo $opts['facebook']; ?>">
                </div>
                <div class="form-group">
                    <label><?php _e( 'Twitter', 'university' ); ?></label>
                    <input type="text" class="form-control" name="fu_inputTwitter" value="<?php echo $opts['twitter']; ?>">
                </div>
                <div class="form-group">
                    <label><?php _e( 'YouTube', 'university' ); ?></label>
                    <input type="text" class="form-control" name="fu_inputYouTube" value="<?php echo $opts['youtube']; ?>">
                </div>
                <div class="form-group">
                    <label><?php _e( 'Linkedin', 'university' ); ?></label>
                    <input type="text" class="form-control" name="fu_inputLinkedin" value="<?php echo $opts['linkedin']; ?>">
                </div>
                <div class="form-group">
                    <label><?php _e( 'Instagram', 'university' ); ?></label>
                    <input type="text" class="form-control" name="fu_inputInstagram" value="<?php echo $opts['instagram']; ?>">
                </div>
                <hr>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        <?php _e( 'Update', 'university' ); ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
}
