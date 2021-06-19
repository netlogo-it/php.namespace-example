<?php

namespace NS2;

class Test
{
    private string $name='Francesco';

    public function __construct(){
        echo '*CLASS2: '.__CLASS__.'<br/>';
        echo '*NS2: '.__NAMESPACE__.'<br/>';
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