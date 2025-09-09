(function() {
    const list_categories = document.querySelectorAll(".list_categories li");
    console.log("list_categories.length", list_categories.length);
    list_categories.forEach((categorie)=> {
        categorie.addEventListener("mousedown", (e) =>{
            console.log(categorie.dataset.id);
            const categoryId = categorie.dataset.id;
            mon_fetch(categoryId);
        });
    });
    const categoryId = 4; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = document.querySelector("base").href;
    mon_fetch(categoryId);
    
    function mon_fetch(categoryId){
        const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;// construction du domaine
        console.log("apiUrl", apiUrl);
        fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const destinationList = document.querySelector('.destination__list');// génère le résultat
            destinationList.innerHTML = "";
            data.forEach(article => {
                const articleElement = document.createElement('div');
                articleElement.innerHTML = `
                    <label for="accordeon__chk__${article.id}" class="accordeon">
                        <h3>${article.title.rendered}</h3>
                    </label>
                    <input type="checkbox" class="accordeon__chk" id="accordeon__chk__${article.id}">                    
                    <div class="accordeon__excerpt">${article.excerpt.rendered}
                        <a href="${article.link}">Lire plus</a>
                    </div>
                    `;// titre, resumé et lien
                destinationList .appendChild(articleElement);
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
})();
