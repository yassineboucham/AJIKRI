function toggleAvailability(checkbox) {
    let announcementId = checkbox.getAttribute('data-id');
    let availability = checkbox.checked ? 1 : 0;

    // Send AJAX request to update availability
    fetch(`/announcement/${announcementId}/availability`, {
        method: 'PATCH',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ availability: availability })
    })
    .then(response => response.json())
    .then(data => {
        // Update the label color and text
        const label = checkbox.nextElementSibling;
        label.textContent = availability ? 'Disponible' : 'Non disponible';
        label.style.color = availability ? 'green' : 'red';

        console.log(data.message);
    })
    .catch(error => console.error('Error:', error));
}
