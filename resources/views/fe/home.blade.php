<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JAMBISNIS.COM — Official Links</title>

<!-- Primary Meta Tags -->
<meta name="title" content="JAMBISNIS.COM — Official Links">
<meta name="description" content="Portal berita bisnis dan ekonomi Jambi terpercaya. Informasi Akurat. Bisnis Melesat.">
<meta name="keywords" content="jambisnis, berita jambi, bisnis jambi, ekonomi jambi, informasi bisnis">
<meta name="author" content="Jambisnis.com">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#0D3A8C">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://jambisnis.com/">
<meta property="og:title" content="JAMBISNIS.COM — Official Links">
<meta property="og:description" content="Portal berita bisnis dan ekonomi Jambi terpercaya. Informasi Akurat. Bisnis Melesat.">
<meta property="og:image" content="img/JAMBISNISCOM_PNG_3000px.png">
<meta property="og:locale" content="id_ID">
<meta property="og:site_name" content="Jambisnis.com">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="https://jambisnis.com/">
<meta name="twitter:title" content="JAMBISNIS.COM — Official Links">
<meta name="twitter:description" content="Portal berita bisnis dan ekonomi Jambi terpercaya. Informasi Akurat. Bisnis Melesat.">
<meta name="twitter:image" content="img/JAMBISNISCOM_PNG_3000px.png">

<!-- WhatsApp / Telegram Preview -->
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<!-- Favicon -->
<link rel="icon" type="image/png" href="img/LOGOJ.png">
<link rel="apple-touch-icon" href="{{ asset('landingpage') }}/img/LOGOJ.png">
<link rel="shortcut icon" href="{{ asset('landingpage') }}/img/LOGOJ.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<style>
:root {
  --blue-900: #0A2A6E;
  --blue-800: #0D3A8C;
  --blue-700: #1046A8;
  --blue-600: #1565C0;
  --blue-500: #1E7FD8;
  --blue-400: #42A5F5;
  --blue-200: #90CAF9;
  --blue-100: #BBDEFB;
  --blue-50:  #E3F2FD;
  --red:      #CC1414;
  --red-dark: #A50D0D;
  --cream:    #F8F7F3;
  --cream-2:  #F0EDE5;
  --white:    #FFFFFF;
  --ink:      #0C1B3B;
  --ink-2:    #2D4270;
  --ink-3:    #6B83A8;
  --ink-4:    #A0B2CB;
  --gold:     #C9960C;
  --gold-l:   #F5D060;
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

html { scroll-behavior: smooth; }

body {
  background: var(--cream);
  font-family: 'DM Sans', sans-serif;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  overflow-x: hidden;
  color: var(--ink);
}

/* ── Layered background ── */
.bg-layer {
  position: fixed;
  inset: 0;
  z-index: 0;
  pointer-events: none;
  overflow: hidden;
}

/* Top diagonal hero band */
.bg-layer::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 340px;
  background: linear-gradient(165deg, var(--blue-900) 0%, var(--blue-700) 55%, var(--blue-500) 100%);
  clip-path: polygon(0 0, 100% 0, 100% 72%, 0 100%);
}

/* Subtle grain texture overlay on blue band */
.bg-layer::after {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; height: 340px;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  opacity: 0.4;
  clip-path: polygon(0 0, 100% 0, 100% 72%, 0 100%);
}

/* Decorative geometric lines on bg */
.bg-geo {
  position: fixed;
  top: 0; left: 0; right: 0; height: 340px;
  z-index: 0;
  pointer-events: none;
  overflow: hidden;
}
.bg-geo::before {
  content: '';
  position: absolute;
  right: -60px; top: 30px;
  width: 280px; height: 280px;
  border: 1.5px solid rgba(255,255,255,0.07);
  border-radius: 50%;
}
.bg-geo::after {
  content: '';
  position: absolute;
  right: 40px; top: -40px;
  width: 180px; height: 180px;
  border: 1px solid rgba(255,255,255,0.05);
  border-radius: 50%;
}

/* Bottom cream body grid */
.bg-grid {
  position: fixed;
  inset: 0;
  z-index: 0;
  pointer-events: none;
  background-image:
    linear-gradient(rgba(13,58,140,0.035) 1px, transparent 1px),
    linear-gradient(90deg, rgba(13,58,140,0.035) 1px, transparent 1px);
  background-size: 32px 32px;
  mask-image: linear-gradient(to bottom, transparent 260px, black 400px, black 100%);
}

/* ── Main wrapper ── */
.wrapper {
  position: relative;
  z-index: 1;
  width: 100%;
  max-width: 500px;
  padding: 0 20px 72px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* ── TOP HEADER HERO ── */
.hero {
  width: 100%;
  padding: 52px 0 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  animation: heroIn 0.8s cubic-bezier(0.22,1,0.36,1) both;
}
@keyframes heroIn {
  from { opacity: 0; transform: translateY(-28px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* Logo container */
.logo-wrap {
  position: relative;
  margin-bottom: 20px;
}
.logo-badge {
  width: 100px; height: 100px;
  border-radius: 26px;
  background: var(--white);
  border: 2px solid rgba(255,255,255,0.25);
  box-shadow: 0 8px 40px rgba(10,42,110,0.5), 0 2px 0 rgba(255,255,255,0.1) inset;
  display: flex; align-items: center; justify-content: center;
  overflow: hidden;
  position: relative;
}
.logo-badge img {
  width: 90px;
  height: 90px;
  object-fit: contain;
}

/* Shimmer sweep */
.logo-badge::after {
  content: '';
  position: absolute;
  top: -100%; left: -100%;
  width: 60%; height: 300%;
  background: linear-gradient(105deg, transparent 35%, rgba(255,255,255,0.45) 50%, transparent 65%);
  animation: sweep 5s ease-in-out infinite;
}
@keyframes sweep {
  0%   { top: -100%; left: -100%; }
  40%  { top: 100%;  left: 120%; }
  100% { top: 100%;  left: 120%; }
}

/* Live dot badge */
.live-badge {
  position: absolute;
  bottom: -4px; right: -4px;
  background: #16A34A;
  border: 2.5px solid var(--cream);
  border-radius: 20px;
  padding: 2px 8px 2px 6px;
  font-size: 0.55rem;
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #fff;
  display: flex; align-items: center; gap: 4px;
}
.live-dot {
  width: 5px; height: 5px;
  background: #fff;
  border-radius: 50%;
  animation: blink 1.4s ease-in-out infinite;
}
@keyframes blink {
  0%, 100% { opacity: 1; }
  50%       { opacity: 0.2; }
}

/* Logo as title */
.logo-title-img {
  margin-top: 16px;
  width: 100%;
  max-width: 340px;
}
.logo-title-img img {
  width: 100%;
  height: auto;
  display: block;
  filter: drop-shadow(0 2px 12px rgba(10,42,110,0.35));
}

.tagline {
  margin-top: 8px;
  font-size: 0.7rem;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.65);
  font-weight: 400;
}



/* ── Card area ── */
.card-area {
  width: 100%;
  margin-top: 32px;
  display: flex;
  flex-direction: column;
  gap: 0;
}

/* ── Section title ── */
.sec-title {
  font-size: 0.62rem;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--ink-3);
  font-weight: 500;
  padding: 20px 0 8px 2px;
  display: flex;
  align-items: center;
  gap: 8px;
}
.sec-title::after {
  content: '';
  flex: 1;
  height: 1px;
  background: linear-gradient(to right, rgba(13,58,140,0.15), transparent);
}

/* ── Link cards ── */
.link-card {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 0 16px 0 14px;
  height: 64px;
  background: var(--white);
  border-radius: 16px;
  text-decoration: none;
  color: var(--ink);
  border: 1px solid rgba(13,58,140,0.09);
  box-shadow: 0 1px 4px rgba(13,58,140,0.06), 0 4px 20px rgba(13,58,140,0.05);
  transition:
    transform 0.28s cubic-bezier(0.34,1.56,0.64,1),
    box-shadow 0.28s ease,
    border-color 0.28s ease;
  position: relative;
  overflow: hidden;
  margin-bottom: 10px;
  opacity: 0;
  animation: cardUp 0.55s cubic-bezier(0.22,1,0.36,1) both;
  cursor: pointer;
}

/* Stagger */
.link-card:nth-child(1) { animation-delay: 0.12s; }
.link-card:nth-child(2) { animation-delay: 0.19s; }
.link-card:nth-child(3) { animation-delay: 0.26s; }
.link-card:nth-child(4) { animation-delay: 0.33s; }
.link-card:nth-child(5) { animation-delay: 0.40s; }
.link-card:nth-child(6) { animation-delay: 0.47s; }
.link-card:nth-child(7) { animation-delay: 0.54s; }
.link-card:nth-child(8) { animation-delay: 0.61s; }

@keyframes cardUp {
  from { opacity: 0; transform: translateY(20px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* Hover states */
.link-card:hover {
  transform: translateY(-3px) scale(1.012);
  box-shadow: 0 12px 40px rgba(13,58,140,0.14), 0 2px 8px rgba(13,58,140,0.08);
  border-color: rgba(13,58,140,0.22);
}
.link-card:active {
  transform: translateY(0) scale(0.985);
  box-shadow: 0 2px 8px rgba(13,58,140,0.08);
}

/* Left stripe */
.link-card::before {
  content: '';
  position: absolute;
  left: 0; top: 14px; bottom: 14px;
  width: 3px;
  border-radius: 0 3px 3px 0;
  opacity: 0;
  transition: opacity 0.28s ease, height 0.28s ease;
}
.link-card:hover::before { opacity: 1; }

/* Right highlight sweep on hover */
.link-card::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(105deg, transparent 45%, rgba(21,101,192,0.04) 55%, transparent 65%);
  transform: translateX(-100%);
  transition: transform 0.5s ease;
}
.link-card:hover::after { transform: translateX(100%); }

/* Per-platform stripe colors */
.c-wa::before   { background: linear-gradient(180deg,#25D366,#128C7E); }
.c-ig::before   { background: linear-gradient(180deg,#F58529,#DD2A7B,#515BD4); }
.c-tt::before   { background: linear-gradient(180deg,#010101,#69C9D0); }
.c-yt::before   { background: linear-gradient(180deg,#FF0000,#FF6B6B); }
.c-fb::before   { background: linear-gradient(180deg,#1877F2,#42A5F5); }
.c-price::before{ background: linear-gradient(180deg,#C9960C,#F5D060); }
.c-agency::before{background: linear-gradient(180deg,#7C3AED,#A78BFA); }
.c-web::before  { background: linear-gradient(180deg,var(--blue-600),var(--blue-400)); }
.c-mail::before { background: linear-gradient(180deg,#EA4335,#FBBC04); }

/* Icon pill */
.icon-pill {
  flex-shrink: 0;
  width: 42px; height: 42px;
  border-radius: 13px;
  display: flex; align-items: center; justify-content: center;
  transition: transform 0.28s cubic-bezier(0.34,1.56,0.64,1);
}
.link-card:hover .icon-pill { transform: scale(1.15) rotate(-5deg); }

/* Icon bg per platform */
.c-wa   .icon-pill { background: #DCFCE7; }
.c-ig   .icon-pill { background: linear-gradient(135deg,#fce4ec,#ede7f6,#e3f2fd); }
.c-tt   .icon-pill { background: #F3E5F5; }
.c-yt   .icon-pill { background: #FFEBEE; }
.c-fb   .icon-pill { background: #E3F2FD; }
.c-price .icon-pill { background: #FFFBEB; }
.c-agency .icon-pill{ background: #EDE9FE; }
.c-web  .icon-pill { background: #EEF2FF; }
.c-mail .icon-pill { background: #FFF7ED; }

/* Text block */
.card-body { flex: 1; min-width: 0; }
.card-title {
  font-weight: 500;
  font-size: 0.92rem;
  color: var(--ink);
  letter-spacing: 0.01em;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.card-desc {
  font-size: 0.72rem;
  color: var(--ink-3);
  font-weight: 400;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

/* Trailing arrow */
.card-arrow {
  flex-shrink: 0;
  width: 28px; height: 28px;
  border-radius: 8px;
  background: var(--blue-50);
  display: flex; align-items: center; justify-content: center;
  transition: background 0.25s, transform 0.25s ease;
}
.link-card:hover .card-arrow {
  background: var(--blue-600);
  transform: translateX(2px);
}
.card-arrow svg {
  transition: stroke 0.25s;
}
.link-card:hover .card-arrow svg path { stroke: white; }

/* Special badge for price cards */
.badge-pill {
  flex-shrink: 0;
  font-size: 0.58rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  font-weight: 600;
  padding: 3px 8px;
  border-radius: 20px;
  margin-right: 4px;
}
.badge-gold { background: #FEF3C7; color: #92400E; }
.badge-purple { background: #EDE9FE; color: #5B21B6; }

/* ── Divider ornament ── */
.ornament {
  width: 100%;
  display: flex;
  align-items: center;
  gap: 10px;
  margin: 6px 0 10px;
}
.ornament::before, .ornament::after {
  content: '';
  flex: 1;
  height: 1px;
  background: linear-gradient(to right, transparent, rgba(13,58,140,0.12), transparent);
}
.ornament-icon {
  font-size: 0.65rem;
  color: var(--blue-200);
  letter-spacing: 0.1em;
}

/* ── Footer ── */
.footer {
  margin-top: 36px;
  text-align: center;
  opacity: 0;
  animation: cardUp 0.5s 0.75s cubic-bezier(0.22,1,0.36,1) both;
}
.footer-logo {
  font-family: 'Oswald', sans-serif;
  font-weight: 700;
  font-size: 1.1rem;
  letter-spacing: 0.05em;
  color: var(--ink-2);
}
.footer-logo span { color: var(--red); }
.footer-sub {
  font-size: 0.65rem;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--ink-4);
  margin-top: 4px;
}
.footer-copy {
  margin-top: 12px;
  font-size: 0.62rem;
  color: var(--ink-4);
}

/* ── Floating particles ── */
.particles {
  position: fixed;
  inset: 0;
  pointer-events: none;
  z-index: 0;
  overflow: hidden;
}
.particle {
  position: absolute;
  border-radius: 50%;
  background: rgba(21,101,192,0.12);
  animation: rise linear infinite;
}
@keyframes rise {
  0%   { transform: translateY(100vh) scale(0); opacity: 0; }
  10%  { opacity: 1; }
  90%  { opacity: 0.3; }
  100% { transform: translateY(-10vh) scale(1.2); opacity: 0; }
}

@media (max-width: 380px) {
  .site-title { font-size: 2rem; }
  .logo-badge { width: 78px; height: 78px; }
  .link-card { height: 58px; }
  .card-title { font-size: 0.84rem; }
  .logo-title-img { max-width: 260px; }
}
</style>
</head>
<body>

<!-- Background layers -->
<div class="bg-layer"></div>
<div class="bg-geo"></div>
<div class="bg-grid"></div>

<!-- Floating particles -->
<div class="particles" id="particles"></div>

<div class="wrapper">

  <!-- ── HERO ── -->
  <div class="hero">
    <div class="logo-wrap">
      <div class="logo-badge">
        <img src="{{ asset('landingpage') }}/img/LOGOJ.png" alt="Jambisnis.com Logo"
             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
        <!-- Fallback text logo -->
        <div style="display:none; flex-direction:column; align-items:center; justify-content:center; width:100%; height:100%;">
          <span style="font-family:'Oswald',sans-serif; font-weight:700; font-size:1rem; color:#1565C0; letter-spacing:.02em; line-height:1;">JAMBISNIS</span>
          <span style="font-family:'Oswald',sans-serif; font-weight:700; font-size:.75rem; color:#CC1414; letter-spacing:.02em;">.COM</span>
        </div>
      </div>
      <div class="live-badge">
        <span class="live-dot"></span>
        Online
      </div>
    </div>

    <div class="logo-title-img">
      <img src="{{ asset('landingpage') }}/img/JAMBISNISCOM PNG 3000px.png" alt="JAMBISNIS.COM">
    </div>
    <!--<div class="tagline">Informasi Akurat &nbsp;·&nbsp; Bisnis Melesat</div>-->
  </div><!-- /hero -->

  <!-- ── LINK CARDS ── -->
  <div class="card-area">

    <!-- Social Media -->
    <div class="sec-title">Media Sosial</div>

    <a href="https://wa.me/{{ $settingItems['wa']->value ?? '0899999999999' }}" target="_blank" rel="noopener" class="link-card c-wa">
      <div class="icon-pill">
        <svg width="22" height="22" viewBox="0 0 24 24"><path d="M20.52 3.449C18.24 1.245 15.24 0 12.045 0 5.463 0 .104 5.334.101 11.893c0 2.096.549 4.14 1.595 5.945L0 24l6.335-1.652c1.746.95 3.71 1.45 5.71 1.452h.006c6.585 0 11.946-5.336 11.949-11.896.002-3.176-1.24-6.165-3.48-8.455zM12.045 21.785h-.005c-1.774 0-3.513-.477-5.031-1.378l-.361-.214-3.741.977.999-3.648-.235-.374c-.99-1.574-1.512-3.393-1.511-5.26.003-5.45 4.437-9.884 9.89-9.884 2.64.001 5.122 1.03 6.988 2.898 1.866 1.869 2.893 4.352 2.892 6.993-.003 5.451-4.437 9.89-9.885 9.89zm5.421-7.403c-.297-.149-1.758-.867-2.031-.967-.272-.099-.47-.148-.669.149-.198.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.149-.172.198-.296.297-.495.1-.198.05-.372-.025-.521-.074-.148-.669-1.611-.916-2.206-.241-.579-.486-.501-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.463 1.065 2.876 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" fill="#25D366"/></svg>
      </div>
      <div class="card-body">
        <div class="card-title">{{ $settingItems['wa']->name ?? 'WhatsApp' }}</div>
        <div class="card-desc">{{ $settingItems['wa']->helper_text ?? '+62822-9916-0460. Chat Langsung' }}</div>
      </div>
      <div class="card-arrow">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
          <path d="M2.5 6H9.5M9.5 6L6.5 3M9.5 6L6.5 9" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </a>

    <a href="{{ $settingItems['ig']->value ?? 'https://www.instagram.com/jambisniscom?utm_source=qr&igsh=N2Z5ZGt2NXUxdTk3' }}" target="_blank" rel="noopener" class="link-card c-ig">
      <div class="icon-pill">
        <svg width="22" height="22" viewBox="0 0 24 24">
          <defs><radialGradient id="igG" cx="30%" cy="107%" r="150%"><stop offset="0%" stop-color="#fdf497"/><stop offset="45%" stop-color="#fd5949"/><stop offset="60%" stop-color="#d6249f"/><stop offset="90%" stop-color="#285AEB"/></radialGradient></defs>
          <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" fill="url(#igG)"/>
        </svg>
      </div>
      <div class="card-body">
        <div class="card-title">{{ $settingItems['ig']->name ?? 'Instagram' }}</div>
        <div class="card-desc">{{ $settingItems['ig']->helper_text ?? '@jambisniscom · Follow untuk update' }}</div>
      </div>
      <div class="card-arrow">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
          <path d="M2.5 6H9.5M9.5 6L6.5 3M9.5 6L6.5 9" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </a>

    <a href="{{ $settingItems['tt']->value ?? 'https://www.tiktok.com/@jambisnisnews?_r=1&_t=ZS-958ffkf3G9l' }}" target="_blank" rel="noopener" class="link-card c-tt">
      <div class="icon-pill">
        <svg width="22" height="22" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.27 6.27 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.72a4.85 4.85 0 01-1.01-.03z" fill="#010101"/></svg>
      </div>
      <div class="card-body">
        <div class="card-title">{{ $settingItems['tt']->name ?? 'TikTok' }}</div>
        <div class="card-desc">{{ $settingItems['tt']->helper_text ?? '@jambisnisnews · Video bisnis terkini' }}</div>
      </div>
      <div class="card-arrow">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
          <path d="M2.5 6H9.5M9.5 6L6.5 3M9.5 6L6.5 9" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </a>

    <a href="{{ $settingItems['yt']->value ?? 'https://youtube.com/@jambisnis?si=RZMjv9oNHPN-RBp6' }}" target="_blank" rel="noopener" class="link-card c-yt">
      <div class="icon-pill">
        <svg width="24" height="17" viewBox="0 0 24 17"><path d="M23.495 2.655A3.011 3.011 0 0021.373.51C19.505 0 12 0 12 0S4.495 0 2.627.51A3.011 3.011 0 00.505 2.655C0 4.538 0 8.5 0 8.5s0 3.962.505 5.845a3.011 3.011 0 002.122 2.145C4.495 17 12 17 12 17s7.505 0 9.373-.51a3.011 3.011 0 002.122-2.145C24 12.462 24 8.5 24 8.5s0-3.962-.505-5.845zM9.545 12.084V4.916L15.818 8.5l-6.273 3.584z" fill="#FF0000"/></svg>
      </div>
      <div class="card-body">
        <div class="card-title">{{ $settingItems['yt']->name ?? 'YouTube' }}</div>
        <div class="card-desc">{{ $settingItems['yt']->helper_text ?? '@jambisnis · Subscribe sekarang' }}</div>
      </div>
      <div class="card-arrow">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
          <path d="M2.5 6H9.5M9.5 6L6.5 3M9.5 6L6.5 9" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </a>

    <a href="{{ $settingItems['fb']->value ?? 'https://www.facebook.com/share/18G6o8c2PE/' }}" target="_blank" rel="noopener" class="link-card c-fb">
      <div class="icon-pill">
        <svg width="22" height="22" viewBox="0 0 24 24"><path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.792-4.697 4.533-4.697 1.312 0 2.686.236 2.686.236v2.97h-1.514c-1.491 0-1.956.93-1.956 1.887v2.267h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z" fill="#1877F2"/></svg>
      </div>
      <div class="card-body">
        <div class="card-title">{{ $settingItems['fb']->name ?? 'Facebook' }}</div>
        <div class="card-desc">{{ $settingItems['fb']->helper_text ?? 'Jambisnis.com · Like & Follow' }}</div>
      </div>
      <div class="card-arrow">
          <path d="M2.5 6H9.5M9.5 6L6.5 3M9.5 6L6.5 9" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </a>

    <!-- Pricing & Services -->
    <div class="sec-title">Layanan & Harga</div>

    <a href="{{ $settingItems['hl']->value ?? 'https://drive.google.com/file/d/15M7wwvi2vGyVclGRzl_wKiONNzWKfCM7/view?usp=drive_link' }}" target="_blank" rel="noopener" class="link-card c-price">
      <div class="icon-pill">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
          <rect x="2" y="3" width="20" height="18" rx="3" stroke="#D97706" stroke-width="1.8"/>
          <path d="M7 8h10M7 12h7M7 16h5" stroke="#D97706" stroke-width="1.8" stroke-linecap="round"/>
          <circle cx="18" cy="16" r="3.5" fill="#FEF3C7" stroke="#D97706" stroke-width="1.5"/>
          <path d="M16.8 16l.7.7 1.5-1.4" stroke="#D97706" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="card-body">
        <div class="card-title">{{ $settingItems['hl']->name ?? 'Harga Liputan' }}</div>
        <div class="card-desc">{{ $settingItems['hl']->helper_text ?? 'Paket liputan & publikasi berita' }}</div>
      </div>
      <span class="badge-pill badge-gold">Promo</span>
      <div class="card-arrow">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
          <path d="M2.5 6H9.5M9.5 6L6.5 3M9.5 6L6.5 9" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </a>

    <a href="{{ $settingItems['ha']->value ?? 'https://drive.google.com/file/d/1tRhOnaWmLmG-srTk44yVztAubVUgMfcP/view?usp=drive_link' }}" target="_blank" rel="noopener" class="link-card c-agency">
      <div class="icon-pill">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
          <path d="M17 20H7a3 3 0 01-3-3V9a3 3 0 013-3h10a3 3 0 013 3v8a3 3 0 01-3 3z" stroke="#7C3AED" stroke-width="1.8"/>
          <path d="M8 6V5a2 2 0 012-2h4a2 2 0 012 2v1" stroke="#7C3AED" stroke-width="1.8" stroke-linecap="round"/>
          <path d="M12 12v0m-3 0v0m6 0v0" stroke="#7C3AED" stroke-width="2.2" stroke-linecap="round"/>
        </svg>
      </div>
      <div class="card-body">
        <div class="card-title">{{ $settingItems['ha']->name ?? 'Harga Agency' }}</div>
        <div class="card-desc">{{ $settingItems['ha']->helper_text ?? 'Paket khusus untuk agency & korporat' }}</div>
      </div>
      <span class="badge-pill badge-purple">B2B</span>
      <div class="card-arrow">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
          <path d="M2.5 6H9.5M9.5 6L6.5 3M9.5 6L6.5 9" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </a>

    <a href="{{ $settingItems['sa']->value ?? 'https://whatsapp.com/channel/0029Vb7Mhpr89inYqVlQe81n' }}" target="_blank" rel="noopener" class="link-card c-wa">
      <div class="icon-pill">
        <svg width="22" height="22" viewBox="0 0 24 24"><path d="M20.52 3.449C18.24 1.245 15.24 0 12.045 0 5.463 0 .104 5.334.101 11.893c0 2.096.549 4.14 1.595 5.945L0 24l6.335-1.652c1.746.95 3.71 1.45 5.71 1.452h.006c6.585 0 11.946-5.336 11.949-11.896.002-3.176-1.24-6.165-3.48-8.455zM12.045 21.785h-.005c-1.774 0-3.513-.477-5.031-1.378l-.361-.214-3.741.977.999-3.648-.235-.374c-.99-1.574-1.512-3.393-1.511-5.26.003-5.45 4.437-9.884 9.89-9.884 2.64.001 5.122 1.03 6.988 2.898 1.866 1.869 2.893 4.352 2.892 6.993-.003 5.451-4.437 9.89-9.885 9.89zm5.421-7.403c-.297-.149-1.758-.867-2.031-.967-.272-.099-.47-.148-.669.149-.198.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.149-.172.198-.296.297-.495.1-.198.05-.372-.025-.521-.074-.148-.669-1.611-.916-2.206-.241-.579-.486-.501-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.463 1.065 2.876 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" fill="#25D366"/></svg>
      </div>
      <div class="card-body">
        <div class="card-title">{{ $settingItems['sa']->name ?? 'Saluran WhatsApp' }}</div>
        <div class="card-desc">{{ $settingItems['sa']->helper_text ?? 'Ikuti saluran resmi Jambisnis.com' }}</div>
      </div>
      <span class="badge-pill badge-gold" style="background:#DCFCE7;color:#166534;">Baru</span>
      <div class="card-arrow">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
          <path d="M2.5 6H9.5M9.5 6L6.5 3M9.5 6L6.5 9" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </a>

    <!-- Web & Contact -->
    <div class="sec-title">Website</div>

    <a href="{{ $settingItems['website_url']->value ?? 'https://jambisnis.com/' }}" target="_blank" rel="noopener" class="link-card c-web">
      <div class="icon-pill">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
          <circle cx="12" cy="12" r="9.5" stroke="#1565C0" stroke-width="1.8"/>
          <ellipse cx="12" cy="12" rx="4" ry="9.5" stroke="#1565C0" stroke-width="1.8"/>
          <path d="M3 9h18M3 15h18" stroke="#1565C0" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
      </div>
      <div class="card-body">
        <div class="card-title">{{ $settingItems['website_url']->name ?? 'Website Utama' }}</div>
        <div class="card-desc">{{ $settingItems['website_url']->helper_text ?? 'jambisnis.com | Berita bisnis Jambi' }}</div>
      </div>
      <div class="card-arrow">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
          <path d="M2.5 6H9.5M9.5 6L6.5 3M9.5 6L6.5 9" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </a>

    <!--<a href="/cdn-cgi/l/email-protection#543931303d35143e3539363d273a3d277a373b39" class="link-card c-mail">-->
    <!--  <div class="icon-pill">-->
    <!--    <svg width="22" height="18" viewBox="0 0 24 20" fill="none">-->
    <!--      <rect x="1" y="1.5" width="22" height="17" rx="3" stroke="#EA4335" stroke-width="1.8"/>-->
    <!--      <path d="M1.5 5L12 12.5 22.5 5" stroke="#EA4335" stroke-width="1.8" stroke-linecap="round"/>-->
    <!--    </svg>-->
    <!--  </div>-->
    <!--  <div class="card-body">-->
    <!--    <div class="card-title">Email Redaksi</div>-->
    <!--    <div class="card-desc"><span class="__cf_email__" data-cfemail="741911101d15341e1519161d071a1d075a171b19">[email&#160;protected]</span></div>-->
    <!--  </div>-->
    <!--  <div class="card-arrow">-->
    <!--    <svg width="12" height="12" viewBox="0 0 12 12" fill="none">-->
    <!--      <path d="M2.5 6H9.5M9.5 6L6.5 3M9.5 6L6.5 9" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>-->
    <!--    </svg>-->
    <!--  </div>-->
    <!--</a>-->

  </div><!-- /card-area -->

  <!-- ── FOOTER ── -->
  <div class="footer">
    <div class="ornament">
      <span class="ornament-icon">✦ ✦ ✦</span>
    </div>
    <div class="footer-logo">JAMBISNIS<span>.COM</span></div>
    <div class="footer-sub">Informasi Akurat &nbsp;|&nbsp; Bisnis Melesat</div>
    <div class="footer-copy">© 2025 Jambisnis.com — All rights reserved</div>
  </div>

</div><!-- /wrapper -->

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
// Floating particles
(function() {
  var container = document.getElementById('particles');
  for (var i = 0; i < 14; i++) {
    var p = document.createElement('div');
    var size = Math.random() * 6 + 3;
    var left = Math.random() * 100;
    var dur  = Math.random() * 18 + 14;
    var del  = Math.random() * 12;
    p.className = 'particle';
    p.style.cssText = 'width:'+size+'px;height:'+size+'px;left:'+left+'%;animation-duration:'+dur+'s;animation-delay:'+del+'s;opacity:'+(Math.random()*0.5+0.1);
    container.appendChild(p);
  }
})();
</script>

</body>
</html>