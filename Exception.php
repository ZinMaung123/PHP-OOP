<?php

class TeamException extends Exception
{
    public static function memberExceed(){
        return new static("Team Members Exceed.");
    }
}

class Team
{
    public $members = [];

    public function addMember(Member $member){
        if(count($this->members) === 3){
            // throw new TeamException("Team members exceed.");
            throw TeamException::memberExceed();
        }

        $this->members[] = $member;
    }
}

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$team = new Team();

try {
    $team->addMember(new Member("ZMM"));
    $team->addMember(new Member("ZMM"));
    $team->addMember(new Member("ZMM"));
    $team->addMember(new Member("ZMM"));
}catch(TeamException $e){
    var_dump($e->getMessage());
}
catch(Exception $e){
    echo("General Exception");
}