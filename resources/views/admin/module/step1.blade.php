@push('scripts')
    <script src="{{ asset('public/js/admin/module/step1.js') }}"></script>
    <script src="{{ asset('/public/js/admin/pluralize.js') }}"></script>
@endpush
<div class="tab-pane active" id="tab_1">
    @php($fontawesome =[
            "glass" => "glass",
            "music" => "music",
            "search" => "search",
            "envelope-o" => "envelope-o",
            "heart" => "heart",
            "star" => "star",
            "star-o" => "star-o",
            "user" => "user",
            "film" => "film",
            "th-large" => "th-large",
            "th" => "th",
            "th-list" => "th-list",
            "check" => "check",
            "remove" => "remove",
            "close" => "close",
            "times" => "times",
            "search-plus" => "search-plus",
            "search-minus" => "search-minus",
            "power-off" => "power-off",
            "signal" => "signal",
            "gear" => "gear",
            "cog" => "cog",
            "trash-o" => "trash-o",
            "home" => "home",
            "file-o" => "file-o",
            "clock-o" => "clock-o",
            "road" => "road",
            "download" => "download",
            "arrow-circle-o-down" => "arrow-circle-o-down",
            "arrow-circle-o-up" => "arrow-circle-o-up",
            "inbox" => "inbox",
            "play-circle-o" => "play-circle-o",
            "rotate-right" => "rotate-right",
            "repeat" => "repeat",
            "refresh" => "refresh",
            "list-alt" => "list-alt",
            "lock" => "lock",
            "flag" => "flag",
            "headphones" => "headphones",
            "volume-off" => "volume-off",
            "volume-down" => "volume-down",
            "volume-up" => "volume-up",
            "qrcode" => "qrcode",
            "barcode" => "barcode",
            "tag" => "tag",
            "tags" => "tags",
            "book" => "book",
            "bookmark" => "bookmark",
            "print" => "print",
            "camera" => "camera",
            "font" => "font",
            "bold" => "bold",
            "italic" => "italic",
            "text-height" => "text-height",
            "text-width" => "text-width",
            "align-left" => "align-left",
            "align-center" => "align-center",
            "align-right" => "align-right",
            "align-justify" => "align-justify",
            "list" => "list",
            "dedent" => "dedent",
            "outdent" => "outdent",
            "indent" => "indent",
            "video-camera" => "video-camera",
            "photo" => "photo",
            "image" => "image",
            "picture-o" => "picture-o",
            "pencil" => "pencil",
            "map-marker" => "map-marker",
            "adjust" => "adjust",
            "tint" => "tint",
            "edit" => "edit",
            "pencil-square-o" => "pencil-square-o",
            "share-square-o" => "share-square-o",
            "check-square-o" => "check-square-o",
            "arrows" => "arrows",
            "step-backward" => "step-backward",
            "fast-backward" => "fast-backward",
            "backward" => "backward",
            "play" => "play",
            "pause" => "pause",
            "stop" => "stop",
            "forward" => "forward",
            "fast-forward" => "fast-forward",
            "step-forward" => "step-forward",
            "eject" => "eject",
            "chevron-left" => "chevron-left",
            "chevron-right" => "chevron-right",
            "plus-circle" => "plus-circle",
            "minus-circle" => "minus-circle",
            "times-circle" => "times-circle",
            "check-circle" => "check-circle",
            "question-circle" => "question-circle",
            "info-circle" => "info-circle",
            "crosshairs" => "crosshairs",
            "times-circle-o" => "times-circle-o",
            "check-circle-o" => "check-circle-o",
            "ban" => "ban",
            "arrow-left" => "arrow-left",
            "arrow-right" => "arrow-right",
            "arrow-up" => "arrow-up",
            "arrow-down" => "arrow-down",
            "mail-forward" => "mail-forward",
            "share" => "share",
            "expand" => "expand",
            "compress" => "compress",
            "plus" => "plus",
            "minus" => "minus",
            "asterisk" => "asterisk",
            "exclamation-circle" => "exclamation-circle",
            "gift" => "gift",
            "leaf" => "leaf",
            "fire" => "fire",
            "eye" => "eye",
            "eye-slash" => "eye-slash",
            "warning" => "warning",
            "exclamation-triangle" => "exclamation-triangle",
            "plane" => "plane",
            "calendar" => "calendar",
            "random" => "random",
            "comment" => "comment",
            "magnet" => "magnet",
            "chevron-up" => "chevron-up",
            "chevron-down" => "chevron-down",
            "retweet" => "retweet",
            "shopping-cart" => "shopping-cart",
            "folder" => "folder",
            "folder-open" => "folder-open",
            "arrows-v" => "arrows-v",
            "arrows-h" => "arrows-h",
            "bar-chart-o" => "bar-chart-o",
            "bar-chart" => "bar-chart",
            "twitter-square" => "twitter-square",
            "facebook-square" => "facebook-square",
            "camera-retro" => "camera-retro",
            "key" => "key",
            "gears" => "gears",
            "cogs" => "cogs",
            "comments" => "comments",
            "thumbs-o-up" => "thumbs-o-up",
            "thumbs-o-down" => "thumbs-o-down",
            "star-half" => "star-half",
            "heart-o" => "heart-o",
            "sign-out" => "sign-out",
            "linkedin-square" => "linkedin-square",
            "thumb-tack" => "thumb-tack",
            "external-link" => "external-link",
            "sign-in" => "sign-in",
            "trophy" => "trophy",
            "github-square" => "github-square",
            "upload" => "upload",
            "lemon-o" => "lemon-o",
            "phone" => "phone",
            "square-o" => "square-o",
            "bookmark-o" => "bookmark-o",
            "phone-square" => "phone-square",
            "twitter" => "twitter",
            "facebook-f" => "facebook-f",
            "facebook" => "facebook",
            "github" => "github",
            "unlock" => "unlock",
            "credit-card" => "credit-card",
            "feed" => "feed",
            "rss" => "rss",
            "hdd-o" => "hdd-o",
            "bullhorn" => "bullhorn",
            "bell" => "bell",
            "certificate" => "certificate",
            "hand-o-right" => "hand-o-right",
            "hand-o-left" => "hand-o-left",
            "hand-o-up" => "hand-o-up",
            "hand-o-down" => "hand-o-down",
            "arrow-circle-left" => "arrow-circle-left",
            "arrow-circle-right" => "arrow-circle-right",
            "arrow-circle-up" => "arrow-circle-up",
            "arrow-circle-down" => "arrow-circle-down",
            "globe" => "globe",
            "wrench" => "wrench",
            "tasks" => "tasks",
            "filter" => "filter",
            "briefcase" => "briefcase",
            "arrows-alt" => "arrows-alt",
            "group" => "group",
            "users" => "users",
            "chain" => "chain",
            "link" => "link",
            "cloud" => "cloud",
            "flask" => "flask",
            "cut" => "cut",
            "scissors" => "scissors",
            "copy" => "copy",
            "files-o" => "files-o",
            "paperclip" => "paperclip",
            "save" => "save",
            "floppy-o" => "floppy-o",
            "square" => "square",
            "navicon" => "navicon",
            "reorder" => "reorder",
            "bars" => "bars",
            "list-ul" => "list-ul",
            "list-ol" => "list-ol",
            "strikethrough" => "strikethrough",
            "underline" => "underline",
            "table" => "table",
            "magic" => "magic",
            "truck" => "truck",
            "pinterest" => "pinterest",
            "pinterest-square" => "pinterest-square",
            "google-plus-square" => "google-plus-square",
            "google-plus" => "google-plus",
            "money" => "money",
            "caret-down" => "caret-down",
            "caret-up" => "caret-up",
            "caret-left" => "caret-left",
            "caret-right" => "caret-right",
            "columns" => "columns",
            "unsorted" => "unsorted",
            "sort" => "sort",
            "sort-down" => "sort-down",
            "sort-desc" => "sort-desc",
            "sort-up" => "sort-up",
            "sort-asc" => "sort-asc",
            "envelope" => "envelope",
            "linkedin" => "linkedin",
            "rotate-left" => "rotate-left",
            "undo" => "undo",
            "legal" => "legal",
            "gavel" => "gavel",
            "dashboard" => "dashboard",
            "tachometer" => "tachometer",
            "comment-o" => "comment-o",
            "comments-o" => "comments-o",
            "flash" => "flash",
            "bolt" => "bolt",
            "sitemap" => "sitemap",
            "umbrella" => "umbrella",
            "paste" => "paste",
            "clipboard" => "clipboard",
            "lightbulb-o" => "lightbulb-o",
            "exchange" => "exchange",
            "cloud-download" => "cloud-download",
            "cloud-upload" => "cloud-upload",
            "user-md" => "user-md",
            "stethoscope" => "stethoscope",
            "suitcase" => "suitcase",
            "bell-o" => "bell-o",
            "coffee" => "coffee",
            "cutlery" => "cutlery",
            "file-text-o" => "file-text-o",
            "building-o" => "building-o",
            "hospital-o" => "hospital-o",
            "ambulance" => "ambulance",
            "medkit" => "medkit",
            "fighter-jet" => "fighter-jet",
            "beer" => "beer",
            "h-square" => "h-square",
            "plus-square" => "plus-square",
            "angle-double-left" => "angle-double-left",
            "angle-double-right" => "angle-double-right",
            "angle-double-up" => "angle-double-up",
            "angle-double-down" => "angle-double-down",
            "angle-left" => "angle-left",
            "angle-right" => "angle-right",
            "angle-up" => "angle-up",
            "angle-down" => "angle-down",
            "desktop" => "desktop",
            "laptop" => "laptop",
            "tablet" => "tablet",
            "mobile-phone" => "mobile-phone",
            "mobile" => "mobile",
            "circle-o" => "circle-o",
            "quote-left" => "quote-left",
            "quote-right" => "quote-right",
            "spinner" => "spinner",
            "circle" => "circle",
            "mail-reply" => "mail-reply",
            "reply" => "reply",
            "github-alt" => "github-alt",
            "folder-o" => "folder-o",
            "folder-open-o" => "folder-open-o",
            "smile-o" => "smile-o",
            "frown-o" => "frown-o",
            "meh-o" => "meh-o",
            "gamepad" => "gamepad",
            "keyboard-o" => "keyboard-o",
            "flag-o" => "flag-o",
            "flag-checkered" => "flag-checkered",
            "terminal" => "terminal",
            "code" => "code",
            "mail-reply-all" => "mail-reply-all",
            "reply-all" => "reply-all",
            "star-half-empty" => "star-half-empty",
            "star-half-full" => "star-half-full",
            "star-half-o" => "star-half-o",
            "location-arrow" => "location-arrow",
            "crop" => "crop",
            "code-fork" => "code-fork",
            "unlink" => "unlink",
            "chain-broken" => "chain-broken",
            "question" => "question",
            "info" => "info",
            "exclamation" => "exclamation",
            "superscript" => "superscript",
            "subscript" => "subscript",
            "eraser" => "eraser",
            "puzzle-piece" => "puzzle-piece",
            "microphone" => "microphone",
            "microphone-slash" => "microphone-slash",
            "shield" => "shield",
            "calendar-o" => "calendar-o",
            "fire-extinguisher" => "fire-extinguisher",
            "rocket" => "rocket",
            "maxcdn" => "maxcdn",
            "chevron-circle-left" => "chevron-circle-left",
            "chevron-circle-right" => "chevron-circle-right",
            "chevron-circle-up" => "chevron-circle-up",
            "chevron-circle-down" => "chevron-circle-down",
            "html5" => "html5",
            "css3" => "css3",
            "anchor" => "anchor",
            "unlock-alt" => "unlock-alt",
            "bullseye" => "bullseye",
            "ellipsis-h" => "ellipsis-h",
            "ellipsis-v" => "ellipsis-v",
            "rss-square" => "rss-square",
            "play-circle" => "play-circle",
            "ticket" => "ticket",
            "minus-square" => "minus-square",
            "minus-square-o" => "minus-square-o",
            "level-up" => "level-up",
            "level-down" => "level-down",
            "check-square" => "check-square",
            "pencil-square" => "pencil-square",
            "external-link-square" => "external-link-square",
            "share-square" => "share-square",
            "compass" => "compass",
            "toggle-down" => "toggle-down",
            "caret-square-o-down" => "caret-square-o-down",
            "toggle-up" => "toggle-up",
            "caret-square-o-up" => "caret-square-o-up",
            "toggle-right" => "toggle-right",
            "caret-square-o-right" => "caret-square-o-right",
            "euro" => "euro",
            "eur" => "eur",
            "gbp" => "gbp",
            "dollar" => "dollar",
            "usd" => "usd",
            "rupee" => "rupee",
            "inr" => "inr",
            "cny" => "cny",
            "rmb" => "rmb",
            "yen" => "yen",
            "jpy" => "jpy",
            "ruble" => "ruble",
            "rouble" => "rouble",
            "rub" => "rub",
            "won" => "won",
            "krw" => "krw",
            "bitcoin" => "bitcoin",
            "btc" => "btc",
            "file" => "file",
            "file-text" => "file-text",
            "sort-alpha-asc" => "sort-alpha-asc",
            "sort-alpha-desc" => "sort-alpha-desc",
            "sort-amount-asc" => "sort-amount-asc",
            "sort-amount-desc" => "sort-amount-desc",
            "sort-numeric-asc" => "sort-numeric-asc",
            "sort-numeric-desc" => "sort-numeric-desc",
            "thumbs-up" => "thumbs-up",
            "thumbs-down" => "thumbs-down",
            "youtube-square" => "youtube-square",
            "youtube" => "youtube",
            "xing" => "xing",
            "xing-square" => "xing-square",
            "youtube-play" => "youtube-play",
            "dropbox" => "dropbox",
            "stack-overflow" => "stack-overflow",
            "instagram" => "instagram",
            "flickr" => "flickr",
            "adn" => "adn",
            "bitbucket" => "bitbucket",
            "bitbucket-square" => "bitbucket-square",
            "tumblr" => "tumblr",
            "tumblr-square" => "tumblr-square",
            "long-arrow-down" => "long-arrow-down",
            "long-arrow-up" => "long-arrow-up",
            "long-arrow-left" => "long-arrow-left",
            "long-arrow-right" => "long-arrow-right",
            "apple" => "apple",
            "windows" => "windows",
            "android" => "android",
            "linux" => "linux",
            "dribbble" => "dribbble",
            "skype" => "skype",
            "foursquare" => "foursquare",
            "trello" => "trello",
            "female" => "female",
            "male" => "male",
            "gittip" => "gittip",
            "gratipay" => "gratipay",
            "sun-o" => "sun-o",
            "moon-o" => "moon-o",
            "archive" => "archive",
            "bug" => "bug",
            "vk" => "vk",
            "weibo" => "weibo",
            "renren" => "renren",
            "pagelines" => "pagelines",
            "stack-exchange" => "stack-exchange",
            "arrow-circle-o-right" => "arrow-circle-o-right",
            "arrow-circle-o-left" => "arrow-circle-o-left",
            "toggle-left" => "toggle-left",
            "caret-square-o-left" => "caret-square-o-left",
            "dot-circle-o" => "dot-circle-o",
            "wheelchair" => "wheelchair",
            "vimeo-square" => "vimeo-square",
            "turkish-lira" => "turkish-lira",
            "try" => "try",
            "plus-square-o" => "plus-square-o",
            "space-shuttle" => "space-shuttle",
            "slack" => "slack",
            "envelope-square" => "envelope-square",
            "wordpress" => "wordpress",
            "openid" => "openid",
            "institution" => "institution",
            "bank" => "bank",
            "university" => "university",
            "mortar-board" => "mortar-board",
            "graduation-cap" => "graduation-cap",
            "yahoo" => "yahoo",
            "google" => "google",
            "reddit" => "reddit",
            "reddit-square" => "reddit-square",
            "stumbleupon-circle" => "stumbleupon-circle",
            "stumbleupon" => "stumbleupon",
            "delicious" => "delicious",
            "digg" => "digg",
            "pied-piper" => "pied-piper",
            "pied-piper-alt" => "pied-piper-alt",
            "drupal" => "drupal",
            "joomla" => "joomla",
            "language" => "language",
            "fax" => "fax",
            "building" => "building",
            "child" => "child",
            "paw" => "paw",
            "spoon" => "spoon",
            "cube" => "cube",
            "cubes" => "cubes",
            "behance" => "behance",
            "behance-square" => "behance-square",
            "steam" => "steam",
            "steam-square" => "steam-square",
            "recycle" => "recycle",
            "automobile" => "automobile",
            "car" => "car",
            "cab" => "cab",
            "taxi" => "taxi",
            "tree" => "tree",
            "spotify" => "spotify",
            "deviantart" => "deviantart",
            "soundcloud" => "soundcloud",
            "database" => "database",
            "file-pdf-o" => "file-pdf-o",
            "file-word-o" => "file-word-o",
            "file-excel-o" => "file-excel-o",
            "file-powerpoint-o" => "file-powerpoint-o",
            "file-photo-o" => "file-photo-o",
            "file-picture-o" => "file-picture-o",
            "file-image-o" => "file-image-o",
            "file-zip-o" => "file-zip-o",
            "file-archive-o" => "file-archive-o",
            "file-sound-o" => "file-sound-o",
            "file-audio-o" => "file-audio-o",
            "file-movie-o" => "file-movie-o",
            "file-video-o" => "file-video-o",
            "file-code-o" => "file-code-o",
            "vine" => "vine",
            "codepen" => "codepen",
            "jsfiddle" => "jsfiddle",
            "life-bouy" => "life-bouy",
            "life-buoy" => "life-buoy",
            "life-saver" => "life-saver",
            "support" => "support",
            "life-ring" => "life-ring",
            "circle-o-notch" => "circle-o-notch",
            "ra" => "ra",
            "rebel" => "rebel",
            "ge" => "ge",
            "empire" => "empire",
            "git-square" => "git-square",
            "git" => "git",
            "y-combinator-square" => "y-combinator-square",
            "yc-square" => "yc-square",
            "hacker-news" => "hacker-news",
            "tencent-weibo" => "tencent-weibo",
            "qq" => "qq",
            "wechat" => "wechat",
            "weixin" => "weixin",
            "send" => "send",
            "paper-plane" => "paper-plane",
            "send-o" => "send-o",
            "paper-plane-o" => "paper-plane-o",
            "history" => "history",
            "circle-thin" => "circle-thin",
            "header" => "header",
            "paragraph" => "paragraph",
            "sliders" => "sliders",
            "share-alt" => "share-alt",
            "share-alt-square" => "share-alt-square",
            "bomb" => "bomb",
            "soccer-ball-o" => "soccer-ball-o",
            "futbol-o" => "futbol-o",
            "tty" => "tty",
            "binoculars" => "binoculars",
            "plug" => "plug",
            "slideshare" => "slideshare",
            "twitch" => "twitch",
            "yelp" => "yelp",
            "newspaper-o" => "newspaper-o",
            "wifi" => "wifi",
            "calculator" => "calculator",
            "paypal" => "paypal",
            "google-wallet" => "google-wallet",
            "cc-visa" => "cc-visa",
            "cc-mastercard" => "cc-mastercard",
            "cc-discover" => "cc-discover",
            "cc-amex" => "cc-amex",
            "cc-paypal" => "cc-paypal",
            "cc-stripe" => "cc-stripe",
            "bell-slash" => "bell-slash",
            "bell-slash-o" => "bell-slash-o",
            "trash" => "trash",
            "copyright" => "copyright",
            "at" => "at",
            "eyedropper" => "eyedropper",
            "paint-brush" => "paint-brush",
            "birthday-cake" => "birthday-cake",
            "area-chart" => "area-chart",
            "pie-chart" => "pie-chart",
            "line-chart" => "line-chart",
            "lastfm" => "lastfm",
            "lastfm-square" => "lastfm-square",
            "toggle-off" => "toggle-off",
            "toggle-on" => "toggle-on",
            "bicycle" => "bicycle",
            "bus" => "bus",
            "ioxhost" => "ioxhost",
            "angellist" => "angellist",
            "cc" => "cc",
            "shekel" => "shekel",
            "sheqel" => "sheqel",
            "ils" => "ils",
            "meanpath" => "meanpath",
            "buysellads" => "buysellads",
            "connectdevelop" => "connectdevelop",
            "dashcube" => "dashcube",
            "forumbee" => "forumbee",
            "leanpub" => "leanpub",
            "sellsy" => "sellsy",
            "shirtsinbulk" => "shirtsinbulk",
            "simplybuilt" => "simplybuilt",
            "skyatlas" => "skyatlas",
            "cart-plus" => "cart-plus",
            "cart-arrow-down" => "cart-arrow-down",
            "diamond" => "diamond",
            "ship" => "ship",
            "user-secret" => "user-secret",
            "motorcycle" => "motorcycle",
            "street-view" => "street-view",
            "heartbeat" => "heartbeat",
            "venus" => "venus",
            "mars" => "mars",
            "mercury" => "mercury",
            "intersex" => "intersex",
            "transgender" => "transgender",
            "transgender-alt" => "transgender-alt",
            "venus-double" => "venus-double",
            "mars-double" => "mars-double",
            "venus-mars" => "venus-mars",
            "mars-stroke" => "mars-stroke",
            "mars-stroke-v" => "mars-stroke-v",
            "mars-stroke-h" => "mars-stroke-h",
            "neuter" => "neuter",
            "genderless" => "genderless",
            "facebook-official" => "facebook-official",
            "pinterest-p" => "pinterest-p",
            "whatsapp" => "whatsapp",
            "server" => "server",
            "user-plus" => "user-plus",
            "user-times" => "user-times",
            "hotel" => "hotel",
            "bed" => "bed",
            "viacoin" => "viacoin",
            "train" => "train",
            "subway" => "subway",
            "medium" => "medium",
            "yc" => "yc",
            "y-combinator" => "y-combinator",
            "optin-monster" => "optin-monster",
            "opencart" => "opencart",
            "expeditedssl" => "expeditedssl",
            "battery-4" => "battery-4",
            "battery-full" => "battery-full",
            "battery-3" => "battery-3",
            "battery-three-quarters" => "battery-three-quarters",
            "battery-2" => "battery-2",
            "battery-half" => "battery-half",
            "battery-1" => "battery-1",
            "battery-quarter" => "battery-quarter",
            "battery-0" => "battery-0",
            "battery-empty" => "battery-empty",
            "mouse-pointer" => "mouse-pointer",
            "i-cursor" => "i-cursor",
            "object-group" => "object-group",
            "object-ungroup" => "object-ungroup",
            "sticky-note" => "sticky-note",
            "sticky-note-o" => "sticky-note-o",
            "cc-jcb" => "cc-jcb",
            "cc-diners-club" => "cc-diners-club",
            "clone" => "clone",
            "balance-scale" => "balance-scale",
            "hourglass-o" => "hourglass-o",
            "hourglass-1" => "hourglass-1",
            "hourglass-start" => "hourglass-start",
            "hourglass-2" => "hourglass-2",
            "hourglass-half" => "hourglass-half",
            "hourglass-3" => "hourglass-3",
            "hourglass-end" => "hourglass-end",
            "hourglass" => "hourglass",
            "hand-grab-o" => "hand-grab-o",
            "hand-rock-o" => "hand-rock-o",
            "hand-stop-o" => "hand-stop-o",
            "hand-paper-o" => "hand-paper-o",
            "hand-scissors-o" => "hand-scissors-o",
            "hand-lizard-o" => "hand-lizard-o",
            "hand-spock-o" => "hand-spock-o",
            "hand-pointer-o" => "hand-pointer-o",
            "hand-peace-o" => "hand-peace-o",
            "trademark" => "trademark",
            "registered" => "registered",
            "creative-commons" => "creative-commons",
            "gg" => "gg",
            "gg-circle" => "gg-circle",
            "tripadvisor" => "tripadvisor",
            "odnoklassniki" => "odnoklassniki",
            "odnoklassniki-square" => "odnoklassniki-square",
            "get-pocket" => "get-pocket",
            "wikipedia-w" => "wikipedia-w",
            "safari" => "safari",
            "chrome" => "chrome",
            "firefox" => "firefox",
            "opera" => "opera",
            "internet-explorer" => "internet-explorer",
            "tv" => "tv",
            "television" => "television",
            "contao" => "contao",
            "500px" => "500px",
            "amazon" => "amazon",
            "calendar-plus-o" => "calendar-plus-o",
            "calendar-minus-o" => "calendar-minus-o",
            "calendar-times-o" => "calendar-times-o",
            "calendar-check-o" => "calendar-check-o",
            "industry" => "industry",
            "map-pin" => "map-pin",
            "map-signs" => "map-signs",
            "map-o" => "map-o",
            "map" => "map",
            "commenting" => "commenting",
            "commenting-o" => "commenting-o",
            "houzz" => "houzz",
            "vimeo" => "vimeo",
            "black-tie" => "black-tie",
            "fonticons" => "fonticons",
            "reddit-alien" => "reddit-alien",
            "edge" => "edge",
            "credit-card-alt" => "credit-card-alt",
            "codiepie" => "codiepie",
            "modx" => "modx",
            "fort-awesome" => "fort-awesome",
            "usb" => "usb",
            "product-hunt" => "product-hunt",
            "mixcloud" => "mixcloud",
            "scribd" => "scribd",
            "pause-circle" => "pause-circle",
            "pause-circle-o" => "pause-circle-o",
            "stop-circle" => "stop-circle",
            "stop-circle-o" => "stop-circle-o",
            "shopping-bag" => "shopping-bag",
            "shopping-basket" => "shopping-basket",
            "hashtag" => "hashtag",
            "bluetooth" => "bluetooth",
            "bluetooth-b" => "bluetooth-b",
            "percent" => "percent",
            ])
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                *{{ $error }} <br>
            @endforeach
        </div>
    @endif
    @if(isset($module_data))
        {{ Form::model($module_data, ['url' => 'admin/step1', 'method'=>'PATCH']) }}
        <input type="hidden" name="id" value="{{ $id }}">
    @else
        {{ Form::open(array('url' => 'admin/step1')) }}
    @endif
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('table', 'Table*') }}
            {{ Form::select('table_name', $tables, null, ['class'=>'form-control select2', 'required' , (isset($module_data))? "disabled": ""  ]) }}
            {{--<select class="form-control" name="table" required {{ isset($module_data->table_name)?'disabled':''  }}>
                <option selected disabled="">Select Table</option>
                @foreach($tables as $key=>$table)
                    @if($keyCount[$key] == 1)
                        <option {{ isset($module_data)?($table->getName() == $module_data->table_name)?'selected':'':'' }}
                                value="{{$table->getName()}}">{{ ucwords($table->getName()) }}</option>
                    @endif
                @endforeach
            </select>--}}
        </div>
        <div class="form-group">
            {{ Form::label('moduleName', 'Module Name*') }}
            {{ Form::text('name', old('module'), $attributes = ['class'=>'form-control', 'id'=>'module-name', 'placeholder'=>'Module Name', 'required', isset($module_data->name)?'readonly':'', 'autofocus']) }}
            {{ Form::hidden('module', $value = isset($module_data->name)?$module_data->name:old('module'), $attributes = ['id'=>'module']) }}
            <div class="help-block" id="module-hep">
                * Do not use cms_* as prefix on your tables name
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('icon', 'Icon*') }}
            {{ Form::select('icon', $fontawesome, null, ['class'=>'form-control select2', 'data-format' => 'formatFaIcon', 'required']) }}
            {{--<select class="form-control select2" name="icon" style="width: 100%;" required data-format="formatFaIcon">
                @foreach($fontawesome as $item)
                    <option data-foo="bar" {{ isset($module_data)?('fa fa-'.$item == $module_data->icon)?'selected':'':'' }}
                    value="fa fa-{{$item}}">{{ ucwords($item) }}</option>
                @endforeach
            </select>--}}
        </div>
        <div class="form-group">
            {{ Form::label('moduleSlug', 'Module Slug*') }}
            {{ Form::text('slug', $value = isset($module_data->slug)?$module_data->slug:old('slug'), $attributes = ['class'=>'form-control', 'id'=>'slug', 'placeholder'=>'Module Slug', 'required', 'readonly']) }}
            <div class="help-block">
                * Please use alpha numeric only, without space use instead _ and or special character
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        @php($back=url('admin/modules'))
        {{ Form::button('Back',['class'=>'btn', 'onclick'=>"window.location='".$back."'"]) }}
        {{ Form::submit('Next Step 2',['class'=>'btn btn-primary']) }}
    </div>
{{ Form::close() }}
<!-- /.box -->
</div>