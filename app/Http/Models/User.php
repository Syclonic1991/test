<?php namespace App\Models;

/**
 * Eloquent class to describe the users table
 *
 * automatically generated by ModelGenerator.php
 */
class User extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'users';

    protected $fillable = array('name', 'email', 'password', 'remember_token');

    public function articlesCreatedBy()
    {
        return $this->hasMany('App\Models\Article', 'created_by_user_id', 'id');
    }

    public function articlesUpdatedBy()
    {
        return $this->hasMany('App\Models\Article', 'updated_by_user_id', 'id');
    }

    public function medicalServicesCreatedBy()
    {
        return $this->hasMany('App\Models\MedicalService', 'created_by_user_id', 'id');
    }

    public function medicalServicesUpdatedBy()
    {
        return $this->hasMany('App\Models\MedicalService', 'updated_by_user_id', 'id');
    }

    public function medicalTestComplexesCreatedBy()
    {
        return $this->hasMany('App\Models\MedicalTestComplex', 'created_by_user_id', 'id');
    }

    public function medicalTestComplexesUpdatedBy()
    {
        return $this->hasMany('App\Models\MedicalTestComplex', 'updated_by_user_id', 'id');
    }

    public function medicalTestsCreatedBy()
    {
        return $this->hasMany('App\Models\MedicalTest', 'created_by_user_id', 'id');
    }

    public function medicalTestsUpdatedBy()
    {
        return $this->hasMany('App\Models\MedicalTest', 'updated_by_user_id', 'id');
    }

    public function promotionsCreatedBy()
    {
        return $this->hasMany('App\Models\Promotions', 'created_by_user_id', 'id');
    }

    public function promotionsUpdatedBy()
    {
        return $this->hasMany('App\Models\Promotions', 'updated_by_user_id', 'id');
    }
}
