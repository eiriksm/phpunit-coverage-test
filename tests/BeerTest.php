<?php
use PHPUnit\Framework\TestCase;

class BeerTest extends TestCase {
  public function testGetHops() {
    $b = new Beer();
    $h = new Hop('saaz');
    $b->addHop($h);
    $this->assertCount(1, $b->getHops());
  }
}
