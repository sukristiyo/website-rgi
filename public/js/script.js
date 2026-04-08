// Navbar Scroll Effect
window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Background Image Slider (Crossfade)
const slides = document.querySelectorAll('.hero-slide');
let currentSlide = 0;

function nextSlide() {
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add('active');
}

// Fade background every 6 seconds
if(slides.length > 0) {
    setInterval(nextSlide, 6000);
}

// Simple form formatting
document.addEventListener("DOMContentLoaded", () => {
    const telInput = document.getElementById('telepon');
    if(telInput) {
        telInput.addEventListener('input', function(e) {
            // Hanya izinkan angka
             this.value = this.value.replace(/[^0-9]/g, '');
        });
    }
});

// 6 Langkah Section Script
let currentLangkah = 0;
const langkahPanels = document.querySelectorAll('.step-panel');
const langkahDots = document.querySelectorAll('.step-dot');

function updateLangkah() {
    langkahPanels.forEach((panel, i) => {
        if(i === currentLangkah) {
            panel.classList.add('active');
            langkahDots[i].classList.add('active');
        } else {
            panel.classList.remove('active');
            langkahDots[i].classList.remove('active');
        }
    });
}

function goToStep(step) {
    currentLangkah = step;
    updateLangkah();
}

function nextStepLangkah() {
    currentLangkah = (currentLangkah + 1) % langkahPanels.length;
    updateLangkah();
}

function prevStepLangkah() {
    currentLangkah = (currentLangkah - 1 + langkahPanels.length) % langkahPanels.length;
    updateLangkah();
}

// WhatsApp Intercept & Floating
const floatWa = document.getElementById('floatWa');
const waNumber = '6282268669684'; 
const waForm = document.getElementById('waForm');

window.addEventListener('scroll', () => {
    // Floating WA logic
    if(floatWa) {
        if (window.scrollY > 300) {
            floatWa.style.opacity = '1';
            floatWa.style.visibility = 'visible';
        } else {
            floatWa.style.opacity = '0';
            floatWa.style.visibility = 'hidden';
        }
    }
});

if(waForm) {
    waForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const nama = document.getElementById('nama').value;
        const noWa = document.getElementById('telepon').value;
        const ruangan = document.getElementById('ruang').value;
        
        let message = `Halo Kak, perkenalkan saya *${nama}*.\nSaya tertarik dengan penawaran RGI Decor dan ingin menanyakan estimasi biaya mengenai layanan desain interior untuk *${ruangan}*.\n\nMohon informasi lebih lanjutnya. Terima kasih!`;
        
        let waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;
        
        window.open(waUrl, '_blank');
    });
}
