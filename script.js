window.onload = function() {
    document.getElementById('file-input').addEventListener('change', getFileName);
}

const getFileName = (event) => {
    const now = new Date(); // Mettre à jour la date actuelle à chaque appel
    const currentDateTime = now.toLocaleString();

    const files = event.target.files;
    const fileName = files[0].name;
    let fileSize;
    if (files[0].size < 1024 * 1024 * 1000) {
        fileSize = (files[0].size / (1024 * 1024)).toFixed(0) + " Mo"; // Si la taille est inférieure à 1000 Mo
    } else {
        fileSize = (files[0].size / (1024 * 1024 * 1024)).toFixed(1) + " Go"; // Si la taille est supérieure à 1000 Mo
    }
    console.log("file name: ", fileName);
    const lignesDiv = document.querySelector('.nom');
    const dateDiv = document.querySelector('.date');
    const sizeDiv = document.querySelector('.taille');
    lignesDiv.innerHTML = "<p>" + fileName + "</p>";
    dateDiv.innerHTML = "<p>" + currentDateTime + "</p>";
    sizeDiv.innerHTML = "<p>" + fileSize + "</p>";

    const ligne2 = document.querySelector('.nom2')
    const date2 = document.querySelector('.date2')
    const taille2 = document.querySelector('.taille2')

    if (lignesDiv.innerHTML != "" && lignesDiv.innerHTML != ligne2.innerHTML && ligne2.innerHTML == "") {
        ligne2.innerHTML = "<p>" + fileName + "</p>";
        date2.innerHTML = "<p>" + currentDateTime + "</p>";
        taille2.innerHTML = "<p>" + fileSize + "</p>";
    }

    if (ligne2.innerHTML == lignesDiv.innerHTML) {
        ligne2.innerHTML = "";
        date2.innerHTML = "";
        taille2.innerHTML = "";
    }

}
