<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

/**
 *  @SWG\Swagger(
 *     basePath="",
 *     host="lumbent:8888",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0",
 *         title="Sample API",
 *         @SWG\Contact(name="Aivar Somelar"),
 *     ),
 *     @SWG\Definition(
 *         definition="Error",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 * )
 */
class Controller extends BaseController
{
    //
}
