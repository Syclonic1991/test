<?php namespace App\Models;

/**
 * Eloquent class to describe the medical_tests_in_complex table
 *
 * automatically generated by ModelGenerator.php
 */
class MedicalTestsInComplex extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'medical_tests_in_complex';

    public $timestamps = false;

    protected $fillable = array();

    public function medicalTestComplexes()
    {
        return $this->belongsTo('App\Models\MedicalTestComplex', 'medical_test_complex_id', 'id');
    }

    public function medicalTests()
    {
        return $this->belongsTo('App\Models\MedicalTest', 'medical_test_id', 'id');
    }
}
