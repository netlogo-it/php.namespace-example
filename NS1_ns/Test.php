<?php

namespace NS1;

class Test
{
    private string $name='Mattia';

    public function __construct(){
        echo '*CLASS1: '.__CLASS__.'<br/>';
        echo '*NS1: '.__NAMESPACE__.'<br/>';
    }

    public function getName(): string
    {
        return $this->name.' OK';
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

}