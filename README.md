# Laravel Course section 
## Temas
1. Routes
2. Controllers
3. Group of Routes

---
### 1. Routes
Notes:(./routes/web.php)

---
### 2. Controllers 
Notes: (./routes/web.php)
Notes: (./app/Http/Controllers)

For create controller from console execute the next command:
```console 
php artisan make:controller [Name]Controller
```
We can named if without Controller but in this moment is for convenencie 

Example:
```
php artisan make:controller RutasController
```

---
### 3. Group of Routes
Notes: (./routes/web.php)


### 4 Database
Create database
```
CREATE DATABASE blog;
```

#### Crate table
Modify file database/migrations/2014_10_12_000000_create_users_table.php for create table 'user' with colums: 

For up the data insert the following command 
```
php artisan migrate
```
For delete the content in the database insert the following command:

```
php artisan migrate:fresh --seed
```


