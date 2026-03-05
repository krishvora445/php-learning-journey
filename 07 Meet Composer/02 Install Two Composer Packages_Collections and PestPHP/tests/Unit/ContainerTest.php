<?php

test('it can resolve something out from container', function () {
    $container = new Core\Container();

    $container->bind('foo', fn() => "bar");

    $result =$container->resolve('foo');

    expect($result)->toBe("bar");
});
