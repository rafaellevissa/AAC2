#requisitos de ambiente
instalar o php
descomentar no arquivo php.ini: pdo_mysql
criar base de dados mysql com base no arquivo /dump/aac.SQL
Colocar a senha do banco no arquivo /database/DatabaseConfig.php

# Ofir_Framework-0.1

# Description

Welcome to Ofir. This is a Project Development of the PHP-Framework. Developed by student to students. What do you think about contribute with this project?

<p>
The Ofir is very easy to use. You just need install and run in your server. <br>
Ofir uses the Model-View-Controller approach, which allows great separation between logic and presentation. 
</p>

# What I need at this moment?

I need to create a powerful class to work with SQL query. My objective is abstracting the SQL language in the Application.

<h4>Example of the Model class</h4>

```php

class User extends Model
{
    protected $table = 'user';
}

```

<h3>Example of the Controller class</h3>

```php

class UserController extends Controller 
{
    protected $user;
    protected $view;
    protected $defaultLayout;

    public function __construct(Array $models, Array $services)
    {
        $this->user = $models['User'];
        $this->view = $this->view();
        $this->defaultLayout = $this->view->layout('default-layout');
    }

    public function index()
    {
        $users = $this->user->select()->getAll();
        return $this->view->make('home.index', compact('users'));
    }
}

```

<h3>Example of the View</h3>

```html

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Page</title>
</head>
<body>
    <?php foreach ($users as $user):?>
       <b>Name:</b> <?php $user->name;?> <br>
       <b>Email:</b> <?php $user->email;?> <br>
    <?php endforeach;?>
</body>
</html>

```
