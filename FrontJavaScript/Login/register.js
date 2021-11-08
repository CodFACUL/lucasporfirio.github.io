function register(){
    const email = document.getElementById('email');
    const password = document.getElementById('senha');
    const name = document.getElementById('nome');
    const password_confirmation = document.getElementById('confirmSenha');
    
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
               
            })

}
