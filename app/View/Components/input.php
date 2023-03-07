<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{

    public $label;
    public $type;
    public $name;
     

     
    public function __construct($label=null,$type=null,$name=null)
    {
        $this->label=$label;
        $this->type=$type;
        $this->name=$name;
         
    }

    public function render()
    {
        return view('components.input');
    }
}
 ?>