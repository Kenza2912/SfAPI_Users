const membres_container = document.querySelector('#membres-container');


// J'envoie une requête HTTP GET à l’URL
fetch('http://localhost:8000/api/membres')
    .then((response) => response.json())
    // Les données JSON reçues sont stockées dans la variable data
    .then((data) => {
        const membres = data["hydra:member"];
        membres.forEach(membre => {
            let membre_box = document.createElement('div');
            membre_box.innerHTML = membre.last.toUpperCase() + ' ' + membre.first;
            membres_container.appendChild(membre_box);
        });
    })