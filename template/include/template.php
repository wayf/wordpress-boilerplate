<?php
defined("ABSPATH") or exit();

add_theme_support("title-tag");
add_theme_support("post-thumbnails");

/**
 * template_get_manifest
 *
 * Load Vite manifest.json
 *
 * @return array | false
 */
function template_get_manifest()
{
  $manifest = get_theme_file_path("assets/.vite/manifest.json");
  if (file_exists($manifest)) {
    return json_decode(file_get_contents($manifest), true);
  }
  return false;
}

/**
 * template_enqueue_scripts
 *
 * Load Vite assets for the front-end
 *
 * @return void
 */
function template_enqueue_scripts()
{
  $manifest = template_get_manifest();
  if (is_array($manifest)) {
    foreach ($manifest as $item) {
      if ($item["name"] === "editor") {
        continue;
      }
      wp_enqueue_script("template-" . $item["name"], get_template_directory_uri() . "/assets/" . $item["file"], [], null, true);
      if (isset($item["css"])) {
        foreach ($item["css"] as $css) {
          wp_enqueue_style("template-" . $item["name"], get_template_directory_uri() . "/assets/" . $css, [], null);
        }
      }
    }
  }
}
add_action("wp_enqueue_scripts", "template_enqueue_scripts");
