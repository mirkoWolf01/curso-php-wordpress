<?php
$pro_purchase_url = "https://themegrove.com/products/pixel-grove-pro/";
$live_demo_url = "https://demos.themegrove.com/pixel-grove-pro";
$support_url = "https://themegrove.com/contact/"
?>

<style>
    .pixel-grove-themeinfo-page--wrapper {
        background: #fff;
        padding: 50px;
        margin: 20px 20px;
    }
    a.pixel-grove-button.button-primary {
        background: #ff5e00;
        border: none;
    }

    .pixel-grove-features {
        display: flex;
        flex-wrap: wrap;
        margin: 30px -15px 0;
    }

    .pixel-grove-features > div {
        flex: 0 0 20%;
        padding: 15px;
        background: #f7f7f7;
        margin: 0 10px 20px;
        border-radius: 11px;
    }

    .pixel-grove-features-box i {
        background: #fff;
        height: 60px;
        width: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 33px;
        border: 1px solid #ebe2e2;
        box-shadow: 0 0 10px #c8c2c2;
    }

    .pixel-grove-themeinfo-page--wrapper p {
        font-size: 16px;
    }
    p.customization-notice {
        background: #eee;
        padding: 20px;
        font-weight: 500;
        font-style: italic;
        border-radius: 6px;
    }
    
</style>
<div class="pixel-grove-themeinfo-page--wrapper">
    <div id="pixel-grove-admin-about-page">
        <div class="pixel-grove-admin-card-header">
            <div class="pixel-grove-header-left">
                <h2>
                    <?php echo esc_html( $theme->Name ); ?>
                </h2>
                <p>
                    <?php esc_html_e( 'Upgrade to the Pro version to unlock advanced blocks and patterns, dedicated support, and theme installation with demo setup. Experience enhanced flexibility and receive dedicated support to effortlessly elevate your website to new heights of excellence. ', 'pixel-grove' ); ?>
                </p>

            </div>
            <div class="pixel-grove-header-right">
                <div class="pixel-grove-pro-button">
                    <a href="<?php echo esc_url( $live_demo_url ); ?>" class="pixel-grove-button button-secondary" target="_blank"
                        rel="noreferrer">
                        <?php esc_html_e( 'Pro Live Demo', 'pixel-grove' ); ?>
                    </a>
                    <a href="<?php echo esc_url( $pro_purchase_url ); ?>" class="pixel-grove-button button-primary" target="_blank"
                        rel="noreferrer">
                        <?php esc_html_e( 'Buy Pro Now', 'pixel-grove' ); ?>
                    </a>
                    <a href="<?php echo esc_url( $support_url ); ?>" class="pixel-grove-button button-secondary" target="_blank"
                        rel="noreferrer">
                        <?php esc_html_e( 'Supports', 'pixel-grove' ); ?>
                    </a>
                </div>
            </div>
        </div>   
        <div class="pixel-grove-features">
            <div class="pixel-grove-features-box">
                <i class="dashicons dashicons-align-pull-left"></i>
                <h3> <?php esc_html_e( 'Block-Based Customization', 'pixel-grove' ); ?></h3>
                <p><?php esc_html_e( 'Create and customize website content effortlessly by arranging various blocks such as text, images, and more within the Gutenberg editor, making web design accessible to all skill levels.', 'pixel-grove' ); ?></p>
            </div>
            <div class="pixel-grove-features-box">
                <i class="dashicons dashicons-desktop"></i>
                <h3> <?php esc_html_e( 'Responsive Design', 'pixel-grove' ); ?></h3>
                <p><?php esc_html_e( 'Ensure your website looks and functions flawlessly on various devices, from desktops to mobile devices, thanks to the responsive design of Gutenberg themes, providing an exceptional user experience.', 'pixel-grove' ); ?></p>
            </div>
            <div class="pixel-grove-features-box">
                <i class="dashicons dashicons-wordpress"></i>
                <h3> <?php esc_html_e( 'Fully Gutenberg Compatibility', 'pixel-grove' ); ?></h3>
                <p><?php esc_html_e( 'Enjoy a hassle-free content creation experience as Gutenberg themes are designed to fully integrate with the Gutenberg block editor, allowing you to easily create, edit, and maintain your website’s design within the editor’s environment.', 'pixel-grove' ); ?></p>
            </div>
            <div class="pixel-grove-features-box">
                <i class="dashicons dashicons-microphone"></i>
                <h3> <?php esc_html_e( '24/7 Support', 'pixel-grove' ); ?></h3>
                <p><?php esc_html_e( 'Our dedicated support team is available around the clock to provide assistance, ensuring your website operates smoothly and addressing any technical issues, customization queries, or general inquiries at any time.', 'pixel-grove' ); ?></p>
            </div>
        </div>  
        <p class="customization-notice"><?php esc_html_e( 'If you require assistance with theme installation, demo setup, or customization, please feel free to reach out to us at support@themegrove.com or thmegrove@gmail.com. We are here to help!' , 'pixel-grove' ); ?></p>
        <div class="pixel-grove-header-right">
                <div class="pixel-grove-pro-button">                    
                    <a href="<?php echo esc_url( $pro_purchase_url ); ?>" class="pixel-grove-button button-primary" target="_blank"
                        rel="noreferrer">
                        <?php esc_html_e( 'Buy Pro Now', 'pixel-grove' ); ?>
                    </a>
                    <a href="<?php echo esc_url( $support_url ); ?>" class="pixel-grove-button button-secondary" target="_blank"
                        rel="noreferrer">
                        <?php esc_html_e( 'Supports', 'pixel-grove' ); ?>
                    </a>
                </div>
            </div> 
    </div>
</div>