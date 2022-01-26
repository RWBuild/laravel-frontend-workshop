## Frontend Workshop Demo

A simple CRM training project for laravel

## Local Setup

- Setup the database (the default configuration is mysql)
- Run the following commands project ```
    - Setup your Local Environment
    - composer install
    - npm i
    - php artisan serve
    - npm run watch
```

## Routes List

- Get all people : GET -> `{url}/people`
- Add a new person : POST - `{url}/people`
- Show a person: `{url}/people/:id
- Assign a favorite thing to a given person -> POST -> `{url}/favorite/assign-to-person`


## Models

1) Person (first_name, last_name, email, dob)

- first_name
- last_name
- email
- dob
- favorites (array of person [Favorite])

2) Favorite

- id
- name
- type
