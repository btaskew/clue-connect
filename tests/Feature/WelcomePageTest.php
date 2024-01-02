<?php

use function Pest\Laravel\get;

it('returns a successful response', function () {
    get('/')->assertOk();
});

it('displays the app logo', function () {
    get('/')->assertSee('/logo.svg');
});
