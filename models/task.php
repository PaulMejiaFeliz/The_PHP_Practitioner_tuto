<?php

class task
{
    public $title;
    public $due;
    public $assignedTo;
    public $completed = false;

    // public function __construct($title, $due, $assignedTo)
    // {
    //     $this->title = $title;
    //     $this->due = DateTime::createFromFormat("d. m. Y", $due);
    //     $this->assignedTo = $assignedTo;
    // }

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }
}