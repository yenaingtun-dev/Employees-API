## Employee API CRUD with GraphQL, Laravel Passport Authentication and Excel Export

-   User Registration, Login and Logout using Laravel Passport
-   Employee CRUD with GraphQl
-   Excel Export

## Setup the project


```
git clone https://github.com/yenaingtun-dev/Employees-API.git
```

```
composer install
```

```
cp .env.example .env
```

```
DB_DATABASE=employee_api
DB_USERNAME=root
DB_PASSWORD=
```

```
php artisan key:generate
```

```
php artisan migrate --seed
```

```
php artisan passport:install
```

```
php artisan serve
```

### **User Registeration, Login and Logout**

```http
POST http://127.0.0.1:8000/api/register
```

```http
POST http://127.0.0.1:8000/api/login
```

```http
POST http://127.0.0.1:8000/api/logout
```

## **Employee CRUD GraphQL**


```
http://127.0.0.1:8000/graphql
```

### Query

Query all
```
query Employee {
    employees {
        name
        email
        id
    }
}
```

Query single
```
query Employee {
    employee(id: "1") {
        id
        name
        email
    }
}
```

### CRUD

Create Mutation
```
mutation CreateEmployee {
    createEmployee(name: "user", email: "user@mail.com") {
        id
        name
        email
    }
}
```

Update Mutation
```
mutation UpdateEmployee {
    updateEmployee(id: 1, name: "admin", email: "admin@mail.com") {
        id
        name
        email
    }
}

```

Delete Mutation
```
mutation DeleteEmployee {
    deleteEmployee(id: "1")
}

```

### **Excel Export**

```http
GET http://127.0.0.1:8000/employees/export
```
## Employee API CRUD with GraphQL, Laravel Passport Authentication and Excel Export

-   User Registration, Login and Logout using Laravel Passport
-   Employee CRUD with GraphQl
-   Excel Export

## Setup the project

```
git clone https://github.com/yenaingtun-dev/Employees-API.git
```

```
composer install
```

```
cp .env.example .env
```

```
DB_DATABASE=employee_api
DB_USERNAME=root
DB_PASSWORD=
```

```
php artisan key:generate
```

```
php artisan migrate --seed
```

```
php artisan passport:install
```

```
php artisan serve
```

### **User Registeration, Login and Logout**

```http
POST http://127.0.0.1:8000/api/register
```

```http
POST http://127.0.0.1:8000/api/login
```

```http
POST http://127.0.0.1:8000/api/logout
```

## **Employee CRUD GraphQL**


```
http://127.0.0.1:8000/graphql
```

### Query

Query all
```
query Employee {
    employees {
        name
        email
        id
    }
}
```

Query single
```
query Employee {
    employee(id: "1") {
        id
        name
        email
    }
}
```

### CRUD

Create Mutation
```
mutation CreateEmployee {
    createEmployee(name: "user", email: "user@mail.com") {
        id
        name
        email
    }
}
```

Update Mutation
```
mutation UpdateEmployee {
    updateEmployee(id: 1, name: "admin", email: "admin@mail.com") {
        id
        name
        email
    }
}

```

Delete Mutation
```
mutation DeleteEmployee {
    deleteEmployee(id: "1")
}

```

### **Excel Export**

```http
GET http://127.0.0.1:8000/api/employees/export
```

### **Excel Import**

```http
POST http://127.0.0.1:8000/api/employees/import
```


![Screen Shot 2023-11-19 at 11 27 30 PM](https://github.com/yenaingtun-dev/Employees-API/assets/59411234/511c32f0-82a3-44c7-bea0-9f473698cff0)
