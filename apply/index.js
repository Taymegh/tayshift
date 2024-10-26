document.getElementById("entree").addEventListener("input", function() {
    const Box = document.getElementsByClassName("valeur");
    const Entree = document.getElementById("entree").value;

    if (Entree === "Bonjour") {
        for (let i = 0; i < Box.length; i++) {
            Box[i].textContent = "Daccord";
        }
    } else {
        for (let i = 0; i < Box.length; i++) {
            Box[i].textContent = "";
        }
    }
});
