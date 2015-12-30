<?php

require TEMPLATEPATH.'/framework/theme.php';
$theme = new Theme(array(
  'menus' => array(
    'nav' => 'Navigation'
  ),
  'images' => array(
    'post' => array(
      array('thumb', 500, 214, true)
    )
  )
));

/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

?>
