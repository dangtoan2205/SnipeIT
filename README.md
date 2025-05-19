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
apt-get update && apt-get install -y mysql-client
```

```
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

Fix
--------------


```
CREATE USER IF NOT EXISTS 'seta'@'%' IDENTIFIED BY 'Adminlocal123a@';
GRANT ALL PRIVILEGES ON seta.* TO 'seta'@'%';

CREATE USER IF NOT EXISTS 'blue'@'%' IDENTIFIED BY 'Adminlocal123a@';
GRANT ALL PRIVILEGES ON blue.* TO 'blue'@'%';

CREATE USER IF NOT EXISTS 'ai'@'%' IDENTIFIED BY 'Adminlocal123a@';
GRANT ALL PRIVILEGES ON ai.* TO 'ai'@'%';

FLUSH PRIVILEGES;
```

```
docker-compose restart
```

```
docker-compose up -d
```


Fix
------------------

```
GRANT ALL PRIVILEGES ON seta.* TO 'seta'@'%';
GRANT ALL PRIVILEGES ON blue.* TO 'blue'@'%';
GRANT ALL PRIVILEGES ON ai.* TO 'ai'@'%';
FLUSH PRIVILEGES;
```

⚠️ Quan trọng: Đảm bảo user seta, blue, ai đều được cấp đúng password trong MariaDB. Bạn có thể reset trực tiếp nếu cần:

```
ALTER USER 'seta'@'%' IDENTIFIED BY 'Adminlocal123a@';
ALTER USER 'blue'@'%' IDENTIFIED BY 'Adminlocal123a@';
ALTER USER 'ai'@'%' IDENTIFIED BY 'Adminlocal123a@';
FLUSH PRIVILEGES;
```

Restart toàn bộ stack

```
docker-compose down
docker-compose up -d
```




---------------
Test CICD

Thêm người dùng mới cho Sql
------------------
```
sudo mysql
```

```
CREATE USER 'snipeit'@'localhost' IDENTIFIED BY 'Adminlocal123a@';
```

```
GRANT ALL PRIVILEGES ON snipeit_db.* TO 'snipeit'@'localhost';
```

```
FLUSH PRIVILEGES;
```

```
CREATE DATABASE snipeit_db;
```

```
exit;
```

Để xóa người dùng `snipeit` mà bạn đã tạo trước đó, bạn cần thực hiện các bước sau trong MySQL:
-----------------------

Xem danh sách người dùng hiện có:

```
SELECT User, Host FROM mysql.user;
```


Step 1: Đăng nhập vào MySQL với quyền root hoặc người dùng có quyền quản trị:
```
sudo mysql
```

Step 2: Xóa quyền của người dùng (nếu có) trước khi xóa người dùng:

Bạn cần xóa tất cả quyền mà người dùng `snipeit` có. Câu lệnh này sẽ loại bỏ quyền truy cập của người dùng `snipeit`:

```
REVOKE ALL PRIVILEGES ON *.* FROM 'snipeit'@'localhost';
```

Step 3: Xóa người dùng:

Sau khi đã thu hồi các quyền, bạn có thể xóa người dùng bằng câu lệnh sau:

```
DROP USER 'snipeit'@'localhost';
```

Step 4: Làm mới quyền để áp dụng thay đổi:

```
FLUSH PRIVILEGES;
```



