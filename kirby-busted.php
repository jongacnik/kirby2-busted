<?php

/**
 * KirbyBusted
 * Dead simple kirby asset busting. Assumes default kirby directory structure.
 *
 * Example:
 * css(busted('assets/css/bundle.css'))
 * js(busted('assets/js/bundle.js'))
 *
 */

function busted ($path) {
  $file = (__DIR__ . '/../../../' . $path);
  return file_exists($file)
    ? $path . '?v=' . filemtime($file)
    : $path;
}