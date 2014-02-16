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

            <div class="thumbnail thumbnail-1"> <?php print $fields['picture']->content; ?>
              <div class="caption"><div class="company-name"><?php print $fields['value_1']->raw; ?></div>
                <p>
                    <span class="insp-name"><?php print $fields['value_3']->raw; ?> <?php print $fields['value_4']->raw; ?></span></br>
                    Certification: <?php print $fields['value']->raw; ?><br/>
                    National Certification #: <?php if (!empty($fields['value_6']->raw)) print $fields['value_6']->raw . "</br>"; else print ' No</br>'; ?>
                    Ph: <?php print $fields['value_7']->raw; ?> </br>
                    <a href="mailto:<?php print $fields['mail']->raw; ?>" class="inspector-email"><?php print $fields['mail']->raw; ?></a></br>
                    <div class="website-link"><?php if(!empty($fields['value_9']->raw)) print '<a href="' . $fields['value_9']->raw .'" target="_blank" class="btn website-btn">Company Website</a>';?></div>
                    <?php
                        if($is_admin){
                            print '</br><div>'. $fields['edit_node']->content .'</div>';   
                        }
                    ?>
                </p>
              </div>
            </div>