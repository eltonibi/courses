<?php


namespace App\Interfaces;


interface  CourseRepositoryInterface
{
    public function getAllCourses();
    public function getCourseById($courseId);
    public function deleteCourse($courseId);
    public function createCourse(array $courseDetails);
    public function updateCourse($courseId, array $newCourse);
}
