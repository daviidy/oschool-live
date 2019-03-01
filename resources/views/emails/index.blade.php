@extends('layouts.menu-dashboard-admin')

@section('content')




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

      <h2 style="text-align: center;">Liste des templates emails</h5><br>

      <div class="col-lg-8 column">
        <div class="padding-left">
          <div class="emply-resume-sec">
            @foreach($emails as $email)
            <div class="emply-resume-list">
              <div class="emply-resume-thumb">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOOJvu70l1bbVD3BadsMyxMVUOtAaYp4D6vqZnf1H0cKCCQcdE" alt="">
              </div>
              <div class="emply-resume-info">
                <h3><a href="{{ route('emails.edit', $email) }}" title="">{{$email->titre}}</a></h3>

              </div>
              <div class="shortlists">
                <a href="{{ route('emails.edit', $email) }}" title="">Modifier<i class="fa fa-info"></i></a>
              </div>
            </div><!-- Emply List -->
            @endforeach

          </div>
        </div>
      </div>

    </div>
    </section>
    <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->


@endsection
