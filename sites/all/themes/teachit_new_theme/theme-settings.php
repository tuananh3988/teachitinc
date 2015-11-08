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
        '#title' => t('Grid content settings'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );
    
    for ($i = 1; $i <= 6; $i++) {
        $form['grid-setting']["block-$i"] = array(
            '#type' => 'fieldset',
            '#title' => t("Block $i"),
            '#collapsible' => TRUE,
            '#collapsed' => FALSE,
        );

        $form['grid-setting']["block-$i"]["title-$i"] = array(
            '#type' => 'textfield',
            '#title' => t('Title'),
            '#default_value' => empty(theme_get_setting("title-$i")) ? '' : theme_get_setting("title-$i"),
        );

        $form['grid-setting']["block-$i"]["desciption-$i"] = array(
            '#type' => 'textfield',
            '#title' => t('Desciption'),
            '#default_value' => empty(theme_get_setting("desciption-$i")) ? '' : theme_get_setting("desciption-$i"),
        );

        $form['grid-setting']["block-$i"]["media-$i"] = array(
            '#type' => 'radios',
            '#title' => t('Content'),
            '#default_value' => empty(theme_get_setting("media-$i")) ? 0 : theme_get_setting("media-$i"),
            '#options' => $mediaArr,
        );

        $form['grid-setting']["block-$i"]["media-value-$i"] = array(
            '#type' => 'textfield',
            '#title' => t('Url'),
            '#default_value' => empty(theme_get_setting("media-value-$i")) ? '' : theme_get_setting("media-value-$i"),
        );
        
        $form['grid-setting']["block-$i"]["media-thumbnail-$i"] = array(
            '#type' => 'textfield',
            '#title' => t('Video thumbnail'),
            '#default_value' => empty(theme_get_setting("media-thumbnail-$i")) ? '' : theme_get_setting("media-thumbnail-$i"),
        );

        $form['grid-setting']["block-$i"]["link-$i"] = array(
            '#type' => 'textfield',
            '#title' => t('Link'),
            '#default_value' => empty(theme_get_setting("link-$i")) ? '' : theme_get_setting("link-$i"),
        );
    }
    
}
