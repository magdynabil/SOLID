<?php
namespace SOLID\LSP;
class LSPViolationSubType extends LSPViolationType
{
    //precondition cannot be strengthened in a subtype
    //postCondition cannot be weakened in a subtype
    public function calculateSalary(int $tax)
    {
        //pre condition
        if($tax<15)
        {
            echo 'the tax must be more than 15%';
            return ;
        }
        return $this->getSalary()-($this->getSalary()*($tax+2)/100);

    }

}
