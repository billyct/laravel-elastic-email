# laravel-elastic-email

A simple Laravel wrapper for [ElasticEmail.WebApiClient-php](https://github.com/ElasticEmail/ElasticEmail.WebApiClient-php)

## Preparent


## Instalation

[1] Install package

```
composer require billyct/laravel-elastic-email
```


[2] Add this code to .env file

```
ELASTIC_EMAIL_API_KEY=<Add your key>
ELASTIC_EMAIL_PUBLIC_ACCOUNT_ID=<Add your account>
```

[3] If you are using laravel < 5.5

Add provider to your config/app.php file.
``` Billyct\ElasticEmail\ElasticEmailServiceProvider::class```` 

## Usage

Add contact

```php
// $client is singleton wrapper for ElasticClient
$client = app(ElasticEmailClient\ElasticClient::class);
$client->Contact->Add(...);


or short code：

Billyct\ElasticEmail\ElasticEmail::addContact('your@mail.com', 'your-list-name', ['field_1' => 'test']);
```
