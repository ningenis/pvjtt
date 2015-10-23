Overview

    Chatting: Whatsaap (link masuk room)
    Menejemen Proyek: Trello
    Sinkronisasi Selain Kode: Bittorent Sync (link folder other-assets dan link folder web-assets)
    Sinkronisasi Kode: Github

Aplikasi pendukung

    Pingendo -> Buat Mockup

Coding
Struktur

├── README.md
├── WORKFLOW.md 
├── prepros.cfg       //File Konfigurasi Prepros
│
├── lain-lain
├── prototype
├── public
│   ├── template.html     //Template <head> untuk javascript, css dsb.
│   ├── custom-1.html 
│   ├── ... 
│   ├── custom-n.html
│   │
│   ├── css
│   │   ├── bootstrap-theme.css
│   │   ├── bootstrap-theme.css.map
│   │   ├── bootstrap.css 
│   │   ├── bootstrap.css.map
│   │   ├── pingendo-theme.css
│   │   └── pingendo-theme.css.map
│   ├── fonts
│   │   ├── glyphicons-halflings-regular.eot
│   │   ├── glyphicons-halflings-regular.svg
│   │   ├── glyphicons-halflings-regular.ttf
│   │   ├── glyphicons-halflings-regular.woff
│   │   └── glyphicons-halflings-regular.woff2
│   ├── js
│   │   ├── bootstrap.js
│   │   ├── bootstrap.min.js
│   │   ├── jasny-bootstrap.js
│   │   ├── jasny-bootstrap.min.js
│   │   └── jquery
│   └── web-assets
│
└── source
    ├── js
    │   ├── bootstrap
    │   └── jasny-bootstrap
    └── less
        ├── bootstrap
        ├── pingendo
        ├── jasny-bootstrap
        │
        ├── custom-bootstrap-variables.less
        ├── custom-jasny-bootstrap-variables.less
        ├── custom-jasny-navmenu.less
        ├── mixins.less
        ├── style.less        //File LESS utama untuk @import .less yang lain     
        ├── variables.less
        │
        ├── custom-1.less
        ├── ...
        └── custom-n.less
