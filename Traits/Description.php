<?php

trait HasDescription
{
    protected $description;

    public function setDescription($desc)
    {
        $this->description = $desc;
    }

    public function getDescription()
    {
        return $this->description ?? "Nessuna descrizione disponibile.";
    }
}
