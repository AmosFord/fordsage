<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/nav.php',                   // Custom nav modifications
  'lib/gallery.php',               // Custom [gallery] modifications
  'lib/extras.php',                // Custom functions
];
foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}
unset($file, $filepath);
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit) {
  array_pop($words);
  //add a ... at last article when more than limit word count
  return implode(' ', $words)."..."; } else {
  //otherwise
  return implode(' ', $words); }
}
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_post-list-options',
    'title' => 'Post List Options',
    'fields' => array (
      array (
        'key' => 'field_543f8a046d65e',
        'label' => 'Authors',
        'name' => 'authors',
        'type' => 'user',
        'instructions' => 'Select some users, only posts from these users will be shown',
        'role' => array (
          0 => 'all',
        ),
        'field_type' => 'multi_select',
        'allow_null' => 1,
      ),
      array (
        'key' => 'field_543f8a206d65f',
        'label' => 'Categories',
        'name' => 'categories',
        'type' => 'taxonomy',
        'instructions' => 'Select the categories to show posts from',
        'taxonomy' => 'category',
        'field_type' => 'multi_select',
        'allow_null' => 1,
        'load_save_terms' => 0,
        'return_format' => 'id',
        'multiple' => 0,
      ),
      array (
        'key' => 'field_543f8a496d660',
        'label' => 'Category Include/Exclude',
        'name' => 'cartegory_include_exclude',
        'type' => 'radio',
        'instructions' => 'Set weather to include or exclude the categories selected above. If include is selected only posts from the selected categories will be shown. If exclude is selected all posts which do not belong to the chosen categories will be shown. ',
        'choices' => array (
          'include' => 'Include',
          'exclude' => 'Exclude',
        ),
        'other_choice' => 0,
        'save_other_choice' => 0,
        'default_value' => 'include',
        'layout' => 'horizontal',
      ),
      array (
        'key' => 'field_543f8aa06d661',
        'label' => 'Post Status',
        'name' => 'post_status',
        'type' => 'checkbox',
        'instructions' => 'Select the post statuses to pull posts from ',
        'choices' => array (
          'publish' => 'Published',
          'future' => 'Scheduled',
          'draft' => 'Draft',
          'pending' => 'Pending',
          'trash' => 'Trash',
        ),
        'default_value' => 'publish',
        'layout' => 'vertical',
      ),
      array (
        'key' => 'field_543f8ae16d662',
        'label' => 'Post Type',
        'name' => 'post_type',
        'type' => 'checkbox',
        'instructions' => 'Set the post types to list',
        'choices' => array (
          'post' => 'Post',
          'page' => 'Page',
        ),
        'default_value' => 'post',
        'layout' => 'vertical',
      ),
      array (
        'key' => 'field_543f8aff6d663',
        'label' => 'Posts Per Page',
        'name' => 'posts_per_page',
        'type' => 'number',
        'instructions' => 'Set how many posts should be shown on a page',
        'required' => 1,
        'default_value' => 10,
        'placeholder' => 'Number of posts to show',
        'prepend' => '',
        'append' => '',
        'min' => '-1',
        'max' => '',
        'step' => 1,
      ),
      array (
        'key' => 'field_543f8b246d664',
        'label' => 'Order By',
        'name' => 'order_by',
        'type' => 'select',
        'instructions' => 'Set how you would like to order your posts',
        'choices' => array (
          'ID' => 'ID',
          'author' => 'Post Author',
          'title' => 'Post Title',
          'name' => 'Post Name',
          'type' => 'Post Type',
          'date' => 'Published Date',
          'modified' => 'Modification Dare',
          'rand' => 'Random',
          'comment_count' => 'Comment Count',
          'menu_order' => 'Menu Order',
          '' => '',
        ),
        'default_value' => 'date',
        'allow_null' => 0,
        'multiple' => 0,
      ),
      array (
        'key' => 'field_543f8b976d665',
        'label' => 'Order',
        'name' => 'order',
        'type' => 'radio',
        'instructions' => 'Set the ordering direction',
        'choices' => array (
          'ASC' => 'Ascending',
          'DESC' => 'Descending',
        ),
        'other_choice' => 0,
        'save_other_choice' => 0,
        'default_value' => 'DESC',
        'layout' => 'horizontal',
      ),
      array (
        'key' => 'field_543f8baf6d666',
        'label' => 'Has Featured Image',
        'name' => 'has_featured_image',
        'type' => 'true_false',
        'instructions' => 'If checked only posts with featured images will be used',
        'message' => 'Only posts with featured images?',
        'default_value' => 0,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-templates/post-list.php',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}