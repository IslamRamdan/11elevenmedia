function buildCircularText() {
    const container = document.getElementById("consultationText");
    if (!container) return;

    const currentLang = document.documentElement.getAttribute("dir") === "rtl" ? "ar" : "en";
    const text = container.getAttribute(`data-${currentLang}`) || "";

    container.innerHTML = "";
    if (text.length === 0) return;

    const letters = Array.from(text);
    const step = 360 / Math.max(letters.length, 1);

    letters.forEach((char, index) => {
        const span = document.createElement("span");
        span.textContent = char === " " ? "\u00A0" : char;
        span.style.setProperty("--angle", `${index * step}deg`);
        container.appendChild(span);
    });
}

if (typeof AOS !== 'undefined') {
    AOS.init({ duration: 1000, once: false });
}

const navbar = document.querySelector('.navbar');
const navMenu = document.getElementById('navMenu');
const navLinks = document.querySelectorAll('.nav-link');

if (navbar) {
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 50);
    });
}

if (navLinks) {
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (!navMenu) return;
            if (navMenu.classList.contains('show')) {
                const bsCollapse = (typeof bootstrap !== 'undefined') ? bootstrap.Collapse.getInstance(navMenu) || new bootstrap.Collapse(navMenu) : null;
                if (bsCollapse) bsCollapse.hide();
            }
        });
    });
}

window.addEventListener('resize', () => {
    if (!navMenu || !navbar) return;
    if (window.innerWidth > 992) {
        navMenu.classList.remove('show');
        navbar.classList.remove('menu-open');
    }
});

if (navMenu && navbar) {
    navMenu.addEventListener('show.bs.collapse', () => navbar.classList.add('menu-open'));
    navMenu.addEventListener('hide.bs.collapse', () => navbar.classList.remove('menu-open'));
}

let currentLang = "en";
let swiperInstance = null;

function updateTranslations(lang) {
    document.querySelectorAll("[data-en], [data-ar], [data-en-placeholder], [data-ar-placeholder]").forEach(el => {
        const tag = el.tagName.toLowerCase();
        const isInput = (tag === "input" || tag === "textarea");

        if (el.hasAttribute("data-en-placeholder") && el.hasAttribute("data-ar-placeholder")) {
            el.placeholder = (lang === "ar")
                ? el.getAttribute("data-ar-placeholder")
                : el.getAttribute("data-en-placeholder");
        }

        if (el.hasAttribute("data-en") && el.hasAttribute("data-ar")) {
            if (!isInput) {
                el.textContent = (lang === "ar")
                    ? el.getAttribute("data-ar")
                    : el.getAttribute("data-en");
            }
        }
    });

    const btn = document.getElementById("lang-btn");
    if (btn) btn.textContent = (lang === "ar") ? "EN" : "AR";

    buildCircularText();
}

function initSwiper() {
    if (typeof Swiper === 'undefined') return;

    if (swiperInstance) {
        try { swiperInstance.destroy(true, true); } catch (e) { console.warn(e); }
        swiperInstance = null;
    }

    const slidesCount = document.querySelectorAll(".mySwiper .swiper-slide").length;

    swiperInstance = new Swiper(".mySwiper", {
        direction: "horizontal",
        loop: slidesCount > 1,
        autoplay: { delay: 2500, disableOnInteraction: false },
        watchOverflow: true,
        observer: true,
        observeParents: true,
        speed: 600,
        navigation: {
            nextEl: ".mySwiper .swiper-button-next",
            prevEl: ".mySwiper .swiper-button-prev",
        },
        pagination: {
            el: ".mySwiper .swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: { slidesPerView: 1, spaceBetween: 10 },
            768: { slidesPerView: 2, spaceBetween: 15 },
            992: { slidesPerView: 3, spaceBetween: 18 },
            1200: { slidesPerView: 4, spaceBetween: 20 },
        }
    });
}

document.addEventListener("click", function (e) {

    const slide = e.target.closest(".swiper-slide.video-slid");
    if (!slide) return;

    const videoSrc = slide.getAttribute("data-video");
    if (!videoSrc) {
        console.error("No data-video found!");
        return;
    }

    const video = document.getElementById("modalVideo");
    const source = video.querySelector("source");

    source.src = videoSrc;
    video.load();

    const modal = new bootstrap.Modal(document.getElementById("videoModal"));
    modal.show();
});

const videoModal = document.getElementById("videoModal");

if (videoModal) {
    videoModal.addEventListener("hidden.bs.modal", function () {
        const video = document.getElementById("modalVideo");
        const source = video.querySelector("source");

        video.pause();
        video.currentTime = 0;
        source.src = "";
    });
}


(function setupContactForm() {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const fields = {
        firstName: {
            el: document.getElementById('firstName'),
            err: document.getElementById('err-firstName'),
            regex: /^[A-Za-z\u0600-\u06FF\s\-]{2,50}$/
        },
        lastName: {
            el: document.getElementById('lastName'),
            err: document.getElementById('err-lastName'),
            regex: /^[A-Za-z\u0600-\u06FF\s\-]{2,50}$/
        },
        phone: {
            el: document.getElementById('phone'),
            err: document.getElementById('err-phone'),
            regex: /^[+\d()\s\-]{7,20}$/
        },
        email: {
            el: document.getElementById('email'),
            err: document.getElementById('err-email'),
            regex: /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/
        },
        message: {
            el: document.getElementById('message'),
            err: document.getElementById('err-message'),
            regex: /[\s\S]{10,2000}/
        }
    };

    const errors = {
        empty: {
            en: label => `${label} couldn't be empty.`,
            ar: label => `لا يمكن أن يكون ${label} فارغاً.`
        },
        invalid: {
            en: label => `${label} is invalid.`,
            ar: label => `${label} غير صالح.`
        },
        shortMessage: {
            en: () => `Message is too short (min 10 characters).`,
            ar: () => `الرسالة قصيرة جداً (الحد الأدنى 10 أحرف).`
        }
    };

    function getLabelForField(key, lang) {
        const f = fields[key].el;
        const enLabel = f.getAttribute('data-en-label') || f.getAttribute('data-en') || f.getAttribute('data-en-placeholder') || f.placeholder || key;
        const arLabel = f.getAttribute('data-ar-label') || f.getAttribute('data-ar') || f.getAttribute('data-ar-placeholder') || f.placeholder || key;
        return (lang === 'ar') ? arLabel : enLabel;
    }

    function showError(key, message) {
        const f = fields[key];
        if (!f) return;
        if (f.err) {
            f.err.style.display = 'block';
            f.err.textContent = message;
        }
        if (f.el) f.el.classList.add('is-invalid');
    }

    function clearError(key) {
        const f = fields[key];
        if (!f) return;
        if (f.err) {
            f.err.style.display = 'none';
            f.err.textContent = '';
        }
        if (f.el) f.el.classList.remove('is-invalid');
    }

    Object.keys(fields).forEach(key => {
        const f = fields[key];
        if (!f.el) return;
        f.el.addEventListener('input', () => {
            const value = f.el.value.trim();
            if (value === '') return;

            if (key === 'phone') {
                if (f.regex.test(value) && (value.replace(/\D/g, '').length >= 7)) {
                    clearError(key);
                }
                return;
            }

            if (f.regex.test(value)) {
                clearError(key);
            }
        });
    });

    form.addEventListener('submit', (evt) => {
        evt.preventDefault();

        let hasError = false;
        const lang = (document.documentElement.getAttribute('dir') === 'rtl') ? 'ar' : 'en';

        for (const key of Object.keys(fields)) {
            const f = fields[key];
            if (!f || !f.el) continue;
            const value = f.el.value.trim();

            if (value.length === 0) {
                const label = getLabelForField(key, lang);
                showError(key, errors.empty[lang](label));
                hasError = true;
                continue;
            }

            if (key === 'phone') {
                if (!f.regex.test(value) || value.replace(/\D/g, '').length < 7) {
                    const label = getLabelForField(key, lang);
                    showError(key, errors.invalid[lang](label));
                    hasError = true;
                } else {
                    clearError(key);
                }
                continue;
            }

            if (key === 'message') {
                if (!f.regex.test(value)) {
                    showError(key, errors.shortMessage[lang] ? errors.shortMessage[lang]() : errors.shortMessage.en());
                    hasError = true;
                } else {
                    clearError(key);
                }
                continue;
            }

            if (!f.regex.test(value)) {
                const label = getLabelForField(key, lang);
                showError(key, errors.invalid[lang](label));
                hasError = true;
            } else {
                clearError(key);
            }
        }

        if (hasError) {
            const firstInvalid = document.querySelector('.is-invalid');
            if (firstInvalid) firstInvalid.focus();
            return;
        }

        const firstName = fields.firstName.el.value.trim();
        const lastName = fields.lastName.el.value.trim();
        const phoneVal = fields.phone.el.value.trim();
        const emailVal = fields.email.el.value.trim();
        const messageVal = fields.message.el.value.trim();

        const whatsappNumber = "15551234567";

        let waMessage = '';
        if (lang === 'ar') {
            waMessage += `مرحباً، لدي رسالة من نموذج الاتصال:\n`;
            waMessage += `الاسم: ${firstName} ${lastName}\n`;
            waMessage += `الهاتف: ${phoneVal}\n`;
            waMessage += `البريد: ${emailVal}\n`;
            waMessage += `الرسالة:\n${messageVal}\n`;
        } else {
            waMessage += `Hello, new contact form message:\n`;
            waMessage += `Name: ${firstName} ${lastName}\n`;
            waMessage += `Phone: ${phoneVal}\n`;
            waMessage += `Email: ${emailVal}\n`;
            waMessage += `Message:\n${messageVal}\n`;
        }

        const waUrl = `https://wa.me/${encodeURIComponent(whatsappNumber)}?text=${encodeURIComponent(waMessage)}`;
        window.open(waUrl, '_blank');

        if (typeof Swal !== 'undefined') {
            Swal.fire({
                icon: 'success',
                title: (lang === 'ar') ? 'تم الإرسال بنجاح' : 'Sent Successfully',
                text: (lang === 'ar') ? 'تم إرسال رسالتك عبر واتساب.' : 'Your message was sent via WhatsApp.',
                confirmButtonText: (lang === 'ar') ? 'حسناً' : 'OK'
            }).then(() => {
                form.reset();
                Object.keys(fields).forEach(k => clearError(k));
            });
        } else {
            alert((lang === 'ar') ? 'تم إرسال رسالتك عبر واتساب.' : 'Your message was sent via WhatsApp.');
            form.reset();
            Object.keys(fields).forEach(k => clearError(k));
        }
    });
})();

const langBtn = document.getElementById("lang-btn");
if (langBtn) {
    langBtn.addEventListener("click", () => {
        currentLang = currentLang === "en" ? "ar" : "en";
        localStorage.setItem("preferredLang", currentLang);

        updateTranslations(currentLang);

        const html = document.documentElement;
        if (currentLang === "ar") {
            html.setAttribute("dir", "rtl");
            document.body.classList.add("rtl");
        } else {
            html.setAttribute("dir", "ltr");
            document.body.classList.remove("rtl");
        }

        buildCircularText();
        setTimeout(initSwiper, 100);
    });
}

window.addEventListener("load", () => {
    currentLang = localStorage.getItem("preferredLang") || "en";
    if (currentLang === "ar") {
        document.documentElement.setAttribute("dir", "rtl");
        document.body.classList.add("rtl");
    } else {
        document.documentElement.setAttribute("dir", "ltr");
        document.body.classList.remove("rtl");
    }

    updateTranslations(currentLang);

    initSwiper();

    buildCircularText();

    if (typeof AOS !== 'undefined' && typeof AOS.refresh === 'function') AOS.refresh();
});
