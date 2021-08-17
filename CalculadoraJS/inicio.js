var container = document.getElementById("container")
var link = document.createElement("a");
link.setAttribute("href","http://google.com.br")
link.setAttribute("target","_blank")
var linkTxt = document.createTextNode("Meu Link")
link.appendChild(linkTxt)
container.appendChild(link)