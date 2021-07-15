## Installation

To get started, make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/) on your system, and then clone this repository.

Navigate in your terminal screen to the directory you cloned this, and spin up the containers for the web server by running `docker-compose up -d --build`.

The following are built for our web server, with their exposed ports detailed:

Three additional containers are included that handle Composer, NPM, and Artisan commands *without* having to have these platforms installed on your local computer. Use the following command examples from your project root, modifying them to fit your particular use case.

- `docker-compose run --rm composer install`
- `docker-compose run --rm artisan migrate`
- `docker-compose run --rm artisan db:seed`

Front-end side does not developed by me but i append npm container to docker-compose in case you want to develop it
- `docker-compose run --rm npm run dev`


## Usage

###   Register

Endpoint : http://localhost/api/auth/register

Request Payload Without Reference Code

    {
    	"name": "test",
    	"email": "test@yandex.com.tr",
    	"password": "password",
    	"password_confirmation": "password"
    }

Response

    {
      "status": "success",
      "data": {
        "user": {
          "name": "test",
          "email": "test@yandex.com.tr",
          "updated_at": "2021-07-15T17:04:51.000000Z",
          "created_at": "2021-07-15T17:04:51.000000Z",
          "id": 2
        },
        "token": "2|SRy5v4ZayHKqiDtX4Piz5Z81kXZl9MSgCKghHLsZ"
      }
    }

------

### Login

Endpoint : http://localhost/api/auth/login

Request

    {
        "email":"test@yandex.com.tr",
        "password":"password"
    }

Response

    {
      "status": "success",
      "message": null,
      "data": {
        "token": "7|OmBtd1sRSqAcNI4SbN9a31zSfTBvGDwMwka5Obcs"
      }
    }

------

### Profile

Endpoint: http://localhost/api/me

Response

    {
      "id": 1,
      "name": "test",
      "email": "test@yandex.com.tr",
      "email_verified_at": null,
      "created_at": "2021-07-11T20:10:24.000000Z",
      "updated_at": "2021-07-11T20:10:24.000000Z"
    }

------

### Logout

Endpoint : http://localhost/api/auth/logout

Response

    {
      "message": "Tokens Revoked"
    }

------

### I-AM-ALIVE

Endpoint : http://localhost/api/i-am-alive

Response

    "OK"


### List Meditations

Endpoint : http://localhost/api/meditations

Response

    {
      "status": "success",
      "data": [
        {
          "id": 1,
          "name": "Yam",
          "image": null,
          "description": "Yam Description",
          "producer": "Yam Producer",
          "duration": 1200
        },
        {
          "id": 2,
          "name": "Yin",
          "image": null,
          "description": "Yin Description",
          "producer": "Yin Producer",
          "duration": 1200
        },
        {
          "id": 3,
          "name": "Full Moon",
          "image": null,
          "description": "Full Moon Description",
          "producer": "Full Moon Producer",
          "duration": 60
        },
        {
          "id": 4,
          "name": "New Moon",
          "image": null,
          "description": "New Moon Description",
          "producer": "New Moon Producer",
          "duration": 90
        }
      ]
    }

### Play Meditation

Endpoint : http://localhost/api/play

Request

    {
        "meditation_id": 2,
        "duration": 20
    }

Response

    {
      "status": "success",
      "data": {
        "meditation_id": 2,
        "duration": 20,
        "updated_at": "2021-07-15T17:02:27.000000Z"
      }
    }

### History

Endpoint : http://localhost/api/play/history

Response

    {
      "status": "success",
      "data": [
        {
          "date": "2021-07-15",
          "total_duration": "2570"
        }
      ]
    }

### Calendar

Endpoint: http://localhost/api/play/calendar

Response

    {
      "status": "success",
      "data": {
        "2021-07-01": false,
        "2021-07-02": false,
        "2021-07-03": false,
        "2021-07-04": false,
        "2021-07-05": false,
        "2021-07-06": false,
        "2021-07-07": false,
        "2021-07-08": false,
        "2021-07-09": false,
        "2021-07-10": false,
        "2021-07-11": false,
        "2021-07-12": false,
        "2021-07-13": false,
        "2021-07-14": false,
        "2021-07-15": true,
        "2021-07-16": false,
        "2021-07-17": false,
        "2021-07-18": false,
        "2021-07-19": false,
        "2021-07-20": false,
        "2021-07-21": false,
        "2021-07-22": false,
        "2021-07-23": false,
        "2021-07-24": false,
        "2021-07-25": false,
        "2021-07-26": false,
        "2021-07-27": false,
        "2021-07-28": false,
        "2021-07-29": false,
        "2021-07-30": false,
        "2021-07-31": false
      }
    }

### Monthly Report

Endpoint : http://localhost/api/report/monthly

Response

    {
      "status": "success",
      "data": {
        "total_duration": 3750,
        "total_meditation": 5,
        "daily_series": 1
      }
    }

### Yearly Report

Endpoint : http://localhost/api/report/yearly

Response

    {
      "status": "success",
      "data": {
        "total_duration": 3750,
        "total_meditation": 5,
        "daily_series": 1
      }
    }