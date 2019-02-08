@extends((Auth::user()->type2 == "teacher") ? "layouts.menu-dashboard-teacher" : "layouts.menu-dashboard-default")

@section('content')


<style media="screen">

.h5{margin-top:0;margin-bottom:1.5rem;color:#2e3d49;-webkit-font-smoothing:antialiased;}
@media screen and (min-width:48rem){
.h5{margin-bottom:1.5rem;}
}
.h5{font-size:1rem;line-height:1.75rem;font-weight:600;}
@media screen and (min-width:48rem){
.h5{font-size:1.5rem;line-height:2rem;}
}
.button--primary{display:block;cursor:pointer;-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;text-align:center;white-space:nowrap;text-decoration:none;vertical-align:middle;height:3rem;padding:0 .5rem;text-transform:uppercase;font-weight:600;font-size:1.8125rem;line-height:2.625rem;-webkit-font-smoothing:antialiased;border-radius:.25rem;letter-spacing:.125rem;transition:.3s;}
.button--primary{box-shadow:8px 10px 20px 0 rgba(46,61,73,.15);}
.button--primary:hover{box-shadow:2px 4px 8px 0 rgba(46,61,73,.2);}
.button--primary{width:13.75rem;color:#fff;background-color:#02b3e4;border:.125rem solid transparent;}
.button--primary:focus,.button--primary:hover{outline:0;color:#fff;border-color:transparent;background-color:#029fcb;}
.button--primary.sm{width:17.25rem;}
/*! CSS Used from: Embedded */
*[_ngcontent-c26],[_ngcontent-c26]::after,[_ngcontent-c26]::before{box-sizing:inherit;}
/*! CSS Used from: Embedded */
.mb-0[_ngcontent-c29]{margin-bottom:0!important;}
.green[_ngcontent-c29]{color:#15c26b!important;}
*[_ngcontent-c29],[_ngcontent-c29]::after,[_ngcontent-c29]::before{box-sizing:inherit;}
.card[_ngcontent-c29]{margin-top:0;margin-bottom:1.5rem;text-align:left;position:relative;background:#fff;box-shadow:5px 5px 25px 0 rgba(46,61,73,.2);border-radius:.375rem;transition:.3s;display:flex;flex-direction:column;padding:1.5rem 2.25rem;}
.card[_ngcontent-c29]:hover{box-shadow:2px 4px 8px 0 rgba(46,61,73,.2);}
@media screen and (min-width:48rem){
.card[_ngcontent-c29]{margin-bottom:1.5rem;flex-direction:row;align-items:center;}
}
.card[_ngcontent-c29]:last-child{margin-bottom:1.5rem;}
.item__left[_ngcontent-c29]{flex-shrink:0;width:10rem;}
@media screen and (min-width:62rem){
.item__left[_ngcontent-c29]{width:85rem;}
}
.item__main[_ngcontent-c29]{flex-grow:1;padding:1rem 0;}
@media screen and (min-width:48rem){
.item__main[_ngcontent-c29]{padding:0 2rem;}
.item__right[_ngcontent-c29]{display:flex;flex-direction:column;align-items:center;}
}
.degree-title[_ngcontent-c29]{margin-right:.5em;font-weight:700;font-size:1.5rem;color:#2e3d49;}
.degree-title__is-new[_ngcontent-c29]{display:inline-block;font-weight:700;}
</style>

<!--
<style media="screen">


  /*! CSS Used from: https://egghead.io/webpack/global-styles-245ef06590e9cc433ec1.css ; media=screen */
@media screen{
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
a:active,a:hover{outline-width:0;}
img{border-style:none;}
*,:after,:before{box-sizing:inherit;}
a{color:#4786ff;}
.br3{border-radius:.5rem;}
.br-pill{border-radius:9999px;}
.br--top{border-bottom-right-radius:0;}
.br--top{border-bottom-left-radius:0;}
a,div,h2,h3{box-sizing:border-box;}
.db{display:block;}
.dib{display:inline-block;}
.sans-serif{font-family:-apple-system,BlinkMacSystemFont,avenir next,avenir,helvetica,helvetica neue,ubuntu,roboto,noto,segoe ui,arial,sans-serif;}
.fw4{font-weight:400;}
.fw5{font-weight:500;}
.h-100{height:100%;}
.pointer:hover{cursor:pointer;}
img{max-width:100%;}
.lh-solid{line-height:1;}
.lh-title{line-height:1.25;}
.lh-copy{line-height:1.5;}
.o-70{opacity:.7;}
.o-60{opacity:.6;}
.overflow-hidden{overflow:hidden;}
.relative{position:relative;}
.pb3{padding-bottom:1rem;}
.pt2{padding-top:.5rem;}
.pt4{padding-top:2rem;}
.pv3{padding-top:1rem;padding-bottom:1rem;}
.ph3{padding-left:1rem;padding-right:1rem;}
.ph4{padding-left:2rem;padding-right:2rem;}
.ma0{margin:0;}
.ml2{margin-left:.5rem;}
.mt1{margin-top:.25rem;}
.mt2{margin-top:.5rem;}
.mh1{margin-left:.25rem;margin-right:.25rem;}
.tl{text-align:left;}
.tc{text-align:center;}
.no-underline{text-decoration:none;}
.ttu{text-transform:uppercase;}
.f6{font-size:.875rem;}
.w-100{width:100%;}
.z-1{z-index:1;}
.flex{display:flex;}
.flex-column{flex-direction:column;}
.items-center{align-items:center;}
.self-center{align-self:center;}
.justify-center{justify-content:center;}
.justify-between{justify-content:space-between;}
.flex-grow-1{flex-grow:1;}
.flex-shrink-0{flex-shrink:0;}
.black-90{color:rgba(0,0,0,.9);}
.black-60{color:rgba(0,0,0,.6);}
.black{color:#000;}
.base-secondary{color:#141618;}
.dark-blue{color:#344055;}
.bg-white{background-color:#fff;}
@media screen and (min-width:40em){
.ph3-ns{padding-left:1rem;padding-right:1rem;}
}
@media screen and (min-width:40em) and (max-width:62em){
.w-50-m{width:50%;}
}
@media screen and (min-width:62em){
.w-third-l{width:33.33333%;}
}
::-moz-selection{color:#fff;background:#316aff;}
::selection{color:#fff;background:#316aff;}
.eh-shadow-1{box-shadow:0 5px 30px -15px rgba(0,0,0,.2);}
}
/*! CSS Used from: Embedded */
.css-quva1q{border-radius:5px;}
/*! CSS Used from: Embedded */
.css-imtqqp{height:500px;}
/*! CSS Used from: Embedded */
.css-135bq0n{height:270px;}
/*! CSS Used from: Embedded */
.css-14p7nc1{height:270px;border-radius:10px 10px 0 0;}
@media (min-width:545px){
.css-14p7nc1{height:270px;}
}
/*! CSS Used from: Embedded */
.css-19yvy3u{max-width:262px;padding:0 16px;width:100%;}
@media (min-width:545px){
.css-19yvy3u{max-width:262px;}
}
/*! CSS Used from: Embedded */
.css-128nlh6{font-size:13px;}
/*! CSS Used from: Embedded */
.css-73nay0{height:100px;}
/*! CSS Used from: Embedded */
.css-hxrs45{line-height:1.25;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;font-size:22px;max-height:85px;}
@media (min-width:545px){
.css-hxrs45{font-size:22px;max-height:85px;}
}
/*! CSS Used from: Embedded */
.css-1eu6dtl{padding-bottom:0;border-radius:none;overflow:visible;}
/*! CSS Used from: Embedded */
.css-1i4zz36{width:35px;height:35px;}
/*! CSS Used from: Embedded */
.css-l8qto0{font-size:15px;}
/*! CSS Used from: Embedded */
.css-1qxtz39{font-size:12px;}
/*! CSS Used from: Embedded */
.css-1n42eci{-webkit-flex-basis:4.5em;-ms-flex-preferred-size:4.5em;flex-basis:4.5em;-webkit-flex-direction:row-reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse;}
/*! CSS Used from: Embedded */
.__react_component_tooltip{border-radius:3px;display:inline-block;font-size:13px;left:-999em;opacity:0;padding:8px 21px;position:fixed;pointer-events:none;transition:opacity 0.3s ease-out;top:-999em;visibility:hidden;z-index:999;}
.__react_component_tooltip:before,.__react_component_tooltip:after{content:"";width:0;height:0;position:absolute;}
.__react_component_tooltip.type-dark{color:#fff;background-color:#222;}
.__react_component_tooltip.type-dark.place-top:after{border-top-color:#222;border-top-style:solid;border-top-width:6px;}
.__react_component_tooltip.place-top{margin-top:-10px;}
.__react_component_tooltip.place-top:before{border-left:10px solid transparent;border-right:10px solid transparent;bottom:-8px;left:50%;margin-left:-10px;}
.__react_component_tooltip.place-top:after{border-left:8px solid transparent;border-right:8px solid transparent;bottom:-6px;left:50%;margin-left:-8px;}

</style>
-->


<style media="screen">
  /*! CSS Used from: http://grandetest.com/theme/jobhunt-html/css/bootstrap-grid.css */
a{text-decoration:none;}
*,*::before,*::after{box-sizing:inherit;}
.col-lg-8{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 992px){
.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
}
/*! CSS Used from: http://grandetest.com/theme/jobhunt-html/css/icons.css */
.la{display:inline-block;}
.la{font:normal normal normal 16px/1 LineAwesome;font-size:inherit;text-decoration:inherit;text-rendering:optimizeLegibility;text-transform:none;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;font-smoothing:antialiased;}
.la-map-marker:before{content:"\f27d";}
.la-plus:before{content:"\f2c2";}
/*! CSS Used from: http://grandetest.com/theme/jobhunt-html/css/style.css */
div,span,h3,p,a,img,i{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
a{cursor:pointer;}
*{outline:none!important;}
h3{margin-bottom:20px;font-family:'Quicksand', serif!important;}
h3{font-size:28px;}
p{color:#666666;font-size:16px;margin-bottom:30px;line-height:29px;}
a,a:hover,a:focus{color:inherit;}
a:hover,a:focus{text-decoration:none;outline:none;}
.row.no-gape > div{padding:0;}
i{font-style:italic;}
:-webkit-input-placeholder{opacity:1;}
:-moz-placeholder{opacity:1;}
:-ms-input-placeholder{opacity:1;}
.padding-left{float:left;width:100%;}
.emply-resume-thumb{display:table-cell;vertical-align:top;width:100px;}
.emply-resume-thumb img{float:left;width:100%;-webkit-border-radius:8px;-moz-border-radius:8px;-ms-border-radius:8px;-o-border-radius:8px;border-radius:8px;}
.emply-resume-info{display:table-cell;vertical-align:middle;padding-left:30px;}
.emply-resume-sec{float:left;width:100%;}
.emply-resume-list{float:left;width:100%;display:table;padding:30px 0;border-bottom:1px solid #edeff7;position:relative;padding-left:30px;background-color: #fff;}
.emply-resume-info > h3{float:left;width:100%;font-family:Open Sans;font-size:15px;color:#202020;margin:0;}
.emply-resume-info > span{float:left;width:100%;font-size:13px;color:#202020;margin-top:7px;}
.emply-resume-info > span i{font-style:normal;color:#4D90CC;}
.emply-resume-info > P{float:left;width:100%;margin:0;margin-top:0px;margin-top:0px;font-size:13px;font-family:Open Sans;margin-top:0;line-height:28px;}
.emply-resume-info > P i{float:none;line-height:13px;position:relative;top:2px;margin-right:3px;font-size:17px;color:#999999;}
.emply-resume-list:last-child{margin-bottom:60px;border-bottom-color:#ffffff;}
.shortlists{display:table-cell;vertical-align:middle;}
.shortlists > a{float:left;font-family:Open Sans;font-size:13px;color:#4D90CC;border:2px solid #4D90CC;width:150px;height:40px;padding-left:30px;text-align:left;line-height:35px;padding-right:20px;-webkit-border-radius:21px;-moz-border-radius:21px;-ms-border-radius:21px;-o-border-radius:21px;border-radius:21px;cursor:pointer;margin-right:40px;}
.shortlists > a i{float:right;line-height:33px;font-size:13px;}
.shortlists > a:hover{background:#4D90CC;color:#ffffff;}
*:focus{outline:0;}
.emply-resume-list:hover{border-color:#ffffff;-webkit-box-shadow:0px 0px 30px rgba(0,0,0,0.1);-moz-box-shadow:0px 0px 30px rgba(0,0,0,0.1);-ms-box-shadow:0px 0px 30px rgba(0,0,0,0.1);-o-box-shadow:0px 0px 30px rgba(0,0,0,0.1);box-shadow:0px 0px 30px rgba(0,0,0,0.1);margin-top:0px;position:relative;z-index:12;}
.emply-resume-list,.shortlists > a{-webkit-transition:all 0.4s ease 0s;-moz-transition:all 0.4s ease 0s;-ms-transition:all 0.4s ease 0s;-o-transition:all 0.4s ease 0s;transition:all 0.4s ease 0s;}
/*! CSS Used from: http://grandetest.com/theme/jobhunt-html/css/responsive.css */
@media (max-width:980px){
.column{float:left;width:100%;margin-top:50px;}
.padding-left{padding:0;}
.emply-resume-list{padding-left:0px;}
}
@media (max-width:767px){
.emply-resume-list{width:100%;}
.emply-resume-thumb{display:inherit;float:left;vertical-align:inherit;}
.emply-resume-info{display:inherit;vertical-align:inherit;}
.shortlists{display:inherit;float:left;vertical-align:inherit;padding-left:30px;margin-top:5px;}
.emply-resume-sec{overflow-x:scroll;overflow-y:hidden;}
}
/*! CSS Used from: http://grandetest.com/theme/jobhunt-html/css/bootstrap.css */
*,*::before,*::after{box-sizing:border-box;}
h3{margin-top:0;margin-bottom:0.5rem;}
p{margin-top:0;margin-bottom:1rem;}
img{vertical-align:middle;border-style:none;}
h3{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h3{font-size:1.75rem;}
.col-lg-8{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 992px){
.col-lg-8{-webkit-box-flex:0;-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
}
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
a:not(.btn){text-decoration:underline;}
img{page-break-inside:avoid;}
p,h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
/*! CSS Used fontfaces */
@font-face{font-family:LineAwesome;src:url(http://grandetest.com/theme/jobhunt-html/css/fonts/line-awesome.eot?v=1.1.);src:url(http://grandetest.com/theme/jobhunt-html/css/fonts/line-awesome.eot?v=1.1.#iefix) format("embedded-opentype"),url(http://grandetest.com/theme/jobhunt-html/css/fonts/line-awesome.woff2?v=1.1.) format("woff2"),url(http://grandetest.com/theme/jobhunt-html/css/fonts/line-awesome.woff?v=1.1.) format("woff"),url(http://grandetest.com/theme/jobhunt-html/css/fonts/line-awesome.ttf?v=1.1.) format("truetype"),url(http://grandetest.com/theme/jobhunt-html/css/fonts/line-awesome.svg?v=1.1.#fa) format("svg");font-weight:400;font-style:normal;}
@font-face{font-family:LineAwesome;src:url(http://grandetest.com/theme/jobhunt-html/css/fonts/line-awesome.svg?v=1.1.#fa) format("svg");}
@font-face{font-family:'Quicksand';font-style:normal;font-weight:300;src:local('Quicksand Light'), local('Quicksand-Light'), url(https://fonts.gstatic.com/s/quicksand/v8/6xKodSZaM9iE8KbpRA_pgHYYQML_B48.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Quicksand';font-style:normal;font-weight:300;src:local('Quicksand Light'), local('Quicksand-Light'), url(https://fonts.gstatic.com/s/quicksand/v8/6xKodSZaM9iE8KbpRA_pgHYYQcL_B48.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Quicksand';font-style:normal;font-weight:300;src:local('Quicksand Light'), local('Quicksand-Light'), url(https://fonts.gstatic.com/s/quicksand/v8/6xKodSZaM9iE8KbpRA_pgHYYT8L_.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Quicksand';font-style:normal;font-weight:400;src:local('Quicksand Regular'), local('Quicksand-Regular'), url(https://fonts.gstatic.com/s/quicksand/v8/6xKtdSZaM9iE8KbpRA_hJFQNcOM.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Quicksand';font-style:normal;font-weight:400;src:local('Quicksand Regular'), local('Quicksand-Regular'), url(https://fonts.gstatic.com/s/quicksand/v8/6xKtdSZaM9iE8KbpRA_hJVQNcOM.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Quicksand';font-style:normal;font-weight:400;src:local('Quicksand Regular'), local('Quicksand-Regular'), url(https://fonts.gstatic.com/s/quicksand/v8/6xKtdSZaM9iE8KbpRA_hK1QN.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Quicksand';font-style:normal;font-weight:500;src:local('Quicksand Medium'), local('Quicksand-Medium'), url(https://fonts.gstatic.com/s/quicksand/v8/6xKodSZaM9iE8KbpRA_p2HcYQML_B48.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Quicksand';font-style:normal;font-weight:500;src:local('Quicksand Medium'), local('Quicksand-Medium'), url(https://fonts.gstatic.com/s/quicksand/v8/6xKodSZaM9iE8KbpRA_p2HcYQcL_B48.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Quicksand';font-style:normal;font-weight:500;src:local('Quicksand Medium'), local('Quicksand-Medium'), url(https://fonts.gstatic.com/s/quicksand/v8/6xKodSZaM9iE8KbpRA_p2HcYT8L_.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Quicksand';font-style:normal;font-weight:700;src:local('Quicksand Bold'), local('Quicksand-Bold'), url(https://fonts.gstatic.com/s/quicksand/v8/6xKodSZaM9iE8KbpRA_pkHEYQML_B48.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Quicksand';font-style:normal;font-weight:700;src:local('Quicksand Bold'), local('Quicksand-Bold'), url(https://fonts.gstatic.com/s/quicksand/v8/6xKodSZaM9iE8KbpRA_pkHEYQcL_B48.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Quicksand';font-style:normal;font-weight:700;src:local('Quicksand Bold'), local('Quicksand-Bold'), url(https://fonts.gstatic.com/s/quicksand/v8/6xKodSZaM9iE8KbpRA_pkHEYT8L_.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWyV9hmIqOjjg.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWyV9hvIqOjjg.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWyV9hnIqOjjg.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWyV9hoIqOjjg.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWyV9hkIqOjjg.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWyV9hlIqOjjg.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWyV9hrIqM.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0Udc1UAw.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0ddc1UAw.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0Vdc1UAw.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0adc1UAw.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0Wdc1UAw.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0Xdc1UAw.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0Zdc0.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKXGUdhmIqOjjg.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKXGUdhvIqOjjg.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKXGUdhnIqOjjg.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKXGUdhoIqOjjg.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKXGUdhkIqOjjg.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKXGUdhlIqOjjg.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKXGUdhrIqM.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWiUNhmIqOjjg.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWiUNhvIqOjjg.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWiUNhnIqOjjg.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWiUNhoIqOjjg.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWiUNhkIqOjjg.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWiUNhlIqOjjg.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKWiUNhrIqM.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKW-U9hmIqOjjg.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKW-U9hvIqOjjg.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKW-U9hnIqOjjg.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKW-U9hoIqOjjg.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKW-U9hkIqOjjg.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKW-U9hlIqOjjg.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'), url(https://fonts.gstatic.com/s/opensans/v15/memnYaGs126MiZpBA-UFUKW-U9hrIqM.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFW50bbck.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOX-hpOqc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOVuhpOqc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOXuhpOqc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOUehpOqc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOXehpOqc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOXOhpOqc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOX-hpOqc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOVuhpOqc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOXuhpOqc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOUehpOqc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOXehpOqc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOXOhpOqc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOUuhp.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN8rsOX-hpOqc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN8rsOVuhpOqc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN8rsOXuhpOqc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN8rsOUehpOqc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN8rsOXehpOqc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN8rsOXOhpOqc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN8rsOUuhp.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
</style>





<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row mt">

      <h2 style="text-align: center;">Votre progression</h5><br>

        <h3>Cours recommandé pour valider le parcours</h3>

        <div class="col-lg-8 column">
          <div class="padding-left">
            <div class="emply-resume-sec">
              @foreach(Auth::user()->formations as $formation)
                @if($formation->nom == "Développeur Web Junior")
                  <div class="emply-resume-list">
                    <div class="emply-resume-thumb">
                      <img src="/avatars/courses/{{$formation->image}}" alt="">
                    </div>
                    <div class="emply-resume-info">
                      <h3><a target="_blank" href="https://oschool.ci/course/formation-complete-developpeur-web-2/" title="">{{$formation->nom}}</a></h3>
                      <span><i>{{$formation->projets->count()}}</i> projets</span>
                      @foreach(Auth::user()->formations as $formation)
                        @foreach($formation->projets as $key => $projet)
                          @if (!Auth::user()->worked($projet->id))
                            @if($key == 0)
                        <p><i class="fa fa-laptop"></i>Projet en cours: {{$projet->titre}}</p>
                            @endif
                          @endif
                        @endforeach
                      @endforeach
                    </div>
                    <div class="shortlists">
                      <a target="_blank" href="https://discord.gg/hhbzcHE" title="">Voir le forum <i class="fa fa-info"></i></a>
                    </div>
                  </div><!-- Emply List -->
                @endif
              @endforeach

            </div>
          </div>
        </div>

        <!--
          <div class="
                    pv3 ph3-ns w-third-l w-50-m w-100 dib
                    css-0
                  ">
            <div class="
                    flex flex-grow-1 justify-between flex-column black-90


                  "><a class="
                    no-underline db dark-blue z-1 bg-white eh-shadow-1 css-quva1q"
                    href="https://oschool.ci/course/formation-complete-developpeur-web-2/"
                    target="_blank"
                    aria-label="">
                <div class="
                      flex flex-grow-1 flex-column justify-between pointer relative tc
                      css-imtqqp
                    ">
                  <div class="
                      flex flex-column flex-grow-1 w-100 flex-shrink-0
                      css-135bq0n
                    ">
                    <div class="flex flex-column relative tc pt4">
                      <div class="
                              w-100 flex items-center justify-center overflow-hidden br--top br3
                              css-14p7nc1
                            ">
                        <div class="
                                self-center flex-shrink-0 flex items-center
                                css-19yvy3u
                              "><img src="/avatars/courses/{{$formation->image}}"
                            alt="illustration for GraphQL Data in React with Apollo Client" class="w-100 h-100"></div>
                      </div>
                      <h2 class="
                          f6 base-secondary fw4 o-60 lh-copy sans-serif ma0 ttu flex items-center justify-center flex-shrink-0
                          css-128nlh6
                        ">catégorie<span class="mh1">•</span>{{$formation->categorie->nom}}</h2>
                      <div class="
                          flex flex-shrink-0 items-center w-100 overfow-hidden mt2
                          css-73nay0
                        ">
                        <h3 class="
                          tc sans-serif fw5 black-90 no-underline ma0 overflow-hidden w-100 ph4
                          css-hxrs45
                        ">{{$formation->nom}}</h3>
                      </div>
                    </div>
                  </div>
                  <div class="
                    relative
                    css-1eu6dtl
                  ">
                    <div class="flex items-center ph3 pb3 pt2">
                      <div class="flex-grow-1 flex items-center"><img src="https://oschool.ci/wp-content/uploads/2017/05/medal.png" alt="Nik Graf" title="Nik Graf" class="
                            db br-pill
                            css-1i4zz36
                          ">
                        <div class="ml2">
                          <div class="
                              black o-70 lh-title fw4 tl
                              css-l8qto0
                            ">Oschool</div>
                          <div class="
                                black-60 fw4 lh-solid mt1
                                css-1qxtz39
                              ">
                            <div class="lh-solid flex items-center">{{$formation->projets->count()}}
                              <!-- -- projets<span class="flex items-center">&nbsp;·&nbsp;
                                <!-- --23m--</span></div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </a></div>
          </div>


-->









      <div class="col-sm-12">

        <h3>Ou lisez les contenus ci-dessous en format texte</h3>



        @if(Auth::user()->type2 == "teacher" || Auth::user()->statut == "OK")
        @foreach(Auth::user()->formations as $formation)
          @foreach($formation->progressions->sortBy('id') as $progression)
            @if(count($progression->etatprogressions))
              @foreach($progression->etatprogressions as $etatprogression)
                @if($etatprogression->user_id == Auth::user()->id)
                  @include('includes.etatprogression')
                @endif
              @endforeach
            @endif
          @endforeach
        @endforeach

        @foreach(Auth::user()->formations as $formation)
          @foreach($formation->progressions->sortBy('id') as $progression)
          @if (!Auth::user()->validated($progression->id))
            @include('includes.progression')
          @endif
          @endforeach
        @endforeach
        @endif
      </div>
    </div>
  </section>
  <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->

@endsection
