var c = 0
var t = 0
function contador(){
    document.getElementById('txt').innerHTML = new Date();
    c = c + 1;
    t = setTimeout("contador()", 1000);
}
//contador()
t = setTimeout("contador()", 1000);
//t = setInterval("contador()", 1000);