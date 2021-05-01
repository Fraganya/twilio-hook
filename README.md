
# twilio-hook
***

Simple Twilio Whatsapp Chatbot webhook built with Laravel.

## Intro

Easily serve a custom webhook for your twilio Whatsapp chatbot.
Intended for people who want to run a custom webhook that follows a USSD like structured
process, thus a step by step interaction. i.e:

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


*This project currently provides an example* requiring the dev to 
write static methods for each level.

*The idea* is to have something that a dev can just plug in the necessary data
,something like a JSON tree of the steps and the hook app auto handles the responses.


## Installtion

### Clone repository

```
git clone https://github.com/enamanja/performance101.git
```


### Install composer dependencies
Change into project directory and install composer dependencies
```
composer install
```


### Install npm dependencies
For devs , install npm dependencies
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

In your Twilio console , configure your whatsapp bot settings and configure them in your
*.env* file.

- TWILIO_AUTH_SID
- TWILIO_AUTH_TOKEN
- TWILIO_WHATSAPP_FROM


### Other Configs

To reflect your running environment, You can update the env parameters such as

#### Database

- Database name
- Database username
- Database password
- Database Port
- Database host


