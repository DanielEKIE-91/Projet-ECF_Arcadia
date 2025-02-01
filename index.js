// Requete AJAX avec XHMHttpRequest
const requete = new XMLHttpRequest();
const methodeHttp = "GET"
const url = "https://jsonplaceholder.typicode.com/users"

requete.open(methodeHttp, url)

requete.onreadystatechange = function() {
    if (requete.readyState === 1) {
        console.log(requete.responseText);
    }

}
requete.send()


