<?php
namespace App\Http\costume;
use App\Models\Divisions;

class ArrayLibrary
{
    public static function getUserType()
    {
        $userType = [
            1       => "Super Admin",
            2       => "Admin",
            3       => "User",
        ];
        ksort($userType);
        return $userType;
    }
    public static function getDesignation()
    {
        $designation =
            [
            1       => "Full Stack Developer",
        ];
        asort($designation);
        return $designation;
    }
    public static function getDepartment()
    {
        $department = [
            1       => "Software",
        ];
        asort($department);
        return $department;
    }
    public static function getLeaveType()
    {
        $leaveType = [
            1       => "Annual",
            2       => "Casual",
            3       => "Sick",
        ];
        asort($leaveType);
        return $leaveType;
    }
    public static function getGender()
    {
        $gender = [
            'M' => 'Male',
            'F' => 'Female',
            'O' => 'Other',
        ];
        ksort($gender);
        return $gender;
    }
    public static function getBloodGroup()
    {
        $bloodGroup = [
            '1'     => 'A+',
            '2'     => 'A-',
            '3'     => 'B+',
            '4'     => 'B-',
            '5'     => 'AB+',
            '6'     => 'AB-',
            '7'     => 'O+',
            '8'     => 'O-',
        ];
        ksort($bloodGroup);
        return $bloodGroup;
    }
    public static function getMaritalStatus()
    {
        $maritalStatus = [
            '1'     => 'Single',
            '2'     => 'Married',
            '3'     => 'Divorced',
            '4'     => 'Widowed',
        ];
        ksort($maritalStatus);
        return $maritalStatus;
    }
    public static function getReligion()
    {
        $religion = [
            '1'     => 'Islam',
            '2'     => 'Hinduism',
            '3'     => 'Buddhism',
            '4'     => 'Christianity',
            '5'     => 'Sikhism',
            '6'     => 'Judaism',
            '7'     => 'Bahá’í',
            '8'     => 'Jainism',
            '9'     => 'Shinto',
            '10'    => 'Zoroastrianism',
            '11'    => 'Taoism',
            '12'    => 'Paganism',
            '13'    => 'Atheism',
            '14'    => 'Agnosticism',
            '15'    => 'Others',
        ];
        ksort($religion);
        return $religion;
    }
    public static function getNationality()
    {
        $nationality = [
            '1' => 'Bangladeshi',
            '2' => 'Indian',
            '3' => 'Pakistani',
        ];
        ksort($nationality);
        return $nationality;
    }
    public static function getDivisions()
    {
        // division data return feom division model two dimentional array key value
        $divisions = Divisions::select('id', 'name')->get()->toArray();
        ksort($divisions);
        return $divisions;
    }


}
