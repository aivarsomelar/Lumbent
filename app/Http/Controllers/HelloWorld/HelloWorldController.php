<?php
namespace App\Http\Controllers\HelloWorld;

use App\Http\Controllers\Controller;

/**
 * Hello world controller is for simple example API calls/method
 */
class HelloWorldController extends Controller
{

    /**
     * Greet API user with nice words.
     *
     * @SWG\Get(
     *     path="/helloWorld/sayHi",
     *     description="Greet API user with nice words..",
     *     operationId="HelloWorld.index",
     *     produces={"application/json"},
     *     tags={"hello"},
     *     @SWG\Response(
     *         response=200,
     *         description="Greetings from API."
     *     )
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {

        return response()->json(['I\'m Batman.']);
    }
}
