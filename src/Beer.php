<?php


class Beer {
  private $hops = [];

  public function addHop(Hop $hop) {
    $this->hops[] = $hop;
  }

  public function getHops() {
    return $this->hops;
  }
}
