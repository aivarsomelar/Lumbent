## Lumbent

Lumbent is API project base / example based on Lumen framework. Lumbent have little bit more feature added to project
that I feel was missing (example: API documentation) 

## How to set up

* git clone this project
* run composer install/update 
`composer isntall`
* create vhost file

 More info from Lumen Documentation
 
## Write and Generate API Documentation

Add similar comment to method in controller class:
```PHP
/**
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
  */
```

Generate documentation
```
vendor/bin/swagger app/Http/Controllers --output public/api/
```

More info from [Swagger-php documentation](http://zircote.com/swagger-php).

Tutorial [how to set up Swggaer with Lumen/Laravel](https://www.marcoraddatz.com/en/2015/07/21/integrate-swagger-into-laravel/)

## Official Lumen Framework Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).
