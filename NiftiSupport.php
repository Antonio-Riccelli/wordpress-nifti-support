<?php
/*
 * Plugin Name: NIfTI Support
 * Plugin URI: https://github.com/antonio-riccelli/wordpress-nifti-support
 * Description: NIfTI support for Wordpress: allows to upload NIfTI (*.nii & *.nii.gz) files in the media library and add them to a post. The display is done using the Papaya Viewer (<a href="https://rii-mango.github.io/Papaya">Papaya</a>).
 * Version: 0.1
 * Author: Antonio Riccelli
 * Author URI: https://antonioriccelli.com
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 */


// The (hopefully) unique prefix 'niisupp' is used to avoid conflicts with other plugins in the WordPress ecosystem.
// Code inside of the NIISUPP_NiftiSupport class does not require any prefix due to being enclosed within that class.
// For reference: https://developer.wordpress.org/plugins/plugin-basics/best-practices/

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function niisupp_create_block_nifti_block_init()
{
    register_block_type(__DIR__ . '/build');
}

add_action('init', 'niisupp_create_block_nifti_block_init');

if (!class_exists("NIISUPP_NiftiSupport")) {

    // NIfTISupport class.
    class NIISUPP_NiftiSupport
    {

        /**
         * Constructor
         */
        private function __construct()
        {

            // add NIfTI (*.nii) as a supported MIME type
            add_filter('upload_mimes', array($this, 'upload_mimes'));

            // add the 'nii' shortcode
            add_shortcode('nii', array($this, 'nifti_shortcode'));

            // enqueue scripts on the frontend
            add_action('wp_enqueue_scripts', array($this, 'wp_enqueue_scripts'));
        }

        /**
         * Add NIfTI (*.nii) as a supported MIME type.
         * @param mime_types List of existing MIME types.
         */
        function upload_mime($mime_types)
        {
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
        function nifti_shortcode($atts, $content = null)
        {
            // TODO: add support for the 'nii' shortcode
        }

        /**
         * Enqueue scripts on front end
         */
        function wp_enqueue_scripts()
        {
            $nodeModulesDir = 'node_modules';

            // Papaya Viewer
            wp_register_script(
                'papaya-viewer',
                plugins_url($nodeModulesDir . '/papaya-viewer/release/current/minimal/papaya.js', __FILE__)
            );
            wp_register_style(
                'papaya-viewer',
                plugins_url(
                    $nodeModulesDir . '/papaya-viewer/release/current/minimal/papaya.css',
                    __FILE__
                )
            );
        }


        /**
         * Use 'nii' shortcode when adding media to blog post
         * @param html The default generated html.
         * @param id The id of the post.
         * @param attachment The post attachment.
         */
        function media_send_to_editor($html, $id, $attachment)
        {
            // TODO: use 'nii' shortcode when adding media to blog post
        }
    } // end class NIISUPP_NiftiSupport


    $nifti_support = new NIISUPP_NiftiSupport();
} // end if class_exists("NIISUPP_NiftiSupport")
