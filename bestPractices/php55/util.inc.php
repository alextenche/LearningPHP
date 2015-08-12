<?php
/**
 * @file
 * General utility functions.
 */

/**
 * Autoload classes.
 * @param string $class_name
 */
function __autoload($class_name) {
  include 'classes/' . $class_name . '.php';
}

/**
 * Quick and dirty debugging; exports variable in preformatted tags.
 * @param mixed $variable
 * @return string
 */
function debug($variable) {
  return '<pre>' . var_export($variable, TRUE) . '</pre>';
}

/**
 * Render an HTML message.
 *
 * @param string $type
 *   Message type; error, ok, question, warning, info.
 * @param mixed $content
 *   string - The contents of the message.
 *   array - Keys heading, body.
 *
 * @return string
 *   HTML message.
 */
function renderMsg($type, $content) {
  switch ($type) {
    case 'error':{
      $heading = 'Error:';
      break;
    }
    case 'success':{
      $heading = 'Success:';
      break;
    }
    case 'info':{
      $heading = 'Information:';
      break;
    }
    case 'debug':{
      $heading = 'Debug:';
      break;
    }
  }
  if (is_array($content)) {
    if (isset($content['heading'])) {
      $heading = $content['heading'];
    }
    if (isset($content['body'])) {
      $body = $content['body'];
    }
  }
  else {
    $body = $content;
  }
  $html = '<div class="alert alert-' . $type . '">';
  if ('' != $heading) {
    $html .= '<strong>' . $heading . '</strong> ';
  }
  if ($type == 'debug') {
    $html .= '<tt><pre>' . var_export($body, TRUE) . '</pre></tt>';
  }
  else {
    $html .= $body;
  }
  $html .= '</div>';
  return $html;
}
