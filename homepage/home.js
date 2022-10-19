function printSneakersWhoLettersAppear(str) {
    console.log(str.length);
    if (str.length == 0) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("cartes").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "../query/query_all_sneakers.php", true);
        xmlhttp.send();
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("cartes").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../query/query_nom_carte.php?q=" + str, true);
        xmlhttp.send();
    }
}