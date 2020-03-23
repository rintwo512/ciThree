<?php


function cek_login()
{
    $wt = get_instance();
    if (!$wt->session->userdata('email')) {
        redirect('auth');
    }
}
function akses()
{
    $wt = get_instance();
    if ($wt->session->userdata('level') != "Admin") {
        redirect('auth/blocked');
    }
}


function time_zone()
{
    date_default_timezone_set("Asia/Makassar");
}