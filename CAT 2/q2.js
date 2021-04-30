function validateForm() {
    if (document.getElementsByName("nature")[0].value == "no grievance") {
        document.getElementById("result").innerHTML = "No grievances";
    } else {
        document.getElementById("box").hidden = false;
        let ps = document.querySelectorAll("p");
        ps[0].innerHTML += document.getElementsByName("username")[0].value;
        ps[1].innerHTML += document.getElementsByName("address")[0].value;
        ps[2].innerHTML += document.getElementsByName("telecom-circle")[0].value;
        ps[3].innerHTML += document.getElementsByName("email")[0].value;
        ps[4].innerHTML += document.getElementsByName("nature")[0].value;
    }
}