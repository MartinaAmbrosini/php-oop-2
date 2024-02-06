<?php

trait Language
{
    public $eng;
    public $ita;

    public function getLanguage()
    {
        return "$this->eng, $this->ita";
    }
}