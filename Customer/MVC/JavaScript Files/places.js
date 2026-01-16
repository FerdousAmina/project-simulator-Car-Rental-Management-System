function showDistrict() {
    const select = document.getElementById('districtSelect');
    const container = document.getElementById('placesContainer');
    const selectedDistrict = select.value;

    container.innerHTML = ""; 
    
    if (selectedDistrict !== "" && places[selectedDistrict]) {
        const districtPlaces = places[selectedDistrict];

        Object.values(districtPlaces).forEach(place => {
            const placeHTML = `<div class="place-card">
            <img src="${place.image_path}" alt="${place.place_name}">
                <h2>${place.place_name}</h2>
                <p>${place.description}</p>
                <a href="${place.location_url}" target="_blank">View on Google Map</a>
            </div>`;
            container.innerHTML += placeHTML;
        });
    }
}
