<?php


if (! function_exists('use_local_content')) {
    function use_local_content(): bool
    {
        return config('app.env') === 'local';
    }
}