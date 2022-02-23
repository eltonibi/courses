<?php


namespace App\Repositories;

use App\Interfaces\CourseRepositoryInterface;
use App\Models\Course;
use Symfony\Component\VarDumper\VarDumper;


class CourseRepository implements CourseRepositoryInterface
{

    public function getAllCourses()
    {
        return Course::all();
    }

    public function getCourseById($courseId)
    {
        return Course::findOrFail($courseId);
    }

    public function deleteCourse($courseId)
    {
        Course::destroy($courseId);
    }

    public function createCourse(array $courseDetails)
    {
        return Course::create($courseDetails);
    }

    public function updateCourse($courseId, array $newDetails)
    {
        return Course::whereId($courseId)->update($newDetails);
    }
}
