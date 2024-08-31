// Sélectionnez une catégorie
document.getElementById('categorySelect').addEventListener('change', function() {
    document.getElementById('vehicleOptions').style.display = this.value === 'vehicle' ? 'block' : 'none';
    document.getElementById('motoOptions').style.display = this.value === 'moto' ? 'block' : 'none';
    document.getElementById('houseOptions').style.display = this.value === 'maison' ? 'block' : 'none';
    document.getElementById('partyOptions').style.display = this.value === 'fete' ? 'block' : 'none';
});
// Choisir la ville
document.getElementById('citySelect').addEventListener('change', function() {
    document.getElementById('sectorOptions').style.display = this.value ? 'block' : 'none';
});
// images
function displaySelectedImage(event, elementId) {
    const selectedImage = document.getElementById(elementId);
    const fileInput = event.target;

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            selectedImage.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}
// submit
const formInputs = document.querySelectorAll('input[required], select[required], textarea[required]');
const imageInputs = document.querySelectorAll('input[type="file"]');
const submitButton = document.getElementById('submitButton');

const checkSubmitButtonState = () => {
    const allFilled = Array.from(formInputs).every(input => input.value.trim() !== '');
    const allImagesSelected = Array.from(imageInputs).every(input => input.files.length > 0);
    submitButton.disabled = !(allFilled && allImagesSelected);
};

formInputs.forEach(input => {
    input.addEventListener('input', checkSubmitButtonState);
});

imageInputs.forEach(input => {
    input.addEventListener('change', checkSubmitButtonState);
});
