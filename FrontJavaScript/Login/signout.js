function signout(){
    
    localStorage.removeItem('token');
    window.location.replace('file:///C:/xampp/htdocs/lucasporfirio.github.io/FrontJavaScript/Login/login.html');

    }
