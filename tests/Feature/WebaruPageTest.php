<?php

test('the WebARU home page returns a successful response', function () {
    $response = $this->get(route('2026.home'));

    $response
        ->assertSuccessful()
        ->assertSee('มหาวิทยาลัยแห่งเมืองมรดกโลก');
});
