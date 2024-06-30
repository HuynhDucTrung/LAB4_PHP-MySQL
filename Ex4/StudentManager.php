<?php
class StudentManager
{
    private $students = [];

    public function addStudent($student)
    {
        $this->students[] = $student;
    }

    public function getStudents()
    {
        return $this->students;
    }
}
