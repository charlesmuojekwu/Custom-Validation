

## Custom pipe validation rules in laravel Laravel

This laravel application validates api values using the set rules passed together with the value in a the payload :

## E:G

{
    "first_name": {
        "value": "John",
        "rules": "alpha|required"
    },
    "last_name": {
        "value": "Doe",
        "rules": "alpha|required"
    },
    "email": {
        "value": "Doe",
        "rules": "email"
    },
    "phone": {
        "value": "08175020329",
        "rules": "number"
    }
}

example the first_name field value rules are that it is required and that it must be alpha


## To run the application

- clone the project 
- run composer install
- Php artisan serve

## API ROUTE [Get Method]
http://localhost:8000/api/create-user


## STEPS
** Usercontroller create user request in directed the index method for input validation
** Rules/validation is where the custom validation class writed and registered in the application service provider boot method
** Validation response attribute is defined in th language file
** Middleware to handle json response

