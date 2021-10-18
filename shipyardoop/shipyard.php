<?php

abstract class shipyard {
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function intro(): void;
}

class motorboat extends shipyard {
    public function intro() : void
    {
        echo "this is motorboat called: ".$this->name;
    }
}

class sailboat extends shipyard {
    public function intro() : void
    {
        echo "this is sailboat called: ".$this->name;
    }
}

class cruiseship extends shipyard {
    public function intro() : void
    {
        echo "this is cruiseship called: ".$this->name;
    }
}
