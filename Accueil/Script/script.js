document.addEventListener('dragover', (e) =>{
    e.preventDefault()
});

document.addEventListener('drop', (e) =>{
    e.preventDefault()
    document.getElementById('file').files = e.dataTransfer.files;
    const liste = document.getElementById('liste');
    const fichiers = e.dataTransfer.files;

    for (let i=0; i < fichiers.length; i++){
        const fichier = fichiers[i];

        const listeFichiers = document.createElement('li');
        listeFichiers.textContent = fichier.name;
        liste.appendChild(listeFichiers);
    }

});




