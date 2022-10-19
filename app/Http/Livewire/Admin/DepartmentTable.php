<?php

namespace App\Http\Livewire\Admin;

use App\Models\Department;
use Livewire\Component;
use Livewire\WithPagination;

class DepartmentTable extends Component
{

    public $dept_id="no";
    public $dateorder="no";
    public $search="";
    public $showform=0;
    public $deleteDept="no";

    // public function getQueryString()
    // {
    //     return ['search'=>$this->search,'page'=>$this->page,'dept_id'=>$this->dept_id]; // TODO: Change the autogenerated stub
    // }

    // protected $queryString=['search','page','dept_id'];



    use WithPagination;
    public function render()
    {

            $departments=Department::withCount('products as products_count')->orderBy('updated_at')->paginate(5);



            if($this->dept_id!="no"){
            $dept=Department::find($this->dept_id);
        return view('livewire.admin.department-table',compact('departments'),compact('dept'))->layout('layouts.admin-layout');


        }
        else{
            return view('livewire.admin.department-table',compact('departments'))->layout('layouts.admin-layout');

        }

    }



    public function setDept_id($dept_id){
        $this->dept_id=$dept_id;
        $this->showform=1;
    }
    public function cancelEdit(){
        $this->dept_id="no";
        $this->showform=0;
    }

    public  function setDeleteDept($idd){
        $this->deleteDept=$idd;
    }

    public function cancelDelete(){
        $this->deleteDept="no";
    }
    public function DeleteDept(){

        if($this->deleteDept!="no") {
        $dept=    Department::find($this->deleteDept);

        $dept->products()->delete();
        $dept->delete();

            session()->flash('statt','ok');
            session()->flash('message','تم الحذف');
            $this->deleteDept="no";

        }
    }


}