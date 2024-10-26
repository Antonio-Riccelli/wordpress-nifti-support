<?php
/*
 * Plugin Name: NIfTI Support
 * Plugin URI: https://github.com/antonio-riccelli/wordpress-nifti-support
 * Description: NIfTI support for Wordpress: allows to upload NIfTI (*.nii) files in the media library and add them to a post. The display is done using the Papaya Viewer (<a href="https://rii-mango.github.io/Papaya">Papaya</a>).
 * Version: 0.1
 * Author: Antonio Riccelli
 * Author URI: https://antonioriccelli.com
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 */

 function create_block_nifti_block_init() {
    register_block_type( __DIR__ . '/build');
 }

 add_action( 'init', 'create_block_nifti_block_init' );

if (!class_exists("NiftiSupport")) {

// NIfTISupport class.
 class NiftiSupport {

    /**
     * Constructor
     */
    function __construct() {

    }

    /**
     * Add NIfTI (*.nii) as a supported MIME type.
     * @param mime_types List of existing MIME types.
     */
function upload_mime($mime_types) {
    // add NIfTI (.nii and .nii.gz extensions) to the list of mime types
    $mime_types['nii'] = 'application/x-nifti';
    $mime_types['nii.gz'] = 'application/x-nifti';
    return $mime_types;
}

// create Papaya HTML

/**
 * Interpret the 'nii' shortcode to insert NIfTI data in posts.
 * @param $atts The attributes of the shortcode.
 * @param $content The content of the shortcode.
 * @return The HTML code to insert in the post.
 */
function nifti_shortcode($atts, $content = null) {
    // TODO: add support for the 'nii' shortcode
}

/**
 * Enqueue scripts on front end
 */
function wp_enqueue_scripts() {
    // TODO: enqueue scripts for frontend
}


/**
 * Use 'nii' shortcode when adding media to blog post
 * @param html The default generated html.
 * @param id The id of the post.
 * @param attachment The post attachment.
 */
function media_send_to_editor($html, $id, $attachment) {
    // TODO: use 'nii' shortcode when adding media to blog post
}
 } // end class NiftiSupport

 // create the NiftiSupport object
 $nifti_support = new NiftiSupport();
} // end if class_exists("NiftiSupport")

 ?>