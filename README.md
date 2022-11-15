# Aping
**🏓 API to play PING-PONG.**

## About

A rest API made with PHP to play game with words using resource from URI. If you send `ping`, it returns `pong`, and vice versa.

> Response from API are all in JSON format. And, when wrong path is sent, so there is no response and HTTP Header returns with `404` code.

![response-example-not-found]

## Routes
Root path for all routes must have `index.php`. So, if you are using `localhost` and use `git clone` into root folder from `localhost`, so `root path` will be
```
→ http://localhost/aping/index.php
```
![response-example]

### GET

**Path**
> `/game/ping`

**Response**
```json
{
  "message": "PONG"
}
```

**Path**
> `/game/pong`

**Response**
```json
{
  "message": "PING"
}
```

## Getting Started
### Prerequisites
To run this project, you will need an Apache server with PHP recognition, to make requests.

So, to this, you can use `Docker` or tools like `XAMPP`, `WAMP` and others like these that offers ready environments for PHP and Apache integration.

### Run
To run this, just make a `git clone` from it project and then use tools like `Insomnia` or `Postman` to make requests to path described in **Routes** section.

## Built With
- [x] PHP

[response-example]: ./.github/example-response.jpg
[response-example-not-found]: ./.github/example-response-not-found.jpg