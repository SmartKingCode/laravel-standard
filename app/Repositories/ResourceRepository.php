<?php
namespace App\Repositories;

abstract class ResourceRepository
{
    protected $model;

    public function getAll()
    {
        return $this->model->get();
    }
    
    public function getPaginate($n)
    {
        return $this->model->paginate($n);
    }

    public function store(Array $inputs)
    {
        return $this->model->create($inputs);
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($id, Array $inputs)
    {
           $this->getById($id)->update($inputs);
           return   $this->getById($id);
    }

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }

}