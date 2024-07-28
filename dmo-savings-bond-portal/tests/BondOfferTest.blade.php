<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\BondOffer;
use App\Events\BondOfferCreated;

class BondOfferTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function create_a_bond_offer()
    {
        $bondOffer = BondOffer::factory()->create();
        $this->assertDatabaseHas('bond_offers', ['id' => $bondOffer->id]);
    }

    /** @test */
    public function update_a_bond_offer()
    {
        $bondOffer = BondOffer::factory()->create();
        $bondOffer->update(['name' => 'Updated Name']);
        $this->assertDatabaseHas('bond_offers', ['name' => 'Updated Name']);
    }

    /** @test */
    public function delete_a_bond_offer()
    {
        $bondOffer = BondOffer::factory()->create();
        $bondOffer->delete();
        $this->assertDeleted($bondOffer);
    }

    /** @test */
    public function a_bond_offer_has_many_subscriptions()
    {
        $bondOffer = BondOffer::factory()->create();
        $subscription = Subscription::factory()->create(['bond_offer_id' => $bondOffer->id]);
        $this->assertTrue($bondOffer->subscriptions->contains($subscription));
    }

    /** @test */
    public function it_fires_bond_offer_created_event()
    {
        Event::fake();

        $bondOffer = BondOffer::factory()->create();

        Event::assertDispatched(BondOfferCreated::class);
    }
}
