<?php

namespace App\Http\Controllers;
use App\Http\Requests\StudentRequests\CreateStudentRequest;
use App\Services\StudentService;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;
use App\Http\Resources\StudentCollection;

class StudentController extends Controller
{
    
    protected $studentService;

   

    public function __construct(StudentService $studentServ)
	{
		$this->studentService = $studentServ;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = $this->studentService->getAllStudents();

        return StudentResource::collection($students);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStudentRequest $request)
    {
        $student = $this->studentService->store($request->all());

        return new StudentResource($student);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        StudentResource::withoutWrapping();

        $student = $this->studentService->getById($id);

        return new StudentResource($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, $id)
    {
        
      $student =  $this->studentService->update($id, $request->all());

      return new StudentResource($student);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->studentService->destroy($id);
    }

   
}
