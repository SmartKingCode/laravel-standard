<?php
namespace App\Repositories;
use App\Entities\Student;

class StudentRepository extends ResourceRepository
{

    public function __construct(Student $entity)
	{
		$this->model = $entity;
	}

}