@extends( Auth::user()->type2 == "teacher" ? 'layouts.menu-dashboard-teacher' : 'layouts.menu-dashboard-default')

@section('content')

<style media="screen">
  /*! CSS Used from: https://www.udacity.com/styles.cd049525371f607387d9.css */
@media (max-width:767px){
.hidden-sm-down{display:none!important;}
}
@media (min-width:768px){
.hidden-md-up{display:none!important;}
}
@media (max-width:991px){
.hidden-md-down{display:none!important;}
}
.left{margin-left:0!important;}
.right{margin-right:0!important;}
.mb-0{margin-bottom:0!important;}
.mb-1{margin-bottom:.75rem!important;}
@media screen and (min-width:48rem){
.mb-1{margin-bottom:1.5rem!important;}
}
hr{box-sizing:content-box;overflow:visible;border:0;height:0;margin-top:0;margin-bottom:0;max-width:73.75rem;box-sizing:border-box;border-bottom:1px solid rgba(255,255,255,.3);border-top:1px solid rgba(0,0,0,.1);}
.blue{color:#02b3e4!important;}
.text-right{text-align:right!important;}
.uppercase{text-transform:uppercase;}
.capitalize{text-transform:capitalize;}

.button--primary{display:block;cursor:pointer;-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;text-align:center;white-space:nowrap;text-decoration:none;vertical-align:middle;height:3rem;padding:0 .5rem;text-transform:uppercase;font-weight:600;font-size:1.5rem;line-height:2.625rem;-webkit-font-smoothing:antialiased;border-radius:.25rem;letter-spacing:.125rem;transition:.3s;}
.button--primary{box-shadow:8px 10px 20px 0 rgba(46,61,73,.15);}
.button--primary:hover{box-shadow:2px 4px 8px 0 rgba(46,61,73,.2);}
.button--primary{width:13.75rem;color:#fff;background-color:#02b3e4;border:.125rem solid transparent;}
.button--primary:focus,.button--primary:hover{outline:0;color:#fff;border-color:transparent;background-color:#029fcb;}
/*! CSS Used from: Embedded */
*[_ngcontent-c23],[_ngcontent-c23]:after,[_ngcontent-c23]:before{box-sizing:border-box;}
.row[_ngcontent-c23]:after{clear:both;}
.row[_ngcontent-c23]{margin-left:-15px;margin-right:-15px;}
.row[_ngcontent-c23]:after,.row[_ngcontent-c23]:before{content:" ";display:table;}
.row.row-gap-medium[_ngcontent-c23]{margin:15px;}
.course-summary-card[_ngcontent-c23]{transition:opacity .3s ease-in;}

@media (max-width:767px){
.hidden-sm-down[_ngcontent-c27]{display:none!important;}
}
@media (min-width:768px){
.hidden-md-up[_ngcontent-c27]{display:none!important;}
}
@media (max-width:991px){
.hidden-md-down[_ngcontent-c27]{display:none!important;}
}
.card[_ngcontent-c27]{margin-top:0;margin-bottom:1.5rem;text-align:left;position:relative;background:#fff;box-shadow:5px 5px 25px 0 rgba(46,61,73,.2);border-radius:.375rem;transition:.3s;}
*[_ngcontent-c27],[_ngcontent-c27]::after,[_ngcontent-c27]::before{box-sizing:inherit;}
.card__inner--lower[_ngcontent-c27]::after,.card__inner--upper[_ngcontent-c27]::after{clear:both;content:"";display:table;}
.card__inner[_ngcontent-c27]{padding:2rem 2rem 0;}
.card__inner--upper[_ngcontent-c27]{display:flex;align-items:flex-start;padding-bottom:1.5rem;border-bottom:1px solid #dbe2e8;}
@media (max-width:48rem){
.card__inner--upper[_ngcontent-c27]{border:none;}
}
.card__inner--upper[_ngcontent-c27]:hover   a[_ngcontent-c27]{color:#02b3e4;}
.card__inner--lower[_ngcontent-c27]{line-height:2.5rem;}
.card__inner--lower[_ngcontent-c27]::after{clear:both;content:"";display:table;}
.card__inner--lower[_ngcontent-c27]   .expander[_ngcontent-c27]{font-weight:600;font-size:1.5rem;letter-spacing:.1rem;}
.card__inner--lower[_ngcontent-c27]   .expander[_ngcontent-c27]::before{content:'';background:url(https://www.udacity.com/assets/iridium/images/shared/nd-cards/icon-toggle-closed.svg) 50% no-repeat;height:1rem;line-height:1rem;position:relative;top:2px;width:.75rem;margin-right:.75rem;display:inline-block;transition:.5s;}
.card__inner--lower[_ngcontent-c27]   .level[_ngcontent-c27]{font-size:1.5rem;}
.card__inner--lower[_ngcontent-c27]   .left[_ngcontent-c27]{float:left;}
.card__inner--lower[_ngcontent-c27]   .right[_ngcontent-c27]{float:right;}
.card__inner[_ngcontent-c27]   .image_wrapper[_ngcontent-c27]{padding-left:0;padding-right:0rem;float:left;display:block;margin-right:1.69491525%;width:25%;}
.card__inner[_ngcontent-c27]   .image_wrapper[_ngcontent-c27]   .image-container[_ngcontent-c27]{padding-bottom:10.5rem;min-width:6.5rem;background-repeat:no-repeat;background-position:center;background-size:cover;border-radius:6px;box-shadow:1px 1px 7px #bcc9d4;border:0;position:relative;overflow:hidden;float:left;display:block;margin-right:1.69491525%;width:100%;}
.card__inner[_ngcontent-c27]   .image_wrapper[_ngcontent-c27]   .image-container[_ngcontent-c27]:last-child{margin-right:0;}
.card-wrapper[_ngcontent-c27]   .card__expander[_ngcontent-c27]{transition:max-height .5s ease-in-out;background-color:#fff;box-shadow:5px 5px 25px 0 rgba(46,61,73,.2);border-radius:0 0 .375rem .375rem;}
.card-wrapper.is-collapsed[_ngcontent-c27]   .card__expander[_ngcontent-c27]{overflow:hidden;width:100%;max-height:0;}
.card-wrapper[_ngcontent-c27]   hr[_ngcontent-c27]{border-top:1px solid #dbe2e8;margin:1.5rem 4rem;}
.card[_ngcontent-c27]   .category[_ngcontent-c27]{margin-top:0;font-weight:600;font-size:.75rem;line-height:1.5rem;color:#7d97ad;text-transform:none;display:inline-block;}
@media screen and (min-width:48rem){
.card[_ngcontent-c27]{margin-bottom:1.5rem;}
.card[_ngcontent-c27]   .category[_ngcontent-c27]{font-size:1.5rem;line-height:1.5rem;}
}
@media screen and (min-width:48rem) and (min-width:48rem){
.card[_ngcontent-c27]   .category[_ngcontent-c27]{font-size:1.4rem;line-height:1.5rem;}
}
.card-heading[_ngcontent-c27]{margin-top:0;margin-bottom:4.5rem;}
.card-heading[_ngcontent-c27]   a[_ngcontent-c27]{color:#2e3d49;font-weight:600;display:block;overflow:hidden;text-overflow:ellipsis;line-height:3.6rem;max-height: 7.8rem;}
.card-heading[_ngcontent-c27]   a[_ngcontent-c27]:hover{color:#02b3e4;}
.card-content[_ngcontent-c27]{float:left;display:block;margin-right:1.69491525%;width:100%;}
.card-content[_ngcontent-c27]:last-child{margin-right:0;}
@media (max-width:62rem){
.card-content[_ngcontent-c27]{float:left;display:block;margin-right:1.69491525%;width:100%;}
.card-content[_ngcontent-c27]:last-child{margin-right:0;}
}
.card__expander[_ngcontent-c27]{background:linear-gradient(to top left,#f7f7f7,#eafbff);}
.card__expander--summary[_ngcontent-c27]{font-size:1.5rem;padding:1.5rem 4rem 0;}
.card__expander--details[_ngcontent-c27]{float:left;display:block;margin-right:1.69491525%;width:100%;display:flex;justify-content:space-between;padding:0 4rem 1.5rem;}
.card__expander--details[_ngcontent-c27]:last-child{margin-right:0;}
.card__expander--details[_ngcontent-c27]   .btn[_ngcontent-c27]{width:15rem;height:3.5rem;line-height:1.3rem;color:#fff;background-color:#02b3e4;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]{display:flex;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   h4[_ngcontent-c27]{font-size:1.5rem;text-transform:capitalize;margin-top:0;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   div[_ngcontent-c27]{float:left;display:block;margin-right:1.69491525%;width:49.15254237%;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   div[_ngcontent-c27]:last-child{margin-right:0;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   span[_ngcontent-c27]{font-size:1.5rem;color:#2e3d49;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   span.truncate-content[_ngcontent-c27]{max-height:3rem;display:block;overflow-y:hidden;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   .level[_ngcontent-c27]   span[_ngcontent-c27]:after{content:''!important;}
.card[_ngcontent-c27]   .right-sub[_ngcontent-c27]   .skills[_ngcontent-c27] ~ .level[_ngcontent-c27]{margin-top:1.4rem;}
.card[_ngcontent-c27]   h4[_ngcontent-c27]{margin-bottom:0;}
.pointer[_ngcontent-c27]{cursor:pointer;}
.course-level[_ngcontent-c27]{width:.8rem;height:.8rem;background-size:contain;display:inline-block;vertical-align:middle;background-repeat:no-repeat;margin-right:.5rem;}
.course-level-beginner[_ngcontent-c27]{background-image:url(https://www.udacity.com/assets/iridium/images/svgs/beginner.svg);}
.nanodegree-card   [_nghost-c27]   .image-overlay[_ngcontent-c27]{position:absolute;float:left;display:block;margin-right:1.69491525%;width:100%;height:100%;background-image:url(https://www.udacity.com/assets/iridium/images/course-catalog/nanodegree-icon.png);background-repeat:no-repeat;background-position:.5rem .5rem;}
.nanodegree-card   [_nghost-c27]   .image-overlay[_ngcontent-c27]:last-child{margin-right:0;}
@media (max-width:48rem){
.card[_ngcontent-c27]   .mobile-icon[_ngcontent-c27]{display:inline-block;height:.8rem;width:1.5rem;margin-right:.2rem;background-image:url(https://www.udacity.com/assets/iridium/images/course-catalog/course-icon-mobile.svg);background-position:center;background-size:contain;background-repeat:no-repeat;vertical-align:middle;}
.nanodegree-card   [_nghost-c27]   .mobile-icon[_ngcontent-c27]{background-image:url(https://www.udacity.com/assets/iridium/images/course-catalog/nanodegree-icon-mobile.svg);}
}
.nanodegree-card:nth-child(3n+1)   [_nghost-c27]   .image-overlay[_ngcontent-c27]{background-color:rgba(82,92,101,.6);}
.tag[_ngcontent-c27]{float:right;text-align:center;font-size:.8125rem;line-height:1.5rem;padding:.375rem .75rem;letter-spacing:.125rem;border-radius:.25rem;text-transform:uppercase;font-weight:600;}
@media screen and (min-width:48rem){
.tag[_ngcontent-c27]{font-size:1.4rem;line-height:1.5rem;}
}
@media screen and (max-width:20rem){
.tag[_ngcontent-c27]{background:0 0;box-shadow:none;margin:0;}
}
.tag--new[_ngcontent-c27]{color:#6854c5;height: 20px;}





/*pour le cours recommandé*/

/*! CSS Used from: http://localhost:8000/dashboard/lib/bootstrap/css/bootstrap.min.css */

.col-lg-8{position:relative;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:1200px){
.col-lg-8{float:left;}
.col-lg-8{width:66.66666667%;}
}
/*! CSS Used from: http://localhost:8000/dashboard/lib/font-awesome/css/font-awesome.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-info:before{content:"\f129";}
/*! CSS Used from: http://localhost:8000/dashboard/css/style.css */
@media print{
*,:after,:before{background:transparent!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
}
*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
:focus{outline:none;}
*,:after,:before{box-sizing:border-box;}
a,a:hover,a:focus{text-decoration:none;outline:none;}
::selection{background:#4D90CC;color:#fff;}
::-moz-selection{background:#4D90CC;color:#fff;}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
a{text-decoration:none;}
*,*::before,*::after{box-sizing:inherit;}
.col-lg-8{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 992px){
.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
}
div,span,h3,a,img,i{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}

:-webkit-input-placeholder{opacity:1;}
:-moz-placeholder{opacity:1;}
:-ms-input-placeholder{opacity:1;}
.padding-left{float:left;width:100%;}
.emply-resume-thumb{display:table-cell;vertical-align:top;width:100px;}
.emply-resume-thumb img{float:left;width:100%;-webkit-border-radius:8px;-moz-border-radius:8px;-ms-border-radius:8px;-o-border-radius:8px;border-radius:8px;}
.emply-resume-info{display:table-cell;vertical-align:middle;padding-left:30px;}
.emply-resume-sec{float:left;width:100%;}
.emply-resume-list{float:left;width:100%;display:table;padding:30px 0;border-bottom:1px solid #edeff7;position:relative;padding-left:30px;background-color:#fff;}
.emply-resume-info > h3{float:left;width:100%;font-family:Open Sans;font-size:15px;color:#202020;margin:0;}
.emply-resume-info > span{float:left;width:100%;font-size:13px;color:#202020;margin-top:7px;}
.emply-resume-info > span i{font-style:normal;color:#4D90CC;}
.emply-resume-list:last-child{margin-bottom:60px;border-bottom-color:#ffffff;}
.shortlists{display:table-cell;vertical-align:middle;}
.shortlists > a{float:left;font-family:Open Sans;font-size:13px;color:#4D90CC;border:2px solid #4D90CC;width:150px;height:40px;padding-left:30px;text-align:left;line-height:35px;padding-right:20px;-webkit-border-radius:21px;-moz-border-radius:21px;-ms-border-radius:21px;-o-border-radius:21px;border-radius:21px;cursor:pointer;margin-right:40px;}
.shortlists > a i{float:right;line-height:33px;font-size:13px;}
.shortlists > a:hover{background:#4D90CC;color:#ffffff;}
*:focus{outline:0;}
.emply-resume-list:hover{border-color:#ffffff;-webkit-box-shadow:0px 0px 30px rgba(0,0,0,0.1);-moz-box-shadow:0px 0px 30px rgba(0,0,0,0.1);-ms-box-shadow:0px 0px 30px rgba(0,0,0,0.1);-o-box-shadow:0px 0px 30px rgba(0,0,0,0.1);box-shadow:0px 0px 30px rgba(0,0,0,0.1);margin-top:0px;position:relative;z-index:12;}
.emply-resume-list,.shortlists > a{-webkit-transition:all 0.4s ease 0s;-moz-transition:all 0.4s ease 0s;-ms-transition:all 0.4s ease 0s;-o-transition:all 0.4s ease 0s;transition:all 0.4s ease 0s;}
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
*,*::before,*::after{box-sizing:border-box;}
h3{margin-top:0;margin-bottom:0.5rem;}
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
h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
}



</style>

<style media="screen">
/*! CSS Used from: https://www.udemy.com/staticx/udemy/js/webpack/entry-main-legacy.82011fc3041ab7371238.css */
.badge{display:inline-block;min-width:22px;padding:2px 6px;font-size:10px;font-weight:bold;color:#FFF;line-height:1.43;vertical-align:text-top;white-space:nowrap;text-align:center;text-shadow:none;background-clip:padding-box;background-color:#EC5252;border:2px solid #FFF;border-radius:15px;z-index:1;}
.badge:empty{display:none;}
.badge.badge-accented{border-radius:3px;font-size:9px;padding:1px 8px 1px 8px;background:#14171C;border:none;color:#FFF;min-width:inherit;display:inline-block;font-weight:700;line-height:1.5;position:relative;text-align:center;text-transform:uppercase;top:-3px;z-index:2;vertical-align:baseline;}
.badge.badge-accented:after{border-radius:3px;right:-4px;}
.badge.badge-accented:after{background:inherit;content:'';height:11px;position:absolute;top:2px;transform:rotate(45deg);width:11px;z-index:1;display:block;}
.badge.badge-accented.on-course-card{border-bottom-left-radius:0;border-top-left-radius:0;box-shadow:0 0 1px 1px rgba(20,23,28,0.1),0 3px 1px 0 rgba(20,23,28,0.1);pointer-events:none;position:absolute;top:12px;z-index:1;}
.badge.badge-accented.yellow{background:#F4C150;color:#29303B;}
.price-text--base-price__container--35GKL{align-items:center;display:flex;flex-direction:row;flex-wrap:wrap;}
.price-text--base-price__container--35GKL.price-text--reverse--2drJ_{flex-direction:row-reverse;}
.price-text--base-price__container--35GKL .price-text--base-price__discount--1HLbY{margin-right:10px;white-space:nowrap;}
.price-text--base-price__container--35GKL .price-text--base-price__discount--no-margin--3o7do{margin-right:0;}
.price-text--black--W3rKx{color:#29303B;}
.price-text--medium--5MLeb{font-size:18px;}
.price-text--semibold--GtLXu{font-weight:600;}
.tooltip-container{display:inline-block;position:relative;}
.slick-slide{float:left;height:100%;min-height:1px;}
.slick-slide img{display:block;}
.slick-initialized .slick-slide{display:block;}
*{box-sizing:border-box;}
*:before,*:after{box-sizing:border-box;}
a{color:#007791;background-color:transparent;font-weight:normal;text-decoration:none;}
a:hover{cursor:pointer;}
a:hover,a:focus{color:#003845;text-decoration:none;}
a:active,a:hover{outline:0;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{border:0;vertical-align:middle;max-width:100%;height:auto;-ms-interpolation-mode:bicubic;}
*:focus,a:focus{outline:none;}
@media print{
*,*:before,*:after{background:transparent!important;color:#14171C!important;box-shadow:none!important;text-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:' (' attr(href) ')';}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
}
.course-badge--course-badge--1AN7r{display:inline;position:static;}
.star-rating--star-rating--static--3wPvS{position:relative;display:inline-block;white-space:nowrap;}
.star-rating--star-rating--static--3wPvS div{position:relative;display:inline-block;}
.star-rating--star-rating--static--3wPvS div:not(:first-child){margin-left:.3em;}
.star-rating--star-rating--static--3wPvS.star-rating--star-rating--tiny--2kjvX{font-size:13px;}
.star-rating--review-star--Z6Nqj{top:0;left:0;}
.star-rating--review-star--Z6Nqj:before{font-family:'UdemyIcons';display:inline-block;position:relative;line-height:1;}
.star-rating--review-star--unfilled--1aZxo{position:relative;}
.star-rating--review-star--unfilled--1aZxo:before{z-index:0;content:'\F005';color:#DEDFE0;}
.star-rating--review-star--filled--2D0bO{position:absolute;overflow:hidden;}
.star-rating--review-star--filled--2D0bO:before{z-index:1;content:'\F005';color:#F4C150;}
.star-rating--review__numbers-container--2euA-{margin-left:5px;}
.star-rating--reviews__count--1Zo2k{font-size:12px;font-weight:400;color:#686F7A;margin-left:5px;}
.star-rating--reviews__stats--3ANGp{font-weight:600;color:#505763;}
.star-rating--details__rating--36AIt{display:flex;padding-top:2px;margin-top:-2px;background:none;margin-bottom:10px;}
.star-rating--star-container--186zZ{position:relative;top:1px;}
.merchandising-course-card--card--2UfMa{display:inline-block;position:relative;text-align:left;vertical-align:top;width:216px;height:290px;box-shadow:0 0 1px 1px rgba(20,23,28,0.1),0 3px 1px 0 rgba(20,23,28,0.1);}
.merchandising-course-card--card--2UfMa .merchandising-course-card--card__details--4coAj{display:block;padding:15px 10px 0 15px;}
.merchandising-course-card--card--2UfMa .merchandising-course-card--card__details--4coAj .merchandising-course-card--card__instructor-titles--2JzTX{display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;min-height:21px;height:21px;font-size:12px;color:#686F7A;margin-bottom:10px;}
.merchandising-course-card--card--2UfMa .merchandising-course-card--card__details--4coAj .merchandising-course-card--details__name--mG8UB{display:block!important;display:-webkit-box!important;-webkit-line-clamp:2;-moz-line-clamp:2;-ms-line-clamp:2;-o-line-clamp:2;line-clamp:2;-webkit-box-orient:vertical;-moz-box-orient:vertical;-ms-box-orient:vertical;-o-box-orient:vertical;box-orient:vertical;white-space:normal;font-weight:600;height:36px;min-height:42px;font-size:15px;color:#29303B;margin-bottom:10px;}
.merchandising-course-card--card--2UfMa .merchandising-course-card--card__details--4coAj .merchandising-course-card--card__pricing--tRCgo{display:flex;justify-content:flex-end;min-height:36px;}
.merchandising-course-card--card--2UfMa .merchandising-course-card--card__image--upq5w{display:block;height:122px;overflow:hidden;position:relative;box-shadow:0 1px 0 0 rgba(232,233,235,0.5);}
.merchandising-course-card--card--2UfMa .merchandising-course-card--card__options--3h6RM{display:block;position:relative;}
.merchandising-course-card--card--2UfMa .merchandising-course-card--card__options--3h6RM>img{width:100%;opacity:1;-webkit-filter:sepia(.1) grayscale(.1) saturate(.8);filter:sepia(.1) grayscale(.1) saturate(.8);}
.merchandising-course-card--card--2UfMa .merchandising-course-card--mask--2-b-d{background:#FFF;color:#29303B;height:290px;display:block;font-size:small;overflow:hidden;position:relative;}
@media (min-width:768px){
.merchandising-course-card--card--2UfMa{position:relative;border:none;box-shadow:none;}
.merchandising-course-card--card--2UfMa:before,.merchandising-course-card--card--2UfMa:after{content:'';position:absolute;left:0;top:0;width:100%;height:100%;transition:.2s ease;pointer-events:none;}
.merchandising-course-card--card--2UfMa:before{box-shadow:0 0 1px 1px rgba(20,23,28,0.1),0 3px 1px 0 rgba(20,23,28,0.1);opacity:1;}
.merchandising-course-card--card--2UfMa:after{opacity:0;box-shadow:0 2px 8px 2px rgba(20,23,28,0.15);}
.merchandising-course-card--card--2UfMa:hover:before{opacity:0;}
.merchandising-course-card--card--2UfMa:hover:after{opacity:1;}
}
.fx-jsb{display:flex;justify-content:space-between;}
.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;}
/*! CSS Used from: https://www.udemy.com/staticx/udemy/js/webpack/discover.b26bad3b38ef0491b425.css */
.slick-slide{float:left;height:100%;min-height:1px;}
.slick-slide img{display:block;}
.slick-initialized .slick-slide{display:block;}
/*! CSS Used from: https://www.udemy.com/staticx/udemy/js/webpack/logged-out-home-app.c57dbc80b9043d54dd5d.css */
.course-discovery-unit--card-margin--2TVw4{margin-right:15px;margin-bottom:15px;}
/*! CSS Used fontfaces */
@font-face{font-family:'UdemyIcons';src:url(https://www.udemy.com/staticx/udemy/js/webpack/UdemyIcons.8f9a2bd486ec9a6ab4d69115cb2060b3.woff2) format('woff2'),url(https://www.udemy.com/staticx/udemy/js/webpack/UdemyIcons.5888d169f4d1bdad9c13daf16e6438f5.ttf) format('truetype'),url(https://www.udemy.com/staticx/udemy/js/webpack/UdemyIcons.d3fb6e7ed128837c6f221eb8ed4398d2.woff) format('woff'),url(https://www.udemy.com/staticx/udemy/js/webpack/UdemyIcons.668e8b2e37ec8b45fefd5618e6483370.svg#UdemyIcons) format('svg');font-weight:normal;font-style:normal;}
</style>



<style media="screen">
/*! CSS Used from: https://www.udemy.com/staticx/udemy/js/webpack/entry-main-legacy.82011fc3041ab7371238.css */
.btn{display:inline-block;margin-bottom:0;font-weight:600;text-align:center;vertical-align:middle;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;white-space:nowrap;padding:11px 12px;font-size:15px;line-height:1.35135;border-radius:2px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.btn:focus,.btn:active:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:hover,.btn:focus{color:#007791;text-decoration:none;}
.btn:focus{box-shadow:none!important;}
.btn:active{background-image:none;}
.btn:active{outline:0!important;box-shadow:none;}
.btn:disabled{background-color:transparent!important;border-color:#DEDFE0!important;color:#A1A7B3!important;opacity:.65;}
.btn-link{color:#007791;font-weight:normal;border-radius:0;}
.btn-link,.btn-link:active{background-color:transparent;-webkit-box-shadow:none;box-shadow:none;}
.btn-link,.btn-link:hover,.btn-link:focus,.btn-link:active{border-color:transparent;}
.btn-link:hover,.btn-link:focus{color:#003845;text-decoration:none;background-color:transparent;}
.btn-link:disabled{background-color:transparent!important;border-color:transparent!important;color:#A1A7B3!important;opacity:1;}
.btn-block{display:block;width:100%;}
.btn-block+.btn-block{margin-top:5px;}
*{box-sizing:border-box;}
*:before,*:after{box-sizing:border-box;}
button{color:inherit;font:inherit;font-family:inherit;font-size:inherit;line-height:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
*:focus,.btn:focus{outline:none;}
@media print{
*,*:before,*:after{background:transparent!important;color:#14171C!important;box-shadow:none!important;text-shadow:none!important;}
}
/*! CSS Used from: https://www.udemy.com/staticx/udemy/js/webpack/browse-app.b27f0ad4fcbdf33d577b.css */
.skills-hub-unit-desktop--skill-list-container--31VLW{border-bottom:1px solid #DEDFE0;display:flex;margin-bottom:16px;}
.skills-hub-unit-desktop--skill-link--3SpB6{align-content:center;border:none;border-radius:0;border-bottom:6px solid transparent;color:#29303B;display:flex;margin-top:0!important;text-align:left;white-space:normal;width:inherit;}
.skills-hub-unit-desktop--skill-link--3SpB6.skills-hub-unit-desktop--is-active--3ql8W{border-color:#007791;color:#14171C;}
.tabcontent {
  animation: fadeEffect 1s; /* Fading effect takes 1 second */
}
</style>


<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">




    <div class="col-lg-12">

      <div class="skills-hub-unit-desktop--skill-list-container--31VLW">
        <button onclick="openTab(event, 'Projet')" id="defaultOpen" type="button" class="skills-hub-unit-desktop--skill-link--3SpB6 skills-hub-unit-desktop--is-active--3ql8W btn btn-link btn-block">Projets</button>
        <button onclick="openTab(event, 'Cours')" type="button"class="skills-hub-unit-desktop--skill-link--3SpB6 btn btn-link btn-block">Ressources supplémentaires</button>
        <button onclick="openTab(event, 'Astuces')" type="button" class="skills-hub-unit-desktop--skill-link--3SpB6 btn btn-link btn-block">Astuces</button>
      </div>

    </div>



    <div class="col-lg-12 tabcontent" id="Cours">

      <p> <strong>Les supports recommandés et spécifiques à chaque projet se trouvent en général, juste en bas de ce dernier.</strong> </p>
      <img width="300" src="/img/etatprojets/cours.jpg" alt=""> <br><br>
      <p> <strong>Les cours ci-dessus représentent seulement <em>des ressources supplémentaires</em>, qui peuvent vous aider pour réaliser les projets</strong> </p> <br>

      @foreach(Auth::user()->formations as $formation)
        @if($formation->nom == "Développeur Web Junior")

      <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 231px;">
          <div>
              <div data-courseid="874012" data-ps="474" role="presentation" class="course-discovery-unit--card-margin--2TVw4 merchandising-course-card--card--2UfMa">
                  <div data-purpose="quick-view-box-wrapper"><span class="tooltip-container course-badge--course-badge--1AN7r"><span data-purpose="badge" class="on-course-card badge badge-accented yellow"><span class="badge-text">100% Oschool</span></span></span><a
                        href="https://oschool.ci/course/formation-complete-developpeur-web-2/" target="_blank" class="merchandising-course-card--mask--2-b-d"><span class="merchandising-course-card--card__options--3h6RM"><img
                                alt="{{$formation->nom}}" width="240" height="135" src="/avatars/courses/{{$formation->image}}" class="merchandising-course-card--card__image--upq5w" ></span>
                          <div class="merchandising-course-card--card__details--4coAj"><span><span class="merchandising-course-card--details__name--mG8UB" data-purpose="course-card-title">Cours: {{$formation->nom}} </span><!--<span
                                    class="merchandising-course-card--card__instructor-titles--2JzTX" data-purpose="course-card-instructor-titles">Par Oschool</span>--></span><br>
                                    <span style="color: red;">Utilsez le code promo suivant: OSCHOOL2019</span>
                          <!--    <div class="fx-jsb"><span data-purpose="details-rating" class="star-rating--details__rating--36AIt"><span class="star-rating--star-container--186zZ">
                                          <div aria-label="Note&nbsp;: 4,5 sur 5, 61 949&nbsp;avis" data-purpose="star-rating-shell" class="star-rating-shell star-rating--star-rating--static--3wPvS star-rating--star-rating--tiny--2kjvX">
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 50%;"></span></div>
                                          </div>
                                      </span><span class="star-rating--review__numbers-container--2euA-"><span class="star-rating--reviews__stats--3ANGp" data-purpose="course-card-star-rating">4,5</span><span class="star-rating--reviews__count--1Zo2k"
                                            data-purpose="course-card-review-count">(61 949)</span></span></span></div>
                              <div class="merchandising-course-card--card__pricing--tRCgo" data-purpose="course-card-price-wrapper">
                                  <div data-purpose="price-text-container" class="price-text-container price-text--base-price__container--35GKL price-text--reverse--2drJ_">
                                      <div data-purpose="course-price-text" class="course-price-text price-text--base-price__discount--1HLbY price-text--black--W3rKx price-text--medium--5MLeb price-text--semibold--GtLXu price-text--base-price__discount--no-margin--3o7do"><span
                                            class="sr-only">Prix actuel</span><span><span>149,99&nbsp;$US</span></span></div>
                                  </div>
                              </div> -->
                          </div>
                      </a></div>
              </div>
          </div>
      </div>

      <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 231px;">
          <div>
              <div data-courseid="874012" data-ps="474" role="presentation" class="course-discovery-unit--card-margin--2TVw4 merchandising-course-card--card--2UfMa">
                  <div data-purpose="quick-view-box-wrapper"><span class="tooltip-container course-badge--course-badge--1AN7r"><span data-purpose="badge" class="on-course-card badge badge-accented yellow"><span class="badge-text">Outils</span></span></span><a
                        href="https://atom.io/" target="_blank" class="merchandising-course-card--mask--2-b-d"><span class="merchandising-course-card--card__options--3h6RM"><img
                                alt="Editeur de code Atom" width="240" height="135" src="https://cdn-images-1.medium.com/max/1200/1*nPw-4neMmv-hkG2TJQ438w.png" class="merchandising-course-card--card__image--upq5w" ></span>
                          <div class="merchandising-course-card--card__details--4coAj"><span><span class="merchandising-course-card--details__name--mG8UB" data-purpose="course-card-title">Editeur de code: Atom</span></span>
                          <!--    <div class="fx-jsb"><span data-purpose="details-rating" class="star-rating--details__rating--36AIt"><span class="star-rating--star-container--186zZ">
                                          <div aria-label="Note&nbsp;: 4,5 sur 5, 61 949&nbsp;avis" data-purpose="star-rating-shell" class="star-rating-shell star-rating--star-rating--static--3wPvS star-rating--star-rating--tiny--2kjvX">
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 50%;"></span></div>
                                          </div>
                                      </span><span class="star-rating--review__numbers-container--2euA-"><span class="star-rating--reviews__stats--3ANGp" data-purpose="course-card-star-rating">4,5</span><span class="star-rating--reviews__count--1Zo2k"
                                            data-purpose="course-card-review-count">(61 949)</span></span></span></div>
                              <div class="merchandising-course-card--card__pricing--tRCgo" data-purpose="course-card-price-wrapper">
                                  <div data-purpose="price-text-container" class="price-text-container price-text--base-price__container--35GKL price-text--reverse--2drJ_">
                                      <div data-purpose="course-price-text" class="course-price-text price-text--base-price__discount--1HLbY price-text--black--W3rKx price-text--medium--5MLeb price-text--semibold--GtLXu price-text--base-price__discount--no-margin--3o7do"><span
                                            class="sr-only">Prix actuel</span><span><span>149,99&nbsp;$US</span></span></div>
                                  </div>
                              </div> -->
                          </div>
                      </a></div>
              </div>
          </div>
      </div>


      <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 231px;">
          <div>
              <div data-courseid="874012" data-ps="474" role="presentation" class="course-discovery-unit--card-margin--2TVw4 merchandising-course-card--card--2UfMa">
                  <div data-purpose="quick-view-box-wrapper"><span class="tooltip-container course-badge--course-badge--1AN7r"><span data-purpose="badge" class="on-course-card badge badge-accented yellow"><span class="badge-text">Outils</span></span></span><a
                        href="https://www.google.com/chrome/" target="_blank" class="merchandising-course-card--mask--2-b-d"><span class="merchandising-course-card--card__options--3h6RM"><img
                                alt="Google Chrome" width="240" height="135" src="https://cdn.arstechnica.net/wp-content/uploads/2017/02/chrome-logo.png" class="merchandising-course-card--card__image--upq5w" ></span>
                          <div class="merchandising-course-card--card__details--4coAj"><span><span class="merchandising-course-card--details__name--mG8UB" data-purpose="course-card-title">Navigateur web: Google Chrome</span></span>
                          <!--    <div class="fx-jsb"><span data-purpose="details-rating" class="star-rating--details__rating--36AIt"><span class="star-rating--star-container--186zZ">
                                          <div aria-label="Note&nbsp;: 4,5 sur 5, 61 949&nbsp;avis" data-purpose="star-rating-shell" class="star-rating-shell star-rating--star-rating--static--3wPvS star-rating--star-rating--tiny--2kjvX">
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 50%;"></span></div>
                                          </div>
                                      </span><span class="star-rating--review__numbers-container--2euA-"><span class="star-rating--reviews__stats--3ANGp" data-purpose="course-card-star-rating">4,5</span><span class="star-rating--reviews__count--1Zo2k"
                                            data-purpose="course-card-review-count">(61 949)</span></span></span></div>
                              <div class="merchandising-course-card--card__pricing--tRCgo" data-purpose="course-card-price-wrapper">
                                  <div data-purpose="price-text-container" class="price-text-container price-text--base-price__container--35GKL price-text--reverse--2drJ_">
                                      <div data-purpose="course-price-text" class="course-price-text price-text--base-price__discount--1HLbY price-text--black--W3rKx price-text--medium--5MLeb price-text--semibold--GtLXu price-text--base-price__discount--no-margin--3o7do"><span
                                            class="sr-only">Prix actuel</span><span><span>149,99&nbsp;$US</span></span></div>
                                  </div>
                              </div> -->
                          </div>
                      </a></div>
              </div>
          </div>
      </div>


      <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 231px;">
          <div>
              <div data-courseid="874012" data-ps="474" role="presentation" class="course-discovery-unit--card-margin--2TVw4 merchandising-course-card--card--2UfMa">
                  <div data-purpose="quick-view-box-wrapper"><span class="tooltip-container course-badge--course-badge--1AN7r"><span data-purpose="badge" class="on-course-card badge badge-accented yellow"><span class="badge-text">Outils</span></span></span><a
                        href="http://www.wampserver.com/" target="_blank" class="merchandising-course-card--mask--2-b-d"><span class="merchandising-course-card--card__options--3h6RM"><img
                                alt="Wamp Server" width="240" height="135" src="https://upload.wikimedia.org/wikipedia/commons/f/f8/WampServer-logo.png" class="merchandising-course-card--card__image--upq5w" ></span>
                          <div class="merchandising-course-card--card__details--4coAj"><span><span class="merchandising-course-card--details__name--mG8UB" data-purpose="course-card-title">Wamp Server</span></span>
                          <!--    <div class="fx-jsb"><span data-purpose="details-rating" class="star-rating--details__rating--36AIt"><span class="star-rating--star-container--186zZ">
                                          <div aria-label="Note&nbsp;: 4,5 sur 5, 61 949&nbsp;avis" data-purpose="star-rating-shell" class="star-rating-shell star-rating--star-rating--static--3wPvS star-rating--star-rating--tiny--2kjvX">
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 50%;"></span></div>
                                          </div>
                                      </span><span class="star-rating--review__numbers-container--2euA-"><span class="star-rating--reviews__stats--3ANGp" data-purpose="course-card-star-rating">4,5</span><span class="star-rating--reviews__count--1Zo2k"
                                            data-purpose="course-card-review-count">(61 949)</span></span></span></div>
                              <div class="merchandising-course-card--card__pricing--tRCgo" data-purpose="course-card-price-wrapper">
                                  <div data-purpose="price-text-container" class="price-text-container price-text--base-price__container--35GKL price-text--reverse--2drJ_">
                                      <div data-purpose="course-price-text" class="course-price-text price-text--base-price__discount--1HLbY price-text--black--W3rKx price-text--medium--5MLeb price-text--semibold--GtLXu price-text--base-price__discount--no-margin--3o7do"><span
                                            class="sr-only">Prix actuel</span><span><span>149,99&nbsp;$US</span></span></div>
                                  </div>
                              </div> -->
                          </div>
                      </a></div>
              </div>
          </div>
      </div>

      <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 231px;">
          <div>
              <div data-courseid="874012" data-ps="474" role="presentation" class="course-discovery-unit--card-margin--2TVw4 merchandising-course-card--card--2UfMa">
                  <div data-purpose="quick-view-box-wrapper"><span class="tooltip-container course-badge--course-badge--1AN7r"><span data-purpose="badge" class="on-course-card badge badge-accented yellow"><span class="badge-text">Outils</span></span></span><a
                        href="https://cmder.net/" target="_blank" class="merchandising-course-card--mask--2-b-d"><span class="merchandising-course-card--card__options--3h6RM"><img
                                alt="Terminal de commande Cmder" width="240" height="135" src="https://avatars1.githubusercontent.com/u/11646750?s=400&v=4" class="merchandising-course-card--card__image--upq5w" ></span>
                          <div class="merchandising-course-card--card__details--4coAj"><span><span class="merchandising-course-card--details__name--mG8UB" data-purpose="course-card-title">Terminal de commande Cmder</span></span>
                          <!--    <div class="fx-jsb"><span data-purpose="details-rating" class="star-rating--details__rating--36AIt"><span class="star-rating--star-container--186zZ">
                                          <div aria-label="Note&nbsp;: 4,5 sur 5, 61 949&nbsp;avis" data-purpose="star-rating-shell" class="star-rating-shell star-rating--star-rating--static--3wPvS star-rating--star-rating--tiny--2kjvX">
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 50%;"></span></div>
                                          </div>
                                      </span><span class="star-rating--review__numbers-container--2euA-"><span class="star-rating--reviews__stats--3ANGp" data-purpose="course-card-star-rating">4,5</span><span class="star-rating--reviews__count--1Zo2k"
                                            data-purpose="course-card-review-count">(61 949)</span></span></span></div>
                              <div class="merchandising-course-card--card__pricing--tRCgo" data-purpose="course-card-price-wrapper">
                                  <div data-purpose="price-text-container" class="price-text-container price-text--base-price__container--35GKL price-text--reverse--2drJ_">
                                      <div data-purpose="course-price-text" class="course-price-text price-text--base-price__discount--1HLbY price-text--black--W3rKx price-text--medium--5MLeb price-text--semibold--GtLXu price-text--base-price__discount--no-margin--3o7do"><span
                                            class="sr-only">Prix actuel</span><span><span>149,99&nbsp;$US</span></span></div>
                                  </div>
                              </div> -->
                          </div>
                      </a></div>
              </div>
          </div>
      </div>


      <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 231px;">
          <div>
              <div data-courseid="874012" data-ps="474" role="presentation" class="course-discovery-unit--card-margin--2TVw4 merchandising-course-card--card--2UfMa">
                  <div data-purpose="quick-view-box-wrapper"><span class="tooltip-container course-badge--course-badge--1AN7r"><span data-purpose="badge" class="on-course-card badge badge-accented yellow"><span class="badge-text">Outils</span></span></span><a
                        href="https://nodejs.org" target="_blank" class="merchandising-course-card--mask--2-b-d"><span class="merchandising-course-card--card__options--3h6RM"><img
                                alt="Node JS" width="240" height="135" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Node.js_logo.svg/1200px-Node.js_logo.svg.png" class="merchandising-course-card--card__image--upq5w" ></span>
                          <div class="merchandising-course-card--card__details--4coAj"><span><span class="merchandising-course-card--details__name--mG8UB" data-purpose="course-card-title">Node JS</span></span>
                          <!--    <div class="fx-jsb"><span data-purpose="details-rating" class="star-rating--details__rating--36AIt"><span class="star-rating--star-container--186zZ">
                                          <div aria-label="Note&nbsp;: 4,5 sur 5, 61 949&nbsp;avis" data-purpose="star-rating-shell" class="star-rating-shell star-rating--star-rating--static--3wPvS star-rating--star-rating--tiny--2kjvX">
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 100%;"></span></div>
                                              <div><span class="star-rating--review-star--Z6Nqj star-rating--review-star--unfilled--1aZxo"></span><span class="star-rating--review-star--Z6Nqj star-rating--review-star--filled--2D0bO" style="width: 50%;"></span></div>
                                          </div>
                                      </span><span class="star-rating--review__numbers-container--2euA-"><span class="star-rating--reviews__stats--3ANGp" data-purpose="course-card-star-rating">4,5</span><span class="star-rating--reviews__count--1Zo2k"
                                            data-purpose="course-card-review-count">(61 949)</span></span></span></div>
                              <div class="merchandising-course-card--card__pricing--tRCgo" data-purpose="course-card-price-wrapper">
                                  <div data-purpose="price-text-container" class="price-text-container price-text--base-price__container--35GKL price-text--reverse--2drJ_">
                                      <div data-purpose="course-price-text" class="course-price-text price-text--base-price__discount--1HLbY price-text--black--W3rKx price-text--medium--5MLeb price-text--semibold--GtLXu price-text--base-price__discount--no-margin--3o7do"><span
                                            class="sr-only">Prix actuel</span><span><span>149,99&nbsp;$US</span></span></div>
                                  </div>
                              </div> -->
                          </div>
                      </a></div>
              </div>
          </div>
      </div>
      @endif
      @endforeach








    </div><!--fin tab ressources-->







    <div class="row mt tabcontent" id="Projet">
      @foreach(Auth::user()->formations as $formation)
        @if($formation->nom == "Développeur Web Junior")

      <h2 style="margin: 2rem;"><i class="fa fa-angle-right"></i> Liste des {{$formation->projets->count()}} projets de la formation {{$formation->nom}}</h2>
      @endif
      @endforeach
      <div class="col-lg-8">

                @foreach(Auth::user()->formations as $formation)
                  @foreach($formation->projets as $projet) 
                    @if(count($projet->etatprojets))
                      @foreach($projet->etatprojets as $etatprojet)
                        @if($etatprojet->user_id == Auth::user()->id)
                          @include('includes.etatprojet')
                        @endif
                      @endforeach
                    @endif
                  @endforeach
                @endforeach

                @foreach(Auth::user()->formations as $formation)
                  @foreach($formation->projets as $projet)
                  @if (!Auth::user()->worked($projet->id))
                    @include('includes.projet')
                  @endif
                  @endforeach
                @endforeach
      </div>
      <!-- /col-lg-4 -->
    </div>
    <!-- /row -->


    <div id="Astuces" style="margin-top: 1rem;" class="tabcontent col-lg-12 col-xs-12">
        <iframe width="100%" height="390" src="https://player.vimeo.com/video/320619458" frameborder="0" allowFullScreen mozallowfullscreen webkitAllowFullScreen></iframe>
    </div>



<!--

    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> Historique</h4>
          <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>Titre du projet</th>
                  <th>Livrables</th>
                </tr>
              </thead>
              <tbody>
                @foreach(Auth::user()->formations as $formation)
                  @foreach($formation->projets as $projet)
                <tr>
                  <td><a target="_blank" href="{{$projet->enonce}}">{{$projet->titre}}</a></td>
                  <td><a href="{{url('projets', $projet)}}">Envoyez vos livrables</a></td>
                </tr>
                @endforeach
                @endforeach
              </tbody>
            </table>
          </section>
        </div>
        <!-- /content-panel
      </div>
      <!-- /col-lg-4
    </div>
    <!-- /row -->


<!--

    @if (!Auth::user()->isTeacher() && !Auth::user()->isAdmin())
    <!-- LISTE DES ETUDIANTS
    <div id="projets">
       <div class="container">
          <h2>Etats de mes projets </h2>
          <table class="table">
            <thead>
              <tr>
                <th>Nom du projet</th>
                <th>Livrables</th>
                <th>Commentaires</th>
                <th>Statut</th>
              </tr>
            </thead>
            <tbody>
              @foreach(Auth::user()->etatprojets as $etatprojet)
              <tr>
                <td>{{$etatprojet->projet}}</td>
                <td> <a target="_blank" href="{{$etatprojet->livrables}}"> Voir vos livrables</a> </td>
                <td> <a data-toggle="modal" data-target="#myModal{{$etatprojet->id}}" href="#">Voir les commentaires</a></td>
                <td>{{$etatprojet->statut}}</td>
                <!-- The Modal
                <div class="modal fade" id="myModal{{$etatprojet->id}}">
                <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header
                <div class="modal-header">
                <h4 style="font-size: 24px;" class="modal-title">Commentaire sur le projet</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body
                <div class="modal-body">
                  <div class="container">
                      {!! $etatprojet->commentaire !!}
                  </div>
                </div>

                <!-- Modal footer
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>

                </div>
                </div>
                </div>

                <!--end modal
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
                     <!-- LISTE DES ETUDIANTS FIN
    @endif

  -->



  </section>
  <!-- /wrapper -->
</section>


@endsection
