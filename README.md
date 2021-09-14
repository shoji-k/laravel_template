## start

sail up

## prepare test database

```bash
sail mysql
```

```bash
SYSTEM mysql -u root -p

create database test_example_app;
GRANT ALL ON *.* TO sail;
```