<?php

class Episodio
{
    public function __construct(
        public readonly Serie  $serie,
    ) {

    }
}