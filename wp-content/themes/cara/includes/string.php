<?php
/**
 * Text String / Translatable string used in tamatebako
 * @since 0.1.0
 */
function tamatebako_string($context)
{

    /* Open Sesame ! */
    $text = array();

    /* Paged Title Tag
     * Translators: 1 is the page title and separator. 2 is the page number.
     * Example Output: "{post title} | Page {page number}"
     */
    $text['paged'] = _x('%1$s Page %2$s', 'paged title tag', 'cara');

    /* Skip to content (accessibility) */
    $text['skip-to-content'] = _x('Skip to content', 'skip to content (accessibility)', 'cara');

    /* Read More */
    $text['read-more'] = _x('Continue reading', 'content read more', 'cara');

    /* Entry Permalink */
    $text['permalink'] = _x('Permalink', 'entry permalink', 'cara');

    /* Next, Previous */
    $text['next'] = _x('Next', 'next in pagination and navigation (accessibility)', 'cara');
    $text['previous'] = _x('Previous', 'previous in pagination and navigation (accessibility)', 'cara');

    /* Search */
    $text['search'] = _x('Search&hellip;', 'search text', 'cara');
    $text['search-button'] = _x('Search', 'search button (accessibility)', 'cara');
    $text['expand-search-form'] = _x('Expand Search Form', 'expand search form button (accessibility)', 'cara');

    /* Comments error */
    $text['comments-closed-pings-open'] = _x('Comments are closed, but trackbacks and pingbacks are open.', 'comments notice', 'cara');
    $text['comments-closed'] = _x('Comments are closed.', 'comments notice', 'cara');

    /* Content error */
    $text['error'] = _x('404 Not Found', '404 title', 'cara');
    $text['error-msg'] = _x('Apologies, but no entries were found.', '404 content', 'cara');

    /* Theme Layout */
    $text['global-layout'] = _x('Global Layout', 'theme layouts', 'cara');
    $text['layout'] = _x('Layout', 'theme layouts', 'cara');

    $text = apply_filters('tamatebako_string', $text);

    /* Close Sesame ! */
    if (isset($text[$context])) {
        return $text[$context];
    }
    return '';
}


/**
 * Text String / Translatable string used in this theme
 * To keep track on language usage and separate from Hybrid Core.
 * @since 0.1.0
 */
function cara_string($context)
{

    /* Open Sesame ! */
    $text = array();

    /* Register Menus */
    $text['menu-primary-name'] = _x('Navigation', 'nav menu location', 'cara');

    /* Register Sidebar */
    $text['sidebar-primary-name'] = _x('Widgets', 'sidebar name', 'cara');
    $text['sidebar-toggle-open'] = _x('Open Widgets', 'sidebar toggle button', 'cara');
    $text['sidebar-toggle-close'] = _x('Close Widgets', 'sidebar toggle button', 'cara');

    /* Custom Content Portfolio Project Link */
    $text['ccp-view-project'] = _x('View Project', 'custom content portfolio link', 'cara');

    $text = apply_filters('cara_string', $text);

    /* Close Sesame ! */
    if (isset($text[$context])) {
        return $text[$context];
    }
    return '';
}
