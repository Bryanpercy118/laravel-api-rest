<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel Api Rest Exercise
Following we have a sequence of request that will be used to test the API. <br>
## Reset state before starting tests

```
POST /reset
200 OK
```


## Get balance for non-existing account

```
GET /balance?account_id=1234
404 0
```

## Create account with initial balance

```
POST /event {"type":"deposit", "destination":"100", "amount":10}
201 {"destination": {"id":"100", "balance":10}}
```

## Deposit into existing account

```
POST /event {"type":"deposit", "destination":"100", "amount":10}
201 {"destination": {"id":"100", "balance":20}}
```

## Get balance for existing account

```
GET /balance?account_id=100
200 20
```

## Withdraw from non-existing account

```
POST /event {"type":"withdraw", "origin":"200", "amount":10}
404 0
```

## Withdraw from existing account

```
POST /event {"type":"withdraw", "origin":"100", "amount":5}
201 {"origin": {"id":"100", "balance":15}}
```

## Transfer from existing account

```
POST /event {"type":"transfer", "origin":"100", "amount":15, "destination":"300"}
201 {"origin": {"id":"100", "balance":0}, "destination": {"id":"300", "balance":15}}
```

## Transfer from non-existing account

```
POST /event {"type":"transfer", "origin":"200", "amount":15, "destination":"300"}
404 0
```

## API Rest designed by Bryan Percy

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
