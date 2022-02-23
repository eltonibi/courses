<?php

namespace App\Http\Controllers;

use App\Interfaces\CourseRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Symfony\Component\VarDumper\VarDumper;

class CourseController extends Controller
{
    private CourseRepositoryInterface $courseRepository;

    public function __construct(CourseRepositoryInterface $courseRepository)
    {
        $this->courseRepository=$courseRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'data'=>$this->courseRepository->getAllCourses()
        ]);
    }

    public function create(Request $request): JsonResponse
    {
        $validator=validator()->make(request()->all(), [
            'title'=>'required|min:10|max:225',
            'description'=>'max:1000',
            'status'=>'in:Published,Pending',
            'is_premium'=>'boolean',
        ]);

        if ($validator->errors()->count()) {
            return response()->json(['data'=>$validator->errors()->messages()], 400);
        }

        $courseDetails=$request->only([
            'title',
            'description',
            'status',
            'is_premium',
        ]);

        return response()->json(
            [
                'data'=>$this->courseRepository->createCourse($courseDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function get(Request $request): JsonResponse
    {

        $courseId=$request->route('id');

        return response()->json([
            'data'=>$this->courseRepository->getCourseById($courseId)
        ]);
    }

    public function update(Request $request): JsonResponse
    {
        $validator=validator()->make(request()->all(), [
            'title'=>'required|min:10|max:225',
            'description'=>'max:1000',
            'status'=>'in:Published,Pending',
            'is_premium'=>'boolean',
        ]);

        if ($validator->errors()->count()) {
            return response()->json(['data'=>$validator->errors()->messages()], 400);
        }

        $courseId=$request->route('id');

        $courseDetails=$request->only([
            'title',
            'description',
            'status',
            'is_premium',
        ]);

        return response()->json([
            'data'=>$this->courseRepository->updateCourse($courseId, $courseDetails)
        ]);
    }

    public function delete(Request $request): JsonResponse
    {

        $courseId=$request->route('id');

        $this->courseRepository->deleteCourse($courseId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
