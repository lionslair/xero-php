<?php

namespace XeroPHP\Models\PayrollUS;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollUS\Employee\HomeAddress;
use XeroPHP\Models\PayrollUS\Employee\MailingAddress;
use XeroPHP\Models\PayrollUS\Employee\SalaryAndWage;
use XeroPHP\Models\PayrollUS\Employee\WorkLocation;
use XeroPHP\Models\PayrollUS\Employee\PaymentMethod;
use XeroPHP\Models\PayrollUS\Employee\PayTemplate;
use XeroPHP\Models\PayrollUS\Employee\OpeningBalance;

class Employee extends Remote\Object {

    /**
     * First name of employee (max length = 35)
     *
     * @property string FirstName
     */

    /**
     * Last name of employee (max length = 35)
     *
     * @property string LastName
     */

    /**
     * Date of birth of employee (YYYY-MM-DD)
     *
     * @property \DateTime DateOfBirth
     */

    /**
     * Employee home address. See HomeAddress
     *
     * @property HomeAddress HomeAddress
     */

    /**
     * Middle name(s) of the employee (max length = 35)
     *
     * @property string[] MiddleNames
     */

    /**
     * Job Title of the employee
     *
     * @property string JobTitle
     */

    /**
     * Employee email address
     *
     * @property string Email
     */

    /**
     * Gender of employee (M or F)
     *
     * @property string Gender
     */

    /**
     * See MailingAddress
     *
     * @property MailingAddress MailingAddress
     */

    /**
     * Phone number of employee
     *
     * @property string Phone
     */

    /**
     * Employee Number
     *
     * @property string EmployeeNumber
     */

    /**
     * Social Security Number of the employee (xxx-xx-xxxx)
     *
     * @property string SocialSecurityNumber
     */

    /**
     * Start date of employee (YYYY-MM-DD)
     *
     * @property \DateTime StartDate
     */

    /**
     * Xero unique identifier – PayScheduleID for the employee
     *
     * @property string PayScheduleID
     */

    /**
     * Employee group name
     *
     * @property string EmployeeGroupName
     */

    /**
     * See Employment Basis Types
     *
     * @property string EmploymentBasis
     */

    /**
     * HolidayGroupID of the employee
     *
     * @property string HolidayGroupID
     */

    /**
     * Boolean to specify if employee is authorised to approve time off
     *
     * @property bool IsAuthorisedToApproveTimeOff
     */

    /**
     * Boolean to specify if employee is authorised to approve timesheets
     *
     * @property bool IsAuthorisedToApproveTimesheets
     */

    /**
     * See SalaryAndWages
     *
     * @property SalaryAndWage[] SalaryAndWages
     */

    /**
     * See WorkLocations
     *
     * @property WorkLocation[] WorkLocations
     */

    /**
     * See PaymentMethods
     *
     * @property PaymentMethod PaymentMethod
     */

    /**
     * See PayTemplate
     *
     * @property PayTemplate PayTemplate
     */

    /**
     * See OpeningBalances
     *
     * @property OpeningBalance[] OpeningBalances
     */

    /**
     * Xero unique identifier for an Employee
     *
     * @property string EmployeeID
     */

    /**
     * See Employee Status Types
     *
     * @property string Status
     */

    /**
     * Last modified timestamp
     *
     * @property \DateTime UpdatedDateUTC
     */



    /*
    * Get the resource uri of the class (Contacts) etc
    *
    * @return string
    */
    public static function getResourceURI(){
        return 'Employees';
    }


    /*
    * Get the root node name.  Just the unqualified classname
    *
    * @return string
    */
    public static function getRootNodeName(){
        return 'Employee';
    }


    /*
    * Get the guid property
    *
    * @return string
    */
    public static function getGUIDProperty(){
        return 'EmployeeID';
    }


    /**
    * Get the stem of the API (core.xro) etc
    *
    * @return string|null
    */
    public static function getAPIStem(){
        return Remote\URL::API_PAYROLL;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_GET
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Hintable type
     *
     * @return array
     */
    public static function getProperties(){
        return array(
            'FirstName' => array (true, null),
            'LastName' => array (true, null),
            'DateOfBirth' => array (true, '\DateTime'),
            'HomeAddress' => array (true, 'PayrollUS\Employee\HomeAddress'),
            'MiddleNames' => array (false, null),
            'JobTitle' => array (false, null),
            'Email' => array (false, null),
            'Gender' => array (false, null),
            'MailingAddress' => array (false, 'PayrollUS\Employee\MailingAddress'),
            'Phone' => array (false, null),
            'EmployeeNumber' => array (false, null),
            'SocialSecurityNumber' => array (false, null),
            'StartDate' => array (false, '\DateTime'),
            'PayScheduleID' => array (false, null),
            'EmployeeGroupName' => array (false, null),
            'EmploymentBasis' => array (false, null),
            'HolidayGroupID' => array (false, null),
            'IsAuthorisedToApproveTimeOff' => array (false, null),
            'IsAuthorisedToApproveTimesheets' => array (false, null),
            'SalaryAndWages' => array (false, 'PayrollUS\Employee\SalaryAndWage'),
            'WorkLocations' => array (false, 'PayrollUS\Employee\WorkLocation'),
            'PaymentMethod' => array (false, 'PayrollUS\Employee\PaymentMethod'),
            'PayTemplate' => array (false, 'PayrollUS\Employee\PayTemplate'),
            'OpeningBalances' => array (false, 'PayrollUS\Employee\OpeningBalance'),
            'EmployeeID' => array (false, null),
            'Status' => array (false, null),
            'UpdatedDateUTC' => array (false, '\DateTime')
        );
    }


    /**
     * @return string
     */
    public function getFirstName(){
        return $this->_data['FirstName'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setFirstName($value){
        $this->_data['FirstName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(){
        return $this->_data['LastName'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setLastName($value){
        $this->_data['LastName'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth(){
        return $this->_data['DateOfBirth'];
    }

    /**
     * @param \DateTime $value
     * @return Employee
     */
    public function setDateOfBirth(\DateTime $value){
        $this->_data['DateOfBirth'] = $value;
        return $this;
    }

    /**
     * @return HomeAddress
     */
    public function getHomeAddress(){
        return $this->_data['HomeAddress'];
    }

    /**
     * @param HomeAddress $value
     * @return Employee
     */
    public function setHomeAddress(HomeAddress $value){
        $this->_data['HomeAddress'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleNames(){
        return $this->_data['MiddleNames'];
    }

    /**
     * @param string[] $value
     * @return Employee
     */
    public function addMiddleName($value){
        $this->_data['MiddleNames'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobTitle(){
        return $this->_data['JobTitle'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setJobTitle($value){
        $this->_data['JobTitle'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(){
        return $this->_data['Email'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmail($value){
        $this->_data['Email'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender(){
        return $this->_data['Gender'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setGender($value){
        $this->_data['Gender'] = $value;
        return $this;
    }

    /**
     * @return MailingAddress
     */
    public function getMailingAddress(){
        return $this->_data['MailingAddress'];
    }

    /**
     * @param MailingAddress $value
     * @return Employee
     */
    public function setMailingAddress(MailingAddress $value){
        $this->_data['MailingAddress'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(){
        return $this->_data['Phone'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setPhone($value){
        $this->_data['Phone'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeNumber(){
        return $this->_data['EmployeeNumber'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmployeeNumber($value){
        $this->_data['EmployeeNumber'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSocialSecurityNumber(){
        return $this->_data['SocialSecurityNumber'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setSocialSecurityNumber($value){
        $this->_data['SocialSecurityNumber'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(){
        return $this->_data['StartDate'];
    }

    /**
     * @param \DateTime $value
     * @return Employee
     */
    public function setStartDate(\DateTime $value){
        $this->_data['StartDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayScheduleID(){
        return $this->_data['PayScheduleID'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setPayScheduleID($value){
        $this->_data['PayScheduleID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeGroupName(){
        return $this->_data['EmployeeGroupName'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmployeeGroupName($value){
        $this->_data['EmployeeGroupName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmploymentBasis(){
        return $this->_data['EmploymentBasis'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmploymentBasis($value){
        $this->_data['EmploymentBasis'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getHolidayGroupID(){
        return $this->_data['HolidayGroupID'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setHolidayGroupID($value){
        $this->_data['HolidayGroupID'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAuthorisedToApproveTimeOff(){
        return $this->_data['IsAuthorisedToApproveTimeOff'];
    }

    /**
     * @param bool $value
     * @return Employee
     */
    public function setIsAuthorisedToApproveTimeOff($value){
        $this->_data['IsAuthorisedToApproveTimeOff'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAuthorisedToApproveTimesheets(){
        return $this->_data['IsAuthorisedToApproveTimesheets'];
    }

    /**
     * @param bool $value
     * @return Employee
     */
    public function setIsAuthorisedToApproveTimesheet($value){
        $this->_data['IsAuthorisedToApproveTimesheets'] = $value;
        return $this;
    }

    /**
     * @return SalaryAndWage
     */
    public function getSalaryAndWages(){
        return $this->_data['SalaryAndWages'];
    }

    /**
     * @param SalaryAndWage[] $value
     * @return Employee
     */
    public function addSalaryAndWage(SalaryAndWage $value){
        $this->_data['SalaryAndWages'][] = $value;
        return $this;
    }

    /**
     * @return WorkLocation
     */
    public function getWorkLocations(){
        return $this->_data['WorkLocations'];
    }

    /**
     * @param WorkLocation[] $value
     * @return Employee
     */
    public function addWorkLocation(WorkLocation $value){
        $this->_data['WorkLocations'][] = $value;
        return $this;
    }

    /**
     * @return PaymentMethod
     */
    public function getPaymentMethod(){
        return $this->_data['PaymentMethod'];
    }

    /**
     * @param PaymentMethod $value
     * @return Employee
     */
    public function setPaymentMethod(PaymentMethod $value){
        $this->_data['PaymentMethod'] = $value;
        return $this;
    }

    /**
     * @return PayTemplate
     */
    public function getPayTemplate(){
        return $this->_data['PayTemplate'];
    }

    /**
     * @param PayTemplate $value
     * @return Employee
     */
    public function setPayTemplate(PayTemplate $value){
        $this->_data['PayTemplate'] = $value;
        return $this;
    }

    /**
     * @return OpeningBalance
     */
    public function getOpeningBalances(){
        return $this->_data['OpeningBalances'];
    }

    /**
     * @param OpeningBalance[] $value
     * @return Employee
     */
    public function addOpeningBalance(OpeningBalance $value){
        $this->_data['OpeningBalances'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeID(){
        return $this->_data['EmployeeID'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmployeeID($value){
        $this->_data['EmployeeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(){
        return $this->_data['Status'];
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setStatu($value){
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDateUTC(){
        return $this->_data['UpdatedDateUTC'];
    }

    /**
     * @param \DateTime $value
     * @return Employee
     */
    public function setUpdatedDateUTC(\DateTime $value){
        $this->_data['UpdatedDateUTC'] = $value;
        return $this;
    }


}