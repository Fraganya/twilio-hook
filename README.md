# twilio-hook

 twilio-hook is a Whatsapp chatbot webhook built with [Laravel](https://laravel.com/).
## Intro

twilio-hook is intended for anyone who wants to run a custom webhook that follows a USSD-like structure
process. This is a step-by-step interaction.

 Example below:

> Step 1 - Select Language:
>
>       1. English
>       2. Chichewa
>
> Step 2 - Select a level:
>   
>       1. Service 1
>       2. Service 2
>       3. Back
>
> ......extra level option sets


This project *currently* provides an example requiring the dev to
write static methods for each level.

After plugging in the necessary data, the hook app auto handles the responses.

For example, plug-in data might be a JSON tree of  steps.


# Installation

 Begin by cloning your repository with SSH
```
git clone git@github.com:Fraganya/twilio-hook.git
```


Change into project directory and install composer dependencies
```
composer install
```

Install npm dependencies
```
npm install
```


### Create .env file
Copy the <b>.env.example</b> file to <b>.env<b>

This can easily be achieved by running
```
    cp .env.example .env
```

### Set Application key

Set the application key by running
```
php artisan key:generate
```

### Twilio Configuration

In your Twilio console, configure your Whatsapp bot settings and configure them in your
*.env* file.

- TWILIO_AUTH_SID
- TWILIO_AUTH_TOKEN
- TWILIO_WHATSAPP_FROM


### Other Configs

To reflect your running environment, you can update the env parameters such as

##### Database

- Database name
- Database username
- Database password
- Database Port
- Database host

### License
