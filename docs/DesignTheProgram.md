
# Design the Program

## Flowchart of Login and Registration System
![alt](/assets/images/flowcharts/flowchart%20login%20pagepng)

## Pseudocode
```
function login(){
    if username && password == (database password and username){
        login successfully 
        href (home.php)
    }else{
        password or username is incorrect
    }
}

function register(){
    if username && password && gmail != proper format{
        invalid username/password/gmail
        try again
    }else if gmail == (database gmail){
        account is already registered
    }else{
        Successfuly registered 
        stores the credentials at database
    }
}

if user has account{
    login()
}else{
    register()
}
```