<?php

/**
 * KirbyBusted
 * Dead simple kirby asset busting.
 *
 * Example:
 * css(busted('assets/css/bundle.css'))
 * js(busted('assets/js/bundle.js'))
 *
 */

function busted ($path) {
  $file = (kirby()->roots()->index() . DS . $path);
  return file_exists($file)
    ? $path . '?v=' . filemtime($file)
    : $path;
}
