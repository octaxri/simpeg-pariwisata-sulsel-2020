<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('admin_path'))
{
    function admin_path()
    {
        return 'admin';
    }
}

if ( ! function_exists('pegawai_path'))
{
    function pegawai_path()
    {
        return 'pegawai';
    }
}

if ( ! function_exists('skpd_path'))
{
    function skpd_path()
    {
        return 'skpd';
    }
}

if ( ! function_exists('admin_assets'))
{
    function admin_assets($url = NULL)
    {
        $link = ($url)? $url.'/' : '';
        return base_url('public/adminpage').'/'.$link;
    }
}

if ( ! function_exists('home_assets'))
{
    function home_assets($url = NULL)
    {
        $link = ($url)? $url.'/' : '';
        return base_url('public/homepage').'/'.$link;
    }
}
//this is a new helper for homeNew
if ( ! function_exists('home_assets_new'))
{
    function home_assets_new($url = NULL)
    {
        $link = ($url)? $url.'/' : '';
        return base_url('public/homepageNew').'/'.$link;
    }
}

if ( ! function_exists('assets_url'))
{
    function assets_url($url = NULL)
    {
        $link = ($url)? $url.'/' : '';
        return base_url('public/assets').'/'.$link;
    }
}

if ( ! function_exists('admin_url'))
{
    function admin_url($url = NULL)
    {
        $link = ($url)? '/'.$url : '';
        return site_url(admin_path()).$link;
    }
}

if ( ! function_exists('pegawai_url'))
{
    function pegawai_url($url = NULL)
    {
        $link = ($url)? '/'.$url : '';
        return site_url(pegawai_path()).$link;
    }
}

if ( ! function_exists('skpd_url'))
{
    function skpd_url($url = NULL)
    {
        $link = ($url)? '/'.$url : '';
        return site_url(skpd_path()).$link;
    }
}

if ( ! function_exists('login_url'))
{
    function login_url($url = NULL)
    {
        $link = ($url)? '/'.$url : '';
        return site_url('login').$link;
    }
}

if ( ! function_exists('upload_path'))
{
    function upload_path($path = NULL)
    {
        $link = ($path)? $path.'/' : '';
        return 'public/uploads/'.$link;
    }
}

if ( ! function_exists('upload_url'))
{
    function upload_url($url = NULL)
    {
        $link = ($url)? $url.'/' : '';
        return site_url(upload_path()).$link;
    }
}
