<?php
// THEME FILEMTIME: This returns the timestamp of a file's modification time within the theme
// $file: Relative path to the theme file
function singular_child_theme_filemtime( $file ) {
  return filemtime( get_theme_file_path().$file );
}
?>