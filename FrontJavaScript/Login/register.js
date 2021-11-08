function register(){
    const email = document.getElementById('email');
    const senha = document.getElementById('senha');
    const nome = document.getElementById('nome');
    const confirmSenha = document.getElementById('confirmSenha');
    
    const headers = {
        "Content-Type": "application/json",                                                                                                
        "Access-Control-Origin": "*"
    }
    const dados = {
        email: email.value,
        password: senha.value,
        name: nome.value,
        password_confirmation: confirmSenha.value
    }
    fetch('http://localhost:8000/api/auth/register',{
                method: 'POST',
                headers: headers,
                body: JSON.stringify(dados)
            })
            .then(function(response){
                return response.json()
            })
            .then(function(response){
                window.location.replace('file:///C:/xampp/htdocs/lucasporfirio.github.io/FrontJavaScript/Login/login.html')
            })

}
