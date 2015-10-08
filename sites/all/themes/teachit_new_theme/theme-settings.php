<?php
/**
 * @file
 * Theme settings file for the Teachit new theme theme.
 */
require_once dirname(__FILE__).'/template.php';

/**
 * Implements hook_form_FORM_alter().
 */
function teachit_new_theme_form_system_theme_settings_alter(&$form, $form_state)
{
    // You can use this hook to append your own theme settings to the theme
    // settings form for your subtheme. You should also take a look at the
    // 'extensions' concept in the Omega base theme.
    $mediaArr = array(0 => t('Image'), 1 => t('Video'));
    
    $form['grid-setting'] = array(
        '#type' => 'fieldset',
        '#title' => t('Grid settings'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );

    $form['grid-setting']['block-1'] = array(
        '#type' => 'fieldset',
        '#title' => t('Block 1'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );

    $form['grid-setting']['block-1']['title-1'] = array(
        '#type' => 'textfield',
        '#title' => t('Title'),
        '#default_value' => empty(theme_get_setting('title-1')) ? '' : theme_get_setting('title-1'),
    );

    $form['grid-setting']['block-1']['desciption-1'] = array(
        '#type' => 'textfield',
        '#title' => t('Desciption'),
        '#default_value' => empty(theme_get_setting('desciption-1')) ? '' : theme_get_setting('desciption-1'),
    );

    $form['grid-setting']['block-1']['media-1'] = array(
        '#type' => 'radios',
        '#title' => t('Content'),
        '#default_value' => empty(theme_get_setting('media-1')) ? 0 : theme_get_setting('media-1'),
        '#options' => $mediaArr,
    );

    $form['grid-setting']['block-1']['media-value-1'] = array(
        '#type' => 'textfield',
        //'#title' => t('Desciption'),
        '#default_value' => empty(theme_get_setting('media-value-1')) ? '' : theme_get_setting('media-value-1'),
    );

    $form['grid-setting']['block-1']['link-1'] = array(
        '#type' => 'textfield',
        '#title' => t('Link'),
        '#default_value' => empty(theme_get_setting('link-1')) ? '' : theme_get_setting('link-1'),
    );
}
