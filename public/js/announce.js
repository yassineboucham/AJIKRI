function filterCards() {
    const filterValue = document.getElementById('filterSelect').value;
    const minPrice = parseFloat(document.getElementById('minPrice').value) || 0;
    const maxPrice = parseFloat(document.getElementById('maxPrice').value) || Infinity;
    const ville = document.getElementById('villeSelect').value;
    const dispo = document.querySelector('input[name="dispoSelect"]:checked').value;
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        const category = card.getAttribute('data-category');
        const priceText = card.querySelector('.price').textContent;
        const priceMatch = priceText.match(/Prix:\s*(\d+)\s*Dhs/);
        const price = priceMatch ? parseFloat(priceMatch[1]) : 0;
        const villeSecteurText = card.querySelector('.Ville_Secteur').textContent;
        const isVilleVisible = ville === "" || villeSecteurText.startsWith(ville);
        const isDispoVisible = (dispo === "all") ||
                            (dispo === "disponible" && card.querySelector('.dispo').textContent.includes("Disponible")) ||
                            (dispo === "indisponible" && card.querySelector('.dispo').textContent.includes("Indisponible"));

        if ((filterValue === "" || category === filterValue) &&
            (price >= minPrice && price <= maxPrice) &&
            isVilleVisible &&
            isDispoVisible) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
}

    function updateAvailability(checkbox) {
      const label = checkbox.nextElementSibling;
      if (checkbox.checked) {
        label.textContent = 'Disponible';
        label.style.color = 'green';
      } else {
        label.textContent = 'Indisponible';
        label.style.color = 'red';
    }
  }
