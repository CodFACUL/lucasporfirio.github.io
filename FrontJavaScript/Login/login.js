function login(){
    const email = document.getElementById('email');
    const senha = document.getElementById('senha');

    const headers = {
        "Content-Type": "application/json",                                                                                                
        "Access-Control-Origin": "*"
     }

    const dados = {
        email: email.value,
        password: senha.value
    }

        fetch('http://localhost:8000/api/auth/login',{
                method: 'POST',
                headers: headers,
                body: JSON.stringify(dados)
            })
            .then(function(response){
                return response.json()
            })
            .then(function(response){
                localStorage.setItem('token',response.access_token);
                window.location.replace('file:///C:/xampp/htdocs/lucasporfirio.github.io/FrontJavaScript/Maquina/Maquina.html');
            })
    }
