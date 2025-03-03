![snipe-it-by-grok](https://github.com/snipe/snipe-it/assets/197404/b515673b-c7c8-4d9a-80f5-9fa58829a602)

--------------
```
docker build -t snipeit-build .
```
or
```
docker build --no-cache -t snipeit-build .
```
--------------


```
docker exec -it mariadb-databases bash
mysql -u root -pAdminlocal123a@
```

```
CREATE DATABASE seta;
CREATE DATABASE blue;
CREATE DATABASE ai;

CREATE USER 'seta'@'%' IDENTIFIED BY 'Adminlocal123a@';
GRANT ALL PRIVILEGES ON seta.* TO 'seta'@'%';

CREATE USER 'blue'@'%' IDENTIFIED BY 'Adminlocal123a@';
GRANT ALL PRIVILEGES ON blue.* TO 'blue'@'%';

CREATE USER 'ai'@'%' IDENTIFIED BY 'Adminlocal123a@';
GRANT ALL PRIVILEGES ON ai.* TO 'ai'@'%';

FLUSH PRIVILEGES;
```

```
docker-compose up -d
```




