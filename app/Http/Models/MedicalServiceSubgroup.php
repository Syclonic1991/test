<?php namespace App\Models;

/**
 * Eloquent class to describe the medical_service_subgroups table
 *
 * automatically generated by ModelGenerator.php
 */
class MedicalServiceSubgroup extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'medical_service_subgroups';

    protected $fillable = array('name');

    public function medicalServices()
    {
        return $this->hasMany('App\Models\MedicalService', 'subgroup_id', 'id');
    }
}
