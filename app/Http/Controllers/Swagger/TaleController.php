<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 *@OA\Get(
 *  path="/api/tales",
 *  summary="Получение списка рассказов",
 *  tags={"Рассказы и сказки"},
 *
 *  @OA\Response(
 *      response=200,
 *      description="Ok",
 *      @OA\JsonContent(
 *          @OA\Property(property="data", type="array", @OA\Items(
 *              @OA\Property(property="id", type="integer", example=1),
 *              @OA\Property(property="title", type="string", example="Заголовок рассказа"),
 *              @OA\Property(property="text", type="text", example="Текст рассказа"),
 *
 *          )),
 *      ),
 *  ),
 *)
 */

class TaleController extends Controller
{
    //
}
