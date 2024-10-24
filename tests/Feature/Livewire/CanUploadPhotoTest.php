<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CanUploadPhoto;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CanUploadPhotoTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CanUploadPhoto::class)
            ->assertStatus(200);
    }
}
