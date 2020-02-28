<?php


class Team
{
    protected $name;

    protected $members = [];

    public function __construct($name , $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function build(...$params)
    {
        return new self(...$params);
    }

    public function members()
    {
        return $this->members;
    }

    public function name()
    {
        return $this->name;
    }
}

// $team = new Team('OwayIT', [
//     'ZMM', 'MMZ'
// ]);

$team = Team::build('OwayIT', [
    'ZMM', 'MMZ'
]);

var_dump($team->members());