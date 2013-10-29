<?php
// $Id: views-view-fields.tpl.php,v 1.6 2008/09/24 22:48:21 merlinofchaos Exp $
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->separator: an optional separator that may appear before a field.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<table class="views-field-<?php print $field->class; ?>" width="100%">
  <tr>
    <td colspan="3"><h3><?php print $fields['value_1']->content; ?></h3></td>
  </tr>
  <tr>
    <td rowspan="9" class="inspector_photo"><?php print $fields['picture']->content; ?></td>
  </tr>
  <tr>
    <td><strong><?php print $fields['value_3']->content; ?> <?php print $fields['value_4']->content; ?></strong></td>
    <td rowspan="2">certification level: <?php print $fields['value']->content; ?></td>
  </tr>
    <tr>
    <td><?php if(strlen($fields['value_6']->content) > 0) print 'National Certification #: ' . $fields['value_6']->content; ?></td>
  </tr>
    <tr>
    <td><strong>Ph: <?php print $fields['value_7']->content; ?> Fax: <?php print $fields['value_2']->content; ?></strong></td>
    <td rowspan="3">Services offered in: <?php print $fields['value_5']->content; ?></td>
  </tr>
  <tr>
    <td><?php if(!empty($fields['value_9']->content) && !preg_match('/^\<a href=\"\"/',$fields['value_9']->content)) print $fields['value_9']->content; ?></td>
  </tr>
  <tr>
    <td><?php print $fields['mail']->content; ?></td>
  </tr> 
</table>
<hr>