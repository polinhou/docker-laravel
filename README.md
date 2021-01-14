# Developer
  
### Initial

Step 1:
git clone <this project git url>

Step 2:
Copy .env

```
cp .env.example .env
```

Step 3:

Install packages

```
composer install
```

Step 4:

Setup up docker

```
docker-compose up -d
```

### Develop

因為使用opcache，更新程式碼後請使用指令清除opcache

```
php artisan opcache:clear
```
