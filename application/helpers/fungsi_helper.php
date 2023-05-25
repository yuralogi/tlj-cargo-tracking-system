<?php

function isLogin()
{
    $ci = &get_instance();

    $userSession = $ci->session->userdata('id_user');

    if ($userSession) {
        redirect('admin/dashboard');
    }
}

function notLogin()
{
    $ci = &get_instance();

    $userSession = $ci->session->userdata('id_user');

    if (!$userSession) {
        redirect('auth');
    }
}

function isAdminJakarta()
{
    $ci = &get_instance();
    $userSession = $ci->session->userdata('id_user');

    if ($userSession == 1) {
        redirect('admin/dashboard');
    }
}

function isAdminLampung()
{
    $ci = &get_instance();
    $userSession = $ci->session->userdata('id_user');

    if ($userSession == 2) {
        redirect('admin/dashboard');
    }
}

function createNoResi()
{
}
