<?php
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
function notificationMsg($type, $message)
{
    // get notification message
    \Session::put($type, $message);
}

/**
 * Write Your Code..
 *
 * @return string
*/
function getFrontSetting($key)
{
    return FrontSetting::where('slug', $key)->value('content');
}
?>
