# phpunit-paratest
Example of phpunit with [paratest](https://github.com/paratestphp/paratest).

## Run
```bash
cp .env.exmaple .env

make start

make phpunit-functional-group
make phpunit-classes-group

make paratest-functional-group
make paratest-classes-group
```

## My Runtime
- CPU: Intel(R) Core(TM) i5-8265U 
- RAM: 16.0GB
- OS: Windows 10 Pro(Docker in WSL2 Ubuntu 18.04)
- Docker: 19.03.2
- Docker-compose: 1.24.1
- Make: 4.1

## Output
Paratest always takes up to 10 seconds.

#### Functional Group Test
```bash
phpunit: Time: 28.08 seconds, Memory: 4.00 MB

paratest: Time: 10.13 seconds, Memory: 4.00 MB
```

#### Classes Group Test
```bash
phpunit: Time: 20.09 seconds, Memory: 4.00 MB

paratest: Time: 10.12 seconds, Memory: 4.00 MB
```
