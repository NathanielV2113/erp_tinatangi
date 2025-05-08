<?php

use Livewire\Component;

class WorkDaySelection extends Component
{
    public $workDays = [];
    public $dayOffs = [];

    public function updatedWorkDays()
    {
        // Remove selected work days from available day offs
        $this->dayOffs = array_diff($this->dayOffs, $this->workDays);
    }

    public function render()
    {
        return view('livewire.work-day-selection');
    }
}
