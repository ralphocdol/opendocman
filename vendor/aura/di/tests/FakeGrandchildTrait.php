<?php
namespace Aura\Di;

trait FakeGrandchildTrait
{
    protected $grandchild_fake;

    public function setGrandchildFake($fake)
    {
        $this->grandchild_fake = $fake;
    }

    public function getGrandchildFake()
    {
        return $this->grandchild_fake;
    }
}