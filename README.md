# NIfTI Support for WordPress (WORK IN PROGRESS)

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
  <li>
  <a href="#description">Description</a>
  </li>
  <li>
  <a href="#technologies">Technologies</a>
  </li>
  </ol>
</details>

<!-- Description -->
## Description

Attempt at building a WordPress plugin to allow upload and display of images in [NIfTI](https://en.wikipedia.org/wiki/Neuroimaging_Informatics_Technology_Initiative) format.

I've only recently started dabbling in WordPress due to work requirements, so this is an experiment. Worst case scenario, I will have learned something new.

<!-- TECHNOLOGIES -->
## Technologies

- [PHP](https://www.php.net/)
- [WordPress](https://wordpress.org/)
- [NIfTI](https://en.wikipedia.org/wiki/Neuroimaging_Informatics_Technology_Initiative)
- [jQuery](https://jquery.com/)
- [JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
- [HTML](https://developer.mozilla.org/en-US/docs/Web/HTML)
- [CSS](https://developer.mozilla.org/en-US/docs/Web/CSS)
- [Papaya Viewer](https://rii-mango.github.io/Papaya/)

<!-- REQUIREMENTS -->
## Requirements
- WordPress 5.0 or higher

## Installation

### Upload

1. Download the plugin zip file
2. Log into your WordPress site and go to Plugins > Add New
3. Click Upload Plugin
4. Select the plugin zip file
5. Click Install Now
6. Activate the plugin

### Manual

1. Download the plugin zip file
2. Unzip the plugin zip file
3. Copy the plugin folder to your `/wp-content/plugins/` directory
4. Activate the plugin through the 'Plugins' menu in WordPress

Check out the Codex for more information about [installing plugins manually](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

### Git

Using git, browse to your `/wp-content/plugins/` directory and clone this repository:

`git clone git@github.com:Antonio-Riccelli/wordpress-nifti-support.git`

Then go to your Plugins screen and click __Activate__. 

## License

[GPL-3.0](https://choosealicense.com/licenses/gpl-3.0/)
