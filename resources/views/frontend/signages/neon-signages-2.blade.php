@extends('frontend.layout.appLayout')

@push('styles')
<link rel="stylesheet" href="{{ asset('frontend/customstyle/neon-signages-2.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/neon-sign-board-bangalore.css') }}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,600;0,700;1,600;1,700&family=Roboto:wght@400;500;700&family=Abril+Fatface&family=Allura&family=Anton&family=Audiowide&family=Bebas+Neue&family=Boogaloo&family=Caveat:wght@700&family=Charm&family=Cinzel:wght@700&family=Comfortaa:wght@700&family=Cookie&family=Cormorant+Garamond:ital,wght@1,600&family=Dancing+Script:wght@700&family=Great+Vibes&family=Lobster&family=Montserrat:wght@700&family=Orbitron:wght@700&family=Oswald:wght@700&family=Permanent+Marker&family=Pinyon+Script&family=Playfair+Display:ital,wght@1,700&family=Poiret+One&family=Sacramento&family=Satisfy&family=Space+Mono&family=Special+Elite&family=Titan+One&display=swap" rel="stylesheet">
@endpush
@section('content')


{{-- ====================================================
     CUSTOMISE NEON SIGN — Interactive Configurator
     ==================================================== --}}
<section class="ncfg-section" id="neon-customizer-section">
    <div class="ncfg-container">
        <div class="ncfg-layout">

            {{-- LEFT: Live Preview Panel --}}
            <div class="ncfg-preview-col">
                <div class="ncfg-preview-box" id="ncfgPreviewBox">
                    <img src="{{ asset('frontend/Images/neoncustom.webp') }}" alt="Neon Sign Room Preview" class="ncfg-preview-bg">
                    <div class="ncfg-preview-overlay"></div>
                    <div class="ncfg-neon-text-wrap">
                        <span class="ncfg-neon-text" id="ncfgNeonText">Brand</span>
                    </div>
                </div>
                <div class="ncfg-preview-label">
                    <span class="ncfg-preview-tag"><i class="fa-solid fa-eye"></i> Live Preview</span>
                    <span class="ncfg-preview-note">Actual product may vary slightly</span>
                </div>
            </div>

            {{-- RIGHT: Configurator Panel --}}
            <div class="ncfg-config-col">
                <div class="ncfg-config-inner">

                    {{-- Title + Rating --}}
                    <div class="ncfg-config-header">
                        <h2 class="ncfg-config-title">Customise Neon Sign</h2>
                        <div class="ncfg-rating-row">
                            <span class="ncfg-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span class="ncfg-review-count">363 reviews</span>
                        </div>
                    </div>

                    {{-- Step 1: Type Text --}}
                    <div class="ncfg-field-group">
                        <label class="ncfg-label" for="ncfgTextInput">Type Your Text</label>
                        <input type="text" id="ncfgTextInput" class="ncfg-text-input" placeholder="e.g. Hello World" maxlength="30" value="Brand">
                    </div>

                    {{-- Step 2: Pick Font --}}
                    <div class="ncfg-field-group">
                        <label class="ncfg-label">Pick Your Font</label>
                        <div class="ncfg-font-grid" id="ncfgFontGrid">
                            <button class="ncfg-font-btn active" data-font="'Great Vibes',cursive" data-label="Passionate" style="font-family:'Great Vibes',cursive">Passionate</button>
                            <button class="ncfg-font-btn" data-font="'Dancing Script',cursive" data-label="Dreamy" style="font-family:'Dancing Script',cursive">Dreamy</button>
                            <button class="ncfg-font-btn" data-font="'Satisfy',cursive" data-label="Flowy" style="font-family:'Satisfy',cursive">Flowy</button>
                            <button class="ncfg-font-btn" data-font="'Audiowide',sans-serif" data-label="Original" style="font-family:'Audiowide',sans-serif;letter-spacing:2px">Original</button>
                            <button class="ncfg-font-btn" data-font="'Montserrat',sans-serif" data-label="Classic" style="font-family:'Montserrat',sans-serif;font-weight:700;letter-spacing:2px">Classic</button>
                            <button class="ncfg-font-btn" data-font="'Sacramento',cursive" data-label="Boujee" style="font-family:'Sacramento',cursive">Boujee</button>
                            <button class="ncfg-font-btn" data-font="'Permanent Marker',cursive" data-label="Funky" style="font-family:'Permanent Marker',cursive">Funky</button>
                            <button class="ncfg-font-btn" data-font="'Poiret One',sans-serif" data-label="Chic" style="font-family:'Poiret One',sans-serif;letter-spacing:3px">Chic</button>
                            <button class="ncfg-font-btn" data-font="'Cookie',cursive" data-label="Delight" style="font-family:'Cookie',cursive">Delight</button>
                            <button class="ncfg-font-btn" data-font="'Playfair Display',serif" data-label="Classy" style="font-family:'Playfair Display',serif;font-style:italic;font-weight:700">Classy</button>
                            <button class="ncfg-font-btn" data-font="'Pinyon Script',cursive" data-label="Romantic" style="font-family:'Pinyon Script',cursive">Romantic</button>
                            <button class="ncfg-font-btn" data-font="'Oswald',sans-serif" data-label="Robo" style="font-family:'Oswald',sans-serif;font-weight:700;letter-spacing:4px">Robo</button>
                            <button class="ncfg-font-btn" data-font="'Charm',cursive" data-label="Charming" style="font-family:'Charm',cursive">Charming</button>
                            <button class="ncfg-font-btn" data-font="'Boogaloo',cursive" data-label="Quirky" style="font-family:'Boogaloo',cursive">Quirky</button>
                            <button class="ncfg-font-btn" data-font="'Allura',cursive" data-label="Stylish" style="font-family:'Allura',cursive">Stylish</button>
                            <button class="ncfg-font-btn" data-font="'Lobster',cursive" data-label="Sassy" style="font-family:'Lobster',cursive">Sassy</button>
                            <button class="ncfg-font-btn" data-font="'Cormorant Garamond',serif" data-label="Glam" style="font-family:'Cormorant Garamond',serif;font-style:italic;font-weight:600">Glam</button>
                            <button class="ncfg-font-btn" data-font="'Bebas Neue',sans-serif" data-label="DOPE" style="font-family:'Bebas Neue',sans-serif;letter-spacing:4px">DOPE</button>
                            <button class="ncfg-font-btn" data-font="'Special Elite',cursive" data-label="Chemistry" style="font-family:'Special Elite',cursive">Chemistry</button>
                            <button class="ncfg-font-btn" data-font="'Abril Fatface',cursive" data-label="Acoustic" style="font-family:'Abril Fatface',cursive">Acoustic</button>
                            <button class="ncfg-font-btn" data-font="'Caveat',cursive" data-label="Sparky" style="font-family:'Caveat',cursive;font-weight:700">Sparky</button>
                            <button class="ncfg-font-btn" data-font="'Comfortaa',cursive" data-label="Vibey" style="font-family:'Comfortaa',cursive;font-weight:700">Vibey</button>
                            <button class="ncfg-font-btn" data-font="'Space Mono',monospace" data-label="LoFi" style="font-family:'Space Mono',monospace">LoFi</button>
                            <button class="ncfg-font-btn" data-font="'Anton',sans-serif" data-label="Bossy" style="font-family:'Anton',sans-serif;letter-spacing:3px">Bossy</button>
                            <button class="ncfg-font-btn" data-font="'Cinzel',serif" data-label="ICONIC" style="font-family:'Cinzel',serif;font-weight:700;letter-spacing:3px">ICONIC</button>
                            <button class="ncfg-font-btn" data-font="'Titan One',cursive" data-label="Jolly" style="font-family:'Titan One',cursive">Jolly</button>
                            <button class="ncfg-font-btn" data-font="'Orbitron',sans-serif" data-label="MODERN" style="font-family:'Orbitron',sans-serif;font-weight:700;letter-spacing:2px">MODERN</button>
                        </div>

                    </div>

                    {{-- Step 3: Colour --}}
                    <div class="ncfg-field-group">
                        <label class="ncfg-label">Select Your Colour</label>
                        <div class="ncfg-colour-row" id="ncfgColourRow">
                            <button class="ncfg-colour-btn active" data-colour="#ffffff" data-glow="255,255,255" title="Ice White" style="background:#ffffff;"></button>
                            <button class="ncfg-colour-btn" data-colour="#ff2d78" data-glow="255,45,120" title="Hot Pink" style="background:#ff2d78;"></button>
                            <button class="ncfg-colour-btn" data-colour="#00ff85" data-glow="0,255,133" title="Neon Green" style="background:#00ff85;"></button>
                            <button class="ncfg-colour-btn" data-colour="#3d9aff" data-glow="61,154,255" title="Blue" style="background:#3d9aff;"></button>
                            <button class="ncfg-colour-btn" data-colour="#bf5cff" data-glow="191,92,255" title="Purple" style="background:#bf5cff;"></button>
                            <button class="ncfg-colour-btn" data-colour="#ff7c00" data-glow="255,124,0" title="Orange" style="background:#ff7c00;"></button>
                            <button class="ncfg-colour-btn" data-colour="#ffe066" data-glow="255,224,102" title="Warm White" style="background:#ffe066;"></button>
                            <button class="ncfg-colour-btn" data-colour="#ff3b3b" data-glow="255,59,59" title="Red" style="background:#ff3b3b;"></button>
                            <button class="ncfg-colour-btn" data-colour="#f5d300" data-glow="245,211,0" title="Yellow" style="background:#f5d300;"></button>
                        </div>
                    </div>

                    {{-- Step 4: Size --}}
                    <div class="ncfg-field-group">
                        <label class="ncfg-label">Select Size</label>
                        <div class="ncfg-size-grid" id="ncfgSizeGrid">
                            <button class="ncfg-size-btn active" data-size="Regular">
                                <span class="ncfg-size-name">Regular</span>
                                <span class="ncfg-size-dim">Width: 9"</span>
                                <span class="ncfg-size-dim">Height: 10"</span>
                            </button>
                            <button class="ncfg-size-btn" data-size="Medium">
                                <span class="ncfg-size-name">Medium</span>
                                <span class="ncfg-size-dim">Width: 12"</span>
                                <span class="ncfg-size-dim">Height: 13"</span>
                            </button>
                            <button class="ncfg-size-btn" data-size="Large">
                                <span class="ncfg-size-name">Large</span>
                                <span class="ncfg-size-dim">Width: 15"</span>
                                <span class="ncfg-size-dim">Height: 15"</span>
                            </button>
                        </div>
                    </div>

                    {{-- Step 5: Add-Ons --}}
                    <div class="ncfg-field-group">
                        <label class="ncfg-label">Add Ons</label>
                        <div class="ncfg-addons-grid">
                            <label class="ncfg-addon-item" for="addonWaterproof">
                                <input type="checkbox" class="ncfg-addon-check" id="addonWaterproof" value="Waterproof IP67">
                                <div class="ncfg-addon-content">
                                    <span class="ncfg-addon-icon"><i class="fa-solid fa-droplet"></i></span>
                                    <span class="ncfg-addon-name">Waterproof IP67 Rated</span>
                                </div>
                                <span class="ncfg-addon-tick"><i class="fa-solid fa-circle-check"></i></span>
                            </label>
                            <label class="ncfg-addon-item" for="addonController">
                                <input type="checkbox" class="ncfg-addon-check" id="addonController" value="Smart Wireless Controller">
                                <div class="ncfg-addon-content">
                                    <span class="ncfg-addon-icon"><i class="fa-solid fa-wifi"></i></span>
                                    <span class="ncfg-addon-name">Smart Wireless Controller</span>
                                </div>
                                <span class="ncfg-addon-tick"><i class="fa-solid fa-circle-check"></i></span>
                            </label>
                        </div>
                    </div>

                    {{-- Divider --}}
                    <hr class="ncfg-divider">

                    {{-- Summary --}}
                    <div class="ncfg-summary-row">
                        <span class="ncfg-summary-label">Your Config:</span>
                        <span class="ncfg-summary-text" id="ncfgSummaryText">Brand · Passionate · Ice White · Regular</span>
                    </div>

                    {{-- CTA --}}
                    <div class="ncfg-cta-wrap">
                        <button type="button" class="ncfg-btn-quote" id="ncfgQuoteBtn" data-bs-toggle="modal" data-bs-target="#globalContactPopup">
                            <i class="fa-solid fa-paper-plane"></i>&nbsp; Get Quote Now
                        </button>
                        <a href="https://wa.me/918006606080?text=Hi%2C+I+want+to+customise+a+Neon+Sign" target="_blank" rel="noopener" class="ncfg-btn-whatsapp" id="ncfgWhatsappBtn">
                            <i class="fa-brands fa-whatsapp"></i>&nbsp; WhatsApp Now
                        </a>
                    </div>

                    {{-- Own logo --}}
                    <div class="ncfg-own-logo-note">
                        <i class="fa-solid fa-image"></i>
                        Have your own logo or design? &nbsp;
                        <a href="https://wa.me/918006606080?text=Hi%2C+I+have+my+own+logo+for+a+neon+sign" target="_blank" rel="noopener" class="ncfg-own-logo-link" id="ncfgLogoWhatsappBtn">Share via WhatsApp</a>
                    </div>

                </div>
            </div>

        </div>{{-- /.ncfg-layout --}}
    </div>{{-- /.ncfg-container --}}
</section>


<script>
(function () {
    var textInput   = document.getElementById('ncfgTextInput');
    var neonText    = document.getElementById('ncfgNeonText');
    var fontGrid    = document.getElementById('ncfgFontGrid');
    var colourRow   = document.getElementById('ncfgColourRow');
    var sizeGrid    = document.getElementById('ncfgSizeGrid');
    var summaryText = document.getElementById('ncfgSummaryText');

    var state = {
        text: 'Brand',
        font: "'Great Vibes',cursive",
        fontLabel: 'Passionate',
        colour: '#ffffff',
        glow: '255,255,255',
        colourName: 'Ice White',
        size: 'Regular',
        addons: []
    };

    function buildGlow(glow) {
        return '0 0 3px rgba('+glow+',1), 0 0 8px rgba('+glow+',0.7), 0 0 15px rgba('+glow+',0.4)';
    }

    function updatePreview() {
        neonText.textContent = state.text || 'Brand';
        neonText.style.fontFamily = state.font;
        neonText.style.color = state.colour;
        neonText.style.textShadow = buildGlow(state.glow);
        var addStr = state.addons.length ? ' · ' + state.addons.join(' + ') : '';
        summaryText.textContent = (state.text || 'Brand') + ' · ' + state.fontLabel + ' · ' + state.colourName + ' · ' + state.size + addStr;

        // Dynamically update WhatsApp CTA href with custom choices
        var waBtn = document.getElementById('ncfgWhatsappBtn');
        if (waBtn) {
            var addonsText = state.addons.length ? ' | Add-ons: ' + state.addons.join(' + ') : '';
            var waMsg = "Hi, I want to customise a Neon Sign:\n" +
                        "- Text: " + (state.text || 'Brand') + "\n" +
                        "- Font: " + state.fontLabel + "\n" +
                        "- Color: " + state.colourName + "\n" +
                        "- Size: " + state.size +
                        addonsText;
            waBtn.href = "https://wa.me/918006606080?text=" + encodeURIComponent(waMsg);
        }
    }

    if (textInput) {
        textInput.addEventListener('input', function () { state.text = this.value; updatePreview(); });
    }

    if (fontGrid) {
        fontGrid.addEventListener('click', function (e) {
            var btn = e.target.closest('.ncfg-font-btn');
            if (!btn) return;
            fontGrid.querySelectorAll('.ncfg-font-btn').forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');
            state.font = btn.getAttribute('data-font');
            state.fontLabel = btn.getAttribute('data-label');
            updatePreview();
        });
    }

    if (colourRow) {
        colourRow.addEventListener('click', function (e) {
            var btn = e.target.closest('.ncfg-colour-btn');
            if (!btn) return;
            colourRow.querySelectorAll('.ncfg-colour-btn').forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');
            state.colour = btn.getAttribute('data-colour');
            state.glow = btn.getAttribute('data-glow');
            state.colourName = btn.getAttribute('title');
            updatePreview();
        });
    }

    if (sizeGrid) {
        sizeGrid.addEventListener('click', function (e) {
            var btn = e.target.closest('.ncfg-size-btn');
            if (!btn) return;
            sizeGrid.querySelectorAll('.ncfg-size-btn').forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');
            state.size = btn.getAttribute('data-size');
            updatePreview();
        });
    }

    document.querySelectorAll('.ncfg-addon-check').forEach(function (chk) {
        chk.addEventListener('change', function () {
            var lbl = chk.closest('.ncfg-addon-item');
            if (chk.checked) {
                lbl.classList.add('selected');
                state.addons.push(chk.value);
            } else {
                lbl.classList.remove('selected');
                state.addons = state.addons.filter(function(v){ return v !== chk.value; });
            }
            updatePreview();
        });
    });

    var quoteBtn = document.getElementById('ncfgQuoteBtn');
    if (quoteBtn) {
        quoteBtn.addEventListener('click', function () {
            var msgTextarea = document.querySelector('#globalContactPopup textarea[name="message"]');
            if (msgTextarea) {
                var addStr = state.addons.length ? ' | Add-ons: ' + state.addons.join(' + ') : '';
                var summaryMsg = "Custom Neon Sign Request:\n" +
                                 "- Text: " + (state.text || 'Brand') + "\n" +
                                 "- Font: " + state.fontLabel + "\n" +
                                 "- Color: " + state.colourName + "\n" +
                                 "- Size: " + state.size +
                                 addStr;
                msgTextarea.value = summaryMsg;
            }
        });
    }

    updatePreview();
})();
</script>


{{-- ====================================================
     PRODUCT DETAILS & INCLUSIONS SECTION (White Theme - Tab System)
     ==================================================== --}}
<section class="npd-section npd-white-theme">
    {{-- Top Tab Navigation Bar --}}
    <div class="npd-nav-wrapper">
        <div class="container">
            <div class="npd-nav-tabs">
                <button type="button" class="npd-tab-btn active" data-target="#npd-tab-details">Product Details</button>
                <button type="button" class="npd-tab-btn" data-target="#npd-tab-box">What’s in the box?</button>
                <button type="button" class="npd-tab-btn" data-target="#npd-tab-install">How to install?</button>
                <a href="#neon-customizer-section" class="npd-tab-btn npd-scroll-link">Customise</a>
                <a href="#npd-faqs" class="npd-tab-btn npd-scroll-link">FAQs</a>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="npd-tab-content-wrapper">

            {{-- TAB 1: Product Details --}}
            <div class="npd-tab-pane active" id="npd-tab-details">
                <h3 class="npd-green-title">About Your Neon Sign:</h3>
                <p class="npd-sub-text mb-4">
                    Neon Attack’s neon signs are handcrafted with advanced 2nd gen LED on high-quality 6MM transparent acrylic. Energy-efficient, durable, and easy to install–perfect for any space!
                </p>

                <div class="npd-card-box position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-5 text-center text-lg-start mb-4 mb-lg-0">
                            <div class="npd-led-strip-wrap">
                                <img src="{{ asset('frontend/Images/nl-1.webp') }}" alt="2nd Gen LED Neon Strip" class="npd-led-strip-img img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="npd-card-content">
                                <h4 class="npd-card-title">Meet 2nd Gen LED Neon - 2X Brighter &amp; Built to Last!</h4>
                                <p class="npd-card-desc mb-3">
                                    Our revolutionary 2nd Gen LED Neon is twice as bright, 80% more energy-efficient, and built to outlast the rest. Plus, with adjustable brightness controls, and the option for waterproof durability, this is the ultimate neon upgrade you’ve been waiting for!
                                </p>
                                <p class="npd-card-desc highlight">
                                    Say goodbye to dull, outdated neon—this is the future!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- TAB 2: What's in the box? --}}
            <div class="npd-tab-pane" id="npd-tab-box">
                <h3 class="npd-green-title">The Box Contains:</h3>
                <p class="npd-sub-text mb-2">
                    Our neon lights are ready to shine straight from the box!
                </p>
                <p class="npd-sub-text mb-5">
                    Each sign is mounted on clear acrylic for support and comes with pre-drilled holes. Stainless steel mounting screws are included, making wall installation quick and easy.
                </p>

                {{-- Diagram Container Image --}}
                <div class="npd-box-image-wrap text-center mt-4">
                    <img src="{{ asset('frontend/Images/neon-sign.webp') }}" alt="What's in the box - Neon Sign Diagram" class="img-fluid rounded-4 npd-box-img">
                </div>
            </div>

            {{-- TAB 3: How to Install? --}}
            <div class="npd-tab-pane" id="npd-tab-install">
                <h3 class="npd-green-title">Here's how you can install our neon signs on your wall:</h3>
                <p class="npd-sub-text mb-4">
                    Simply line up the sign on your desired wall, mark the pre-drilled holes, insert the wall anchors and stainless steel stand-off screws, then plug it in and turn on the glow!
                </p>
                <div class="row g-4 mt-2">
                    <div class="col-md-4">
                        <div class="npd-install-step-card">
                            <div class="step-num">01</div>
                            <h4>Position &amp; Mark</h4>
                            <p>Hold your neon sign against the wall at the desired height and mark the pre-drilled acrylic holes with a pencil.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="npd-install-step-card">
                            <div class="step-num">02</div>
                            <h4>Mount Screws</h4>
                            <p>Drill holes on marks, insert wall anchors, and mount the stainless steel stand-off barrel screws securely.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="npd-install-step-card">
                            <div class="step-num">03</div>
                            <h4>Plug &amp; Glow!</h4>
                            <p>Connect the sign cable to the dimmer controller &amp; power adapter, plug into outlet, and turn on your neon sign!</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- TAB 4: Customise --}}
            <div class="npd-tab-pane" id="npd-tab-customise">
                <h3 class="npd-green-title">Customise Your Dream Neon Sign:</h3>
                <p class="npd-sub-text mb-4">
                    Use our live interactive 3D configurator at the top of the page to choose your font, text, color, and size! Have a custom logo design? Click the button below to send your logo to our design experts.
                </p>
                <div class="text-start">
                    <a href="#ncfgTextInput" class="npd-btn-primary">Go to Customizer</a>
                    <a href="https://api.whatsapp.com/send?phone=918006606080&amp;text=Hi,%20I%20have%20a%20custom%20logo%20for%20a%20neon%20sign!" target="_blank" class="npd-btn-whatsapp ms-2"><i class="fa-brands fa-whatsapp"></i> Send Custom Logo</a>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var tabBtns = document.querySelectorAll('.npd-tab-btn[data-target]');
    var tabPanes = document.querySelectorAll('.npd-tab-pane');

    tabBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var targetId = this.getAttribute('data-target');
            
            tabBtns.forEach(function (b) { b.classList.remove('active'); });
            tabPanes.forEach(function (p) { p.classList.remove('active'); });

            this.classList.add('active');
            var targetPane = document.querySelector(targetId);
            if (targetPane) {
                targetPane.classList.add('active');
            }
        });
    });
});
</script>

<section>
    <div class="container pb-5" id="gallery-container">
        <h2 class="hero-title text-start  text-md-center mb-4">Premium Neon Sign Boards</h2>
        <p class=" brand-description text-md-center mb-5">At <a href="{{route('index')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;">Brand Signages</a>, we bring your brand to life with vibrant, custom-designed neon signboards that captivate and communicate. Our expertise spans stunning open-face neon signs, retro-style neon lights, and modern LED-neon hybrid boards- each tailored to reflect your unique brand identity. 

            <br>Whether you're a budding startup, retail business, restaurant, seasoned brand, or looking for neon signs for a special event or home, our neon solutions offer the perfect fusion of artistic flair and functional brilliance. Every sign is meticulously crafted to ensure visual appeal and durability, turning ordinary spaces into glowing experiences.
        </p>            

        <div class="">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-1.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 1">
                    <img src="{{asset('frontend/Images/neon-1.webp')}}" class="img-fluid" alt="Neon Signboard Design" style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-2.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 2">
                    <img src="{{asset('frontend/Images/neon-2.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-3.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 3">
                    <img src="{{asset('frontend/Images/neon-3.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-4.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/neon-4.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-5.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/neon-5.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-6.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/neon-6.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-7.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/neon-7.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <a href="{{asset('frontend/Images/neon-8.webp')}}" data-lightbox="Neon Signboard Design" data-title="Image 4">
                    <img src="{{asset('frontend/Images/neon-8.webp')}}" class="img-fluid" alt="Neon Signboard Design"  style="width: 100%;">
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="min-abt-section">
    <div class="container">
        <h2 class="min-abt-title text-center">2nd Gen LED Neon Signs– Brighter <br>Performance and Durability</h2>
        <div class="row align-items-center min-abt-main-row">
            <div class="col-lg-6">
                <div class="min-abt-img-box">
                    <img src="{{asset('frontend/Images/nl-1.webp')}}" alt="Neon Sign Board Bangalore" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="min-abt-content">
                    <p class="fs-20">Step into the spotlight with Brand Signages- where timeless neon signs meets cutting-edge LED innovation. 
                Our custom <a href="{{route('neon_sign_board_bangalore')}}" style="text-decoration: unset;color:#E43D12; font-weight: bold;">neon sign boards</a>, elegantly mounted on crystal-clear acrylic bases, deliver a floating, ethereal glow 
                that transforms any space into a captivating masterpiece. Perfect for bold business logos, inspiring quotes, or
                 intricate designs, these signs command attention and etch your brand into memory.</p>
                    <p class="fs-20">Built with transparent acrylic backing, our neon signs create a clean halo effect that improves brightness and visibility. Powered by 2nd gen LED neon, they are energy-efficient, long-lasting, and suitable for indoor and outdoor use. The lightweight, shatter-resistant build ensures durability, while clear visibility is maintained in both day and night conditions. Available in multiple colors, fonts, and designs, these signs can be customized to match your business requirements.</p>
                </div>
            </div>
        </div>
        <div class="row min-abt-gallery-row">
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="min-abt-sub-img">
                     <img src="{{asset('frontend/Images/nl-2.webp')}}" alt="Neon Design" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="min-abt-sub-img">
                     <img src="{{asset('frontend/Images/nl-3.webp')}}" alt="Neon Design" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="min-abt-sub-img">
                     <img src="{{asset('frontend/Images/nl-4.webp')}}" alt="Neon Design" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>



  <section class="neon-space-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="why-text-heading mb-3">We Design Neon Signs for Every Space</h2>
            <p>We produce high-class neon lights in Bangalore for all setups. Redesign your place with glow signage shaped just for you!</p>
        </div>

        <div class="neon-space-wrapper">
            <!-- Neon Signs for Bar -->
            <div class="neon-space-item active">
                <img src="{{asset('frontend/Images/nl-5.webp')}}" alt="Neon Signs for Bar">
                <div class="neon-item-content">
                    <div class="vertical-title-box">
                        <h3 class="vertical-title">Neon Signs for Bar</h3>
                    </div>
                    <div class="horizontal-content">
                        <h3 class="neon-orange-title">Neon Signs for Bar</h3>
                        <p>Add vibrant energy to your bar with stylish neon signs. Create an inviting atmosphere with custom neon sign boards featuring bold colors and eye-catching designs.</p>
                    </div>
                </div>
            </div>

            <!-- Neon Lights for Restaurants -->
            <div class="neon-space-item">
                <img src="{{asset('frontend/Images/nl-6.webp')}}" alt="Neon Lights for Restaurants">
                <div class="neon-item-content">
                    <div class="vertical-title-box">
                        <h3 class="vertical-title">Neon Lights for Restaurants</h3>
                    </div>
                    <div class="horizontal-content">
                        <h3 class="neon-orange-title">Neon Lights for Restaurants</h3>
                        <p>Elevate your restaurant’s atmosphere with bold, custom neon lights that seamlessly blend style and function. With their sleek, modern appeal, neon lights bring a fresh energy to any restaurant setting.</p>
                    </div>
                </div>
            </div>

            <!-- Neon Sign Logo -->
            <div class="neon-space-item">
                <img src="{{asset('frontend/Images/nl-7.webp')}}" alt="Neon Sign Logo">
                <div class="neon-item-content">
                    <div class="vertical-title-box">
                        <h3 class="vertical-title">Neon Sign Logo</h3>
                    </div>
                    <div class="horizontal-content">
                        <h3 class="neon-orange-title">Neon Sign Logo</h3>
                        <p>Stand aloof with a customized neon sign logo for your brand. Whether for a corporate office or a retail shop, sign boards implant life in your logo in a shining, unforgettable manner.</p>
                    </div>
                </div>
            </div>

            <!-- Neon Sign Party Decor -->
            <div class="neon-space-item">
                <img src="{{asset('frontend/Images/nl-8.webp')}}" alt="Neon Sign Party Decor">
                <div class="neon-item-content">
                    <div class="vertical-title-box">
                        <h3 class="vertical-title">Neon Sign Party Decor</h3>
                    </div>
                    <div class="horizontal-content">
                        <h3 class="neon-orange-title">Neon Sign Party Decor</h3>
                        <p>Stand aloof with a customized neon sign logo for your brand. Whether for a corporate office or a retail shop, sign boards implant life in your logo in a shining, unforgettable manner.</p>
                    </div>
                </div>
            </div>

            <!-- Neon Signs for Home -->
            <div class="neon-space-item">
                <img src="{{asset('frontend/Images/nl-9.webp')}}" alt="Neon Signs for Home">
                <div class="neon-item-content">
                    <div class="vertical-title-box">
                        <h3 class="vertical-title">Neon Signs for Home</h3>
                    </div>
                    <div class="horizontal-content">
                        <h3 class="neon-orange-title">Neon Signs for Home</h3>
                        <p>Give individuality to your living area with tailored neon sign boards. Whether for a comfort zone or your entertainment zone, these LED signage pieces are ideal for home decor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <section class="we-deliver"
        style="background: url('{{ asset('frontend/Images/nl-10.webp') }}') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h2>Bring Your Vision to Light with Brand Signages</h2>
                </div>
                <div class="col-md-8 col-12">

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/person-ico.webp') }}" alt="In-House Experts"
                                    class="img-fluid">
                                <h3>Expert-led Customization</h3>
                                <p>
                                    Brand Signages works with seasoned signage experts who design every piece of signage with creativity. You bring your vision to life with remarkable neon signboards in Bangalore. Our experts listen to your needs and create unique neon light designs with unmatched craftsmanship.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/settings-ico.webp') }}"
                                    alt="Industry Grade Products" class="img-fluid">
                                <h3>Latest Technology</h3>
                                <p>We leverage the 2nd-gen LED neon technology to create neon lights and serve all types of businesses across the city. We deliver top-of-the-line, innovative neon sign solutions backed by the latest industry trends and technological advancements.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/trusted-ico.webp') }}"
                                    alt="10 Years of Expertise" class="img-fluid">
                                <h3>Durable Solutions</h3>
                                <p>We work with pinpoint precision while designing neon signboards. Our neon lights are designed to last for a long time, are energy efficient, and reduce the cost of maintenance. When it comes to neon lights in Bangalore, Brand Signages is best for custom-made neon lights.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="deliver-box">
                                <img src="{{ asset('frontend/Images/speed-ico.webp') }}"
                                    alt="Network and Customer Support" class="img-fluid">
                                <h3>Timely Delivery & Support</h3>
                                <p>We optimize workflows, maintain stringent timelines, and coordinate logistics to guarantee project completion without compromising quality or design integrity. We provide 24*7 support services from design to installation and maintenance.
                                </p>
                            </div>
                        </div>

                    </div>
    </section>

    <section class="new_client_section container">
        <h2 class="new_client_section-title">We Serve B2B Clients Across <br>All Industries</h2>
        <div class="row">
            <div class="col-md-5 new_client_section-image col-12">
                <img src="{{ asset('frontend/Images/home/client-bg.webp') }}" alt="Our Clients">
            </div>
            <div class="col-md-7 new_client_section-scrolling col-12">

                <div class="new_client_section-wrapper">
                    <!-- Row 1 (Left to Right) -->
                    <div class="new_client_section-row new_client_section-row-1">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}"
                                alt="White Gold - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}"
                                alt="Manthan - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}"
                                alt="Sobha - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}"
                                alt="Societe Generale - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}"
                                alt="HashedIn - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}"
                                alt="Innoviti - Our Signage Client">
                        </div>

                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client1.webp') }}"
                                alt="White Gold - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client2.webp') }}"
                                alt="Manthan - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client3.webp') }}"
                                alt="Sobha - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client4.webp') }}"
                                alt="Societe Generale - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client5.webp') }}"
                                alt="HashedIn - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client6.webp') }}"
                                alt="Innoviti - Our Signage Client">
                        </div>

                    </div>

                    <!-- Row 2 (Right to Left) -->
                    <div class="new_client_section-row new_client_section-row-2">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}"
                                alt="Flipkart - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}"
                                alt="VYMO - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}"
                                alt="Indusface - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}"
                                alt="Chargebee - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>

                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client7.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client8.webp') }}"
                                alt="Flipkart - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client9.webp') }}"
                                alt="VYMO - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client10.webp') }}"
                                alt="Indusface - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client11.webp') }}"
                                alt="Chargebee - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client12.webp') }}"
                                alt="Puravankara - Our Signage Client">
                        </div>
                    </div>

                    <!-- Row 3 (Left to Right) -->
                    <div class="new_client_section-row new_client_section-row-3">
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}"
                                alt="Natural - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}"
                                alt="Vakil Search - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}"
                                alt="Bhive Workspace - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}"
                                alt="Apollo Hospitals - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}"
                                alt="Adarsh Developers - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}"
                                alt="New Horizon Educational Institution - Our Signage Client">
                        </div>


                        <!-- Duplicates for seamless loop -->
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client13.webp') }}"
                                alt="Natural - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client14.webp') }}"
                                alt="Vakil Search - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client15.webp') }}"
                                alt="Bhive Workspace - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client16.webp') }}"
                                alt="Apollo Hospitals - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client17.webp') }}"
                                alt="Adarsh Developers - Our Signage Client">
                        </div>
                        <div class="new_client_section-client">
                            <img src="{{ asset('frontend/Images/client-logo/client18.webp') }}"
                                alt="New Horizon Educational Institution - Our Signage Client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- ====================================================
     PREMIUM NEON SIGN CUSTOMER REVIEWS (Masonry/Grid Style)
     ==================================================== --}}
<section class="nr-section">
    <div class="container py-5">
        
        {{-- Reviews Header Panel --}}
        <div class="nr-header-panel">
            <div class="row align-items-center g-4">
                
                {{-- Overall Rating Summary --}}
                <div class="col-md-4 text-center text-md-start">
                    <h2 class="nr-title">Customer Reviews</h2>
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mt-2">
                        <span class="nr-stars-main">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </div>
                    <p class="nr-based-on mt-1">Based on 363 reviews</p>
                </div>
                
                {{-- Progress Bar Breakup --}}
                <div class="col-md-4">
                    <div class="nr-stats-list">
                        <div class="nr-stat-row">
                            <span class="nr-stars-mini"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            <div class="nr-bar-wrap"><div class="nr-bar-fill" style="width: 98%;"></div></div>
                            <span class="nr-stat-percent">98%</span>
                            <span class="nr-stat-count">(356)</span>
                        </div>
                        <div class="nr-stat-row">
                            <span class="nr-stars-mini"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></span>
                            <div class="nr-bar-wrap"><div class="nr-bar-fill" style="width: 2%;"></div></div>
                            <span class="nr-stat-percent">2%</span>
                            <span class="nr-stat-count">(7)</span>
                        </div>
                        <div class="nr-stat-row">
                            <span class="nr-stars-mini"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></span>
                            <div class="nr-bar-wrap"><div class="nr-bar-fill" style="width: 0%;"></div></div>
                            <span class="nr-stat-percent">0%</span>
                            <span class="nr-stat-count">(0)</span>
                        </div>
                        <div class="nr-stat-row">
                            <span class="nr-stars-mini"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></span>
                            <div class="nr-bar-wrap"><div class="nr-bar-fill" style="width: 0%;"></div></div>
                            <span class="nr-stat-percent">0%</span>
                            <span class="nr-stat-count">(0)</span>
                        </div>
                        <div class="nr-stat-row">
                            <span class="nr-stars-mini"><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></span>
                            <div class="nr-bar-wrap"><div class="nr-bar-fill" style="width: 0%;"></div></div>
                            <span class="nr-stat-percent">0%</span>
                            <span class="nr-stat-count">(0)</span>
                        </div>
                    </div>
                </div>

                {{-- User Photos Thumbnails Grid --}}
                <div class="col-md-4 text-center text-md-end">
                    <div class="nr-photos-grid">
                        <div class="nr-photo-item"><img src="{{ asset('frontend/Images/nl-5.webp') }}" alt="Review Thumbnail"></div>
                        <div class="nr-photo-item"><img src="{{ asset('frontend/Images/nameplate-signage3.webp') }}" alt="Review Thumbnail"></div>
                        <div class="nr-photo-item"><img src="{{ asset('frontend/Images/nameplate-signage4.webp') }}" alt="Review Thumbnail"></div>
                        <div class="nr-photo-item"><img src="{{ asset('frontend/Images/nameplate-signage5.webp') }}" alt="Review Thumbnail"></div>
                        <div class="nr-photo-item"><img src="{{ asset('frontend/Images/nameplate-signage6.webp') }}" alt="Review Thumbnail"></div>
                        <div class="nr-photo-item nr-photo-more">
                            <span><i class="fa-solid fa-images"></i></span>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Filter/Sorting Row --}}
            
        </div>

        {{-- Masonry Grid Layout --}}
        <div class="nr-grid-wrapper mt-4">
            <div class="row g-4">
                
                {{-- Column 1 --}}
                <div class="col-md-4 d-flex flex-column gap-4">
                    
                    {{-- Card 1: Text-only review --}}
                    <div class="nr-card">
                        <div class="nr-card-header">
                            <span class="nr-username">Smitha soni</span>
                            <span class="nr-stars-card">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </span>
                        </div>
                        <h4 class="nr-review-title">Charismatic artpiece</h4>
                        <p class="nr-review-desc">I ordered a custom neon sign, and it turned out out even better than I imagined! Thank you, Neon Attack, for making my...</p>
                        <span class="nr-readmore">Read more</span>
                    </div>

                    {{-- Card 2: Image Review --}}
                    <div class="nr-card">
                        <div class="nr-card-media">
                            <img src="{{ asset('frontend/Images/nameplate-signage9.webp') }}" alt="Polish nail bar neon sign">
                        </div>
                        <div class="nr-card-header">
                            <span class="nr-username">A.G.</span>
                            <span class="nr-stars-card">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </span>
                        </div>
                        <p class="nr-review-desc">Effortlessly stylish and simply superb. Customer Service was so great, got my order delivered very soon and the packaging was...</p>
                        <span class="nr-readmore">Read more</span>
                    </div>

                    {{-- Card 3: Image Review 2 --}}
                    <div class="nr-card">
                        <div class="nr-card-media">
                            <img src="{{ asset('frontend/Images/nameplate-signage10.webp') }}" alt="Polish nail bar neon sign">
                        </div>
                        <div class="nr-card-header">
                            <span class="nr-username">Customer</span>
                            <span class="nr-stars-card">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </span>
                        </div>
                        <p class="nr-review-desc">The neon sign which I ordered is bright and beautiful. Amazing packaging and great quality; just simply superb and worth it!</p>
                    </div>

                </div>

                {{-- Column 2 --}}
                <div class="col-md-4 d-flex flex-column gap-4">
                    
                    {{-- Card 4: Text review --}}
                    <div class="nr-card">
                        <div class="nr-card-header">
                            <span class="nr-username">Anjali Rana</span>
                            <span class="nr-stars-card">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </span>
                        </div>
                        <h4 class="nr-review-title">Loveddd your workk</h4>
                        <p class="nr-review-desc">what a great way, loved it. very unique</p>
                    </div>

                    {{-- Card 5: Moongirl neon --}}
                    <div class="nr-card">
                        <div class="nr-card-media">
                            <img src="{{ asset('frontend/Images/nameplate-signage3.webp') }}" alt="Moongirl Neon Sign">
                        </div>
                        <div class="nr-card-header">
                            <span class="nr-username">R.K.</span>
                            <span class="nr-stars-card">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </span>
                        </div>
                        <p class="nr-review-desc">The perfect finishing touch. It gives wings to my dreams! Great work Team Neon Attack.</p>
                        <span class="nr-readmore">Read more</span>
                    </div>

                    {{-- Card 6: Qurist neon --}}
                    <div class="nr-card">
                        <div class="nr-card-media">
                            <img src="{{ asset('frontend/Images/nameplate-signage4.webp') }}" alt="Qurist Neon Sign">
                        </div>
                        <div class="nr-card-header">
                            <span class="nr-username">C.</span>
                            <span class="nr-stars-card">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </span>
                        </div>
                        <p class="nr-review-desc">Superb craftsmanship, great quality, effortless installation and worth every penny. Outstanding customer support.</p>
                        <span class="nr-readmore">Read more</span>
                    </div>

                    {{-- Card 7: Text review --}}
                    <div class="nr-card">
                        <div class="nr-card-header">
                            <span class="nr-username">Vamshi</span>
                            <span class="nr-stars-card">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </span>
                        </div>
                        <p class="nr-review-desc">I am so happy with the neon sign that I have received. The design is stunning and the sign arrived in perfect condition, and the...</p>
                        <span class="nr-readmore">Read more</span>
                    </div>

                </div>

                {{-- Column 3 --}}
                <div class="col-md-4 d-flex flex-column gap-4">
                    
                    {{-- Card 8: Large Vertical Review --}}
                    <div class="nr-card">
                        <div class="nr-card-media">
                            <img src="{{ asset('frontend/Images/nameplate-signage2.webp') }}" alt="Custom neon sign with person">
                        </div>
                        <div class="nr-card-header">
                            <span class="nr-username">V.</span>
                            <span class="nr-stars-card">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </span>
                        </div>
                        <p class="nr-review-desc">My neon sign that I received is simply amazing. The way it is designed, and the quality is best.</p>
                        <span class="nr-readmore">Read more</span>
                    </div>

                    {{-- Card 9: Remember why you started neon --}}
                    <div class="nr-card">
                        <div class="nr-card-media">
                            <img src="{{ asset('frontend/Images/nameplate-signage6.webp') }}" alt="Remember why you started neon sign">
                        </div>
                        <div class="nr-card-header">
                            <span class="nr-username">Mayur Sharma</span>
                            <span class="nr-stars-card">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </span>
                        </div>
                        <p class="nr-review-desc">Thrilled with the quality and craftsmanship of my neon sign purchase; it's a striking focal point that never fails to impress.</p>
                    </div>

                    {{-- Card 10: Chill spot --}}
                    <div class="nr-card">
                        <div class="nr-card-media">
                            <img src="{{ asset('frontend/Images/nameplate-signage8.webp') }}" alt="Chill spot neon sign">
                        </div>
                        <div class="nr-card-header">
                            <span class="nr-username">Anika Mehta</span>
                            <span class="nr-stars-card">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </span>
                        </div>
                        <p class="nr-review-desc">The neon sign that I have ordered is of exceptional quality and flawless design. The ordering process was smooth and...</p>
                        <span class="nr-readmore">Read more</span>
                    </div>

                </div>

            </div>
        </div>

        {{-- Load More CTA --}}
        <!-- <div class="text-center mt-5">
            <button class="nr-loadmore-btn">Load More Reviews</button>
        </div> -->

    </div>
</section>


<section class="other-cities-section mt-5">
    <div class="container">
        <h2 class="my-5">Neon Sign Board in Other Cities</h2>
        <div class="other-cities-wrapper d-flex gap-3 justify-content-between flex-wrap">
            <div class="other-cities-card">
                <a href="https://brandsignages.com/neon-sign-board-in-mumbai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Mumbai.webp') }}" alt="Neon Sign Boards Mumbai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Mumbai</p>
                </div>
            </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/custom-neon-sign-boards-in-chennai" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Chennai.webp') }}" alt="Neon Sign Boards Chennai">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Chennai</p>
                </div>
                </a>
            </div>
            <div class="other-cities-card">
                <a href="https://brandsignages.com/neon-sign-board-bangalore" style="text-decoration: none;">
                <div class="other-cities-img">
                    <img src="{{ asset('frontend/Images/new/Bangalore.webp') }}" alt="Neon Sign Boards Bangalore">
                    <div class="other-cities-overlay"></div>
                    <p class="other-cities-title">Bangalore</p>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>



<section class="faq-section" id="npd-faqs">
    <div class="faq-container">
      <h1 class="faq-title">FAQs</h1>
      
      <div class="faq-item">
        <button class="faq-question">
            What are Neon Light Signs Made of?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon light signs are manufactured from glass tubes filled with inert gases like neon, mercury vapor, and argon. 
            When an electric current goes through the gases, they ionize and emit light. Different gases create different colors, 
            with neon gas producing the classic red-orange glow. We also provide modern alternatives like LED technology for better 
            energy efficiency and durability.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            What is The Delivery Timing for a Neon Sign Order?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>The delivery timing for neon sign boards  generally is between 7-10 business days, based on the personalization and order size.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            How Long Do Neon Light Signs Typically Last?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon light signs generally have a lifespan of approximately 15,000 to 30,000 hours, depending on several factors such as usage, 
            environment, and the materials used. Proper maintenance & care can extend the lifespan, ensuring the sign remains vibrant and 
            functional for years. It's worth noting that LED neon signs, which are energy-efficient alternatives, can last significantly longer, 
            often reaching up to 50,000 hours or more.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            Can Neon Light Signs be Used Outdoors?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Yes, neon light signs can be used outdoors if they are specifically designed with durable, weather-resistant materials and waterproof features. Whether it is a garden party or an open-air rooftop dinner, neon lights can illuminate the space with their bright charm.</p>
           </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            Are Neon Light Signs Energy-efficient?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon light signs are energy-efficient compared to incandescent lighting. They consume less power due to the use of inert gases and low voltage. However, modern alternatives like LED neon signs are even more energy-efficient, offering lower power consumption and longer lifespans while maintaining vibrant illumination.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
            How Much Do Custom Neon Signs Cost?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
            <p>The cost of custom neon signs is influenced by several key factors:</p>
            <ul>
                <li>Larger signs require more materials and time to manufacture, resulting in higher costs.</li>
                <li>Detailed, intricate designs with multiple colors or graphics typically increase the price.</li>
                <li>The choice of materials, such as premium LEDs or high-quality silicone tubing, can impact the cost.</li>
                <li>Fully custom signs tailored to specific branding or design preferences often come at a higher price</li>
                <li>Optional features, such as adjustable brightness or motion effects, can also lead to a higher cost</li>
                <li>Transparent pricing breakdown</li>
                <li>Delivery and installation</li>
            </ul>
            <p>On average, custom neon signs can range from ₹4,000 to ₹50,000 or more, depending on these factors. For a precise quote, 
                it's advisable to contact the manufacturer directly to discuss your specific design requirements.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            What is The Installation Process for Neon Light Signs?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon signs are usually mounted on a wall, hung from ceilings, or placed on supports. The installation process involves securing 
            the sign, connecting the power supply, and ensuring proper wiring. Traditional neon signs require an expert installation due to the 
            glass tube and high voltage requirements. LED neon signs are easier to install, frequently using easy wall supports or adhesive backing. 
            For outdoor usage, proactive coating is necessary. It is essential to follow safety guidelines and work with experts for safe installation 
            and lasting durability.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            What Maintenance is Required for Neon Light Signs?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Neon light signs require cleaning to remove dust, keeping them bright and visible. Use a smooth fabric or a dry brush to clean the tubes gently. 
            Avoid using strong water jets or harsh chemicals, mainly in conventional neon signs. Periodically, check the power supply and connections to ensure 
            proper functioning. LED neon signs require minimal preservation as compared to conventional neon, which may require gas refills over time. With 
            proper care, neon signs can last for years at the same time as retaining their brightness and effectiveness.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
            What are The Benefits of Using Neon Light Signs for Branding?
          <i class="faq-icon fa-solid fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
            <ul>
                <li>Neon light signs attract attention with their vivid and colorful brightness, helping businesses stand out.</li>
                <li>They add an exceptional and elegant element, improving the brand's identity.</li>
                <li>Neon signs work well for both interior and external use, attracting customers day and night.</li>
                <li>They can be personalized to match the colors of the brand or logos.</li>
                <li>Neon LED signs are efficient in energy and durable, offering an affordable branding solution.</li>
            </ul>
            <p>Whether for a restaurant, retail store, bar, or event, neon signage companies create unforgettable impressions and boost visibility.</p>
        </div>
      </div>

    </div>
  </section>

  <section class="why-bg-light-pink py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 mb-3 why-text-heading">Latest Articles on Signage & Branding</h2>
            <p class="card-text text-center">Explore the latest trends, tips, and expert insights in the signage designs through our articles.</p>

        </div>

        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 ">
                <a href="{{ route('blogsVaritaion', $blog->slug) }}" style="text-decoration: none;">
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="blog-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge">{{ strtoupper($blog->topic) }}</span>
                                <span class="time">{{ $blog->reding_time }} mins 🕘</span>
                            </div>
                            <h5 class="blog-card-title">{{ $blog->title }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 100, '...') }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="text-center">
            <a href="{{ route('blogs') }}">
                <button class="contact-btn">See All Blogs</button>
            </a>
            </div>
        </div>
    </div>
</section>




{{-- ====================================================
     LIGHTBOX MODAL FOR GALLERY & REVIEW IMAGES
     ==================================================== --}}
<div class="nr-modal" id="nrImageModal">
    <span class="nr-modal-close" id="nrModalClose">&times;</span>
    <button class="nr-modal-btn nr-modal-prev" id="nrModalPrev"><i class="fa-solid fa-chevron-left"></i></button>
    <div class="nr-modal-content-wrap">
        <img class="nr-modal-img" id="nrModalImg" src="" alt="Zoomed Review Image">
    </div>
    <button class="nr-modal-btn nr-modal-next" id="nrModalNext"><i class="fa-solid fa-chevron-right"></i></button>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("nrImageModal");
    var modalImg = document.getElementById("nrModalImg");
    var closeBtn = document.getElementById("nrModalClose");
    var prevBtn = document.getElementById("nrModalPrev");
    var nextBtn = document.getElementById("nrModalNext");

    // Gather all zoomable images on the page
    var imagesList = [];
    var activeIndex = -1;

    // Find all images inside review masonry cards & top review photo attachments
    function refreshImagesList() {
        imagesList = [];
        var selectors = [
            ".nr-card-media img",
            ".nr-photo-item img"
        ];
        document.querySelectorAll(selectors.join(",")).forEach(function (el) {
            imagesList.push(el.src);
            // Attach click handler
            el.style.cursor = "pointer";
            el.addEventListener("click", function (e) {
                var src = e.target.src;
                activeIndex = imagesList.indexOf(src);
                openModal(src);
            });
        });
    }

    function openModal(src) {
        modal.style.display = "flex";
        modalImg.src = src;
        document.body.style.overflow = "hidden"; // Disable background scrolling
    }

    function closeModal() {
        modal.style.display = "none";
        document.body.style.overflow = "";
    }

    function showPrev() {
        if (imagesList.length === 0) return;
        activeIndex = (activeIndex - 1 + imagesList.length) % imagesList.length;
        modalImg.src = imagesList[activeIndex];
    }

    function showNext() {
        if (imagesList.length === 0) return;
        activeIndex = (activeIndex + 1) % imagesList.length;
        modalImg.src = imagesList[activeIndex];
    }

    closeBtn.addEventListener("click", closeModal);
    prevBtn.addEventListener("click", function(e) {
        e.stopPropagation();
        showPrev();
    });
    nextBtn.addEventListener("click", function(e) {
        e.stopPropagation();
        showNext();
    });

    // Close on clicking overlay background
    modal.addEventListener("click", function (e) {
        if (e.target === modal || e.target === document.querySelector('.nr-modal-content-wrap')) {
            closeModal();
        }
    });

    // Keyboard support
    document.addEventListener("keydown", function (e) {
        if (modal.style.display === "flex") {
            if (e.key === "Escape") closeModal();
            if (e.key === "ArrowLeft") showPrev();
            if (e.key === "ArrowRight") showNext();
        }
    });

    refreshImagesList();
});
</script>
@endsection