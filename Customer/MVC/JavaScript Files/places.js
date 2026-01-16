function showPlaceDetails() {
    const select = document.getElementById('placeSelect');
    const detailsBox = document.getElementById('detailsBox');
    const displayImg = document.getElementById('displayImg');
    const displayName = document.getElementById('displayName');
    const displayDesc = document.getElementById('displayDesc');
    const displayMapLink = document.getElementById('displayMapLink');

    const selectedIndex = select.value;

    if (selectedIndex !== "") {
        const data = places[selectedIndex];
        
        displayName.innerText = data.place_name;
        displayDesc.innerText = data.description;
        displayImg.src = data.image_path;
        displayMapLink.href = data.location_url;
}
else {
    detailsBox.classList.add('hidden');
}
}