@once
@push('styles')
<style>
    /* ── ROOT TOKENS ── */
    :root {
        --ksr-rose:        #D20048;
        --ksr-rose-deep:   #A8003A;
        --ksr-rose-pale:   rgba(210,0,72,.06);
        --ksr-rose-border: rgba(210,0,72,.13);
        --ksr-navy:        #074560;
        --ksr-ink:         #1a1a2e;
        --ksr-muted:       #52656d;
        --ksr-surface:     #fff;
        --ksr-line:        rgba(0,0,0,.07);
        --ksr-shadow:      0 20px 60px rgba(210,0,72,.18), 0 4px 12px rgba(0,0,0,.06);
        --ksr-r-sm:        10px;
        --ksr-r-md:        14px;
        --ksr-r-lg:        20px;
        --ksr-nav-h:       70px;
        --ksr-ease:        all .2s cubic-bezier(.4,0,.2,1);
    }

    /* ── NAV ── */
    #ksrNav {
        position: sticky;
        top: 0;
        z-index: 1050;
        background: var(--ksr-rose);
        transition: var(--ksr-ease);
    }

    #ksrNav.ksr-scrolled {
        box-shadow: 0 6px 28px rgba(210,0,72,.38);
    }

    .ksr-inner {
        max-width: 1320px;
        margin: 0 auto;
        padding: 0 24px;
        height: var(--ksr-nav-h);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    /* Compact on scroll */
    .fixed .ksr-inner { height: 56px; }

    /* ── LOGO ── */
    .ksr-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        flex-shrink: 0;
    }

    .ksr-logo-icon {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: rgba(255,255,255,.18);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: var(--ksr-ease);
    }

    .ksr-logo:hover .ksr-logo-icon { background: rgba(255,255,255,.28); }

    .ksr-logo-text strong {
        display: block;
        font-size: 15px;
        font-weight: 700;
        color: #fff;
        line-height: 1.2;
    }

    .ksr-logo-text span {
        font-size: 10.5px;
        color: rgba(255,255,255,.72);
        letter-spacing: .02em;
    }

    /* ── DESKTOP NAV LIST ── */
    .ksr-list {
        display: flex;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 1px;
    }

    .ksr-nl {
        display: flex;
        align-items: center;
        gap: 5px;
        padding: 7px 13px;
        border-radius: var(--ksr-r-sm);
        text-decoration: none;
        font-size: 14.5px;
        font-weight: 500;
        color: rgba(255,255,255,.88);
        white-space: nowrap;
        border: 1.5px solid transparent;
        transition: var(--ksr-ease);
        cursor: pointer;
    }

    .ksr-nl:hover,
    .ksr-nl.ksr-nl-active {
        background: rgba(255,255,255,.14);
        color: #fff;
        border-color: rgba(255,255,255,.18);
        text-decoration: none;
    }

    .ksr-chev {
        width: 14px;
        height: 14px;
        flex-shrink: 0;
        opacity: .7;
        transition: transform .2s ease;
    }

    .ksr-nl.ksr-nl-active .ksr-chev {
        transform: rotate(180deg);
        opacity: 1;
    }

    /* Book CTA pill */
    .ksr-cta {
        display: flex;
        align-items: center;
        gap: 7px;
        padding: 8px 20px;
        border-radius: 50px;
        background: #fff;
        color: var(--ksr-rose);
        font-size: 13.5px;
        font-weight: 700;
        text-decoration: none;
        white-space: nowrap;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,.12);
        transition: var(--ksr-ease);
        margin-left: 6px;
    }

    .ksr-cta:hover {
        background: #fce8ef;
        transform: translateY(-1px);
        box-shadow: 0 4px 18px rgba(0,0,0,.15);
        color: var(--ksr-rose);
        text-decoration: none;
    }

    /* ── PANEL BASE ── */
    .ksr-has-drop,
    .ksr-has-mega { position: relative; }

    .ksr-drop,
    .ksr-mega {
        display: none;
        position: absolute;
        top: calc(100% + 10px);
        background: var(--ksr-surface);
        border-radius: var(--ksr-r-lg);
        z-index: 2100;
        border: 1px solid var(--ksr-rose-border);
        box-shadow: var(--ksr-shadow);
        animation: ksrPanelIn .18s ease forwards;
    }

    @keyframes ksrPanelIn {
        from { opacity: 0; transform: translateY(-8px) scale(.97); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
    }

    /* ── FOUNDATION DROPDOWN ── */
    .ksr-drop { width: 310px; right: 0; padding: 8px; }

    .ksr-drop-header {
        padding: 10px 12px 7px;
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .1em;
        color: var(--ksr-rose);
        opacity: .6;
    }

    .ksr-dl {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 12px;
        border-radius: 12px;
        text-decoration: none;
        color: var(--ksr-muted);
        font-size: 13.5px;
        font-weight: 500;
        transition: var(--ksr-ease);
    }

    .ksr-dl:hover {
        background: var(--ksr-rose-pale);
        color: var(--ksr-rose);
        text-decoration: none;
    }

    .ksr-dl-icon {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: var(--ksr-rose-pale);
        color: var(--ksr-rose);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        flex-shrink: 0;
        transition: var(--ksr-ease);
    }

    .ksr-dl:hover .ksr-dl-icon { background: rgba(210,0,72,.14); }

    .ksr-dl-body strong {
        display: block;
        font-size: 13.5px;
        color: var(--ksr-ink);
        transition: var(--ksr-ease);
        font-weight: 600;
    }

    .ksr-dl-body span {
        font-size: 11.5px;
        color: var(--ksr-muted);
    }

    .ksr-dl:hover .ksr-dl-body strong { color: var(--ksr-rose); }

    .ksr-divider {
        height: 1px;
        background: var(--ksr-line);
        margin: 6px 12px;
    }

    /* ── MEGA PANEL (Services) ── */
    .ksr-mega { width: 640px; right: 0; padding: 0; overflow: hidden; }

    .ksr-mega-head {
        padding: 18px 22px 14px;
        border-bottom: 1px solid var(--ksr-line);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .ksr-mega-title {
        font-size: 10.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .1em;
        color: var(--ksr-rose);
        opacity: .6;
    }

    .ksr-mega-sub {
        font-size: 12px;
        color: var(--ksr-muted);
        margin-top: 2px;
    }

    .ksr-mega-badge {
        font-size: 11px;
        font-weight: 600;
        background: var(--ksr-rose-pale);
        color: var(--ksr-rose);
        padding: 4px 11px;
        border-radius: 20px;
        border: 1px solid var(--ksr-rose-border);
    }

    .ksr-mega-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1px;
        background: var(--ksr-line);
    }

    .ksr-mega-col { background: var(--ksr-surface); padding: 16px 18px; }

    .ksr-mega-col-label {
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .1em;
        color: rgba(210,0,72,.5);
        margin-bottom: 8px;
        padding-bottom: 8px;
        border-bottom: 1px dashed var(--ksr-rose-border);
    }

    .ksr-mi {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 7px 9px;
        border-radius: 9px;
        text-decoration: none;
        color: var(--ksr-muted);
        font-size: 13.5px;
        font-weight: 500;
        transition: var(--ksr-ease);
        margin-bottom: 2px;
    }

    .ksr-mi:hover {
        background: var(--ksr-rose-pale);
        color: var(--ksr-rose);
        text-decoration: none;
        padding-left: 14px;
    }

    .ksr-mi-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--ksr-rose);
        opacity: .35;
        flex-shrink: 0;
        transition: var(--ksr-ease);
    }

    .ksr-mi:hover .ksr-mi-dot { opacity: 1; }

    .ksr-mega-foot {
        border-top: 1px solid var(--ksr-line);
        padding: 12px 22px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .ksr-mega-foot-link {
        font-size: 13px;
        font-weight: 600;
        color: var(--ksr-rose);
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: var(--ksr-ease);
    }

    .ksr-mega-foot-link:hover { opacity: .75; text-decoration: none; }
    .ksr-mega-foot-note { font-size: 11.5px; color: var(--ksr-muted); }

    /* ── BURGER ── */
    #ksrBurger {
        display: none;
        flex-direction: column;
        gap: 5px;
        padding: 8px;
        border-radius: 9px;
        background: rgba(255,255,255,.12);
        border: 1.5px solid rgba(255,255,255,.2);
        cursor: pointer;
        transition: var(--ksr-ease);
    }

    #ksrBurger:hover { background: rgba(255,255,255,.22); }
    #ksrBurger span { display: block; width: 22px; height: 2px; background: #fff; border-radius: 2px; transition: var(--ksr-ease); }
    #ksrBurger.ksr-open span:nth-child(1) { transform: rotate(45deg) translate(5px,5px); }
    #ksrBurger.ksr-open span:nth-child(2) { opacity: 0; }
    #ksrBurger.ksr-open span:nth-child(3) { transform: rotate(-45deg) translate(5px,-5px); }

    /* ── OVERLAY ── */
    #ksrOverlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(10,10,20,.5);
        z-index: 9000;
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(2px);
    }

    #ksrOverlay.ksr-open { display: block; }

    /* ── DRAWER ── */
    #ksrDrawer {
        position: fixed;
        top: 0; bottom: 0;
        right: -100%;
        width: min(360px, 92vw);
        background: var(--ksr-surface);
        z-index: 9999;
        display: flex;
        flex-direction: column;
        overflow-y: auto;
        transition: right .3s cubic-bezier(.4,0,.2,1);
        scrollbar-width: thin;
        scrollbar-color: var(--ksr-rose) #f5f4f0;
    }

    #ksrDrawer::-webkit-scrollbar { width: 4px; }
    #ksrDrawer::-webkit-scrollbar-thumb { background: var(--ksr-rose); border-radius: 4px; }
    #ksrDrawer.ksr-open { right: 0; }

    /* Drawer head */
    .ksr-dhead {
        background: var(--ksr-rose);
        padding: 0 18px;
        height: 68px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-shrink: 0;
    }

    .ksr-dhead-brand strong { display: block; font-size: 15px; font-weight: 700; color: #fff; }
    .ksr-dhead-brand span  { font-size: 11px; color: rgba(255,255,255,.7); }

    .ksr-dclose {
        width: 36px; height: 36px;
        border-radius: 50%;
        background: rgba(255,255,255,.15);
        border: 1.5px solid rgba(255,255,255,.25);
        display: flex; align-items: center; justify-content: center;
        color: #fff; font-size: 16px;
        cursor: pointer;
        transition: var(--ksr-ease);
    }

    .ksr-dclose:hover { background: rgba(255,255,255,.28); }

    /* Quick strip */
    .ksr-dquick {
        display: grid;
        grid-template-columns: repeat(3,1fr);
        gap: 1px;
        background: var(--ksr-line);
        flex-shrink: 0;
    }

    .ksr-qbtn {
        background: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 5px;
        padding: 14px 8px;
        text-decoration: none;
        font-size: 11.5px;
        font-weight: 600;
        transition: var(--ksr-ease);
    }

    .ksr-qbtn:hover { text-decoration: none; }

    .ksr-qicon {
        width: 38px; height: 38px;
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 16px;
        transition: var(--ksr-ease);
    }

    .ksr-q-rose .ksr-qicon { background: var(--ksr-rose-pale); }
    .ksr-q-rose { color: var(--ksr-rose); }
    .ksr-q-rose:hover { background: var(--ksr-rose-pale); }

    .ksr-q-green .ksr-qicon { background: #e8f8ef; color: #1b8a4d; }
    .ksr-q-green { color: #1b8a4d; }
    .ksr-q-green:hover { background: #e8f8ef; }

    .ksr-q-navy .ksr-qicon { background: rgba(7,69,96,.1); color: var(--ksr-navy); }
    .ksr-q-navy { color: var(--ksr-navy); }
    .ksr-q-navy:hover { background: rgba(7,69,96,.06); }

    /* Drawer nav items */
    .ksr-dnav { flex: 1; }

    .ksr-dni {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 18px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        color: var(--ksr-muted);
        border-bottom: 1px solid var(--ksr-line);
        transition: var(--ksr-ease);
    }

    .ksr-dni:hover {
        background: var(--ksr-rose-pale);
        color: var(--ksr-rose);
        text-decoration: none;
    }

    .ksr-dicon {
        width: 34px; height: 34px;
        border-radius: 10px;
        background: var(--ksr-rose-pale);
        color: var(--ksr-rose);
        display: flex; align-items: center; justify-content: center;
        font-size: 14px;
        flex-shrink: 0;
    }

    .ksr-dni:hover .ksr-dicon { background: rgba(210,0,72,.14); }
    .ksr-dni-ext { margin-left: auto; font-size: 11px; color: #bbb; }

    /* Drawer accordions */
    .ksr-acc-btn {
        display: flex; align-items: center; gap: 12px;
        width: 100%; padding: 14px 18px;
        background: none; border: none;
        border-bottom: 1px solid var(--ksr-line);
        cursor: pointer;
        font-size: 14px; font-weight: 500;
        color: var(--ksr-muted);
        transition: var(--ksr-ease);
    }

    .ksr-acc-btn:hover { background: var(--ksr-rose-pale); color: var(--ksr-rose); }
    .ksr-acc-btn.ksr-open { background: var(--ksr-rose-pale); color: var(--ksr-rose); }

    .ksr-mob-chev {
        margin-left: auto;
        flex-shrink: 0;
        color: #bbb;
        transition: transform .2s ease;
    }

    .ksr-acc-btn.ksr-open .ksr-mob-chev { transform: rotate(180deg); }

    .ksr-acc-panel {
        display: none;
        border-bottom: 1px solid var(--ksr-line);
        background: rgba(210,0,72,.025);
    }

    .ksr-acc-panel.ksr-open { display: block; }

    .ksr-acc-label {
        padding: 10px 18px 4px;
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .1em;
        color: rgba(210,0,72,.5);
    }

    .ksr-al {
        display: flex; align-items: center; gap: 8px;
        padding: 8px 18px 8px 24px;
        text-decoration: none; font-size: 13.5px;
        color: var(--ksr-muted);
        transition: var(--ksr-ease);
    }

    .ksr-al:hover {
        color: var(--ksr-rose);
        text-decoration: none;
        padding-left: 28px;
    }

    .ksr-al-dot {
        width: 5px; height: 5px;
        border-radius: 50%;
        background: var(--ksr-rose);
        opacity: .4;
        flex-shrink: 0;
        transition: var(--ksr-ease);
    }

    .ksr-al:hover .ksr-al-dot { opacity: 1; }

    /* Drawer footer */
    .ksr-dfoot {
        flex-shrink: 0;
        padding: 16px;
        background: #fafafa;
        border-top: 1px solid var(--ksr-line);
    }

    .ksr-call-btn {
        display: flex; align-items: center; justify-content: center; gap: 8px;
        width: 100%; padding: 13px;
        border-radius: 50px;
        background: var(--ksr-rose);
        color: #fff;
        font-weight: 700; font-size: 14px;
        text-decoration: none;
        transition: var(--ksr-ease);
        margin-bottom: 12px;
        border: none; cursor: pointer;
    }

    .ksr-call-btn:hover {
        background: var(--ksr-rose-deep);
        transform: translateY(-1px);
        text-decoration: none; color: #fff;
    }

    .ksr-socials { display: flex; gap: 8px; justify-content: center; }

    .ksr-soc {
        width: 36px; height: 36px; border-radius: 50%;
        background: var(--ksr-rose-pale);
        color: var(--ksr-rose);
        display: flex; align-items: center; justify-content: center;
        font-size: 14px; text-decoration: none;
        transition: var(--ksr-ease);
    }

    .ksr-soc:hover { background: var(--ksr-rose); color: #fff; text-decoration: none; }

    /* ── RESPONSIVE ── */
    @media (max-width: 1023px) {
        .ksr-list, .ksr-cta { display: none !important; }
        #ksrBurger { display: flex; }
    }

    @media (min-width: 1024px) {
        #ksrBurger { display: none !important; }
    }
</style>
@endpush
@endonce

{{-- ═══════════════════════════════════════════════ NAV ══════ --}}
<nav id="ksrNav">
    <div class="ksr-inner">

        {{-- Logo --}}
        <a href="{{ URL::to('/') }}" class="ksr-logo">
            <div class="ksr-logo-icon">
                <img src="{{ asset('fronted/shilpi-img/logo_icon.png') }}"
                     alt="" width="24" height="24"
                     style="width:24px;height:24px;object-fit:contain;"
                     onerror="this.style.display='none'">
            </div>
            <div class="ksr-logo-text">
                <strong>Dr. K. Shilpi Reddy</strong>
                <span>Obstetrician &amp; Gynaecologist</span>
            </div>
        </a>

        {{-- Desktop nav --}}
        <ul class="ksr-list">

            @foreach([
                ['About',   route('about-us'), false],
                ['Mrs. Mom','https://mrsmomevent.com/', true],
                ['Work',    route('work'), false],
                ['Media',   route('media'), false],
                ['Blog',    route('blog'), false],
                ['Contact', route('contact-us'), false],
            ] as $nl)
            <li>
                <a href="{{ $nl[1] }}"
                   @if($nl[2]) target="_blank" rel="noopener" @endif
                   class="ksr-nl">
                    {{ $nl[0] }}
                    @if($nl[2])<sup style="font-size:9px;opacity:.65">↗</sup>@endif
                </a>
            </li>
            @endforeach

            {{-- Foundation drop --}}
            <li class="ksr-has-drop">
                <a href="#" class="ksr-nl ksr-drop-trigger" data-panel="ksrPanelFoundation">
                    Foundation
                    <svg class="ksr-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </a>
                <div id="ksrPanelFoundation" class="ksr-drop">
                    <div class="ksr-drop-header">Our Foundation</div>

                    <a href="{{ route('our-foundation') }}" class="ksr-dl">
                        <span class="ksr-dl-icon">
                            <i class="fas fa-landmark"></i>
                        </span>
                        <span class="ksr-dl-body">
                            <strong>Dr. K. Shilpi Reddy Foundation</strong>
                            <span>Healthcare access &amp; women's health</span>
                        </span>
                    </a>

                    <a href="{{ route('fertility-conclave') }}" class="ksr-dl">
                        <span class="ksr-dl-icon">
                            <i class="fas fa-leaf"></i>
                        </span>
                        <span class="ksr-dl-body">
                            <strong>Natural Fertility Conclave</strong>
                            <span>Annual event &amp; resources</span>
                        </span>
                    </a>

                    <div class="ksr-divider"></div>

                    <a href="#" class="ksr-dl">
                        <span class="ksr-dl-icon">
                            <i class="fas fa-fist-raised"></i>
                        </span>
                        <span class="ksr-dl-body">
                            <strong>Women Empowerment</strong>
                            <span>Programs &amp; community initiatives</span>
                        </span>
                    </a>

                    <a href="#" class="ksr-dl">
                        <span class="ksr-dl-icon">
                            <i class="fas fa-hands-helping"></i>
                        </span>
                        <span class="ksr-dl-body">
                            <strong>Social Outreach</strong>
                            <span>Community care campaigns</span>
                        </span>
                    </a>
                </div>
            </li>

            {{-- Services mega --}}
            <li class="ksr-has-mega">
                <a href="{{ route('ibu-care') }}"
                   class="ksr-nl ksr-mega-trigger"
                   data-panel="ksrPanelServices">
                    Services
                    <svg class="ksr-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </a>
                <div id="ksrPanelServices" class="ksr-mega">
                    <div class="ksr-mega-head">
                        <div>
                            <div class="ksr-mega-title">Our Services</div>
                            <div class="ksr-mega-sub">Comprehensive women's healthcare in Hyderabad</div>
                        </div>
                        <div class="ksr-mega-badge">10 Specialties</div>
                    </div>

                    <div class="ksr-mega-grid">
                        <div class="ksr-mega-col">
                            <div class="ksr-mega-col-label">
                                <i class="fas fa-baby" style="margin-right:5px;opacity:.6"></i>Maternity Care
                            </div>
                            @foreach(['Antenatal Care','Postnatal Support','High-Risk Pregnancy','Normal & C-Section Delivery','Breastfeeding Guidance'] as $it)
                            <a href="{{ route('ibu-care') }}" class="ksr-mi">
                                <span class="ksr-mi-dot"></span>{{ $it }}
                            </a>
                            @endforeach
                        </div>
                        <div class="ksr-mega-col">
                            <div class="ksr-mega-col-label">
                                <i class="fas fa-microscope" style="margin-right:5px;opacity:.6"></i>Gynaecology
                            </div>
                            @foreach(['PCOS / PCOD Management','Endometriosis Treatment','Menstrual Disorders','Hysteroscopy & Laparoscopy','Menopause Management'] as $it)
                            <a href="{{ route('ibu-care') }}" class="ksr-mi">
                                <span class="ksr-mi-dot"></span>{{ $it }}
                            </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="ksr-mega-foot">
                        <a href="{{ route('ibu-care') }}" class="ksr-mega-foot-link">
                            Explore Ibu Care &rarr;
                        </a>
                        <span class="ksr-mega-foot-note">
                            <i class="fas fa-map-marker-alt" style="margin-right:4px;opacity:.5"></i>Hyderabad &amp; Online
                        </span>
                    </div>
                </div>
            </li>

            {{-- Ibu Care standalone --}}
            <li>
                <a href="{{ route('ibu-care') }}" class="ksr-nl">Ibu Care</a>
            </li>

        </ul>{{-- /ksr-list --}}

        {{-- Book CTA (desktop) --}}
        <a href="{{ route('contact-us') }}" class="ksr-cta">
            <i class="fas fa-calendar-check"></i> Book Appointment
        </a>

        {{-- Burger --}}
        <button id="ksrBurger" aria-label="Open menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>

    </div>
</nav>

{{-- ═══════════════════════════════════════════ OVERLAY + DRAWER ══════ --}}
<div id="ksrOverlay"></div>

<div id="ksrDrawer" role="dialog" aria-modal="true" aria-label="Site navigation">

    {{-- Head --}}
    <div class="ksr-dhead">
        <div class="ksr-dhead-brand">
            <strong>Dr. K. Shilpi Reddy</strong>
            <span>Obstetrician &amp; Gynaecologist</span>
        </div>
        <button id="ksrClose" class="ksr-dclose" aria-label="Close menu">✕</button>
    </div>

    {{-- Quick actions --}}
    <div class="ksr-dquick">
        <a href="tel:+919503606049" class="ksr-qbtn ksr-q-rose">
            <span class="ksr-qicon"><i class="fas fa-phone-alt"></i></span>Call Now
        </a>
        <a href="https://wa.me/919503606049" class="ksr-qbtn ksr-q-green">
            <span class="ksr-qicon"><i class="fab fa-whatsapp"></i></span>WhatsApp
        </a>
        <a href="{{ route('contact-us') }}" class="ksr-qbtn ksr-q-navy ksr-close-on-click">
            <span class="ksr-qicon"><i class="fas fa-calendar-check"></i></span>Book
        </a>
    </div>

    {{-- Nav links --}}
    <nav class="ksr-dnav">

        @foreach([
            ['about-us', 'fas fa-user-circle', 'About'],
            ['work',     'fas fa-briefcase',   'Work'],
            ['media',    'fas fa-video',        'Media'],
            ['blog',     'fas fa-newspaper',    'Blog'],
            ['contact-us','fas fa-envelope',    'Contact'],
        ] as $ml)
        <a href="{{ route($ml[0]) }}"
           class="ksr-dni ksr-close-on-click">
            <span class="ksr-dicon"><i class="{{ $ml[1] }}"></i></span>
            {{ $ml[2] }}
        </a>
        @endforeach

        <a href="https://mrsmomevent.com/" target="_blank" rel="noopener" class="ksr-dni">
            <span class="ksr-dicon"><i class="fas fa-crown"></i></span>
            Mrs. Mom
            <span class="ksr-dni-ext"><i class="fas fa-external-link-alt"></i></span>
        </a>

        {{-- Foundation accordion --}}
        <button class="ksr-acc-btn" data-target="ksrAcc1">
            <span class="ksr-dicon"><i class="fas fa-heart"></i></span>
            Our Foundation
            <svg class="ksr-mob-chev" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="6 9 12 15 18 9"/>
            </svg>
        </button>
        <div class="ksr-acc-panel" id="ksrAcc1">
            @foreach([
                [route('our-foundation'),     'Dr. K. Shilpi Reddy Foundation'],
                [route('fertility-conclave'), 'Natural Fertility Conclave'],
                ['#',                         'Women Empowerment'],
                ['#',                         'Social Outreach'],
            ] as $al)
            <a href="{{ $al[0] }}" class="ksr-al ksr-close-on-click">
                <span class="ksr-al-dot"></span>{{ $al[1] }}
            </a>
            @endforeach
        </div>

        {{-- Ibu Care accordion --}}
        <button class="ksr-acc-btn" data-target="ksrAcc2">
            <span class="ksr-dicon"><i class="fas fa-baby"></i></span>
            Ibu Care
            <svg class="ksr-mob-chev" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="6 9 12 15 18 9"/>
            </svg>
        </button>
        <div class="ksr-acc-panel" id="ksrAcc2">
            <div class="ksr-acc-label">Maternity Care</div>
            @foreach(['Antenatal Care','Postnatal Support','High-Risk Pregnancy','Normal & C-Section Delivery','Breastfeeding Guidance'] as $it)
            <a href="{{ route('ibu-care') }}" class="ksr-al ksr-close-on-click">
                <span class="ksr-al-dot"></span>{{ $it }}
            </a>
            @endforeach
            <div class="ksr-acc-label" style="margin-top:4px">Gynaecology</div>
            @foreach(['PCOS / PCOD Management','Endometriosis Treatment','Menstrual Disorders','Hysteroscopy & Laparoscopy','Menopause Management'] as $it)
            <a href="{{ route('ibu-care') }}" class="ksr-al ksr-close-on-click">
                <span class="ksr-al-dot"></span>{{ $it }}
            </a>
            @endforeach
            <div style="height:10px"></div>
        </div>

        {{-- Services accordion --}}
        <button class="ksr-acc-btn" data-target="ksrAcc3">
            <span class="ksr-dicon"><i class="fas fa-stethoscope"></i></span>
            Services
            <svg class="ksr-mob-chev" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="6 9 12 15 18 9"/>
            </svg>
        </button>
        <div class="ksr-acc-panel" id="ksrAcc3">
            <div class="ksr-acc-label">Specialties</div>
            @foreach([
                ['fas fa-user-md',   'Gynaecology'],
                ['fas fa-baby',      'Obstetrics'],
                ['fas fa-microscope','Fertility'],
                ['fas fa-heartbeat', 'Wellness Programs'],
            ] as $s)
            <a href="#" class="ksr-al">
                <i class="{{ $s[0] }}" style="font-size:12px;color:var(--ksr-rose);opacity:.6;width:14px;text-align:center"></i>
                {{ $s[1] }}
            </a>
            @endforeach
            <div style="height:10px"></div>
        </div>

    </nav>

    {{-- Footer --}}
    <div class="ksr-dfoot">
        <a href="tel:+919503606049" class="ksr-call-btn">
            <i class="fas fa-phone-alt"></i> +91 9503 606 049
        </a>
        <div class="ksr-socials">
            @foreach(['fab fa-instagram','fab fa-youtube','fab fa-linkedin-in','fab fa-facebook-f'] as $ic)
            <a href="#" class="ksr-soc"><i class="{{ $ic }}"></i></a>
            @endforeach
        </div>
    </div>

</div>{{-- /ksrDrawer --}}

@once
@push('scripts')
<script>
(function ($) {
    'use strict';

    /* ── Desktop: drop & mega panels ── */
    var $allPanels  = $('.ksr-drop, .ksr-mega');
    var $allTriggers = $('.ksr-drop-trigger, .ksr-mega-trigger');
    var closeDelay;

    function openPanel($trigger) {
        var id = $trigger.data('panel');
        var $p = $('#' + id);
        if (!$p.length) return;
        $allPanels.not($p).hide();
        $allTriggers.not($trigger).removeClass('ksr-nl-active');
        $p.stop(true, true).fadeIn(0).show(); /* animation via CSS */
        $trigger.addClass('ksr-nl-active');
    }

    function closeAll() {
        $allPanels.hide();
        $allTriggers.removeClass('ksr-nl-active');
    }

    /* Mega */
    $(document).on('mouseenter', '.ksr-has-mega', function () {
        clearTimeout(closeDelay);
        openPanel($(this).find('.ksr-mega-trigger'));
    });
    $(document).on('mouseleave', '.ksr-has-mega', function () {
        closeDelay = setTimeout(closeAll, 130);
    });

    /* Drop */
    $(document).on('mouseenter', '.ksr-has-drop', function () {
        clearTimeout(closeDelay);
        openPanel($(this).find('.ksr-drop-trigger'));
    });
    $(document).on('mouseleave', '.ksr-has-drop', function () {
        closeDelay = setTimeout(closeAll, 130);
    });

    /* Keep panel open when hovering the panel itself */
    $(document).on('mouseenter', '.ksr-drop, .ksr-mega', function () { clearTimeout(closeDelay); });
    $(document).on('mouseleave', '.ksr-drop, .ksr-mega', function () {
        closeDelay = setTimeout(closeAll, 130);
    });

    /* Close on outside click */
    $(document).on('click', function (e) {
        if (!$(e.target).closest('#ksrNav').length) closeAll();
    });

    /* ── Mobile drawer ── */
    var $drawer  = $('#ksrDrawer');
    var $overlay = $('#ksrOverlay');
    var $burger  = $('#ksrBurger');
    var $close   = $('#ksrClose');

    function openDrawer() {
        $drawer.addClass('ksr-open');
        $overlay.addClass('ksr-open');
        $('body').css('overflow', 'hidden');
        $burger.addClass('ksr-open').attr('aria-expanded', 'true');
    }

    function closeDrawer() {
        $drawer.removeClass('ksr-open');
        $overlay.removeClass('ksr-open');
        $('body').css('overflow', '');
        $burger.removeClass('ksr-open').attr('aria-expanded', 'false');
    }

    $burger.on('click', openDrawer);
    $close.on('click', closeDrawer);
    $overlay.on('click', closeDrawer);
    $(document).on('click', '.ksr-close-on-click', closeDrawer);
    $(document).on('keydown', function (e) { if (e.key === 'Escape') closeDrawer(); });

    /* ── Mobile accordions ── */
    $(document).on('click', '.ksr-acc-btn', function () {
        var $btn   = $(this);
        var $panel = $('#' + $btn.data('target'));
        var isOpen = $panel.hasClass('ksr-open');

        /* collapse all */
        $('.ksr-acc-panel').removeClass('ksr-open');
        $('.ksr-acc-btn').removeClass('ksr-open');

        /* open clicked one if it was closed */
        if (!isOpen) {
            $panel.addClass('ksr-open');
            $btn.addClass('ksr-open');
        }
    });

    /* ── Sticky shadow ── */
    var $nav = $('#ksrNav');
    $(window).on('scroll.ksrNav', function () {
        $nav.toggleClass('ksr-scrolled', $(window).scrollTop() > 8);
    });

})(jQuery);
</script>
@endpush
@endonce