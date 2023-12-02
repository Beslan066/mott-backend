<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 *@OA\Get(
 *  path="/api/science-articles",
 *  summary="Получение списка научных статей",
 *  tags={"Научные статьи"},
 *
 *  @OA\Response(
 *      response=200,
 *      description="Ok",
 *      @OA\JsonContent(
 *          @OA\Property(property="data", type="array", @OA\Items(
 *              @OA\Property(property="id", type="integer", example=1),
 *              @OA\Property(property="title", type="string", example="Заголовок рассказа"),
 *              @OA\Property(property="text", type="text", example="Текст рассказа"),
 *              @OA\Property(property="image", type="string", example="Текст научной статьи"),
 *
 *          )),
 *      ),
 *  ),
 *)
 */

class ScienceArticle extends Controller
{
    //
}
