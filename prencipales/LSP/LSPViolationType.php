<?php
namespace SOLID\LSP;
class LSPViolationType
{
    /**
     * @var int $salary
     */
    protected $salary;

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    public function calculateSalary(int $tax)
    {
        //pre condition
        if($tax<10)
        {
            echo 'the tax must be more than 10%';
            return ;
        }
        return $this->getSalary()-($this->getSalary()*$tax/100);

    }

}
