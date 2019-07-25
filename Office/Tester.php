<?php

namespace Office;

class Tester extends Employee
{
    public function work() : string
    {
        return "Je suis $this->firstName et je teste des trucs !";
    }

    public function getTestResults() : array
    {
       return ["test1" => "success", "test2" => "failure"];
    }
}
