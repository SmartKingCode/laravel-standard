<?php
namespace App\Services;
use App\Repositories\StudentRepository;

class StudentService 
{
    protected $studentRepository;

    public function __construct(StudentRepository $studentRepo)
	{
		$this->studentRepository = $studentRepo;
    }
    
    //Get All Students
    public function getAllStudents()
    {
        return $this->studentRepository->getAll();
    }

    //Add Student
    public function addStudent(Array $inputs)
    {
        return $this->studentRepository->store($inputs);
    }

    //Get Student by id
    public function getStudentById($id)
    {
        return $this->studentRepository->getById($id);
    }

    //Update Student
    public function updateStudent($id, Array $inputs)
    {
        $this->studentRepository->update($id,$inputs);
    }

    //Delete Student by id
    public function deleteStudentById($id)
    {
        $this->studentRepository->destroy($id);
    }
    
}