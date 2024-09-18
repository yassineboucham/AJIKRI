document.addEventListener('DOMContentLoaded', function() {
    // Select category and toggle related options
    const categories = JSON.parse(document.getElementById('categoriesData').textContent);
    const categorySelect = document.getElementById('categorySelect');

    categorySelect.addEventListener('change', function() {
        categories.forEach(category => {
            const optionsElement = document.getElementById(category.catégorie + 'Options');
            if (optionsElement) {
                optionsElement.style.display = this.value == category.id ? 'block' : 'none';
            }
        });
        checkSubmitButtonState(); // Check form validity after selecting a category
    });

    // Show sector options based on city selection
    document.getElementById('citySelect').addEventListener('change', function() {
        document.getElementById('sectorOptions').style.display = this.value ? 'block' : 'none';
        checkSubmitButtonState(); // Check form validity after selecting a city
    });

    // Image preview
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
        checkSubmitButtonState(); // Check form validity after selecting an image
    }

    // Attach image preview to file input elements
    document.getElementById('customFile1').addEventListener('change', function(event) {
        displaySelectedImage(event, 'selectedImage1');
    });
    document.getElementById('customFile2').addEventListener('change', function(event) {
        displaySelectedImage(event, 'selectedImage2');
    });
    document.getElementById('customFile3').addEventListener('change', function(event) {
        displaySelectedImage(event, 'selectedImage3');
    });
    document.getElementById('customFile4').addEventListener('change', function(event) {
        displaySelectedImage(event, 'selectedImage4');
    });

    // Form validation and enabling/disabling the submit button
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
});
