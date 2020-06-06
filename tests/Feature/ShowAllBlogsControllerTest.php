<?php

it('it should have blogs page', function () {
    $this->get('/blogs')
        ->assertStatus(200);
        // ->assertSee('Here are the latest blogs I have written.');
});
