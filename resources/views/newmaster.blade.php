{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="SemiColonWeb" />

  {{-- Fonts --}}
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
        rel="stylesheet" type="text/css" />

  {{-- Vendor CSS --}} 
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> --}}
  
  <link rel="stylesheet" href="{{ asset('css/semantic.css') }}">
  <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/canvas/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/canvas/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/canvas/dark.css') }}">
  <link rel="stylesheet" href="{{ asset('css/canvas/font-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('css/canvas/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/canvas/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/canvas/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('css/alertify.css') }}">

  <link rel="stylesheet" href="{{ asset('css/newmaster.css') }}">

  <title>AnekaJC</title>


  @yield('css')
</head>

<body>

  {{-- SIDEBAR --}}
  <aside class="sidebar" id="sidebar">
    <div class="sidebar-logo">
      <div class="logo-icon">SPL</div>
      <span class="logo-text">SPL</span>
    </div>
    <nav class="sidebar-nav" id="nav"></nav>
  </aside>

  {{-- MAIN --}}
  <div class="main">

    <header class="header">
      <div class="breadcrumb" id="breadcrumb"></div>

      <div class="header-right">
        <div class="period-badge">
          Username: {{ Auth::user()->username }}
          &nbsp;–&nbsp;
          Periode: {{ $periode->bulan }} / {{ $periode->tahun }}
        </div>
        <div class="avatar">{{ strtoupper(substr(Auth::user()->username, 0, 1)) }}</div>
        <a class="logout-link" href="{{ route('logout') }}">
          <i class="bi bi-power"></i> Log Out
        </a>
      </div>
    </header>

<section class="content">
  <div id="content-dynamic" style="display:none;"></div>
  <div id="content-blade">
    <div class="container-fluid clearfix">
      <div class="row gutter-40 col-mb-80">
        @yield('content')
      </div>
    </div>
  </div>
</section>

  </div>

  {{-- SCRIPTS — jQuery loaded once, then vendors --}}
  <script src="{{ asset('js/canvas/jquery.js') }}"></script>
  <script src="{{ asset('js/select2.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/alertify.js') }}"></script>
  <script src="{{ asset('js/autoNumeric.js') }}"></script>
  <script src="{{ asset('js/datatables.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('js/qrcode.min.js') }}"></script>
  <script src="{{ asset('js/canvas/functions.js') }}"></script>
  <script src="{{ asset('js/canvas/JsBarcode.all.min.js') }}"></script>

 <script>
  // ── Keyboard shortcut lockdown ───────────────────────────────────────
  document.addEventListener('keydown', function (e) {
    if (e.key === 'F12') { e.preventDefault(); return false; }
    if (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J')) { e.preventDefault(); return false; }
    if (e.ctrlKey && e.key === 'u') { e.preventDefault(); return false; }
  });

  function round(value, precision) {
    const multiplier = Math.pow(10, precision || 0);
    return Math.round(value * multiplier) / multiplier;
  }
  function format_date(date) {
    if (!date) return '';
    const [y, m, d] = date.split('-');
    return `${d}/${m}/${y}`;
  }
  function format_timestamp(date) {
    if (!date) return '';
    const [tgl, waktu] = date.split(' ');
    const [y, m, d] = tgl.split('-');
    return `${d}/${m}/${y} ${waktu}`;
  }

  // ── Icon SVGs ────────────────────────────────────────────────────────
  const icons = {
    archive:         `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" d="M21 8v13H3V8M1 3h22v5H1zM10 12h4"/></svg>`,
    users:           `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path stroke-linecap="round" d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>`,
    'credit-card':   `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2"/><path stroke-linecap="round" d="M1 10h22"/></svg>`,
    'shopping-cart': `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line stroke-linecap="round" x1="3" y1="6" x2="21" y2="6"/><path stroke-linecap="round" d="M16 10a4 4 0 01-8 0"/></svg>`,
    'trending-up':   `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><polyline stroke-linecap="round" points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline stroke-linecap="round" points="17 6 23 6 23 12"/></svg>`,
    warehouse:       `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path stroke-linecap="round" d="M9 22V12h6v10"/></svg>`,
    'bar-chart':     `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" d="M18 20V10M12 20V4M6 20v-6"/></svg>`,
    box:             `<svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline stroke-linecap="round" points="3.27 6.96 12 12.01 20.73 6.96"/><line stroke-linecap="round" x1="12" y1="22.08" x2="12" y2="12"/></svg>`,
    chevron:         `<svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>`,
    
    'file-text':     `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline stroke-linecap="round" points="14 2 14 8 20 8"/><line stroke-linecap="round" x1="16" y1="13" x2="8" y2="13"/><line stroke-linecap="round" x1="16" y1="17" x2="8" y2="17"/><polyline stroke-linecap="round" points="10 9 9 9 8 9"/></svg>`,
    tool:            `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>`,
    monitor:         `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><path stroke-linecap="round" d="M8 21h8M12 17v4"/></svg>`,
    settings:        `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path stroke-linecap="round" d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg>`,
    truck:           `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13"/><path stroke-linecap="round" d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>`,
    clipboard:       `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>`,
    tag:             `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line stroke-linecap="round" x1="7" y1="7" x2="7.01" y2="7"/></svg>`,
    grid:            `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>`,
    lock:            `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path stroke-linecap="round" d="M7 11V7a5 5 0 0110 0v4"/></svg>`,
    dollar:          `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><line stroke-linecap="round" x1="12" y1="1" x2="12" y2="23"/><path stroke-linecap="round" d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>`,
    layers:          `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><polygon stroke-linecap="round" points="12 2 2 7 12 12 22 7 12 2"/><polyline stroke-linecap="round" points="2 17 12 22 22 17"/><polyline stroke-linecap="round" points="2 12 12 17 22 12"/></svg>`,
    repeat:          `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><polyline stroke-linecap="round" points="17 1 21 5 17 9"/><path stroke-linecap="round" d="M3 11V9a4 4 0 014-4h14M7 23l-4-4 4-4"/><path stroke-linecap="round" d="M21 13v2a4 4 0 01-4 4H3"/></svg>`,
    'map-pin':       `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>`,
    percent:         `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><line stroke-linecap="round" x1="19" y1="5" x2="5" y2="19"/><circle cx="6.5" cy="6.5" r="2.5"/><circle cx="17.5" cy="17.5" r="2.5"/></svg>`,
    'rotate-ccw':    `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><polyline stroke-linecap="round" points="1 4 1 10 7 10"/><path stroke-linecap="round" d="M3.51 15a9 9 0 102.13-9.36L1 10"/></svg>`,
    send:            `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><line stroke-linecap="round" x1="22" y1="2" x2="11" y2="13"/><polygon stroke-linecap="round" points="22 2 15 22 11 13 2 9 22 2"/></svg>`,
    zap:             `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><polygon stroke-linecap="round" points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>`,
    package:         `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline stroke-linecap="round" points="3.27 6.96 12 12.01 20.73 6.96"/><line stroke-linecap="round" x1="12" y1="22.08" x2="12" y2="12"/></svg>`,
    'check-square':  `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><polyline stroke-linecap="round" points="9 11 12 14 22 4"/><path stroke-linecap="round" d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>`,
    printer:         `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><polyline stroke-linecap="round" points="6 9 6 2 18 2 18 9"/><path stroke-linecap="round" d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>`,
    sliders:         `<svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><line stroke-linecap="round" x1="4" y1="21" x2="4" y2="14"/><line stroke-linecap="round" x1="4" y1="10" x2="4" y2="3"/><line stroke-linecap="round" x1="12" y1="21" x2="12" y2="12"/><line stroke-linecap="round" x1="12" y1="8" x2="12" y2="3"/><line stroke-linecap="round" x1="20" y1="21" x2="20" y2="16"/><line stroke-linecap="round" x1="20" y1="12" x2="20" y2="3"/><line stroke-linecap="round" x1="1" y1="14" x2="7" y2="14"/><line stroke-linecap="round" x1="9" y1="8" x2="15" y2="8"/><line stroke-linecap="round" x1="17" y1="16" x2="23" y2="16"/></svg>`,
  };

  function icon(name) {
    return (icons[name] || icons['box']);
  }

  // ── Color palette cycling for cards ─────────────────────────────────
  const cardColors = ['c-blue','c-green','c-orange','c-purple','c-teal','c-pink','c-yellow','c-red','c-indigo','c-cyan'];

  // ── Per-child icon mapping (by partial label keyword) ────────────────
  const childIconMap = [
    ['valas',         'dollar'],
    ['devisi',        'layers'],
    ['perkiraan',     'layers'],
    ['aktiva',        'package'],
    ['hutang',        'credit-card'],
    ['piutang',       'credit-card'],
    ['giro',          'repeat'],
    ['laba',          'trending-up'],
    ['neraca',        'bar-chart'],
    ['costing',       'sliders'],
    ['posting',       'send'],
    ['supplier',      'truck'],
    ['gudang',        'warehouse'],
    ['group',         'grid'],
    ['merk',          'tag'],
    ['bahan',         'package'],
    ['barang',        'box'],
    ['jasa',          'clipboard'],
    ['lokasi',        'map-pin'],
    ['satuan',        'sliders'],
    ['area',          'map-pin'],
    ['kota',          'map-pin'],
    ['customer',      'users'],
    ['sales',         'trending-up'],
    ['expedisi',      'truck'],
    ['departemen',    'grid'],
    ['jabatan',       'layers'],
    ['karyawan',      'users'],
    ['biaya',         'dollar'],
    ['pajak',         'percent'],
    ['kendaraan',     'truck'],
    ['sopir',         'truck'],
    ['periode',       'settings'],
    ['kunci',         'lock'],
    ['nomor',         'settings'],
    ['pemakai',       'users'],
    ['password',      'lock'],
    ['kalkulator',    'sliders'],
    ['log',           'file-text'],
    ['jurnal',        'file-text'],
    ['kas',           'dollar'],
    ['bank',          'credit-card'],
    ['bon',           'clipboard'],
    ['memorial',      'file-text'],
    ['koreksi',       'rotate-ccw'],
    ['pelunasan',     'check-square'],
    ['permintaan',    'clipboard'],
    ['penerimaan',    'package'],
    ['inspeksi',      'check-square'],
    ['invoice',       'file-text'],
    ['retur',         'rotate-ccw'],
    ['debet',         'dollar'],
    ['penawaran',     'tag'],
    ['verifikasi',    'check-square'],
    ['uang muka',     'dollar'],
    ['surat jalan',   'send'],
    ['closing',       'lock'],
    ['performance',   'trending-up'],
    ['opname',        'check-square'],
    ['transfer',      'repeat'],
    ['sample',        'package'],
    ['konsinyasi',    'package'],
    ['kasir',         'dollar'],
    ['laporan',       'bar-chart'],
    ['dashboard',     'bar-chart'],
    ['hitung',        'sliders'],
    ['proses',        'zap'],
    ['aktivitas',     'file-text'],
    ['cascade',       'layers'],
    ['tile',          'grid'],
    ['arrange',       'grid'],
    ['po',            'clipboard'],
    ['so',            'clipboard'],
    ['faktur',        'file-text'],
    ['nota',          'file-text'],
    ['kredit',        'credit-card'],
    ['pemakaian',     'package'],
    ['informasi',     'layers'],
    ['cetak',         'printer'],
  ];

  function getChildIcon(label) 
  {
    const l = (label || '').toLowerCase();
    for (const [kw, ic] of childIconMap) {
      if (l.includes(kw)) return ic;
    }
    return 'box';
  }

  // ── Menu state ───────────────────────────────────────────────────────
  let modules = [];
  let activeModuleKey = null;

  const moduleIcons = {
    'berkas':          'archive',
    'master data':     'users',
    'accounting':      'bar-chart',
    'pengadaan':       'credit-card',
    'marketing':       'shopping-cart',
    'gudang':          'warehouse',
    'pos':             'trending-up',
    'laporan-laporan': 'file-text',
    'utilitas':        'tool',
    'jendela':         'monitor',
  };

  function getModuleIcon(label) {
    const k = (label || '').toLowerCase().trim();
    if (moduleIcons[k]) return moduleIcons[k];
    for (const [pattern, iconName] of Object.entries(moduleIcons)) {
      if (k.includes(pattern)) return iconName;
    }
    return 'box';
  }

  function buildMenu(rows) {
    const result  = [];
    let current   = null;
    rows.forEach(row => {
      if (row.L0 === 0 || row.L0 === '0') {
        current = { key: row.KODEMENU, label: row.Keterangan, href: row.href, subtitle: row.Keterangan, cards: [] };
        result.push(current);
      } else if ((row.L0 === 1 || row.L0 === '1') && current) {
        current.cards.push({ key: row.KODEMENU, label: row.Keterangan, href: row.href, access: row.ACCESS });
      }
    });
    return result;
  }

  // ── Render the card-grid home for a module ───────────────────────────
  function showModuleHome(moduleKey) {
    const mod = modules.find(m => m.key === moduleKey);
    if (!mod) return;

    activeModuleKey = moduleKey;

    // Mark nav active
    document.querySelectorAll('.nav-group').forEach(g => g.classList.remove('active'));
    const ng = document.getElementById('ng-' + moduleKey);
    if (ng) ng.classList.add('active');

    // Breadcrumb
    document.getElementById('breadcrumb').innerHTML =
      `<span>Beranda</span><span class="bc-sep">›</span><b>${mod.label}</b>`;

    // Build card grid
    const cards = mod.cards.map((c, i) => {
      const color    = cardColors[i % cardColors.length];
      const iconName = getChildIcon(c.label);
      return `
        <div class="card" onclick="navToChild('${moduleKey}','${c.key}','${encodeURIComponent(c.href || '')}')">
          <div class="card-icon-wrap ${color}">${icon(iconName)}</div>
          <div class="card-label">${c.label}</div>
        </div>`;
    }).join('');

    // Show dynamic content, hide blade content
    const dyn   = document.getElementById('content-dynamic');
    const blade = document.getElementById('content-blade');
    if (blade) blade.style.display = 'none';
    dyn.style.display = 'block';
    dyn.innerHTML = `
      <div class="page-title">${mod.label}</div>
      <div class="page-subtitle">${mod.subtitle}</div>
      <div class="card-grid">${cards}</div>
    `;
  }

  // ── Navigate to a child page (redirects to its href) ─────────────────
  function navToChild(moduleKey, cardKey, encodedHref) {
    const href = decodeURIComponent(encodedHref);
    if (href && href !== 'undefined' && href !== '') {
      window.location.href = href;
    }
  }

  // ── Render sidebar nav ───────────────────────────────────────────────
  function renderNav() {
    const nav = document.getElementById('nav');
    nav.innerHTML = modules.map(m => `
      <div class="nav-group" id="ng-${m.key}">
        <div class="nav-item" onclick="showModuleHome('${m.key}')">
          <span class="nav-icon">${icon(getModuleIcon(m.label))}</span>
          <span class="nav-label">${m.label}</span>
          <span class="nav-chevron">${icon('chevron')}</span>
        </div>
        <div class="nav-children">
          ${m.cards.map(c => `
            <div class="nav-child"
                 data-access="${c.access ?? ''}"
                 onclick="event.stopPropagation(); window.location='{{ url('') }}/${(c.href || '').replace(/^\//, '')}'">${c.label}</div>
          `).join('')}
        </div>
      </div>
    `).join('');
  }

  // ── Boot ─────────────────────────────────────────────────────────────
  $.get('{{ url('getmenu') }}', function (data) {
    modules = buildMenu(data);
    renderNav();
  }).fail(function () {
    console.error('Failed to load menu from /getmenu');
  });

</script>

  @yield('js')
</body>
</html>