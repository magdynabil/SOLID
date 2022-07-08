<?php
namespace SOLID\LSP;
class LSPViolation
{
   public function calculateSalaryOfEmployee(LSPViolationType $LSPViolationType,int $tax)
   {
       return $LSPViolationType->calculateSalary($tax);

   }

}
