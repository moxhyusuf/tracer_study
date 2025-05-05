<?php

function is_logged_in()
{
    $CI = &get_instance();
    if (!$CI->session->userdata('username')) {
        redirect("/");
    }
}

function dd($data)
{
    var_dump($data);
    die();
}

function set_alert($message, $color)
{
    $CI = get_instance();
    $params = array(
        'message' => $message,
        'color' => $color
    );
    $CI->session->set_flashdata('alert', $params);
}
