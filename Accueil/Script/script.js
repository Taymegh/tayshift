document.addEventListener('dragover', (e) =>{
    e.preventDefault()
});

document.addEventListener('drop', (e) =>{
    document.getElementById('file').files = e.dataTransfer.files;
    e.preventDefault()

});



