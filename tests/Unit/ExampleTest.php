<?php

it ("can return the sum of two number", function () {
    $sum = 5+2;
    $user = createUser();
    $this->assertEquals($sum, 7);
});