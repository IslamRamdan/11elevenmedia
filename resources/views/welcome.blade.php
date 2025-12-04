<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1E-leven Media</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/all.min.css') }}"> --}}
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
    <section class="hero">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">

                <a class="navbar-brand d-flex align-items-center logo" href="#">
                    <img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="logo-img">
                </a>

                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
                    <i class="fas fa-bars" aria-hidden="true"></i>
                </button>

                <div class="collapse navbar-collapse" id="navMenu">
                    <ul class="navbar-nav mx-auto gap-4 fs-6">
                        <li><a class="nav-link active" href="#home" data-en="Home" data-ar="الرئيسية">Home</a></li>
                        <li><a class="nav-link" href="#about" data-en="About Us" data-ar="من نحن">About Us</a></li>
                        <li><a class="nav-link" href="#services" data-en="Services" data-ar="خدماتنا">Services</a></li>
                        <li><a class="nav-link" href="#whyUs" data-en="Why Us" data-ar="لماذا نحن">Why Us</a></li>
                        <li><a class="nav-link" href="#projects" data-en="Projects" data-ar="مشاريعنا">Projects</a></li>
                        <li><a class="nav-link" href="#blogs" data-en="Blogs" data-ar="المدونة">Blogs</a></li>
                        <li><a class="nav-link" href="#contactUs" data-en="Contact Us" data-ar="تواصل معنا">Contact
                                Us</a></li>
                    </ul>

                    <div
                        class="d-flex gap-3 social-icons ms-auto justify-content-center align-items-center mt-3 mt-lg-0">
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/eleven.mediaagency?igsh=bmhna2oxbDBpZjVx"
                            class="social-link"><i class="fab fa-instagram"></i></a>
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

                        <h1 class="main-title" data-en="Driving Business Success Through Smart Marketing Solutions"
                            data-ar="نقود نجاح أعمالكم من خلال حلول تسويقية ذكية">
                            Driving Business Success Through Smart Marketing Solutions
                        </h1>

                        <p class="subtitle"
                            data-en="We help brands grow, engage, and convert by delivering innovative marketing strategies tailored to your business"
                            data-ar="نساعد العلامات التجارية على النمو والتفاعل والتحويل من خلال تقديم استراتيجيات تسويقية مبتكرة مصممة خصيصاً لأعمالكم">
                            We help brands grow, engage, and convert by delivering innovative marketing strategies
                            tailored to your business
                        </p>

                        <div class="d-flex flex-wrap gap-3 align-items-center mt-4">
              <a href="tel:+962792002602"
   class="btn-start"
   style="text-decoration: none;" 
   data-en="Call Now"
   data-ar="اتصل الآن">
    Call Now
</a>



                            <span class="rating ms-3">
                                <span>★★★★★</span>
                                <span data-en="(1000+ review)" data-ar="(أكثر من 1000 تقييم)">(1000+ review)</span>
                            </span>
                        </div>
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
        <section class="about-section py-5" id="about">
            <div class="glow-bottom-right"></div>
            <div class="glow-bottom-left"></div>
            <div class="container py-5">

                <div class="row g-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="mb-5">
                            <div class="position-relative d-flex justify-content-center align-items-center mt-4">
                                <img src="{{ asset('images/about-1.jpg') }}" class="img-fluid mx-auto first-img"
                                    alt="">
                                <div class="hook-wrapper">
                                    <img src="{{ asset('images/about-2.jpg') }}" class="img-fluid hook-img"
                                        alt="">
                                </div>
                            </div>

                            <div class="stats-badge d-flex align-items-center gap-3 rounded-pill">
                                <div class="icon-circle"></div>
                                <div>
                                    <h4 class="m-0 fw-bolder" data-en="653+" data-ar="653+">653+</h4>
                                    <p class="m-0 small fw-bold" data-en="Project Complete" data-ar="مشروع مكتمل">
                                        Project Complete</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 text-white" data-aos="fade-up" data-aos-delay="100">

                        <div class="p-3 py-5">
                            <p class="text-uppercase fw-bold mb-2 sub-heading" data-en="About Company"
                                data-ar="عن الشركة">
                                About Company
                            </p>

                            <h2 class="fw-bold mb-4" data-en=" We are ELEVEN MEDIA" data-ar="نحن شركة ELEVEN MEDIA ">
                                We are ELEVEN MEDIA
                            </h2>

                            <p class="text-light mb-4"
                                data-en="a digital marketing agency specialized in managing and enhancing brand presence across social media platforms. We believe that the strength of any brand begins with its ability to communicate effectively with its audience. That’s why we develop smart strategies and inspiring content that reflect our clients’ identities and help them achieve their goals."
                                data-ar="وكالة تسويق رقمي متخصصة في إدارة وتطوير حضور العلامات التجارية على منصّات التواصل الاجتماعي. نؤمن بأن قوة أي علامة تجارية تبدأ من قدرتها على التواصل الفعّال مع جمهورها، لذلك نعمل على ابتكار استراتيجيات ذكية ومحتوى مُلهِم يعكس هوية عملائنا ويحقق أهدافهم.">
                                a digital marketing agency specialized in managing and enhancing brand presence across
                                social media platforms. We believe that the strength of any brand begins with its
                                ability to communicate effectively with its audience. That’s why we develop smart
                                strategies and inspiring content that reflect our clients’ identities and help them
                                achieve their goals.

                            </p>

                            <div
                                class="d-flex flex-wrap gap-2 justify-content-center justify-content-sm-between align-items-center">
                                <div>
                                    <ul class="list-unstyled mb-5">

                                        <li class="mb-2">
                                            <i class="far fa-dot-circle mx-2 text-orange"></i>
                                            <span data-en="A dedicated team of creative specialists."
                                                data-ar="فريق متخصص من المبدعين المحترفين.">
                                                A dedicated team of creative specialists.
                                            </span>
                                        </li>

                                        <li class="mb-2">
                                            <i class="far fa-dot-circle mx-2 text-orange"></i>
                                            <span data-en="Clear strategy and measurable results."
                                                data-ar="استراتيجية واضحة ونتائج قابلة للقياس.">
                                                Clear strategy and measurable results.
                                            </span>
                                        </li>

                                        <li>
                                            <i class="far fa-dot-circle mx-2 text-orange"></i>
                                            <span data-en="Strong commitment to achieving client goals."
                                                data-ar="التزام قوي بتحقيق أهداف العملاء.">
                                                Strong commitment to achieving client goals.
                                            </span>
                                        </li>

                                    </ul>

                                    <a href="#services" class="btn-start text-decoration-none">
                                        <span data-en="More About" data-ar="المزيد عنّا">More About</span>
                                        <i class="fas fa-arrow-up-right-from-square ms-2"></i>
                                    </a>

                                </div>

                                <div class="px-lg-5 mt-4 mt-xl-0">
                                    <div class="stats-box text-center p-4 rounded-4 mt-4 ms-auto">
                                        <h3 class="text-orange fw-bold" data-en="100%" data-ar="100%">
                                            100%
                                        </h3>

                                        <p class="small" data-en="Success Rate" data-ar="نسبة النجاح">
                                            Success Rate
                                        </p>

                                        <h4 class="fw-bold text-orange pt-3" data-en="3,536" data-ar="٣٬٥٣٦">
                                            3,536
                                        </h4>

                                        <p class="small" data-en="Satisfied clients" data-ar="عملاء راضون">
                                            Satisfied clients
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="consultation-circle mx-auto mt-5">
                            <div id="consultationText" class="wheel-text" data-en="1E-leven Media"
                                data-ar="1E-leven Media">
                            </div>


                            <div class="wheel-center">
                                <div class="arrow-icon">
                                    <i class="fas fa-bullhorn text-orange fs-5" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="services-section py-5 position-relative" id="services">
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="shape"></div>
            <div class="ball"></div>

            <div class="container py-5">
                <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-uppercase fw-bold sub-heading mb-1" data-en="Services" data-ar="الخدمات">Services
                    </p>

                    <h2 class="fw-bold text-white">
                        <span data-en="Modern" data-ar="حلول">Modern</span>
                        <span class="text-orange" data-en="Marketing Solutions" data-ar="تسويقية حديثة">Marketing
                            Solutions</span>
                        <span data-en="built to elevate your brand" data-ar="مصممة لرفع مستوى علامتك التجارية">built
                            to
                            elevate your brand</span>
                    </h2>
                </div>

                <!-- INTRO TEXT -->
                <div class="row g-4 mb-5 py-5">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="content text-center">
                            <p data-en="At Eleven Media, we believe that the strength of every brand lies in the clarity of its message, the quality of its content, and the accuracy of its reach. That is why we provide integrated marketing solutions that help businesses and individuals achieve measurable results and build a powerful digital presence across all social media platforms."
                                data-ar="في إليفن ميديا، نؤمن بأن قوة أي علامة تجارية تكمن في وضوح رسالتها وجودة محتواها ودقة وصولها. لذلك نقدم حلولًا تسويقية متكاملة تساعد الشركات والأفراد على تحقيق نتائج ملموسة وبناء حضور رقمي قوي على مختلف منصات التواصل الاجتماعي.">
                                At Eleven Media, we believe that the strength of every brand lies in the clarity of its
                                message, the quality of its content, and the accuracy of its reach. That is why we
                                provide integrated marketing solutions that help businesses and individuals achieve
                                measurable results and build a powerful digital presence across all social media
                                platforms.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="content text-center">
                            <p data-en="We work closely with our clients from the very first step—starting with market and competitor analysis, all the way to executing advertising campaigns and producing high-impact visual content that reflects the brand identity and attracts the targeted audience."
                                data-ar="نعمل بشكل وثيق مع عملائنا منذ الخطوة الأولى—بدءًا من تحليل السوق والمنافسين وصولًا إلى تنفيذ الحملات الإعلانية وإنتاج محتوى بصري عالي التأثير يعكس هوية العلامة التجارية ويجذب الجمهور المستهدف.">
                                We work closely with our clients from the very first step—starting with market and
                                competitor analysis, all the way to executing advertising campaigns and producing
                                high-impact visual content that reflects the brand identity and attracts the targeted
                                audience.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- SERVICE CARDS -->
                <div class="row g-4">

                    <!-- CARD 1 -->
                    <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card h-100">
                            <div class="img">
                                <img src="{{ asset('images/service-1.jpg') }}" class="img-fluid"
                                    alt="Paid Advertising Campaigns">
                            </div>

                            <div class="p-2">
                                <div class="d-flex align-items-center mt-3 mb-3 gap-3">
                                    <span
                                        class="badge-icon rounded-circle d-flex align-items-center justify-content-center">01</span>

                                    <h5 class="m-0 text-white fw-bold" data-en="Paid Advertising Campaigns"
                                        data-ar="حملات الإعلانات المدفوعة">
                                        Paid Advertising Campaigns
                                    </h5>
                                </div>
                                

                                <p class="text-muted mb-4"
                                    data-en="We create professional and data-driven advertising campaigns across all social media platforms, designed to ensure the highest return on investment."
                                    data-ar="نقوم بإنشاء حملات إعلانية احترافية تعتمد على البيانات عبر جميع منصات التواصل الاجتماعي، بهدف تحقيق أعلى عائد على الاستثمار.">
                                    We create professional and data-driven advertising campaigns...
                                </p>

                                <p data-en="Our advertising services include:" data-ar="تشمل خدماتنا الإعلانية:">Our
                                    advertising services include:</p>

                                <ul class="list-unstyled mb-5">

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Comprehensive market research and competitor analysis"
                                            data-ar="إجراء بحوث سوق شاملة وتحليل المنافسين">Comprehensive market
                                            research and competitor analysis</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span
                                            data-en="Identifying the ideal target audience (age, interests, location)"
                                            data-ar="تحديد الجمهور المستهدف المثالي (العمر، الاهتمامات، الموقع)">Identifying
                                            the ideal target audience</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Creating and designing high-quality, engaging ads"
                                            data-ar="إنشاء وتصميم إعلانات عالية الجودة وجذابة">Designing high-quality
                                            engaging ads</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span
                                            data-en="Smart budget management to achieve the best results at the lowest cost"
                                            data-ar="إدارة الميزانية بذكاء لتحقيق أفضل النتائج بأقل تكلفة"> Smart
                                            budget
                                            management</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Continuous optimization to increase reach and engagement"
                                            data-ar="التحسين المستمر لزيادة الوصول والتفاعل">Continuous
                                            optimization</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Detailed performance reports with future recommendations"
                                            data-ar="تقارير أداء مفصلة مع توصيات مستقبلية"> Detailed performance
                                            reports</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card h-100">
                            <div class="img">
                                <img src="{{ asset('images/service-2.jpg') }}" class="img-fluid"
                                    alt="Creative Content Production">
                            </div>

                            <div class="p-2">
                                <div class="d-flex align-items-center mt-3 mb-3 gap-3">
                                    <span
                                        class="badge-icon rounded-circle d-flex align-items-center justify-content-center">02</span>

                                    <h5 class="m-0 text-white fw-bold" data-en="Creative Content Production"
                                        data-ar="إنتاج المحتوى الإبداعي">
                                        Creative Content Production
                                    </h5>
                                </div>

                                <p class="text-muted mb-4"
                                    data-en="We believe content is the heart of every digital presence. We create tailored content that reflects the client’s vision in a modern and engaging way."
                                    data-ar="نؤمن بأن المحتوى هو قلب كل حضور رقمي. نقوم بإنشاء محتوى مخصص يعكس رؤية العميل بطريقة عصرية وجذابة.">
                                    We believe content is the heart...
                                </p>

                                <p data-en="Our content services include:" data-ar="تشمل خدمات المحتوى لدينا:">Our
                                    content services include:</p>

                                <ul class="list-unstyled mb-5">
                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Writing powerful and persuasive ad copy"
                                            data-ar="كتابة نصوص إعلانية قوية ومقنعة">Writing persuasive ad copy</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Developing complete monthly content plans"
                                            data-ar="إعداد خطط محتوى شهرية متكاملة">
                                            Monthly content planning
                                        </span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Generating creative ideas that match the brand identity"
                                            data-ar="ابتكار أفكار إبداعية تتناسب مع هوية العلامة التجارية">Creative
                                            idea
                                            generation</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Producing interactive and engaging content"
                                            data-ar="إنتاج محتوى تفاعلي وجذاب">
                                            Interactive content production
                                        </span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span
                                            data-en="Using high-ranking keywords for improved visibility and searchability"
                                            data-ar="استخدام كلمات مفتاحية ذات تصنيف عالٍ لتحسين الظهور والوصول">Keyword-optimized
                                            content</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card h-100">
                            <div class="img">
                                <img src="{{ asset('images/service-3.jpg') }}" class="img-fluid"
                                    alt="Photography & Visual Production">
                            </div>

                            <div class="p-2">
                                <div class="d-flex align-items-center mt-3 mb-3 gap-3">
                                    <span
                                        class="badge-icon rounded-circle d-flex align-items-center justify-content-center">03</span>

                                    <h5 class="m-0 text-white fw-bold" data-en="Photography & Visual Production"
                                        data-ar="التصوير والإنتاج المرئي">
                                        Photography & Visual Production
                                    </h5>
                                </div>

                                <p class="text-muted mb-4"
                                    data-en="We deliver high-quality visual production that highlights products and services in a modern, attractive way."
                                    data-ar="نقدم إنتاجًا بصريًا عالي الجودة يبرز المنتجات والخدمات بطريقة عصرية وجذابة.">
                                    We deliver high-quality visual production...
                                </p>

                                <p data-en="Our production services include:" data-ar="تشمل خدمات الإنتاج لدينا:">
                                    Our production services include:
                                </p>

                                <ul class="list-unstyled mb-5">
                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="High-resolution photography"
                                            data-ar="التصوير عالي الدقة">High-resolution photography</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Professional brand video production"
                                            data-ar="إنتاج فيديوهات احترافية للعلامة التجارية"> Brand video
                                            production</span>

                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Video editing and modern creative montage"
                                            data-ar="مونتاج فيديو إبداعي احترافي">Video editing & montage</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span
                                            data-en="Creating unique and engaging Reels for daily or promotional content"
                                            data-ar="إنشاء ريلز مميزة وجذابة للمحتوى اليومي أو الترويجي"> Reels
                                            creation</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span
                                            data-en="Visual direction that strengthens brand identity and captures attention"
                                            data-ar="الإخراج البصري الذي يعزز هوية العلامة التجارية ويجذب الانتباه">Visual
                                            direction</span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 4 -->
                    <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card h-100">
                            <div class="img">
                                <img src="{{ asset('images/service-4.jpg') }}" class="img-fluid"
                                    alt="Social Media Account Management">
                            </div>

                            <div class="p-2">
                                <div class="d-flex align-items-center mt-3 mb-3 gap-3">
                                    <span
                                        class="badge-icon rounded-circle d-flex align-items-center justify-content-center">04</span>

                                    <h5 class="m-0 text-white fw-bold" data-en="Social Media Account Management"
                                        data-ar="إدارة حسابات التواصل الاجتماعي">
                                        Social Media Account Management
                                    </h5>
                                </div>

                                <p class="text-muted mb-4"
                                    data-en="We manage your social media accounts to ensure continuous engagement and steady growth."
                                    data-ar="ندير حساباتك على وسائل التواصل لضمان تفاعل مستمر ونمو ثابت.">
                                    We manage your social media accounts...
                                </p>

                                <p data-en="Our management services include:" data-ar="تشمل خدمات الإدارة لدينا:">
                                    Our management services include:
                                </p>

                                <ul class="list-unstyled mb-5">

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Publishing content consistently and professionally"
                                            data-ar="نشر المحتوى بشكل مستمر وبطريقة احترافية">Consistent content
                                            publishing</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span
                                            data-en="Designing posts, banners, and visuals aligned with brand identity"
                                            data-ar="تصميم المنشورات والبنرات والمواد البصرية بما يتناسب مع هوية العلامة التجارية">Social
                                            media design</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Handling messages, comments, and audience interactions"
                                            data-ar="التعامل مع الرسائل والتعليقات وتفاعل الجمهور"> Audience
                                            interaction</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Performance analysis with regular reports"
                                            data-ar="تحليل الأداء مع تقارير دورية"> Performance analysis</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Social SEO optimization to boost visibility"
                                            data-ar="تحسين الظهور على منصات التواصل (Social SEO)">Social SEO
                                            optimization</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 5 -->
                    <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card h-100">
                            <div class="img">
                                <img src="{{ asset('images/service-5.jpg') }}" class="img-fluid"
                                    alt="Customized Marketing Solutions">
                            </div>

                            <div class="p-2">
                                <div class="d-flex align-items-center mt-3 mb-3 gap-3">
                                    <span
                                        class="badge-icon rounded-circle d-flex align-items-center justify-content-center">05</span>

                                    <h5 class="m-0 text-white fw-bold" data-en="Customized Marketing Solutions"
                                        data-ar="حلول تسويقية مخصصة">
                                        Customized Marketing Solutions
                                    </h5>
                                </div>

                                <p class="text-muted mb-4"
                                    data-en="We understand that each client has different goals and budgets, so we offer fully customizable plans that fit every need."
                                    data-ar="ندرك أن لكل عميل أهدافًا وميزانيات مختلفة، لذلك نقدم خططًا قابلة للتخصيص بالكامل لتناسب كل الاحتياجات.">
                                    We understand that each client has different goals...
                                </p>

                                <p data-en="We provide:" data-ar="نحن نقدم:">We provide:</p>

                                <ul class="list-unstyled mb-5">
                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Multiple monthly marketing packages"
                                            data-ar="عدة باقات تسويقية شهرية">Monthly marketing packages</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span data-en="Seasonal and special-occasion campaigns"
                                            data-ar="حملات موسمية وحملات المناسبات الخاصة">Seasonal campaigns</span>
                                    </li>

                                    <li>
                                        <i class="far fa-dot-circle mx-1 text-orange"></i>
                                        <span
                                            data-en="One-on-one marketing consultations for startups and entrepreneurs"
                                            data-ar="استشارات تسويقية فردية لرواد الأعمال والشركات الناشئة">Marketing
                                            consultations</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="impact-section py-5 text-center overflow-hidden" id="whyUs">
            <div class="bottom"></div>
            <div class="top"></div>

            <div class="container-fluid py-5">
                <div class="heading" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-uppercase fw-bold mb-2 sub-heading" data-en="Why Us" data-ar="لماذا نحن">Why Us
                    </p>

                    <h2 class="fw-bold mb-4">
                        <span data-en="Why Choose" data-ar="لماذا تختار">Why Choose</span>
                        <span class="text-orange" data-en="Eleven Media" data-ar="إيليفن ميديا">Eleven Media</span>
                        <span data-en="?" data-ar="؟">?</span>
                    </h2>
                </div>

                <div class="row g-4 pb-5 mt-5 text-center">


                    <div class="col-lg-6 text-center mb-5 mb-lg-0">
                        <div class="circle-wrapper mx-auto">
                            <img src="{{ asset('images/why-choose-circle.png') }}" class="rotating-circle"
                                alt="Rotating Circle">
                            <div class="main-circle mx-auto">
                                <img src="{{ asset('images/why-choose-img.png') }}" class="girl-img">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="counter-box">
                                    <div class="icon">
                                        <i class="fa-solid fa-hashtag"></i>
                                    </div>
                                    <p data-en="Extensive experience in managing social media campaigns"
                                        data-ar="خبرة واسعة في إدارة حملات وسائل التواصل الاجتماعي">
                                        Extensive experience in managing social media campaigns
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">

                                <div class="counter-box">
                                    <div class="icon">
                                        <i class="fa-solid fa-lightbulb"></i>
                                    </div>
                                    <p data-en="Creative and modern marketing ideas"
                                        data-ar="أفكار تسويقية مبتكرة وعصرية">
                                        Creative and modern marketing ideas
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="counter-box">
                                    <div class="icon">
                                        <i class="fa-solid fa-bullseye"></i>
                                    </div>
                                    <p data-en="Full commitment to achieving client goals"
                                        data-ar="التزام تام بتحقيق أهداف العملاء">
                                        Full commitment to achieving client goals
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="counter-box">
                                    <div class="icon">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                    <p data-en="Professional team in advertising, content creation, and visual production"
                                        data-ar="فريق محترف في الإعلانات وصناعة المحتوى والإنتاج المرئي">
                                        Professional team in advertising, content creation, and visual production
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">

                                <div class="counter-box">
                                    <div class="icon">
                                        <i class="fa-solid fa-chart-line"></i>
                                    </div>
                                    <p data-en="Measurable results and a clear growth strategy"
                                        data-ar="نتائج قابلة للقياس واستراتيجية نمو واضحة">
                                        Measurable results and a clear growth strategy
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="swiper-section py-5 position-relative" id="projects">
            <div class="container">
                <div class="heading py-5 text-center" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-uppercase fw-bold mb-2 sub-heading" data-en="Projects" data-ar="المشاريع">
                        Projects
                    </p>

                    <h2 class="fw-bold mb-4">
                        <span data-en="Discover some of our" data-ar="اكتشف بعضًا من">Discover some of our</span>
                        <span class="text-orange" data-en="Projects" data-ar="مشاريعنا">Projects</span>
                    </h2>
                </div>
            </div>
            <div class="container-fluid px-0 overflow-hidden">
                <div class="row g-4 justify-content-center align-items-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="col-12">
                        <div class="swiper mySwiper overflow-hidden">
                            <div class="swiper-wrapper align-items-center">
                                @foreach ($projects as $project)
                                    {{-- عرض الصورة --}}
                                    @if ($project->type == 'image')
                                        <div class="swiper-slide">
                                            <img src="{{ asset('storage/' . $project->file) }}"
                                                class="img-fluid rounded" alt="{{ $project->title }}">
                                        </div>
                                    @endif

                                    {{-- عرض الفيديو --}}
                                    @if ($project->type == 'video')
                                        <div class="swiper-slide video-slid"
                                            data-video="{{ asset('storage/' . $project->file) }}">
                                            <img src="{{ asset('storage/' . $project->thumbnail ?? 'images/default-thumbnail.jpg') }}"
                                                class="img-fluid rounded video-thumb" alt="{{ $project->title }}">
                                            <div class="play-icon-overlay">
                                                <i class="fa-solid fa-play"></i>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-section py-5 position-relative overflow-hidden" id="blogs">

            <div class="social-floating">
                <div class="social-floating">
                    <a class="icon icon-1"><i class="fab fa-facebook-f"></i></a>
                    <a class="icon icon-2"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/eleven.mediaagency?igsh=bmhna2oxbDBpZjVx"
                        class="icon icon-3"><i class="fab fa-instagram"></i></a>
                    <a class="icon icon-4"><i class="fab fa-linkedin-in"></i></a>
                    <a class="icon icon-5"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-uppercase fw-bold mb-2 sub-heading" data-en="Latest Insights"
                        data-ar="أحدث التحليلات">
                        Latest Insights
                    </p>

                    <h2 class="fw-bold mb-4" data-en="Explore our latest articles on digital trends."
                        data-ar="استكشف أحدث مقالاتنا حول الاتجاهات الرقمية.">
                        Explore our latest articles on digital trends.
                    </h2>
                </div>

                <div class="row g-4">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card h-100" data-aos="fade-up" data-aos-delay="100">
                                <div class="img">
                                    <img src="{{ $blog->thumbnail ? asset('storage/' . $blog->thumbnail) : asset('images/default-thumbnail.jpg') }}"
                                        class="img-fluid" alt="{{ $blog->title_ar }}">
                                </div>

                                <div class="card-body d-flex flex-column p-3">
                                    <h3 class="card-title h5 fw-bold text-white mb-2 mt-auto"
                                        data-en="{{ $blog->title_en }}" data-ar="{{ $blog->title_ar }}">
                                        {{ $blog->title_ar }} <!-- القيمة الافتراضية تُعرض بالعربي -->
                                    </h3>

                                    <p class="card-text text-white-50 small flex-grow-1"
                                        data-en="{!! \Illuminate\Support\Str::limit($blog->content_er, 100) !!}" data-ar="{!! \Illuminate\Support\Str::limit($blog->content_ar, 100) !!}">
                                        {{-- {!! \Illuminate\Support\Str::limit($blog->content_ar, 100) !!} --}}
                                    </p>

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <!-- التاريخ بالعربي -->
                                        <span class="text-orange"
                                            data-ar="{{ $blog->created_at->locale('ar')->isoFormat('D MMMM YYYY') }}"
                                            data-en="{{ $blog->created_at->locale('en')->isoFormat('D MMM YYYY') }}">
                                            {{ $blog->created_at->locale('ar')->isoFormat('D MMMM YYYY') }}
                                        </span>
                                    </div>

                                    <div class="d-flex justify-content-center mt-4">
                                        <a href="{{ route('blogs.show', $blog->id) }}"
                                            class="text-white fw-medium text-decoration-none btn-know-more"
                                            data-ar="اقرأ المزيد" data-en="Read More">
                                            اقرأ المزيد
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- روابط الصفحات -->
                    <div class="mt-4 d-flex justify-content-center pagination-dark"
                        dir="{{ $locale == 'ar' ? 'rtl' : 'ltr' }}">
                        @if ($locale == 'ar')
                            {{ $blogs->links('pagination::bootstrap-4') }}
                        @else
                            {{ $blogs->links('pagination::bootstrap-4') }}
                        @endif
                    </div>

                    <Style>
                        .pagination-dark .page-link {
                            background-color: #343a40;
                            /* لون خلفية داكن */
                            color: #fff;
                            /* لون الخط أبيض */
                            border: 1px solid #454d55;
                            /* لون الحدود */
                        }

                        .pagination-dark .page-item.active .page-link {
                            background-color: #1d2124;
                            /* لون أغمق للصفحة الحالية */
                            border-color: #1d2124;
                            color: #fff;
                        }

                        .pagination-dark .page-link:hover {
                            background-color: #1d2124;
                            color: #fff;
                            border-color: #1d2124;
                        }

                        .pagination-dark .page-item.disabled .page-link {
                            background-color: #495057;
                            color: #ced4da;
                            border-color: #495057;
                        }
                    </Style>
                </div>
            </div>
        </section>

        <section class="contact-section" id="contactUs">
            <div class="container">
                <div class="row contact-row g-4 align-items-center">
                    <div class="col-md-6 order-2 order-md-1" data-aos="fade-up" data-aos-delay="100">
                        <p class="text-uppercase fw-bold mb-2 sub-heading" data-en="Contact Us" data-ar="تواصل معنا">
                            Contact Us</p>

                        <h1 class="fw-bold mb-4" data-ar="تواصل معنا من أجل التميز في تكنولوجيا المعلومات">
                            <span data-en="Reach out for" data-ar="تواصل معنا من اجل">Reach out for</span> <span
                                data-ar="حلول تسويقيه" data-en="Marketing Solutions" class="text-orange">Marketing
                                Solutions</span>
                        </h1>

                        <form id="contactForm" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="visually-hidden" for="firstName" data-en="First name"
                                        data-ar="الاسم الأول">First name</label>
                                    <input type="text" id="firstName" name="firstName" class="form-control"
                                        placeholder="First name" data-en-placeholder="First name"
                                        data-ar-placeholder="الاسم الأول" data-en-label="First name"
                                        data-ar-label="الاسم الأول" />
                                    <div class="invalid-msg" id="err-firstName"></div>
                                </div>

                                <div class="col-md-6">
                                    <label class="visually-hidden" for="lastName" data-en="Last name"
                                        data-ar="اسم العائلة">Last name</label>
                                    <input type="text" id="lastName" name="lastName" class="form-control"
                                        placeholder="Last name" data-en-placeholder="Last name"
                                        data-ar-placeholder="اسم العائلة" data-en-label="Last name"
                                        data-ar-label="اسم العائلة" />
                                    <div class="invalid-msg" id="err-lastName"></div>
                                </div>

                                <div class="col-md-6">
                                    <label class="visually-hidden" for="phone" data-en="Mobile no"
                                        data-ar="رقم الموبايل">Mobile no</label>
                                    <input type="tel" id="phone" name="phone" class="form-control"
                                        placeholder="Mobile no" data-en-placeholder="Mobile no"
                                        data-ar-placeholder="رقم الموبايل" data-en-label="Mobile number"
                                        data-ar-label="رقم الموبايل" />
                                    <div class="invalid-msg" id="err-phone"></div>
                                </div>

                                <div class="col-md-6">
                                    <label class="visually-hidden" for="email" data-en="E-mail"
                                        data-ar="البريد الإلكتروني">E-mail</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="E-mail" data-en-placeholder="E-mail"
                                        data-ar-placeholder="البريد الإلكتروني" data-en-label="Email"
                                        data-ar-label="البريد الإلكتروني" />
                                    <div class="invalid-msg" id="err-email"></div>
                                </div>

                                <div class="col-12">
                                    <label class="visually-hidden" for="message" data-en="Write message..."
                                        data-ar="اكتب رسالتك...">Write message</label>
                                    <textarea id="message" name="message" class="form-control" placeholder="Write message..."
                                        data-en-placeholder="Write message..." data-ar-placeholder="اكتب رسالتك..." data-en-label="Message"
                                        data-ar-label="الرسالة"></textarea>
                                    <div class="invalid-msg" id="err-message"></div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" id="sendBtn" class="btn btn-send"
                                        data-en="Send Message" data-ar="إرسال الرسالة">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 d-flex justify-content-center order-1 order-md-2" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="card-right mb-4 mb-md-0">
                            <div class="content">
                                <h3><span data-en="Say" data-ar="قل">Say</span> <span data-ar="مرحبًا!"
                                        data-en="hello!" class="text-orange">hello!</span></h3>
                                <p class=""
                                    data-en="Get in touch with our expert team to explore tailored IT solutions that drive innovation, efficiency."
                                    data-ar="تواصل مع فريقنا الخبير لاستكشاف حلول تكنولوجيا معلومات مخصصة تدفع الابتكار والكفاءة.">
                                    Get in touch with our expert team...
                                </p>
                            </div>

                            <img src="{{ asset('images/contact-info-image.jpg') }}" alt="Contact"
                                class="img-fluid rounded-bottom">

                        </div>
                    </div>
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
                        <li><a href="#home" data-en="Home" data-ar="الرئيسية">Home</a></li>
                        <li><a href="#about" data-en="About Us" data-ar="من نحن">About Us</a></li>
                        <li><a href="#services" data-en="Services" data-ar="خدماتنا">Services</a></li>
                        <li><a href="#whyUs" data-en="Why Us" data-ar="لماذا نحن">Why Us</a></li>
                        <li><a href="#projects" data-en="Projects" data-ar="مشاريعنا">Projects</a></li>
                        <li><a href="#contactUs" data-en="Contact Us" data-ar="تواصل معنا">Contact
                                Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-6 mb-4">
                    <h5 class="fw-bold mb-3" data-en="Services" data-ar="الخدمات">
                        Services
                    </h5>
                   <ul class="list-unstyled footer-links p-0">
    <li><a href="#services" data-en="Paid Advertising Campaigns"
            data-ar="حملات الإعلانات المدفوعة">Paid
            Advertising Campaigns</a></li>

    <li><a href="#services" data-en="Creative Content Production"
            data-ar="إنتاج المحتوى الإبداعي">Creative
            Content Production</a></li>

    <li><a href="#services" data-en="Photography & Visual Production"
            data-ar="التصوير والإنتاج المرئي">Photography & Visual Production</a></li>

    <li><a href="#services" data-en="Social Media Account Management"
            data-ar="إدارة حسابات التواصل الاجتماعي">Social Media Account Management</a></li>

    <li><a href="#services" data-en="Customized Marketing Solutions"
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

                    <a href="https://www.instagram.com/eleven.mediaagency?igsh=bmhna2oxbDBpZjVx" class="social-btn"
                        data-en="Instagram" data-ar="إنستغرام">Instagram</a>

                    <a href="#" class="social-btn" data-en="Twitter" data-ar="تويتر">Twitter</a>

                </div>

            </div>


        </div>
    </footer>

    <button class="floating-btn" id="lang-btn" data-en="AR" data-ar="EN">AR</button>
    <div class="modal fade" id="videoModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-black">
                <div class="modal-body p-0">
                    <video id="modalVideo" controls autoplay style="width:100%; height:auto;">
                        <source src="" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
