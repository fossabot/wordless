<?php
/**
 * @page placeholderservices Placeholder Services
 * 
 * Wordless has the ability to generate some dummy content (images or text) 
 * using some online services.
 * 
 * For this to work you need to be connected to internet, as the dummy content 
 * is dinamically generated by online services.
 * 
 * 
 * @section placeholderimage PlaceholderImage abstract class
 * 
 * To use web services a PHP class describing the services is needed in 
 * Wordless.
 * In @p wordless/helpers/placeholder_images there are classes describing the 
 * online services available in Wordless to be used to generate dummy content.
 * 
 * The main class is PlaceholderImage, which must be extended from the other 
 * classes.
 * 
 * 
 * @section placeholderaddservice How to add a service to Wordless
 * 
 * Adding another web service is really easy. Create a class in @p
 * wordless/helpers/placeholder_images which extends PlaceholderImage and
 * reimplement the PlaceholderImage::url() method (follow the documentation for
 * this method to check arguments and return).
 * 
 * For examples look at @p wordless/helpers/placeholder_images/lorem_pixel.php 
 * or @p wordless/helpers/placeholder_images/placehold.php.
 */