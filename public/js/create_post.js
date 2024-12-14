document.getElementById('home_image').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const imagePreview = document.getElementById('imagePreview');
        imagePreview.src = e.target.result; // Resmin base64 verisini alıyoruz
        document.getElementById('imagePreviewContainer').style.display = 'block'; // Önizlemeyi gösteriyoruz
    }

    if (file) {
        reader.readAsDataURL(file); // Dosyayı base64 formatında okur
    }
});

let currentIndex = 1;

function toggleContent(contentId, nextButtonId, action) {
    const currentContent = document.getElementById(contentId);
    const nextButton = document.getElementById(nextButtonId);

    if (action === "show") {
        currentContent.style.display = "block"; // İçeriği göster
        nextButton.style.display = "inline"; // Sonraki butonu göster
    } 
}

function showNextButton(currentButtonId, nextButtonId) {
    const currentButton = document.getElementById(currentButtonId);
    const nextButton = document.getElementById(nextButtonId);

    // Geçerli butonu gizle, bir sonraki butonu göster
    currentButton.style.display = "none";
    if (nextButton) {
        nextButton.style.display = "inline";
    }
}