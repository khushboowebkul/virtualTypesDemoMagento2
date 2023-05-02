<?php
/**
 * Webkul Software.
 *
 * @category  Webkul
 * @package   Webkul_Module
 * @author    Webkul Software Private Limited
 * @copyright Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */
namespace Webkul\Module\Model;

class Employee
{
    /**
     * @var array
     */
    private $empattribute;
    
    /**
     * Construct method
     * 
     * @param array $empattribute
     * @return void
     */
    public function __construct(array $empattribute = [])
    {
        $this->empattribute = $empattribute;
    }

    /**
     * Get Employee Data
     * 
     * @return array
     */
    public function getEmployeeData()
    {
        return $this->empattribute;
    }
}