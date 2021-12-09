<?php
function siteUrl($path = '')
{
    global $app;
    $url =  $app['url'];
    echo $url . $path;
}


function redirectTo($path)
{
    global $app;
    $url =  $app['url'];
    $url . $path;
    header('Location: ' . $url . $path);
    exit;
}

/**
 * return date and time in the correct
 * mysqi 'datetime' format
 *
 * @return string
 */
function getFormattedDateTime()
{
    return  date('Y-m-d H:i:s');
}



/**
 * determine if current page is an admin page
 *
 * @return boolean
 */
function isAdminPage()
{
    // Getting Slug
    $uri = $_SERVER['REQUEST_URI'];
    $string_to_check_for = '/admin';
    if (strpos($uri, $string_to_check_for) === false) {
        return false;
    } else {
        return true;
    }
}
