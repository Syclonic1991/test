<?php namespace App\Models;

/**
 * Eloquent class to describe the medical_tests table
 *
 * automatically generated by ModelGenerator.php
 */
class MedicalTest extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'medical_tests';

    public function getDates()
    {
        return array('deleted_at');
    }

    protected $fillable = array('code', 'name', 'material', 'preparation', 'result', 'term', 'description', 'price',
        'price_with_discount', 'test_method', 'is_promoted', 'deleted_at');

    public function medicalTestGroups()
    {
        return $this->belongsTo('App\Models\MedicalTestGroups', 'medical_test_group_id', 'id');
    }

    public function usersCreatedBy()
    {
        return $this->belongsTo('App\Models\Users', 'created_by_user_id', 'id');
    }

    public function usersUpdatedBy()
    {
        return $this->belongsTo('App\Models\Users', 'updated_by_user_id', 'id');
    }

    public function medicalTestsInComplex()
    {
        return $this->hasMany('App\Models\MedicalTestsInComplex', 'medical_test_id', 'id');
    }
}
