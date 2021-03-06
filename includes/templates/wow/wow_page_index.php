<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo WoW_Locale::GetLocale(LOCALE_DOUBLE); ?>" lang="<?php echo WoW_Locale::GetLocale(LOCALE_DOUBLE); ?>">
<?php
WoW_Template::LoadTemplate('block_header');
?>
<body class="<?php echo WoW_Template::GetPageData('body_class'); ?>">
    <div id="wrapper">
        <div id="header">
            <div id="search-bar">
                <form action="/wow/search" method="get" id="search-form">
                    <div>
                        <input type="submit" id="search-button" value="" tabindex="41" /> <input type="text" name="q" id="search-field" maxlength="200" tabindex="40" alt="<?php echo WoW_Locale::GetString('template_search_site');?>" value="<?php echo WoW_Search::GetSearchQuery() != null ? WoW_Search::GetSearchQuery() : WoW_Locale::GetString('template_search_site'); ?>" />
                    </div>
                </form>
            </div>
            <h1 id="logo"><a href="/wow/">World of Warcraft</a></h1>
            <div class="header-plate-wrapper header-plate">
<?php
WoW_Template::PrintMainMenu();
if(WoW_Account::IsLoggedIn()) {
    WoW_Template::LoadTemplate('block_user_meta_auth');
}
else {
    WoW_Template::LoadTemplate('block_user_meta');
}
?>
            </div>
        </div>
<?php
// <div id="content"> starts here!
switch(WoW_Template::GetPageIndex()) {
    default:
    case 'index':
        WoW_Template::LoadTemplate('content_index');
        break;
    case 'item':
        WoW_Template::LoadTemplate('content_item_page');
        break;
    case 'item_list':
        WoW_Template::LoadTemplate('content_item_table');
        break;
    case 'character_profile_simple':
        WoW_Template::LoadTemplate('content_character_profile_simple');
        break;
    case 'character_profile_advanced':
        WoW_Template::LoadTemplate('content_character_profile_advanced');
        break;
    /*
    case 'character_talents':
        WoW_Template::LoadTemplate('content_character_talents');
        break;
    */
    case '404':
        WoW_Template::LoadTemplate('content_404');
        break;
    case 'guild_page':
        WoW_Template::LoadTemplate('content_guild_page');
        break;
    case 'guild_perks':
        WoW_Template::LoadTemplate('content_guild_perks');
        break;
    case 'guild_roster':
        WoW_Template::LoadTemplate('content_guild_roster');
        break;
    case 'guild_professions':
        WoW_Template::LoadTemplate('content_guild_professions');
        break;
    case 'character_achievements':
        WoW_Template::LoadTemplate('content_character_achievements');
        break;
    case 'character_reputation':
        WoW_Template::LoadTemplate('content_character_reputation');
        break;
    case 'character_reputation_tabular':
        WoW_Template::LoadTemplate('content_character_reputation_tabular');
        break;
    case 'character_pvp':
        WoW_Template::LoadTemplate('content_character_pvp');
        break;
    case 'character_statistics':
        WoW_Template::LoadTemplate('content_character_statistics');
        break;
    case 'character_feed':
        WoW_Template::LoadTemplate('content_character_feed');
        break;
    case 'search':
        WoW_Template::LoadTemplate('content_search');
        break;
    case 'realm_status':
        WoW_Template::LoadTemplate('content_realm_status');
        break;
    case 'blog':
        WoW_Template::LoadTemplate('content_blog');
        break;
    case 'game':
        WoW_Template::LoadTemplate('static_game_index');
        break;
    case 'account_status':
        WoW_Template::LoadTemplate('content_account_status');
        break;
}
WoW_Template::LoadTemplate('block_footer', true);
WoW_Template::LoadTemplate('block_service', true);
?>
    </div>
<?php
WoW_Template::LoadTemplate('block_js_messages', true);
?>
<script type="text/javascript" src="/wow/static/local-common/js/menu.js?v15"></script>
<script type="text/javascript" src="/wow/static/js/wow.js?v4"></script>
<script type="text/javascript">
friendData = [
];
$(function(){
    //
    Menu.initialize('/data/menu.json');
    Search.init('/ta/lookup');
});
</script>
<!--[if lt IE 8]> <script type="text/javascript" src="/wow/static/local-common/js/third-party/jquery.pngFix.pack.js?v15"></script>
<script type="text/javascript">$('.png-fix').pngFix();</script>
<![endif]-->
<script type="text/javascript" src="/wow/static/local-common/js/cms.js?v4"></script>
<?php
switch(WoW_Template::GetPageData('page')) {
    case 'character_profile':
        echo '<script type="text/javascript" src="/wow/static/js/profile.js?v4"></script>
<script type="text/javascript" src="/wow/static/js/character/summary.js?v4"></script>';
        break;
    case 'character_talents':
        echo '<script type="text/javascript" src="/wow/static/js/profile.js?v4"></script>
<script type="text/javascript" src="/wow/static/js/character/talent.js?v6"></script>
<script type="text/javascript" src="/wow/static/js/tool/talent-calculator.js?v6"></script>';
        break;
    case 'character_achievements':
        echo '<script type="text/javascript" src="/wow/static/js/profile.js?v7"></script>
<script type="text/javascript" src="/wow/static/js/character/achievement.js?v7"></script>';
        break;
    case 'character_feed':
        echo '<script type="text/javascript" src="/wow/static/js/profile.js?v6"></script>';
        break;
    case 'item':
        echo '<script type="text/javascript" src="/wow/static/js/wiki/wiki.js?v10"></script>
<script type="text/javascript" src="/wow/static/js/wiki/item.js?v10"></script>
<script type="text/javascript" src="/wow/static/local-common/js/table.js?v19"></script>
<script type="text/javascript" src="/wow/static/local-common/js/cms.js?v19"></script>
<script type="text/javascript" src="/wow/static/local-common/js/filter.js?v19"></script>
<script type="text/javascript" src="/wow/static/local-common/js/utility/model-rotator.js?v19"></script>';
        break;
    case 'guild_page':
    case 'guild_perks':
    case 'guild_roster':
    case 'guild_professions':
        if(in_array(WoW_Template::GetPageData('page'), array('guild_roster', 'guild_professions'))) {
            echo '<script type="text/javascript" src="/wow/static/local-common/js/table.js?v17"></script>
<script type="text/javascript" src="/wow/static/local-common/js/filter.js?v17"></script>
<script type="text/javascript" src="/wow/static/local-common/js/dropdown.js?v17"></script>
';
        }
        if(WoW_Template::GetPageData('page') == 'guild_professions') {
            echo '<script type="text/javascript" src="/wow/static/js/guild/professions.js?v7"></script>';
        }
        echo '<script type="text/javascript" src="/wow/static/js/profile.js?v6"></script>
<script type="text/javascript" src="/wow/static/js/character/guild-tabard.js?v6"></script>
<script type="text/javascript" src="/wow/static/js/guild/guild.js?v7"></script>';
        break;
    case 'search':
        echo '<script type="text/javascript" src="/wow/static/local-common/js/table.js?v16"></script>
<script type="text/javascript" src="/wow/static/js/character/guild-tabard.js?v7"></script>';
        break;
    case 'realm_status':
        echo '<script type="text/javascript" src="/wow/static/local-common/js/table.js?v16"></script>
<script type="text/javascript" src="/wow/static/local-common/js/filter.js?v16"></script>
<script type="text/javascript" src="/wow/static/js/services/realm-status.js?v7"></script>';
        break;
    case 'character_reputation':
        echo '<script type="text/javascript" src="/wow/static/local-common/js/table.js?v16"></script>
<script type="text/javascript" src="/wow/static/js/profile.js?v7"></script>
<script type="text/javascript" src="/wow/static/js/character/reputation.js?v7"></script>';
        break;
    case 'character_pvp':
        echo '<script type="text/javascript" src="/wow/static/local-common/js/table.js?v16"></script>
<script type="text/javascript" src="/wow/static/local-common/js/dropdown.js?v16"></script>
<script type="text/javascript" src="/wow/static/js/profile.js?v7"></script>
<script type="text/javascript" src="/wow/static/js/character/pvp.js?v7"></script>
<script type="text/javascript" src="/wow/static/js/character/arena-flag.js?v7"></script>
<script type="text/javascript" src="/wow/static/js/pvp/arena.js?v7"></script>';
        break;
    case 'character_statistics':
        echo '<script type="text/javascript" src="/wow/static/js/profile.js?v7"></script>
<script type="text/javascript" src="/wow/static/js/character/statistic.js?v7"></script>';
        break;
    case 'blog':
        echo '<script type="text/javascript" src="/wow/static/local-common/js/lightbox.js?v17"></script>';
        break;
}
?>

<script type="text/javascript">
//<![CDATA[
    Core.load("/wow/static/local-common/js/overlay.js?v15");
    Core.load("/wow/static/local-common/js/search.js?v16");
    Core.load("/wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?v15");
    Core.load("/wow/static/local-common/js/third-party/jquery.mousewheel.min.js?v15");
    Core.load("/wow/static/local-common/js/third-party/jquery.tinyscrollbar.min.js?v15");
    Core.load("/wow/static/local-common/js/login.js?v15", false, function() {
        Login.embeddedUrl = '/login/login.frag';
    });
//]]>
</script>
</body>
</html>