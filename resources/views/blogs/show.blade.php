<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1E-leven Media</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="100" tabindex="0">
    <section class="hero blog-hero">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">

                <a class="navbar-brand d-flex align-items-center logo" href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="logo-img">
                </a>

                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
                    <i class="fas fa-bars" aria-hidden="true"></i>
                </button>

                <div class="collapse navbar-collapse" id="navMenu">
                    <ul class="navbar-nav mx-auto gap-4 fs-6">
                        <li><a class="nav-link active" href="/#home" data-en="Home" data-ar="الرئيسية">Home</a>
                        </li>
                        <li><a class="nav-link" href="/#about" data-en="About Us" data-ar="من نحن">About Us</a>
                        </li>
                        <li><a class="nav-link" href="/#services" data-en="Services" data-ar="خدماتنا">Services</a></li>
                        <li><a class="nav-link" href="/#whyUs" data-en="Why Us" data-ar="لماذا نحن">Why Us</a>
                        </li>
                        <li><a class="nav-link" href="/#projects" data-en="Projects" data-ar="مشاريعنا">Projects</a>
                        </li>
                        <li><a class="nav-link" href="/#blogs" data-en="Blogs" data-ar="المدونة">Blogs</a></li>
                        <li><a class="nav-link" href="/#contactUs" data-en="Contact Us" data-ar="تواصل معنا">Contact
                                Us</a></li>
                    </ul>

                    <div
                        class="d-flex gap-3 social-icons ms-auto justify-content-center align-items-center mt-3 mt-lg-0">
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>

            </div>
        </nav>

        <div class="container" id="home">

            <div class="row g-4 align-items-center">

                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="content py-5" data-aos="fade-up" data-aos-delay="100">

                        <p class="welcome" data-en="WELCOME TO OUR Marketing Company"
                            data-ar="مرحباً بكم في شركتنا التسويقية">
                            <i class="fas fa-asterisk"></i>
                            WELCOME TO OUR Marketing Company
                        </p>

                        <h1 class="main-title" data-en="Expert Insights to Power Your Digital Growth"
                            data-ar="رؤى الخبراء لتعزيز نموك الرقمي">
                            Expert Insights to Power Your Digital Growth
                        </h1>

                        <p class="subtitle"
                            data-en="Stay ahead in the fast-changing digital world with expert insights and practical strategies designed to boost your brand’s visibility, engagement, and growth."
                            data-ar="كن في الطليعة في عالم رقمي سريع التغير من خلال رؤى الخبراء واستراتيجيات عملية مصممة لتعزيز رؤية علامتك التجارية ومشاركتها ونموها.">
                            Stay ahead in the fast-changing digital world with expert insights and practical strategies
                            designed to boost your brand’s visibility, engagement, and growth.
                        </p>
                    </div>
                </div>

                <div
                    class="col-lg-6 position-relative d-flex justify-content-center justify-content-lg-end order-1 order-lg-2">
                    <div class="hero-animation-container">
                        <!-- وضع الأنيميشن الكامل هنا (كما هو) -->
                        <div class="eleven-container">

                            <!-- 1) Eleven Pillars في المنتصف -->
                            <div class="eleven-wrapper">
                                <div class="eleven-structure">
                                    <div class="pillar"></div>
                                    <div class="pillar"></div>
                                </div>

                                <!-- 2) Services Orbit -->
                                <div class="services-orbit">
                                    <div class="service-node node-1" data-label="MARKETING"><i
                                            class="fas fa-bullhorn"></i></div>
                                    <div class="service-node node-2" data-label="BRANDING"><i
                                            class="fas fa-lightbulb"></i></div>
                                    <div class="service-node node-3" data-label="CONTENT"><i
                                            class="fas fa-pen-nib"></i>
                                    </div>
                                    <div class="service-node node-4" data-label="PRODUCTION"><i
                                            class="fas fa-camera-retro"></i></div>
                                    <div class="service-node node-5" data-label="SOCIAL"><i
                                            class="fas fa-hashtag"></i>
                                    </div>
                                    <div class="service-node node-6" data-label="STRATEGY"><i
                                            class="fas fa-chess"></i>
                                    </div>
                                </div>

                                <!-- Connection Lines + Glow + Particles -->
                                <div class="connections">
                                    <div class="connection-line"></div>
                                    <div class="connection-line"></div>
                                    <div class="connection-line"></div>
                                    <div class="connection-line"></div>
                                    <div class="connection-line"></div>
                                    <div class="connection-line"></div>
                                </div>

                                <div class="glow-ring"></div>
                                <div class="glow-ring"></div>
                                <div class="glow-ring"></div>

                                <div class="particle"></div>
                                <div class="particle"></div>
                                <div class="particle"></div>
                                <div class="particle"></div>
                                <div class="particle"></div>
                                <div class="particle"></div>

                            </div>

                            <!-- 3) Brand Text (تحت الرسمة كاملة) -->
                            <div class="brand brand-under">
                                <div class="brand-name">ELEVEN MEDIA</div>
                                <div class="brand-tagline">We Make Brands Go Viral</div>
                            </div>

                            <!-- 4) Equalizer آخر اشي تحت -->
                            <div class="equalizer equalizer-bottom">
                                <div class="eq-bar"></div>
                                <div class="eq-bar"></div>
                                <div class="eq-bar"></div>
                                <div class="eq-bar"></div>
                                <div class="eq-bar"></div>
                                <div class="eq-bar"></div>
                                <div class="eq-bar"></div>
                                <div class="eq-bar"></div>
                                <div class="eq-bar"></div>
                                <div class="eq-bar"></div>
                                <div class="eq-bar"></div>
                            </div>

                            <div class="reflection"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <main>
        <section class="blog-details py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="left">
                            <div class="img">
                                <img style="width:100%;"
                                    src="{{ $blog->thumbnail ? asset('storage/' . $blog->thumbnail) : asset('images/default-thumbnail.jpg') }}"
                                    alt="{{ $blog->title_ar }}" class="img-fluid rounded-4">

                            </div>
                            <div class="content">
                                <h2 class="my-4" data-ar="{{ $blog->title_ar }}" data-en="{{ $blog->title_en }}">
                                    {{ $blog->title_en }}
                                </h2>
                                <div id="blog-content">
                                    <div class="content-ar">
                                        {!! $blog->content_ar !!}
                                    </div>
                                    <div class="content-en" style="display: none;">
                                        {!! $blog->content_en !!}
                                    </div>
                                </div>



                                <div class="d-flex justify-content-between details-footer">
                                    <div>
                                        <i class="fas fa-calendar-alt mx-1 text-orange"></i>
                                        <span class="text-orange"
                                            data-ar="{{ $blog->created_at->locale('ar')->isoFormat('D MMMM YYYY') }}"
                                            data-en="{{ $blog->created_at->locale('en')->isoFormat('D MMM YYYY') }}">
                                            {{ $blog->created_at->locale('ar')->isoFormat('D MMMM YYYY') }}
                                        </span>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="right">
                            <div class="latest-news-card p-4 rounded-4 mb-5">
                                <h3 class="text-white mb-3" data-en="Latest News" data-ar="آخر الأخبار">
                                    Latest News
                                </h3>

                                <div class="underline mb-4"></div>
                                <div class="news-item d-flex gap-2 mb-4">
                                    <img src="images/service-3.jpg" class="news-img me-3" alt="">
                                    <div>
                                        <h6 class="text-white mb-1" data-en="Web3 And The Future"
                                            data-ar="الويب 3 ومستقبل التكنولوجيا">
                                            Web3 And The Future
                                        </h6>

                                        <p class="text-muted small mb-0" data-en="April 8, 2025"
                                            data-ar="8 أبريل 2025">
                                            April 8, 2025
                                        </p>
                                    </div>
                                </div>
                                <div class="news-item d-flex gap-2 mb-4">
                                    <img src="images/service-3.jpg" class="news-img me-3" alt="">
                                    <div>
                                        <h6 class="text-white mb-1" data-en="Web Development Essentials Every"
                                            data-ar="أساسيات تطوير الويب التي يجب على الجميع معرفتها">
                                            Web Development Essentials Every
                                        </h6>

                                        <p class="text-muted small mb-0" data-en="April 8, 2025"
                                            data-ar="8 أبريل 2025">
                                            April 8, 2025
                                        </p>
                                    </div>
                                </div>
                                <div class="news-item d-flex gap-2">
                                    <img src="images/service-3.jpg" class="news-img me-3" alt="">
                                    <div>
                                        <h6 class="text-white mb-1" data-en="How UX/UI Design Impacts"
                                            data-ar="كيف يؤثر تصميم UX/UI">
                                            How UX/UI Design Impacts
                                        </h6>

                                        <p class="text-muted small mb-0" data-en="April 8, 2025"
                                            data-ar="8 أبريل 2025">
                                            April 8, 2025
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="custom-card p-4 rounded-4 mb-5">
                                <h3 class="text-white mb-3" data-en="Category" data-ar="الفئات">
                                    Category
                                </h3>

                                <div class="underline mb-4"></div>

                                <ul class="list-unstyled mb-0">

                                    <li class="category-item mb-3">
                                        <i class="fa-regular fa-folder-open mx-1"></i>
                                        <span data-en="Ai Content" data-ar="محتوى الذكاء الاصطناعي">Ai Content</span>
                                    </li>

                                    <li class="category-item mb-3">
                                        <i class="fa-regular fa-folder-open mx-1"></i>
                                        <span data-en="Ai Technology" data-ar="تقنية الذكاء الاصطناعي">Ai
                                            Technology</span>
                                    </li>

                                    <li class="category-item mb-3">
                                        <i class="fa-regular fa-folder-open mx-1"></i>
                                        <span data-en="Brand Strategy" data-ar="استراتيجية العلامة التجارية">Brand
                                            Strategy</span>
                                    </li>

                                    <li class="category-item mb-3">
                                        <i class="fa-regular fa-folder-open"></i>
                                        <span data-en="Digital Agency" data-ar="وكالة رقمية">
                                            Digital Agency
                                        </span>
                                    </li>

                                    <li class="category-item mb-3">
                                        <i class="fa-regular fa-folder-open mx-1"></i>
                                        <span data-en="AI Intelligence" data-ar="ذكاء اصطناعي">AI Intelligence</span>
                                    </li>

                                    <li class="category-item">
                                        <i class="fa-regular fa-folder-open mx-1"></i>
                                        <span data-en="Social Media" data-ar="وسائل التواصل الاجتماعي">Social
                                            Media</span>
                                    </li>

                                </ul>
                            </div>


                            <div class="custom-card p-4 rounded-4">
                                <h3 class="text-white mb-3" data-en="Tag" data-ar="الوسوم">
                                    Tag
                                </h3>

                                <div class="underline mb-4"></div>

                                <div class="tag-wrapper d-flex flex-wrap gap-3">

                                    <span class="tag-item" data-en="Creation" data-ar="الإنشاء">
                                        Creation
                                    </span>

                                    <span class="tag-item" data-en="Creative" data-ar="إبداع">
                                        Creative
                                    </span>

                                    <span class="tag-item" data-en="Digital" data-ar="رقمي">
                                        Digital
                                    </span>

                                    <span class="tag-item" data-en="Strategy" data-ar="استراتيجية">
                                        Strategy
                                    </span>

                                    <span class="tag-item" data-en="Optimize" data-ar="تحسين">
                                        Optimize
                                    </span>

                                    <span class="tag-item" data-en="Solution" data-ar="حلول">
                                        Solution
                                    </span>

                                </div>
                            </div>

                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-section text-white">
        <div class="container">

            <div class="row g-4 align-items-start mb-5">

                <div class="col-lg-4 mb-4">
                    <h2 class="fw-bold footer-title">
                        <span data-en="Let’s achieve" data-ar="دعنا نحقق">
                            Let’s achieve
                        </span>

                        <span class="highlight" data-en="excellence" data-ar="التميز">
                            excellence
                        </span>
                        <span data-ar=" في وسائل التواصل الاجتماعي" data-en="in social media">in social media</span>

                    </h2>

                    <div class="footer-subscribe mt-4 d-flex align-items-center">
                        <p data-en="Lorem ipsum dolor sit amet consectetur adipisicing elit. A nesciunt molestias pariatur, itaque sit veritatis fugiat blanditiis in ipsa commodi, quibusdam nemo eum deserunt. Excepturi laborum tempora est molestias hic."
                            data-ar="لوريم إيبسوم دولور سيت أميت، كونسيكتيتور أديبيسيتينغ إيليت. تواجه بعض الإزعاجات، اجلس في حقيقة الأمور، وعيوب بسيطة، والتي لا مفر منها. باستثناء طبقة مؤقتة، هناك بعض الإزعاجات.">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A nesciunt molestias pariatur,
                            itaque sit veritatis fugiat blanditiis in ipsa commodi, quibusdam nemo eum deserunt.
                            Excepturi laborum tempora est molestias hic.
                        </p>
                    </div>

                </div>
                <div class="col-lg-4 col-6 mb-4">
                    <h5 class="fw-bold mb-3 px-3" data-en="Quick Link" data-ar="روابط سريعة">
                        Quick Link
                    </h5>
                    <ul class="list-unstyled footer-links px-3">
                        <li><a href="/#home" data-en="Home" data-ar="الرئيسية">Home</a></li>
                        <li><a href="/#about" data-en="About Us" data-ar="من نحن">About Us</a></li>
                        <li><a href="/#services" data-en="Services" data-ar="خدماتنا">Services</a></li>
                        <li><a href="/#whyUs" data-en="Why Us" data-ar="لماذا نحن">Why Us</a></li>
                        <li><a href="/#projects" data-en="Projects" data-ar="مشاريعنا">Projects</a></li>
                        <li><a href="/#contactUs" data-en="Contact Us" data-ar="تواصل معنا">Contact
                                Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-6 mb-4">
                    <h5 class="fw-bold mb-3" data-en="Services" data-ar="الخدمات">
                        Services
                    </h5>
                    <ul class="list-unstyled footer-links p-0">
                        <li><a href="/#services" data-en="Paid Advertising Campaigns"
                                data-ar="حملات الإعلانات المدفوعة">Paid
                                Advertising Campaigns</a></li>
                        <li><a href="/#services" data-en="Creative Content Production"
                                data-ar="إنتاج المحتوى الإبداعي">Creative
                                Content Production</a></li>
                        <li><a href="/#services" data-en="Photography & Visual Production"
                                data-ar="التصوير والإنتاج المرئي">Photography & Visual Production</a></li>
                        <li><a href="/#services" data-en="Social Media Account Management"
                                data-ar="إدارة حسابات التواصل الاجتماعي">Social Media Account Management</a></li>
                        <li><a href="/#services" data-en="Customized Marketing Solutions"
                                data-ar="حلول تسويقية مخصصة">Customized
                                Marketing Solutions</a></li>
                    </ul>
                </div>



            </div>
            <div class="d-flex flex-column footer-end-box flex-lg-row align-items-center justify-content-between pt-5">
                <p class="mb-2 mb-lg-0" data-en="Copyright © 2025 All Rights Reserved."
                    data-ar="حقوق النشر © 2025 جميع الحقوق محفوظة.">
                    Copyright © 2025 All Rights Reserved.
                </p>
                <div class="footer-social d-flex gap-3">

                    <a href="#" class="social-btn" data-en="Facebook" data-ar="فيسبوك">Facebook</a>

                    <a href="#" class="social-btn" data-en="Instagram" data-ar="إنستغرام">Instagram</a>

                    <a href="#" class="social-btn" data-en="Twitter" data-ar="تويتر">Twitter</a>

                </div>

            </div>


        </div>
    </footer>

    <button class="floating-btn" id="lang-btn" data-en="AR" data-ar="EN">AR</button>

    <script>
        document.querySelector('#lang-btn').addEventListener('click', function() {
            const contentAr = document.querySelector('.content-ar');
            const contentEn = document.querySelector('.content-en');

            // اللغة الحالية من Local Storage (افتراضي EN)
            let currentLang = localStorage.getItem('preferredLang') || 'en';

            // قلب اللغة
            let newLang = currentLang === 'en' ? 'ar' : 'en';

            // عرض المحتوى حسب اللغة الجديدة
            if (newLang === 'en') {
                contentAr.style.display = 'none';
                contentEn.style.display = 'block';
            } else {
                contentAr.style.display = 'block';
                contentEn.style.display = 'none';
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const contentAr = document.querySelector('.content-ar');
            const contentEn = document.querySelector('.content-en');

            let currentLang = localStorage.getItem('preferredLang') || 'en';

            if (currentLang === 'en') {
                contentAr.style.display = 'none';
                contentEn.style.display = 'block';
            } else {
                contentAr.style.display = 'block';
                contentEn.style.display = 'none';
            }
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
