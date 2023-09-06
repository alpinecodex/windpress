body { margin:0; }

/* Top Nav */
nav.top { position:fixed;width:100%;z-index:10; }
nav.top .logo { text-align:center;padding:1rem;font-size:2rem; }
nav.top .menu, nav.top div .menu { display:none; }
nav.top ul { margin:0;padding:0 0 1rem 0;line-height:2em;text-align:center;position: static;text-transform:uppercase; }
nav.top li { display:inline-block;margin:0;padding:.4rem 0;width:100%; }
nav.top, nav.top a, .intro { color:#fff; }
nav.top a:link, nav.top a:visited { text-decoration:none;color:#fff;font-weight:600;padding:1rem; }
nav.top a:hover { text-decoration:underline;color:#fff; }
nav.top .select { background:#fff; }
nav.top .select a:link, nav.top .select a:visited { color:#fff; }
/* Colors */
nav.top, nav.top ul { background:#0E52AE; }
nav.top, nav.top a, .intro, nav.top a:link, nav.top a:visited, nav.top a:hover { color:#fff; }
nav.top .select { background:#fff; }


/* Used to hide and display mobile nav without requiring JavaScript */
.show-menu { display:block;font-size:200%;position:fixed;top:14px;left:14px; }
input[type=checkbox]{ display:none;-webkit-appearance:none; }
input[type=checkbox]:checked ~ .menu, input[type=checkbox]:checked ~ div .menu { display: block; }

/* Width for main content. Change max width if you want it wider or more narrow */
.contain { padding:1em;margin:0 auto;max-width:890px; }

/* General heading styles */
h1, h2 { font-weight:800; }
h4, h6 { font-weight:600; }
h3, h5 { font-weight:400; }
h1 { font-size:1.8rem;margin:6rem 0 2rem 0; }
h2, h3, h4, h5, h6 { margin:3rem 0 1rem 0; }
h2 { font-size:170%;}
h3 { font-size:160%;}
h4 { font-size:150%;}
h5 { font-size:140%;}
h6 { font-size:130%;}

/* Used on the homepage and category pages */
.intro { background:#eee; }
.intro h1, .intro p { color:#000; }
.intro h1 { font-size:240%;text-align:center; }
.intro p { font-weight:300;margin-bottom:1rem;text-align:center; }
.intro p a { text-decoration:none;font-weight:600;text-decoration:none;border-bottom:1px solid #666; }
.intro p a:hover { border-color:#aaa; }

/* Byline styles */
.byline { font-size:90%; }
article .byline { border-top:1px solid #eee;border-bottom:1px solid #eee;font-size:80%; }
.byline span { display:none; }
.byline a { text-decoration:none; }
article .author { text-align:center; }
.author a, time, .share { font-weight:600; }
.author .pipe { display:none; }
.author svg { height:20px;vertical-align: middle; }
.person { color:#000; }
time { display:block; }

/* About author styles */
.about { display: grid;grid-template-columns: 120px 1fr;grid-template-rows: 2fr;grid-template-areas: "gravatar bio"; }
.about p { margin:0;line-height: 1.5rem; }

/* Main content styles */
p { line-height:2.2rem; }
article ul li, article ol li { line-height:1.7rem;padding:.3rem 0; }
article p, article li { font-family:Georgia,"Times New Roman", Times, serif;font-size:120%; }
article li li { font-size:90%; }
header p { font-size:1.2rem;margin-bottom:2rem;font-style: italic; }
article ul, article ol { margin:1rem 0; }
article ul ul, article ol ol { margin:0; }
article li { padding:.5rem 0; }
img { max-width:100%;width:auto;height:auto; } /* Makes images responsive */
figure, table { margin:2rem 0;padding:0; }
figure { text-align:center; }
figcaption { font-size:90%;padding-top:1rem;color:#555;text-align:center; }

/* Style for list of posts on homepage and category pages */
.newsfeed { padding:0;margin:1rem 0 2rem 0;background:#fff;display: grid;grid-template-columns: 150px
1fr;grid-template-rows: 1fr;grid-template-areas: "thumbnail snippet"; }
article .center { text-align:center; }
.newsfeed h2 { margin:0;line-height: 1.8rem;font-size:120%; }
.newsfeed h2 a { color:#000; }
.newsfeed .excerpt { display:none; }
.newsfeed .byline p { margin:0; }
.thumbnail, .gravatar { margin-right:20px; }
.thumbnail a, .thumbnail a:hover { border:none; }

/* Link style */
article a, section a, footer a { color:#0E52AE;text-decoration:none;border-bottom:1px solid #ccc; }
article p a { font-weight:600; }
article a:hover, section a:hover { border-bottom:1px solid #999; }
article :target:before { content:"";display:block;height:7rem;margin:-7rem 0 0; }
/* External Link Styles */
article a[href *= "https://amzn.to"]:after, article a[href *= "https://www.amazon.com"]:after {
display:inline-block;content: " "
url(<?php bloginfo('template_directory'); ?>/images/amazon.svg);width:1rem;padding-left:.2rem;
}
article a[href *= "#"]:after {
content: " ⇣";color:#71708B;
}

/* Pagination */
.pagination { display:grid;grid-template-columns: 1fr 1fr;padding:1rem 0; }
.newer { grid-column-start:2;grid-column-end:3;grid-row-start:1;text-align:right; }
.older { grid-column-start:1;grid-column-end:2;grid-row-start:1; }

/* Styles for common elements and attributes */
abbr { text-decoration:none; }
blockquote { color:#444;border-left:4px solid #eee;padding-left:30px;margin:0;font-size:90%; }
blockquote p { font-weight:600; }
code { overflow-wrap: break-word; }
.code { line-height:1.5rem;font-size:110%;background:#333;color:#fff;padding:1rem; } /* Wrap a DIV with .code class
around the code element */
cite { font-size:80%;text-align:right;display:block; }

/* You guessed it, styles for the footer */
footer { padding:3rem 0; }
footer ul { margin:3rem 0;list-style:none;padding:0; }
footer li { line-height:2rem; }
footer li:last-child { margin-right:0; }

/* Forms */
input { border:1px solid #ccc;padding:.3rem; }
input[type=text] {font-size:1.2rem;}
input[type=submit],input[type=button] {-webkit-appearance: button;font-size:1.2rem;background:#eee;}
input[type=submit]:hover { cursor: pointer; }
label { display:none; }

/* Desktop */
@media screen and (min-width:40rem) {

/* Top Nav */
nav.top { width:100%;display:grid;grid-template-columns: 1fr 3fr; }
nav.top .logo { grid-column-start:1;grid-column-end:2;grid-row-start:1;white-space: nowrap;text-align:left; }
nav.top .menu, nav.top div .menu {
grid-column-start:2;grid-column-end:4;grid-row-start:1;background:none;display:inline-block;text-align:
right;float:right;}
nav.top ul { padding:1.1rem 0 0 0;text-align:right; }
nav.top li { display:inline;font-weight:300;padding:.5rem 1rem; }
nav.top a:link, nav.top a:visited { padding:0; }

/* Hides mobile nav selector for desktop view */
.show-menu { display: none; }

/* General heading styles */
h1 { font-size:2.8rem;margin:6rem 0 2rem 0;}
h2 { font-size:200%;}
h3 { font-size:190%;}
h4 { font-size:180%;}
h5 { font-size:170%;}
h6 { font-size:160%;}

/* Used on the homepage and category pages */
.intro h1 { font-size:360%;font-weight:700; }
section.category { margin-top:-7rem; }

/* Main content styles */
article p, article ul, article h1, article h2, article h3, article h4, article h5, article h6 { padding:0 70px; }
article p, article li { font-size:130%; }
article ul li, article ol li { line-height:2rem; }
header p { margin-bottom:1rem;font-size:1.4rem; }
article ul { margin:1.5rem 35px 1.5rem 3rem }
article ol { margin:1.5rem 86px 1.5rem 4rem }
article li { padding:1rem 0; }

/* Byline styles */
article .byline { margin:0 70px;font-size:90%; }
.byline p { padding:0;font-size:110%; }
.byline span { padding:0 .8rem;display:inline;color:#ccc; }
time:after { content: ' ';white-space: none; }
article :target:before { content:"";display:block;height:5rem;margin:-5rem 0 0; }
time, .byline tag { display:inline; }
figure { margin:3rem 0; }

/* About author styles */
.about { border-top:1px solid #eee;border-bottom:1px solid #eee;margin:0 70px;padding:1rem 0; }
.about p { margin:0; }
.about p, .about .grid { padding:0; }

/* Style for list of posts on homepage and category pages */
.newsfeed { border:1px solid #eee;padding:1.5rem;margin-bottom:1rem;background:#fff;grid-gap: 20px 20px; }
.newsfeed .excerpt { display:block;font-family:Georgia,"Times New Roman", Times, serif;font-size:110%;margin:.5rem 0 0
0; }
.newsfeed h2 { font-size:140%; }
.thumbnail { margin-right:0; }

/* Styles for common elements and attributes */
figure.reduce img { max-width:540px; }
blockquote { padding:0 66px; }
blockquote p { padding:.5rem 0;margin:2rem 0;font-size:120%;font-weight:700; }
cite { margin-top:-1rem; }

/* You guessed it, styles for the footer */
footer .contain{ text-align: center; }
footer li { display:inline;margin:0 2rem 0 0; }

/* WP Comments */
article .comment p { padding:0; }
}

/* WP Comments */
.comment-body { font-size:.9rem; }
#comment { width:100%;height:5rem; }

/* Makes video embeds responsive if you wrap them in a DIV with the .video-container class */
.video-container { position: relative;padding-bottom: 56.25%;padding-top: 30px; height: 0; overflow: hidden;}
.video-container iframe, .video-container object, .video-container embed { position: absolute;top: 0;left: 0;width:
100%;height: 100%; }

/* Fonts */
body, .byline p, blockquote p { font-display:optional;font-family:-apple-system,BlinkMacSystemFont,"Segoe
UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif; }