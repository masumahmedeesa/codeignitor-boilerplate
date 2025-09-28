<?php

if (!function_exists('asset_url')) {
    function asset_url($path = '')
    {
        return base_url('/ejoining/public/' . ltrim($path, '/'));
    }
}
