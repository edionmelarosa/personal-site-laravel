<?php

it('it should have home page', function () {
    $this->get('/')
        ->assertStatus(200)
        ->assertSee('I am Espiridion Larosa Jr. Freelance Full stack developer from Philippines.');
});
