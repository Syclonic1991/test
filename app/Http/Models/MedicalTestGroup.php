<?php namespace App\Models;

/**
 * Eloquent class to describe the medical_test_groups table
 *
 * automatically generated by ModelGenerator.php
 */
class MedicalTestGroup extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'medical_test_groups';

    protected $fillable = array('name');

    public function medicalTests()
    {
        return $this->hasMany('App\Models\MedicalTest', 'medical_test_group_id', 'id');
    }
}
