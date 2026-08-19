<?php

test('the WebARU home page renders the responsive hero carousel', function () {
    $response = $this->get(route('2026.home'));

    $response
        ->assertSuccessful()
        ->assertSee('มหาวิทยาลัยแห่งเมืองมรดกโลก')
        ->assertSee('slide-01-desktop.webp', false)
        ->assertSee('slide-01-mobile.webp', false)
        ->assertSee('slide-02-desktop.webp', false)
        ->assertSee('slide-02-mobile.webp', false)
        ->assertSee('fetchpriority="high"', false)
        ->assertSee('loading="lazy"', false)
        ->assertSee('aria-label="แสดงสไลด์ก่อนหน้า"', false)
        ->assertSee('aria-label="แสดงสไลด์ถัดไป"', false)
        ->assertSee(':aria-pressed="userPaused.toString()"', false);
});

test('the root and WebARU pages load independent Vite entries', function () {
    $this->get('/')
        ->assertSuccessful()
        ->assertSee('resources/css/app.css', false)
        ->assertSee('resources/js/app.js', false)
        ->assertDontSee('resources/css/webaru_2026.css', false)
        ->assertDontSee('resources/js/webaru_2026.js', false);

    $this->get(route('2026.home'))
        ->assertSuccessful()
        ->assertSee('resources/css/webaru_2026.css', false)
        ->assertSee('resources/js/webaru_2026.js', false)
        ->assertDontSee('resources/css/app.css', false)
        ->assertDontSee('resources/js/app.js', false);
});

test('the Hero carousel JavaScript supports pause states and lifecycle cleanup', function () {
    $script = file_get_contents(resource_path('js/webaru_2026.js'));

    expect($script)
        ->toContain("window.matchMedia('(prefers-reduced-motion: reduce)')")
        ->toContain("document.addEventListener('visibilitychange'")
        ->toContain('pauseForHover()')
        ->toContain('pauseForFocus()')
        ->toContain('togglePlay()')
        ->toContain('destroy()');
});
test('the Hero artwork uses the expected dimensions and file budgets', function () {
    $artwork = [
        'slide-01-desktop.webp' => ['width' => 1920, 'height' => 720, 'max_kilobytes' => 400],
        'slide-02-desktop.webp' => ['width' => 1920, 'height' => 720, 'max_kilobytes' => 400],
        'slide-01-mobile.webp' => ['width' => 768, 'height' => 1024, 'max_kilobytes' => 180],
        'slide-02-mobile.webp' => ['width' => 768, 'height' => 1024, 'max_kilobytes' => 180],
    ];

    foreach ($artwork as $filename => $expected) {
        $path = public_path('images/webaru_2026/hero/'.$filename);
        [$width, $height] = getimagesize($path);

        expect($path)
            ->toBeFile()
            ->and($width)->toBe($expected['width'])
            ->and($height)->toBe($expected['height'])
            ->and(filesize($path))->toBeLessThan($expected['max_kilobytes'] * 1024);
    }
});
