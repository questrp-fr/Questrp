<?php
/*
 *    Questrp Template
 *    github.com/bijju089/questrp-theme
 *    LICENSE: MIT
 */


$template_file = 'page/main.tpl';

require_once('class/QuestrpUtil.php');
require_once('updatechecker.php');
require_once(ROOT_PATH . '/core/templates/backend_init.php');


$current_template->getEngine()->addVariables(QuestrpUtil::getSettingsToSmarty());
$current_template->getEngine()->addVariables([
        'TPL_PATH' => ROOT_PATH . '/custom/templates/Questrp/_settings/page/',
        'SETTINGS_TEMPLATE' => ROOT_PATH . '/custom/templates/Questrp/_settings/' . $template_file,
        'SUBMIT' => $language->get('general', 'submit'),
        'YES' => $language->get('general', 'yes'),
        'NO' => $language->get('general', 'no'),
        'BACK' => $language->get('general', 'back'),
        'ARE_YOU_SURE' => $language->get('general', 'are_you_sure'),
        'CONFIRM_DELETE' => $language->get('general', 'confirm_delete'),
        'NAME' => $language->get('admin', 'name'),
        'INFO' => $language->get('general', 'info'),
        'ENABLED' => $language->get('admin', 'enabled'),
        'DISABLED' => $language->get('admin', 'disabled'),
        'CHECK_AGAIN' => $language->get('admin', 'check_again'),
        'WARNING' => $language->get('general', 'warning'),

    // Questrp Main
        'QUESTRP_OUTDATED' => QuestrpUtil::getLanguage('main', 'questrp_outdated'),
        'QUESTRP_OUTDATED_INFO' => QuestrpUtil::getLanguage('main', 'questrp_outdated_info'),
        'DEBUG_LABEL' => QuestrpUtil::getLanguage('main', 'debug_label'),
        'QUESTRP_VER' => QuestrpUtil::getLanguage('frontend', 'template_version', [
            'version' => $template->getVersion(),
        ]),
        'QUESTRP_AUTHOR' => QuestrpUtil::getLanguage('frontend', 'template_author'),
        'ABOUT' => QuestrpUtil::getLanguage('frontend', 'about'),

    // Navigation
        'NAVIGATION' => QuestrpUtil::getLanguage('navigation', 'navigation'),
        'HOME_PAGE' => QuestrpUtil::getLanguage('navigation', 'home_page'),
        'THEME_PAGE' => QuestrpUtil::getLanguage('navigation', 'theme_page'),
        'COLOURS_PAGE' => QuestrpUtil::getLanguage('navigation', 'colours_page'),
        'NAVBAR_PAGE' => QuestrpUtil::getLanguage('navigation', 'navbar_page'),
        'CONNECTIONS_PAGE' => QuestrpUtil::getLanguage('navigation', 'connections_page'),
        'ADDONS_PAGE' => QuestrpUtil::getLanguage('navigation', 'addons_page'),
        'CARDCONTENT_PAGE' => QuestrpUtil::getLanguage('navigation', 'cardcontent_page'),
        'FOOTER_PAGE' => QuestrpUtil::getLanguage('navigation', 'footer_page'),
        'PORTAL_PAGE' => QuestrpUtil::getLanguage('navigation', 'portal_page'),
        'WELCOME_PAGE' => QuestrpUtil::getLanguage('navigation', 'welcome_page'),
        'CUSTOM_PAGE' => QuestrpUtil::getLanguage('navigation', 'custom_page'),
        'SEO_PAGE' => QuestrpUtil::getLanguage('navigation', 'seo_page'),
        'SUPPORT_PAGE' => QuestrpUtil::getLanguage('navigation', 'support_page'),

    // Home Page
        'REVIEW_INFO' => QuestrpUtil::getLanguage('home', 'review_info', [
           'riLinkStart' => '<a href=\'https://github.com/bijju089/questrp-theme\' target=\'_blank\'>',
           'riLinkEnd' => '</a>'
        ]),
        'UPDATE_AVAILABLE' => QuestrpUtil::getLanguage('home', 'update_available'),
        'DOWNLOAD_UPDATE' => QuestrpUtil::getLanguage('home', 'download_update'),
        'REQUIRE_SUPPORT' => QuestrpUtil::getLanguage('home', 'require_support'),
        'REQUIRE_SUPPORT_DESC' => QuestrpUtil::getLanguage('home', 'require_support_desc'),
        'JOIN_DISCORD' => QuestrpUtil::getLanguage('home', 'join_discord'),
        'RATE_QUESTRP' => QuestrpUtil::getLanguage('home', 'rate_theme'),
        'RATE_QUESTRP_DESC' => QuestrpUtil::getLanguage('home', 'rate_theme_desc'),
        'RATE_NOW' => QuestrpUtil::getLanguage('home', 'rate_now'),
        'DEV_INFO' => QuestrpUtil::getLanguage('home', 'dev_info'),

    // Theme Options
        'SHADOWEFFECTS_LABEL' => QuestrpUtil::getLanguage('theme', 'shadoweffects_label'),
        'THEMESWITCHER_LABEL' => QuestrpUtil::getLanguage('theme', 'themeswitcher_label'),
        'SHADOWEFFECTS_INFO_LABEL' => QuestrpUtil::getLanguage('theme', 'shadoweffects_info_label'),
        'DARKMODE_LABEL' => QuestrpUtil::getLanguage('theme', 'darkmode_label'),
        'PRELOADERVIEW_LABEL' => QuestrpUtil::getLanguage('theme', 'preloaderview_label'),
        'PRELOADERVIEW_INFO_LABEL' => QuestrpUtil::getLanguage('theme', 'preloaderview_info_label'),
        'PRELOADERTEXT_LABEL' => QuestrpUtil::getLanguage('theme', 'preloadertext_label'),
        'PRELOADERLOADING_LABEL' => QuestrpUtil::getLanguage('theme', 'preloaderloading_label'),
        'PRELOADERCOLOR_LABEL' => QuestrpUtil::getLanguage('theme', 'preloadercolor_label'),
        'PRELOADER_RED' => $language->get('general', 'red'),
        'PRELOADER_ORANGE' => $language->get('general', 'orange'),
        'PRELOADER_YELLOW' => $language->get('general', 'yellow'),
        'PRELOADER_OLIVE' => $language->get('general', 'olive'),
        'PRELOADER_GREEN' => $language->get('general', 'green'),
        'PRELOADER_TEAL' => $language->get('general', 'teal'),
        'PRELOADER_BLUE' => $language->get('general', 'blue'),
        'PRELOADER_VIOLET' => $language->get('general', 'violet'),
        'PRELOADER_PURPLE' => $language->get('general', 'purple'),
        'PRELOADER_PINK' => $language->get('general', 'pink'),
        'PRELOADER_BROWN' => $language->get('general', 'brown'),
        'PRELOADER_GRAY' => $language->get('general', 'grey'),
        'PRELOADER_BLACK' => QuestrpUtil::getLanguage('theme', 'preloader_black'),
        'PRELOADERSPEED_LABEL' => QuestrpUtil::getLanguage('theme', 'preloaderspeed_label'),
        'PRELOADER_SLOW' => QuestrpUtil::getLanguage('theme', 'preloader_slow'),
        'PRELOADER_NORMAL' => QuestrpUtil::getLanguage('theme', 'preloader_normal'),
        'PRELOADER_FAST' => QuestrpUtil::getLanguage('theme', 'preloader_fast'),
        'PRELOADERSTYLE_LABEL' => QuestrpUtil::getLanguage('theme', 'preloaderstyle_label'),
        'PRELOADER_DOUBLE' => QuestrpUtil::getLanguage('theme', 'preloader_double'),
        'PRELOADER_ELASTIC' => QuestrpUtil::getLanguage('theme', 'preloader_elastic'),

    // Navbar
        'MODERNNAV_INFO' => QuestrpUtil::getLanguage('navbar', 'modernnav_info'),
        'NAVBARLOGO_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbarlogo_label'),
        'NAVBARLOGO_INFO_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbarlogo_info_label'),
        'NAVBARBANNER_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbarbanner_label'),
        'NAVBARBANNER_INFO_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbarbanner_info_label'),
        'NAVBAREXCLUDE_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbarexclude_label'),
        'NAVBAREXCLUDE_INFO_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbarexclude_info_label', [
            'slashCodeStart' => '<code>',
            'slashCodeEnd' => '</code>'
        ]),
        'NAVBARTYPE_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbartype_label'),
        'NAVBARTYPE_INFO_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbartype_info_label'),
        'NAVBARSTYLE_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbarstyle_label'),
        'NAVBARSTYLE_INFO_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbarstyle_info_label'),
        'NAVBARELEGANT_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbarelegant_label'),
        'NAVBARDYNAMIC_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbardynamic_label'),
        'NAVBARMODERN_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbarmodern_label'),
        'NAVBARMINIMAL_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbarminimal_label'),
        'NAVBARCLEAN_LABEL' => QuestrpUtil::getLanguage('navbar', 'navbarclean_label'),
        'BTNCOLOUR_LABEL' => QuestrpUtil::getLanguage('navbar', 'btncolour_label'),
        'BTNENABLED_LABEL' => QuestrpUtil::getLanguage('navbar', 'btnenabled_label'),
        'UPLOAD_IMAGE' => QuestrpUtil::getLanguage('navbar', 'upload_image'),
        'UPLOAD_BANNER' => QuestrpUtil::getLanguage('navbar', 'upload_banner'),
        'SOCIAL_LINK' => QuestrpUtil::getLanguage('navbar', 'social_link'),


    // Connections
        // Discord
            'DISCORD_LABEL' => QuestrpUtil::getLanguage('connections', 'discord_label'),
            'DISCORDVIEW_LABEL' => QuestrpUtil::getLanguage('connections', 'discordview_label'),
            'DISCORDVIEW_INFO_LABEL' => QuestrpUtil::getLanguage('connections', 'discordview_info_label'),
            'DISCORDID_LABEL' => QuestrpUtil::getLanguage('connections', 'discordid_label'),
            'DISCORDID_INFO_LABEL' => QuestrpUtil::getLanguage('connections', 'discordid_info_label', [
                'moreinfoLinkStart' => '<a href=\'https://support.discord.com/hc/en-us/articles/206346498\' target=\'_blank\'>',
                'moreinfoLinkEnd' => '</a>'
            ]),

        // Minecraft
            'MINECRAFT_LABEL' => QuestrpUtil::getLanguage('connections', 'minecraft_label'),
            'MINECRAFTVIEW_LABEL' => QuestrpUtil::getLanguage('connections', 'minecraftview_label'),
            'MINECRAFTDOMAIN_LABEL' => QuestrpUtil::getLanguage('connections', 'minecraftdomain_label'),
            'MINECRAFTIP_LABEL' => QuestrpUtil::getLanguage('connections', 'minecraftip_label'),
            'MINECRAFTPORT_LABEL' => QuestrpUtil::getLanguage('connections', 'minecraftport_label'),
            'MINECRAFTSTYLE_LABEL' => QuestrpUtil::getLanguage('connections', 'minecraftstyle_label'),
            'MINECRAFTSTYLE_INFO_LABEL' => QuestrpUtil::getLanguage('connections', 'minecraftstyle_info_label'),
            'SIMPLE_LABEL' => QuestrpUtil::getLanguage('connections', 'simple_label'),
            'ADVANCED_LABEL' => QuestrpUtil::getLanguage('connections', 'advanced_label'),

    // Addons
        // WidgetBot
            'WIDGETBOT_INFO' => QuestrpUtil::getLanguage('addons', 'widgetbot_info', [
               'wbLinkStart' => '<a href=\'https://docs.widgetbot.io/embed/html-embed/tutorial/#setting-your-server\' target=\'_blank\'>',
               'wbLinkEnd' => '</a>'
            ]),
            'SERVERID_LABEL' => QuestrpUtil::getLanguage('addons', 'serverid_label'),
            'SERVERID_INFO_LABEL' => QuestrpUtil::getLanguage('addons', 'serverid_info_label'),
            'CHANNELID_LABEL' => QuestrpUtil::getLanguage('addons', 'channelid_label'),
            'CHANNELID_INFO_LABEL' => QuestrpUtil::getLanguage('addons', 'channelid_info_label'),

    // Card
        'CARD_TITLE' => QuestrpUtil::getLanguage('card', 'card_title'),
        'CARD_LINK' => QuestrpUtil::getLanguage('card', 'card_link'),
        'CARD_VISIBLEIMAGE' => QuestrpUtil::getLanguage('card', 'card_visibleimage'),
        'CARD_HIDENIMAGE' => QuestrpUtil::getLanguage('card', 'card_hidenimage'),
        'CUSTOM_CONTENT_NOT_SET' => QuestrpUtil::getLanguage('card', 'custom_content_not_set'),
        'CARDCONTENT_INFO' => QuestrpUtil::getLanguage('card', 'cardcontent_info'),

    // Welcome Section
        'WELCOMESECTION_INFO_LABEL' => QuestrpUtil::getLanguage('welcome', 'welcomesection_info_label'),
        'WELCOMESECTION_LABEL' => QuestrpUtil::getLanguage('welcome', 'welcomesection_label'),
        'WELCOMEHEADER_LABEL' => QuestrpUtil::getLanguage('welcome', 'welcomeheader_label'),
        'WELCOMEDESCRIPTION_LABEL' => QuestrpUtil::getLanguage('welcome', 'welcomedescription_label'),

    // Footer
        'FOOTERABOUT_LABEL' => QuestrpUtil::getLanguage('options', 'footerabout_label'),
        'FOOTERABOUT_PLACEHOLDER_LABEL' => QuestrpUtil::getLanguage('options', 'footerabout_placeholder_label'),

    // Portal
        'PORTAL_INFO' => QuestrpUtil::getLanguage('portal', 'portal_info', [
           'piLinkStart' => '<a href=\'https://wiki.devnex.pro/questrp-namelessmc\' target=\'_blank\'>',
           'piLinkEnd' => '</a>'
        ]),
        'PORTAL_NOT_SET' => QuestrpUtil::getLanguage('portal', 'portal_not_set'),
        'PORTAL_BTN_TITLE' => QuestrpUtil::getLanguage('portal', 'portal_btn_title'),
        'PORTAL_BTN_LINK' => QuestrpUtil::getLanguage('portal', 'portal_btn_link'),
        'PORTAL_BTN_ICON' => QuestrpUtil::getLanguage('portal', 'portal_btn_icon'),


    // Custom Code
        'CUSTOMCSS_LABEL' => QuestrpUtil::getLanguage('options', 'customcss_label'),
        'CUSTOMCSS_INFO_LABEL' => QuestrpUtil::getLanguage('options', 'customcss_info_label'),
        'CUSTOMJS_LABEL' => QuestrpUtil::getLanguage('options', 'customjs_label'),
        'CUSTOMJS_INFO_LABEL' => QuestrpUtil::getLanguage('options', 'customjs_info_label'),
        'LEAVE_BLANK_TO_DISABLE' => QuestrpUtil::getLanguage('custom', 'leave_blank_to_disable'),

    // SEO
        'MOREOPTIONS_LABEL' => QuestrpUtil::getLanguage('seo', 'moreoptions_label'),
        'MOREOPTIONS' => QuestrpUtil::getLanguage('seo', 'moreoptions'),
        'KEYWORDS_LABEL' => QuestrpUtil::getLanguage('seo', 'keywords_label'),
        'KEYWORDS_INFO_LABEL' => QuestrpUtil::getLanguage('seo', 'keywords_info_label'),
]);

if (isset($_POST['sel_btn_session'])) {
    Session::flash('sel_btn_session', $_POST['sel_btn_session']);
}

if (!isset($_POST['sel_btn'])) {
    if (Input::exists()) {
        $errors = [];

        foreach ($_POST as $key => $value) {
            if ($key == 'token' or $key == 'sel_btn_session') {
                continue;
            }
            QuestrpUtil::updateOrCreateParam($key, $value);
        }

        if (empty($errors)) {
            Session::flash('staff', $language->get('admin', 'successfully_updated'));
            Redirect::to(URL::build($_SESSION['last_page']));
            die();
        }
    }
}

if (Session::exists('staff'))
    $success = Session::flash('staff');
    QuestrpUtil::ensureAllParamsExist();
    $TPL_NAME_SESSION = '';

if (Session::exists('sel_btn_session'))
    $TPL_NAME_SESSION = Session::flash('sel_btn_session');

$current_template->getEngine()->addVariables([
    'TPL_NAME_SESSION' => $TPL_NAME_SESSION
]);


if (isset($success))
    $current_template->getEngine()->addVariables([
        'SUCCESS' => $success,
        'SUCCESS_TITLE' => $language->get('general', 'success')
    ]);

if (isset($errors) && count($errors))
    $current_template->getEngine()->addVariables([
        'ERRORS' => $errors,
        'ERRORS_TITLE' => $language->get('general', 'error')
    ]);

$current_template->getEngine()->addVariables([
    'TOKEN' => Token::get(),
]);