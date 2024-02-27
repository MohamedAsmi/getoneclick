@extends('user.main')
@section('content')
<link rel="stylesheet" href="{{asset('assets/dashbord/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashbord/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashbord/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashbord/vendor/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashbord/vendor/owlcarousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashbord/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/dashbord/css/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashbord/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashbord/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashbord/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashbord/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashbord/css/pannellum.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashbord/vendor/noUiSlider/nouislider.min.css')}}">
    <link rel="stylesheet" href="style.css">
<style>



p {
  margin: 0 0 20px 0;
  font-weight: 400;
  font-size: 16px;
  color: #70778a;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 400;
  font-family: var(--font-family-heading);
  margin: 0 0 25px 0;
  color: #212121;
}
h1,
h2 {
  line-height: 40px;
}
h3,
h4,
h5,
h6 {
  line-height: 30px;
}
h1 {
  font-size: 47px;
  line-height: 50px;
}
@media only screen and (max-width: 1199px) {
  h1 {
    font-size: 32px;
    line-height: 42px;
  }
}
h2 {
  font-size: 39px;
  line-height: 44px;
}
h3 {
  font-size: 33px;
  line-height: 36px;
}
h4 {
  font-size: 27px;
  line-height: 32px;
}
h5 {
  font-size: 23px;
  line-height: 28px;
}
h6 {
  font-size: 19px;
  line-height: 24px;
}
/*=======================================================================
2. Variables 
========================================================================*/
:root {
  --font-family-body: "Roboto", sans-serif;
  --font-family-heading: "Ubuntu", sans-serif;
  --rt-primary-color: #00c194;
  --rt-primary-dark: #00a376;
  --rt-primary-light: #50ffe4;
  --rt-secondary-color: #07c196;
  --rt-primary-rgb: 0, 193, 148;
  --rt-secondary-rgb: 7, 193, 150;
  --transition: 0.3s ease-in-out;
}
/*=======================================================================
3. Bootstrap Overwrite
=========================================================================*/
/*------------------- 3.1 Form -------------------*/
.form-group {
  position: relative;
  margin-bottom: 10px;
}
.form-group .form-control {
  color: #111111;
  background-color: #ffffff;
  border-radius: 4px;
}
.form-group .form-control:focus {
  outline: none;
  box-shadow: none;
}
.form-control:focus {
  outline: none;
  box-shadow: none;
}
.form-group input {
  height: 50px;
}
.form-group:last-child {
  margin-bottom: 0;
}
.form-group .submit-btn {
  border: none;
  border-radius: 4px;
  font-weight: 500;
  color: #ffffff;
  padding: 0 30px;
  background-color: var(--rt-primary-color);
  transition: all 0.3s ease-in-out;
  height: 50px;
  line-height: 50px;
  box-shadow: 4px 4px 24px 3px #e9ebee;
}
.form-group .submit-btn:hover {
  background-color: var(--rt-primary-dark);
  color: #ffffff;
}
.form-group input.form-control::-webkit-input-placeholder,
.form-group textarea.form-control::-webkit-input-placeholder {
  color: #646464;
}
.input-group {
  border-radius: 3px;
  background-color: #ffffff;
  border: 1px solid #e1e5ee;
  transition: 0.4s;
}
.input-group.active,
.input-group:hover {
  border-color: var(--rt-primary-dark);
}
.input-group .form-control {
  height: 50px;
  color: #111111;
}
.input-group .input-group-append {
  margin-right: 5px;
}
.input-group .input-group-append .item-btn {
  border: none;
  background-color: transparent;
  color: var(--rt-primary-color);
  padding: 5px 10px;
  transition: all 0.3s ease-in-out;
}
.input-group .input-group-append .item-btn:focus {
  outline: none;
}
.input-group .input-group-append .item-btn:hover {
  color: var(--rt-primary-color);
}
.input-group input.form-control::-webkit-input-placeholder,
.input-group textarea.form-control::-webkit-input-placeholder {
  color: #878c9f;
  font-size: 14px;
}
/*------------------- 3.2 Grid -------------------*/
@media only screen and (min-width: 1270px) {
  .container {
    max-width: 1240px;
  }
}
.container-fluid {
  width: 100%;
  padding-right: 30px;
  padding-left: 30px;
  margin-right: auto;
  margin-left: auto;
}
.row.gutters-1 {
  padding-left: 14.5px;
  padding-right: 14.5px;
}
.row.gutters-1 > [class^="col-"] {
  padding-left: 0.5px;
  padding-right: 0.5px;
}
.row.gutters-2 {
  padding-left: 14px;
  padding-right: 14px;
}
.row.gutters-2 > [class^="col-"] {
  padding-left: 1px;
  padding-right: 1px;
}
.row.gutters-3 {
  padding-left: 13.5px;
  padding-right: 13.5px;
}
.row.gutters-3 > [class^="col-"] {
  padding-left: 1.5px;
  padding-right: 1.5px;
}
.row.gutters-4 {
  padding-left: 13px;
  padding-right: 13px;
}
.row.gutters-4 > [class^="col-"] {
  padding-left: 2px;
  padding-right: 2px;
}
.row.gutters-5 {
  padding-left: 12.5px;
  padding-right: 12.5px;
}
.row.gutters-5 > [class^="col-"] {
  padding-left: 2.5px;
  padding-right: 2.5px;
}
.row.gutters-6 {
  padding-left: 12px;
  padding-right: 12px;
}
.row.gutters-6 > [class^="col-"] {
  padding-left: 3px;
  padding-right: 3px;
}
.row.gutters-7 {
  padding-left: 11.5px;
  padding-right: 11.5px;
}
.row.gutters-7 > [class^="col-"] {
  padding-left: 3.5px;
  padding-right: 3.5px;
}
.row.gutters-8 {
  padding-left: 11px;
  padding-right: 11px;
}
.row.gutters-8 > [class^="col-"] {
  padding-left: 4px;
  padding-right: 4px;
}
.row.gutters-9 {
  padding-left: 10.5px;
  padding-right: 10.5px;
}
.row.gutters-9 > [class^="col-"] {
  padding-left: 4.5px;
  padding-right: 4.5px;
}
.row.gutters-10 {
  padding-left: 10px;
  padding-right: 10px;
}
.row.gutters-10 > [class^="col-"] {
  padding-left: 5px;
  padding-right: 5px;
}
.row.gutters-11 {
  padding-left: 9.5px;
  padding-right: 9.5px;
}
.row.gutters-11 > [class^="col-"] {
  padding-left: 5.5px;
  padding-right: 5.5px;
}
.row.gutters-12 {
  padding-left: 9px;
  padding-right: 9px;
}
.row.gutters-12 > [class^="col-"] {
  padding-left: 6px;
  padding-right: 6px;
}
.row.gutters-13 {
  padding-left: 8.5px;
  padding-right: 8.5px;
}
.row.gutters-13 > [class^="col-"] {
  padding-left: 6.5px;
  padding-right: 6.5px;
}
.row.gutters-14 {
  padding-left: 8px;
  padding-right: 8px;
}
.row.gutters-14 > [class^="col-"] {
  padding-left: 7px;
  padding-right: 7px;
}
.row.gutters-15 {
  padding-left: 7.5px;
  padding-right: 7.5px;
}
.row.gutters-15 > [class^="col-"] {
  padding-left: 7.5px;
  padding-right: 7.5px;
}
.row.gutters-20 {
  padding-left: 5px;
  padding-right: 5px;
}
.row.gutters-20 > [class^="col-"] {
  padding-left: 10px;
  padding-right: 10px;
}
@media (min-width: 1199px) {
  .row.gutters-40 {
    margin-left: -20px;
    margin-right: -20px;
  }
  .row.gutters-40 > [class^="col-"] {
    padding-left: 20px;
    padding-right: 20px;
  }
}
@media (min-width: 1199px) {
  .row.gutters-50 {
    margin-left: -25px;
    margin-right: -25px;
  }
  .row.gutters-50 > [class^="col-"] {
    padding-left: 25px;
    padding-right: 25px;
  }
}
/*=======================================================================
4. Vendor Custom Style 
=========================================================================*/
/*------------------- 4.1 Owl Carousel Nav -------------------*/
.nav-control-layout1 .owl-nav button {
  display: none;
}
.product-slider-style-4 .owl-dots {
  text-align: center;
  margin-top: 35px;
}
.product-slider-style-4 .owl-dots .owl-dot:focus {
  outline: none;
}
.product-slider-style-4 .owl-dots .owl-dot span {
  display: inline-block;
  height: 20px;
  width: 20px;
  background-color: #ffffff;
  border-radius: 50%;
  margin-right: 5px;
  transition: all 0.3s ease-in-out;
  position: relative;
}
.product-slider-style-4 .owl-dots .owl-dot span:after {
  content: "";
  height: 11px;
  width: 11px;
  background-color: #abd7cd;
  border-radius: 50%;
  z-index: 5;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateY(-50%) translateX(-50%);
  transition: all 0.3s ease-in-out;
}
.product-slider-style-4 .owl-dots .owl-dot span:hover:after {
  background: var(--rt-primary-color);
}
.product-slider-style-4 .owl-dots .owl-dot.active span::after {
  background: var(--rt-primary-color);
}
.owl-carousel .owl-item img {
  display: inline-block;
  width: 100%;
}
.product-slider-style-4.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
  background-color: #fff;
}
/*=======================================================================
5.Template Layout Style
=========================================================================*/
/*------------------- 5.1 Back-to-top -------------------*/
#back-to-top {
  font-size: 20px;
  color: #fff;
  background: var(--rt-primary-color);
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  border-radius: 50%;
  position: fixed;
  right: 30px;
  bottom: 30px;
  z-index: 99;
  display: none;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}
#back-to-top:hover {
  background: var(--rt-primary-dark);
}
/*------------------- 5.2 Custom-Checkbox -------------------*/
.text-dark {
  color: #000000;
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 0;
}
.no-ul-list.third-row {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}
.no-ul-list.third-row li {
  max-width: 33.33%;
  float: left;
  margin-bottom: 7px;
  flex: 0 0 33.33%;
}
@media only screen and (max-width: 479px) {
  .no-ul-list.third-row li {
    max-width: 50%;
    flex: 0 0 50%;
  }
}
@media only screen and (max-width: 320px) {
  .no-ul-list.third-row li {
    max-width: 100%;
    flex: 0 0 100%;
  }
}
.no-ul-list.third-row li {
  width: 33.33%;
  float: left;
  margin-bottom: 7px;
}
@media only screen and (max-width: 479px) {
  .no-ul-list.third-row li {
    width: 50%;
  }
}
@media only screen and (max-width: 320px) {
  .no-ul-list.third-row li {
    width: 100%;
  }
}
.checkbox-custom,
.checkbox-custom-label,
.radio-custom,
.radio-custom-label {
  display: flex;
  align-items: center;
  margin: 5px;
  cursor: pointer;
}
.checkbox-custom,
.radio-custom {
  opacity: 0;
  position: absolute;
}
.checkbox-custom-label,
.radio-custom-label {
  position: relative;
}
.checkbox-custom,
.checkbox-custom-label,
.radio-custom,
.radio-custom-label {
  display: flex;
  align-items: center;
  margin: 5px;
  cursor: pointer;
}
.hero-search-content.side-form label,
label {
  font-size: 15px;
  font-weight: 600;
  color: #646464;
  font-family: "Roboto", sans-serif;
}
.checkbox-custom + .checkbox-custom-label:before {
  content: "";
  background: #fff;
  border: 2px solid #dae3ec;
  display: inline-block;
  vertical-align: middle;
  width: 20px;
  height: 20px;
  border-radius: 2px;
  padding: 2px;
  margin-right: 10px;
  text-align: center;
}
.checkbox-custom:checked + .checkbox-custom-label:before {
  content: "\f00c";
  font-weight: 600;
  font-family: "Font Awesome 5 Free";
  border-radius: 2px;
  box-shadow: none;
  color: var(--rt-primary-color);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
}
.filter-button {
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 479px) {
  .filter-button {
    display: block;
    text-align: center;
  }
}
.filter-button .filter-btn1 {
  display: inline-block;
  font-size: 12px;
  font-weight: 700;
  text-transform: uppercase;
  color: #a0a0a0;
  background-color: #ffffff;
  padding: 12px 80px;
  border: 1px solid #e8e8e8;
  border-radius: 4px;
  margin-right: 5px;
  position: relative;
  transition: all 0.4s ease;
  z-index: 1;
}
@media only screen and (max-width: 767px) {
  .filter-button .filter-btn1 {
    padding: 10px 60px;
  }
}
@media only screen and (max-width: 575px) {
  .filter-button .filter-btn1 {
    padding: 10px 40px;
  }
}
@media only screen and (max-width: 479px) {
  .filter-button .filter-btn1 {
    margin-bottom: 10px;
    margin-right: 0;
  }
}
.filter-button .filter-btn1:after {
  content: "";
  height: 100%;
  width: 0;
  background-color: var(--rt-primary-color);
  position: absolute;
  bottom: 0;
  left: 0;
  border: none;
  border-radius: 4px;
  visibility: hidden;
  opacity: 0;
  transition: all 0.4s ease;
  z-index: -1;
}
.filter-button .filter-btn1:hover {
  color: #ffffff;
}
.filter-button .filter-btn1:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
  transition: all 0.4s ease;
  border-color: var(--rt-primary-color);
}
.filter-button .search-btn {
  color: #ffffff;
  border: none;
  margin-right: 0;
  background-color: var(--rt-primary-color);
}
.filter-button .search-btn:hover {
  background-color: var(--rt-primary-dark);
}
.filter-button .search-btn:after {
  display: none;
}
.filter-button .search-btn i {
  margin-left: 5px;
}
.filter-button .reset-btn {
  margin-right: 0;
}
.filter-button .reset-btn:hover i {
  color: #ffffff;
}
.filter-button .reset-btn i {
  margin-left: 5px;
  transition: all 0.4s ease;
}
.explore__form-checkbox-list.full-filter.filter-block {
  margin-top: 20px;
}
.explore__form-checkbox-list2.full-filter.filter-block {
  background-color: #eaf7f4;
}
.half-map-wrap1 {
  padding: 30px 0px 0px 0px;
  overflow: hidden;
}
.half-map-wrap1 .map-form {
  margin-bottom: 20px;
}
@media only screen and (max-width: 767px) {
  .half-map-wrap1 .map-form {
    margin-bottom: 0;
  }
}
.half-map-wrap1 .map-form .form-control {
  height: 60px;
  width: 100%;
  border: 1px solid #e8e8e8;
  color: var(--rt-primary-color);
}
@media only screen and (max-width: 767px) {
  .half-map-wrap1 .map-form .form-control {
    margin-bottom: 10px !important;
  }
}
.half-map-wrap1 .map-form .form-control:focus {
  outline: 0;
  box-shadow: none;
}
.half-map-wrap1 .map-form ::placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.half-map-wrap1 .map-form .rld-single-select {
  margin-top: 20px;
  margin-bottom: 40px;
}
@media only screen and (max-width: 767px) {
  .half-map-wrap1 .map-form .rld-single-select {
    margin-bottom: 0 !important;
    margin-top: 0;
    overflow: visible;
  }
}
.half-map-wrap1 .map-form .rld-single-select .single-select {
  border: 1px solid #e8e8e8;
}
.half-map-wrap1 .map-form .rld-single-select .single-select .current {
  font-size: 15px;
  font-weight: 400;
}
.map-form-style-2 .form-control {
  height: 60px;
  width: 100%;
  border: 1px solid #e8e8e8;
  color: var(--rt-primary-color);
}
.map-form-style-2 .form-control:focus {
  outline: 0;
  box-shadow: none;
}
.map-form-style-2 ::placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.map-form-style-2 .rld-single-select {
  margin-top: 10px;
  margin-bottom: 0px;
}
@media only screen and (max-width: 767px) {
  .map-form-style-2 .rld-single-select {
    overflow: visible;
  }
}
.map-form-style-2 .rld-single-select .single-select {
  border: 1px solid #e8e8e8;
}
.map-form-style-2 .rld-single-select .single-select .current {
  font-size: 15px;
  font-weight: 400;
}
.location-img {
  height: 100vh;
}
@media only screen and (max-width: 1199px) {
  .location-img {
    display: none;
  }
}
.checkbox-button {
  cursor: pointer;
  margin-bottom: 0;
  margin-right: 10px;
}
.checkbox-button:last-child {
  margin-right: 0;
}
.checkbox-button-2 {
  margin-right: 20px;
}
@media only screen and (max-width: 1199px) {
  .checkbox-button-2 {
    margin-right: 4px;
  }
}
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}
input {
  font-size: 1rem;
  line-height: 1.5;
  padding: 11px 23px;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0;
  outline: 0;
  background-color: transparent;
}
.checkbox-button__input {
  opacity: 0;
  position: absolute;
}
.checkbox-button__control {
  position: relative;
  display: inline-block;
  width: 18px;
  height: 18px;
  margin-right: 0px;
  vertical-align: middle;
  background-color: #f3f4f4;
  color: #316ffb;
  border: 1px solid #ddd;
  border-radius: 50%;
}
.checkbox-button__control-2 {
  color: #316ffb;
  border: 1px solid #ccd5e0;
  border-radius: 0;
  margin-right: 2px;
  width: 22px;
  height: 22px;
  color: #eaf7f4;
}
.checkbox-button__input:checked + .checkbox-button__control:after {
  content: "";
  display: block;
  position: absolute;
  top: 3px;
  left: 3px;
  width: 10px;
  height: 10px;
  border: none;
  border-radius: 50%;
  background-color: var(--rt-primary-color);
}
.checkbox-button__input:checked + .checkbox-button__control-2:after {
  border: none;
  border-radius: 3px;
  height: 14px;
  width: 14px;
  background-color: var(--rt-primary-color);
}
.checkbox-button__input:checked + .checkbox-button__control {
  border-color: #ddd;
}
.checkbox-button__input:checked + .checkbox-button__label {
  color: #212121;
}
.checkbox-button__control {
  transform: scale(0.75);
}
/*------------------- 5.3 Footer -------------------*/
.footer-top {
  padding: 100px 0px;
}
@media only screen and (max-width: 991px) {
  .footer-top {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .footer-top {
    padding: 50px 0px;
  }
}
.footer-top-style {
  background-image: url("{{asset('assets/dashbord/img/blog/footer-bg1.jpg')}}");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  position: relative;
  z-index: 1;
  padding: 82px 0px 65px;
}
.footer-top-style:after {
  position: absolute;
  content: "";
  height: 100%;
  width: 100%;
  background-color: rgba(14, 46, 80, 0.92);
  bottom: 0;
  left: 0;
  z-index: -1;
}
@media only screen and (max-width: 991px) {
  .footer-top-style {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .footer-top-style {
    padding: 50px 0px;
  }
}
@media only screen and (max-width: 767px) {
  .footer-logo-area {
    margin-bottom: 24px;
  }
}
.footer-logo-area .item-logo {
  margin-bottom: 22px;
}
.footer-logo-area p {
  font-size: 15px;
  margin-bottom: 25px;
  line-height: 27px;
}
@media only screen and (max-width: 1199px) {
  .footer-logo-area p {
    margin-bottom: 20px;
    padding-right: 0px;
  }
}
.footer-logo-area .item-social ul li {
  display: inline-block;
}
.footer-logo-area .item-social ul li a {
  display: flex;
  color: #ffffff;
  align-items: center;
  justify-content: center;
  background-color: var(--rt-primary-color);
  font-size: 16px;
  border: none;
  border-radius: 4px;
  width: 41px;
  height: 39px;
  margin: 0 auto;
  transition: all 0.3s ease-in-out;
  overflow: hidden;
}
.footer-logo-area .item-social ul li a i {
  transition: all 0.3s ease-in-out;
}
.footer-logo-area .item-social ul li a:hover {
  background-color: var(--rt-primary-dark);
}
.footer-logo-area .item-social ul li a:hover i {
  -webkit-animation: toBottomFromTop 0.5s forwards;
  animation: toBottomFromTop 0.5s forwards;
}
.footer-logo-area-2 p {
  color: #c8d3de;
}
.footer-logo-area-2 .item-social ul li a {
  background-color: rgba(149, 165, 183, 0.15);
}
.footer-title {
  position: relative;
}
.footer-title:after {
  content: "";
  height: 4px;
  width: 31px;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 10px;
  position: absolute;
  bottom: -25px;
  left: 0;
}
.footer-title h3 {
  font-size: 22px;
  font-weight: 500;
  line-height: 30px;
  margin-bottom: 50px;
}
.footer-title-style2 h3 {
  color: #ffffff;
}
@media only screen and (max-width: 991px) {
  .footer-link {
    margin-bottom: 20px;
  }
}
.footer-link .item-link ul li {
  transition: all 0.3s ease-in-out;
  display: block;
  margin-bottom: 5px;
}
.footer-link .item-link ul li:last-child {
  margin-bottom: 0;
}
.footer-link .item-link ul li a {
  display: inline-block;
  color: #788593;
  font-size: 15px;
  padding-left: 15px;
  position: relative;
  transition: all 0.3s ease-in-out;
}
.footer-link .item-link ul li a:hover {
  color: var(--rt-primary-color);
  margin-left: 5px;
}
.footer-link .item-link ul li a:hover:before {
  background-color: var(--rt-primary-dark);
}
.footer-link .item-link ul li a:before {
  content: "";
  height: 5px;
  width: 5px;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 50%;
  position: absolute;
  bottom: 13px;
  left: 0;
  transition: all 0.3s ease-in-out;
}
.footer-link-style-2 .item-link ul li:hover a:before {
  background-color: var(--rt-primary-color);
}
.footer-link-style-2 .item-link ul li a {
  color: #c8d3de;
}
.footer-link-style-2 .item-link ul li a:before {
  background-color: #8898a9;
}
@media only screen and (max-width: 767px) {
  .footer-insta {
    margin-bottom: 24px;
  }
}
.footer-insta .insta-link ul {
  display: flex;
  flex-wrap: wrap;
  margin: -5px -5px;
}
.footer-insta .insta-link ul li {
  position: relative;
  width: 100%;
  padding: 5px 5px;
  flex: 0 0 33.33%;
  max-width: 33.33%;
}
.footer-insta .insta-link ul li .item-img {
  overflow: hidden;
  position: relative;
}
.footer-insta .insta-link ul li .item-img img {
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transition: all 1.5s ease-out;
  transition: all 1.5s ease-out;
}
@media only screen and (max-width: 991px) {
  .footer-insta .insta-link ul li .item-img img {
    width: 100%;
  }
}
.footer-insta .insta-link ul li .item-img:hover img {
  -webkit-transform: scale(1.3);
  transform: scale(1.3);
}
.footer-insta .insta-link ul li .item-img:hover .insta-pic:before {
  visibility: visible;
  opacity: 0.6;
  -webkit-transform: scale(1);
  transform: scale(1);
}
.footer-insta .insta-link ul li .item-img:hover .item-overlay a {
  visibility: visible;
  opacity: 1;
}
.footer-insta .insta-link ul li .item-img .insta-pic {
  position: relative;
  display: block;
}
.footer-insta .insta-link ul li .item-img .insta-pic:before {
  content: "";
  height: 100%;
  width: 100%;
  position: absolute;
  left: 0;
  bottom: 0;
  background-color: var(--rt-primary-dark);
  opacity: 0.06;
  -webkit-transition: all ease 0.8s;
  transition: all ease 0.8s;
  visibility: hidden;
  opacity: 0;
  -webkit-transform: scale(0);
  transform: scale(0);
  border-radius: 4px;
  z-index: 1;
}
.footer-insta .insta-link ul li .item-img .item-overlay {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -webkit-transition: all ease 0.5s;
  transition: all ease 0.5s;
}
.footer-insta .insta-link ul li .item-img .item-overlay a {
  color: #fff;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  z-index: 1;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: all ease 0.3s;
  transition: all ease 0.3s;
}
.footer-insta .insta-link ul li .item-img .item-overlay a i {
  z-index: 2;
}
.footer-contact .footer-location ul li {
  font-size: 15px;
  display: block;
  line-height: 24px;
  margin-bottom: 20px;
  position: relative;
  padding-left: 30px;
}
.footer-contact .footer-location ul li:last-child {
  margin-bottom: 0;
}
.footer-contact .footer-location ul li a {
  color: #788593;
  transition: all 0.3s ease-in-out;
}
.footer-contact .footer-location ul li a:hover {
  color: var(--rt-primary-color);
}
.footer-contact .footer-location ul li a:hover i {
  color: #788593;
}
.footer-contact .footer-location ul li a i {
  color: var(--rt-primary-color);
  font-size: 16px;
  position: absolute;
  top: 5px;
  left: 0;
  transition: all 0.3s ease-in-out;
}
.footer-contact .footer-location ul .item-map {
  color: #788593;
  font-size: 15px;
  display: block;
  margin-bottom: 20px;
  position: relative;
  padding-left: 30px;
}
.footer-contact .footer-location ul .item-map i {
  color: var(--rt-primary-color);
  font-size: 16px;
  position: absolute;
  top: 5px;
  left: 0;
}
.footer-contact-style-2 .footer-location ul li a {
  color: #c8d3de;
}
.footer-contact-style-2 .footer-location ul li a i {
  color: #c8d3de;
}
.footer-contact-style-2 .footer-location ul .item-map {
  color: #c8d3de;
}
.footer-contact-style-2 .footer-location ul .item-map i {
  color: #c8d3de;
}
.footer-bottom {
  background-color: #f2f4f7;
  padding: 28px 0;
}
@media only screen and (max-width: 767px) {
  .footer-bottom .copyright-area1 {
    text-align: center;
    margin-bottom: 10px;
  }
}
.footer-bottom .copyright-area1 ul li {
  font-size: 14px;
  display: inline-block;
  margin-right: 20px;
}
.footer-bottom .copyright-area1 ul li a {
  color: #727272;
  font-size: 14px;
  white-space: nowrap;
  display: block;
  position: relative;
}
.footer-bottom .copyright-area1 ul li a:after {
  content: "";
  height: 2px;
  width: 2px;
  background-color: #727272;
  border: none;
  border-radius: 50%;
  position: absolute;
  bottom: 13px;
  right: -12px;
  transition: all 0.3s ease-in-out;
}
.footer-bottom .copyright-area1 ul li a:hover {
  color: var(--rt-primary-color);
}
.footer-bottom .copyright-area1 ul li:last-child a:after {
  display: none;
}
.footer-bottom .copyright-area2 p {
  color: #51667c;
  font-weight: 300;
  margin-bottom: 0;
  text-align: right;
  font-size: 14px;
}
@media only screen and (max-width: 767px) {
  .footer-bottom .copyright-area2 p {
    text-align: center;
  }
}
.bg-white {
  background-color: #fff;
}
.footer-bottom-style-2 {
  background-color: #000;
}
.footer-bottom-style-2 .copyright-area1 ul li a {
  color: #758597;
}
.footer-bottom-style-2 .copyright-area2 p {
  color: #758597;
}
/*------------------- 5.4 Global -------------------*/
a {
  text-decoration: none;
  cursor: pointer;
}
a:active,
a:hover,
a:focus {
  text-decoration: none;
}
a:active,
a:hover,
a:focus {
  outline: 0 none;
}
img {
  max-width: 100%;
  height: auto;
}
ul {
  list-style: outside none none;
  margin: 0;
  padding: 0;
}
.form-response .alert-danger,
.form-response .alert.alert-info,
.form-response .alert.alert-success {
  margin-top: 10px;
  margin-bottom: 0;
}
.form-response .alert-danger p,
.form-response .alert.alert-info p,
.form-response .alert.alert-success p {
  margin-bottom: 0;
}
/*------------------- 5.5 Header Menu -------------------*/
header.header {
  position: fixed;
  z-index: 15;
  top: 0;
  left: 0;
  right: 0;
  z-index: 999;
  background-color: transparent;
}
@media only screen and (max-width: 991px) {
  header.rt-header {
    display: none;
  }
}
@media only screen and (max-width: 991px) {
  header.header {
    display: none;
  }
}
.logo-area a {
  display: block;
}
.header-menu {
  position: relative;
  top: 0;
  left: 0;
  right: 0;
  margin: auto;
  z-index: 100;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
.header-menu:after {
  clear: both;
  content: "";
  display: block;
}
.header-menu nav.template-main-menu > ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}
.header-menu nav.template-main-menu > ul > li > a {
  transition: all 0.3s ease-out;
}
.header-menu nav.template-main-menu > ul > li > a:hover {
  color: #50ffe4;
}
nav.template-main-menu > ul > li {
  position: relative;
}
nav.template-main-menu > ul > li > a {
  font-size: 18px;
  font-weight: 500;
  line-height: 16px;
  display: block;
  color: #000;
  text-transform: capitalize;
  font-family: "Ubuntu", sans-serif;
  position: relative;
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 1199px) {
  nav.template-main-menu > ul > li > a {
    font-size: 14px;
  }
}
nav.template-main-menu > ul > li > a:after {
  content: "";
  width: 7px;
  height: 7px;
  border: 1px solid #fff;
  display: inline-block;
  transform: rotate(45deg) translate(1px, -4px);
  border-left: none;
  border-top: none;
  margin-left: 8px;
}
@media only screen and (max-width: 1366px) {
  nav.template-main-menu > ul > li > a:after {
    right: 0px;
    margin-left: 7px;
  }
}
nav.template-main-menu > ul > li > a.active {
  color: #50ffe4;
}
nav.template-main-menu > ul > li > a.active:after {
  border: 1px solid #50ffe4;
  transform: rotate(45deg) translate(1px, -4px);
  border-left: none;
  border-top: none;
}
nav.template-main-menu > ul > li > a:before {
  content: "";
  width: 100%;
  height: 2px;
  background-color: #50ffe4;
  position: absolute;
  left: 0;
  bottom: -2px;
  visibility: hidden;
  opacity: 0;
}
nav.template-main-menu > ul > li > a.active:before {
  visibility: visible;
  opacity: 1;
}
nav.template-main-menu > ul > li > a:last-child:after {
  display: none;
}
.header-menu nav.template-main-menu > ul > li > a:hover {
  color: var(--rt-primary-color);
}
nav.template-main-menu-2 > ul > li > a {
  font-size: 16px;
  font-weight: 500;
  line-height: 16px;
  display: block;
  color: #212121;
  text-transform: capitalize;
  font-family: "Ubuntu", sans-serif;
  position: relative;
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 1199px) {
  nav.template-main-menu-2 > ul > li > a {
    font-size: 14px;
  }
}
nav.template-main-menu-2 > ul > li > a:after {
  border: 1px solid #212121;
  border-left: none;
  border-top: none;
}
nav.template-main-menu-2 > ul > li > a:before {
  background-color: var(--rt-primary-color);
}
nav.template-main-menu-2 > ul > li > a.active {
  color: var(--rt-primary-color);
}
nav.template-main-menu-2 > ul > li > a.active:after {
  border: 1px solid var(--rt-primary-color);
  border-left: none;
  border-top: none;
}
nav.template-main-menu-2 > ul > li > a:hover:after {
  color: var(--rt-primary-color);
}
nav.template-main-menu-3 > ul > li > a {
  font-size: 16px;
  font-weight: 500;
  line-height: 16px;
  display: block;
  color: #212121;
  text-transform: capitalize;
  font-family: "Ubuntu", sans-serif;
  position: relative;
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 1199px) {
  nav.template-main-menu-3 > ul > li > a {
    font-size: 14px;
  }
}
nav.template-main-menu-3 > ul > li > a:after {
  border: 1px solid #212121;
  border-left: none;
  border-top: none;
}
nav.template-main-menu-3 > ul > li > a:before {
  background-color: var(--rt-primary-color);
  bottom: 1px;
}
nav.template-main-menu-3 > ul > li > a.active {
  color: var(--rt-primary-color);
}
nav.template-main-menu-3 > ul > li > a.active:after {
  border: 1px solid var(--rt-primary-color);
  border-left: none;
  border-top: none;
}
nav.template-main-menu-3 > ul > li > a:hover:after {
  color: var(--rt-primary-color);
}
nav.template-main-menu > ul > li ul.dropdown-menu-col-1 {
  border-top: 1px solid var(--rt-primary-color);
  background-color: #ffffff;
  width: 250px;
  visibility: hidden;
  opacity: 0;
  position: absolute;
  top: 100%;
  left: 0;
  border-radius: 0 0 4px 4px;
  -webkit-transform: translateY(15px);
  -moz-transform: translateY(15px);
  -ms-transform: translateY(15px);
  -o-transform: translateY(15px);
  transform: translateY(15px);
  -webkit-box-shadow: 0px 3px 20px 0px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0px 3px 20px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 0 3px 20px rgba(0, 0, 0, 0.05);
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
nav.template-main-menu > ul > li ul.dropdown-menu-col-1 li {
  position: relative;
}
nav.template-main-menu > ul > li ul.dropdown-menu-col-1 li a {
  position: relative;
  font-size: 15px;
  font-weight: 400;
  text-transform: capitalize;
  color: #212121;
  padding: 12px 20px;
  display: block;
  -webkit-transition: all 0.5s ease 0s;
  -moz-transition: all 0.5s ease 0s;
  -ms-transition: all 0.5s ease 0s;
  -o-transition: all 0.5s ease 0s;
  transition: all 0.5s ease 0s;
}
@media only screen and (max-width: 1199px) {
  nav.template-main-menu > ul > li ul.dropdown-menu-col-1 li a {
    font-size: 13px;
  }
}
nav.template-main-menu > ul > li ul.dropdown-menu-col-1 li a:before {
  content: "\f111";
  font-family: "Font Awesome 5 Free";
  font-weight: 600;
  font-size: 6px;
  color: var(--rt-primary-color);
  position: absolute;
  top: 12px;
  left: 20px;
  transform: scale(0);
  -webkit-transition: all 0.5s ease 0s;
  -moz-transition: all 0.5s ease 0s;
  -ms-transition: all 0.5s ease 0s;
  -o-transition: all 0.5s ease 0s;
  transition: all 0.5s ease 0s;
}
nav.template-main-menu > ul > li ul.dropdown-menu-col-1 li a:hover {
  color: var(--rt-primary-color);
  padding-left: 40px;
}
nav.template-main-menu > ul > li ul.dropdown-menu-col-1 li a:hover:before {
  transform: scale(1);
}
nav.template-main-menu > ul > li ul.dropdown-menu-col-1 li:after {
  content: "";
  position: absolute;
  top: 0;
  left: 20px;
  right: 20px;
  height: 100%;
  border-bottom: 1px solid #e9e9e9;
  z-index: -1;
}
nav.template-main-menu > ul > li ul.dropdown-menu-col-1 li:last-child:after {
  border-bottom: none;
}
nav.template-main-menu > ul > li .template-mega-menu {
  background-color: #ffffff;
  border-top: 1px solid var(--rt-primary-color);
  position: absolute;
  width: 100%;
  left: 0;
  right: 0;
  z-index: 10;
  opacity: 0;
  visibility: hidden;
  top: 100%;
  padding: 20px 0 0;
  transform: translateY(15px);
  -webkit-box-shadow: 0px 3px 20px 0px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0px 3px 20px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 0 3px 20px rgba(0, 0, 0, 0.05);
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
nav.template-main-menu > ul > li .template-mega-menu .menu-ctg-title {
  font-size: 16px;
  font-weight: 500;
  color: #212121;
  margin-bottom: 15px;
}
nav.template-main-menu > ul > li .template-mega-menu ul.sub-menu {
  margin-bottom: 20px;
}
nav.template-main-menu > ul > li .template-mega-menu ul.sub-menu li {
  margin-bottom: 5px;
  padding-bottom: 7px;
  border-bottom: 1px solid #ebebeb;
}
nav.template-main-menu > ul > li .template-mega-menu ul.sub-menu li:last-child {
  border-bottom: 0;
  margin-bottom: 0;
  padding-bottom: 0;
}
nav.template-main-menu > ul > li .template-mega-menu ul.sub-menu li a {
  font-size: 15px;
  text-transform: capitalize;
  color: #212121;
  padding: 5px 15px 5px 30px;
  display: block;
  -webkit-transition: all 0.5s cubic-bezier(0, 0, 0.15, 1.88);
  -moz-transition: all 0.5s cubic-bezier(0, 0, 0.15, 1.88);
  -ms-transition: all 0.5s cubic-bezier(0, 0, 0.15, 1.88);
  -o-transition: all 0.5s cubic-bezier(0, 0, 0.15, 1.88);
  transition: all 0.5s cubic-bezier(0, 0, 0.15, 1.88);
  position: relative;
}
nav.template-main-menu > ul > li .template-mega-menu ul.sub-menu li a i {
  color: #000000;
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
nav.template-main-menu > ul > li .template-mega-menu ul.sub-menu li a:hover {
  color: var(--rt-primary-color);
  padding: 5px 15px 5px 35px;
}
nav.template-main-menu > ul > li .template-mega-menu ul.sub-menu li a:hover i {
  color: var(--rt-primary-color);
  animation: toRightFromLeft10 0.5s;
}
nav.template-main-menu > ul > li:hover ul.dropdown-menu-col-1 {
  opacity: 1;
  visibility: visible;
  transform: translatey(0);
}
nav.template-main-menu > ul > li:hover ul.dropdown-menu-col-2 {
  opacity: 1;
  visibility: visible;
  transform: translatey(0);
}
nav.template-main-menu > ul > li:hover .template-mega-menu {
  opacity: 1;
  visibility: visible;
  transform: translatey(0);
}
.header-menu.menu-layout1 {
  background-color: #ffffff40;
  padding: 4px 0px 0px 0px;
}
@media only screen and (max-width: 1199px) {
  .header-menu.menu-layout1 {
    padding: 10px 10px;
  }
}
.header-menu.menu-layout1 nav.template-main-menu > ul > li > a {
  padding: 31px 15px;
}
.header-menu.menu-layout1 nav.template-main-menu > ul > li .no-padding {
  padding-left: 3px;
}
@media only screen and (max-width: 1199px) {
  .header-menu.menu-layout1 nav.template-main-menu > ul > li > a {
    padding: 20px 10px;
  }
}
.rt-sticky {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 100;
  left: 0;
  right: 0;
  background-color: #ffffff;
}
.rt-sticky nav.template-main-menu > ul > li > a {
  padding: 30px 15px;
}
.sticky-on.sticky #navbar-wrap {
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  margin: 0 auto;
  width: 100%;
  z-index: 999;
  background-color: #fff;
  box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.1);
}
.header-menu.menu-layout1.rt-sticky {
  -webkit-box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.1);
  z-index: 150;
  background-color: #fff;
  border-bottom: 2px solid rgba(255, 255, 255, 0.1);
  padding-top: 0px;
  padding-bottom: 0;
}
.header-menu.menu-layout1.rt-sticky nav.template-main-menu > ul > li > a {
  padding: 35px 18px;
}
@media only screen and (max-width: 1199px) {
  .header-menu.menu-layout1.rt-sticky nav.template-main-menu > ul > li > a {
    padding: 20px 10px;
  }
}
.header-action-layout1 .action-list {
  display: flex;
  align-items: center;
}
.header-action-layout1 .action-item {
  color: #212121;
  margin-right: 20px;
  cursor: pointer;
  position: relative;
}
@media only screen and (max-width: 1199px) {
  .header-action-layout1 .action-item {
    margin-right: 20px;
  }
}
.header-action-layout1 .action-item:last-child {
  margin-right: 0;
}
.header-action-layout1 .action-item-style {
  color: #212121;
  margin-right: 20px;
  cursor: pointer;
  position: relative;
  display: flex;
}
.header-action-layout1 .action-item-style:last-child {
  margin-right: 0;
}
.header-action-layout1 .left-right-btn {
  position: relative;
}
.header-action-layout1 .left-right-btn a:hover .item-count {
  color: var(--rt-primary-color);
  background-color: #fff;
}
.header-action-layout1 .left-right-btn a i {
  font-size: 16px;
  border: 1px solid #d1e5e0;
  border-radius: 50%;
  height: 40px;
  width: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease-in-out;
  overflow: hidden;
}
.header-action-layout1 .left-right-btn a i:before {
  transition: all 0.3s ease-in-out;
  color: #fff;
}
.header-action-layout1 .left-right-btn a i:hover {
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
}
.header-action-layout1 .left-right-btn a i:hover:before {
  -webkit-animation: toBottomFromTop 0.5s forwards;
  animation: toBottomFromTop 0.5s forwards;
  color: #ffffff;
}
.header-action-layout1 .left-right-btn a .icon-round:before {
  color: var(--rt-primary-color);
}
.header-action-layout1 .left-right-btn a .item-count {
  color: #ffffff;
  font-size: 12px;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 50%;
  height: 22px;
  width: 22px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease-in-out;
  position: absolute;
  top: -10px;
  right: -3px;
}
.header-action-layout1 .wish-btn {
  position: relative;
}
.header-action-layout1 .wish-btn a:hover .item-count {
  color: var(--rt-primary-color);
  background-color: #fff;
}
.header-action-layout1 .wish-btn a i {
  color: var(--rt-primary-color);
  font-size: 16px;
  border: 1px solid #d1e5e0;
  border-radius: 50%;
  height: 40px;
  width: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease-in-out;
  overflow: hidden;
}
.header-action-layout1 .wish-btn a i:before {
  transition: all 0.3s ease-in-out;
  color: #fff;
}
.header-action-layout1 .wish-btn a i:hover {
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
}
.header-action-layout1 .wish-btn a i:hover:before {
  -webkit-animation: toBottomFromTop 0.5s forwards;
  animation: toBottomFromTop 0.5s forwards;
  color: #ffffff;
}
.header-action-layout1 .wish-btn a .icon-round:before {
  color: var(--rt-primary-color);
}
.header-action-layout1 .wish-btn a .item-count {
  color: #ffffff;
  font-size: 12px;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 50%;
  height: 22px;
  width: 22px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease-in-out;
  position: absolute;
  top: -10px;
  right: -3px;
}
.header-action-layout1 .my-account i {
  color: var(--rt-primary-color);
  font-size: 20px;
  border: 1px solid #090909;
  border-radius: 50%;
  height: 50px;
  width: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease-in-out;
  overflow: hidden;
}
.header-action-layout1 .my-account i:before {
  transition: all 0.3s ease-in-out;
  color: #000;
}
.header-action-layout1 .my-account i:hover {
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
}
.header-action-layout1 .my-account i:hover:before {
  -webkit-animation: toBottomFromTop 0.5s forwards;
  animation: toBottomFromTop 0.5s forwards;
  color: #ffffff;
}
.header-action-layout1 .my-account .icon-round:before {
  color: var(--rt-primary-color);
}
@media only screen and (max-width: 1199px) {
  .header-action-layout1 .my-account {
    margin-right: 0;
  }
}
.header-action-layout1 .my-account2 {
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 1199px) {
  .header-action-layout1 .my-account2:before {
    display: none;
  }
}
.header-action-layout1 .my-account2 i {
  color: var(--rt-primary-color);
  font-size: 16px;
  border: 1px solid #d1e5e0;
  border-radius: 50%;
  height: 40px;
  width: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease-in-out;
}
.header-action-layout1 .my-account2 i:before {
  transition: all 0.3s ease-in-out;
  color: var(--rt-primary-color);
}
.header-action-layout1 .my-account2 i:hover {
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
}
.header-action-layout1 .my-account2 i:hover:before {
  -webkit-animation: toBottomFromTop 0.5s forwards;
  animation: toBottomFromTop 0.5s forwards;
  color: #ffffff;
}
.header-action-layout1 .listing-button {
  position: relative;
}
.header-action-layout1 .listing-button:hover .listing-btn span {
  background-color: var(--rt-primary-color);
}
.header-action-layout1 .listing-button:hover .listing-btn span i {
  transform: rotate(180deg);
}
.header-action-layout1 .listing-button:hover .listing-btn .item-text::after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
}
.header-action-layout1 .listing-button .listing-btn {
  display: flex;
  align-items: center;
  background-color: var(--rt-primary-color);
  justify-content: center;
  font-size: 15px;
  font-weight: 500;
  color: #ffffff;
  border: none;
  border-radius: 30px;
  overflow: hidden;
}
.header-action-layout1 .listing-button .listing-btn span {
  color: #ffffff;
  background-color: rgba(0, 0, 0, 0.15);
  padding: 7px 15px;
  border-radius: 30px 0px 0px 30px;
}
@media only screen and (max-width: 1199px) {
  .header-action-layout1 .listing-button .listing-btn span {
    display: none;
  }
}
.header-action-layout1 .listing-button .listing-btn span i {
  transition: all 0.3s ease-in-out;
  color: #fff;
}
.header-action-layout1 .listing-button .listing-btn .item-text {
  color: #ffffff;
  background-color: var(--rt-primary-color);
  padding: 7px 20px;
  transition: all 0.3s ease-in-out;
  font-weight: 500;
  position: relative;
  z-index: 1;
  font-family: "Ubuntu", sans-serif;
  padding-right: 23px;
}
.header-action-layout1 .listing-button .listing-btn .item-text::after {
  content: "";
  width: 0;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.15);
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
  transition: all 0.4s;
  border-radius: 0px 30px 30px 0px;
  z-index: -1;
}
.header-action-layout1 .listing-button2:after {
  left: 208px;
  bottom: -22px;
}
@media only screen and (max-width: 1199px) {
  .header-action-layout1 .listing-button2:after {
    display: none;
  }
}
.header-action-layout4 {
  justify-content: flex-end;
}
.header-menu.menu-layout3 {
  position: relative;
  z-index: 99;
  padding: 0;
}
.header-menu.menu-layout3:after {
  content: "";
  height: 1px;
  width: 100%;
  background-color: #e3e6e6;
  position: absolute;
  bottom: 0px;
  left: 0;
  right: 0;
}
.header-menu.menu-layout2 {
  background-color: #ffffff;
  position: relative;
  z-index: 1000;
  padding: 0;
}
.header-menu.menu-layout2:after {
  content: "";
  height: 1px;
  width: 100%;
  background-color: #ffffff;
  opacity: 0.2;
  position: absolute;
  bottom: 86px;
  left: 0;
  z-index: -1;
}
.header-menu.menu-layout2.rt-sticky {
  position: fixed;
  background-color: #fff;
  z-index: 100;
  left: 0;
  right: 0;
}
.header-menu.menu-layout2 nav.template-main-menu > ul > li > a {
  padding: 35px 18px;
}
@media only screen and (max-width: 1199px) {
  .header-menu.menu-layout2 nav.template-main-menu > ul > li > a {
    padding: 30px 10px;
  }
}
.header-menu.menu-layout2.rt-sticky nav.template-main-menu > ul > li > a {
  padding: 31px 15px;
}
@media only screen and (max-width: 1199px) {
  .header-menu.menu-layout2.rt-sticky nav.template-main-menu > ul > li > a {
    padding: 30px 10px;
  }
}
.header-menu.menu-layout2 nav.template-main-menu > ul > li .no-padding {
  padding-left: 3px;
}
.header-bottombar-area {
  padding: 15px 0px 20px;
}
.header-bottombar-area .rent-form .form-check-box {
  display: flex;
  align-items: center;
}
.header-bottombar-area .rent-form .form-check-box .checkbox-button .checkbox-button__label {
  font-size: 14px;
  font-weight: 400;
  font-family: "Jost", sans-serif;
  color: #878c9f;
}
.header-bottombar-area .map-form {
  margin-bottom: 0;
}
.header-bottombar-area .map-form .control-style .form-control {
  height: 46px;
  border: 1px solid #e3e6e6;
  color: var(--rt-primary-color);
}
.header-bottombar-area .map-form .control-style .form-control:focus {
  box-shadow: none;
  outline: 0;
}
.header-bottombar-area .map-form .control-style ::placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.header-bottombar-area .map-form .rld-single-select .single-select {
  height: 46px;
  line-height: 46px;
  border: 1px solid #e3e6e6;
}
.header-bottombar-area .rld-main-search2 {
  box-shadow: none;
  border-radius: 0px;
  margin-bottom: 0px;
  background-color: transparent;
  position: relative;
  margin-right: 0px;
}
.header-bottombar-area .rld-main-search2 .dropdown-filter {
  cursor: pointer;
  position: relative;
  text-align: center;
  display: inline-block;
  margin: 0px 5px 0px 0px;
  border: 0;
  font-size: 20px;
}
.header-bottombar-area .rld-main-search2 .dropdown-filter:after {
  display: none;
}
.header-bottombar-area .rld-main-search2 .filter-button .filter-btn1 {
  padding: 10px 25px;
}
.header-bottombar-area .rld-main-search2 .filter-button .search-btn {
  color: #ffffff;
  border: none;
  margin-right: 0;
  background-color: var(--rt-primary-color);
  transition: all 0.3s ease-in-out;
}
.header-bottombar-area .rld-main-search2 .filter-button .search-btn:hover {
  background-color: var(--rt-primary-dark);
}
.header-bottombar-area .rld-main-search2 .filter-button .search-btn:after {
  display: none;
}
@media only screen and (max-width: 1199px) {
  .header-bottombar-area .rld-main-search2 .filter-button .search-btn span {
    display: none;
  }
}
.header-bottombar-area .rld-main-search2 .filter-button .search-btn i {
  margin-left: 5px;
}
.header-bottombar-area .rld-main-search2 .filter-button .reset-btn {
  margin-right: 0;
}
.header-bottombar-area .rld-main-search2 .filter-button .reset-btn:hover i {
  color: #ffffff;
}
.header-bottombar-area .rld-main-search2 .filter-button .reset-btn i {
  margin-left: 5px;
  transition: all 0.4s ease;
}
.header-bottombar-area .testing-explore {
  position: relative;
}
.header-bottombar-area .explore__form-checkbox-list.full-filter {
  top: initial;
  width: 100%;
  left: 50%;
  transform: translateX(-50%);
}
.header-bottombar-area .explore__form-checkbox-list.full-filter.filter-block {
  margin-top: 0;
}
.header-menu.menu-layout3.rt-sticky {
  position: fixed;
  background-color: #ffffff;
  box-shadow: none;
  z-index: 100;
  left: 0;
  right: 0;
  border-bottom: 0;
}
.header-menu.menu-layout3.rt-sticky nav.template-main-menu > ul > li > a {
  padding: 31px 15px;
}
@media only screen and (max-width: 1199px) {
  .header-menu.menu-layout3.rt-sticky nav.template-main-menu > ul > li > a {
    padding: 30px 10px;
  }
}
.header-menu.menu-layout3 nav.template-main-menu > ul > li > a {
  padding: 35px 18px;
}
@media only screen and (max-width: 1199px) {
  .header-menu.menu-layout3 nav.template-main-menu > ul > li > a {
    padding: 30px 10px;
  }
}
.header-menu.menu-layout3 nav.template-main-menu > ul > li .no-padding {
  padding-left: 3px;
}
.header-menu.menu-layout4 {
  padding: 0;
}
.header-menu.menu-layout4.rt-sticky {
  padding-top: 0;
}
.header-topbar {
  background: transparent;
  z-index: 10;
  position: relative;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  padding: 9px 0;
}
.header-topbar .topbar-left li {
  display: inline-flex;
  align-items: center;
  color: #bfc7d7;
  font-size: 14px;
  line-height: 1.2;
}
.header-topbar .topbar-left li i {
  margin-right: 12px;
  font-size: 16px;
}
.header-topbar .topbar-right .social-icon {
  display: inline-flex;
  align-items: center;
}
.header-topbar .topbar-right .social-icon label {
  font-size: 14px;
  color: #deede9;
  margin-bottom: 0;
}
.header-topbar .topbar-right .social-icon a {
  color: #bfc7d7;
  margin-left: 16px;
  font-size: 14px;
  overflow: hidden;
  line-height: 1.3;
  transition: all 0.3s ease-in-out;
}
.header-topbar .topbar-right .social-icon a i {
  transition: all 0.3s ease-in-out;
}
.header-topbar .topbar-right .social-icon a:hover {
  color: var(--rt-primary-color);
}
.header-topbar .topbar-right .social-icon a:hover i {
  animation: toBottomFromTop 0.5s forwards;
}
.header-topbar-style-1 .header-left-topbar .header-icon {
  color: #ffffff;
  font-size: 16px;
}
.header-topbar-style-1 .header-left-topbar .header-icon i {
  margin-right: 7px;
}
.header-topbar-style-1 .header-left-topbar .header-icon span {
  font-size: 13px;
}
.header-topbar-style-1 .header-rightbar {
  display: flex;
  align-items: center;
}
.header-topbar-style-1 .header-rightbar .hrader-list {
  margin-right: 20px;
}
.header-topbar-style-1 .header-rightbar .hrader-list li {
  display: inline-block;
  margin-right: 10px;
}
.header-topbar-style-1 .header-rightbar .hrader-list li:last-child {
  margin-right: 0;
}
.header-topbar-style-1 .header-rightbar .hrader-list li a {
  color: #ffffff;
  font-size: 15px;
  transition: all 0.3s ease-in-out;
}
.header-topbar-style-1 .header-rightbar .hrader-list li a:hover {
  color: var(--rt-primary-color);
}
.header-topbar-style-1 .header-rightbar .header-action-layout1 .action-list .listing-button-3:hover .listing-btn span i {
  transform: rotate(180deg);
}
.header-topbar-style-1 .header-rightbar .header-action-layout1 .action-list .listing-button-3 .listing-btn {
  display: flex;
  align-items: center;
  background-color: var(--rt-primary-color);
  justify-content: center;
  font-size: 16px;
  color: #ffffff;
  border: none;
  overflow: hidden;
}
.header-topbar-style-1 .header-rightbar .header-action-layout1 .action-list .listing-button-3 .listing-btn span {
  color: #ffffff;
  background-color: #4f85ff;
  margin-right: 20px;
  padding: 15px 18px;
  border-radius: 4px 0px 0px 4px;
}
.header-topbar-style-1 .header-rightbar .header-action-layout1 .action-list .listing-button-3 .listing-btn span i {
  transition: all 0.3s ease-in-out;
}
.header-topbar-style-1 .header-rightbar .header-action-layout1 .action-list .listing-button-3 .listing-btn .item-text {
  color: #ffffff;
  background-color: var(--rt-primary-color);
  padding: 15px 0px;
  transition: all 0.3s ease-in-out;
}
@media only screen and (min-width: 992px) {
  .hide-on-desktop-menu {
    display: none !important;
  }
}
@media only screen and (max-width: 991px) {
  .hide-on-mobile-menu {
    display: none;
  }
}
.middle-bar.for-mobile-menu {
  background-color: #ffffff;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding: 2px 15px;
}
.middle-bar.for-mobile-menu ul li {
  margin: 3px 8px;
}
.search-wrap.for-mobile-menu form {
  border: 1px solid #e4e4e4;
  border-radius: 4px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}
.search-wrap.for-mobile-menu input {
  color: #000000;
  border: 0;
  height: 40px;
  padding: 5px 15px;
  background-color: transparent;
}
.search-wrap.for-mobile-menu input:focus {
  outline: none;
}
.search-wrap.for-mobile-menu .search-btn {
  height: 40px;
  padding: 5px 20px;
  background-color: transparent;
  border: 0;
  color: #818284;
  font-size: 15px;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.search-wrap.for-mobile-menu .search-btn:focus {
  outline: none;
}
.search-wrap.for-mobile-menu .search-btn:hover {
  color: var(--rt-primary-dark);
}
.search-wrap.for-mobile-menu input::-webkit-input-placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.search-wrap.for-mobile-menu input::-moz-placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.search-wrap.for-mobile-menu input:-moz-placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.search-wrap.for-mobile-menu input:-ms-input-placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.btn-ghost.for-mobile-menu {
  border: 1px solid var(--rt-primary-color);
  padding: 8px 20px;
  font-size: 16px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 500;
  border-radius: 4px;
  color: var(--color_primary);
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.btn-ghost.for-mobile-menu:hover {
  background-color: var(--color_primary);
  color: #ffffff;
}
.action-btn.for-mobile-menu {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  height: 100%;
}
.action-btn.for-mobile-menu a {
  color: var(--color_text_heading);
  position: relative;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.action-btn.for-mobile-menu a:after {
  content: "|";
  padding: 0 5px 0 8px;
}
.action-btn.for-mobile-menu a:last-child:after {
  display: none;
}
.action-btn.for-mobile-menu a:hover {
  color: var(--color_primary);
}
.offscreen-navigation .menu > li {
  border-bottom: 1px solid #e9e9e9;
}
.offscreen-navigation .menu > li:last-child {
  border-bottom: 0;
}
.offscreen-navigation .menu > li > a {
  background-color: #f3f3f3;
  font-size: 15px;
  padding: 12px 30px;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.offscreen-navigation .menu > li > a:hover {
  background-color: #f8f8f8;
}
.offscreen-navigation .menu > li > a.opened {
  background-color: #f8f8f8;
}
.offscreen-navigation .sub-menu {
  display: none;
  background-color: #ffffff;
}
.offscreen-navigation .sub-menu li a {
  border-top: 1px solid #f1f1f1;
  padding-left: 50px;
  font-size: 14px;
  padding-top: 7px;
  padding-bottom: 7px;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.offscreen-navigation .sub-menu li a:hover {
  background-color: rgba(0, 113, 220, 0.05);
}
.offscreen-navigation ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
.offscreen-navigation ul li > a {
  display: block;
  position: relative;
  color: #000000;
  font-weight: 400;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.offscreen-navigation ul li > a:hover {
  color: var(--color_primary);
}
.offscreen-navigation ul li.menu-item-has-children > a:after {
  color: #999999;
  content: "\f067";
  display: inline-block;
  font-family: "Font Awesome 5 Free";
  font-weight: 600;
  right: 20px;
  position: absolute;
  font-size: 12px;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.offscreen-navigation ul li.menu-item-has-children > a:before {
  color: #999999;
  content: "\f068";
  display: inline-block;
  font-family: "Font Awesome 5 Free";
  font-weight: 600;
  right: 20px;
  position: absolute;
  font-size: 12px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.offscreen-navigation ul li.menu-item-has-children > a.opened:after {
  opacity: 0;
  visibility: hidden;
}
.offscreen-navigation ul li.menu-item-has-children > a.opened:before {
  opacity: 1;
  visibility: visible;
}
.rt-slide-nav {
  position: absolute;
  background: #fff;
  width: 100%;
  left: 0;
  display: none;
  max-height: calc(100vh - 100px);
  overflow-y: auto;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2);
  top: 100%;
  z-index: 99;
}
@media (max-width: 991px) {
  .rt-header-menu {
    padding: 0px;
    border-bottom: 1px solid rgba(81, 81, 81, 0.15);
    transition: all 0.5s;
  }
  .rt-header-menu.rt-sticky {
    position: fixed !important;
    top: 0;
    right: 0;
    left: 0;
    margin: 0 auto;
    z-index: 999;
    -webkit-box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.2);
    box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.2);
    padding-top: 0;
    z-index: 150;
    background-color: #0e2e50;
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-delay: 0.1s;
    animation-delay: 0.1s;
  }
}
@media (min-width: 992px) {
  .rt-header-menu {
    display: none;
  }
}
.mean-bar {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 5px 15px;
  background-color: rgba(0, 0, 0, 0.8);
}
.mean-bar-style-2 {
  background-color: rgba(0, 0, 0, 0.8);
}
body .sidebarBtn {
  display: block;
  padding: 12px 0;
  cursor: pointer;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
body .sidebarBtn .bar {
  background: #fff;
  height: 2px;
  width: 30px;
  display: block;
  margin-bottom: 5px;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
body .sidebarBtn .bar:nth-child(2),
body .sidebarBtn .bar:nth-child(3) {
  width: 25px;
  margin-left: 5px;
}
body .sidebarBtn .bar:last-child {
  margin-bottom: 0;
}
body.slidemenuon .sidebarBtn .bar:nth-child(2),
body.slidemenuon .sidebarBtn .bar:nth-child(3) {
  opacity: 0;
}
body.slidemenuon .sidebarBtn .bar:nth-child(1) {
  -webkit-transform: rotate(45deg) translate(7px, 7px);
  -ms-transform: rotate(45deg) translate(7px, 7px);
  transform: rotate(45deg) translate(7px, 7px);
}
body.slidemenuon .sidebarBtn .bar:nth-child(4) {
  -webkit-transform: rotate(-45deg) translate(8px, -8px);
  -ms-transform: rotate(-45deg) translate(8px, -8px);
  transform: rotate(-45deg) translate(8px, -8px);
}
.mean-bar--right {
  display: flex;
  align-items: center;
  min-width: 120px;
  justify-content: space-between;
}
@media only screen and (max-width: 320px) {
  .mean-bar--right {
    min-width: 100px;
  }
}
.mean-bar--right .actions a {
  color: #fff;
  font-size: 20px;
}
.template-search {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #ffffff;
  transform: translate(0px, -100%) scale(0, 0);
  opacity: 0;
  visibility: hidden;
  z-index: 999999;
  transition: all 0.7s ease-in-out;
}
.template-search .search-form {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  transform: translateY(-50%);
}
.template-search .search-form input[type="search"] {
  width: 60%;
  color: #000000;
  font-size: 40px;
  text-align: left;
  border: none;
  border-bottom: 2px solid;
  margin: 0 auto;
  padding: 10px 0;
  outline: none;
}
.template-search .search-form .search-btn {
  padding: 28px 60px;
  box-shadow: none;
  border: none;
  cursor: pointer;
  font-size: 24px;
  font-weight: 600;
  transform: translateX(-150px) translateY(-10px);
  background-color: transparent;
  transition: all 0.3s ease-out;
}
.template-search .search-form .search-btn i {
  margin-left: 0;
}
.template-search .search-form .search-btn:focus {
  box-shadow: none;
  outline: none;
}
.template-search .search-form input::-webkit-input-placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.template-search .search-form input::-moz-placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.template-search .search-form input:-moz-placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.template-search .search-form input:-ms-input-placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.template-search .close {
  position: fixed;
  top: 15px;
  right: 20px;
  color: #000000;
  border: none;
  opacity: 0.3;
  visibility: visible;
  padding: 3px 15px 5px;
  font-size: 70px;
  font-weight: 300;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}
.template-search .close:focus {
  box-shadow: none;
  border: none;
  outline: none;
}
.template-search .close:hover {
  opacity: 1;
}
.template-search.open {
  transform: translate(0px, 0px) scale(1, 1);
  opacity: 0.95;
  visibility: visible;
}
.header-bottombar-area .rld-main-search2 .box {
  position: relative;
  display: flex;
  align-items: center;
}
.header-bottombar-area .rld-main-search2 .box .box-top {
  display: flex;
}
@media only screen and (max-width: 767px) {
  .header-bottombar-area .rld-main-search2 .box .box-top {
    display: block;
    width: 100%;
  }
}
.header-bottombar-area .rld-main-search2 .box .box-top .item {
  flex: 1;
}
@media only screen and (max-width: 1199px) {
  .header-bottombar-area .rld-main-search2 .box .box-top .item {
    flex: auto;
  }
}
.header-bottombar-area .rld-main-search2 .box .box-top .rld-single-input input::placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.header-bottombar-area .rld-main-search2 .box .box-top .rt-filter-btn {
  display: flex;
  max-width: 189px;
  align-items: center;
}
@media only screen and (max-width: 767px) {
  .header-bottombar-area .rld-main-search2 .box .box-top .rt-filter-btn {
    display: flex;
    max-width: min-content;
    background-color: #fff;
    text-align: right;
  }
}
.header-bottombar-area .rld-main-search2 .explore__form-checkbox-list.full-filter.filter-block {
  background: #eaf7f4;
  border-radius: 6px;
  padding: 0px 20px 20px 20px;
}
.header-bottombar-area .rld-main-search2 .explore__form-checkbox-list.full-filter.filter-block .no-ul-list.third-row li {
  width: 100%;
  float: left;
  margin-bottom: 7px;
}
.header-bottombar-area .rld-main-search2 .explore__form-checkbox-list.full-filter.filter-block .no-ul-list.third-row li {
  max-width: 100%;
  float: left;
  margin-bottom: 7px;
  flex: 0 0 100%;
}
.header-bottombar-area .rld-main-search2 .explore__form-checkbox-list.full-filter.filter-block .filter-button {
  display: inline-block;
}
.header-bottombar-area .rld-main-search2 .explore__form-checkbox-list.full-filter.filter-block .filter-button .filter-btn1 {
  display: block;
  padding: 10px 20px;
}
/*------------------- 5.6 Heading Part -------------------*/
.item-heading-left {
  position: relative;
  z-index: 1;
  margin-bottom: 25px;
}
@media only screen and (max-width: 767px) {
  .item-heading-left {
    margin-bottom: 22px;
  }
}
@media only screen and (max-width: 575px) {
  .item-heading-left {
    text-align: center;
    margin-bottom: 10px;
  }
}
.item-heading-left .section-subtitle {
  color: var(--rt-primary-color);
  font-size: 16px;
  font-weight: 500;
  font-family: "Ubuntu", sans-serif;
  text-transform: uppercase;
  line-height: 30px;
  letter-spacing: 1px;
  padding-left: 15px;
  z-index: 2;
  display: block;
  margin-bottom: 5px;
  position: relative;
}
.item-heading-left .section-subtitle:after {
  content: "";
  height: 7px;
  width: 7px;
  background: var(--rt-primary-color);
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  border: none;
  border-radius: 50%;
  z-index: 2;
}
@media only screen and (max-width: 575px) {
  .item-heading-left .section-subtitle:after {
    display: none;
  }
}
.item-heading-left .section-title {
  color: #212121;
  font-size: 32px;
  font-weight: 600;
  line-height: 1.2;
  z-index: 2;
  position: relative;
}
@media only screen and (max-width: 479px) {
  .item-heading-left .section-title {
    font-size: 26px;
    line-height: 36px;
  }
}
.item-heading-left .bg-title-wrap {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  width: 100%;
}
.item-heading-left .bg-title-wrap .background-title {
  display: inline-block;
  font-family: "Quentin";
  font-size: 100px;
  line-height: 130px;
  color: #dceeea;
  pointer-events: none;
}
@media only screen and (max-width: 767px) {
  .item-heading-left .bg-title-wrap .background-title {
    display: none;
  }
}
.heading-button {
  text-align: right;
}
@media only screen and (max-width: 575px) {
  .heading-button {
    text-align: center;
    margin-bottom: 0px;
  }
}
.heading-button .heading-btn {
  display: inline-block;
  padding: 10px 30px;
  color: #fff;
  font-family: "Roboto", sans-serif;
  font-size: 15px;
  font-weight: 500;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 4px;
  position: relative;
  z-index: 1;
  transition: all 0.3s ease-in-out;
  margin-bottom: 35px;
}
.heading-button .heading-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background: #15c39a;
  position: absolute;
  bottom: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
  border: none;
  border-radius: 4px;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.heading-button .heading-btn:hover {
  color: #ffffff;
}
.heading-button .heading-btn:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
}
.item-heading-center {
  position: relative;
  z-index: 1;
  text-align: center;
  margin-bottom: 40px;
}
.item-heading-center .section-subtitle {
  color: var(--rt-primary-color);
  font-size: 16px;
  font-weight: 500;
  font-family: "Ubuntu", sans-serif;
  text-transform: uppercase;
  line-height: 30px;
  letter-spacing: 1px;
  margin-left: 15px;
  position: relative;
  z-index: 2;
  display: block;
  margin-bottom: 3px;
}
.item-heading-center .section-title {
  color: #212121;
  font-size: 32px;
  font-weight: 600;
  position: relative;
  z-index: 2;
}
@media only screen and (max-width: 479px) {
  .item-heading-center .section-title {
    font-size: 26px;
    line-height: 32px;
  }
}
.item-heading-center .bg-title-wrap {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  width: 100%;
}
.item-heading-center .bg-title-wrap .background-title {
  display: inline-block;
  font-family: "Quentin";
  font-size: 100px;
  line-height: 130px;
  color: #dceeea;
  pointer-events: none;
}
@media only screen and (max-width: 767px) {
  .item-heading-center .bg-title-wrap .background-title {
    display: none;
  }
}
.heading-button .heading-btn {
  display: inline-block;
  padding: 7px 30px;
  color: #fff;
  font-family: "Roboto", sans-serif;
  font-size: 15px;
  font-weight: 500;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 4px;
  position: relative;
  z-index: 1;
  transition: all 0.3s ease-in-out;
  margin-bottom: 35px;
}
.heading-button .heading-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background: rgba(0, 0, 0, 0.15);
  position: absolute;
  bottom: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
  border: none;
  border-radius: 4px;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.heading-button .heading-btn:hover {
  color: #ffffff;
}
.heading-button .heading-btn:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
}
.mb-20 {
  margin-bottom: 60px;
}
@media only screen and (max-width: 991px) {
  .mb-20 {
    margin-bottom: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .mb-20 {
    margin-bottom: 24px;
  }
}
/*------------------- 5.7 Keyframe Animation -------------------*/
@-webkit-keyframes moveclouds {
  0% {
    margin-left: 1000px;
  }
  100% {
    margin-left: -1000px;
  }
}
@keyframes moveclouds {
  0% {
    margin-left: 1000px;
  }
  100% {
    margin-left: -1000px;
  }
}
@-webkit-keyframes movingleftright1 {
  0% {
    -webkit-transform: translateX(0) translateY(0);
    transform: translateX(0) translateY(0);
  }
  40% {
    -webkit-transform: translateX(50px) translateY(-50px);
    transform: translateX(50px) translateY(-50px);
  }
  75% {
    -webkit-transform: translateX(100px);
    transform: translateX(100px);
  }
  100% {
    -webkit-transform: translateY(0) translateX(0);
    transform: translateY(0) translateX(0);
  }
}
@keyframes movingleftright1 {
  0% {
    -webkit-transform: translateX(0) translateY(0);
    transform: translateX(0) translateY(0);
  }
  40% {
    -webkit-transform: translateX(50px) translateY(-50px);
    transform: translateX(50px) translateY(-50px);
  }
  75% {
    -webkit-transform: translateX(100px);
    transform: translateX(100px);
  }
  100% {
    -webkit-transform: translateY(0) translateX(0);
    transform: translateY(0) translateX(0);
  }
}
@-webkit-keyframes movingleftright2 {
  0% {
    -webkit-transform: translateX(0) translateY(0);
    transform: translateX(0) translateY(0);
  }
  40% {
    -webkit-transform: translateX(-50px) translateY(50px);
    transform: translateX(-50px) translateY(50px);
  }
  75% {
    -webkit-transform: translateX(-100px);
    transform: translateX(-100px);
  }
  100% {
    -webkit-transform: translateY(0) translateX(0);
    transform: translateY(0) translateX(0);
  }
}
@keyframes movingleftright2 {
  0% {
    -webkit-transform: translateX(0) translateY(0);
    transform: translateX(0) translateY(0);
  }
  40% {
    -webkit-transform: translateX(-50px) translateY(50px);
    transform: translateX(-50px) translateY(50px);
  }
  75% {
    -webkit-transform: translateX(-100px);
    transform: translateX(-100px);
  }
  100% {
    -webkit-transform: translateY(0) translateX(0);
    transform: translateY(0) translateX(0);
  }
}
@-webkit-keyframes movingleftright3 {
  0% {
    -webkit-transform: translateX(0) translateY(0);
    transform: translateX(0) translateY(0);
  }
  40% {
    -webkit-transform: translateX(100px) translateY(-50px);
    transform: translateX(100px) translateY(-50px);
  }
  75% {
    -webkit-transform: translateX(-100px);
    transform: translateX(-100px);
  }
  100% {
    -webkit-transform: translateY(0) translateX(0);
    transform: translateY(0) translateX(0);
  }
}
@keyframes movingleftright3 {
  0% {
    -webkit-transform: translateX(0) translateY(0);
    transform: translateX(0) translateY(0);
  }
  40% {
    -webkit-transform: translateX(100px) translateY(-50px);
    transform: translateX(100px) translateY(-50px);
  }
  75% {
    -webkit-transform: translateX(-100px);
    transform: translateX(-100px);
  }
  100% {
    -webkit-transform: translateY(0) translateX(0);
    transform: translateY(0) translateX(0);
  }
}
/*------------------- 5.8 Pagination -------------------*/
.pagination-style-1 {
  margin-top: 24px;
}
.pagination-style-1 .pagination {
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  margin-bottom: 24px;
}
@media only screen and (max-width: 991px) {
  .pagination-style-1 .pagination {
    margin-bottom: 0;
  }
}
.pagination-style-1 .pagination .page-item {
  margin-right: 5px;
}
.pagination-style-1 .pagination .page-item:last-child {
  margin-right: 0px;
}
.pagination-style-1 .pagination .page-item .page-link {
  font-size: 18px;
  font-family: "Roboto", sans-serif;
  font-weight: 600;
  color: var(--rt-primary-color);
  border: 1px solid #dbdbdb;
  padding: 10px 18px;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  border-radius: 4px;
}
@media only screen and (max-width: 374px) {
  .pagination-style-1 .pagination .page-item .page-link {
    padding: 8px 15px;
  }
}
.pagination-style-1 .pagination .page-item .page-link.active {
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
  color: #ffffff;
}
.pagination-style-1 .pagination .page-item .page-link:focus {
  box-shadow: none;
}
.pagination-style-1 .pagination .page-item .page-link:hover {
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
  color: #ffffff;
}
.pagination-style-2 {
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  margin-bottom: 15px;
  text-align: right;
}
@media only screen and (max-width: 991px) {
  .pagination-style-2 {
    text-align: left;
    margin-top: 20px;
  }
}
.pagination-style-2 .page-item {
  display: inline-block;
  margin-right: -5px;
}
.pagination-style-2 .page-item:last-child {
  margin-right: 0;
}
.pagination-style-2 .page-item .page-link {
  height: 43px;
  display: inline-block;
  transition: all 0.3s ease-in-out;
}
.pagination-style-2 .page-item .page-link:hover {
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
  color: #ffffff;
}
.pagination-style-2 .page-item .page-link:hover i:before {
  color: #fff;
}
.pagination-style-2 .page-item .page-link:focus {
  outline: 0;
  box-shadow: none;
}
.pagination-style-2 .page-item .page-link i:before {
  color: #cfd1d9;
  font-size: 20px;
  transition: all 0.3s ease-in-out;
}
/*------------------- 5.9 Play Button -------------------*/
.play-btn.play-btn-big .play-icon {
  background: #fff;
  color: var(--rt-primary-color);
  transition: all 0.3s ease-in-out;
}
.play-btn.play-btn-big .play-icon:hover {
  background-color: #15c39a;
  color: #fff;
}
.play-btn .play-icon {
  display: inline-block;
  width: 58px;
  height: 58px;
  border-radius: 50%;
  background-color: #15c39a;
  color: #fff;
  line-height: 58px;
  text-align: center;
  position: relative;
  transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
}
.play-btn .play-icon.style-1 {
  margin-right: 24px;
}
.play-btn .play-icon.style-2 {
  margin-right: 0;
}
.play-btn .play-icon::after {
  content: "";
  position: absolute;
  z-index: 0;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: block;
  width: 74px;
  height: 74px;
  border-radius: 50%;
  border: 1px solid #15c39a;
  animation: pulse-border 1500ms ease-out infinite;
  z-index: -1;
}
.play-btn .play-icon::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: block;
  width: 90px;
  height: 90px;
  border-radius: 50%;
  border: 1px solid #15c39a;
  animation: pulse-border 1500ms ease-out infinite;
  z-index: -1;
}
.play-btn .play-text {
  color: #70778b;
  display: inline-block;
  position: relative;
  line-height: 24px;
  font-weight: 600;
  font-size: 15px;
}
.play-btn .play-text::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
  background-color: #fff;
  text-transform: capitalize;
}
@keyframes pulse-border {
  0% {
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(0.5);
    opacity: 1;
  }
  100% {
    transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
    opacity: 0;
  }
}
/*------------------- 5.10 Preloader -------------------*/
#preloader {
  background: url("dashbord/img/preloader.gif") rgba(255, 255, 255, 0.99) no-repeat scroll center center;
  height: 100%;
  left: 0;
  overflow: visible;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 9999999;
}
/*------------------- 5.11 Skills Wrap -------------------*/
.skills-wrap-layout-2 {
  margin: 15px 0;
}
@media only screen and (max-width: 575px) {
  .skills-wrap-layout-2 {
    padding-right: 0;
  }
}
.skills-wrap-layout-2 .single-skill {
  margin-bottom: 12px;
}
.skills-wrap-layout-2 .title-bar .title {
  font-size: 16px;
  font-weight: 700;
  color: #212121;
  font-family: "Roboto", sans-serif;
  margin-bottom: 10px;
}
@media only screen and (max-width: 575px) {
  .skills-wrap-layout-2 .title-bar .title {
    margin-bottom: 40px;
  }
}
.skills-wrap-layout-2 .skill-bar {
  height: 7px;
  background-color: #c7e6de;
  border-radius: 4px;
}
.skills-wrap-layout-2 .skill-bar .skill-per {
  position: relative;
  height: 7px;
  width: 0;
  border-radius: 4px;
  background-image: linear-gradient(-45deg, rgba(255, 255, 255, 0.5) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0.5) 75%, transparent 75%, transparent);
  background-size: 18px 18px;
  background-color: var(--rt-primary-color);
  transition: 2s linear;
}
.skills-wrap-layout-2 .skill-bar .skill-per:before {
  content: attr(data-per);
  position: absolute;
  font-size: 16px;
  font-family: "Roboto", sans-serif;
  font-weight: 700;
  text-transform: capitalize;
  color: var(--rt-primary-color);
  bottom: 20px;
  right: 0;
}
.skills-wrap-layout-2 .skill-bar .skill-per:after {
  content: "";
  height: 20px;
  width: 20px;
  background-color: var(--rt-primary-color);
  position: absolute;
  border: none;
  border-width: 4px;
  border-color: #ffffff;
  border-style: solid;
  border-radius: 50%;
  padding: 3px;
  bottom: -4px;
  right: -2px;
}
.item-shorting-box {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 24px;
}
@media only screen and (max-width: 575px) {
  .item-shorting-box {
    display: block;
    text-align: center;
  }
}
@media only screen and (max-width: 375px) {
  .item-shorting-box {
    text-align: center;
  }
}
.item-shorting-box .shorting-title .item-title {
  font-weight: 500;
  font-size: 18px;
  margin-bottom: 0;
}
@media only screen and (max-width: 575px) {
  .item-shorting-box .shorting-title .item-title {
    margin-bottom: 5px;
  }
}
.item-shorting-box .item-shorting-box-2 {
  display: flex;
  align-items: center;
}
.item-shorting-box .item-shorting-box-2 .by-shorting {
  display: flex;
  align-items: center;
  margin-right: 16px;
}
.item-shorting-box .item-shorting-box-2 .by-shorting .shorting {
  color: #212121;
  font-weight: 500;
  font-size: 15px;
  margin-right: 5px;
}
.item-shorting-box .item-shorting-box-2 .by-shorting .single-select {
  height: 43px;
  line-height: 43px;
  padding: 0px 57px 0px 20px;
  border: 1px solid #e1e5ee;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  position: relative;
}
.item-shorting-box .item-shorting-box-2 .by-shorting .single-select .current {
  color: #878c9f;
  font-weight: 500;
}
.item-shorting-box .item-shorting-box-2 .by-shorting .single-select:hover,
.item-shorting-box .item-shorting-box-2 .by-shorting .single-select:active,
.item-shorting-box .item-shorting-box-2 .by-shorting .single-select:focus {
  box-shadow: none;
  outline: 0;
}
.item-shorting-box .item-shorting-box-2 .by-shorting .single-select:after {
  border: 0;
}
.item-shorting-box .item-shorting-box-2 .by-shorting .single-select:before {
  content: "\f0d7";
  font-size: 15px;
  font-family: "Font Awesome 5 Free";
  font-weight: 600;
  color: var(--rt-primary-color);
  position: absolute;
  top: 0px;
  margin: 0px;
  background-size: auto;
  height: 0px;
  width: 11px;
  right: 18px;
  left: auto;
  background-repeat: no-repeat;
}
.item-shorting-box .item-shorting-box-2 .by-shorting .single-select .list {
  margin-top: 0px;
  width: 100%;
}
.item-shorting-box .item-shorting-box-2 .grid-button ul li {
  display: inline-block;
}
.item-shorting-box .item-shorting-box-2 .grid-button ul li a {
  color: #b4b4b4;
  font-size: 18px;
  border: 1px solid #e1e5ee;
  height: 43px;
  border-radius: 3px;
  padding: 8px 14px 9px 14px;
  transition: all 0.3s ease-in-out;
}
.item-shorting-box .item-shorting-box-2 .grid-button ul li a:hover {
  color: var(--rt-primary-color);
}
.item-shorting-box .item-shorting-box-2 .grid-button ul li .active {
  color: var(--rt-primary-color);
}
.item-shorting-box .item-shorting-box-2 .grid-button ul .active {
  color: var(--rt-primary-color);
}
.item-shorting-box .item-shorting-box-2 .grid-button ul .without-border a {
  border-left: none;
  margin-left: -6px;
}
@media only screen and (max-width: 575px) {
  .item-shorting-box .item-shorting-box-3 {
    justify-content: center;
  }
}
@media only screen and (max-width: 374px) {
  .item-shorting-box .item-shorting-box-3 {
    display: block;
  }
}
.item-shorting-box .item-shorting-box-3 .by-shorting {
  margin-right: 0;
}
@media only screen and (max-width: 374px) {
  .item-shorting-box .item-shorting-box-3 .by-shorting {
    justify-content: center;
  }
}
/*------------------- 5.12 Tooltip -------------------*/
.bs-tooltip-top {
  margin-top: 50px;
}
.bs-tooltip-bottom {
  margin-bottom: 50px;
}
.tooltip-inner {
  font-size: 15px;
  font-weight: 500;
  text-transform: capitalize;
  font-family: "Jost", sans-serif;
  max-width: 200px;
  padding: 3px 10px;
  color: #fff;
  text-align: center;
  background-color: var(--rt-primary-color);
  border-radius: 4px;
  height: 30px;
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
}
.tooltip.show {
  opacity: 1;
}
.tooltip .tooltip-arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}
.bs-tooltip-top .tooltip-arrow {
  bottom: 1px;
}
.bs-tooltip-top .tooltip-arrow::before,
.bs-tooltip-auto[x-placement^="top"] .tooltip-arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: var(--rt-primary-color);
}
.bs-tooltip-bottom .tooltip-arrow::before,
.bs-tooltip-auto[x-placement^="bottom"] .tooltip-arrow::before {
  bottom: 0;
  border-bottom-color: var(--rt-primary-color);
}
/*------------------- 5.13 Widget -------------------*/
.sidebar-widget .widget {
  margin-bottom: 40px;
}
.sidebar-widget .widget:last-child {
  margin-bottom: 0 !important;
}
@media only screen and (max-width: 991px) {
  .widget-break-lg {
    margin-top: 40px;
  }
}
.widget-subtitle {
  color: #212121;
  font-size: 22px;
  line-height: 30px;
  margin-bottom: 20px;
  font-weight: 500;
}
.widget.widget-info-box {
  border-radius: 6px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  padding: 30px 30px 5px 30px;
}
@media only screen and (max-width: 1199px) {
  .widget.widget-info-box {
    padding: 20px;
  }
}
@media only screen and (max-width: 991px) {
  .widget.widget-info-box {
    padding: 30px;
  }
}
.widget.widget-info-box .item-contact-2 {
  display: block;
}
.widget.widget-info-box .item-contact-2 .item-phn-no {
  color: #212121;
  font-weight: 700;
  line-height: 36px;
  border-top: 1px solid #e5e5e5;
  padding: 10px 0px;
}
.widget.widget-info-box .item-contact-2 .item-phn-no span {
  color: #212121;
  font-size: 15px;
  font-weight: 400;
}
.widget.widget-info-box .item-contact-2 .item-phn-no i {
  color: #aab4cf;
  margin-right: 10px;
}
.widget.widget-info-box .item-contact-2 .item-icon {
  color: #212121;
  font-weight: 700;
  line-height: 36px;
  border-top: 1px solid #e5e5e5;
  padding: 10px 0px;
}
.widget.widget-info-box .item-contact-2 .item-icon span {
  color: #212121;
  font-size: 15px;
  font-weight: 400;
}
.widget.widget-info-box .item-contact-2 .item-icon .rt-social-item {
  color: #212121;
  font-size: 13px;
  font-weight: 500;
  position: relative;
}
.widget.widget-info-box .item-contact-2 .item-icon .rt-social-item .social-item {
  position: absolute;
  left: 77px;
  bottom: 0px;
  display: flex;
  align-items: center;
}
.widget.widget-info-box .item-contact-2 .item-icon .rt-social-item .social-item li {
  display: inline-block;
}
.widget.widget-info-box .item-contact-2 .item-icon .rt-social-item .social-item li a {
  color: #70778b;
  font-size: 16px;
  font-weight: 500;
  transition: all 0.3s ease-in-out;
}
.widget.widget-info-box .item-contact-2 .item-icon .rt-social-item .social-item li a:hover i {
  color: var(--rt-primary-color);
}
.widget.widget-info-box .item-contact-2 .item-icon .rt-social-item .social-item li a i {
  color: #70778b;
  transition: all 0.3s ease-in-out;
}
.widget.widget-info-box .item-contact-2 .item-icon i {
  color: #aab4cf;
  margin-right: 10px;
}
.widget.widget-contact-box {
  border-radius: 6px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  padding: 30px 30px 30px 30px;
}
@media only screen and (max-width: 1199px) {
  .widget.widget-contact-box {
    padding: 20px;
  }
}
@media only screen and (max-width: 991px) {
  .widget.widget-contact-box {
    padding: 30px;
  }
}
.widget.widget-contact-box .media {
  margin-bottom: 24px;
}
.widget.widget-contact-box .media .media-body .item-title {
  font-weight: 600;
  margin-bottom: 0;
  font-size: 16px;
  color: var(--rt-primary-color);
}
.widget.widget-contact-box .media .media-body .item-phn {
  color: #212121;
  font-size: 16px;
}
.widget.widget-contact-box .media .media-body .item-phn span {
  color: var(--rt-primary-color);
}
.widget.widget-contact-box .media .media-body .item-mail {
  color: #212121;
  font-size: 15px;
  font-weight: 500;
}
.widget.widget-contact-box .media .media-body .item-rating ul li {
  display: inline-block;
  font-size: 13px;
  color: #fc9f32;
}
.widget.widget-contact-box .media .media-body .item-rating ul .rating-count {
  color: #7183a8;
}
.widget.widget-contact-box .wid-contact-button {
  margin-bottom: 24px;
}
.widget.widget-contact-box .wid-contact-button li {
  display: inline-block;
}
@media only screen and (max-width: 1199px) {
  .widget.widget-contact-box .wid-contact-button li {
    margin-right: 0;
  }
}
@media only screen and (max-width: 320px) {
  .widget.widget-contact-box .wid-contact-button li {
    margin-bottom: 5px;
  }
}
.widget.widget-contact-box .wid-contact-button li:last-child {
  margin-right: 0;
}
.widget.widget-contact-box .wid-contact-button li a {
  display: inline-block;
  background-color: #eaf7f4;
  border: none;
  border-radius: 3px;
  color: var(--rt-primary-color);
  font-size: 15px;
  font-weight: 700;
  padding: 7px 18px;
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 1199px) {
  .widget.widget-contact-box .wid-contact-button li a {
    padding: 8px 14px;
  }
}
.widget.widget-contact-box .wid-contact-button li a i {
  margin-right: 7px;
  color: var(--rt-primary-color);
  font-size: 15px;
}
.widget.widget-contact-box .wid-contact-button li a:hover {
  background-color: #fff;
  box-shadow: 0 7px 18px 0 rgba(0, 193, 148, 0.32);
}
.widget.widget-contact-box .wid-contact-button-2 {
  margin-bottom: 0;
}
.widget.widget-contact-box .contact-box .form-group .form-control {
  height: 52px;
  background-color: transparent;
  color: var(--rt-primary-color);
  border-color: #e5e5e5;
}
.widget.widget-contact-box .contact-box .form-group .form-control:focus {
  box-shadow: none;
  outline: 0;
}
.widget.widget-contact-box .contact-box .form-group .form-control::placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.widget.widget-contact-box .contact-box .form-group .form-text {
  width: 100%;
  background-color: transparent;
  font-size: 15px;
  color: #878c9f;
  font-weight: 400;
  border-color: #e5e5e5;
  padding: 15px 0px 0px 12px;
  border-radius: 4px;
}
.widget.widget-contact-box .contact-box .form-group .form-text:focus {
  box-shadow: none;
  outline: 0;
}
.widget.widget-contact-box .contact-box .form-group .form-text::placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.widget.widget-contact-box .contact-box .form-group .advanced-button .item-btn {
  display: inline-block;
  background-color: var(--rt-primary-color);
  color: #fff;
  padding: 10px 30px;
  width: 100%;
  font-size: 15px;
  font-weight: 500;
  border: none;
  border-radius: 4px;
  text-align: center;
  line-height: 30px;
  position: relative;
  z-index: 1;
  text-transform: uppercase;
}
.widget.widget-contact-box .contact-box .form-group .advanced-button .item-btn:hover::after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
}
.widget.widget-contact-box .contact-box .form-group .advanced-button .item-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background-color: rgba(0, 0, 0, 0.15);
  border: none;
  border-radius: 4px;
  opacity: 0;
  visibility: hidden;
  position: absolute;
  left: 0;
  bottom: 0;
  transition: all 0.3s ease-in-out;
  z-index: -1;
}
.widget.widget-contact-box .contact-box .form-group .advanced-button .item-btn i {
  margin-left: 5px;
  font-size: 15px;
}
.widget.widget-contact-box .contact-box .form-group .item-loan {
  color: #212121;
  font-size: 15px;
  font-weight: 500;
}
.widget.widget-contact-box .contact-box ::placeholder {
  font-size: 15px;
  line-height: 30px;
  color: #878c9f;
  font-weight: 500;
}
.widget.widget-contact-box .range-slider {
  display: block;
}
.widget.widget-contact-box .range-slider label {
  color: #212121;
  font-size: 13px;
  min-width: 60px;
  margin-bottom: 0;
  margin-right: 0px;
  font-weight: 500;
}
.widget.widget-contact-box .range-slider .slider .tooltip {
  display: none;
}
.widget.widget-contact-box .range-slider .slider-selection {
  background: var(--rt-primary-color);
}
.widget.widget-contact-box .range-slider .slider-track-high {
  background: #e9ecf2;
}
.widget.widget-contact-box .range-slider .slider.slider-horizontal {
  width: 100%;
}
.widget.widget-advanced-search {
  border-radius: 6px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  padding: 30px 30px 5px 30px;
}
@media only screen and (max-width: 1199px) {
  .widget.widget-advanced-search {
    padding: 20px;
  }
}
@media only screen and (max-width: 991px) {
  .widget.widget-advanced-search {
    padding: 30px 30px 5px 30px;
  }
}
.widget.widget-advanced-search .rating-part {
  margin-top: 15px;
  margin-bottom: 15px;
}
.widget.widget-advanced-search .rating-part span {
  color: #878c9f;
  font-size: 15px;
}
.widget.widget-advanced-search .rating-part .item-rating {
  margin-top: 7px;
}
.widget.widget-advanced-search .rating-part .item-rating li {
  display: inline-block;
  font-size: 20px;
  margin-right: 5px;
  color: #fc9f32;
}
.widget.widget-advanced-search .rating-part .item-rating li:last-child {
  margin-right: 0;
}
.widget.widget-advanced-search .rating-part .item-rating .tr-color a {
  color: #dde2ec;
}
.widget.widget-advanced-search .map-form-style-2 .form-control {
  height: 60px;
}
.widget.widget-advanced-search .map-form-style-2 .form-control::placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
@media only screen and (max-width: 767px) {
  .widget.widget-advanced-search .map-form-style-2 .rld-single-select {
    overflow: visible;
  }
}
.widget.widget-advanced-search-2 {
  padding: 30px;
}
@media only screen and (max-width: 1199px) {
  .widget.widget-advanced-search-2 {
    padding: 20px;
  }
}
@media only screen and (max-width: 991px) {
  .widget.widget-advanced-search-2 {
    padding: 30px;
  }
}
.widget.widget-advanced-search-2 .map-form-style-2 .form-control {
  height: 60px;
}
.widget.widget-advanced-search-2 .map-form-style-2 .form-control::placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
@media only screen and (max-width: 767px) {
  .widget.widget-advanced-search-2 .map-form-style-2 .rld-single-select {
    overflow: visible;
  }
}
.widget.widget-advanced-search-2 .advanced-button .item-btn {
  display: inline-block;
  background-color: var(--rt-primary-color);
  color: #fff;
  padding: 10px 30px;
  width: 100%;
  font-size: 15px;
  font-weight: 500;
  border: none;
  border-radius: 4px;
  text-align: center;
  line-height: 30px;
  position: relative;
  z-index: 1;
}
.widget.widget-advanced-search-2 .advanced-button .item-btn:hover::after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
}
.widget.widget-advanced-search-2 .advanced-button .item-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background-color: rgba(0, 0, 0, 0.15);
  border: none;
  border-radius: 4px;
  opacity: 0;
  visibility: hidden;
  position: absolute;
  left: 0;
  bottom: 0;
  transition: all 0.3s ease-in-out;
  z-index: -1;
}
.widget.widget-advanced-search-2 .advanced-button .item-btn i {
  margin-left: 5px;
}
.widget.widget-listing-box1 {
  border-radius: 6px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  padding: 30px 30px 20px 30px;
}
@media only screen and (max-width: 1199px) {
  .widget.widget-listing-box1 {
    padding: 20px;
  }
}
@media only screen and (max-width: 991px) {
  .widget.widget-listing-box1 {
    padding: 30px 30px 20px 30px;
  }
}
@media only screen and (max-width: 479px) {
  .widget.widget-listing-box1 {
    padding: 20px;
  }
}
.widget.widget-listing-box1 .item-img {
  position: relative;
  overflow: hidden;
  margin-bottom: 10px;
}
.widget.widget-listing-box1 .item-img a img {
  border-radius: 4px;
  transform: scale(1);
  transition: all 0.4s ease-in-out;
}
@media only screen and (max-width: 768px) {
  .widget.widget-listing-box1 .item-img a img {
    width: 100%;
  }
}
.widget.widget-listing-box1 .item-img:hover a img {
  transform: scale(1.05);
}
.widget.widget-listing-box1 .item-category-box1 {
  position: absolute;
  top: 30px;
  left: 30px;
  z-index: 2;
}
.widget.widget-listing-box1 .item-category-box1 .item-category {
  color: #ffffff;
  font-size: 13px;
  font-weight: 400;
  font-family: "Ubuntu", sans-serif;
  padding: 3px 20px;
  display: inline-block;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 2px;
  position: relative;
}
.widget.widget-listing-box1 .item-category-box1 .item-category:before {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  background-color: #fff;
  left: 10px;
  top: 16px;
  border: none;
  border-radius: 50%;
}
.widget.widget-listing-box1 .widget-content {
  border-bottom: 1px solid #e8e8e8;
  margin-bottom: 24px;
}
.widget.widget-listing-box1 .widget-content .item-category10 a {
  color: var(--rt-primary-color);
  transition: all 0.3s ease-in-out;
}
.widget.widget-listing-box1 .widget-content .item-category10 a:hover {
  color: #212121;
}
.widget.widget-listing-box1 .widget-content .item-title {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 10px;
  line-height: 22px;
  padding-right: 20px;
}
.widget.widget-listing-box1 .widget-content .item-title a {
  color: #212121;
  transition: all 0.3s ease-in-out;
}
.widget.widget-listing-box1 .widget-content .item-title a:hover {
  color: var(--rt-primary-color);
}
.widget.widget-listing-box1 .widget-content .location-area {
  color: #929292;
  font-size: 15px;
  margin-bottom: 5px;
}
.widget.widget-listing-box1 .widget-content .location-area i {
  margin-right: 7px;
  position: relative;
  top: 3px;
}
.widget.widget-listing-box1 .widget-content .item-price {
  color: var(--rt-primary-color);
  font-size: 22px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
  padding-bottom: 20px;
}
.widget.widget-listing-box1 .widget-content .item-price span {
  color: #bfbfbf;
  font-size: 16px;
  font-weight: 500;
}
.widget.widget-listing-box1 .widget-listing {
  display: flex;
  border-bottom: 1px solid #e8e8e8;
  margin-bottom: 25px;
  padding-bottom: 15px;
}
.widget.widget-listing-box1 .widget-listing:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
}
@media only screen and (max-width: 479px) {
  .widget.widget-listing-box1 .widget-listing {
    display: block;
    text-align: center;
  }
}
.widget.widget-listing-box1 .widget-listing:hover .item-img a img {
  transform: scale(1.05);
}
.widget.widget-listing-box1 .widget-listing .item-img {
  position: relative;
  overflow: hidden;
}
@media only screen and (max-width: 479px) {
  .widget.widget-listing-box1 .widget-listing .item-img {
    margin-bottom: 20px;
  }
}
.widget.widget-listing-box1 .widget-listing .item-img a img {
  border-radius: 4px;
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
.widget.widget-listing-box1 .widget-listing .item-content {
  flex: 1;
  margin-left: 20px;
}
@media only screen and (max-width: 479px) {
  .widget.widget-listing-box1 .widget-listing .item-content {
    margin-left: 0;
  }
}
.widget.widget-listing-box1 .widget-listing .item-content .item-title {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 5px;
  line-height: 20px;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.widget.widget-listing-box1 .widget-listing .item-content .item-title a {
  color: #212121;
  transition: all 0.3s ease-in-out;
}
.widget.widget-listing-box1 .widget-listing .item-content .item-title a:hover {
  color: var(--rt-primary-color);
}
.widget.widget-listing-box1 .widget-listing .item-content .item-subtitle {
  font-size: 13px;
  color: #788593;
  font-family: "Roboto", sans-serif;
  margin-bottom: 4px;
  margin-top: -5px;
}
.widget.widget-listing-box1 .widget-listing .item-content .item-rating li {
  display: inline-block;
  font-size: 13px;
  color: #fc9f32;
}
.widget.widget-listing-box1 .widget-listing .item-content .item-rating li span {
  color: #c7c9d2;
}
.widget.widget-listing-box1 .widget-listing .item-content .item-categoery {
  font-size: 15px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 500;
  color: var(--rt-primary-color);
}
.widget.widget-listing-box1 .widget-listing .item-content .item-categoery span {
  color: #8a95a1;
  margin-left: 5px;
  font-weight: 400;
}
.widget.widget-listing-box1 .widget-listing .item-content .location-area {
  color: #929292;
  font-size: 15px;
  margin-bottom: 0px;
}
.widget.widget-listing-box1 .widget-listing .item-content .location-area i {
  margin-right: 7px;
  position: relative;
  top: 0;
}
.widget.widget-listing-box1 .widget-listing .item-content .item-price {
  color: var(--rt-primary-color);
  font-size: 18px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
}
.widget.widget-listing-box1 .widget-listing .item-content .item-price span {
  color: #bfbfbf;
  font-size: 16px;
  font-weight: 500;
}
.widget.widget-listing-box1 .no-brd {
  border-bottom: none;
}
.widget.widget-post {
  position: relative;
  border-radius: 6px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  padding: 10px;
}
.widget.widget-post .item-img {
  position: relative;
  overflow: hidden;
}
.widget.widget-post .item-content {
  position: absolute;
  bottom: 30px;
  left: 30px;
  z-index: 2;
}
.widget.widget-post .item-content .item-title {
  color: #ffffff;
  font-size: 16px;
  font-weight: 400;
  margin-bottom: 15px;
  width: 70%;
  line-height: 18px;
}
.widget.widget-post .item-content .item-title-large {
  font-size: 24px;
  width: 80%;
  line-height: 28px;
  font-weight: 600;
}
.widget.widget-post .item-content .item-price {
  color: #ffffff;
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 20px;
}
.widget.widget-post .item-content .post-button .item-btn {
  display: inline-block;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 4px;
  color: #ffffff;
  font-size: 15px;
  font-weight: 500;
  padding: 10px 30px;
  transition: all 0.3s ease-in-out;
  font-family: "Ubuntu", sans-serif;
  z-index: 1;
  position: relative;
}
.widget.widget-post .item-content .post-button .item-btn:hover:after {
  visibility: visible;
  opacity: 1;
  left: 0;
  width: 100%;
}
.widget.widget-post .item-content .post-button .item-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background-color: rgba(0, 0, 0, 0.15);
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
  visibility: hidden;
  opacity: 0;
  border: none;
  border-radius: 4px;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.widget.widget-post .circle-shape {
  position: absolute;
  bottom: -50px;
  left: -50px;
}
.widget.widget-post .circle-shape .item-shape {
  height: 246px;
  width: 246px;
  border: none;
  border-radius: 50%;
  background-color: #0e2e50;
  z-index: 1;
  display: block;
  position: relative;
}
.widget.widget-post .circle-shape .item-shape:after {
  content: "";
  height: 246px;
  width: 246px;
  background-color: #0e2e50;
  opacity: 20%;
  border: none;
  border-radius: 50%;
  position: absolute;
  left: 23px;
  bottom: 0;
  z-index: -1;
}
.widget.widget-post .circle-shape .item-shape:before {
  content: "";
  height: 246px;
  width: 246px;
  background-color: #0e2e50;
  opacity: 20%;
  border: none;
  border-radius: 50%;
  position: absolute;
  left: 0px;
  bottom: 23px;
  z-index: -1;
}
.widget.widget-post-style-2 .item-img {
  position: relative;
  z-index: 1;
}
.widget.widget-post-style-2 .item-img:before {
  content: "";
  height: 100%;
  width: 100%;
  background-color: rgba(33, 33, 33, 0.5);
  position: absolute;
  bottom: 0;
  left: 0;
}
.widget.widget-post-style-2 .item-content {
  bottom: 40px;
  left: 40px;
}
@media only screen and (max-width: 479px) {
  .widget.widget-post-style-2 .item-content {
    left: 30px;
    bottom: 30px;
  }
}
.widget.widget-post-style-2 .item-content .item-title-large {
  margin-bottom: 20px;
  line-height: 1.4;
}
@media only screen and (max-width: 479px) {
  .widget.widget-post-style-2 .item-content .item-title-large {
    width: 97%;
    font-size: 21px;
    line-height: 24px;
  }
}
.widget.widget-post-style-2 .item-content .post-button .item-btn {
  padding: 11px 26px;
}
.widget.widget-search-box {
  border-radius: 6px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  padding: 20px 30px 30px 30px;
}
@media only screen and (max-width: 1199px) {
  .widget.widget-search-box {
    padding: 20px;
  }
}
@media only screen and (max-width: 991px) {
  .widget.widget-search-box {
    padding: 30px;
  }
}
.widget.widget-search-box .widget-form-box {
  position: relative;
}
.widget.widget-search-box .widget-form-box .form-control {
  height: 52px;
  color: var(--rt-primary-color);
  border: 1px solid #e1e5ee;
}
.widget.widget-search-box .widget-form-box .form-control:focus {
  outline: 0;
  box-shadow: none;
}
.widget.widget-search-box .widget-form-box .form-control::placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.widget.widget-search-box .widget-form-box .item-search {
  position: absolute;
  right: 17px;
  bottom: 10px;
}
.widget.widget-search-box .widget-form-box .item-search i {
  color: var(--rt-primary-color);
  font-size: 18px;
}
.widget.widget-categoery-box {
  border-radius: 6px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  padding: 20px 30px 2px 30px;
}
@media only screen and (max-width: 1199px) {
  .widget.widget-categoery-box {
    padding: 20px;
  }
}
@media only screen and (max-width: 991px) {
  .widget.widget-categoery-box {
    padding: 30px;
  }
}
.widget.widget-categoery-box .categoery-list li {
  display: block;
  border-bottom: 1px solid #e5e5e5;
  padding-left: 15px;
  padding-bottom: 10px;
  margin-bottom: 13px;
  position: relative;
}
.widget.widget-categoery-box .categoery-list li:hover:after {
  background-color: #212121;
}
.widget.widget-categoery-box .categoery-list li:hover a {
  color: var(--rt-primary-color);
  margin-left: 5px;
}
.widget.widget-categoery-box .categoery-list li:hover a span {
  margin-left: 0;
  color: #326ffc;
}
.widget.widget-categoery-box .categoery-list li:after {
  content: "";
  height: 5px;
  width: 5px;
  background-color: #d4d7de;
  border: none;
  border-radius: 50%;
  position: absolute;
  bottom: 20px;
  left: 0;
  transition: all 0.3s ease-in-out;
}
.widget.widget-categoery-box .categoery-list li:last-child {
  border-bottom: none;
}
.widget.widget-categoery-box .categoery-list li a {
  color: #878c9f;
  font-size: 15px;
  transition: all 0.3s ease-in-out;
  display: flex;
  justify-content: space-between;
  margin-left: 0;
}
.widget.widget-categoery-box .categoery-list li a span {
  color: #878c9f;
  font-size: 15px;
  padding-right: 10px;
  transition: all 0.3s ease-in-out;
}
.widget.widget-taglist {
  border-radius: 6px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  padding: 20px 30px 20px 30px;
}
@media only screen and (max-width: 1199px) {
  .widget.widget-taglist {
    padding: 20px;
  }
}
@media only screen and (max-width: 991px) {
  .widget.widget-taglist {
    padding: 30px;
  }
}
.widget.widget-taglist .tag-list li {
  display: inline-block;
  margin-bottom: 20px;
}
.widget.widget-taglist .tag-list li a {
  color: var(--rt-primary-color);
  font-size: 15px;
  background: #dfefeb;
  padding: 10px 20px;
  border: 1px solid #e0e6f5;
  border-radius: 3px;
  transition: all 0.3s ease-in-out;
}
.widget.widget-taglist .tag-list li a:hover {
  color: #ffffff;
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
}
.widget.widget-agent-box1 {
  border-radius: 6px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  padding: 20px 30px 10px 30px;
  position: relative;
}
@media only screen and (max-width: 1199px) {
  .widget.widget-agent-box1 {
    padding: 20px;
  }
}
@media only screen and (max-width: 991px) {
  .widget.widget-agent-box1 {
    padding: 20px 30px 10px 30px;
  }
}
.widget.widget-agent-box1 .small-circle {
  position: absolute;
  top: 23px;
  right: 30px;
}
.widget.widget-agent-box1 .small-circle li {
  display: inline-block;
  background-color: #cfd8e1;
  height: 8px;
  width: 8px;
  border: none;
  border-radius: 50%;
  animation: colorChange 0.9s linear infinite;
}
.widget.widget-agent-box1 .small-circle li:nth-child(1n) {
  animation-delay: 0.2s;
}
.widget.widget-agent-box1 .small-circle li:nth-child(2n) {
  animation-delay: 0.4s;
}
.widget.widget-agent-box1 .small-circle li:nth-child(3n) {
  animation-delay: 0.6s;
}
.widget.widget-agent-box1 .small-circle .active {
  background-color: var(--rt-primary-color);
}
@-webkit-keyframes colorChange {
  0% {
    background-color: #cfd8e1;
  }
  50% {
    background-color: #212121;
  }
  100% {
    background-color: var(--rt-primary-color);
  }
}
@keyframes colorChange {
  0% {
    background-color: #cfd8e1;
  }
  50% {
    background-color: #212121;
  }
  100% {
    background-color: var(--rt-primary-color);
  }
}
.widget-price-range .price-range-wrapper {
  text-align: left;
  padding-top: 20px;
}
.widget-price-range .price-range-wrapper .price-range-filter {
  margin-bottom: 50px;
}
.widget-price-range .price-range-wrapper:after {
  clear: both;
  display: block;
  content: "";
}
.widget-price-range .price-range-wrapper .price-filter-wrap {
  margin-bottom: 20px;
}
.widget-price-range .price-range-wrapper .price-filter-wrap .price-range-select {
  text-align: center;
}
.widget-price-range .price-range-wrapper .price-filter-wrap .price-range-select:after {
  clear: both;
  display: block;
  content: "";
}
.widget-price-range .price-range-wrapper .price-filter-wrap .price-range-select .price-range {
  display: inline-block;
  margin: 0;
  color: #212121;
  font-size: 15px;
  font-weight: 500;
}
.widget-price-range .price-range-wrapper .price-filter-wrap .price-range-select .item-btn {
  cursor: pointer;
  font-size: 15px;
  font-weight: 500;
  color: #ffffff;
  background-color: #111111;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  margin-right: 20px;
}
.widget-price-range .price-range-wrapper .price-filter-wrap .price-range-select .item-btn:focus {
  outline: none;
}
.widget-price-range .price-range-wrapper .price-filter-wrap .price-range-select .range-title {
  color: #212121;
  font-size: 15px;
  font-weight: 500;
}
.widget-price-range .price-range-wrapper .noUi-connect {
  background: var(--rt-primary-color);
  box-shadow: none;
}
.widget-price-range .price-range-wrapper .noUi-horizontal {
  height: 6px;
}
.widget-price-range .price-range-wrapper .noUi-horizontal .noUi-handle {
  top: -10px;
  background: #fff;
  border: none;
  box-shadow: none;
  border-radius: 50%;
  width: 22px;
  height: 22px;
  -webkit-box-shadow: 0px 5px 5px 0px rgba(191, 191, 191, 0.75);
  -moz-box-shadow: 0px 5px 5px 0px rgba(191, 191, 191, 0.75);
  box-shadow: 0px 5px 5px 0px rgba(191, 191, 191, 0.75);
}
.widget-price-range .price-range-wrapper .noUi-target {
  border-radius: 3px;
  box-shadow: none;
  background-color: #e9e9e9;
  border: 0;
}
.widget-price-range .price-range-wrapper .noUi-handle::before {
  display: none;
}
.widget-price-range .price-range-wrapper .noUi-handle::after {
  height: 16px;
  width: 16px;
  background-color: var(--rt-primary-color);
  border-radius: 50%;
  left: 0;
  right: 0;
  margin: 0 auto;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}
.widget-price-range .wid-contact-button {
  margin-bottom: 0 !important;
}
/*=======================================================================
6. Template Page Style
=========================================================================*/
/*------------------- 6.1 About -------------------*/
.about-wrap1 {
  padding: 110px 0px 103px;
  position: relative;
  overflow: hidden;
}
@media only screen and (max-width: 991px) {
  .about-wrap1 {
    padding: 70px 0;
  }
}
@media only screen and (max-width: 575px) {
  .about-wrap1 {
    padding: 50px 0;
  }
}
.about-wrap1 .shape-img1 {
  position: absolute;
  bottom: 0;
  right: 0;
}
.about-wrap1 .shape-img1 img {
  opacity: 0.3;
  filter: brightness(110%) contrast(58%) saturate(68%) blur(0px) hue-rotate(336deg);
}
@media only screen and (max-width: 767px) {
  .about-wrap1 .shape-img1 {
    display: none;
  }
}
.about-wrap2 {
  padding: 100px 0px;
}
@media only screen and (max-width: 991px) {
  .about-wrap2 {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .about-wrap2 {
    padding: 50px 0px;
  }
}
.about-wrap-4 {
  padding: 110px 0px;
  position: relative;
  overflow: hidden;
  border-top: 1px solid #f2f2f2;
}
@media only screen and (max-width: 991px) {
  .about-wrap-4 {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .about-wrap-4 {
    padding: 50px 0;
  }
}
.about-wrap-4 .motion-effects8 {
  position: absolute;
  top: 90px;
  left: 140px;
  filter: brightness(100%) contrast(100%) saturate(100%) blur(0) hue-rotate(288deg);
}
@media only screen and (max-width: 1199px) {
  .about-wrap-4 .motion-effects8 {
    display: none;
  }
}
.about-wrap-4 .motion-effects9 {
  position: absolute;
  bottom: 150px;
  left: 700px;
  filter: grayscale(0);
  opacity: 30%;
}
@media only screen and (max-width: 1199px) {
  .about-wrap-4 .motion-effects9 {
    display: none;
  }
}
.about-wrap-4 .motion-effects10 {
  position: absolute;
  bottom: 185px;
  left: 750px;
  filter: brightness(100%) contrast(100%) saturate(100%) blur(0) hue-rotate(288deg);
}
@media only screen and (max-width: 1199px) {
  .about-wrap-4 .motion-effects10 {
    display: none;
  }
}
.about-wrap-4 .motion-effects11 {
  position: absolute;
  top: -200px;
  right: -180px;
  filter: brightness(100%) contrast(100%) saturate(100%) blur(0) hue-rotate(288deg);
}
@media only screen and (max-width: 767px) {
  .about-wrap-4 .motion-effects11 {
    display: none;
  }
}
.about-wrap-5 {
  padding: 110px 0px;
  position: relative;
  background-color: #eaf7f4;
  overflow: hidden;
}
@media only screen and (max-width: 991px) {
  .about-wrap-5 {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .about-wrap-5 {
    padding: 50px 0px;
  }
}
@media only screen and (max-width: 479px) {
  .about-wrap-5 .item-element-shape {
    display: none;
  }
}
.about-wrap-5 .item-element-shape ul li {
  position: absolute;
}
.about-wrap-5 .item-element-shape ul li:nth-child(1) {
  bottom: 0;
  right: 0;
}
.about-wrap-5 .item-element-shape ul li:nth-child(2) {
  bottom: 70px;
  left: 300px;
}
.about-wrap-5 .item-element-shape ul li:nth-child(3) {
  bottom: 100px;
  left: 0px;
  animation: rtTopBottom ease-in-out forwards infinite;
  animation-duration: 10s;
}
.about-box1 {
  position: relative;
}
.about-box1:hover .item-img a img {
  transform: scale(1.01);
}
.about-box1:hover .play-button a {
  color: red;
}
.about-box1 .motion-effects1 {
  position: absolute;
  top: -45px;
  left: -55px;
  z-index: 2;
  opacity: 50%;
}
@media only screen and (max-width: 767px) {
  .about-box1 .motion-effects1 {
    top: 0px;
    left: 0px;
  }
}
@media only screen and (max-width: 575px) {
  .about-box1 .motion-effects1 {
    display: none;
  }
}
.about-box1 .motion-effects2 {
  position: absolute;
  bottom: 35px;
  left: 10px;
  z-index: 2;
}
@media only screen and (max-width: 575px) {
  .about-box1 .motion-effects2 {
    display: none;
  }
}
.about-box1 .item-img {
  position: relative;
  z-index: 1;
  padding: 55px 0px 55px 55px;
}
@media only screen and (max-width: 479px) {
  .about-box1 .item-img {
    padding: 30px 0px 30px 30px;
  }
}
.about-box1 .item-img:before {
  content: "";
  height: 100%;
  width: 62%;
  background-color: var(--rt-primary-color);
  position: absolute;
  bottom: 0;
  left: 0;
  clip-path: polygon(0 0, 70% 0%, 100% 100%, 0% 100%);
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.about-box1 .item-img a img {
  border-radius: 4px;
  box-shadow: 0px 11px 59px 0px rgba(0, 0, 0, 0.15);
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 991px) {
  .about-box1 .item-img a img {
    width: 100%;
  }
}
.about-box1 .play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateY(-50%) translateX(-50%);
  z-index: 5;
}
.about-box1 .play-button .item-icon i {
  font-size: 18px;
}
.about-box2 {
  padding: 55px 60px 55px 30px;
}
@media only screen and (max-width: 991px) {
  .about-box2 {
    padding: 80px 0px 0px 0px;
  }
}
@media only screen and (max-width: 767px) {
  .about-box2 {
    padding: 30px 0px 0px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .about-box2 {
    text-align: center;
  }
}
.about-box2 .item-heading-left {
  margin-bottom: -12px;
}
.about-box2 .bg-title-wrap {
  top: 0;
  left: 15px;
}
.about-box2 p {
  margin-bottom: 10px;
}
.about-box2 .about-list {
  margin-bottom: 25px;
}
.about-box2 .about-list ul li {
  display: block;
  font-size: 16px;
  font-weight: 400;
  color: #212121;
  margin-bottom: 3px;
}
.about-box2 .about-list ul li:last-child {
  margin-bottom: 0;
}
.about-box2 .about-list ul li i {
  color: var(--rt-primary-color);
  font-size: 16px;
  margin-right: 10px;
}
.about-box2 .about-button .item-btn {
  display: inline-block;
  padding: 7px 30px;
  color: var(--rt-primary-color);
  font-size: 15px;
  font-weight: 500;
  background-color: #eaf7f4;
  border: none;
  border-radius: 4px;
  position: relative;
  z-index: 1;
  transition: all 0.3s ease-in-out;
}
.about-box2 .about-button .item-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background: var(--rt-primary-color);
  position: absolute;
  bottom: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
  border: none;
  border-radius: 4px;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.about-box2 .about-button .item-btn:hover {
  color: #ffffff;
}
.about-box2 .about-button .item-btn:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
}
.about-box3 {
  padding: 0px 70px 0px 40px;
}
@media only screen and (max-width: 1199px) {
  .about-box3 {
    padding: 0;
    margin-bottom: 24px;
  }
}
@media only screen and (max-width: 991px) {
  .about-box3 {
    margin-top: 24px;
  }
}
@media only screen and (max-width: 575px) {
  .about-box3 {
    margin-bottom: 0px;
    text-align: center;
  }
}
.about-box3 .item-subtitle {
  color: var(--rt-primary-color);
  font-size: 15px;
  font-family: "Ubuntu", sans-serif;
  text-transform: uppercase;
  font-weight: 600;
  display: block;
  margin-bottom: 8px;
}
@media only screen and (max-width: 479px) {
  .about-box3 .item-subtitle {
    font-size: 12px;
  }
}
.about-box3 .item-title {
  color: #212121;
  font-size: 32px;
  line-height: 40px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
  margin-bottom: 10px;
}
@media only screen and (max-width: 479px) {
  .about-box3 .item-title {
    font-size: 26px;
    line-height: 36px;
  }
}
@media only screen and (max-width: 320px) {
  .about-box3 .item-title {
    font-size: 22px;
    line-height: 32px;
  }
}
.about-box3 p {
  line-height: 26px;
  color: #70778b;
  margin-bottom: 50px;
}
@media only screen and (max-width: 1199px) {
  .about-box3 p {
    margin-bottom: 20px;
  }
}
@media only screen and (max-width: 575px) {
  .about-box3 .about-layout1 {
    text-align: center;
    margin-bottom: 24px;
  }
}
.about-box3 .about-layout1 .item-img {
  margin-bottom: 18px;
}
.about-box3 .about-layout1 .item-sm-title {
  color: #212121;
  font-size: 22px;
  line-height: 24px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
  margin-bottom: 8px;
}
@media only screen and (max-width: 479px) {
  .about-box3 .about-layout1 .item-sm-title {
    font-size: 20px;
    line-height: 22px;
  }
}
.about-box3 .about-layout1 p {
  line-height: 24px;
  color: #70778b;
  margin-bottom: 0;
}
.about-layout2 {
  padding: 70px 33px 0px 40px;
}
@media only screen and (max-width: 1199px) {
  .about-layout2 {
    padding: 0;
  }
}
@media only screen and (max-width: 575px) {
  .about-layout2 {
    text-align: center;
  }
}
.about-layout2 .item-subtitle {
  color: var(--rt-primary-color);
  font-size: 15px;
  font-family: "Ubuntu", sans-serif;
  text-transform: uppercase;
  font-weight: 600;
  display: block;
  margin-bottom: 8px;
}
.about-layout2 .item-title {
  color: #212121;
  font-size: 32px;
  line-height: 40px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
  margin-bottom: 10px;
  padding-right: 75px;
}
@media only screen and (max-width: 575px) {
  .about-layout2 .item-title {
    padding-right: 0;
    font-size: 26px;
    line-height: 36px;
  }
}
@media only screen and (max-width: 479px) {
  .about-layout2 .item-title {
    font-size: 26px;
    line-height: 36px;
  }
}
@media only screen and (max-width: 320px) {
  .about-layout2 .item-title {
    font-size: 22px;
    line-height: 32px;
  }
}
.about-layout2 p {
  line-height: 26px;
  color: #70778b;
  margin-bottom: 24px;
}
.about-layout2 .progress {
  margin-bottom: 10px;
}
@media only screen and (max-width: 991px) {
  .about-layout3 {
    margin-bottom: 24px;
  }
}
.about-layout3:hover .item-img .play-button a {
  color: red;
}
.about-layout3 .item-img {
  position: relative;
}
.about-layout3 .play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateY(-50%) translateX(-50%);
  z-index: 5;
}
.about-wrap-3 {
  padding: 100px 0px 80px;
  overflow: hidden;
}
@media only screen and (max-width: 991px) {
  .about-wrap-3 {
    padding: 60px 0px 70px;
  }
}
@media only screen and (max-width: 575px) {
  .about-wrap-3 {
    padding: 40px 0px 50px;
  }
}
@media only screen and (max-width: 991px) {
  .about-box5 {
    margin-bottom: 24px;
  }
}
@media only screen and (max-width: 767px) {
  .about-box5 {
    margin-bottom: 0px;
  }
}
.about-box5 .item-heading-left {
  margin-bottom: 0;
}
.about-box5 .item-heading-left .section-title {
  font-size: 36px;
  line-height: 47px;
}
@media only screen and (max-width: 1199px) {
  .about-box5 .item-heading-left .section-title {
    font-size: 32px !important;
    line-height: 36px !important;
  }
}
@media only screen and (max-width: 479px) {
  .about-box5 .item-heading-left .section-title {
    font-size: 24px !important;
    line-height: 30px !important;
  }
}
.about-box5 p {
  color: #788593;
  font-size: 15px;
  font-weight: 400;
}
.about-box5 .about-shape {
  display: flex;
  align-items: center;
  margin-bottom: 24px;
}
@media only screen and (max-width: 320px) {
  .about-box5 .about-shape {
    display: block;
    text-align: center;
  }
}
.about-box5 .about-shape:last-child {
  margin-bottom: 0;
}
.about-box5 .about-shape:hover .choose-shape1 a {
  background-color: var(--rt-primary-color);
}
.about-box5 .about-shape:hover .choose-shape1 a img {
  filter: brightness(0) invert(1);
  animation: toBottomFromTop 0.5s forwards;
}
.about-box5 .about-shape .choose-shape1 {
  margin-bottom: 15px;
}
.about-box5 .about-shape .choose-shape1 a {
  display: inline-block;
  text-align: center;
  line-height: 80px;
  background-color: #eaf7f4;
  height: 80px;
  width: 80px;
  border: none;
  border-radius: 50%;
  transition: all 0.3s ease-in-out;
  animation: toBottomFromTop 0.5s forwards;
}
.about-box5 .about-shape .choose-shape1 a img {
  transition: all 0.3s ease-in-out;
}
.about-box5 .about-shape .item-content {
  margin-left: 20px;
}
.about-box5 .about-shape .item-content .item-title {
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 0;
}
.about-box5 .about-shape .item-content p {
  font-size: 16px;
  padding-right: 35px;
  font-weight: 400;
}
@media only screen and (max-width: 479px) {
  .about-box5 .about-shape .item-content p {
    padding-right: 0;
  }
}
@media only screen and (max-width: 991px) {
  .about-box6 {
    margin-bottom: 24px;
  }
}
.about-box6 .item-heading-left {
  margin-bottom: 0;
}
.about-box6 .item-heading-left .section-subtitle {
  position: relative;
}
.about-box6 .item-heading-left .section-title {
  font-size: 31px;
  line-height: 36px;
}
@media only screen and (max-width: 479px) {
  .about-box6 .item-heading-left .section-title {
    font-size: 26px;
    line-height: 32px;
  }
}
.about-box6 .about-button {
  margin-top: 35px;
}
.about-box6 .about-button .item-btn {
  display: inline-block;
  padding: 13px 30px;
  color: #ffffff;
  font-family: "Roboto", sans-serif;
  font-size: 15px;
  font-weight: 500;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 4px;
  position: relative;
  z-index: 1;
  transition: all 0.3s ease-in-out;
}
.about-box6 .about-button .item-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background: rgba(0, 0, 0, 0.15);
  position: absolute;
  bottom: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
  border: none;
  border-radius: 4px;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.about-box6 .about-button .item-btn:hover {
  color: #ffffff;
}
.about-box6 .about-button .item-btn:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
}
.about-box7 {
  position: relative;
}
@media (min-width: 1200px) {
  .about-box7 {
    margin-right: -210px;
  }
}
.about-box7 .item-img {
  margin-bottom: 24px;
  text-align: right;
}
@media only screen and (max-width: 991px) {
  .about-box7 .item-img {
    text-align: left;
    width: 100%;
  }
}
@media only screen and (max-width: 1199px) {
  .about-box7 .item-img img {
    width: 100%;
  }
}
.about-box7 .about-img-style-3 {
  text-align: right;
}
@media only screen and (max-width: 991px) {
  .about-box7 .about-img-style-3 {
    text-align: left;
  }
}
@media only screen and (max-width: 1199px) {
  .about-box7 .about-img-style-3 img {
    width: 100%;
  }
}
.about-box7 .about-img-style-4 {
  text-align: right;
}
@media only screen and (max-width: 1199px) {
  .about-box7 .about-img-style-4 {
    margin-top: 24px;
  }
}
@media only screen and (max-width: 991px) {
  .about-box7 .about-img-style-4 {
    text-align: left;
  }
}
@media only screen and (max-width: 1199px) {
  .about-box7 .about-img-style-4 img {
    width: 100%;
  }
}
.about-box7 .about-img-style-5 {
  position: absolute;
  top: 0px;
  left: -100px;
}
@media only screen and (max-width: 1199px) {
  .about-box7 .about-img-style-5 {
    bottom: -30px;
    top: auto;
  }
}
@media only screen and (max-width: 991px) {
  .about-box7 .about-img-style-5 {
    left: 0;
  }
}
@media only screen and (max-width: 520px) {
  .about-box7 .about-img-style-5 {
    display: none;
  }
}
.about-img-style-1 {
  position: relative;
  margin-top: 40px;
}
.about-img-style-1 .shape-img1 {
  position: absolute;
  top: -60px;
  left: -60px;
  animation-duration: 10s;
}
@media only screen and (max-width: 991px) {
  .about-img-style-1 .shape-img1 {
    left: -20px;
  }
}
@media only screen and (max-width: 767px) {
  .about-img-style-1 .shape-img1 {
    display: none;
  }
}
.about-img-style-2 {
  margin-top: 0px;
  margin-bottom: 0px;
  margin-left: 20px;
}
.about-box8 {
  display: flex;
  position: relative;
}
@media (min-width: 1200px) {
  .about-box8 {
    margin-right: -105px;
  }
}
.about-box-9 {
  position: relative;
  z-index: 1;
}
@media (max-width: 991px) {
  .about-box-9 {
    margin-bottom: 30px;
  }
}
@media only screen and (max-width: 575px) {
  .about-box-10 {
    text-align: center;
  }
}
.about-box-10 .item-heading-left .section-title {
  color: #0E2E50;
  font-size: 36px;
  margin-bottom: 10px;
}
@media only screen and (max-width: 1199px) {
  .about-box-10 .item-heading-left .section-title {
    font-size: 32px;
  }
}
@media only screen and (max-width: 479px) {
  .about-box-10 .item-heading-left .section-title {
    font-size: 26px;
  }
}
.about-box-10 .item-heading-left .bg-title-wrap {
  top: 50px;
}
.about-box-10 .about-svg-shape {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}
@media only screen and (max-width: 575px) {
  .about-box-10 .about-svg-shape {
    justify-content: center;
  }
}
.about-box-10 .about-svg-shape .item-content {
  margin-left: 10px;
}
.about-box-10 .about-svg-shape .item-content .item-content__text .item-k {
  color: #0E2E50;
  font-size: 36px;
  font-weight: 700;
}
.about-box-10 .about-svg-shape .item-content .item-content__text .item-k .counterUp {
  color: #0E2E50;
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 7px;
}
.about-box-10 .about-svg-shape .item-content p {
  margin-bottom: 0;
}
.about-box-10 .about-button-2 {
  text-align: left;
  margin-top: 30px;
}
@media only screen and (max-width: 575px) {
  .about-box-10 .about-button-2 {
    text-align: center;
  }
}
.about-img-style-6 {
  margin-top: 20px;
}
/*------------------- 6.2 Action Wrap -------------------*/
.action-wrap1 {
  padding: 100px 0px 110px;
}
@media only screen and (max-width: 991px) {
  .action-wrap1 {
    padding: 40px 0px 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .action-wrap1 {
    padding: 20px 0px 50px 0px;
  }
}
.action-box1 {
  padding: 40px;
  position: relative;
}
@media only screen and (max-width: 1199px) {
  .action-box1 {
    padding: 30px;
  }
}
.action-box1 .action-layout {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
@media only screen and (max-width: 767px) {
  .action-box1 .action-layout {
    display: inline-block;
  }
}
.action-box1 .action-layout .item-title {
  display: flex;
}
@media only screen and (max-width: 767px) {
  .action-box1 .action-layout .item-title {
    display: inline-block;
    text-align: center;
  }
}
.action-box1 .action-layout .item-title .item-icon i {
  color: var(--rt-primary-color);
  font-size: 24px;
  height: 55px;
  width: 55px;
  background-color: #ffffff;
  border: none;
  border-radius: 50%;
  display: inline-block;
  text-align: center;
  line-height: 55px;
}
.action-box1 .action-layout .item-title .item-head {
  margin-left: 15px;
}
.action-box1 .action-layout .item-title .item-head h3 {
  font-size: 30px;
  font-weight: 500;
  line-height: 36px;
  margin-bottom: 0;
}
@media only screen and (max-width: 479px) {
  .action-box1 .action-layout .item-title .item-head h3 {
    font-size: 26px;
    line-height: 30px;
  }
}
.action-box1 .action-layout .item-title .item-head p {
  margin-bottom: 0;
}
@media only screen and (max-width: 767px) {
  .action-box1 .action-layout .call-button {
    text-align: center;
    margin-top: 20px;
  }
}
.action-box1 .action-layout .call-button .call-btn {
  display: inline-block;
  padding: 6px 20px;
  background-color: var(--rt-primary-color);
  font-size: 15px;
  font-weight: 600;
  color: #ffffff;
  border: none;
  border-radius: 4px;
  z-index: 1;
  transition: all 0.3s ease-in-out;
  position: relative;
}
.action-box1 .action-layout .call-button .call-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background: rgba(0, 0, 0, 0.15);
  position: absolute;
  bottom: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
  border: none;
  border-radius: 4px;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.action-box1 .action-layout .call-button .call-btn:hover {
  color: #ffffff;
}
.action-box1 .action-layout .call-button .call-btn:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
}
/*------------------- 6.3 Agent -------------------*/
.agent-wrap1 {
  padding: 55px 0px 80px;
  background-color: #eaf7f4;
}
@media only screen and (max-width: 575px) {
  .agent-wrap1 {
    padding: 40px 0px 50px;
  }
}
.agent-wrap2 {
  padding: 55px 0px 75px 0px;
  background-color: #eaf7f4;
}
@media only screen and (max-width: 991px) {
  .agent-wrap2 {
    padding: 55px 0px 70px;
  }
}
@media only screen and (max-width: 575px) {
  .agent-wrap2 {
    padding: 50px 0px;
  }
}
.agent-wrap3 {
  padding: 55px 0px 50px;
}
.agency-box1 {
  padding: 24px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  border-radius: 8px;
  display: flex;
  margin-bottom: 24px;
}
@media only screen and (max-width: 767px) {
  .agency-box1 {
    display: block;
    text-align: center;
  }
}
.agency-box1 .item-img {
  position: relative;
}
.agency-box1 .category-box {
  position: absolute;
  top: 16px;
  left: 15px;
}
@media only screen and (max-width: 767px) {
  .agency-box1 .category-box {
    left: 50%;
    transform: translateX(-95%);
  }
}
.agency-box1 .category-box .item-category {
  background-color: #ffffff;
  padding: 8px 20px;
  display: inline-block;
  border: none;
  border-radius: 4px;
  color: var(--rt-primary-color);
  line-height: 1;
  font-size: 13px;
  font-weight: 500;
  position: relative;
  transition: all 0.3s ease-in-out;
}
.agency-box1 .category-box .item-category:hover {
  background-color: var(--rt-primary-color);
}
.agency-box1 .category-box .item-category:hover a {
  color: #fff;
}
.agency-box1 .category-box .item-category a {
  color: var(--rt-primary-color);
  transition: all 0.3s ease-in-out;
}
.agency-box1 .category-box .item-category:after {
  content: "";
  height: 5px;
  width: 5px;
  background: #bdc5da;
  position: absolute;
  bottom: 12px;
  left: 10px;
  border: none;
  border-radius: 50%;
}
.agency-box1 .item-content {
  margin-left: 24px;
  flex: 1;
}
@media only screen and (max-width: 767px) {
  .agency-box1 .item-content {
    margin-left: 0;
    margin-top: 20px;
  }
}
.agency-box1 .item-content .verified-area {
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 767px) {
  .agency-box1 .item-content .verified-area {
    display: block;
  }
}
.agency-box1 .item-content .verified-area .item-title h3 {
  font-size: 20px;
  font-weight: 600;
  line-height: 36px;
  margin-bottom: 0;
}
.agency-box1 .item-content .verified-area .item-title h3 a {
  color: #212121;
}
.agency-box1 .item-content .entry-meta-box {
  display: flex;
  align-items: center;
  border-bottom: 1px solid #e5e5e5;
  padding: 5px 0px 12px 0px;
  margin-bottom: 18px;
  justify-content: space-between;
}
@media only screen and (max-width: 1199px) {
  .agency-box1 .item-content .entry-meta-box {
    display: block;
    padding: 0px 0px 10px;
  }
}
@media only screen and (max-width: 767px) {
  .agency-box1 .item-content .entry-meta-box {
    margin-bottom: 15px;
  }
}
.agency-box1 .item-content .entry-meta-box .item-location {
  font-size: 14px;
  font-weight: 400;
  margin-right: 20px;
  color: #788593;
}
@media only screen and (max-width: 767px) {
  .agency-box1 .item-content .entry-meta-box .item-location {
    margin-right: 0;
  }
}
.agency-box1 .item-content .entry-meta-box .item-location i {
  color: var(--rt-primary-color);
  margin-right: 5px;
}
.agency-box1 .item-content .entry-meta-box .viws-part {
  font-size: 14px;
  font-weight: 400;
  margin-right: 35px;
  color: #788593;
}
@media only screen and (max-width: 767px) {
  .agency-box1 .item-content .entry-meta-box .viws-part {
    margin-right: 0;
  }
}
.agency-box1 .item-content .entry-meta-box .viws-part i {
  color: var(--rt-primary-color);
  margin-right: 5px;
}
.agency-box1 .item-content p {
  color: #788593;
  line-height: 24px;
}
@media only screen and (max-width: 767px) {
  .agency-box1 .item-content p {
    margin-bottom: 15px;
  }
}
.agency-box1 .item-content .item-details {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
@media only screen and (max-width: 374px) {
  .agency-box1 .item-content .item-details {
    display: block;
  }
}
@media only screen and (max-width: 374px) {
  .agency-box1 .item-content .item-details .item-button {
    margin-bottom: 10px;
  }
}
.agency-box1 .item-content .item-details .item-button:hover .item-btn {
  color: #ffffff;
}
.agency-box1 .item-content .item-details .item-button:hover .item-btn:after {
  width: 100%;
  left: 0;
  visibility: visible;
  opacity: 1;
}
.agency-box1 .item-content .item-details .item-button .item-btn {
  background: #dfefeb;
  padding: 0px 20px;
  display: inline-block;
  height: 36px;
  border: none;
  border-radius: 4px;
  color: var(--rt-primary-color);
  font-size: 15px;
  line-height: 36px;
  font-weight: 500;
  position: relative;
  z-index: 1;
  transition: all 0.3s ease-in-out;
}
.agency-box1 .item-content .item-details .item-button .item-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background: var(--rt-primary-color);
  position: absolute;
  bottom: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
  border: none;
  border-radius: 4px;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.agency-box1 .item-content .item-details .react-icon ul li {
  display: inline-block;
}
.agency-box1 .item-content .item-details .react-icon ul li a {
  color: var(--rt-primary-color);
  background-color: #dfefeb;
  display: inline-block;
}
.agency-box1 .item-content .item-details .react-icon ul li a i {
  font-size: 16px;
  background-color: #dfefeb;
  border-radius: 4px;
  height: 35px;
  width: 35px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease-in-out;
  overflow: hidden;
}
.agency-box1 .item-content .item-details .react-icon ul li a i:before {
  transition: all 0.3s ease-in-out;
  color: var(--rt-primary-color);
}
.agency-box1 .item-content .item-details .react-icon ul li a i:hover {
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
}
.agency-box1 .item-content .item-details .react-icon ul li a i:hover:before {
  -webkit-animation: toBottomFromTop 0.5s forwards;
  animation: toBottomFromTop 0.5s forwards;
  color: #ffffff;
}
.agency-box2 {
  padding: 40px;
  background-color: transparent;
  box-shadow: none;
  margin-bottom: 50px;
  align-items: center;
  z-index: 2;
  background-image: url("dashbord/img/team/team11.jpg");
  background-repeat: no-repeat;
  background-position: center;
  position: relative;
  z-index: 1;
}
@media only screen and (max-width: 991px) {
  .agency-box2 {
    padding: 40px 40px 30px 40px;
  }
}
.agency-box2:before {
  content: "";
  height: 100%;
  width: 100%;
  background-color: #000;
  opacity: 60%;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: -1;
}
@media only screen and (max-width: 991px) {
  .agency-box2 {
    display: block;
    background-size: cover;
  }
}
@media only screen and (max-width: 991px) {
  .agency-box2 .item-img {
    text-align: center;
    margin-bottom: 20px;
  }
}
@media only screen and (max-width: 991px) {
  .agency-box2 .category-box {
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
  }
}
@media only screen and (max-width: 320px) {
  .agency-box2 .category-box .item-category {
    padding: 2px 15px;
  }
}
@media only screen and (max-width: 991px) {
  .agency-box2 .item-content {
    margin-left: 0;
  }
}
@media only screen and (max-width: 991px) {
  .agency-box2 .item-content .verified-area {
    justify-content: center;
  }
}
.agency-box2 .item-content .verified-area .item-title h3 {
  font-size: 20px;
  font-weight: 500;
}
@media only screen and (max-width: 991px) {
  .agency-box2 .item-content .verified-area .item-title h3 {
    margin-bottom: 10px;
  }
}
.agency-box2 .item-content .verified-area .item-title h3 a {
  color: #ffffff;
}
.agency-box2 .item-content .entry-meta-box {
  display: flex;
  align-items: center;
  padding: 10px 0px;
  border: 0;
  margin-bottom: 20px;
}
@media only screen and (max-width: 991px) {
  .agency-box2 .item-content .entry-meta-box {
    justify-content: center;
    padding: 0;
    margin-bottom: 0;
  }
}
@media only screen and (max-width: 767px) {
  .agency-box2 .item-content .entry-meta-box {
    display: block;
  }
}
.agency-box2 .item-content .entry-meta-box .item-location {
  color: #ffffff;
  font-size: 15px;
  font-weight: 400;
  margin-right: 20px;
}
.agency-box2 .item-content .entry-meta-box .item-location i {
  color: var(--rt-primary-color);
  margin-right: 5px;
}
.agency-box2 .item-content .entry-meta-box .viws-part {
  color: #ffffff;
  font-size: 15px;
  font-weight: 400;
  margin-right: 35px;
}
.agency-box2 .item-content .entry-meta-box .viws-part i {
  color: var(--rt-primary-color);
  margin-right: 5px;
}
.agency-box2 .item-content .entry-meta-box .item-rating ul li {
  display: inline-block;
  font-size: 15px;
}
.agency-box2 .item-content .entry-meta-box .item-rating ul li i {
  color: #fc9f32;
}
.agency-box2 .item-content .entry-meta-box .item-rating ul .rating-count {
  color: #ffffff;
}
.tab-style-1 {
  padding: 45px 0px 5px 0px;
}
.tab-style-1 .nav-tabs {
  border-bottom: 0;
}
@media only screen and (max-width: 768px) {
  .tab-style-1 .nav-tabs {
    justify-content: center;
  }
}
.tab-style-1 .nav-tabs .nav-item {
  display: inline-block;
  margin-right: 10px;
}
.tab-style-1 .nav-tabs .nav-item:last-child {
  margin-right: 0;
}
.tab-style-1 .nav-tabs .nav-item .nav-link {
  color: #607695;
  display: inline-block;
  font-size: 18px;
  font-weight: 600;
  font-family: "Ubuntu", sans-serif;
  padding: 15px 40px;
  min-width: 172px;
  border: 1px solid #e5e5e5;
  border-radius: 5px;
  background-color: #fff;
  line-height: 24px;
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 411px) {
  .tab-style-1 .nav-tabs .nav-item .nav-link {
    min-width: auto;
    padding: 10px 25px;
  }
}
.tab-style-1 .nav-tabs .nav-item .active {
  background-color: var(--rt-primary-color);
  color: #fff;
  border-color: var(--rt-primary-color);
}
@media only screen and (max-width: 991px) {
  .tab-style-1 .property-wrap4 {
    padding: 20px 0px 0px 0px;
    margin: 0;
  }
}
.tab-style-1 .reviews-area {
  padding: 30px 30px 40px 30px;
  border: 1px solid #e5e5e5;
  border-radius: 8px;
  background-color: #fff;
  margin-top: 24px;
}
.tab-style-1 .reviews-area .reviews-comment .heading-layout h4 {
  font-size: 20px;
  font-weight: 600;
}
@media only screen and (max-width: 767px) {
  .tab-style-1 .reviews-area .reviews-comment .heading-layout h4 {
    text-align: center;
  }
}
.tab-style-1 .reviews-area .reviews-comment .media {
  margin-bottom: 32px;
  border-bottom: 1px solid #e5e5e5;
  padding-bottom: 12px;
}
@media only screen and (max-width: 767px) {
  .tab-style-1 .reviews-area .reviews-comment .media {
    display: block;
    text-align: center;
  }
}
.tab-style-1 .reviews-area .reviews-comment .media:nth-child(odd) {
  padding-left: 40px;
}
@media only screen and (max-width: 767px) {
  .tab-style-1 .reviews-area .reviews-comment .media:nth-child(odd) {
    padding-left: 0px;
  }
}
@media only screen and (max-width: 767px) {
  .tab-style-1 .reviews-area .reviews-comment .media .item-img {
    margin-bottom: 20px;
  }
}
.tab-style-1 .reviews-area .reviews-comment .media .item-img img {
  height: 100px;
  width: 100px;
  border: none;
  border-radius: 50%;
}
.tab-style-1 .reviews-area .reviews-comment .media .media-body {
  margin-left: 20px;
}
@media only screen and (max-width: 767px) {
  .tab-style-1 .reviews-area .reviews-comment .media .media-body {
    margin-left: 0;
  }
}
.tab-style-1 .reviews-area .reviews-comment .media .media-body .item-title {
  font-size: 18px;
  font-weight: 500;
  margin-bottom: 0;
}
.tab-style-1 .reviews-area .reviews-comment .media .media-body .rating-area {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}
@media only screen and (max-width: 767px) {
  .tab-style-1 .reviews-area .reviews-comment .media .media-body .rating-area {
    display: block;
    text-align: center;
  }
}
.tab-style-1 .reviews-area .reviews-comment .media .media-body .rating-area .item-date {
  color: #70778b;
  font-size: 13px;
  font-weight: 500;
}
.tab-style-1 .reviews-area .reviews-comment .media .media-body .rating-area .item-rating {
  margin-left: 55px;
}
@media only screen and (max-width: 767px) {
  .tab-style-1 .reviews-area .reviews-comment .media .media-body .rating-area .item-rating {
    margin-left: 0;
  }
}
.tab-style-1 .reviews-area .reviews-comment .media .media-body .rating-area .item-rating li {
  display: inline-block;
  color: #fc9f32;
  font-size: 13px;
}
.tab-style-1 .reviews-area .reviews-comment .media .media-body p {
  color: #878c9f;
}
@media only screen and (max-width: 767px) {
  .tab-style-1 .reviews-area .reviews-comment .media .media-body p {
    margin-bottom: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .tab-style-1 .reviews-area .reviews-reply {
    text-align: center;
  }
}
.tab-style-1 .reviews-area .reviews-reply .item-title {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 10px;
}
@media only screen and (max-width: 767px) {
  .tab-style-1 .reviews-area .reviews-reply .item-title {
    margin-top: -10px;
  }
}
.tab-style-1 .reviews-area .reviews-reply .item-rating {
  margin-bottom: 24px;
}
.tab-style-1 .reviews-area .reviews-reply .item-rating li {
  display: inline-block;
  color: #fc9f32;
  font-size: 18px;
}
.tab-style-1 .reviews-area .reviews-reply .form-group .form-control {
  height: 52px;
  background-color: #eaf7f4;
  color: var(--rt-primary-color);
  border-color: #e5e5e5;
}
.tab-style-1 .reviews-area .reviews-reply .form-group .form-control:focus {
  box-shadow: none;
  outline: 0;
}
.tab-style-1 .reviews-area .reviews-reply .form-group .form-text {
  width: 100%;
  background-color: #eaf7f4;
  font-size: 13px;
  color: #878c9f;
  font-weight: 500;
  border-color: #e5e5e5;
  padding: 15px 0px 0px 12px;
  border-radius: 4px;
  margin: 0;
}
.tab-style-1 .reviews-area .reviews-reply .form-group .form-text:focus {
  box-shadow: none;
  outline: 0;
}
.tab-style-1 .reviews-area .reviews-reply .form-group .filter-button .search-btn {
  width: 100%;
  text-align: center;
}
.tab-style-1 .reviews-area .reviews-reply ::placeholder {
  font-size: 15px;
  line-height: 30px;
  color: #878c9f;
  font-weight: 400;
}
.tab-style-1 .reviews-area .reviews-reply .form-button {
  background-color: var(--rt-primary-color);
  padding: 12px 35px;
  display: inline-block;
  border: none;
  border-radius: 4px;
  color: #ffffff;
  font-size: 15px;
  font-weight: 500;
  position: relative;
  z-index: 1;
  box-shadow: 0px 9px 18px 0px rgba(185, 191, 203, 0.38);
  transition: all 0.3s ease-in-out;
}
.tab-style-1 .reviews-area .reviews-reply .form-button:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
}
.tab-style-1 .reviews-area .reviews-reply .form-button:after {
  content: "";
  height: 100%;
  width: 0;
  background-color: rgba(0, 0, 0, 0.15);
  border: none;
  border-radius: 4px;
  opacity: 0;
  visibility: hidden;
  position: absolute;
  left: 0;
  bottom: 0;
  transition: all 0.3s ease-in-out;
  z-index: -1;
}
.tab-style-2 {
  padding: 0;
}
.tab-style-2 .nav-tabs {
  margin-bottom: 15px;
}
@media only screen and (max-width: 767px) {
  .tab-style-2 .nav-tabs {
    display: block !important;
  }
}
@media only screen and (max-width: 767px) {
  .tab-style-2 .nav-tabs .nav-item {
    display: block !important;
    margin-bottom: 5px;
    text-align: center;
  }
}
.tab-style-3 {
  padding: 0;
}
.single-about-agency {
  padding: 30px;
  border: 1px solid #e5e5e5;
  border-radius: 6px;
  background-color: #fff;
}
.single-about-agency .item-title {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 14px;
}
.single-about-agency p {
  color: #788593;
  font-size: 16px;
}
/*------------------- 6.4 banner -------------------*/
.banner-collection1 {
  background-color: #eaf7f4;
  position: relative;
}
@media only screen and (max-width: 991px) {
  .banner-collection1 {
    padding: 30px 40px;
    overflow: hidden;
  }
}
.banner-collection1 .shape-img1 {
  position: absolute;
  bottom: 0;
  left: 0;
  opacity: 0.3;
  filter: brightness(110%) contrast(58%) saturate(68%) blur(0px) hue-rotate(336deg);
}
.banner-collection1 .shape-img2 {
  position: absolute;
  bottom: 0;
  right: 0;
  opacity: 0.3;
  filter: brightness(110%) contrast(58%) saturate(68%) blur(0px) hue-rotate(336deg);
}
.banner-collection2 {
  background-color: #fff;
}
.banner-bg {
  background-color: #eaf7f4;
  border-radius: 8px;
  padding: 0px 100px;
}
@media only screen and (max-width: 991px) {
  .banner-bg {
    padding: 30px 40px 30px 40px;
  }
}
@media only screen and (max-width: 767px) {
  .banner-bg {
    text-align: center;
  }
}
.banner-box1 {
  display: flex;
  align-items: center;
}
.banner-box1 .item-img {
  position: relative;
  z-index: 1;
}
@media only screen and (max-width: 991px) {
  .banner-box1 .item-img {
    margin-bottom: 20px;
    text-align: center;
    display: none;
  }
}
.banner-box1 .item-img img.img-bg-space {
  margin-top: -60px;
}
.banner-box1 .motion-effects3 {
  position: absolute;
  left: -25px;
  bottom: 22px;
  z-index: -1;
  filter: brightness(100%) contrast(100%) saturate(100%) blur(0px) hue-rotate(317deg);
}
.banner-box1 .motion-effects4 {
  position: absolute;
  right: -30px;
  bottom: 5px;
  z-index: -1;
}
.banner-box1 .motion-effects5 {
  position: absolute;
  right: -30px;
  top: 20px;
  z-index: -1;
}
.banner-box1 .item-content {
  margin-left: 75px;
}
@media only screen and (max-width: 1199px) {
  .banner-box1 .item-content {
    flex: 1;
  }
}
@media only screen and (max-width: 991px) {
  .banner-box1 .item-content {
    margin-left: 0;
  }
}
@media only screen and (max-width: 767px) {
  .banner-box1 .item-content {
    text-align: center;
  }
}
.banner-box1 .item-content .heading-title {
  font-size: 32px;
  font-weight: 600;
  line-height: 36px;
  margin-bottom: 5px;
}
@media only screen and (max-width: 991px) {
  .banner-box1 .item-content .heading-title {
    margin-bottom: 15px;
  }
}
@media only screen and (max-width: 479px) {
  .banner-box1 .item-content .heading-title {
    font-size: 26px;
    margin-bottom: 10px;
  }
}
.banner-box1 .item-content p {
  margin-bottom: 0;
}
.banner-button {
  text-align: right;
}
@media only screen and (max-width: 767px) {
  .banner-button {
    text-align: center;
    margin-top: 20px;
    margin-bottom: 10px;
  }
}
.banner-button .banner-btn {
  display: inline-block;
  padding: 10px 45px;
  color: #ffffff;
  font-family: "Roboto", sans-serif;
  font-size: 15px;
  font-weight: 500;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 4px;
  box-shadow: 0px 9px 18px 0px rgba(185, 191, 203, 0.38);
  position: relative;
  z-index: 1;
}
.banner-button .banner-btn:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
  transition: all 0.3s ease-in-out;
}
.banner-button .banner-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background: rgba(0, 0, 0, 0.15);
  position: absolute;
  bottom: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
  border: none;
  border-radius: 4px;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.banner-collection3 {
  background-image: url({{asset('assets/assets/dashbord/img/banner-1.jpg')}});
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 600px;
  background-position: center center;
  padding-top: 55px;
}
@media only screen and (min-width: 1200px) {
  .banner-collection3 .item-heading-center {
    margin: 0 auto;
    width: 50%;
  }
}
.banner-collection3 .item-heading-center .section-title {
  color: #fff;
  font-size: 48px;
  line-height: 1.2;
  margin-bottom: 0;
}
@media only screen and (max-width: 1199px) {
  .banner-collection3 .item-heading-center .section-title {
    font-size: 42px;
    line-height: 1.2;
  }
}
@media only screen and (max-width: 991px) {
  .banner-collection3 .item-heading-center .section-title {
    font-size: 36px;
  }
}
@media only screen and (max-width: 767px) {
  .banner-collection3 .item-heading-center .section-title {
    font-size: 30px;
  }
}
@media only screen and (max-width: 479px) {
  .banner-collection3 .item-heading-center .section-title {
    font-size: 28px;
  }
}
.banner-collection3 .item-heading-center .bg-title-wrap {
  top: 50px;
}
.banner-collection3 .item-heading-center .banner-button {
  text-align: center;
  margin-top: 20px;
}
.banner-collection4 {
  background-color: #0E2E50;
  padding: 100px 0px 0px 0px;
  position: relative;
  overflow: hidden;
}
@media only screen and (max-width: 1199px) {
  .banner-collection4 {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 991px) {
  .banner-collection4 {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .banner-collection4 {
    padding: 50px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .banner-collection4 .item-element {
    display: none;
  }
}
.banner-collection4 .item-element ul li {
  position: absolute;
}
.banner-collection4 .item-element ul li:nth-child(1) {
  bottom: 0;
  left: 0;
}
.banner-collection4 .item-element ul li:nth-child(2) {
  bottom: 150px;
  right: 13%;
}
.banner-collection4 .item-element ul li:nth-child(3) {
  bottom: 15%;
  right: -15%;
  animation: rtTopBottom ease-in-out forwards infinite;
  animation-duration: 10s;
}
@-webkit-keyframes rtTopBottom {
  50% {
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
  }
}
.banner-box-2 {
  position: relative;
  z-index: 1;
}
@media only screen and (min-width: 1200px) {
  .banner-box-2 .item-img {
    margin-left: -90px;
  }
}
@media only screen and (max-width: 1199px) {
  .banner-box-2 .item-img {
    top: 120px;
    left: 0;
    position: absolute;
  }
}
@media only screen and (max-width: 991px) {
  .banner-box-2 .item-img {
    position: inherit;
    display: none;
  }
}
.banner-content-2 {
  padding: 50px 0px 0px 0px;
}
@media only screen and (min-width: 1200px) {
  .banner-content-2 {
    margin-left: -70px;
  }
}
@media only screen and (max-width: 991px) {
  .banner-content-2 {
    padding: 0;
    margin-bottom: 30px;
  }
}
.banner-content-2 .item-heading-left {
  margin-bottom: 40px;
}
.banner-content-2 .item-heading-left .section-title {
  color: #fff;
  font-size: 36px;
  margin-bottom: 8px;
}
@media only screen and (min-width: 1200px) {
  .banner-content-2 .item-heading-left .section-title {
    width: 90%;
  }
}
@media only screen and (max-width: 1199px) {
  .banner-content-2 .item-heading-left .section-title {
    font-size: 32px;
  }
}
@media only screen and (max-width: 479px) {
  .banner-content-2 .item-heading-left .section-title {
    font-size: 26px;
    line-height: 1.2;
  }
}
.banner-content-2 .item-heading-left .item-para {
  margin-bottom: 0;
}
.banner-content-2 .item-heading-left p {
  font-weight: 300;
  color: #D2E2F3;
}
.banner-content-2 .service-box-1 {
  display: flex;
  gap: 15px;
  position: relative;
}
@media only screen and (max-width: 575px) {
  .banner-content-2 .service-box-1 {
    justify-content: center;
  }
}
.banner-content-2 .service-box-1::after {
  height: 61px;
  width: 1px;
  content: "";
  position: absolute;
  top: 0;
  right: -35px;
  background-color: #395B80;
}
@media only screen and (max-width: 991px) {
  .banner-content-2 .service-box-1::after {
    right: 50px;
  }
}
@media only screen and (max-width: 767px) {
  .banner-content-2 .service-box-1::after {
    display: none;
  }
}
.banner-content-2 .service-box-1 .service-icon i {
  display: inline-flex;
  width: 40px;
  height: 40px;
  align-items: center;
  justify-content: center;
  font-size: 16px;
  border-radius: 50%;
  color: #FFF;
  background-color: #395B80;
}
.banner-content-2 .service-box-1 .service-content .info-title {
  color: #D2E2F3;
  font-family: "Ubuntu", Sans-serif;
  font-size: 18px;
  font-weight: 400;
  margin: -5px 0 -5px 0;
}
.banner-content-2 .service-box-1 .service-content p {
  color: #D2E2F3;
  font-family: "Ubuntu", Sans-serif;
  font-size: 18px;
  font-weight: 500;
}
@media only screen and (max-width: 1199px) {
  .banner-content-2 .service-box-1 .service-content p {
    font-size: 16px;
  }
}
.banner-content-2 .service-box-2 {
  margin-left: 45px;
}
@media only screen and (max-width: 991px) {
  .banner-content-2 .service-box-2 {
    margin-left: 0;
  }
}
.banner-content-2 .service-box-2:after {
  display: none;
}
.banner-content-2 .banner-button {
  text-align: left;
  margin-top: 17px;
}
@media only screen and (max-width: 575px) {
  .banner-content-2 .banner-button {
    text-align: center;
  }
}
.banner-content-2 .banner-button .banner-btn {
  box-shadow: none;
}
.banner-img-style-2 {
  position: relative;
  z-index: 1;
}
@media only screen and (min-width: 1200px) {
  .banner-img-style-2 {
    margin-left: -90px;
    margin-right: -90px;
  }
}
/*------------------- 6.5 Banner Search -------------------*/
.banner-search-wrap {
  margin: 0px 110px;
}
@media only screen and (max-width: 991px) {
  .banner-search-wrap {
    margin: 0;
  }
}
.banner-search-wrap-2 {
  margin: 0;
}
.banner-area .banner-search-wrap {
  margin-top: 24px;
  position: relative;
}
.dropdown-filter {
  cursor: pointer;
  position: relative;
}
.dropdown-filter:after {
  content: "";
  height: 100%;
  width: 1px;
  background-color: #e8e8e8;
  position: absolute;
  border: none;
  right: 0;
  bottom: 0;
}
@media only screen and (max-width: 767px) {
  .dropdown-filter:after {
    display: none;
  }
}
.dropdown-filter span {
  width: 180px !important;
  line-height: 60px;
  margin: 0 20px 0 20px;
  width: 150px;
}
.dropdown-filter span i {
  color: var(--rt-primary-color);
}
.explore__form-checkbox-list.full-filter {
  top: 41px;
  width: 100%;
}
@media only screen and (max-width: 767px) {
  .explore__form-checkbox-list.full-filter {
    top: 260px;
  }
}
.explore__form-checkbox-list.full-filter.filter-block {
  opacity: 1;
  z-index: 999;
  visibility: visible;
}
.explore__form-checkbox-list.full-filter {
  opacity: 0;
  -webkit-transition: 0.8s;
  transition: 0.8s;
  z-index: 9;
  visibility: hidden;
  position: absolute;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 60px;
  box-shadow: 0 1px 10px 0 rgba(0, 0, 0, 0.2);
}
@media only screen and (max-width: 991px) {
  .explore__form-checkbox-list.full-filter {
    padding: 20px 40px;
  }
}
.rld-main-search {
  -webkit-box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.1);
  border-radius: 6px;
  margin-bottom: 24px;
  background-color: #fff;
  position: relative;
}
@media only screen and (max-width: 767px) {
  .rld-main-search {
    margin-right: 0;
    background-color: transparent;
  }
}
.rld-main-search .box {
  display: block;
}
.rld-main-search2 {
  box-shadow: none;
  border-radius: 0px;
  margin-bottom: 24px;
  background-color: transparent;
  position: relative;
  margin-right: 0px;
}
.rld-main-search2 .dropdown-filter {
  cursor: pointer;
  position: relative;
  border: 1px solid #e8e8e8;
  margin: 0;
  height: 50px;
  width: 50px;
  text-align: center;
  display: inline-block;
}
.rld-main-search2 .dropdown-filter span {
  margin: 0;
  line-height: 48px;
}
.rld-main-search2 .dropdown-filter:after {
  display: none;
}
.rld-main-search3 {
  margin-right: 0;
  box-shadow: none;
  border-radius: 0px;
  margin-bottom: 24px;
  background-color: transparent;
  position: relative;
  margin-top: 12px;
}
.rld-main-search3 .dropdown-filter {
  cursor: pointer;
  position: relative;
  border: 1px solid #e8e8e8;
  border-radius: 3px;
  margin: 0;
  height: 50px;
  width: 50px;
  text-align: center;
  display: inline-block;
  margin-right: 15px;
}
.rld-main-search3 .dropdown-filter span {
  margin: 0;
  line-height: 48px;
}
.rld-main-search3 .dropdown-filter span i {
  color: var(--rt-primary-color);
}
.rld-main-search3 .dropdown-filter:after {
  display: none;
}
.rld-main-search3 .text-dark {
  color: #212121 !important;
}
.rld-main-search3 .range-slider label {
  min-width: 40px !important;
}
.rld-main-search3 .range-slider .slider-horizontal .slider-track {
  height: 6px;
  margin-top: -2px;
}
.rld-main-search3 .explore__form-checkbox-list.full-filter {
  width: 100%;
  top: 41px;
}
.rld-main-search3 .explore__form-checkbox-list.full-filter.filter-block {
  padding: 20px;
}
@media only screen and (max-width: 767px) {
  .rld-main-search3 .explore__form-checkbox-list.full-filter.filter-block {
    top: 40px;
  }
}
.rld-main-search3 .no-ul-list.third-row li {
  max-width: 50%;
  float: left;
  margin-bottom: 7px;
  flex: 0 0 50%;
}
@media only screen and (max-width: 479px) {
  .rld-main-search3 .no-ul-list.third-row li {
    flex: 0 0 100%;
    max-width: 100%;
  }
}
.rld-main-search3 .no-ul-list.third-row li {
  width: 50%;
  float: left;
  margin-bottom: 7px;
}
.rld-main-search3 .filter-button {
  margin-top: 23px;
}
.rld-main-search3 .filter-button .search-btn {
  width: 100%;
  text-align: center;
}
.top-advanced-search {
  border-radius: 6px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  padding: 30px 30px 5px 30px;
  margin-bottom: 35px;
}
.top-advanced-search .map-form .rld-single-select {
  margin: 15px 0px 0px 0px;
}
.top-advanced-search .map-form .rld-single-select2 {
  margin: 0;
}
.top-advanced-search .map-form .rld-single-select2 .single-select {
  border: 1px solid #e5e5e5;
}
.top-advanced-search .map-form .range-slider {
  margin-bottom: 0px;
}
.top-advanced-search .rld-main-search2 .box {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
@media only screen and (max-width: 479px) {
  .top-advanced-search .rld-main-search2 .box {
    display: block;
  }
}
.top-advanced-search .rld-main-search2 .box .rt-filter-btn-1 {
  display: flex;
  align-items: center;
  cursor: pointer;
}
.top-advanced-search .rld-main-search2 .box .rt-filter-btn-1 .icon {
  width: 50px;
  height: 50px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: var(--rt-primary-color);
  border: 1px solid #e5e5e5;
  border-radius: 4px;
}
.top-advanced-search .rld-main-search2 .box .rt-filter-btn-1 .text {
  margin-left: 15px;
  color: #212121;
}
.top-advanced-search .rld-main-search2 .box .dropdown-filter {
  margin: 0;
  border-radius: 3px;
  margin-right: 15px;
  position: relative;
}
.top-advanced-search .rld-main-search2 .box .dropdown-filter span {
  margin: 0;
  line-height: 48px;
}
.top-advanced-search .rld-main-search2 .box .dropdown-filter span i {
  color: var(--rt-primary-color);
}
@media only screen and (max-width: 767px) {
  .top-advanced-search .rld-main-search2 .box .explore__form-checkbox-list.full-filter.filter-block {
    top: 41px;
  }
}
.top-advanced-search .rld-main-search2 .box .filter-button {
  width: 66%;
}
@media only screen and (max-width: 991px) {
  .top-advanced-search .rld-main-search2 .box .filter-button {
    width: 100%;
    margin-left: 20px;
  }
}
@media only screen and (max-width: 479px) {
  .top-advanced-search .rld-main-search2 .box .filter-button {
    margin-left: 0px;
    margin-top: 20px;
  }
}
.top-advanced-search .rld-main-search2 .box .filter-button .search-btn {
  width: 100%;
  text-align: center;
  padding: 14px 80px;
}
@media only screen and (max-width: 575px) {
  .top-advanced-search .rld-main-search2 .box .filter-button .search-btn {
    padding: 12px 60px;
  }
}
.box {
  position: relative;
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 1199px) {
  .box {
    display: block;
  }
}
.box .box-top {
  display: flex;
}
@media only screen and (max-width: 767px) {
  .box .box-top {
    display: grid;
  }
}
.box .box-top .item {
  flex: 1;
}
@media only screen and (max-width: 1199px) {
  .box .box-top .item {
    flex: auto;
  }
}
.box .box-top .rld-single-input input::placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.box .box-top .rt-filter-btn {
  display: flex;
  max-width: 189px;
  align-items: center;
}
@media only screen and (max-width: 767px) {
  .box .box-top .rt-filter-btn {
    display: flex;
    max-width: min-content;
    background-color: #fff;
    text-align: right;
  }
}
.rld-main-search .btn {
  width: 100%;
}
.rld-single-input {
  position: relative;
  overflow: hidden;
}
.rld-single-input:after {
  content: "";
  height: 100%;
  width: 1px;
  background-color: #e8e8e8;
  position: absolute;
  border: none;
  right: 0;
  bottom: 0;
}
@media only screen and (max-width: 767px) {
  .rld-single-input:after {
    display: none;
  }
}
.rld-single-input input {
  height: 60px;
  line-height: 60px;
  width: 100%;
  border: none;
  padding-right: 30px;
  border-radius: 6px 0px 0px 6px;
  color: var(--rt-primary-color);
}
@media only screen and (max-width: 767px) {
  .rld-single-input input {
    background-color: #fff;
    margin-bottom: 10px;
    border-radius: 6px;
  }
}
.rld-single-input input::placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.rld-single-input input:hover,
.rld-single-input input:active,
.rld-single-input input:focus {
  box-shadow: none !important;
  outline: 0 !important;
}
.rld-single-select .single-select {
  height: 60px;
  line-height: 60px;
  width: 100%;
  padding: 0 120px 0 20px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  position: relative;
  border: none;
}
@media only screen and (max-width: 1199px) {
  .rld-single-select .single-select {
    padding: 0px 40px 0px 20px;
  }
}
@media only screen and (max-width: 767px) {
  .rld-single-select .single-select {
    margin-bottom: 10px;
  }
}
.rld-single-select .single-select .current {
  color: #878c9f;
}
.rld-single-select {
  position: relative;
}
.rld-single-select:after {
  content: "";
  height: 100%;
  width: 1px;
  background-color: #e8e8e8;
  position: absolute;
  border: none;
  right: 0;
  bottom: 0;
}
@media only screen and (max-width: 767px) {
  .rld-single-select:after {
    display: none;
  }
}
.rld-single-select .single-select:hover,
.rld-single-select .single-select:active,
.rld-single-select .single-select:focus {
  box-shadow: none;
  outline: 0;
}
.rld-single-select .single-select:after {
  border: 0;
}
.rld-single-select .single-select:before {
  content: "\f0d7";
  font-size: 20px;
  font-family: "Font Awesome 5 Free";
  font-weight: 600;
  color: var(--rt-primary-color);
  position: absolute;
  top: 0px;
  margin: 0px;
  background-size: auto;
  height: 0px;
  width: 11px;
  right: 14px;
  left: auto;
  background-repeat: no-repeat;
}
.rld-single-select .single-select .list {
  margin-top: 0px;
  width: 100%;
}
.rld-price-slider-wrap .rld-price-slider,
.rld-price-slider-wrap .rld-size-slider {
  height: 5px;
  background: #fff0e5;
  border: 0;
  margin: 20px 0 0 0;
}
.form-group.bed .item-bedrooms {
  color: #505050;
  font-size: 15px;
  font-weight: 600;
}
.form-group.bed .nice-select {
  outline: 0;
  box-shadow: none;
  height: 50px;
  border: 1px solid #e8e8e8;
  position: relative;
}
.form-group.bed .nice-select:after {
  border: 0;
  content: "\f0d7";
  font-size: 16px;
  font-family: "Font Awesome 5 Free";
  font-weight: 600;
  color: #212121;
  position: absolute;
  top: 0px;
  margin: 0px;
  background-size: auto;
  transform: rotate(1deg);
  height: 0px;
  width: 11px;
  right: 14px;
  left: auto;
  background-repeat: no-repeat;
}
.form-group.bed .nice-select .current {
  margin-left: 10px;
  font-size: 15px;
  color: #878c9f;
}
.form-group.bath .item-bath {
  color: #505050;
  font-size: 15px;
  font-weight: 600;
}
.form-group.bath .nice-select {
  outline: 0;
  box-shadow: none;
  height: 50px;
  border: 1px solid #e8e8e8;
  position: relative;
}
.form-group.bath .nice-select:after {
  border: 0;
  content: "\f0d7";
  font-size: 16px;
  font-family: "Font Awesome 5 Free";
  font-weight: 600;
  color: #212121;
  position: absolute;
  top: 0px;
  margin: 0px;
  background-size: auto;
  transform: rotate(1deg);
  height: 0px;
  width: 11px;
  right: 14px;
  left: auto;
  background-repeat: no-repeat;
}
.form-group.bath .nice-select .current {
  margin-left: 10px;
  font-size: 15px;
  color: #878c9f;
}
.form-group.garage .item-garage {
  color: #505050;
  font-size: 15px;
  font-weight: 600;
}
.form-group.garage .nice-select {
  outline: 0;
  box-shadow: none;
  height: 50px;
  border: 1px solid #e8e8e8;
  position: relative;
}
.form-group.garage .nice-select:after {
  border: 0;
  content: "\f0d7";
  font-size: 16px;
  font-family: "Font Awesome 5 Free";
  font-weight: 600;
  color: #212121;
  position: absolute;
  top: 0px;
  margin: 0px;
  background-size: auto;
  transform: rotate(1deg);
  height: 0px;
  width: 11px;
  right: 14px;
  left: auto;
  background-repeat: no-repeat;
}
.form-group.garage .nice-select .current {
  margin-left: 10px;
  font-size: 15px;
  color: #878c9f;
}
.main-search-field-2 {
  margin: 20px 0px;
}
.main-search-field-2 .price-range-wrapper {
  text-align: left;
}
.main-search-field-2 .price-range-wrapper .range-box {
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 991px) {
  .main-search-field-2 .price-range-wrapper .range-box {
    display: block;
  }
}
.main-search-field-2 .price-range-wrapper .range-box > div {
  margin-right: 15px;
}
.main-search-field-2 .price-range-wrapper .range-box > div:last-child {
  margin-right: 0;
}
.main-search-field-2 .price-range-wrapper .range-box .price-range-filter {
  flex: 0 0 40%;
  margin-left: 15px;
}
@media only screen and (max-width: 991px) {
  .main-search-field-2 .price-range-wrapper .range-box .price-range-filter {
    margin-left: 5px;
  }
}
.main-search-field-2 .price-range-wrapper .range-box .price-label {
  color: #8a8a92;
  font-size: 15px;
  font-weight: 400;
}
@media only screen and (max-width: 991px) {
  .main-search-field-2 .price-range-wrapper .range-box .price-label {
    margin-bottom: 10px;
  }
}
.main-search-field-2 .price-range-wrapper .range-box:after {
  clear: both;
  display: block;
  content: "";
}
.main-search-field-2 .price-range-wrapper .range-box .price-filter-wrap .price-range-select {
  text-align: center;
}
.main-search-field-2 .price-range-wrapper .range-box .price-filter-wrap .price-range-select:after {
  clear: both;
  display: block;
  content: "";
}
.main-search-field-2 .price-range-wrapper .range-box .price-filter-wrap .price-range-select .price-range {
  display: inline-block;
  margin: 0;
  color: #212121;
  font-size: 15px;
  font-weight: 900;
}
.main-search-field-2 .price-range-wrapper .range-box .price-filter-wrap .price-range-select .item-btn {
  cursor: pointer;
  font-size: 15px;
  font-weight: 500;
  color: #ffffff;
  background-color: #111111;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  margin-right: 20px;
}
.main-search-field-2 .price-range-wrapper .range-box .price-filter-wrap .price-range-select .item-btn:focus {
  outline: none;
}
.main-search-field-2 .price-range-wrapper .range-box .price-filter-wrap .price-range-select .range-title {
  color: #212121;
  font-size: 15px;
  font-weight: 900;
}
.main-search-field-2 .price-range-wrapper .range-box .noUi-connect {
  background: var(--rt-primary-color);
  box-shadow: none;
}
.main-search-field-2 .price-range-wrapper .range-box .noUi-horizontal {
  height: 6px;
}
.main-search-field-2 .price-range-wrapper .range-box .noUi-horizontal .noUi-handle {
  top: -10px;
  background: #fff;
  border: none;
  box-shadow: none;
  border-radius: 50%;
  width: 22px;
  height: 22px;
  -webkit-box-shadow: 0px 5px 5px 0px rgba(191, 191, 191, 0.75);
  -moz-box-shadow: 0px 5px 5px 0px rgba(191, 191, 191, 0.75);
  box-shadow: 0px 5px 5px 0px rgba(191, 191, 191, 0.75);
}
.main-search-field-2 .price-range-wrapper .range-box .noUi-target {
  border-radius: 3px;
  box-shadow: none;
  background-color: #e9e9e9;
  border: 0;
}
@media only screen and (max-width: 991px) {
  .main-search-field-2 .price-range-wrapper .range-box .noUi-target {
    margin-bottom: 10px;
  }
}
.main-search-field-2 .price-range-wrapper .range-box .noUi-handle::before {
  display: none;
}
.main-search-field-2 .price-range-wrapper .range-box .noUi-handle::after {
  height: 16px;
  width: 16px;
  background-color: var(--rt-primary-color);
  border-radius: 50%;
  left: 0;
  right: 0;
  margin: 0 auto;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}
.rld-progress-box {
  display: flex;
  align-items: center;
  gap: 20px;
}
@media only screen and (max-width: 767px) {
  .rld-progress-box {
    display: block;
    width: 100%;
  }
}
.rld-progress-box .main-search-field-3 {
  flex-grow: 1;
}
@media only screen and (max-width: 767px) {
  .rld-progress-box .main-search-field-3 {
    margin-bottom: 20px;
    margin-top: 20px;
  }
}
.rld-progress-box .main-search-field-3 .price-range-wrapper {
  text-align: left;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box {
  display: flex;
  align-items: center;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box > div {
  margin-right: 15px;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box > div:last-child {
  margin-right: 0;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .price-range-filter {
  flex: 0 0 40%;
  margin-left: 15px;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .price-label {
  color: #8a8a92;
  font-size: 15px;
  font-weight: 400;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box:after {
  clear: both;
  display: block;
  content: "";
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .price-filter-wrap .price-range-select {
  text-align: center;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .price-filter-wrap .price-range-select:after {
  clear: both;
  display: block;
  content: "";
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .price-filter-wrap .price-range-select .price-range {
  display: inline-block;
  margin: 0;
  color: #212121;
  font-size: 15px;
  font-weight: 900;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .price-filter-wrap .price-range-select .item-btn {
  cursor: pointer;
  font-size: 15px;
  font-weight: 500;
  color: #ffffff;
  background-color: #111111;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  margin-right: 20px;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .price-filter-wrap .price-range-select .item-btn:focus {
  outline: none;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .price-filter-wrap .price-range-select .range-title {
  color: #212121;
  font-size: 15px;
  font-weight: 900;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .noUi-connect {
  background: var(--rt-primary-color);
  box-shadow: none;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .noUi-horizontal {
  height: 6px;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .noUi-horizontal .noUi-handle {
  top: -10px;
  background: #fff;
  border: none;
  box-shadow: none;
  border-radius: 50%;
  width: 22px;
  height: 22px;
  -webkit-box-shadow: 0px 5px 5px 0px rgba(191, 191, 191, 0.75);
  -moz-box-shadow: 0px 5px 5px 0px rgba(191, 191, 191, 0.75);
  box-shadow: 0px 5px 5px 0px rgba(191, 191, 191, 0.75);
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .noUi-target {
  border-radius: 3px;
  box-shadow: none;
  background-color: #e9e9e9;
  border: 0;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .noUi-handle::before {
  display: none;
}
.rld-progress-box .main-search-field-3 .price-range-wrapper .range-box .noUi-handle::after {
  height: 16px;
  width: 16px;
  background-color: var(--rt-primary-color);
  border-radius: 50%;
  left: 0;
  right: 0;
  margin: 0 auto;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}
@media only screen and (max-width: 767px) {
  .rld-progress-box .filter-button {
    display: block;
    margin-top: 20px;
    text-align: left;
  }
}
.rld-progress-box .filter-button .filter-btn1 {
  padding: 12px 25px;
}
.rld-progress-box .filter-button .search-btn {
  color: #ffffff;
  border: none;
  margin-right: 0;
  background-color: var(--rt-primary-color);
  padding: 14px 107px;
}
@media only screen and (max-width: 320px) {
  .rld-progress-box .filter-button .search-btn {
    padding: 14px 80px;
  }
}
.rld-progress-box .filter-button .search-btn:hover {
  background-color: var(--rt-primary-dark);
}
.rld-progress-box .filter-button .search-btn:after {
  display: none;
}
.rld-progress-box .filter-button .search-btn i {
  margin-left: 5px;
}
.rld-progress-box .filter-button .reset-btn {
  margin-right: 0;
}
.rld-progress-box .filter-button .reset-btn:hover i {
  color: #ffffff;
}
.rld-progress-box .filter-button .reset-btn i {
  margin-left: 5px;
  transition: all 0.4s ease;
}
.rld-progress-box .explore__form-checkbox-list.full-filter {
  width: auto;
}
@media only screen and (max-width: 767px) {
  .rld-progress-box .explore__form-checkbox-list.full-filter {
    top: 107px;
  }
}
.filter-btn {
  display: inline-block;
  background-color: var(--rt-primary-color);
  color: #ffffff;
  font-size: 13px;
  font-weight: 700;
  text-transform: uppercase;
  padding: 0px 30px;
  line-height: 60px;
  margin-right: -3px;
  transition: all ease 0.5s;
  border-radius: 0px 6px 6px 0px;
}
@media only screen and (max-width: 991px) {
  .filter-btn span {
    display: none;
  }
}
.filter-btn:hover {
  background-color: var(--rt-primary-dark);
  color: #ffffff;
}
.filter-btn:hover i {
  transform: scale(1.2);
}
.filter-btn i {
  margin-left: 10px;
  transition: 0.4s;
}
@media only screen and (max-width: 991px) {
  .filter-btn i {
    margin-left: 0;
  }
}
/*------------------- 6.6 Property Banner -------------------*/
.property-banner-wrap1 {
  padding: 150px 0px 145px;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  position: relative;
  height: 590px;
}
@media only screen and (max-width: 991px) {
  .property-banner-wrap1 {
    padding: 70px 0px 0px 0px;
    height: 445px;
  }
}
@media only screen and (max-width: 767px) {
  .property-banner-wrap1 {
    height: 390px;
  }
}
@media only screen and (max-width: 575px) {
  .property-banner-wrap1 {
    padding: 50px 0px;
    height: 345px;
  }
}
@media only screen and (max-width: 320px) {
  .property-banner-wrap1 {
    height: 390px;
  }
}
.property-banner-wrap1::after {
  content: "";
  height: 100%;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.1);
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
}
.property-box1 {
  padding: 50px 40px;
  background-color: #fff;
  z-index: 5;
  position: relative;
}
@media only screen and (max-width: 1199px) {
  .property-box1 {
    padding: 30px;
  }
}
@media only screen and (max-width: 991px) {
  .property-box1 {
    margin-bottom: 60px;
  }
}
@media only screen and (max-width: 479px) {
  .property-box1 {
    margin-bottom: 24px;
  }
}
.property-box1 .item-subtitle {
  position: relative;
  z-index: 1;
  color: var(--rt-primary-color);
  font-size: 15px;
  font-weight: 500;
  font-family: "Ubuntu", sans-serif;
  text-transform: uppercase;
  line-height: 30px;
  letter-spacing: 1px;
  margin-left: 15px;
  margin-bottom: 3px;
}
.property-box1 .item-subtitle:after {
  content: "";
  height: 5px;
  width: 5px;
  background: var(--rt-primary-color);
  position: absolute;
  top: 12px;
  left: -15px;
  border: none;
  border-radius: 50%;
  z-index: -1;
}
.property-box1 .item-title {
  color: #212121;
  font-size: 28px;
  font-weight: 600;
  line-height: 38px;
}
@media only screen and (max-width: 1199px) {
  .property-box1 .item-title {
    font-size: 22px;
  }
}
.property-img {
  margin: 0px 0px 0px 40px;
  z-index: 5;
  position: relative;
}
.property-img .bg-title-wrap {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  width: 100%;
}
.property-img .bg-title-wrap .background-title {
  display: inline-block;
  font-family: "Quentin";
  font-size: 88px;
  line-height: 130px;
  color: #fff;
  pointer-events: none;
}
@media only screen and (max-width: 1199px) {
  .property-img .bg-title-wrap .background-title {
    font-size: 70px;
    line-height: 100px;
  }
}
@media only screen and (max-width: 767px) {
  .property-img .bg-title-wrap .background-title {
    display: none;
  }
}
/*------------------- 6.7 Main Banner -------------------*/
.main-banner-wrap1 {
  position: relative;
  padding: 280px 0px;
  background: no-repeat center center / cover;
  z-index: 2;
}
@media only screen and (max-width: 991px) {
  .main-banner-wrap1 {
    padding: 100px 0px;
  }
}
@media only screen and (max-width: 767px) {
  .main-banner-wrap1 {
    padding: 130px 0px;
  }
}
.main-banner-wrap1 .banner-shape1 {
  overflow: hidden;
  position: absolute;
  left: 0;
  width: 100%;
  line-height: 0;
  direction: ltr;
  bottom: -3px;
}
@media only screen and (max-width: 767px) {
  .main-banner-wrap1 .banner-shape1 {
    display: none;
  }
}
.main-banner-wrap1 .banner-shape1 svg {
  width: calc(139% + 1.3px);
  height: 500px;
  display: block;
  position: relative;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}
.main-banner-wrap1 .banner-shape1 .banner-shpape-fill {
  fill: #fff;
}
.main-banner-wrap5 {
  position: relative;
  padding: 293px 0px 150px;
  background: no-repeat center center / cover;
  z-index: 2;
}
.main-banner-wrap5 .main-banner-box1 .item-title {
  max-width: 100%;
}
.main-banner-wrap6 {
  background-color: #F1F8F6;
  position: relative;
  overflow: hidden;
  min-height: 840px;
}
.main-banner-wrap6 .item-banner-thumb {
  position: absolute;
  top: -350px;
  right: -253px;
  width: 1199px;
  overflow: hidden;
  z-index: 2;
}
.main-banner-wrap6 .shape-element ul li {
  position: absolute;
}
.main-banner-wrap6 .shape-element ul li:nth-child(1) {
  bottom: 0;
  left: 0;
}
.main-banner-wrap6 .shape-element ul li:nth-child(2) {
  bottom: -5px;
  left: 50%;
}
.main-banner-wrap6 .shape-element ul li:nth-child(3) {
  top: 0;
  left: 0;
  transition: all 0.15s;
}
.main-banner-wrap6 .shape-element ul li:nth-child(4) {
  top: 100px;
  left: 50%;
  animation: rtTopBottom ease-in-out forwards infinite;
  animation-duration: 5s;
}
.main-banner-wrap6 .shape-element ul li:nth-child(5) {
  top: 50%;
  left: 50%;
  transform: translateY(-50%);
}
.main-banner-wrap6 .shape-element ul li:nth-child(6) {
  top: 35%;
  left: 35%;
  animation: rtTopBottom ease-in-out forwards infinite;
  animation-duration: 10s;
}
.main-banner-box1 {
  z-index: 2;
  position: relative;
  text-align: center;
}
.main-banner-box1 .item-title {
  color: #ffffff;
  font-size: 54px;
  background-color: #0000004a;
  padding: 5px;
  font-weight: 600;
  font-family: "Ubuntu", sans-serif;
  line-height: 1.2;
  margin-bottom: 35px;
  max-width: 670px;
  margin-left: auto;
  margin-right: auto;
}
@media only screen and (max-width: 1199px) {
  .main-banner-box1 .item-title {
    padding: 0;
    font-size: 48px;
    line-height: 54px;
  }
}
@media only screen and (max-width: 991px) {
  .main-banner-box1 .item-title {
    font-size: 42px;
    line-height: 48px;
    margin-bottom: 24px;
  }
}
@media only screen and (max-width: 479px) {
  .main-banner-box1 .item-title {
    font-size: 30px;
    line-height: 42px;
  }
}
@media only screen and (max-width: 320px) {
  .main-banner-box1 .item-title {
    font-size: 30px;
    line-height: 36px;
  }
}
.main-banner-box1 .listing-category-list .search-radio {
  margin-bottom: 24px;
}
.main-banner-box1 .listing-category-list .search-radio .list-inline li {
  display: inline-block;
  margin-right: 30px;
  color: #ffffff;
  transition: all 0.3s ease-in-out;
}
.main-banner-box1 .listing-category-list .search-radio .list-inline li:hover label i {
  background-color: var(--rt-primary-color);
}
.main-banner-box1 .listing-category-list .search-radio .list-inline li label {
  display: flex;
  align-items: center;
  cursor: pointer;
  line-height: 1.2;
}
.main-banner-box1 .listing-category-list .search-radio .list-inline li label i {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  line-height: 30px;
  text-align: center;
  display: flex;
  background-color: rgba(255, 255, 255, 0.2);
  color: #ffffff;
  font-size: 15px;
  transition: 0.4s;
  justify-content: center;
  align-items: center;
  margin-right: 10px;
}
.main-banner-box1 .listing-category-list .search-radio .list-inline li label span {
  color: #fff;
  font-weight: 400;
  font-size: 16px;
}
.main-banner-box1 .listing-category-list .search-radio .list-inline .active i {
  background-color: var(--rt-primary-color);
}
.main-banner-box1 .listing-category-list .search-radio input[type="radio"] {
  display: none;
}
.main-banner-box1 .search-content {
  margin-bottom: 24px;
  display: inline-block;
  width: 100%;
  padding: 10px 0px 10px 20px;
  background-color: #ffffff;
  border-radius: 4px;
  box-shadow: 0px 42px 38px 0px rgba(0, 0, 0, 0.24);
  display: flex;
  align-items: center;
  position: relative;
  justify-content: space-between;
}
.main-banner-box1 .search-content .form-group {
  margin-bottom: 0;
  position: relative;
  width: 230px;
}
.main-banner-box1 .search-content .form-group:after {
  content: "";
  height: 100%;
  width: 1px;
  background-color: #e0e0e0;
  position: absolute;
  bottom: 0;
  top: 0;
  right: 0px;
  z-index: 1;
}
.main-banner-box1 .search-content .form-group .form-control {
  color: #878c9f;
  border: none;
}
.main-banner-box1 .search-content .form-group .form-control:focus {
  outline: 0;
  box-shadow: none;
}
.main-banner-box1 .search-content .property-content {
  position: relative;
  width: 230px;
}
.main-banner-box1 .search-content .property-content:after {
  content: "";
  height: 100%;
  width: 1px;
  background-color: #e0e0e0;
  position: absolute;
  bottom: 0;
  top: 0;
  right: 0px;
  z-index: 1;
}
.main-banner-box1 .search-content .property-content select {
  border: none;
}
.main-banner-box1 .search-content .property-content select:focus {
  outline: 0;
  box-shadow: none;
}
.main-banner-box1 .search-content .property-content .nice-select {
  border: none;
  padding-right: 100px;
}
.main-banner-box1 .search-content .property-content .nice-select:after {
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 7px 5px 0 5px;
  border-color: var(--rt-primary-color) transparent transparent transparent;
  transform: rotate(0);
}
.main-banner-box1 .search-content .property-content .nice-select .current {
  color: #878c9f;
  font-size: 15px;
  font-weight: 500;
}
.main-banner-box1 .search-content .property-content .nice-select .list .option {
  font-weight: 400;
  min-width: 220px;
}
.main-banner-box1 .search-content .property-content .nice-select.open:after {
  -webkit-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  transform: rotate(360deg);
  border-color: #212121 transparent transparent transparent;
}
.main-banner-box1 .search-content .city-content {
  width: 230px;
  position: relative;
}
.main-banner-box1 .search-content .city-content:after {
  content: "";
  height: 100%;
  width: 1px;
  background-color: #e0e0e0;
  position: absolute;
  bottom: 0;
  top: 0;
  right: 0px;
  z-index: 1;
}
.main-banner-box1 .search-content .city-content select {
  border: none;
  color: #878c9f;
}
.main-banner-box1 .search-content .city-content select:focus {
  outline: 0;
  box-shadow: none;
}
.main-banner-box1 .search-content .city-content .nice-select {
  border: none;
  padding-right: 135px;
}
.main-banner-box1 .search-content .city-content .nice-select:after {
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 7px 5px 0 5px;
  border-color: var(--rt-primary-color) transparent transparent transparent;
  transform: rotate(0);
}
.main-banner-box1 .search-content .city-content .nice-select .current {
  color: #878c9f;
  font-size: 15px;
  font-weight: 500;
}
.main-banner-box1 .search-content .city-content .nice-select .list .option {
  font-weight: 400;
  min-width: 220px;
}
.main-banner-box1 .search-content .city-content .nice-select.open:after {
  -webkit-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  transform: rotate(360deg);
  border-color: #212121 transparent transparent transparent;
}
.main-banner-box1 .search-content .item-filter-area {
  padding: 17px 20px 17px 0px;
  background-color: #ffffff;
  color: #212121;
  font-size: 16px;
  transition: all 0.3s ease-in-out;
}
.main-banner-box1 .search-content .item-filter-area:hover {
  color: var(--rt-primary-color);
}
.main-banner-box1 .search-content .form-button {
  width: 230px;
}
.main-banner-box1 .search-content .form-button .slider-button {
  position: absolute;
  bottom: 0;
  right: 0px;
}
.main-banner-box1 .search-content .form-button .slider-button .slider-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  color: #ffffff;
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 700;
}
.main-banner-box1 .search-content .form-button .slider-button .slider-btn .item-text {
  padding: 19px 20px;
  background-color: var(--rt-primary-color);
  border-radius: 0px 4px 4px 0px;
  transition: all 0.3s ease-in-out;
}
.main-banner-box1 .search-content .form-button .slider-button .slider-btn .item-text:hover {
  background-color: #212121;
}
.main-banner-box1 .search-content .form-button .slider-button .slider-btn .item-text i {
  margin-left: 10px;
}
.main-banner-box1 p {
  color: #ecedee;
  font-size: 20px;
  margin-bottom: 0;
  letter-spacing: 1px;
}
.main-banner-box1 p .banner-p {
  color: #ffffff;
  font-size: 22px;
  font-weight: 700;
  position: relative;
}
.main-banner-box5 .item-title {
  padding: 0;
}
.main-banner-box6 {
  text-align: left;
}
.main-banner-box6 .item-title {
  color: #0E2E50;
  font-size: 54px;
  line-height: 1.2;
  margin: 0;
  margin-bottom: 30px;
  max-width: 640px;
  position: relative;
  z-index: 2;
}
@media only screen and (max-width: 1199px) {
  .main-banner-box6 .item-title {
    padding: 0;
    font-size: 48px;
    line-height: 54px;
  }
}
@media only screen and (max-width: 991px) {
  .main-banner-box6 .item-title {
    font-size: 42px;
    line-height: 48px;
    margin-bottom: 24px;
  }
}
@media only screen and (max-width: 479px) {
  .main-banner-box6 .item-title {
    font-size: 30px;
    line-height: 42px;
  }
}
@media only screen and (max-width: 320px) {
  .main-banner-box6 .item-title {
    font-size: 30px;
    line-height: 36px;
  }
}
.main-banner-box6 .bg-title-wrap {
  position: absolute;
  top: 40px;
  transform: translateY(-50%);
  left: 0;
  width: 100%;
}
.main-banner-box6 .bg-title-wrap .background-title {
  display: inline-block;
  font-family: "Quentin";
  font-size: 100px;
  line-height: 130px;
  color: #dceeea;
  pointer-events: none;
}
@media only screen and (max-width: 767px) {
  .main-banner-box6 .bg-title-wrap .background-title {
    display: none;
  }
}
.main-banner-box6 .ad-type-wrapper.search-radio .list-inline {
  display: flex;
  flex-wrap: wrap;
}
.main-banner-box6 .ad-type-wrapper.search-radio .list-inline li label {
  padding: 10px 28px 10px;
  background: #fff;
  margin-bottom: -18px;
  margin-right: 4px;
  border-radius: 4px;
  cursor: pointer;
  transition: 0.4s ease-in-out;
  font-size: 15px;
  color: #000;
}
.main-banner-box6 .ad-type-wrapper.search-radio .list-inline li label:hover {
  background: var(--rt-primary-color);
  color: #fff;
}
.main-banner-box6 .ad-type-wrapper.search-radio .list-inline li .active {
  background: var(--rt-primary-color);
  color: #fff;
}
.main-banner-box6 .banner-search-wrap {
  margin: 0;
}
.main-banner-box6 .banner-search-wrap .item-para {
  color: #70778A;
  font-size: 20px;
  font-weight: 500;
  font-family: 'Ubuntu', sans-serif;
  position: relative;
}
@media only screen and (max-width: 767px) {
  .main-banner-box6 .banner-search-wrap .item-para {
    color: #000;
  }
}
.main-banner-box6 .banner-search-wrap .item-para .banner-p {
  color: #0E2E50;
}
.main-banner-box6 .banner-search-wrap .item-para .item-shape {
  position: absolute;
  top: 25px;
  left: 180px;
}
.main-banner-wrap2 {
  padding: 186px 0px 100px;
  background-color: #eaf7f4;
  position: relative;
  z-index: 1;
  overflow: hidden;
}
@media only screen and (max-width: 991px) {
  .main-banner-wrap2 {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .main-banner-wrap2 {
    padding: 50px 0px;
  }
}
.main-banner-wrap3 {
  position: relative;
  padding: 0;
  background: no-repeat center center / cover;
}
.main-banner-wrap3:after {
  content: "";
  height: 100%;
  width: 100%;
  background-color: #000000;
  opacity: 50%;
  position: absolute;
  bottom: 0;
  left: 0;
}
.main-banner-wrap2 .section-cloud li {
  position: absolute;
}
.main-banner-wrap2 .section-cloud li:nth-child(1n) {
  top: 50px;
  left: 0;
  -webkit-animation: movingleftright1 15000ms infinite;
  animation: movingleftright1 15000ms infinite;
  filter: brightness(100%) contrast(100%) saturate(100%) blur(0) hue-rotate(289deg);
}
.main-banner-wrap2 .section-cloud li:nth-child(2n) {
  top: 200px;
  left: 22%;
  -webkit-animation: movingleftright2 20000ms infinite;
  animation: movingleftright2 20000ms infinite;
  filter: brightness(100%) contrast(100%) saturate(100%) blur(0) hue-rotate(289deg);
}
.main-banner-wrap2 .section-cloud li:nth-child(3n) {
  top: 220px;
  left: 50%;
  -webkit-animation: movingleftright3 25000ms infinite;
  animation: movingleftright3 25000ms infinite;
  filter: brightness(100%) contrast(100%) saturate(100%) blur(0) hue-rotate(289deg);
}
.main-banner-wrap2 .section-cloud li:nth-child(1n) {
  top: 40%;
  -webkit-animation: moveclouds 35s linear infinite;
  animation: moveclouds 35s linear infinite;
  filter: brightness(100%) contrast(100%) saturate(100%) blur(0) hue-rotate(289deg);
}
.main-banner-wrap2 .section-cloud li:nth-child(2n) {
  bottom: auto;
  top: 100px;
  left: 35%;
  -webkit-animation: moveclouds 45s linear infinite;
  animation: moveclouds 45s linear infinite;
  filter: brightness(100%) contrast(100%) saturate(100%) blur(0) hue-rotate(289deg);
}
.main-banner-wrap2 .section-cloud li:nth-child(3n) {
  -webkit-animation: moveclouds 36s linear infinite;
  animation: moveclouds 36s linear infinite;
  filter: brightness(100%) contrast(100%) saturate(100%) blur(0) hue-rotate(289deg);
  z-index: -1;
}
.main-banner-box2 {
  position: relative;
}
@media only screen and (max-width: 991px) {
  .main-banner-box2 {
    margin-bottom: 24px;
  }
}
.main-banner-box2 .item-img {
  padding-top: 70px;
}
.main-banner-box3 {
  padding: 150px 0px;
}
@media only screen and (max-width: 767px) {
  .main-banner-box3 {
    padding: 50px 0px;
  }
}
.main-banner-box3 .item-subtitle {
  position: relative;
  text-align: center;
}
.main-banner-box3 .item-subtitle .shape-img1 {
  position: absolute;
  bottom: -30px;
  left: 250px;
}
.main-banner-box3 .item-title {
  padding-right: 0px;
  text-align: center;
}
.main-banner-box4 {
  background-color: #fff;
  padding: 30px;
  position: relative;
  border-radius: 6px;
}
@media only screen and (max-width: 479px) {
  .main-banner-box4 {
    padding: 20px;
  }
}
.main-banner-box4 .banner-style-1 {
  display: flex;
  margin-bottom: 20px;
  align-items: center;
}
.main-banner-box4 .banner-style-1 .item-category-box1 .item-category {
  color: #ffffff;
  font-size: 13px;
  font-weight: 400;
  font-family: "Ubuntu", sans-serif;
  padding: 15px;
  display: inline-block;
  line-height: 1px;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 2px;
  position: relative;
}
.main-banner-box4 .banner-style-1 .item-category-box1 .item-category:before {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  background-color: #fff;
  left: 5px;
  top: 14px;
  border: none;
  border-radius: 50%;
}
.main-banner-box4 .banner-style-1 .item-price {
  color: var(--rt-primary-color);
  font-size: 30px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
  margin-left: 20px;
}
@media only screen and (max-width: 479px) {
  .main-banner-box4 .banner-style-1 .item-price {
    font-size: 22px;
  }
}
.main-banner-box4 .banner-style-1 .item-price span {
  color: var(--rt-primary-color);
  font-size: 16px;
  font-weight: 400;
}
.main-banner-box4 .item-title {
  font-size: 24px;
  font-weight: 500;
  margin-bottom: 6px;
}
@media only screen and (max-width: 479px) {
  .main-banner-box4 .item-title {
    font-size: 22px;
    line-height: 28px;
  }
}
.main-banner-box4 .location-area {
  color: #878c9f;
  font-size: 15px;
  margin-bottom: 12px;
}
.main-banner-box4 .location-area i {
  margin-right: 7px;
}
.main-banner-box4 .item-categoery3 ul {
  display: flex;
  justify-content: space-between;
}
@media only screen and (max-width: 320px) {
  .main-banner-box4 .item-categoery3 ul {
    display: block;
  }
}
.main-banner-box4 .item-categoery3 ul li {
  display: flex;
  margin-right: 10px;
  align-items: center;
  font-size: 14px;
  font-weight: 600;
}
@media only screen and (max-width: 479px) {
  .main-banner-box4 .item-categoery3 ul li {
    margin-right: 5px;
  }
}
.main-banner-box4 .item-categoery3 ul li:last-child {
  margin-right: 0;
}
.main-banner-box4 .item-categoery3 ul li i {
  color: var(--rt-primary-color);
  margin-right: 10px;
  height: 30px;
  width: 30px;
  background-color: #edf9f6;
  border: none;
  border-radius: 50%;
  display: inline-block;
  line-height: 35px;
  text-align: center;
  font-size: 14px;
}
@media only screen and (max-width: 1199px) {
  .main-banner-box4 .item-categoery3 ul li i {
    margin-right: 6px;
  }
}
@media only screen and (max-width: 479px) {
  .main-banner-box4 .item-categoery3 ul li i {
    background-color: transparent;
    border: none;
    border-radius: 0;
    display: initial;
  }
}
/*------------------- 6.8 Blog -------------------*/
.blog-wrap1 {
  padding: 100px 0px 110px 0px;
  overflow: hidden;
}
@media only screen and (max-width: 991px) {
  .blog-wrap1 {
    padding: 70px 0px 40px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .blog-wrap1 {
    padding: 50px 0px 20px 0px;
  }
}
.blog-wrap2 {
  padding: 100px 0px 110px;
  background-color: #eaf7f4;
}
@media only screen and (max-width: 991px) {
  .blog-wrap2 {
    padding: 70px 0 40px;
  }
}
@media only screen and (max-width: 575px) {
  .blog-wrap2 {
    padding: 50px 0 20px;
  }
}
.blog-wrap3 {
  padding: 100px 0px 180px 0px;
  background-color: #eaf7f4;
}
@media only screen and (max-width: 991px) {
  .blog-wrap3 {
    padding: 70px 0px 120px;
  }
}
@media only screen and (max-width: 575px) {
  .blog-wrap3 {
    padding: 50px 0px 100px;
  }
}
.blog-wrap6 {
  padding: 110px 0px 110px 0px;
  background-color: #eaf7f4;
}
@media only screen and (max-width: 991px) {
  .blog-wrap6 {
    padding: 70px 0px 120px;
  }
}
@media only screen and (max-width: 575px) {
  .blog-wrap6 {
    padding: 50px 0px 100px;
  }
}
.blog-wrap4 {
  padding: 130px 0px 130px 0px;
  background-color: #ffffff;
}
@media only screen and (max-width: 991px) {
  .blog-wrap4 {
    padding: 70px 0px 40px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .blog-wrap4 {
    padding: 50px 0px 20px 0px;
  }
}
.blog-wrap5 {
  padding: 80px 0px 50px 0px;
  background-color: #eaf7f4;
}
@media only screen and (max-width: 991px) {
  .blog-wrap5 {
    padding: 70px 0px 40px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .blog-wrap5 {
    padding: 50px 0px 20px 0px;
  }
}
.blog-box1 {
  padding: 30px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  border: none;
  border-radius: 8px;
}
@media only screen and (max-width: 1199px) {
  .blog-box1 {
    padding: 20px;
  }
}
@media only screen and (max-width: 991px) {
  .blog-box1 {
    margin-bottom: 24px;
  }
}
.blog-box1:hover .item-img:before {
  visibility: visible;
  opacity: 1;
}
.blog-box1:hover .item-img a img {
  transform: scale(1.1);
}
.blog-box1:hover .img-style-3 a img {
  transform: scale(1);
}
.blog-box1 .item-img {
  position: relative;
  overflow: hidden;
  border-radius: 6px;
  z-index: 1;
  cursor: pointer;
}
.blog-box1 .item-img::before {
  content: "";
  height: 100%;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.2);
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
  z-index: 5;
  transition: 0.4s;
}
.blog-box1 .item-img a img {
  transform: scale(1);
  transition: transform 3s cubic-bezier(0.2, 0.96, 0.34, 1);
}
.blog-box1 .thumbnail-date {
  position: relative;
  z-index: 6;
}
.blog-box1 .thumbnail-date .popup-date {
  display: inline-block;
  padding: 7px 16px;
  background-color: var(--rt-primary-color);
  border-radius: 0 3px 3px 3px;
  overflow: hidden;
  color: #ffffff;
  position: absolute;
  top: -33px;
  z-index: 1;
}
.blog-box1 .thumbnail-date .popup-date::after {
  content: "";
  width: 130px;
  height: 40px;
  background-image: -moz-linear-gradient(29deg, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0.18) 100%);
  background-image: -webkit-linear-gradient(29deg, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0.18) 100%);
  background-image: -ms-linear-gradient(29deg, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0.18) 100%);
  display: block;
  position: absolute;
  z-index: -1;
  border-radius: 50%;
  transform: rotate(-45deg);
  left: -8px;
  top: 8px;
}
.blog-box1 .thumbnail-date .popup-date .day {
  font-size: 26px;
  font-weight: 600;
  letter-spacing: 1.2px;
  margin-bottom: 3px;
}
.blog-box1 .thumbnail-date .popup-date .month {
  display: block;
  font-size: 16px;
}
.blog-box1 .thumbnail-date .popup-date span {
  display: block;
  line-height: 1.2;
  text-align: center;
}
.blog-box1 .img-style-2 {
  margin-bottom: 20px;
}
.blog-box1 .item-content {
  position: relative;
  padding-top: 45px;
}
.blog-box1 .item-content .entry-meta {
  margin-bottom: 10px;
}
.blog-box1 .item-content .entry-meta ul li {
  display: inline-block;
  margin-right: 10px;
  position: relative;
  padding-left: 15px;
}
@media only screen and (max-width: 410px) {
  .blog-box1 .item-content .entry-meta ul li {
    display: block;
    margin-bottom: 5px;
  }
  .blog-box1 .item-content .entry-meta ul li:last-child {
    margin-bottom: 0;
  }
}
.blog-box1 .item-content .entry-meta ul li:after {
  content: "";
  height: 6px;
  width: 6px;
  background: #b7c0d5;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  border: none;
  border-radius: 50%;
  transition: all 0.3s ease-in-out;
  z-index: 2;
}
.blog-box1 .item-content .entry-meta ul li a {
  display: inline-block;
  color: #788593;
  font-size: 15px;
  transition: all 0.3s ease-in-out;
}
.blog-box1 .item-content .entry-meta ul li a:hover {
  color: var(--rt-primary-color);
}
.blog-box1 .item-content .entry-meta ul .theme-cat {
  padding-left: 0;
}
.blog-box1 .item-content .entry-meta ul .theme-cat:after {
  display: none;
}
.blog-box1 .item-content .entry-meta ul .theme-cat a img {
  margin-right: 10px;
}
.blog-box1 .item-content .entry-meta ul .calendar-icon a i {
  color: var(--rt-primary-color);
  margin-right: 10px;
}
.blog-box1 .item-content .heading-title h3 {
  line-height: 32px;
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 15px;
}
.blog-box1 .item-content .heading-title h3 a {
  color: #212121;
  transition: all 0.3s ease-in-out;
}
.blog-box1 .item-content .heading-title h3 a:hover {
  color: var(--rt-primary-color);
}
.blog-box1 .item-content .heading-title p {
  color: #70778b;
  font-size: 16px;
  line-height: 24px;
}
.blog-box1 .item-content .title-style-2 h3 {
  font-size: 24px;
  margin-bottom: 10px;
}
.blog-box1 .item-content .blog-button .item-btn {
  display: inline-block;
  font-size: 15px;
  color: #788593;
  position: relative;
  transition: all 0.3s ease-in-out;
}
.blog-box1 .item-content .blog-button .item-btn:hover {
  color: var(--rt-primary-color);
}
.blog-box1 .item-content .blog-button .item-btn:hover i {
  color: #788593;
  right: -25px;
}
.blog-box1 .item-content .blog-button .item-btn i {
  position: absolute;
  top: 7px;
  right: -20px;
  color: var(--rt-primary-color);
  transition: all 0.3s ease-in-out;
}
.blog-box1 .item-content .blog-button-style2 .item-btn {
  font-size: 15px;
  color: var(--rt-primary-color);
  background-color: #dfefeb;
  padding: 7px 18px;
  border-radius: 4px;
  font-weight: 500;
  border: none;
  border-radius: 3px;
  display: inline-block;
  position: relative;
  z-index: 1;
  transition: all 0.3s ease-in-out;
}
.blog-box1 .item-content .blog-button-style2 .item-btn:hover {
  color: #fff;
}
.blog-box1 .item-content .blog-button-style2 .item-btn:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
}
.blog-box1 .item-content .blog-button-style2 .item-btn:hover i {
  margin-left: 12px;
}
.blog-box1 .item-content .blog-button-style2 .item-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background: var(--rt-primary-color);
  position: absolute;
  bottom: 0px;
  left: 0;
  border: none;
  border-radius: 3px;
  transition: all 0.3s ease-in-out;
  z-index: -1;
  opacity: 0;
  visibility: hidden;
}
.blog-box1 .item-content .blog-button-style2 .item-btn i {
  display: inline-block;
  transition: margin 0.3s;
  margin-left: 7px;
  z-index: 1;
}
.blog-box1 .item-content .quotation-style {
  position: relative;
}
.blog-box1 .item-content .quotation-style:after {
  content: "";
  height: 100%;
  width: 6px;
  background-color: var(--rt-primary-color);
  border-radius: 3px;
  position: absolute;
  bottom: 0;
  left: 44px;
}
@media only screen and (max-width: 575px) {
  .blog-box1 .item-content .quotation-style:after {
    left: 24px;
  }
}
@media only screen and (max-width: 479px) {
  .blog-box1 .item-content .quotation-style:after {
    display: none;
  }
}
.blog-box1 .item-content .quotation-style .item-quotation {
  color: #212121;
  font-size: 18px;
  line-height: 28px;
  font-weight: 600;
  font-family: "Roboto", sans-serif;
  padding: 20px 50px 20px 70px;
}
@media only screen and (max-width: 575px) {
  .blog-box1 .item-content .quotation-style .item-quotation {
    padding: 20px 50px;
  }
}
@media only screen and (max-width: 479px) {
  .blog-box1 .item-content .quotation-style .item-quotation {
    padding: 20px;
  }
}
.blog-box1 .item-content .style-2 {
  color: #70778b;
  font-size: 16px;
  line-height: 24px;
}
.blog-box1 .item-content .style-3 {
  margin-bottom: 10px;
}
.blog-box1 .item-content .style-4 {
  margin-bottom: 0;
}
.blog-box1 .item-content .single-blog-img {
  margin-bottom: 8px;
}
.blog-box1 .item-content .single-blog-img img {
  border-radius: 6px;
}
@media only screen and (max-width: 575px) {
  .blog-box1 .item-content .single-blog-img img {
    width: 100%;
  }
}
.blog-box1 .item-content .single-blog-img2 {
  margin-bottom: 25px;
}
.blog-box1 .item-content .single-blog-list {
  margin-bottom: 10px;
}
.blog-box1 .item-content .single-blog-list ul li {
  display: block;
  margin-bottom: 10px;
  color: #70778b;
  font-size: 16px;
  font-weight: 500;
  padding-left: 55px;
  position: relative;
}
.blog-box1 .item-content .single-blog-list ul li:after {
  content: "";
  height: 7px;
  width: 7px;
  background-color: #70778b;
  border: none;
  border-radius: 50%;
  position: absolute;
  bottom: 8px;
  left: 35px;
}
.blog-box2 {
  margin-bottom: 24px;
  border: 1px solid #dfe4ef;
}
.blog-box2 .item-img img {
  border-radius: 8px;
}
.blog-box2 .img-style-2 {
  margin-bottom: 24px;
}
.blog-box2 .item-content.content-style-2 {
  padding-top: 0;
}
.blog-box2 .item-content.content-style-2 .entry-meta {
  margin-bottom: 20px;
}
.blog-box2 .item-content.content-style-2 .heading-title.title-style-2 h3 {
  margin-bottom: 15px;
}
.blog-box2 .item-content.content-style-2 p {
  line-height: 1.8;
}
.blog-box2 .post-meta {
  bottom: 220px;
}
.blog-box3 .img-style-3 {
  margin-bottom: 24px;
}
.blog-box3 .item-content {
  padding-top: 0;
}
.blog-box3 .item-content .entry-meta {
  margin-bottom: 20px;
}
.blog-box3 .item-content .title-style-2 p {
  line-height: 1.8;
}
.blog-box3 .item-content .quotation-style .item-quotation {
  line-height: 1.6;
  margin-bottom: 23px;
}
.blog-box3 .item-content .style-2 {
  line-height: 1.8;
}
@media only screen and (max-width: 991px) {
  .blog-box3 {
    padding-bottom: 0;
    margin-bottom: 0;
  }
}
/*------------------- 6.9 Brand -------------------*/
.brand-wrap1 {
  padding: 95px 0px 100px 0px;
  overflow: hidden;
}
@media only screen and (max-width: 991px) {
  .brand-wrap1 {
    padding: 60px 0px 50px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .brand-wrap1 {
    padding: 40px 0px 13px 0px;
  }
}
.brand-wrap2 {
  padding: 100px 0px 90px 0px;
  background-color: #ffffff;
}
@media only screen and (max-width: 991px) {
  .brand-wrap2 {
    padding: 45px 0;
  }
}
@media only screen and (max-width: 575px) {
  .brand-wrap2 {
    padding: 25px 0 0 0;
  }
}
.brand-wrap2 .col-xxl-5 {
  position: relative;
  width: 100%;
  flex: 0 0 20%;
  max-width: 20%;
}
@media only screen and (max-width: 991px) {
  .brand-wrap2 .col-xxl-5 {
    flex: 0 0 50%;
    max-width: 50%;
  }
}
@media only screen and (max-width: 479px) {
  .brand-wrap2 .col-xxl-5 {
    flex: 0 0 100%;
    max-width: 100%;
  }
}
.brand-wrap3 {
  padding: 70px 0px 65px 0px;
  background-color: #fbfbfb;
}
@media only screen and (max-width: 991px) {
  .brand-wrap3 {
    padding: 55px 0px 0px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .brand-wrap3 {
    padding: 35px 0px 0px 0px;
  }
}
.brand-box1 .section-subtitle {
  color: var(--rt-primary-color);
  font-size: 16px;
  font-weight: 500;
  font-family: "Ubuntu", sans-serif;
  text-transform: uppercase;
  letter-spacing: 1.1px;
  position: relative;
  padding: 0px 0px 0px 15px;
  margin-bottom: 8px;
  display: block;
}
.brand-box1 .section-subtitle:after {
  content: "";
  height: 7px;
  width: 7px;
  background: var(--rt-primary-color);
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0px;
  border: none;
  border-radius: 50%;
  z-index: -1;
}
.brand-box1 .section-title {
  color: #212121;
  font-size: 32px;
  font-weight: 600;
  line-height: 36px;
}
@media only screen and (max-width: 479px) {
  .brand-box1 .section-title {
    font-size: 26px;
    line-height: 32px;
  }
}
.brand-box1 p {
  font-size: 16px;
  color: #70778b;
  margin-bottom: 0;
}
@media only screen and (max-width: 991px) {
  .brand-box1 p {
    margin-bottom: 24px;
  }
}
@media only screen and (max-width: 575px) {
  .brand-box2 {
    text-align: center;
  }
}
.brand-box2 .item-img {
  margin: 0 auto;
}
.brand-box2 .item-img a {
  cursor: pointer;
  color: var(--rt-primary-color);
  background-color: transparent;
  display: inline-block;
  transition: all 0.3s ease-in-out;
  border-radius: 6px;
  padding: 10px 20px;
  text-align: center;
}
.brand-box2 .item-img a:hover img {
  filter: none;
  box-shadow: 0 9px 59px 0 rgba(0, 193, 148, 0.2);
  opacity: 1;
}
@media only screen and (max-width: 991px) {
  .brand-box2 .item-img a {
    min-height: 117px;
  }
}
.brand-box2 .item-img a img {
  filter: grayscale(100%);
  opacity: 0.7;
  display: block;
  transition: 0.3s ease-in-out;
  min-width: 200px;
  min-height: 117px;
}
/*------------------- 6.10 Breadcrumb -------------------*/
.breadcrumb-wrap {
  background-color: #eaf7f4;
  padding: 30px 0px;
  border-bottom: 1px solid #deede9;
}
@media only screen and (max-width: 575px) {
  .breadcrumb-wrap {
    padding: 20px 0;
  }
}
.breadcrumb-wrap .breadcrumb {
  padding: 0;
  margin: 0;
  background-color: transparent;
}
.breadcrumb-wrap .breadcrumb .breadcrumb-item a {
  color: #878c9f;
  font-size: 15px;
  transition: all 0.3s ease-in-out;
  font-weight: 500;
}
.breadcrumb-wrap .breadcrumb .breadcrumb-item a:hover {
  color: var(--rt-primary-color);
}
.breadcrumb-wrap .breadcrumb .active {
  color: var(--rt-primary-color);
  font-size: 15px;
  font-weight: 600;
}
.breadcrumb-wrap-2 {
  background-color: #fff;
}
.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  color: #878c9f;
  content: "\f105";
  font-weight: 600;
  font-family: "Font Awesome 5 Free";
}
/*------------------- 6.11 Contact -------------------*/
.contact-wrap {
  padding: 110px 0px 110px;
  border-bottom: 1px solid #e5e5e5;
}
@media only screen and (max-width: 991px) {
  .contact-wrap {
    padding: 70px 0px 52px;
  }
}
@media only screen and (max-width: 575px) {
  .contact-wrap {
    padding: 50px 0px 32px;
  }
}
.contact-box1 {
  display: flex;
  align-items: center;
  margin-bottom: 80px;
}
@media only screen and (max-width: 991px) {
  .contact-box1 {
    display: block;
    margin-bottom: 50px;
  }
}
@media only screen and (max-width: 991px) {
  .contact-box1 .contact-img {
    margin-bottom: 24px;
  }
}
@media only screen and (max-width: 991px) {
  .contact-box1 .contact-img img {
    width: 100%;
  }
}
.contact-box1 .contact-content {
  margin-left: 70px;
}
@media only screen and (max-width: 1199px) {
  .contact-box1 .contact-content {
    margin-left: 24px;
  }
}
@media only screen and (max-width: 991px) {
  .contact-box1 .contact-content {
    margin-left: 0;
  }
}
.contact-box1 .contact-content .contact-title {
  color: #212121;
  font-size: 32px;
  font-weight: 600;
  line-height: 40px;
}
@media only screen and (max-width: 479px) {
  .contact-box1 .contact-content .contact-title {
    font-size: 26px;
    line-height: 36px;
  }
}
.contact-box1 .contact-content .contact-list {
  margin-bottom: 24px;
}
.contact-box1 .contact-content .contact-list ul li {
  color: #70778b;
  display: block;
  margin-bottom: 5px;
  font-weight: 500;
  font-size: 15px;
}
.contact-box1 .contact-content .contact-list ul li:last-child {
  margin-bottom: 0;
}
.contact-box1 .contact-content .phone-box {
  position: relative;
  padding-left: 40px;
  border-bottom: 1px solid #f3f3f3;
  padding-bottom: 22px;
}
.contact-box1 .contact-content .phone-box .item-lebel {
  font-size: 15px;
  color: #70778b;
}
.contact-box1 .contact-content .phone-box .phone-number {
  color: #212121;
  font-size: 18px;
  font-weight: 700;
  font-family: "Roboto", sans-serif;
}
.contact-box1 .contact-content .phone-box .item-icon {
  position: absolute;
  bottom: 25px;
  left: 0;
}
.contact-box1 .contact-content .phone-box .item-icon i {
  color: var(--rt-primary-color);
  font-size: 22px;
}
.contact-box1 .contact-content .social-box {
  margin-top: 20px;
  position: relative;
  padding-left: 40px;
}
.contact-box1 .contact-content .social-box .item-lebel {
  font-size: 15px;
  color: #70778b;
  margin-bottom: 3px;
}
.contact-box1 .contact-content .social-box .item-social li {
  display: inline-block;
}
.contact-box1 .contact-content .social-box .item-social li a i {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #dfefeb;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  width: 41px;
  height: 39px;
  margin: 0 auto;
  transition: all 0.3s ease-in-out;
  overflow: hidden;
}
.contact-box1 .contact-content .social-box .item-social li a i:before {
  color: var(--rt-primary-color);
}
.contact-box1 .contact-content .social-box .item-social li a i:hover {
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
}
.contact-box1 .contact-content .social-box .item-social li a i:hover:before {
  -webkit-animation: toBottomFromTop 0.5s forwards;
  animation: toBottomFromTop 0.5s forwards;
  color: #ffffff;
}
.contact-box1 .contact-content .social-box .item-icon {
  position: absolute;
  bottom: 25px;
  left: 0;
}
.contact-box1 .contact-content .social-box .item-icon i {
  color: var(--rt-primary-color);
  font-size: 22px;
}
.contact-box2 {
  display: flex;
}
@media only screen and (max-width: 991px) {
  .contact-box2 {
    display: block;
    overflow: hidden;
  }
}
@media only screen and (max-width: 991px) {
  .contact-box2 .contact-img {
    margin-bottom: 24px;
  }
}
.contact-box2 .contact-img img {
  height: 100%;
}
@media only screen and (max-width: 991px) {
  .contact-box2 .contact-img img {
    width: 100%;
    height: auto;
  }
}
.contact-box2 .contact-content {
  margin-left: 70px;
  flex: 1;
  margin-top: -10px;
}
@media only screen and (max-width: 1199px) {
  .contact-box2 .contact-content {
    margin-left: 24px;
  }
}
@media only screen and (max-width: 991px) {
  .contact-box2 .contact-content {
    margin-left: 0;
    margin-top: 10px;
  }
}
.contact-box2 .contact-content .contact-title {
  color: #212121;
  font-size: 32px;
  font-weight: 600;
  line-height: 40px;
}
@media only screen and (max-width: 479px) {
  .contact-box2 .contact-content .contact-title {
    font-size: 26px;
    line-height: 36px;
  }
}
.contact-box2 .contact-content .contact-box .form-group label {
  color: #a7a7a7;
  font-size: 15px;
  font-family: "Roboto", sans-serif;
  font-weight: 400;
}
.contact-box2 .contact-content .contact-box .form-group .form-control {
  height: 47px;
  background-color: #f9fbfe;
  color: var(--rt-primary-color);
  border-color: #e5e5e5;
}
.contact-box2 .contact-content .contact-box .form-group .form-control:focus {
  box-shadow: none;
  outline: 0;
}
.contact-box2 .contact-content .contact-box .form-group .form-text {
  width: 100%;
  background-color: #f9fbfe;
  color: var(--rt-primary-color);
  border-color: #e5e5e5;
}
.contact-box2 .contact-content .contact-box .form-group .form-text:focus {
  box-shadow: none;
  outline: 0;
}
.contact-box2 .contact-content .contact-box .form-group .form-text::placeholder {
  padding-left: 10px;
}
.contact-box2 .contact-content .contact-box .form-group .item-btn {
  background-color: var(--rt-primary-color);
  width: 100%;
  height: 61px;
  display: inline-block;
  text-align: center;
  line-height: 60px;
  border: none;
  border-radius: 4px;
  color: #ffffff;
  font-size: 15px;
  font-weight: 500;
  position: relative;
  text-transform: uppercase;
  z-index: 1;
  transition: all 0.3s ease-in-out;
}
.contact-box2 .contact-content .contact-box .form-group .item-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background: rgba(0, 0, 0, 0.15);
  position: absolute;
  bottom: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
  border: none;
  border-radius: 4px;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.contact-box2 .contact-content .contact-box .form-group .item-btn:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
  transition: all 0.3s ease-in-out;
}
/*------------------- 6.12 Error Page-------------------*/
.error-wrap {
  padding: 230px 0px 180px;
  border-bottom: 1px solid #e5e5e5;
}
@media only screen and (max-width: 991px) {
  .error-wrap {
    padding: 150px 0px;
  }
}
@media only screen and (max-width: 767px) {
  .error-wrap {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .error-wrap {
    padding: 50px 0px;
  }
}
.error-box {
  text-align: center;
  position: relative;
  z-index: 1;
}
.error-box .shape-img1 {
  margin-bottom: 85px;
}
@media only screen and (max-width: 767px) {
  .error-box .shape-img1 {
    margin-bottom: 20px;
  }
}
.error-box .error-title {
  color: #000000;
  font-size: 40px;
  font-weight: 600;
  line-height: 48px;
  font-family: "CerebriSansPro", sans-serif;
  margin-bottom: 35px;
  max-width: 400px;
  width: 100%;
  margin-left: auto;
  margin-right: auto;
}
@media only screen and (max-width: 575px) {
  .error-box .error-title {
    font-size: 36px;
    line-height: 42px;
    margin-bottom: 24px;
  }
}
@media only screen and (max-width: 479px) {
  .error-box .error-title {
    font-size: 32px;
    line-height: 36px;
  }
}
.error-box .error-button .item-btn {
  background-color: var(--rt-primary-color);
  padding: 15px 50px;
  display: inline-block;
  border: none;
  border-radius: 4px;
  color: #ffffff;
  font-size: 15px;
  font-weight: 700;
  position: relative;
  text-transform: uppercase;
  z-index: 1;
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 575px) {
  .error-box .error-button .item-btn {
    padding: 18px 45px;
  }
}
@media only screen and (max-width: 479px) {
  .error-box .error-button .item-btn {
    padding: 15px 35px;
  }
}
.error-box .error-button .item-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background: rgba(0, 0, 0, 0.15);
  position: absolute;
  bottom: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
  border: none;
  border-radius: 4px;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.error-box .error-button .item-btn:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 767px) {
  .error-shape-list {
    display: none;
  }
}
.error-shape-list ul li {
  height: 130px;
  width: 130px;
  background-color: #f8cab8;
  border: none;
  border-radius: 50%;
  filter: blur(50px);
}
.error-shape-list ul li:nth-child(1n) {
  position: absolute;
  top: 50%;
  left: 10%;
}
.error-shape-list ul li:nth-child(2n) {
  position: absolute;
  top: -24%;
  left: 12%;
}
.error-shape-list ul li:nth-child(3n) {
  position: absolute;
  top: -10px;
  left: 55%;
  z-index: -1;
}
/*------------------- 6.13 Feature -------------------*/
.feature-wrap1 {
  padding: 110px 0px;
  overflow: hidden;
}
@media only screen and (max-width: 991px) {
  .feature-wrap1 {
    padding: 70px 0;
  }
}
@media only screen and (max-width: 575px) {
  .feature-wrap1 {
    padding: 50px 0;
  }
}
.feature-wrap2 {
  background-color: #0E2E50;
  padding: 100px 0px;
}
@media only screen and (max-width: 991px) {
  .feature-wrap2 {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .feature-wrap2 {
    padding: 50px 0px;
  }
}
@media only screen and (max-width: 991px) {
  .feature-wrap2 .item-heading-left {
    margin-bottom: 0px;
  }
}
.feature-wrap2 .item-heading-left .section-title {
  color: #fff;
}
.feature-wrap2 .item-heading-left .background-title {
  color: #3B5774;
  -webkit-text-stroke-color: #3B5774;
  opacity: 1;
}
.feature-box1 {
  padding-right: 80px;
}
@media only screen and (max-width: 1199px) {
  .feature-box1 {
    padding-right: 0;
  }
}
@media only screen and (max-width: 991px) {
  .feature-box1 {
    margin-bottom: 40px;
  }
}
.feature-box1 .item-categoery {
  margin-bottom: 20px;
}
.feature-box1 .item-categoery a {
  color: #ffffff;
  font-size: 15px;
  font-weight: 400;
  font-family: "Ubuntu", sans-serif;
  padding: 7px 15px;
  line-height: 1;
  display: inline-block;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 3px;
  position: relative;
}
.feature-box1 .item-categoery a:before {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  background-color: #fff;
  left: 5px;
  top: 11px;
  border: none;
  border-radius: 50%;
}
.feature-box1 .heading-title h2 {
  color: #212121;
  font-size: 36px;
  line-height: 42px;
  font-weight: 500;
  padding-right: 30px;
}
@media only screen and (max-width: 1199px) {
  .feature-box1 .heading-title h2 {
    font-size: 32px;
    line-height: 36px;
    padding-right: 0;
  }
}
@media only screen and (max-width: 991px) {
  .feature-box1 .heading-title h2 {
    padding-right: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .feature-box1 .heading-title h2 {
    padding-right: 0px;
  }
}
@media only screen and (max-width: 479px) {
  .feature-box1 .heading-title h2 {
    font-size: 26px;
    line-height: 32px;
  }
}
.feature-box1 .heading-title h2 i {
  color: #2cdb59;
  font-size: 24px;
  margin-left: 10px;
}
.feature-box1 .location-area {
  color: #878c9f;
  font-size: 15px;
  margin-bottom: 12px;
}
.feature-box1 .location-area i {
  margin-right: 7px;
}
.feature-box1 p {
  border-top: 1px solid #e1e1e1;
  padding-top: 23px;
  padding-bottom: 25px;
  margin: 0;
}
.feature-box1 .item-categoery3 {
  margin-bottom: 24px;
}
.feature-box1 .item-categoery3 ul {
  display: flex;
  justify-content: space-between;
}
@media only screen and (max-width: 320px) {
  .feature-box1 .item-categoery3 ul {
    display: block;
  }
}
.feature-box1 .item-categoery3 ul li {
  display: flex;
  margin-right: 10px;
  align-items: center;
  font-size: 14px;
  font-weight: 600;
}
@media only screen and (max-width: 479px) {
  .feature-box1 .item-categoery3 ul li {
    margin-right: 5px;
  }
}
.feature-box1 .item-categoery3 ul li:last-child {
  margin-right: 0;
}
.feature-box1 .item-categoery3 ul li i {
  color: var(--rt-primary-color);
  margin-right: 10px;
  height: 30px;
  width: 30px;
  background-color: #edf9f6;
  border: none;
  border-radius: 50%;
  display: inline-block;
  line-height: 35px;
  text-align: center;
  font-size: 14px;
}
@media only screen and (max-width: 1199px) {
  .feature-box1 .item-categoery3 ul li i {
    margin-right: 6px;
  }
}
@media only screen and (max-width: 479px) {
  .feature-box1 .item-categoery3 ul li i {
    background-color: transparent;
    border: none;
    border-radius: 0;
    display: initial;
    line-height: 0px;
  }
}
.feature-box1 .price-area-style-1 {
  display: flex;
  justify-content: space-between;
  border-top: 1px solid #e1e1e1;
  padding-top: 25px;
}
.feature-box1 .price-area-style-1 .item-price {
  color: var(--rt-primary-color);
  font-size: 36px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
  margin-bottom: 40px;
}
@media only screen and (max-width: 1199px) {
  .feature-box1 .price-area-style-1 .item-price {
    font-size: 26px;
    margin-bottom: 20px;
  }
}
@media only screen and (max-width: 479px) {
  .feature-box1 .price-area-style-1 .item-price {
    font-size: 22px;
  }
}
.feature-box1 .price-area-style-1 .details-button a {
  display: inline-block;
  padding: 10px 30px;
  color: var(--rt-primary-color);
  font-family: "Roboto", sans-serif;
  font-size: 15px;
  font-weight: 700;
  background: #edf9f6;
  border: none;
  border-radius: 4px;
  position: relative;
  z-index: 1;
  transition: all 0.3s ease-in-out;
}
.feature-box1 .price-area-style-1 .details-button a:after {
  content: "";
  height: 100%;
  width: 0;
  background: var(--rt-primary-color);
  position: absolute;
  bottom: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
  border: none;
  border-radius: 4px;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.feature-box1 .price-area-style-1 .details-button a:hover {
  color: #ffffff;
}
.feature-box1 .price-area-style-1 .details-button a:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
}
.featured-thumb-slider-area {
  position: relative;
}
.featured-thumb-slider-area .feature-box2 {
  position: relative;
}
.featured-thumb-slider-area .feature-box2 .feature-img1 {
  position: relative;
  border-radius: 8px;
}
.featured-thumb-slider-area .feature-box2 .feature-img1:before {
  content: "";
  height: 20%;
  width: 100%;
  background-image: linear-gradient(to top, #000, transparent);
  opacity: 40%;
  position: absolute;
  bottom: 0;
  left: 0;
  border-radius: 8px;
}
.featured-thumb-slider-area .feature-box2 .feature-img1 img {
  border-radius: 8px;
}
.featured-thumb-slider-area .inner-box-2 {
  position: absolute;
  left: 0;
  bottom: 40px;
  right: 0;
  margin: 0 auto;
  z-index: 2;
  width: calc(100% - 80px);
}
@media (max-width: 575px) {
  .featured-thumb-slider-area .inner-box-2 {
    width: calc(100% - 30px);
    bottom: 20px;
  }
}
.featured-thumb-slider-area .inner-box-2 .item-img img {
  border-radius: 5px;
  border: 5px solid #fff;
}
.feature-rent-wrap1 {
  padding: 100px 0 80px;
}
@media only screen and (max-width: 991px) {
  .feature-rent-wrap1 {
    padding: 60px 0 40px;
  }
}
@media only screen and (max-width: 575px) {
  .feature-rent-wrap1 {
    padding: 40px 0 20px;
  }
}
@media only screen and (max-width: 767px) {
  .feature-rent-wrap1 .item-heading-left {
    margin-bottom: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .feature-rent-wrap1 .heading-button {
    text-align: left;
  }
}
@media only screen and (max-width: 575px) {
  .feature-rent-wrap1 .heading-button {
    text-align: center;
  }
}
.feature-rent-wrap1 .heading-button .heading-btn {
  color: var(--rt-primary-color);
  font-weight: 500;
  background-color: #eaf7f4;
  padding: 10px 30px;
}
.feature-rent-wrap1 .heading-button .heading-btn:after {
  background-color: var(--rt-primary-color);
}
.feature-rent-wrap1 .heading-button .heading-btn:hover {
  color: #ffffff;
}
.feature-box3 .swiper-slide .feature-img1 {
  margin-bottom: 7px;
}
.feature-box3 .swiper-slide .feature-img1 img {
  border-radius: 6px;
}
.feature-box3.swiper-container {
  z-index: 0;
}
.featured-thum-slider2 .swiper-slide .item-img {
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  cursor: pointer;
}
.featured-thum-slider2 .swiper-slide .item-img img {
  border-radius: 3px;
  filter: grayscale(100%);
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  transition: all 0.3s ease-in-out;
  opacity: 0.6;
}
.featured-thum-slider2 .swiper-slide .item-img img:hover {
  filter: grayscale(0);
  opacity: 1;
}
.featured-thum-slider2 .swiper-slide-thumb-active .item-img img {
  filter: grayscale(0);
  opacity: 1;
}
.rent-box1 {
  padding: 30px;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  background-color: #fff;
  border-radius: 6px;
  position: relative;
}
@media only screen and (max-width: 991px) {
  .rent-box1 {
    margin-bottom: 24px;
  }
}
@media only screen and (max-width: 479px) {
  .rent-box1 {
    padding: 20px;
  }
}
.rent-box1:hover .item-img a img {
  transform: scale(1.1);
}
.rent-box1 .item-img {
  position: relative;
  margin-bottom: 24px;
  overflow: hidden;
}
.rent-box1 .item-img a img {
  border-radius: 6px;
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
.rent-box1 .item-img .item-category-box1 {
  position: absolute;
  top: 30px;
  left: 30px;
  z-index: 5;
}
.rent-box1 .item-img .item-category-box1::after {
  content: "";
  position: absolute;
  top: -31px;
  left: 50%;
  background-image: url({{asset('assets/assets/dashbord/img/listing-label.svg')}});
  width: 51px;
  height: 40px;
  margin-left: -27.5px;
}
@media only screen and (max-width: 1199px) {
  .rent-box1 .item-img .item-category-box1 {
    left: 20px;
  }
}
.rent-box1 .item-img .item-category-box1 .item-category {
  color: #ffffff;
  font-size: 13px;
  font-weight: 400;
  font-family: "Ubuntu", sans-serif;
  padding: 3px 20px;
  display: inline-block;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 2px;
  position: relative;
}
.rent-box1 .item-img .item-category-box1 .item-category:before {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  background-color: #fff;
  left: 10px;
  top: 16px;
  border: none;
  border-radius: 50%;
}
.rent-box1 .item-content .item-title {
  font-size: 31px;
  line-height: 36px;
  font-weight: 500;
  margin-bottom: 12px;
}
@media only screen and (max-width: 479px) {
  .rent-box1 .item-content .item-title {
    font-size: 20px;
    line-height: 26px;
  }
}
.rent-box1 .item-content .item-title a {
  color: #212121;
  transition: all 0.3s ease-in-out;
}
.rent-box1 .item-content .item-title a:hover {
  color: var(--rt-primary-color);
}
.rent-box1 .item-content .location-area {
  color: #929292;
  font-size: 15px;
  margin-bottom: 10px;
}
.rent-box1 .item-content .location-area i {
  margin-right: 7px;
  position: relative;
  top: 3px;
}
.rent-box1 .item-content .item-categoery3 ul {
  display: flex;
  justify-content: space-between;
}
@media only screen and (max-width: 320px) {
  .rent-box1 .item-content .item-categoery3 ul {
    display: block;
  }
}
.rent-box1 .item-content .item-categoery3 ul li {
  display: flex;
  margin-right: 10px;
  align-items: center;
  font-size: 14px;
  font-weight: 500;
}
@media only screen and (max-width: 479px) {
  .rent-box1 .item-content .item-categoery3 ul li {
    margin-right: 5px;
  }
}
.rent-box1 .item-content .item-categoery3 ul li:last-child {
  margin-right: 0;
}
.rent-box1 .item-content .item-categoery3 ul li i {
  color: var(--rt-primary-color);
  margin-right: 10px;
  height: 30px;
  width: 30px;
  background-color: #edf9f6;
  border: none;
  border-radius: 50%;
  display: inline-block;
  line-height: 35px;
  text-align: center;
  font-size: 14px;
}
@media only screen and (max-width: 1199px) {
  .rent-box1 .item-content .item-categoery3 ul li i {
    margin-right: 6px;
  }
}
@media only screen and (max-width: 479px) {
  .rent-box1 .item-content .item-categoery3 ul li i {
    background-color: transparent;
    border: none;
    border-radius: 0;
    display: initial;
    line-height: 0px;
  }
}
.rent-feature1 {
  padding: 20px;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  background-color: #fff;
  border-radius: 6px;
  position: relative;
  margin-bottom: 24px;
}
.rent-feature1:hover .rent-box2 .item-img a img {
  transform: scale(1.1);
}
.rent-feature1 .rent-box2 {
  display: flex;
  position: relative;
  align-items: center;
}
@media only screen and (max-width: 767px) {
  .rent-feature1 .rent-box2 {
    display: block;
    overflow: hidden;
  }
}
.rent-feature1 .rent-box2 .item-img {
  position: relative;
  z-index: 2;
  overflow: hidden;
  cursor: pointer;
}
@media only screen and (max-width: 767px) {
  .rent-feature1 .rent-box2 .item-img {
    margin-bottom: 20px;
  }
}
.rent-feature1 .rent-box2 .item-img:before {
  content: "";
  height: 40%;
  width: 100%;
  background-image: linear-gradient(to top, #000, transparent);
  opacity: 60%;
  position: absolute;
  bottom: 0;
  left: 0;
  border-radius: 6px;
  z-index: 1;
}
.rent-feature1 .rent-box2 .item-img a img {
  border-radius: 6px;
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 767px) {
  .rent-feature1 .rent-box2 .item-img a img {
    width: 100%;
  }
}
.rent-feature1 .rent-box2 .item-img .item-category {
  position: absolute;
  top: 10px;
  left: 10px;
}
.rent-feature1 .rent-box2 .item-img .item-category a {
  color: #ffffff;
  font-size: 13px;
  font-weight: 400;
  font-family: "Ubuntu", sans-serif;
  padding: 3px 20px;
  display: inline-block;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 3px;
  position: relative;
}
.rent-feature1 .rent-box2 .item-img .item-category a:before {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  background-color: #fff;
  left: 10px;
  top: 50%;
  transform: translateY(-50%);
  border: none;
  border-radius: 50%;
}
.rent-feature1 .rent-box2 .item-content {
  overflow: hidden;
  justify-content: center;
  display: flex;
  flex-direction: column;
  width: 100%;
  padding: 0px 30px;
  flex: 1;
}
@media only screen and (max-width: 1199px) {
  .rent-feature1 .rent-box2 .item-content {
    flex: auto;
  }
}
@media only screen and (max-width: 991px) {
  .rent-feature1 .rent-box2 .item-content {
    flex: 1;
  }
}
@media only screen and (max-width: 767px) {
  .rent-feature1 .rent-box2 .item-content {
    padding: 0;
  }
}
.rent-feature1 .rent-box2 .item-content .item-title {
  font-size: 20px;
  line-height: 30px;
  font-weight: 500;
  margin-bottom: 8px;
}
.rent-feature1 .rent-box2 .item-content .item-title a {
  color: #212121;
  transition: all 0.3s ease-in-out;
  overflow: hidden !important;
  text-overflow: ellipsis !important;
  display: -webkit-box !important;
  -webkit-line-clamp: 1 !important;
  -webkit-box-orient: vertical;
}
.rent-feature1 .rent-box2 .item-content .item-title a:hover {
  color: var(--rt-primary-color);
}
.rent-feature1 .rent-box2 .item-content .location-area {
  color: #929292;
  font-size: 15px;
  margin-bottom: 5px;
}
.rent-feature1 .rent-box2 .item-content .location-area i {
  margin-right: 7px;
  position: relative;
  top: 3px;
}
.rent-feature1 .rent-box2 .item-content .item-categoery3 {
  margin-bottom: 5px;
}
.rent-feature1 .rent-box2 .item-content .item-categoery3 ul {
  display: flex;
  justify-content: space-between;
}
@media only screen and (max-width: 320px) {
  .rent-feature1 .rent-box2 .item-content .item-categoery3 ul {
    display: block;
  }
}
.rent-feature1 .rent-box2 .item-content .item-categoery3 ul li {
  display: flex;
  margin-right: 10px;
  align-items: center;
  font-size: 14px;
  font-weight: 500;
}
@media only screen and (max-width: 479px) {
  .rent-feature1 .rent-box2 .item-content .item-categoery3 ul li {
    margin-right: 5px;
  }
}
.rent-feature1 .rent-box2 .item-content .item-categoery3 ul li:last-child {
  margin-right: 0;
}
.rent-feature1 .rent-box2 .item-content .item-categoery3 ul li i {
  color: var(--rt-primary-color);
  margin-right: 7px;
  font-size: 15px;
}
.rent-feature1 .rent-box2 .item-content .rent-price .item-price {
  color: var(--rt-primary-color);
  font-size: 22px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
}
@media only screen and (max-width: 320px) {
  .rent-feature1 .rent-box2 .item-content .rent-price .item-price {
    font-size: 22px;
  }
}
.rent-feature1 .rent-box2 .item-content .rent-price .item-price span {
  color: #cccccc;
  font-size: 16px;
  font-weight: 400;
}
.rent-feature1 .rent-box2 .item-content .rent-price .item-price span i {
  font-size: 18px;
  font-style: normal;
  position: relative;
  top: 2px;
}
.feature-layout-style-1 .feature-box4 {
  border-radius: 10px;
  overflow: hidden;
  background-color: #fff;
  text-align: center;
  height: 100%;
  padding: 20px;
  transition: 0.4s ease-in-out;
  min-height: 230px;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
  z-index: 1;
}
.feature-layout-style-1 .feature-box4:before {
  content: "";
  width: 50px;
  height: 50px;
  position: absolute;
  border-radius: 50%;
  right: -50px;
  bottom: -50px;
  transition: 0.6s ease-in-out;
  z-index: -1;
  opacity: 0.7;
  background-color: var(--rt-primary-color);
}
.feature-layout-style-1 .feature-box4:hover {
  background-color: var(--rt-primary-color);
}
.feature-layout-style-1 .feature-box4:hover:before {
  transform: scale(30);
  left: -50px;
  top: -50px;
  bottom: auto;
  right: auto;
}
.feature-layout-style-1 .feature-box4:hover .item-img img {
  filter: brightness(0) invert(1);
  animation: bottomtotop 0.6s cubic-bezier(0, 0, 0.26, 0.94) forwards;
}
.feature-layout-style-1 .feature-box4:hover .item-content .item-title a {
  color: #fff;
}
.feature-layout-style-1 .feature-box4:hover .item-content .item-categoery {
  color: #fff;
}
.feature-layout-style-1 .feature-box4 .item-img {
  margin-bottom: 18px;
  overflow: hidden;
  position: relative;
}
.feature-layout-style-1 .feature-box4 .item-img img {
  transition: 0.4s ease-in-out;
  display: inline-block;
}
.feature-layout-style-1 .feature-box4 .item-content .item-title {
  margin-bottom: 15px;
}
.feature-layout-style-1 .feature-box4 .item-content .item-title a {
  font-weight: 500;
  font-size: 20px;
  line-height: 23px;
  color: #000;
  transition: 0.3s ease-in-out;
}
.feature-layout-style-1 .feature-box4 .item-content .item-categoery {
  font-weight: 400;
  font-size: 14px;
  line-height: 16px;
  color: #686868;
  transition: 0.3s ease-in-out;
}
.feature-wrap2 .feature-layout-nav-button-wrap {
  text-align: right;
}
@media only screen and (max-width: 991px) {
  .feature-wrap2 .feature-layout-nav-button-wrap {
    text-align: left;
    margin-bottom: 30px;
  }
}
@media only screen and (max-width: 575px) {
  .feature-wrap2 .feature-layout-nav-button-wrap {
    text-align: center;
  }
}
.feature-wrap2 .feature-layout-nav-button-wrap .feature-btn-prev {
  border-radius: 4px;
  width: 45px;
  height: 42px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background-color: #fff;
  font-size: 16px;
  font-weight: 600;
  color: var(--rt-primary-color);
}
.feature-wrap2 .feature-layout-nav-button-wrap .feature-btn-next {
  border-radius: 4px;
  width: 45px;
  height: 42px;
  line-height: 42px;
  background-color: #fff;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  position: relative;
  font-size: 16px;
  font-weight: 600;
  color: var(--rt-primary-color);
}
/*------------------- 6.14 Form Wrap -------------------*/
.form-section-wrap1 {
  padding: 40px;
  background-color: #fff;
  box-shadow: 0 4px 18px 0 rgba(194, 200, 213, 0.3);
  border: none;
  border-radius: 6px;
  z-index: 2;
}
@media only screen and (max-width: 1199px) {
  .form-section-wrap1 {
    padding: 20px;
  }
}
.form-section-wrap1 .element-list li {
  position: absolute;
  z-index: -1;
}
.form-section-wrap1 .element-list li .motion-effects6 {
  filter: brightness(100%) contrast(100%) saturate(100%) blur(0) hue-rotate(289deg);
  z-index: -1;
}
.form-section-wrap1 .element-list li .motion-effects7 {
  filter: brightness(100%) contrast(100%) saturate(100%) blur(0) hue-rotate(289deg);
  z-index: -1;
}
.form-section-wrap1 .element-list li:nth-child(1) {
  right: 15%;
  top: 19%;
  z-index: -1;
}
.form-section-wrap1 .element-list li:nth-child(2) {
  right: 13%;
  bottom: 40px;
  z-index: -1;
}
.form-section-wrap1 .item-title {
  font-size: 30px;
  font-weight: 600;
  line-height: 36px;
}
.form-section-wrap1 .item-title a {
  color: #212121;
  transition: all 0.3s ease-in-out;
}
.form-section-wrap1 .item-title a:hover {
  color: var(--rt-primary-color);
}
.form-section-wrap1 .rent-form .form-check-box {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}
@media only screen and (max-width: 1199px) {
  .form-section-wrap1 .rent-form .form-check-box {
    display: block;
  }
}
@media only screen and (max-width: 320px) {
  .form-section-wrap1 .rent-form .form-check-box {
    display: block;
  }
}
.form-section-wrap1 .rent-form .form-check-box .checkbox-button__label-2 {
  color: #70778b;
  font-size: 15px;
  font-weight: 600;
  line-height: 30px;
}
.form-section-wrap1 .rent-form .form-grid .form-group {
  margin-bottom: 10px;
}
.form-section-wrap1 .rent-form .form-grid .form-group .form-control {
  background-color: #eef2f8;
  color: var(--rt-primary-color);
  height: 47px;
  border: none;
}
.form-section-wrap1 .rent-form .form-grid .form-group .form-control:focus {
  outline: 0;
  box-shadow: none;
}
.form-section-wrap1 .rent-form .form-grid .form-group ::placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.form-section-wrap1 .rent-form .form-grid .form-group .form-icon-area {
  position: relative;
}
.form-section-wrap1 .rent-form .form-grid .form-group .form-icon-area .form-icon {
  font-size: 18px;
  position: absolute;
  bottom: 10px;
  right: 20px;
}
.form-section-wrap1 .rent-form .select-area {
  margin-bottom: 10px;
}
.form-section-wrap1 .rent-form .select-area .price-content {
  margin-bottom: 10px;
}
.form-section-wrap1 .rent-form .select-area .price-content .nice-select {
  float: none;
  padding-right: 0;
  padding-left: 0;
  border: none;
  border-radius: 4px;
  background: #eef2f8;
  height: 47px;
  line-height: 47px;
}
.form-section-wrap1 .rent-form .select-area .price-content .nice-select:after {
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 7px 5px 0 5px;
  border-color: #686868 transparent transparent transparent;
  transform: rotate(0);
}
.form-section-wrap1 .rent-form .select-area .price-content .nice-select .current {
  margin-left: 10px;
  font-size: 15px;
  color: #878c9f;
}
.form-section-wrap1 .rent-form .select-area .price-content .nice-select .list {
  margin-top: 1px;
}
.form-section-wrap1 .rent-form .select-area .price-content .nice-select .list li {
  padding-right: 64px;
}
.form-section-wrap1 .rent-form .select-area .price-content .nice-select.open:after {
  -webkit-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  transform: rotate(360deg);
  border-color: var(--rt-primary-color) transparent transparent transparent;
}
@media only screen and (max-width: 575px) {
  .form-section-wrap1 .rent-form .select-area .space-content {
    margin-bottom: 15px;
  }
}
.form-section-wrap1 .rent-form .select-area .space-content .nice-select {
  float: none;
  padding-right: 0;
  padding-left: 0;
  border: none;
  border-radius: 4px;
  background: #eef2f8;
  height: 47px;
  line-height: 47px;
}
.form-section-wrap1 .rent-form .select-area .space-content .nice-select:after {
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 7px 5px 0 5px;
  border-color: #686868 transparent transparent transparent;
  transform: rotate(0);
}
.form-section-wrap1 .rent-form .select-area .space-content .nice-select .current {
  margin-left: 10px;
  font-size: 15px;
  color: #878c9f;
}
.form-section-wrap1 .rent-form .select-area .space-content .nice-select .list {
  margin-top: 1px;
}
.form-section-wrap1 .rent-form .select-area .space-content .nice-select .list li {
  padding-right: 52px;
}
.form-section-wrap1 .rent-form .select-area .space-content .nice-select.open:after {
  -webkit-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  transform: rotate(360deg);
  border-color: var(--rt-primary-color) transparent transparent transparent;
}
.form-section-wrap1 .rent-form .select-area .room-content .nice-select {
  float: none;
  padding-right: 0;
  padding-left: 0;
  border: none;
  border-radius: 4px;
  background: #eef2f8;
  height: 47px;
  line-height: 47px;
}
.form-section-wrap1 .rent-form .select-area .room-content .nice-select:after {
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 7px 5px 0 5px;
  border-color: #212121 transparent transparent transparent;
  transform: rotate(0);
}
.form-section-wrap1 .rent-form .select-area .room-content .nice-select .current {
  margin-left: 10px;
  font-size: 15px;
  color: #878c9f;
}
.form-section-wrap1 .rent-form .select-area .room-content .nice-select .list {
  margin-top: 1px;
}
.form-section-wrap1 .rent-form .select-area .room-content .nice-select .list li {
  padding-right: 52px;
}
.form-section-wrap1 .rent-form .select-area .room-content .nice-select.open:after {
  -webkit-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  transform: rotate(360deg);
  border-color: var(--rt-primary-color) transparent transparent transparent;
}
.form-section-wrap1 .rent-form .form-group-button:hover .form-btn {
  color: #ffffff;
}
.form-section-wrap1 .rent-form .form-group-button:hover .form-btn:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
  transition: all 0.3s ease-in-out;
}
.form-section-wrap1 .rent-form .form-group-button .form-btn {
  display: inline-block;
  background-color: var(--rt-primary-color);
  font-size: 15px;
  font-weight: 700;
  color: #fff;
  line-height: 47px;
  text-align: center;
  width: 100%;
  height: 47px;
  border: none;
  border-radius: 4px;
  position: relative;
  transition: all 0.3s ease-in-out;
  z-index: 1;
}
.form-section-wrap1 .rent-form .form-group-button .form-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background-color: rgba(0, 0, 0, 0.15);
  position: absolute;
  bottom: 0;
  left: 0;
  border: none;
  border-radius: 4px;
  visibility: hidden;
  opacity: 0;
  transition: all 0.3s ease-in-out;
  z-index: -1;
}
/*------------------- 6.15 Grid Wrap -------------------*/
.grid-wrap1 {
  padding: 40px 0px;
  background-color: #eaf7f4;
}
@media only screen and (max-width: 991px) {
  .grid-wrap1 {
    padding: 30px 0px 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .grid-wrap1 {
    padding: 10px 0px 50px 0px;
  }
}
.grid-wrap1 .item-shorting-box {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 24px;
  margin-top: 40px;
}
@media only screen and (max-width: 575px) {
  .grid-wrap1 .item-shorting-box {
    display: block;
    text-align: center;
    margin-top: 20px;
  }
}
@media only screen and (max-width: 375px) {
  .grid-wrap1 .item-shorting-box {
    text-align: center;
  }
}
.grid-wrap1 .item-shorting-box .shorting-title .item-title {
  font-weight: 500;
  font-size: 18px;
  margin-bottom: 0;
}
@media only screen and (max-width: 575px) {
  .grid-wrap1 .item-shorting-box .shorting-title .item-title {
    margin-bottom: 15px;
  }
}
.grid-wrap1 .item-shorting-box .item-shorting-box-2 {
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 575px) {
  .grid-wrap1 .item-shorting-box .item-shorting-box-2 {
    justify-content: center;
  }
}
@media only screen and (max-width: 320px) {
  .grid-wrap1 .item-shorting-box .item-shorting-box-2 {
    display: block;
    margin-bottom: 20px;
  }
}
.grid-wrap1 .item-shorting-box .item-shorting-box-2 .by-shorting {
  display: flex;
  align-items: center;
  margin-right: 16px;
}
@media only screen and (max-width: 320px) {
  .grid-wrap1 .item-shorting-box .item-shorting-box-2 .by-shorting {
    margin-bottom: 24px;
    margin-right: 0;
    justify-content: center;
  }
}
.grid-wrap1 .item-shorting-box .item-shorting-box-2 .by-shorting .shorting {
  color: #212121;
  font-weight: 700;
  font-size: 15px;
  margin-right: 5px;
}
.grid-wrap2 {
  padding: 50px 0px 80px 0px;
}
@media only screen and (max-width: 991px) {
  .grid-wrap2 {
    padding: 70px 0px 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .grid-wrap2 {
    padding: 50px 0px;
  }
}
.grid-wrap2 .map-form {
  margin-bottom: 20px;
}
.grid-wrap2 .map-form .form-control {
  height: 60px;
  width: 100%;
  border: 1px solid #e8e8e8;
  color: var(--rt-primary-color);
}
@media only screen and (max-width: 991px) {
  .grid-wrap2 .map-form .form-control {
    margin-bottom: 20px !important;
  }
}
.grid-wrap2 .map-form .form-control:focus {
  outline: 0;
  box-shadow: none;
}
.grid-wrap2 .map-form ::placeholder {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
}
.grid-wrap2 .map-form .rld-single-select {
  margin-top: 20px;
  margin-bottom: 40px;
}
@media only screen and (max-width: 767px) {
  .grid-wrap2 .map-form .rld-single-select {
    margin-bottom: 0 !important;
    margin-top: 0;
    overflow: visible;
  }
}
.grid-wrap2 .map-form .rld-single-select .single-select {
  border: 1px solid #e8e8e8;
}
.grid-wrap2 .map-form .rld-single-select .single-select .current {
  font-size: 15px;
  font-weight: 400;
}
.grid-wrap2 .map-form .rld-single-select2 {
  margin: 0;
}
.grid-wrap3 {
  padding: 50px 0px 110px;
  background-color: #eaf7f4;
}
@media only screen and (max-width: 991px) {
  .grid-wrap3 {
    padding: 30px 0px 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .grid-wrap3 {
    padding: 10px 0px 50px 0px;
  }
}
/*------------------- 6.16 Location -------------------*/
.location-wrap1 {
  padding: 100px 0px 110px;
  background-color: #eaf7f4;
  overflow: hidden;
}
@media only screen and (max-width: 1199px) {
  .location-wrap1 {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .location-wrap1 {
    padding: 50px 0px;
  }
}
@media only screen and (max-width: 767px) {
  .location-wrap1 .item-heading-left {
    margin-bottom: 15px;
  }
}
@media only screen and (max-width: 767px) {
  .location-wrap1 .heading-button {
    text-align: left;
  }
}
@media only screen and (max-width: 575px) {
  .location-wrap1 .heading-button {
    text-align: center;
  }
}
.location-box1 {
  position: relative;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
}
@media only screen and (max-width: 1199px) {
  .location-box1 {
    margin-bottom: 24px;
  }
}
.location-box1:hover {
  box-shadow: none;
}
.location-box1:hover .item-img a img {
  transform: scale(1.04);
}
.location-box1:hover .item-content .location-button .location-btn {
  transform: rotate(0deg);
  background-color: var(--rt-primary-color);
  color: #ffffff;
}
.location-box1 .item-img {
  position: relative;
}
.location-box1 .item-img a img {
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 991px) {
  .location-box1 .item-img a img {
    width: 100%;
  }
}
.location-box1 .item-content {
  background-color: #ffffff;
  padding: 30px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
}
@media only screen and (max-width: 1199px) {
  .location-box1 .item-content {
    padding: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .location-box1 .item-content {
    padding: 30px;
  }
}
.location-box1 .item-content .content-body .item-category {
  color: #70778b;
  font-size: 15px;
  font-weight: 500;
  position: relative;
}
.location-box1 .item-content .content-body .item-title h3 {
  font-size: 22px;
  font-weight: 600;
  line-height: 30px;
}
.location-box1 .item-content .content-body .item-title h3 a {
  color: #212121;
  transition: all 0.3s ease-in-out;
}
.location-box1 .item-content .content-body .item-title h3 a:hover {
  color: var(--rt-primary-color);
}
.location-box1 .item-content .location-button .location-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 40px;
  width: 40px;
  color: var(--rt-primary-color);
  background-color: #e6f9f5;
  font-size: 18px;
  border: none;
  border-radius: 50%;
  transform: rotate(-45deg);
  transition: all 0.3s ease-in-out;
}
.location-box3 {
  position: relative;
  margin-bottom: 24px;
}
.location-box3:hover {
  box-shadow: none;
}
.location-box3:hover .item-img a img {
  transform: scale(1.04);
}
.location-box3:hover .item-content .location-button .location-btn {
  transform: rotate(0deg);
  background-color: var(--rt-primary-color);
  color: #ffffff;
}
.location-box3 .item-img {
  position: relative;
  z-index: 1;
  overflow: hidden;
  border-radius: 6px;
}
.location-box3 .item-img:before {
  content: "";
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: 1;
  transition: all 0.3s ease-in-out;
  cursor: pointer;
}
.location-box3 .item-img a img {
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
.location-box3 .item-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: absolute;
  bottom: 20px;
  left: 30px;
  right: 30px;
  z-index: 5;
}
@media only screen and (max-width: 1199px) {
  .location-box3 .item-content {
    left: 20px;
    bottom: 10px;
  }
}
.location-box3 .item-content .content-body .item-category {
  color: #ffffff;
  font-size: 15px;
  font-weight: 500;
  position: relative;
  padding-left: 10px;
}
.location-box3 .item-content .content-body .item-category:after {
  content: "";
  height: 5px;
  width: 5px;
  background: #ffffff;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0px;
  border: none;
  border-radius: 50%;
}
.location-box3 .item-content .content-body .item-title h3 {
  font-size: 22px;
  font-weight: 500;
  line-height: 32px;
}
.location-box3 .item-content .content-body .item-title h3 a {
  color: #ffffff;
  transition: all 0.3s ease-in-out;
}
.location-box3 .item-content .content-body .item-title h3 a:hover {
  color: var(--rt-primary-color);
}
.location-box3 .item-content .location-button .location-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 40px;
  width: 40px;
  color: var(--rt-primary-color);
  background-color: #fff;
  font-size: 18px;
  border: none;
  border-radius: 50%;
  transform: rotate(-45deg);
  transition: all 0.3s ease-in-out;
}
.location-box4 {
  margin-bottom: 24px;
}
.location-box4:hover .item-content .content-body .item-category {
  background-color: var(--rt-primary-color);
  color: #fff;
}
.location-box4:hover .item-content .content-body .item-category span {
  animation: toBottomFromTop 0.5s forwards;
}
.location-box4 .item-img {
  position: relative;
  cursor: pointer;
}
@media only screen and (max-width: 575px) {
  .location-box4 .item-img img {
    width: 100%;
  }
}
.location-box4 .item-img:after {
  content: "";
  height: 100%;
  width: 100%;
  background-color: transparent;
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.5));
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
  transition: all 0.3s;
  opacity: 1;
  cursor: pointer;
}
.location-box4 .item-content {
  left: 30px;
  bottom: 30px;
}
@media only screen and (max-width: 320px) {
  .location-box4 .item-content {
    left: 10px;
    bottom: 10px;
  }
}
.location-box4 .item-content .content-body .item-title {
  margin-bottom: 10px;
}
.location-box4 .item-content .content-body .item-category {
  display: inline-block;
  padding: 2px 15px;
  border: 2px solid var(--rt-primary-color);
  border-radius: 30px;
  font-size: 15px;
  font-family: 'Roboto';
  font-weight: 400;
  transition: 0.4s;
  line-height: 1.5;
  overflow: hidden;
}
.location-box4 .item-content .content-body .item-category:after {
  display: none;
}
.location-box4 .item-content .content-body .item-category span {
  display: inline-block;
  transition: 0.4s;
}
@media only screen and (max-width: 991px) {
  .location-wrap2 {
    padding: 0px 0px;
  }
}
.location-box2 {
  position: relative;
}
.location-box2:hover .item-img:before {
  background: rgba(0, 0, 0, 0.7);
}
.location-box2:hover .item-img a img {
  transform: scale(1.1);
}
.location-box2:hover .location-content .item-categoery .categoery-btn {
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
}
.location-box2:hover .location-content .item-categoery .categoery-btn .item-property {
  -webkit-animation: toBottomFromTop 0.5s;
  animation: toBottomFromTop 0.5s;
  color: #ffffff;
}
.location-box2:hover .location-content .item-categoery .categoery-btn::before {
  background-color: #fff;
}
.location-box2 .item-img {
  position: relative;
  z-index: 1;
  overflow: hidden;
}
.location-box2 .item-img:before {
  content: "";
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: 1;
  transition: all 0.3s ease-in-out;
  cursor: pointer;
}
.location-box2 .item-img a img {
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
.location-box2 .location-content {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 3;
  transform: translate(-50%, -50%);
  text-align: center;
}
.location-box2 .location-content .title-city {
  font-size: 24px;
  font-weight: 500;
  margin-bottom: 10px;
}
.location-box2 .location-content .title-city a {
  color: #ffffff;
  transition: all 0.3s ease-in-out;
}
.location-box2 .location-content .item-categoery .categoery-btn {
  font-size: 15px;
  font-weight: 500;
  padding: 3px 20px;
  display: inline-block;
  background-color: #ffffff;
  border: none;
  border-radius: 4px;
  position: relative;
  transition: all 0.3s ease-in-out;
  overflow: hidden;
}
.location-box2 .location-content .item-categoery .categoery-btn .item-property {
  color: var(--rt-primary-color);
  display: block;
  transition: all ease 0.3s;
  text-transform: capitalize;
}
.location-box2 .location-content .item-categoery .categoery-btn:before {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  background-color: var(--rt-primary-color);
  left: 10px;
  top: 16px;
  border: none;
  border-radius: 50%;
  transition: all 0.3s ease-in-out;
}
@-webkit-keyframes toBottomFromTop {
  49% {
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%);
  }
  50% {
    opacity: 0;
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
  }
  51% {
    opacity: 1;
  }
}
@keyframes toBottomFromTop {
  49% {
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%);
  }
  50% {
    opacity: 0;
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
  }
  51% {
    opacity: 1;
  }
}
@keyframes bottomtotop {
  49% {
    transform: translateY(-100%);
  }
  50% {
    opacity: 0;
    transform: translateY(100%);
  }
  51% {
    opacity: 1;
  }
}
/*------------------- 6.17 Newsletter -------------------*/
.newsletter-wrap1 {
  padding: 70px 0px 50px 0px;
  background-color: #0e2e50;
  position: relative;
}
@media only screen and (max-width: 575px) {
  .newsletter-wrap1 {
    padding: 50px 0px 30px 0px;
  }
}
.newsletter-wrap1 .shape-img1 {
  position: absolute;
  left: 0;
  bottom: 0;
  filter: brightness(105%) contrast(0%) saturate(106%) blur(0) hue-rotate(23deg);
}
.newsletter-layout1 .item-heading .item-title {
  color: #ffffff;
  font-size: 38px;
  font-weight: 500;
  line-height: 30px;
  font-family: "Ubuntu", sans-serif;
}
@media only screen and (max-width: 1199px) {
  .newsletter-layout1 .item-heading .item-title {
    font-size: 32px;
    margin-bottom: 15px;
  }
}
@media only screen and (max-width: 479px) {
  .newsletter-layout1 .item-heading .item-title {
    font-size: 26px;
    line-height: 26px;
    margin-bottom: 10px;
  }
}
.newsletter-layout1 .item-heading .item-subtitle {
  color: #ffffff;
  font-size: 24px;
  font-weight: 500;
  line-height: 30px;
  font-family: "Ubuntu", sans-serif;
}
@media only screen and (max-width: 1199px) {
  .newsletter-layout1 .item-heading .item-subtitle {
    font-size: 20px;
  }
}
@media only screen and (max-width: 479px) {
  .newsletter-layout1 .item-heading .item-subtitle {
    font-size: 16px;
  }
}
.newsletter-form {
  margin-bottom: 20px;
}
.newsletter-form .input-group {
  position: relative;
  border-radius: 30px !important;
}
@media only screen and (max-width: 320px) {
  .newsletter-form .input-group {
    height: 50px;
  }
}
.newsletter-form .input-group .form-control {
  height: 60px;
  background-color: transparent;
  border: none;
  color: #212121;
  padding-left: 25px;
  border-radius: 0 !important;
}
@media only screen and (max-width: 320px) {
  .newsletter-form .input-group .form-control {
    height: 50px;
  }
}
.newsletter-form .input-group ::placeholder {
  color: #495057;
}
@media only screen and (max-width: 320px) {
  .newsletter-form .input-group ::placeholder {
    font-size: 13px;
  }
}
.newsletter-form .input-group-append {
  position: absolute;
  right: 0px;
  bottom: 4px;
}
@media only screen and (max-width: 320px) {
  .newsletter-form .input-group-append {
    right: 0px;
    bottom: 5px;
  }
}
.newsletter-form .input-group-append:hover button {
  color: #ffffff;
}
.newsletter-form .input-group-append:hover button:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
}
.newsletter-form .input-group-append button {
  display: inline-block;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 0px 30px 30px 0px;
  color: #fff;
  font-size: 15px;
  font-weight: 700;
  text-transform: uppercase;
  padding: 15px 30px;
  transition: all 0.3s ease-in-out;
  position: relative;
  z-index: 5;
}
.newsletter-form .input-group-append button:focus {
  box-shadow: none !important;
  outline: 0 !important;
}
@media only screen and (max-width: 320px) {
  .newsletter-form .input-group-append button {
    padding: 10px 20px;
    font-size: 12px;
  }
}
.newsletter-form .input-group-append button:after {
  content: "";
  height: 100%;
  width: 0;
  position: absolute;
  bottom: 0;
  left: 0;
  border-radius: 0px 30px 30px 0px;
  background-color: rgba(0, 0, 0, 0.15);
  visibility: hidden;
  opacity: 0;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.newsletter-box2 {
  padding: 60px;
  background-color: #0e2e50;
  border-radius: 4px;
  margin-top: -80px;
}
@media only screen and (max-width: 991px) {
  .newsletter-box2 {
    padding: 40px;
  }
}
@media only screen and (max-width: 479px) {
  .newsletter-box2 {
    padding: 20px;
  }
}
.newsletter-layout2 {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
}
@media only screen and (max-width: 991px) {
  .newsletter-layout2 {
    display: block;
    text-align: center;
  }
}
.newsletter-layout2 .item-heading .item-title {
  color: #ffffff;
  font-size: 36px;
  font-weight: 600;
  line-height: 30px;
  margin-bottom: 10px;
}
@media only screen and (max-width: 991px) {
  .newsletter-layout2 .item-heading .item-title {
    font-size: 32px;
    margin-bottom: 20px;
  }
}
@media only screen and (max-width: 479px) {
  .newsletter-layout2 .item-heading .item-title {
    font-size: 26px;
  }
}
.newsletter-layout2 .item-heading p {
  color: #ffffff;
  font-size: 16px;
  margin-bottom: 0;
  font-family: "Roboto", sans-serif;
  position: relative;
  z-index: 2;
}
@media only screen and (max-width: 991px) {
  .newsletter-layout2 .item-heading p {
    margin-bottom: 20px;
  }
}
.newsletter-layout2 .item-heading .bg-title-wrap {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  width: 100%;
}
@media only screen and (max-width: 991px) {
  .newsletter-layout2 .item-heading .bg-title-wrap {
    top: 25%;
  }
}
.newsletter-layout2 .item-heading .bg-title-wrap .background-title {
  display: inline-block;
  font-family: "Quentin";
  font-size: 100px;
  line-height: 130px;
  color: #dceeea;
  pointer-events: none;
  opacity: 0.2;
}
@media only screen and (max-width: 767px) {
  .newsletter-layout2 .item-heading .bg-title-wrap .background-title {
    display: none;
  }
}
.newsletter-layout2 .newsletter-button .item-btn {
  display: inline-block;
  color: #ffffff;
  font-size: 15px;
  font-weight: 500;
  background-color: var(--rt-primary-color);
  padding: 13px 30px;
  border: none;
  border-radius: 4px;
  position: relative;
  z-index: 2;
}
@media only screen and (max-width: 479px) {
  .newsletter-layout2 .newsletter-button .item-btn {
    padding: 12px 20px;
  }
}
.newsletter-layout2 .newsletter-button .item-btn:hover:after {
  width: 100%;
  left: 0;
  visibility: visible;
  opacity: 1;
}
.newsletter-layout2 .newsletter-button .item-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background-color: rgba(0, 0, 0, 0.15);
  position: absolute;
  bottom: 0;
  left: 0;
  border: none;
  border-radius: 4px;
  visibility: hidden;
  opacity: 0;
  transition: all 0.3s ease-in-out;
  z-index: -2;
}
/*------------------- 6.18 Pricing -------------------*/
.pricing-wrap1 {
  padding: 100px 0px 110px;
}
@media only screen and (max-width: 991px) {
  .pricing-wrap1 {
    padding: 60px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .pricing-wrap1 {
    padding: 50px 0px;
  }
}
@media only screen and (max-width: 991px) {
  .pricing-wrap1 .item-heading-center {
    margin-bottom: 50px;
  }
}
.pricing-box1 {
  border-width: 1px;
  border-color: #e5e5e5;
  border-style: solid;
  border-radius: 10px;
  padding: 45px;
  position: relative;
  transition: all 0.3s ease-in-out;
  transform: scale(1);
  overflow: hidden;
}
@media only screen and (max-width: 1199px) {
  .pricing-box1 {
    margin-bottom: 40px;
  }
}
@media only screen and (max-width: 320px) {
  .pricing-box1 {
    padding: 30px;
  }
}
.pricing-box1:after {
  content: "";
  height: 1px;
  width: 100%;
  background-color: #e5e5e5;
  position: absolute;
  top: 225px;
  right: 0;
  left: 0;
}
.pricing-box1:hover {
  box-shadow: 0px 5px 28px 0px rgba(0, 0, 0, 0.09);
  border-color: #ffffff;
  transition: all 0.3s ease-in-out;
  transform: scale(1.05);
}
.pricing-box1 .heading-title .item-title {
  color: #212121;
  font-size: 18px;
  font-weight: 600;
  line-height: 30px;
  font-family: "Spartan", sans-serif;
}
.pricing-box1 .heading-title .item-price {
  color: #000000;
  font-size: 36px;
  font-weight: 600;
  font-family: "Ubuntu", sans-serif;
  margin-bottom: 20px;
}
.pricing-box1 .heading-title .item-price span {
  color: #b2bbc5;
  font-size: 16px;
  font-weight: 400;
  font-family: "Roboto", sans-serif;
  margin-left: 10px;
}
.pricing-box1 .heading-title p {
  color: #788593;
}
.pricing-box1 .shape-img1 {
  position: absolute;
  top: 65px;
  right: 65px;
}
@media only screen and (max-width: 320px) {
  .pricing-box1 .shape-img1 {
    right: 40px;
  }
}
.pricing-box1 .shape-img1 img {
  height: 64px;
}
.pricing-box1 .pricing-list {
  margin-top: 70px;
  margin-bottom: 35px;
}
.pricing-box1 .pricing-list ul li {
  display: block;
  color: #acb7c3;
  font-size: 15px;
  margin-bottom: 15px;
  font-weight: 400;
}
.pricing-box1 .pricing-list ul li:last-child {
  margin-bottom: 0;
}
.pricing-box1 .pricing-list ul li i {
  margin-right: 15px;
}
.pricing-box1 .pricing-list ul li.available {
  color: #000000;
}
.pricing-box1 .pricing-list ul li.available i {
  color: #53e092;
}
.pricing-box1 .pricing-button .item-btn {
  background-color: var(--rt-primary-color);
  padding: 15px 105px;
  display: inline-block;
  border: none;
  border-radius: 4px;
  color: #ffffff;
  font-size: 15px;
  font-weight: 500;
  position: relative;
  z-index: 1;
  box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.15);
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 991px) {
  .pricing-box1 .pricing-button .item-btn {
    padding: 15px 80px;
  }
}
@media only screen and (max-width: 479px) {
  .pricing-box1 .pricing-button .item-btn {
    padding: 15px 60px;
  }
}
.pricing-box1 .pricing-button .item-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background: rgba(0, 0, 0, 0.15);
  position: absolute;
  bottom: 0;
  right: 0;
  visibility: hidden;
  opacity: 0;
  border: none;
  border-radius: 4px;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.pricing-box1 .pricing-button .item-btn:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
  transition: all 0.3s ease-in-out;
}
/*------------------- 6.19 Progress Bar -------------------*/
.progress-bar-wrap1 {
  background-color: #0e2e50;
  padding: 125px 0px 200px 0px;
  position: relative;
}
@media only screen and (max-width: 991px) {
  .progress-bar-wrap1 {
    padding: 60px 0px 30px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .progress-bar-wrap1 {
    padding: 40px 0px 30px 0px;
  }
}
.progress-bar-wrap1 .shape-img1 {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
}
@media only screen and (max-width: 767px) {
  .progress-bar-wrap1 .shape-img1 {
    display: none;
  }
}
.progress-bar-wrap1 .shape-img2 {
  position: absolute;
  bottom: 0;
  right: 210px;
}
.item-heading-bar {
  text-align: center;
  margin-bottom: 60px;
}
.item-heading-bar .item-title {
  color: #ffffff;
  font-size: 36px;
  font-weight: 600;
  line-height: 40px;
  margin-bottom: 15px;
  z-index: 2;
  position: relative;
}
@media only screen and (max-width: 1199px) {
  .item-heading-bar .item-title {
    font-size: 32px;
    line-height: 34px;
  }
}
@media only screen and (max-width: 479px) {
  .item-heading-bar .item-title {
    font-size: 26px;
    line-height: 30px;
  }
}
.item-heading-bar p {
  color: #ffffff;
  z-index: 2;
  position: relative;
}
.progress-box1 {
  padding: 100px 0px 90px 0px;
}
.progress-box1 .progress-layout {
  position: relative;
  margin: 0 auto;
}
@media only screen and (max-width: 991px) {
  .progress-box1 .progress-layout {
    margin-bottom: 40px;
  }
}
.progress-box1 .progress-layout .process-circle {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: transparent;
  background-image: linear-gradient(180deg, #ffffff42 0%, #0e2e50 100%);
  border-radius: 50%;
  height: 140px;
  width: 140px;
  z-index: 3;
}
.progress-box1 .progress-layout .process-circle:nth-child(2) {
  width: 180px;
  height: 180px;
  z-index: 2;
  opacity: 0.4;
}
.progress-box1 .progress-layout .process-circle:nth-child(3) {
  width: 222px;
  height: 222px;
  z-index: 1;
  opacity: 0.1;
}
.progress-box1 .progress-layout::before {
  background-color: transparent;
  background-image: linear-gradient(180deg, #ffffff42 0%, #0e2e50 100%);
  opacity: 1;
  height: 140px;
  width: 140px;
  border-radius: 50%;
  z-index: 3;
}
.progress-box1 .progress-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateY(-50%) translateX(-50%);
  z-index: 5;
  text-align: center;
  padding-top: 35px;
}
.progress-box1 .progress-content .item-parcent {
  font-size: 60px;
  font-weight: 600;
  font-family: "Ubuntu", sans-serif;
  color: #ffffff;
  margin-bottom: 20px;
}
.progress-box1 .progress-content label {
  font-size: 15px;
  font-weight: 400;
  color: #ffffff;
}
/*------------------- 6.20 Property -------------------*/
.property-wrap1 {
  padding: 100px 0px 80px;
  background-color: #eaf7f4;
  overflow: hidden;
}
@media only screen and (max-width: 991px) {
  .property-wrap1 {
    padding: 70px 0px 40px;
  }
}
@media only screen and (max-width: 575px) {
  .property-wrap1 {
    padding: 40px 0px 20px;
  }
}
@media (max-width: 767px) {
  .property-wrap1 .item-heading-left {
    margin-bottom: 24px;
  }
}
.property-wrap1 .item-heading-left .section-subtitle {
  position: relative;
  z-index: 2;
}
.property-wrap1 .item-heading-left .section-title {
  position: relative;
  z-index: 2;
}
@media only screen and (max-width: 479px) {
  .property-wrap1 .item-heading-left .section-title {
    font-size: 26px;
    line-height: 32px;
  }
}
.property-wrap3 {
  padding: 40px 0px 10px;
  margin-left: -30px;
  margin-right: -30px;
  padding-left: 30px;
  padding-right: 30px;
  background-color: #eaf7f4;
}
@media only screen and (max-width: 991px) {
  .property-wrap3 {
    padding: 30px 30px 55px 30px;
  }
}
.property-wrap3 .item-shorting-box {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 24px;
}
@media only screen and (max-width: 575px) {
  .property-wrap3 .item-shorting-box {
    display: block;
    text-align: center;
    margin-top: 20px;
  }
}
@media only screen and (max-width: 375px) {
  .property-wrap3 .item-shorting-box {
    text-align: center;
  }
}
.property-wrap3 .item-shorting-box .shorting-title .item-title {
  font-weight: 500;
  font-size: 18px;
  margin-bottom: 0;
}
@media only screen and (max-width: 575px) {
  .property-wrap3 .item-shorting-box .shorting-title .item-title {
    margin-bottom: 15px;
  }
}
.property-wrap3 .item-shorting-box .item-shorting-box-2 {
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 575px) {
  .property-wrap3 .item-shorting-box .item-shorting-box-2 {
    justify-content: center;
  }
}
@media only screen and (max-width: 320px) {
  .property-wrap3 .item-shorting-box .item-shorting-box-2 {
    display: block;
    margin-bottom: 20px;
  }
}
.property-wrap3 .item-shorting-box .item-shorting-box-2 .by-shorting {
  display: flex;
  align-items: center;
  margin-right: 16px;
}
@media only screen and (max-width: 320px) {
  .property-wrap3 .item-shorting-box .item-shorting-box-2 .by-shorting {
    margin-bottom: 24px;
    margin-right: 0;
    justify-content: center;
  }
}
.property-wrap3 .item-shorting-box .item-shorting-box-2 .by-shorting .shorting {
  color: #212121;
  font-weight: 700;
  font-size: 15px;
  margin-right: 5px;
}
.property-wrap4 {
  padding: 40px 0px;
  margin-left: -30px;
  margin-right: -30px;
  padding-left: 30px;
  padding-right: 30px;
  background-color: #eaf7f4;
}
@media only screen and (max-width: 991px) {
  .property-wrap4 {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .property-wrap4 {
    padding: 50px 0px;
  }
}
.property-wrap4 .item-shorting-box {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 24px;
}
@media only screen and (max-width: 1199px) {
  .property-wrap4 .item-shorting-box {
    display: block;
    text-align: center;
  }
}
.property-wrap4 .item-shorting-box .shorting-title .item-title {
  font-weight: 500;
  font-size: 18px;
  margin-bottom: 0;
}
@media only screen and (max-width: 1199px) {
  .property-wrap4 .item-shorting-box .shorting-title .item-title {
    margin-bottom: 20px;
  }
}
.property-wrap4 .item-shorting-box .item-shorting-box-2 {
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 1199px) {
  .property-wrap4 .item-shorting-box .item-shorting-box-2 {
    justify-content: center;
  }
}
@media only screen and (max-width: 320px) {
  .property-wrap4 .item-shorting-box .item-shorting-box-2 {
    display: block;
    margin-bottom: 20px;
  }
}
.property-wrap4 .item-shorting-box .item-shorting-box-2 .by-shorting {
  display: flex;
  align-items: center;
  margin-right: 16px;
}
@media only screen and (max-width: 320px) {
  .property-wrap4 .item-shorting-box .item-shorting-box-2 .by-shorting {
    margin-bottom: 24px;
    margin-right: 0;
    justify-content: center;
  }
}
.property-wrap4 .item-shorting-box .item-shorting-box-2 .by-shorting .shorting {
  color: #212121;
  font-weight: 700;
  font-size: 15px;
  margin-right: 5px;
}
.property-wrap4 .item-shorting-box .item-shorting-box-2 .by-shorting .single-select .list {
  margin-top: 0px;
  width: 100%;
}
.property-wrap5 {
  padding: 100px 0px 180px;
}
@media only screen and (max-width: 991px) {
  .property-wrap5 {
    padding: 0px 0px 120px !important;
  }
}
@media only screen and (max-width: 575px) {
  .property-wrap5 {
    padding: 0px 0px 100px !important;
  }
}
.property-wrap-6 {
  padding: 100px 0px 110px;
  background-color: #ffffff;
}
@media only screen and (max-width: 991px) {
  .property-wrap-6 {
    padding: 60px 0px 70px;
  }
}
@media only screen and (max-width: 575px) {
  .property-wrap-6 {
    padding: 40px 0px 50px;
  }
}
.property-wrap-8 {
  padding: 100px 0px;
  background-color: #0e2e50;
  position: relative;
  overflow: hidden;
}
@media only screen and (max-width: 991px) {
  .property-wrap-8 {
    padding: 60px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .property-wrap-8 {
    padding-top: 40px;
    padding-bottom: 0px;
    padding-left: 4px;
    padding-right: 4px;
  }
}
@media (min-width: 1200px) {
  .property-wrap-8:before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    height: 100%;
    width: 380px;
    z-index: 10;
    opacity: 0.8;
    pointer-events: none;
    left: 0;
    /* background: linear-gradient(90deg, #0e2e50 0%, transparent 100%); */
  }
  .property-wrap-8:after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    height: 100%;
    width: 380px;
    z-index: 10;
    opacity: 0.8;
    pointer-events: none;
    right: 0;
    /* background: linear-gradient(-90deg, #0e2e50 0%, transparent 100%); */
  }
}
@media (min-width: 1940px) {
  .property-wrap-8 {
    width: 800px;
  }
}
.property-wrap-8 .section-subtitle {
  color: #ffffff;
}
.property-wrap-8 .section-title {
  color: #ffffff;
}
.property-wrap-8 .background-title {
  opacity: 0.2;
}
@media only screen and (max-width: 991px) {
  .property-wrap-9 {
    padding: 30px 0px 0px 0px;
  }
}
.property-wrap-9 .item-shorting-box .shorting-title .item-title {
  font-weight: 500;
  font-size: 18px;
  margin-bottom: 0;
}
@media only screen and (max-width: 1199px) {
  .property-wrap-9 .item-shorting-box .shorting-title .item-title {
    margin-bottom: 20px;
  }
}
.property-wrap-9 .item-shorting-box .item-shorting-box-2 {
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 1199px) {
  .property-wrap-9 .item-shorting-box .item-shorting-box-2 {
    justify-content: center;
  }
}
@media only screen and (max-width: 320px) {
  .property-wrap-9 .item-shorting-box .item-shorting-box-2 {
    display: block;
    margin-bottom: 20px;
  }
}
.property-wrap-9 .item-shorting-box .item-shorting-box-2 .by-shorting {
  display: flex;
  align-items: center;
  margin-right: 16px;
}
@media only screen and (max-width: 320px) {
  .property-wrap-9 .item-shorting-box .item-shorting-box-2 .by-shorting {
    margin-bottom: 24px;
    margin-right: 0;
    justify-content: center;
  }
}
.property-wrap-9 .item-shorting-box .item-shorting-box-2 .by-shorting .shorting {
  color: #212121;
  font-weight: 700;
  font-size: 15px;
  margin-right: 5px;
}
.property-wrap-9 .item-shorting-box .item-shorting-box-2 .by-shorting .single-select .list {
  margin-top: 0px;
  width: 100%;
}
.property-wrap-10 {
  background-color: #fff;
}
.isotope-classes-tab {
  border: none;
  text-align: right;
  margin-top: 11px;
}
@media (max-width: 767px) {
  .isotope-classes-tab {
    text-align: left;
    margin-bottom: 24px;
    margin-top: 0;
  }
}
@media (max-width: 575px) {
  .isotope-classes-tab {
    text-align: center;
  }
}
.isotope-classes-tab .nav-item {
  margin-right: 10px;
  color: #878c9f;
  display: inline-block;
  font-size: 16px;
  font-weight: 500;
  background-color: transparent;
  border: 1px solid var(--rt-primary-color);
  border-radius: 30px;
  padding: 7px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.isotope-classes-tab .nav-item:hover {
  background-color: var(--rt-primary-color);
  color: #ffffff;
}
@media (max-width: 991px) {
  .isotope-classes-tab .nav-item {
    z-index: 6;
  }
}
@media (max-width: 479px) {
  .isotope-classes-tab .nav-item {
    padding: 5px 15px;
    border-radius: 24px;
  }
}
@media (max-width: 320px) {
  .isotope-classes-tab .nav-item {
    padding: 5px 10px;
  }
}
.isotope-classes-tab .nav-item:last-child {
  margin-right: 0;
}
.isotope-classes-tab .current.nav-item {
  color: #ffffff;
  background-color: var(--rt-primary-color);
  position: relative;
  transition: all 0.3s ease-in-out;
}
.isotope-classes-tab .current.nav-item:hover {
  color: #ffffff;
}
.property-box2 {
  position: relative;
  box-shadow: 0px 4px 18px rgba(194, 200, 213, 0.3);
  border: none;
  border-radius: 6px 6px 6px 6px;
  margin-bottom: 0px;
}
.property-box2:hover .item-img a img {
  transform: scale(1.05);
}
.property-box2:hover .react-icon {
  opacity: 1;
  visibility: visible;
  bottom: 30px;
}
.property-box2 .item-img {
  position: relative;
  overflow: hidden;
  border-radius: 6px 6px 6px 6px;
  z-index: 5;
  cursor: pointer;
}
.property-box2 .item-img:before {
  content: "";
  height: 40%;
  width: 100%;
  /* background-image: linear-gradient(to top, #000, transparent); */
  opacity: 80%;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
}
.property-box2 .item-img a img {
  border-radius: 6px 6px 6px 6px;
  transform: scale(1);
  transition: all 0.3s ease-in-out;
  z-index: 5;
}
@media only screen and (max-width: 767px) {
  .property-box2 .item-img a img {
    width: 100%;
  }
}
.property-box2 .item-category-box1 {
  position: absolute;
  top: 30px;
  left: 30px;
  z-index: 5;
}
.property-box2 .item-category-box1::after {
  content: "";
  position: absolute;
  top: -31px;
  left: 50%;
  background-image: url({{asset('assets/assets/dashbord/img/listing-label.svg')}});
  width: 51px;
  height: 40px;
  margin-left: -27.5px;
}
@media only screen and (max-width: 991px) {
  .property-box2 .item-category-box1 {
    left: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .property-box2 .item-category-box1 {
    left: 30px;
    top: 30px;
  }
}
@media only screen and (max-width: 479px) {
  .property-box2 .item-category-box1 {
    left: 20px;
    top: 30px;
  }
}
.property-box2 .item-category-box1 .item-category {
  color: #ffffff;
  font-size: 13px;
  font-weight: 400;
  font-family: "Ubuntu", sans-serif;
  padding: 3px 20px;
  display: inline-block;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 2px;
  position: relative;
}
.property-box2 .item-category-box1 .item-category:before {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  background-color: #fff;
  left: 10px;
  top: 16px;
  border: none;
  border-radius: 50%;
}
.property-box2 .rent-price {
  position: absolute;
  bottom: 40px;
  left: 30px;
  z-index: 2;
}
@media only screen and (max-width: 991px) {
  .property-box2 .rent-price {
    left: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .property-box2 .rent-price {
    left: 30px;
  }
}
@media only screen and (max-width: 479px) {
  .property-box2 .rent-price {
    left: 20px;
  }
}
.property-box2 .rent-price .item-price {
  color: #ffffff;
  font-size: 24px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
}
@media only screen and (max-width: 320px) {
  .property-box2 .rent-price .item-price {
    font-size: 22px;
  }
}
.property-box2 .rent-price .item-price span {
  color: #cccccc;
  font-size: 16px;
  font-weight: 400;
}
.property-box2 .rent-price .item-price span i {
  font-size: 24px;
  font-style: normal;
}
.property-box2 .react-icon {
  position: absolute;
  right: 30px;
  bottom: 0px;
  overflow: hidden;
  visibility: hidden;
  opacity: 0;
  transition: all 0.3s ease-in-out;
  z-index: 5;
}
@media only screen and (max-width: 991px) {
  .property-box2 .react-icon {
    right: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .property-box2 .react-icon {
    right: 30px;
  }
}
@media only screen and (max-width: 479px) {
  .property-box2 .react-icon {
    right: 20px;
  }
}
.property-box2 .react-icon ul li {
  display: inline-block;
  position: relative;
}
.property-box2 .react-icon ul li a {
  display: inline-block;
}
.property-box2 .react-icon ul li a i {
  font-size: 16px;
  border: none;
  background-color: rgba(0, 0, 0, 0.5);
  border-radius: 3px;
  height: 35px;
  width: 35px;
  display: flex;
  align-items: center;
  padding: 5px 10px;
  justify-content: center;
  transition: all 0.3s ease-in-out;
  overflow: hidden;
}
.property-box2 .react-icon ul li a i:before {
  transition: all 0.3s ease-in-out;
  color: #fff;
}
.property-box2 .react-icon ul li a i:hover {
  background-color: var(--rt-primary-color);
}
.property-box2 .react-icon ul li a i:hover:before {
  -webkit-animation: toBottomFromTop 0.5s forwards;
  animation: toBottomFromTop 0.5s forwards;
  color: #ffffff;
}
.property-box2 .item-category10 {
  position: absolute;
  margin-top: -20px;
  left: 30px;
  font-size: 15px;
  background-color: #ffffff;
  padding: 5px 15px;
  display: inline-block;
  border: none;
  border-radius: 4px;
  font-weight: 400;
  line-height: 20px;
  z-index: 5;
}
@media only screen and (max-width: 991px) {
  .property-box2 .item-category10 {
    left: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .property-box2 .item-category10 {
    left: 30px;
  }
}
@media only screen and (max-width: 479px) {
  .property-box2 .item-category10 {
    left: 20px;
  }
}
.property-box2 .item-category10 a {
  color: var(--rt-primary-color);
  transition: all 0.3s ease-in-out;
}
.property-box2 .item-category10 a:hover {
  color: var(--rt-primary-dark);
}
.property-box2 .item-content {
  padding: 20px 30px;
  background-color: #ffffff;
}
@media only screen and (max-width: 991px) {
  .property-box2 .item-content {
    padding: 20px 16px 20px 20px;
  }
}
@media only screen and (max-width: 767px) {
  .property-box2 .item-content {
    padding: 20px 30px;
  }
}
@media only screen and (max-width: 479px) {
  .property-box2 .item-content {
    padding: 20px 16px 20px 20px;
  }
}
.property-box2 .item-content .verified-area {
  display: flex;
  align-items: center;
}
.property-box2 .item-content .verified-area .item-title {
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 7px;
  line-height: 32px;
  overflow: hidden !important;
  text-overflow: ellipsis !important;
  display: -webkit-box !important;
  -webkit-line-clamp: 1 !important;
  -webkit-box-orient: vertical;
}
@media only screen and (max-width: 479px) {
  .property-box2 .item-content .verified-area .item-title {
    font-size: 20px;
    line-height: 30px;
  }
}
.property-box2 .item-content .verified-area .item-title a {
  color: #212121;
  transition: all 0.3s ease-in-out;
}
.property-box2 .item-content .verified-area .item-title a:hover {
  color: var(--rt-primary-color);
}
.property-box2 .item-content .verified-area a .item-check {
  color: #2cdb59;
  font-size: 16px;
  font-size: 22px;
  margin-left: 13px;
}
.property-box2 .item-content .location-area {
  color: #929292;
  font-size: 15px;
  margin-bottom: 12px;
}
.property-box2 .item-content .location-area i {
  margin-right: 7px;
  position: relative;
  top: 3px;
}
.property-box2 .item-content .item-categoery3 ul {
  display: flex;
  justify-content: space-between;
}
.property-box2 .item-content .item-categoery3 ul li {
  display: flex;
  margin-right: 10px;
  align-items: center;
  font-size: 14px;
  font-weight: 300;
}
@media only screen and (max-width: 1641px) {
  .property-box2 .item-content .item-categoery3 ul li:nth-child(3) {
    display: none;
  }
}
.property-box2 .item-content .item-categoery3 ul li:last-child {
  margin-right: 0;
}
.property-box2 .item-content .item-categoery3 ul li i {
  color: var(--rt-primary-color);
  margin-right: 10px;
  height: 30px;
  width: 30px;
  background-color: #edf9f6;
  border: none;
  border-radius: 50%;
  display: inline-block;
  line-height: 35px;
  text-align: center;
  font-size: 14px;
}
@media only screen and (max-width: 1199px) {
  .property-box2 .item-content .item-categoery3 ul li i {
    margin-right: 6px;
  }
}
.property-box2 .item-content .item-categoery4 ul li {
  margin-right: 0px;
}
.property-wrap2 {
  padding: 100px 0px 110px;
}
@media only screen and (max-width: 991px) {
  .property-wrap2 {
    padding: 70px 0;
  }
}
@media only screen and (max-width: 575px) {
  .property-wrap2 {
    padding: 50px 0;
  }
}
.property-box3 {
  position: relative;
  margin-bottom: 24px;
}
.property-box3:hover .item-img a img {
  transform: scale(1.1);
  border-radius: 6px;
  transition: all 0.3s ease-in-out;
}
.property-box3 .item-img {
  position: relative;
  z-index: 2;
  overflow: hidden;
}
.property-box3 .item-img:before {
  content: "";
  height: 70%;
  width: 100%;
  background-image: linear-gradient(to top, #000000, transparent);
  opacity: 80%;
  position: absolute;
  bottom: 0;
  left: 0;
  border-radius: 6px;
  z-index: 1;
  cursor: pointer;
}
.property-box3 .item-img a img {
  border-radius: 6px;
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
.property-box3 .item-img .item-category-box1 {
  position: absolute;
  top: 30px;
  left: 30px;
  z-index: 5;
}
.property-box3 .item-img .item-category-box1::after {
  content: "";
  position: absolute;
  top: -31px;
  left: 50%;
  background-image: url({{asset('assets/assets/dashbord/img/listing-label.svg')}});
  width: 51px;
  height: 40px;
  margin-left: -27.5px;
}
@media only screen and (max-width: 1199px) {
  .property-box3 .item-img .item-category-box1 {
    left: 20px;
  }
}
.property-box3 .item-img .item-category-box1 .item-category {
  color: #ffffff;
  font-size: 13px;
  font-weight: 400;
  font-family: "Ubuntu", sans-serif;
  padding: 3px 20px;
  display: inline-block;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 2px;
  position: relative;
}
.property-box3 .item-img .item-category-box1 .item-category:before {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  background-color: #fff;
  left: 10px;
  top: 16px;
  border: none;
  border-radius: 50%;
}
.property-box3 .property-content {
  position: absolute;
  bottom: 0px;
  left: 0px;
  right: 0;
  z-index: 3;
  padding: 30px 30px 20px 30px;
}
@media only screen and (max-width: 1199px) {
  .property-box3 .property-content {
    padding: 20px;
  }
}
.property-box3 .property-content .item-content .veryfy-area {
  display: flex;
  align-items: center;
  margin-bottom: 3px;
}
.property-box3 .property-content .item-content .veryfy-area .item-price {
  color: #ffffff;
  font-size: 26px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 500;
  margin-bottom: 5px;
}
.property-box3 .property-content .item-content .veryfy-area .item-price span {
  color: #ffffff;
  font-size: 16px;
}
.property-box3 .property-content .item-content .item-title {
  font-size: 22px;
  line-height: 32px;
  font-weight: 500;
  margin-bottom: 17px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  padding-bottom: 15px;
}
@media only screen and (max-width: 575px) {
  .property-box3 .property-content .item-content .item-title {
    padding: 50px 0px;
  }
}
.property-box3 .property-content .item-content .item-title a {
  color: #ffffff;
  transition: all 0.3s ease-in-out;
  overflow: hidden !important;
  text-overflow: ellipsis !important;
  display: -webkit-box !important;
  -webkit-line-clamp: 1 !important;
  -webkit-box-orient: vertical;
}
.property-box3 .property-content .item-content .item-title a:hover {
  color: var(--rt-primary-color);
}
.property-box3 .property-content .item-content .item-categoery3 {
  padding-top: 0px;
}
.property-box3 .property-content .item-content .item-categoery3 ul {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}
.property-box3 .property-content .item-content .item-categoery3 ul li {
  display: flex;
  position: relative;
  align-items: center;
  color: #ffffff;
  margin-right: 20px;
  font-size: 14px;
}
@media only screen and (max-width: 1199px) {
  .property-box3 .property-content .item-content .item-categoery3 ul li {
    margin-right: 5px;
  }
}
.property-box3 .property-content .item-content .item-categoery3 ul li:last-child {
  margin-right: 0;
}
.property-box3 .property-content .item-content .item-categoery3 ul li i {
  color: #ffffff;
  margin-right: 10px;
  font-size: 14px;
}
.property-box4 {
  padding: 20px;
  display: flex;
  align-items: center;
  position: relative;
  z-index: 1;
  box-shadow: none;
  background-color: #fff;
  border: 1px solid #e8e8e8;
}
@media only screen and (max-width: 479px) {
  .property-box4 {
    display: block;
  }
}
.property-box4 .item-img {
  border-radius: 6px;
}
@media only screen and (max-width: 479px) {
  .property-box4 .item-img {
    margin-bottom: 20px;
    text-align: center;
  }
}
.property-box4 .item-img:hover .item-img a img {
  transform: scale(1.05);
}
.property-box4 .item-img img {
  border-radius: 6px;
}
@media only screen and (max-width: 767px) {
  .property-box4 .item-img img {
    width: 200px;
    height: 150px;
  }
}
@media only screen and (max-width: 479px) {
  .property-box4 .item-img img {
    width: 100%;
    height: 100%;
  }
}
.property-box4 .item-img:before {
  display: none;
}
@media only screen and (max-width: 767px) {
  .property-box4 .item-category-box1 {
    left: 50%;
    top: 50%;
    transform: translateY(-50%) translateX(-50%);
  }
}
.property-box4 .item-content-property {
  flex: 1;
  padding: 0;
  margin-left: 24px;
}
@media only screen and (max-width: 479px) {
  .property-box4 .item-content-property {
    margin-left: 0;
  }
}
.property-box4 .item-content-property .item-category10 {
  position: inherit;
  padding: 0;
}
.property-box4 .item-content-property .item-category10 a {
  padding: 0;
  font-size: 14px;
  color: #acafbb;
  background: none;
}
.property-box4 .item-content-property .rent-price2 {
  display: block;
  position: absolute;
  right: 30px;
  top: 30px;
  z-index: 2;
  justify-content: inherit;
  align-items: inherit;
}
@media only screen and (max-width: 767px) {
  .property-box4 .item-content-property .rent-price2 {
    display: none;
  }
}
.property-box4 .item-content-property .react-icon {
  visibility: visible;
  opacity: 1;
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 5;
  bottom: auto;
}
@media only screen and (max-width: 479px) {
  .property-box4 .item-content-property .react-icon {
    top: 40px;
    right: 40px;
  }
}
.property-box4 .item-content-property .react-icon ul li {
  display: inline-block;
}
.property-box4 .item-content-property .react-icon ul li a {
  background-color: transparent;
  display: inline-block;
}
.property-box4 .item-content-property .react-icon ul li a i {
  height: 35px;
  width: 35px;
  background-color: #dfefeb;
  border: none;
  padding: 5px 10px;
  border-radius: 4px;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 0.3s ease-in-out;
  z-index: 1;
}
.property-box4 .item-content-property .react-icon ul li a i:before {
  transition: all 0.3s ease-in-out;
  color: var(--rt-primary-color);
}
.property-box4 .item-content-property .react-icon ul li a i:hover {
  background-color: var(--rt-primary-color);
}
.property-box4 .item-content-property .react-icon ul li a i:hover:before {
  -webkit-animation: toBottomFromTop 0.5s forwards;
  animation: toBottomFromTop 0.5s forwards;
  color: #ffffff;
}
@media only screen and (max-width: 767px) {
  .property-box4 .item-content-property .location-area {
    margin-bottom: 5px;
  }
}
.property-box4 .item-content-property .item-categoery3 {
  margin-bottom: 20px;
}
.property-box4 .item-content-property .item-price {
  color: var(--rt-primary-color);
  font-size: 24px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
}
.property-box4 .item-content-property .item-price i {
  margin-right: 2px;
  font-size: 14px;
  color: #bfbfbf;
}
.property-box4 .item-content-property .item-price span {
  color: #bfbfbf;
  font-size: 14px;
  font-weight: 400;
}
.property-box4 .item-content-property .author-area {
  border-top: 0;
  padding: 35px 0px 0px 0px;
}
@media only screen and (max-width: 479px) {
  .property-box4 .item-content-property .author-area {
    display: block;
  }
}
@media only screen and (max-width: 479px) {
  .property-box4 .item-content-property .author-area .author-img {
    display: block;
  }
}
.property-box4 .item-content-property .author-area .item-price {
  color: var(--rt-primary-color);
  font-size: 24px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
}
@media only screen and (max-width: 479px) {
  .property-box4 .item-content-property .author-area .item-price {
    margin-top: 10px;
  }
}
.property-box4 .item-content-property .author-area .item-price span {
  color: #abb3c6;
  font-size: 16px;
  font-weight: 400;
}
.property-box5 {
  padding: 15px 20px;
  display: flex;
  align-items: center;
  position: relative;
  z-index: 1;
  box-shadow: none;
  border-radius: 6px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
}
@media only screen and (max-width: 479px) {
  .property-box5 {
    display: block;
  }
}
@media only screen and (max-width: 479px) {
  .property-box5 {
    padding: 20px;
  }
}
.property-box5 .item-img {
  border-radius: 6px;
}
@media only screen and (max-width: 479px) {
  .property-box5 .item-img {
    margin-bottom: 20px;
  }
}
.property-box5 .item-img img {
  border-radius: 6px;
}
@media only screen and (max-width: 767px) {
  .property-box5 .item-img img {
    width: 200px;
    height: 150px;
  }
}
@media only screen and (max-width: 479px) {
  .property-box5 .item-img img {
    width: 100%;
    height: 100%;
  }
}
.property-box5 .item-img:before {
  display: none;
}
.property-box5 .item-content-property {
  flex: 1;
  padding: 0;
  margin-left: 24px;
}
@media only screen and (max-width: 767px) {
  .property-box5 .item-content-property {
    flex: auto;
    margin-left: 20px;
  }
}
@media only screen and (max-width: 479px) {
  .property-box5 .item-content-property {
    margin-left: 0;
  }
}
.property-box5 .item-content-property .verified-area .item-title {
  font-weight: 500;
  font-size: 20px;
  margin-bottom: 0;
}
.property-box5 .item-content-property .location-area {
  color: #929292;
  font-size: 14px;
  margin-bottom: 7px;
}
.property-box5 .item-content-property .location-area i {
  position: relative;
  top: 3px;
}
.property-box5 .item-content-property .item-category10 {
  position: inherit;
  padding: 0;
}
.property-box5 .item-content-property .item-category10 a {
  color: #acafbb;
  font-size: 13px;
}
.property-box5 .item-content-property .item-price {
  color: var(--rt-primary-color);
  font-size: 24px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
}
.property-box5 .item-content-property .item-price i {
  margin-right: 2px;
  font-size: 14px;
  color: #bfbfbf;
}
.property-box5 .item-content-property .item-price span {
  color: #bfbfbf;
  font-size: 14px;
  font-weight: 400;
}
.property-box5 .item-content-property .item-categoery5 {
  margin-bottom: 12px;
}
.property-box5 .item-content-property .item-categoery5 ul {
  display: flex;
  justify-content: space-between;
}
@media only screen and (max-width: 320px) {
  .property-box5 .item-content-property .item-categoery5 ul {
    display: block;
  }
}
.property-box5 .item-content-property .item-categoery5 ul li {
  display: flex;
  margin-right: 10px;
  align-items: center;
  font-size: 14px;
  font-weight: 600;
}
@media only screen and (max-width: 767px) {
  .property-box5 .item-content-property .item-categoery5 ul li:nth-child(1) {
    display: none;
  }
}
@media only screen and (max-width: 479px) {
  .property-box5 .item-content-property .item-categoery5 ul li {
    margin-right: 5px;
  }
}
.property-box5 .item-content-property .item-categoery5 ul li:last-child {
  margin-right: 0;
}
.property-box5 .item-content-property .item-categoery5 ul li i {
  color: var(--rt-primary-color);
  margin-right: 10px;
  font-size: 14px;
  position: relative;
  top: 2px;
}
@media only screen and (max-width: 1199px) {
  .property-box5 .item-content-property .item-categoery5 ul li i {
    margin-right: 6px;
  }
}
@media only screen and (max-width: 479px) {
  .property-box5 .item-content-property .item-categoery5 ul li i {
    background-color: transparent;
    border: none;
    border-radius: 0;
    display: initial;
    line-height: 0px;
  }
}
.property-button {
  text-align: center;
  margin-top: 20px;
}
.property-button .item-btn {
  display: inline-block;
  font-size: 15px;
  font-weight: 500;
  color: var(--rt-primary-color);
  padding: 10px 30px;
  border: none;
  border-radius: 4px;
  background-color: #eaf7f4;
  position: relative;
  transition: all 0.3s ease-in-out;
  z-index: 1;
}
.property-button .item-btn:hover {
  color: #ffffff;
}
.property-button .item-btn:hover::before {
  width: 100%;
  left: 0;
  visibility: visible;
  opacity: 1;
}
.property-button .item-btn::before {
  content: "";
  height: 100%;
  width: 0;
  background-color: var(--rt-primary-color);
  position: absolute;
  bottom: 0;
  left: 0;
  border: none;
  border-radius: 4px;
  visibility: hidden;
  opacity: 0;
  transition: all 0.3s ease-in-out;
  z-index: -1;
}
.property-wrap-7 {
  background-color: #0e2e50;
  padding: 40px 0px 40px;
  position: relative;
  overflow: hidden;
}
@media only screen and (max-width: 991px) {
  .property-wrap-7 {
    padding: 70px 0px 40px;
  }
}
@media only screen and (max-width: 575px) {
  .property-wrap-7 {
    padding: 40px 0px 20px;
  }
}
.property-wrap-7 .slider-wrapper {
  margin-right: -100%;
}
@media only screen and (max-width: 1199px) {
  .property-wrap-7 .slider-wrapper {
    margin-right: 0;
  }
}
@media only screen and (max-width: 767px) {
  .property-wrap-7 .item-heading-left {
    margin-bottom: 24px;
  }
}
.property-wrap-7 .item-heading-left .section-subtitle {
  color: #ffffff;
}
.property-wrap-7 .item-heading-left .section-subtitle:after {
  background-color: #fff;
}
@media only screen and (max-width: 479px) {
  .property-wrap-7 .item-heading-left .section-subtitle {
    font-size: 12px;
  }
}
.property-wrap-7 .item-heading-left .section-title {
  color: #ffffff;
}
@media only screen and (max-width: 479px) {
  .property-wrap-7 .item-heading-left .section-title {
    font-size: 26px;
    line-height: 32px;
  }
}
.property-wrap-7 .item-heading-left .bg-title-wrap {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  width: 100%;
}
.property-wrap-7 .item-heading-left .bg-title-wrap .background-title {
  display: inline-block;
  font-family: "Quentin";
  font-size: 100px;
  line-height: 130px;
  color: #dceeea;
  pointer-events: none;
  opacity: 0.2;
}
@media only screen and (max-width: 767px) {
  .property-wrap-7 .item-heading-left .bg-title-wrap .background-title {
    display: none;
  }
}
.property-box6 {
  position: relative;
  box-shadow: 0 11px 27px 0 rgba(3, 27, 52, 0.33);
  border: none;
  margin-bottom: 24px;
  transition: all 0.3s ease-in-out;
}
.property-box6:before {
  content: "";
  height: 1px;
  width: 100%;
  background-color: #e8e8e8;
  position: absolute;
  bottom: 80px;
  left: 0;
  right: 0;
}
@media only screen and (max-width: 991px) {
  .property-box6:before {
    display: none;
  }
}
.property-box6:hover {
  transform: translateY(-5px);
}
.property-box6:hover .item-img a img {
  transform: scale(1.05);
  border-radius: 6px 6px 0px 0px;
}
.property-box6:hover .item-img .react-icon {
  opacity: 1;
  visibility: visible;
  top: 30px;
}
.property-box6 .item-img {
  position: relative;
  overflow: hidden;
  border-radius: 6px 6px 0px 0px;
  z-index: 5;
}
.property-box6 .item-img:before {
  content: "";
  height: 100%;
  width: 100%;
  background: #000000;
  opacity: 20%;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
  border-radius: 6px 6px 0px 0px;
}
.property-box6 .item-img a {
  border-radius: 6px 6px 0px 0px;
}
.property-box6 .item-img a img {
  border-radius: 6px 6px 0px 0px;
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 1199px) {
  .property-box6 .item-img a img {
    width: 100%;
  }
}
.property-box6 .categoery-style-3 {
  display: flex;
  justify-content: space-between;
}
.property-box6 .categoery-style-3 .item-category-box1 {
  position: absolute;
  top: 30px;
  left: 30px;
  z-index: 5;
}
.property-box6 .categoery-style-3 .item-category-box1::after {
  content: "";
  position: absolute;
  top: -31px;
  left: 50%;
  background-image: url({{asset('assets/assets/dashbord/img/listing-label.svg')}});
  width: 51px;
  height: 40px;
  margin-left: -27.5px;
}
@media only screen and (max-width: 1199px) {
  .property-box6 .categoery-style-3 .item-category-box1 {
    left: 20px;
  }
}
.property-box6 .categoery-style-3 .item-category-box1 .item-category {
  color: #ffffff;
  font-size: 13px;
  font-weight: 400;
  font-family: "Ubuntu", sans-serif;
  padding: 3px 20px;
  display: inline-block;
  background-color: var(--rt-primary-color);
  border: none;
  border-radius: 2px;
  position: relative;
}
.property-box6 .categoery-style-3 .item-category-box1 .item-category:before {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  background-color: #fff;
  left: 10px;
  top: 16px;
  border: none;
  border-radius: 50%;
}
.property-box6 .categoery-style-3 .react-icon {
  position: absolute;
  right: 30px;
  top: 0px;
  overflow: hidden;
  visibility: hidden;
  opacity: 0;
  transition: all 0.3s ease-in-out;
  z-index: 5;
}
.property-box6 .categoery-style-3 .react-icon ul li {
  display: inline-block;
}
.property-box6 .categoery-style-3 .react-icon ul li a {
  color: #ffffff;
  font-size: 16px;
  border: none;
  background-color: rgba(0, 0, 0, 0.5);
  border-radius: 3px;
  height: 35px;
  width: 35px;
  display: flex;
  align-items: center;
  padding: 5px 10px 0px;
  justify-content: center;
  transition: all 0.3s ease-in-out;
  overflow: hidden;
}
.property-box6 .categoery-style-3 .react-icon ul li a i {
  transition: all 0.3s ease-in-out;
}
.property-box6 .categoery-style-3 .react-icon ul li a:hover {
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
}
.property-box6 .categoery-style-3 .react-icon ul li a:hover i {
  animation: toBottomFromTop 0.5s forwards;
  color: #ffffff;
}
.property-box6 .author-img {
  z-index: 5;
  position: absolute;
  bottom: 15px;
  left: 30px;
  border-radius: 50%;
  background-color: #fff;
  padding: 5px;
  transition: all 0.5s ease-in-out;
}
@media only screen and (max-width: 1199px) {
  .property-box6 .author-img {
    left: 20px;
  }
}
.property-box6 .author-img img {
  border-radius: 50%;
}
.property-box6 .item-rating {
  position: absolute;
  bottom: 30px;
  right: 30px;
  z-index: 5;
}
@media only screen and (max-width: 1199px) {
  .property-box6 .item-rating {
    right: 20px;
  }
}
.property-box6 .item-rating li {
  display: inline-block;
  font-size: 16px;
  color: #ffc107;
}
.property-box6 .item-content {
  background-color: #fff;
  padding: 10px 10px 10px 10px;
  border-radius: 0px 0px 6px 6px;
}
.property-box6 .item-content .verified-area {
  display: flex;
  align-items: center;
}
.property-box6 .item-content .verified-area .item-title {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 7px;
  line-height: 32px;
}
.property-box6 .item-content .verified-area .item-title a {
  color: #212121;
  transition: all 0.3s ease-in-out;
}
.property-box6 .item-content .verified-area .item-title a:hover {
  color: var(--rt-primary-color);
}
.property-box6 .item-content .location-area {
  color: #929292;
  font-size: 15px;
  margin-bottom: 10px;
}
.property-box6 .item-content .location-area i {
  margin-right: 7px;
  position: relative;
  top: 3px;
}
.property-box6 .item-content .item-price {
  color: var(--rt-primary-color);
  font-size: 25px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
  margin-bottom: 40px;
}
@media only screen and (max-width: 991px) {
  .property-box6 .item-content .item-price {
    margin-bottom: 15px;
  }
}
.property-box6 .item-content .item-price span {
  color: var(--rt-primary-color);
  font-size: 16px;
  font-weight: 400;
}
.property-box6 .item-content .item-categoery3 ul {
  display: flex;
  justify-content: space-between;
}
@media only screen and (max-width: 375px) {
  .property-box6 .item-content .item-categoery3 ul {
    display: block;
  }
}
.property-box6 .item-content .item-categoery3 ul li {
  display: flex;
  margin-right: 10px;
  align-items: center;
  font-size: 14px;
  font-weight: 500;
}
@media only screen and (max-width: 991px) {
  .property-box6 .item-content .item-categoery3 ul li {
    margin-right: 5px;
    font-size: 13px;
    font-weight: 500;
  }
}
@media only screen and (max-width: 767px) {
  .property-box6 .item-content .item-categoery3 ul li {
    margin-right: 10px;
    font-size: 14px;
    font-weight: 600;
  }
}
@media only screen and (max-width: 375px) {
  .property-box6 .item-content .item-categoery3 ul li {
    margin-bottom: 5px;
    margin-right: 0;
  }
}
.property-box6 .item-content .item-categoery3 ul li:last-child {
  margin-right: 0;
}
.property-box6 .item-content .item-categoery3 ul li i {
  color: var(--rt-primary-color);
  margin-right: 10px;
  height: 30px;
  width: 30px;
  background-color: #edf9f6;
  border: none;
  border-radius: 50%;
  display: inline-block;
  line-height: 35px;
  text-align: center;
  font-size: 14px;
}
@media only screen and (max-width: 1199px) {
  .property-box6 .item-content .item-categoery3 ul li i {
    margin-right: 6px;
  }
}
@media only screen and (max-width: 991px) {
  .property-box6 .item-content .item-categoery3 ul li i {
    font-size: 13px;
  }
}
.property-box8 {
  box-shadow: 0 11px 27px 0 rgba(3, 27, 52, 0.33);
}
.property-box8 .item-content {
  border-radius: 0px 0px 6px 6px;
}
@media only screen and (max-width: 1199px) {
  .property-box8 .item-content .item-categoery3 ul li:nth-child(3) {
    display: none;
  }
}
/*------------------- 6.21 Single Listing -------------------*/
.single-listing-wrap1 {
  padding: 110px 0px 0px 0px;
  background-color: #eaf7f4;
  position: relative;
}
@media only screen and (max-width: 991px) {
  .single-listing-wrap1 {
    padding: 70px 0px 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .single-listing-wrap1 {
    padding: 50px 0px 50px 0px;
  }
}
.single-listing-wrap3 {
  padding: 180px 0px 0px 0px;
}
@media only screen and (max-width: 991px) {
  .single-listing-wrap3 {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .single-listing-wrap3 {
    padding: 50px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .single-property {
    padding-left: 0;
    display: block;
  }
}
.single-property .property-heading {
  margin-bottom: 24px;
}
@media only screen and (max-width: 479px) {
  .single-property .property-heading {
    margin-bottom: 15px;
  }
}
.single-property .property-heading .single-list-cate {
  margin-bottom: 17px;
}
@media only screen and (max-width: 479px) {
  .single-property .property-heading .single-list-cate {
    margin-bottom: 12px;
  }
}
.single-property .property-heading .single-list-cate .item-categoery {
  background-color: var(--rt-primary-color);
  padding: 2px 20px;
  display: inline-block;
  border: none;
  border-radius: 4px;
  color: #ffffff;
  font-size: 13px;
  font-weight: 500;
  position: relative;
}
.single-property .property-heading .single-list-cate .item-categoery:after {
  content: "";
  height: 5px;
  width: 5px;
  background: #ffffff;
  position: absolute;
  bottom: 15px;
  left: 10px;
  border: none;
  border-radius: 50%;
}
.single-property .property-heading .single-list-price {
  text-align: right;
  color: var(--rt-primary-color);
  font-size: 32px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 600;
  margin-bottom: 10px;
}
@media only screen and (max-width: 991px) {
  .single-property .property-heading .single-list-price {
    text-align: left;
    margin-bottom: 15px;
    margin-top: 10px;
  }
}
@media only screen and (max-width: 479px) {
  .single-property .property-heading .single-list-price {
    font-size: 26px;
    margin-bottom: 10px;
  }
}
.single-property .property-heading .single-verified-area {
  display: flex;
}
.single-property .property-heading .single-verified-area .item-title h3 {
  margin-bottom: 10px;
}
.single-property .property-heading .single-verified-area .item-title h3 a {
  color: #212121;
  font-size: 30px;
  font-weight: 600;
}
@media only screen and (max-width: 479px) {
  .single-property .property-heading .single-verified-area .item-title h3 a {
    font-size: 26px;
    line-height: 28px;
  }
}
.single-property .property-heading .single-item-address li {
  display: inline-block;
  color: #878c9f;
  margin-right: 7px;
  font-weight: 400;
  font-size: 15px;
}
.single-property .property-heading .single-item-address li i {
  margin-right: 5px;
}
.single-property .property-heading .side-button {
  text-align: right;
}
.single-property .property-heading .side-button ul {
  display: inline-flex;
  position: relative;
}
.single-property .property-heading .side-button ul li {
  position: relative;
}
.single-property .property-heading .side-button ul li .side-btn {
  font-size: 18px;
  color: var(--rt-primary-color);
  height: 45px;
  width: 45px;
  background: #fff;
  overflow: hidden;
  border: 1px solid #e0e5ee;
  border-right: none;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s;
  border-radius: 3px;
  border-right: 0;
}
.single-property .property-heading .side-button ul li .side-btn:hover {
  background-color: var(--rt-primary-dark);
  border-color: var(--rt-primary-dark);
  color: #fff;
}
.single-property .property-heading .side-button ul li .side-btn:hover i {
  animation: bottomtotop 0.3s ease-in-out;
}
.single-property .property-heading .side-button ul li .side-btn i {
  color: inherit !important;
  display: inline-flex;
  transition: all 0.3s;
}
.single-property .property-heading .side-button ul li:last-child .side-btn {
  border-right: 1px solid #e0e5ee;
}
.single-property .single-listing-box1 .overview-area {
  background-color: #fff;
  padding: 30px 30px 0px 30px;
  border: 1px solid #e5e5e5;
  border-radius: 6px;
  margin-top: 24px;
}
.single-property .single-listing-box1 .overview-area .item-title {
  font-size: 24px;
  font-weight: 500;
  margin-bottom: 20px;
}
.single-property .single-listing-box1 .overview-area .gallery-icon-box {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  margin-bottom: 40px;
}
@media only screen and (max-width: 575px) {
  .single-property .single-listing-box1 .overview-area .gallery-icon-box {
    padding-left: 0;
  }
}
@media only screen and (max-width: 413px) {
  .single-property .single-listing-box1 .overview-area .gallery-icon-box {
    display: inline-block;
    margin-bottom: 0;
    margin-right: 40px;
  }
  .single-property .single-listing-box1 .overview-area .gallery-icon-box:last-child {
    margin-right: 0;
  }
}
.single-property .single-listing-box1 .overview-area .gallery-icon-box .item-icon-box {
  display: flex;
  width: 25%;
}
@media only screen and (max-width: 1199px) {
  .single-property .single-listing-box1 .overview-area .gallery-icon-box .item-icon-box {
    display: block;
  }
}
@media only screen and (max-width: 413px) {
  .single-property .single-listing-box1 .overview-area .gallery-icon-box .item-icon-box {
    margin-bottom: 20px;
  }
}
.single-property .single-listing-box1 .overview-area .gallery-icon-box .item-icon-box .item-icon i {
  color: var(--rt-primary-color);
  font-size: 26px;
  height: 52px;
  width: 52px;
  border-style: solid;
  border-width: 1px;
  border-color: #e8e9f1;
  border-radius: 4px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(188, 192, 202, 0.26);
  padding: 7px 7px;
  display: inline-block;
  line-height: 46px;
  text-align: center;
}
@media only screen and (max-width: 1199px) {
  .single-property .single-listing-box1 .overview-area .gallery-icon-box .item-icon-box .item-icon i {
    margin-bottom: 10px;
  }
}
.single-property .single-listing-box1 .overview-area .gallery-icon-box .item-icon-box .item-number {
  margin-left: 15px;
}
@media only screen and (max-width: 1199px) {
  .single-property .single-listing-box1 .overview-area .gallery-icon-box .item-icon-box .item-number {
    margin-left: 0;
  }
}
.single-property .single-listing-box1 .overview-area .gallery-icon-box .item-icon-box .item-number li {
  color: #878c9f;
  font-size: 15px;
}
.single-property .single-listing-box1 .overview-area .gallery-icon-box .item-icon-box .item-number .deep-clr {
  color: #212121;
  font-weight: 500;
  font-size: 15px;
}
.single-property .single-listing-box1 .overview-area-2 {
  margin-top: 0;
  border-top: 0;
}
.single-property .single-listing-box1 .overview-area-3 {
  margin-top: 0;
}
.single-property .single-listing-box1 .listing-area {
  margin-top: -1px;
  padding: 20px 30px 10px 30px;
}
.single-property .single-listing-box1 .listing-area p {
  color: #878c9f;
  line-height: 26px;
}
.single-property .single-listing-box1 .single-details-box {
  margin-top: -1px;
  padding: 20px 30px 18px 30px;
}
.single-property .single-listing-box1 .single-details-box .table-box1 {
  width: 100%;
}
.single-property .single-listing-box1 .single-details-box .table-box1 tr:nth-child(even) {
  background-color: #eaf7f4;
}
.single-property .single-listing-box1 .single-details-box .table-box1 td {
  color: #878c9f;
  font-size: 15px;
  margin-left: 24px;
  padding: 10px;
  font-family: "Muli", sans-serif;
  font-weight: 500;
}
.single-property .single-listing-box1 .single-details-box .table-box1 .item-bold {
  font-size: 15px;
  font-weight: 600;
  color: #212121;
}
.single-property .single-listing-box1 .ameniting-box {
  margin-top: -1px;
  padding: 20px 30px 30px 30px;
}
.single-property .single-listing-box1 .ameniting-box .ameniting-list li {
  color: #878c9f;
  font-size: 15px;
  font-weight: 400;
  display: block;
  margin-bottom: 12px;
}
.single-property .single-listing-box1 .ameniting-box .ameniting-list li:last-child {
  margin-bottom: 0;
}
.single-property .single-listing-box1 .ameniting-box .ameniting-list li i {
  color: var(--rt-primary-color);
  font-size: 18px;
  margin-right: 12px;
}
.single-property .single-listing-box1 .map-box {
  margin-top: -1px;
  padding: 20px 30px 30px 30px;
}
.single-property .single-listing-box1 .floor-plan-box {
  margin-top: -1px;
  padding: 20px 30px 30px 30px;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card {
  margin-bottom: -2px;
  border-radius: 4px !important;
  border: 1px solid #deede9;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card:last-child {
  margin-bottom: 0;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header {
  padding: 0;
  border-radius: 4px;
  background-color: #fff;
  border: none;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title {
  position: relative;
  cursor: pointer;
  padding: 10px 20px;
  font-weight: 600;
  font-size: 15px;
  font-family: "Roboto", sans-serif;
  color: #fff;
  border: none;
  opacity: 90%;
  background-color: var(--rt-primary-color);
  transition: all 0.3s ease-in-out;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-radius: 4px 4px 0px 0px;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title:before {
  content: "\f068";
  font-family: "Font Awesome 5 Free";
  height: 34px;
  width: 34px;
  font-size: 18px;
  font-weight: 600;
  color: #fff;
  background-color: transparent;
  position: absolute;
  top: 50%;
  right: 17px;
  transform: translateY(-50%);
  text-align: center;
  line-height: 32px;
  border: 0;
  border-radius: 3px;
  transition: all 0.3s ease-in-out;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title .card-list {
  position: absolute;
  top: 14px;
  right: 65px;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title .card-list ul {
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 767px) {
  .single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title .card-list ul {
    display: none;
  }
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title .card-list ul li {
  margin-right: 10px;
  color: #ffffff;
  font-size: 16px;
  line-height: 1;
  font-weight: 400;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title .card-list ul li i {
  position: relative;
  top: 2px;
  margin-right: 5px;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title .card-list ul li i::before {
  font-size: 15px;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title .card-list ul li:last-child {
  margin-right: 0;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title .card-list ul li span {
  font-size: 15px;
  color: #ffffff;
  margin-left: 5px;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title.collapsed {
  background-color: #fff;
  color: #212121;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title.collapsed:before {
  content: "\f067";
  background-color: var(--rt-primary-color);
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title.collapsed .card-list {
  position: absolute;
  top: 14px;
  right: 65px;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title.collapsed .card-list ul li {
  display: inline-block;
  margin-right: 10px;
  color: var(--rt-primary-color);
  font-size: 16px;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title.collapsed .card-list ul li:last-child {
  margin-right: 0;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-header .heading-title.collapsed .card-list ul li span {
  font-size: 15px;
  color: #878c9f;
  margin-left: 5px;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-body {
  padding: 30px;
  background-color: #eaf7f4;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card .card-body .item-img {
  text-align: center;
  background-color: #fff;
  padding: 20px 0;
}
.single-property .single-listing-box1 .floor-plan-box .accordion .card:last-child {
  margin-bottom: 0;
}
.single-property .single-listing-box1 .video-box1 {
  margin-top: -1px;
  padding: 20px 30px 30px 30px;
}
.single-property .single-listing-box1 .video-box1 .item-img {
  position: relative;
}
.single-property .single-listing-box1 .video-box1 .item-img img {
  border-radius: 4px;
}
.single-property .single-listing-box1 .video-box1 .item-img:before {
  content: "";
  height: 100%;
  width: 100%;
  background-color: #212121;
  opacity: 60%;
  position: absolute;
  left: 0;
  right: 0;
  border: none;
  border-radius: 4px;
  z-index: 2;
}
.single-property .single-listing-box1 .video-box1 .item-img-style-2:before {
  background-color: #000000;
}
.single-property .single-listing-box1 .video-box1 .play-btn {
  z-index: 3;
  position: absolute;
  top: 50%;
  right: 50%;
  transform: translateY(-50%) translateX(50%);
}
.single-property .single-listing-box1 .video-box1 .item-virtual {
  z-index: 3;
  position: absolute;
  top: 50%;
  right: 50%;
  transform: translateY(-50%) translateX(50%);
}
.single-property .single-listing-box1 .video-box1 .item-virtual .item-circle {
  color: #ffffff;
  font-size: 20px;
  font-family: "Ubuntu", sans-serif;
  font-weight: 700;
  height: 39px;
  width: 131px;
  border: 3px solid #ffffff;
  border-radius: 50%;
  padding: 0px 50px;
}
.single-property .single-listing-box1 .nearby-area {
  margin-top: -1px;
  padding: 20px 30px 30px 30px;
}
.single-property .single-listing-box1 .nearby-area .nearby-box .media {
  border-bottom: 1px solid #e5e5e5;
  padding-bottom: 30px;
}
.single-property .single-listing-box1 .nearby-area .nearby-box .media .item-icon i {
  color: var(--rt-primary-color);
  font-size: 20px;
  height: 52px;
  width: 52px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-style: solid;
  border-width: 1px;
  border-color: #e8e9f1;
  border-radius: 50%;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(188, 192, 202, 0.26);
}
.single-property .single-listing-box1 .nearby-area .nearby-box .media .media-body {
  margin-left: 20px;
}
.single-property .single-listing-box1 .nearby-area .nearby-box .media .media-body .small-title {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 10px;
}
.single-property .single-listing-box1 .nearby-area .nearby-box .media .media-body ul li {
  color: #878c9f;
  font-size: 15px;
  display: block;
  margin-bottom: 10px;
}
.single-property .single-listing-box1 .nearby-area .nearby-box .media .media-body ul li:last-child {
  margin-bottom: 0;
}
.single-property .single-listing-box1 .nearby-area .nearby-box .media .media-body .rating-area {
  display: flex;
  gap: 7px;
}
@media only screen and (max-width: 1199px) {
  .single-property .single-listing-box1 .nearby-area .nearby-box .media .media-body .rating-area {
    display: block;
  }
}
.single-property .single-listing-box1 .nearby-area .nearby-box .media .media-body .rating-area .item-rating li {
  display: inline-block;
  color: #ffb300;
  font-size: 14px;
}
.single-property .single-listing-box1 .nearby-area .nearby-box .media .media-body .rating-area .item-number {
  color: #878c9f;
  margin-left: 2px;
  font-size: 14px;
}
@media only screen and (max-width: 1199px) {
  .single-property .single-listing-box1 .nearby-area .nearby-box .media .media-body .rating-area .item-number {
    margin-left: 0;
  }
}
.single-property .single-listing-box1 .nearby-area .nearby-box-2 {
  margin-top: 24px;
}
.single-property .single-listing-box1 .nearby-area .nearby-box-3 {
  margin-top: 24px;
}
.single-property .single-listing-box1 .nearby-area .nearby-box-3 .media {
  border-bottom: 0;
}
.single-property .single-listing-box1 .product-video {
  border-radius: 4px;
  padding: 25px 30px 30px;
  background-color: #fff;
  border: 1px solid #e7e7e7;
}
.single-property .single-listing-box1 .product-video .item-title {
  font-size: 24px;
  font-weight: 600;
}
.single-property .single-listing-box1 .walking-info {
  margin-top: -1px;
  padding: 20px 30px 30px 30px;
}
.single-property-banner {
  margin-bottom: 50px;
}
.single-property-banner .single-listing-box2 .item-img {
  position: relative;
  cursor: pointer;
  overflow: hidden;
}
.single-property-banner .single-listing-box2 .item-img:hover img {
  transform: scale(1.1);
}
.single-property-banner .single-listing-box2 .item-img:after {
  content: "";
  height: 100%;
  width: 100%;
  background: var(--rt-primary-color);
  opacity: 0;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  visibility: hidden;
  transition: all 0.3s ease-in-out;
  z-index: 1;
}
.single-property-banner .single-listing-box2 .item-img:hover:after {
  visibility: visible;
  opacity: 40%;
  transition: 0.3s;
}
.single-property-banner .single-listing-box2 .item-img img {
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 991px) {
  .single-property-banner .single-listing-box2 {
    margin-bottom: 24px;
  }
}
.single-property-banner .single-listing-box3 {
  margin-bottom: 5px;
}
.single-property-banner .single-listing-box3 .item-img {
  position: relative;
  cursor: pointer;
  overflow: hidden;
}
.single-property-banner .single-listing-box3 .item-img:hover img {
  transform: scale(1.1);
}
@media only screen and (max-width: 991px) {
  .single-property-banner .single-listing-box3 .item-img {
    text-align: center;
    margin-bottom: 24px;
  }
}
.single-property-banner .single-listing-box3 .item-img:after {
  content: "";
  height: 100%;
  width: 100%;
  background: var(--rt-primary-color);
  opacity: 0;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  visibility: hidden;
  transition: 0.3s;
}
.single-property-banner .single-listing-box3 .item-img:hover:after {
  visibility: visible;
  opacity: 40%;
  transition: 0.3s;
}
.single-property-banner .single-listing-box3 .item-img img {
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 991px) {
  .single-property-banner .single-listing-box3 .item-img img {
    width: 100%;
  }
}
.single-property-banner .single-listing-box4 .item-img {
  position: relative;
  cursor: pointer;
  overflow: hidden;
}
.single-property-banner .single-listing-box4 .item-img:hover img {
  transform: scale(1.1);
}
@media only screen and (max-width: 991px) {
  .single-property-banner .single-listing-box4 .item-img {
    text-align: center;
  }
}
.single-property-banner .single-listing-box4 .item-img:after {
  content: "";
  height: 100%;
  width: 100%;
  background: var(--rt-primary-color);
  opacity: 0;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  visibility: hidden;
  transition: 0.3s;
}
.single-property-banner .single-listing-box4 .item-img:hover:after {
  visibility: visible;
  opacity: 40%;
  transition: 0.3s;
}
.single-property-banner .single-listing-box4 .item-img img {
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 991px) {
  .single-property-banner .single-listing-box4 .item-img img {
    width: 100%;
  }
}
/*------------------- 6.22 Single Slider-------------------*/
.single-slider-wrap1 {
  position: relative;
  z-index: 2;
}
.single-slider-wrap1 .swiper-wrapper .swiper-slide .item-img {
  position: relative;
  cursor: pointer;
}
.single-slider-wrap1 .swiper-wrapper .swiper-slide .item-img:before {
  content: "";
  height: 70%;
  width: 100%;
  background: linear-gradient(to top, #000, transparent);
  opacity: 80%;
  position: absolute;
  bottom: 0;
  left: 0;
}
.single-slider-wrap1 .swiper-pagination-bullet {
  width: 9px;
  height: 9px;
  display: block;
  border-radius: 50%;
  background: #fff;
  opacity: 1;
  margin-bottom: 10px;
  z-index: 5;
}
.single-slider-wrap1 .swiper-pagination-bullet:last-child {
  margin-bottom: 0;
}
.single-slider-wrap1 .swiper-pagination-bullet-active {
  background-color: var(--rt-primary-color);
  opacity: 1;
}
.single-slider-wrap1 .rt-slider-pagniation-wrap-1 {
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  z-index: 5;
}
.single-slider-content {
  position: relative;
  margin-top: -250px;
  margin-left: 90px;
  z-index: 6;
}
@media only screen and (max-width: 991px) {
  .single-slider-content {
    margin: 0;
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .single-slider-content {
    padding: 50px 0px;
  }
}
.single-slider-content .single-list-cate {
  margin-bottom: 17px;
}
.single-slider-content .single-list-cate .item-categoery {
  background-color: var(--rt-primary-color);
  padding: 2px 20px;
  display: inline-block;
  border: none;
  border-radius: 4px;
  color: #ffffff;
  font-size: 13px;
  font-weight: 500;
  position: relative;
}
.single-slider-content .single-list-cate .item-categoery:after {
  content: "";
  height: 5px;
  width: 5px;
  background: #ffffff;
  position: absolute;
  bottom: 15px;
  left: 10px;
  border: none;
  border-radius: 50%;
}
.single-slider-content .single-verified-area {
  display: flex;
}
.single-slider-content .single-verified-area .item-title h3 {
  margin-bottom: 10px;
}
.single-slider-content .single-verified-area .item-title h3 a {
  color: #ffffff;
  font-size: 32px;
  font-weight: 600;
}
@media only screen and (max-width: 991px) {
  .single-slider-content .single-verified-area .item-title h3 a {
    color: var(--rt-primary-color);
  }
}
@media only screen and (max-width: 479px) {
  .single-slider-content .single-verified-area .item-title h3 a {
    font-size: 26px;
  }
}
.single-slider-content .single-item-address {
  margin-bottom: 20px;
}
.single-slider-content .single-item-address li {
  display: inline-block;
  color: #ffffff;
  margin-right: 7px;
  font-weight: 400;
  font-size: 15px;
}
@media only screen and (max-width: 991px) {
  .single-slider-content .single-item-address li {
    color: #212121;
  }
}
.single-slider-content .single-item-address li i {
  margin-right: 5px;
  color: var(--rt-primary-color);
}
.single-slider-content .property-heading-2 {
  display: flex;
  justify-content: space-between;
}
@media only screen and (max-width: 991px) {
  .single-slider-content .property-heading-2 {
    display: block;
  }
}
.single-slider-content .property-heading-2 .single-list-price-2 {
  color: #ffffff;
  font-size: 32px;
  font-weight: 700;
  font-family: "Jost", sans-serif;
}
@media only screen and (max-width: 991px) {
  .single-slider-content .property-heading-2 .single-list-price-2 {
    color: var(--rt-primary-color);
  }
}
@media only screen and (max-width: 479px) {
  .single-slider-content .property-heading-2 .single-list-price-2 {
    font-size: 26px;
  }
}
.single-slider-content .property-heading-2 ul {
  display: inline-flex;
  position: relative;
}
.single-slider-content .property-heading-2 ul li {
  position: relative;
}
.single-slider-content .property-heading-2 ul li .side-btn {
  font-size: 18px;
  color: var(--rt-primary-color);
  height: 45px;
  width: 45px;
  background: #fff;
  overflow: hidden;
  border: none;
  border-right: 1px solid #e0e5ee;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s;
}
.single-slider-content .property-heading-2 ul li .side-btn:hover {
  background-color: var(--rt-primary-dark);
  border-color: var(--rt-primary-dark);
  color: #fff;
}
.single-slider-content .property-heading-2 ul li .side-btn:hover i {
  animation: bottomtotop 0.3s ease-in-out;
}
.single-slider-content .property-heading-2 ul li .side-btn i {
  color: inherit !important;
  display: inline-flex;
  transition: all 0.3s;
}
.single-slider-content .property-heading-2 ul li:first-child .side-btn {
  border-radius: 3px 0px 0px 3px;
}
.single-slider-content .property-heading-2 ul li:last-child .side-btn {
  border-radius: 0px 3px 3px 0px;
}
.single-listing-wrap2 {
  padding: 50px 0px;
  background-color: #eaf7f4;
  position: relative;
}
.single-listing-wrap2 .single-listing-box2 .item-img {
  border-radius: 6px;
}
.single-listing-wrap2 .single-listing-box2 .item-img img {
  border-radius: 6px;
}
.single-listing-wrap2 .single-listing-box3 {
  margin-bottom: 5px;
}
.single-listing-wrap2 .single-listing-box3 .item-img {
  border-radius: 6px;
}
.single-listing-wrap2 .single-listing-box3 .item-img img {
  border-radius: 6px;
}
.single-listing-wrap2 .single-listing-box4 {
  margin-bottom: 0px;
}
.single-listing-wrap2 .single-listing-box4 .item-img {
  border-radius: 6px;
}
.single-listing-wrap2 .single-listing-box4 .item-img img {
  border-radius: 6px;
}
/*------------------- 6.23 Team -------------------*/
.team-wrap1 {
  padding: 100px 0px 10px 0px;
}
@media only screen and (max-width: 991px) {
  .team-wrap1 {
    padding: 70px 0px 0px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .team-wrap1 {
    padding: 50px 0px 0px 0px;
  }
}
.team-wrap2 {
  padding: 100px 0px 90px;
  border-bottom: 1px solid #e8e8e8;
}
@media only screen and (max-width: 991px) {
  .team-wrap2 {
    padding: 60px 0px 30px;
  }
}
@media only screen and (max-width: 575px) {
  .team-wrap2 {
    padding: 40px 0px 10px;
  }
}
@media only screen and (max-width: 991px) {
  .team-wrap3 {
    padding: 40px 0px;
  }
}
.team-box1 {
  padding: 24px;
  background-color: #ffffff;
  box-shadow: 0px 4px 18px 0px rgba(194, 200, 213, 0.3);
  border-radius: 8px;
}
@media only screen and (max-width: 1199px) {
  .team-box1 {
    margin-bottom: 24px;
  }
}
.team-box1:hover .item-img a img {
  transform: scale(1.1);
}
.team-box1:hover .item-img .team-social-1 .social-item .social-hover-icon {
  visibility: visible;
  opacity: 1;
}
.team-box1 .item-img {
  position: relative;
  margin-bottom: 10px;
  overflow: hidden;
}
.team-box1 .item-img a img {
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
.team-box1 .team-social-1 {
  position: absolute;
  right: 15px;
  top: 15px;
}
.team-box1 .team-social-1 .social-item {
  position: relative;
}
.team-box1 .team-social-1 .social-item:hover .team-social-dropdown {
  opacity: 1;
  visibility: visible;
  transform: scaleY(1);
}
.team-box1 .team-social-1 .social-item:hover .social-hover-icon {
  opacity: 0;
  visibility: hidden;
}
.team-box1 .team-social-1 .social-item .social-hover-icon {
  height: 40px;
  width: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: var(--rt-primary-color);
  color: #ffffff;
  font-size: 16px;
  border: none;
  border-radius: 50%;
  transition: all 0.4s ease-in-out;
  visibility: hidden;
  opacity: 0;
}
.team-box1 .team-social-1 .social-item .social-hover-icon:hover {
  background-color: var(--rt-primary-dark);
}
.team-box1 .team-social-1 .social-item .team-social-dropdown {
  position: absolute;
  top: 44px;
  left: 0;
  transition: all ease 0.4s;
  visibility: hidden;
  opacity: 0;
  transform: scaleY(0);
  transform-origin: 0 0 0;
  transition: all 0.4s cubic-bezier(0.3, 0.02, 0, 0.6);
}
.team-box1 .team-social-1 .social-item .team-social-dropdown .social-item {
  display: block;
  margin-bottom: 4px;
}
.team-box1 .team-social-1 .social-item .team-social-dropdown .social-item .social-link {
  height: 40px;
  width: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: var(--rt-primary-color);
  color: #ffffff;
  font-size: 16px;
  border: none;
  border-radius: 50%;
}
.team-box1 .team-social-1 .social-item .team-social-dropdown .social-item .social-link:hover {
  background-color: var(--rt-primary-dark);
}
.category-box {
  position: absolute;
  bottom: 15px;
  left: 20px;
}
.category-box .item-category {
  background-color: #ffffff;
  padding: 2px 20px;
  display: inline-block;
  border: none;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 500;
  position: relative;
  transition: all 0.3s ease-in-out;
}
.category-box .item-category:hover {
  background-color: #00c194;
}
.category-box .item-category:hover:after {
  background-color: #ffffff;
}
.category-box .item-category:hover a {
  color: #fff;
}
.category-box .item-category a {
  color: var(--rt-primary-color);
  transition: all 0.3s ease-in-out;
}
.category-box .item-category:after {
  content: "";
  height: 6px;
  width: 6px;
  background: var(--rt-primary-color);
  position: absolute;
  bottom: 14px;
  left: 10px;
  border: none;
  border-radius: 50%;
  transition: all 0.3s ease-in-out;
}
.item-content .item-title h3 {
  font-size: 20px;
  font-weight: 600;
  line-height: 36px;
  margin-bottom: 0;
}
.item-content .item-title h3 a {
  color: #212121;
  transition: all 0.3s ease-in-out;
}
.item-content .item-title h3 a:hover {
  color: var(--rt-primary-color);
}
.item-content .item-title .item-subtitle {
  font-size: 15px;
  margin-bottom: 0;
  font-family: "Roboto", sans-serif;
}
.item-content .item-title .item-subtitle a {
  color: #788593;
  font-weight: 500;
  transition: all 0.3s ease-in-out;
}
.item-content .item-title .item-subtitle a:hover {
  color: var(--rt-primary-color);
}
.item-content .item-contact {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
}
.item-content .item-contact .item-icon {
  font-size: 15px;
  color: #788593;
}
.item-content .item-contact .item-phn-no {
  font-size: 15px;
  color: #788593;
  margin-left: 10px;
}
.team-box2 {
  padding: 0;
  background-color: transparent;
  box-shadow: none;
  border-radius: 0;
}
.team-box2 .item-img {
  position: relative;
  margin-bottom: 10px;
  overflow: hidden;
}
.team-box2 .item-img > a {
  display: inline-block;
  border-radius: 115px 115px 124px 0px;
  overflow: hidden;
}
.team-box2 .item-img > a img {
  transform: scale(1);
  transition: all 0.3s ease-in-out;
}
@media only screen and (max-width: 575px) {
  .team-box2 .item-img > a img {
    width: 100%;
  }
}
.team-box2:hover .item-img a img {
  transform: scale(1.1);
}
.team-box2 .team-social-1 {
  left: 15px;
  top: 15px;
}
.team-box2 .category-box {
  bottom: 20px;
}
.team-box2 .category-box .item-category {
  background-color: var(--rt-primary-color);
}
.team-box2 .category-box .item-category:hover:after {
  background-color: #fff;
}
.team-box2 .category-box .item-category a {
  color: #ffffff;
}
.team-box2 .item-content .item-subtitle {
  line-height: 36px;
  display: block;
  font-family: "Roboto", sans-serif;
  margin-bottom: 5px;
}
.team-box2 .item-content .item-contact .item-icon {
  height: 34px;
  width: 34px;
  background-color: #dfefeb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  text-align: center;
  line-height: 34px;
  color: var(--rt-primary-color);
}
.team-box3 {
  margin-bottom: 24px;
}
.team-box3 .item-content .item-details {
  justify-content: space-between;
}
.team-box3 .item-content .item-details .item-rating {
  margin-left: 0;
}
.team-box4 {
  padding: 0;
  background-color: #ffffff;
  box-shadow: none;
  border-radius: 8px;
}
@media only screen and (max-width: 991px) {
  .team-box4 {
    margin-bottom: 0;
  }
}
.team-box4 .item-content .item-title h3 {
  margin-bottom: -7px;
  font-weight: 500;
}
.team-box4 .item-content .item-details {
  margin-bottom: 15px;
  justify-content: space-between;
}
.team-box4 .item-content .item-details .item-subtitle {
  margin-top: 0px;
  font-weight: 500;
}
.team-box4 .item-content .item-details .item-rating {
  margin-left: 0;
}
.team-box4 .item-content .item-details .item-rating li {
  display: inline-block;
  margin-right: 2px;
}
.team-box4 .item-content .item-details .item-rating li:last-child {
  margin-right: 0;
}
.team-box4 .item-content .item-details .item-rating li i {
  color: #f2860a;
}
.team-box4 .item-contact .item-phn-no {
  color: #212121;
  font-weight: 700;
  line-height: 36px;
  border-top: 1px solid #e5e5e5;
  padding: 10px 0px;
}
.team-box4 .item-contact .item-phn-no span {
  color: #212121;
  font-size: 13px;
  font-weight: 500;
}
.team-box4 .item-contact .item-phn-no i {
  color: #aab4cf;
  margin-right: 10px;
}
.team-box4 .item-contact .item-icon {
  color: #212121;
  font-weight: 700;
  line-height: 36px;
  border-top: 1px solid #e5e5e5;
  padding: 10px 0px;
}
.team-box4 .item-contact .item-icon span {
  color: #212121;
  font-size: 13px;
  font-weight: 500;
}
.team-box4 .item-contact .item-icon i {
  color: #aab4cf;
  margin-right: 10px;
}
.team-box5 {
  padding: 24px;
  background-color: #ffffff;
  box-shadow: none;
  border: 1px solid #e5e5e5;
  border-radius: 8px;
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 991px) {
  .team-box5 {
    margin-bottom: 0;
  }
}
@media only screen and (max-width: 767px) {
  .team-box5 {
    display: block;
    text-align: center;
  }
}
.team-box5 .item-img {
  border-radius: 6px;
  position: relative;
  overflow: hidden;
  margin-bottom: 0px;
}
@media only screen and (max-width: 767px) {
  .team-box5 .item-img img {
    width: 100%;
    margin-bottom: 10px;
  }
}
.team-box5 .category-box {
  position: absolute;
  top: 15px;
  left: 20px;
  bottom: 0;
}
.team-box5 .category-box .item-category {
  background-color: var(--rt-primary-color);
}
.team-box5 .category-box .item-category:after {
  background-color: #fff;
}
.team-box5 .category-box .item-category a {
  color: #fff;
}
.team-box5 .item-content {
  margin-left: 24px;
  flex: 1;
}
@media only screen and (max-width: 767px) {
  .team-box5 .item-content {
    margin-left: 0;
  }
}
.team-box5 .item-content .item-title h3 {
  margin-bottom: -7px;
  font-weight: 600;
}
.team-box5 .item-content .item-details {
  margin-bottom: 15px;
  display: flex;
  justify-content: space-between;
}
@media only screen and (max-width: 767px) {
  .team-box5 .item-content .item-details {
    display: block;
    margin-bottom: 10px;
  }
}
.team-box5 .item-content .item-details .item-subtitle {
  margin-top: 0px;
  font-weight: 500;
  font-size: 16px;
}
.team-box5 .item-content .item-details .item-rating {
  margin-left: 0;
}
@media only screen and (max-width: 1199px) {
  .team-box5 .item-content .item-details .item-rating {
    display: none;
  }
}
.team-box5 .item-content .item-details .item-rating li {
  display: inline-block;
  margin-right: 3px;
}
.team-box5 .item-content .item-details .item-rating li:last-child {
  margin-right: 0;
}
.team-box5 .item-content .item-details .item-rating li i {
  color: #f68a0c;
}
@media only screen and (max-width: 767px) {
  .team-box5 .item-content .item-details .item-rating {
    margin-top: 0;
  }
}
.team-box5 .item-content p {
  color: #788593;
  font-weight: 400;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.team-box5 .item-content .item-contact-2 {
  display: block;
}
.team-box5 .item-content .item-contact-2 .item-phn-no {
  color: #212121;
  font-weight: 700;
  line-height: 36px;
  border-top: 1px solid #e5e5e5;
  padding: 10px 0px;
}
.team-box5 .item-content .item-contact-2 .item-phn-no span {
  color: #212121;
  font-size: 15px;
  font-weight: 400;
}
.team-box5 .item-content .item-contact-2 .item-phn-no i {
  color: #aab4cf;
  margin-right: 10px;
}
.team-box5 .item-content .item-contact-2 .item-icon {
  color: #212121;
  font-weight: 700;
  line-height: 36px;
  border-top: 1px solid #e5e5e5;
  padding: 10px 0px;
}
.team-box5 .item-content .item-contact-2 .item-icon span {
  color: #212121;
  font-size: 15px;
  font-weight: 400;
}
.team-box5 .item-content .item-contact-2 .item-icon i {
  color: #aab4cf;
  margin-right: 10px;
}
.team-box5 .item-content .item-contact-2 .item-icon .rt-social-item {
  color: #212121;
  font-size: 15px;
  font-weight: 400;
  margin-left: 4px;
}
.team-box5 .item-content .item-contact-2 .item-icon .rt-social-item .social-item {
  display: flex;
  align-items: center;
}
.team-box5 .item-content .item-contact-2 .item-icon .rt-social-item .social-item li {
  display: inline-block;
}
.team-box5 .item-content .item-contact-2 .item-icon .rt-social-item .social-item li a {
  color: #70778b;
  font-size: 16px;
  font-weight: 500;
  transition: all 0.3s ease-in-out;
}
.team-box5 .item-content .item-contact-2 .item-icon .rt-social-item .social-item li a:hover i {
  color: var(--rt-primary-color);
}
.team-box5 .item-content .item-contact-2 .item-icon .rt-social-item .social-item li a i {
  color: #70778b;
  transition: all 0.3s ease-in-out;
}
.team-box5 .item-content .item-contact-2 .item-icon i {
  color: #aab4cf;
  margin-right: 10px;
}
.team-box5 .item-content .item-contact-2 .icon-style-2 {
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 767px) {
  .team-box5 .item-content .item-contact-2 .icon-style-2 {
    justify-content: center;
  }
}
.team-box-6 {
  padding: 40px;
  background-color: #F9F9F9;
  border-radius: 6px;
  display: flex;
  align-items: center;
  position: relative;
  z-index: 1;
  overflow: hidden;
  margin-bottom: 24px;
}
@media only screen and (max-width: 479px) {
  .team-box-6 {
    display: inline-block;
    width: 100%;
    text-align: center;
  }
}
.team-box-6:hover .item-img a img {
  filter: grayscale(0);
  transform: scale(1.1);
}
.team-box-6 .item-img {
  width: 184px;
  height: 184px;
  border-radius: 50%;
  margin-bottom: 0;
  flex-shrink: 0;
  position: relative;
  overflow: hidden;
}
@media only screen and (max-width: 479px) {
  .team-box-6 .item-img {
    text-align: center;
    height: 100%;
    width: 100%;
    margin-bottom: 15px;
  }
}
.team-box-6 .item-img a img {
  width: 100%;
  min-width: inherit;
  object-fit: cover;
  object-position: center center;
  height: 100%;
  transition: 0.4s;
  filter: grayscale(100%);
  transform: scale(1);
  overflow: hidden;
  position: relative;
}
.team-box-6 .item-content {
  margin-left: 40px;
}
@media only screen and (max-width: 479px) {
  .team-box-6 .item-content {
    margin-left: 0;
  }
}
.team-box-6 .item-content .item-category a {
  font-size: 15px;
  padding: 1px 18px;
  border-radius: 30px;
  background-color: var(--rt-primary-color);
  color: #fff;
  display: inline-block;
  margin-bottom: 10px;
}
.team-box-6 .item-content .item-contact {
  border: 1px solid #E2E2E2;
  border-radius: 30px;
  background-color: #fff;
  padding: 4px 20px;
}
.single-listing-button-2 {
  padding: 0;
  margin-bottom: 20px;
}
/*------------------- 6.24 Testimonial -------------------*/
.testimonial-wrap1 {
  padding: 100px 0px 0px 0px;
  background-color: transparent;
  background-image: linear-gradient(180deg, #eaf7f4 69%, #ffffff 0%);
  position: relative;
}
@media only screen and (max-width: 991px) {
  .testimonial-wrap1 {
    padding: 60px 0px 70px;
  }
}
@media only screen and (max-width: 575px) {
  .testimonial-wrap1 {
    padding: 40px 0px;
  }
}
.testimonial-wrap1 .item-heading-center {
  margin-bottom: 72px;
}
@media only screen and (max-width: 767px) {
  .testimonial-wrap1 .item-heading-center {
    margin-bottom: 24px;
  }
}
.testimonial-layout1 {
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0px 21px 43px 0px rgba(0, 0, 0, 0.04);
}
@media only screen and (max-width: 991px) {
  .testimonial-layout1 {
    margin-bottom: 0;
  }
}
@media only screen and (max-width: 767px) {
  .testimonial-layout1 .testimonial-img {
    text-align: center;
  }
}
.testimonial-layout1 .testimonial-img img {
  border-radius: 10px 0px 0px 10px;
  height: 412px;
  width: 490px;
  object-fit: cover;
}
@media only screen and (max-width: 991px) {
  .testimonial-layout1 .testimonial-img img {
    width: 100%;
    height: auto;
  }
}
@media only screen and (max-width: 767px) {
  .testimonial-layout1 .testimonial-img img {
    border-radius: 10px 10px 0px 0px;
  }
}
.testimonial-layout1 .testimonial-box1 {
  padding: 0px 100px;
}
@media only screen and (max-width: 1199px) {
  .testimonial-layout1 .testimonial-box1 {
    padding-left: 69px;
    padding-right: 79px;
  }
}
@media only screen and (max-width: 991px) {
  .testimonial-layout1 .testimonial-box1 {
    padding: 30px;
  }
}
@media only screen and (max-width: 767px) {
  .testimonial-layout1 .testimonial-box1 {
    padding-left: 0px;
    padding-right: 0px;
    text-align: center;
    padding: 30px;
  }
}
.testimonial-layout1 .testimonial-box1 .item-rating {
  margin-bottom: 20px;
}
.testimonial-layout1 .testimonial-box1 .item-rating li {
  display: inline-block;
  margin-right: 5px;
  color: #ffab00;
  font-size: 20px;
}
.testimonial-layout1 .testimonial-box1 .item-rating li:last-child {
  margin-right: 0;
}
.testimonial-layout1 .testimonial-box1 .item-quotation {
  color: #70778a;
  font-size: 18px;
  position: relative;
  margin-bottom: 20px;
  line-height: 32px;
  font-style: italic;
}
.testimonial-layout1 .testimonial-box1 .item-quotation:before {
  content: "";
  width: 32px;
  height: 26px;
  background-image: url({{asset('assets/assets/dashbord/img/figure/quote-left.png')}});
  background-repeat: no-repeat;
  display: inline-block;
  position: absolute;
  left: -43px;
  top: -14px;
}
.testimonial-layout1 .testimonial-box1 .item-quotation:after {
  content: "";
  width: 32px;
  height: 26px;
  background-image: url({{asset('assets/assets/dashbord/img/figure/quote-left2.pn')}}g);
  background-repeat: no-repeat;
  display: inline-block;
  position: absolute;
  transform: rotate(180deg);
  margin-top: 8px;
  margin-left: 9px;
}
.testimonial-layout1 .testimonial-box1 .item-title h3 {
  font-size: 22px;
  font-weight: 600;
  line-height: 40px;
  margin-bottom: 0;
}
.testimonial-layout1 .testimonial-box1 .item-subtitle h4 {
  font-size: 15px;
  font-weight: 400;
  line-height: 40px;
  margin-bottom: 0;
  color: var(--rt-primary-color);
  position: relative;
  margin-top: -12px;
  margin-left: 10px;
  font-family: "Roboto", sans-serif;
}
.testimonial-layout1 .testimonial-box1 .item-subtitle h4:after {
  content: "";
  height: 5px;
  width: 5px;
  background: var(--rt-primary-color);
  position: absolute;
  bottom: 16px;
  left: -10px;
  border: none;
  border-radius: 50%;
  transition: all 0.3s ease-in-out;
  z-index: 2;
}
@media only screen and (max-width: 991px) {
  .testimonial-layout1 .testimonial-box1 .item-subtitle h4:after {
    display: none;
  }
}
.testimonial-layout1 .swiper-slide .container {
  padding: 0;
}
.testimonial-wrap2 {
  padding: 60px 0px 57px 0px;
  background-color: #0e2e50;
  position: relative;
}
@media only screen and (max-width: 991px) {
  .testimonial-wrap2 {
    padding: 65px 0 70px;
  }
}
@media only screen and (max-width: 575px) {
  .testimonial-wrap2 {
    padding: 45px 0 50px;
  }
}
.testimonial-wrap2:after {
  content: "";
  height: 100%;
  width: 29%;
  position: absolute;
  bottom: 0;
  right: 0;
  background-color: #fff;
  z-index: 1;
}
@media only screen and (max-width: 991px) {
  .testimonial-wrap2:after {
    width: 0;
  }
}
.testimonial-box2 {
  z-index: 2;
}
@media only screen and (max-width: 991px) {
  .testimonial-box2 {
    margin-bottom: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .testimonial-box2 {
    text-align: center;
  }
}
.testimonial-box2 .testimonial-heading {
  position: relative;
  z-index: 1;
}
.testimonial-box2 .testimonial-heading .section-subtitle {
  color: #ffffff;
  font-family: "Ubuntu", sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  font-size: 15px;
  position: relative;
  z-index: 2;
}
@media only screen and (max-width: 479px) {
  .testimonial-box2 .testimonial-heading .section-subtitle {
    font-size: 13px;
  }
}
.testimonial-box2 .testimonial-heading .section-title {
  color: #ffffff;
  font-weight: 600;
  font-size: 32px;
  margin-bottom: 35px;
  position: relative;
  z-index: 2;
}
@media only screen and (max-width: 479px) {
  .testimonial-box2 .testimonial-heading .section-title {
    font-size: 26px;
    line-height: 32px;
  }
}
.testimonial-box2 .testimonial-heading .bg-title-wrap {
  position: absolute;
  top: 40%;
  transform: translateY(-50%);
  left: 0;
  width: 100%;
}
.testimonial-box2 .testimonial-heading .bg-title-wrap .background-title {
  display: inline-block;
  font-family: "Quentin";
  font-size: 100px;
  line-height: 130px;
  color: #dceeea;
  pointer-events: none;
  opacity: 0.2;
}
@media only screen and (max-width: 767px) {
  .testimonial-box2 .testimonial-heading .bg-title-wrap .background-title {
    display: none;
  }
}
.testimonial-box2 .testimonial-layout2 .item-rating {
  margin-bottom: 0px;
}
.testimonial-box2 .testimonial-layout2 .item-rating li {
  display: inline-block;
  color: #ffab00;
}
.testimonial-box2 .testimonial-layout2 .item-rating li:last-child {
  margin-right: 0;
}
.testimonial-box2 .testimonial-layout2 .item-quotation {
  padding-bottom: 10px;
}
.testimonial-box2 .testimonial-layout2 .item-quotation i {
  font-size: 60px;
  background-color: transparent;
  background-image: linear-gradient(180deg, #ffffff8a 0%, #0e2e50 100%);
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.testimonial-box2 .testimonial-layout2 p {
  color: #ffffff;
  font-size: 18px;
  line-height: 28px;
  margin-bottom: 24px;
  padding-right: 205px;
}
@media only screen and (max-width: 767px) {
  .testimonial-box2 .testimonial-layout2 p {
    padding-right: 0;
  }
}
.testimonial-box2 .testimonial-layout2 .item-title h3 {
  font-size: 22px;
  font-weight: 600;
  line-height: 40px;
  margin-bottom: 0;
  color: #ffffff;
}
.testimonial-box2 .testimonial-layout2 .item-subtitle h4 {
  font-size: 15px;
  font-weight: 400;
  line-height: 40px;
  margin-bottom: 0;
  color: #ffffff;
  position: relative;
  margin-top: -5px;
}
.testimonial-box2 .testimonial-btn {
  height: 60px;
  width: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #ffffff;
  color: var(--rt-primary-color);
  border: none;
  border-radius: 50%;
  box-shadow: none;
  position: absolute;
  top: 82%;
  transition: all 0.3s ease-in-out;
  pointer-events: visible;
  opacity: 1;
  cursor: pointer;
}
@media only screen and (max-width: 479px) {
  .testimonial-box2 .testimonial-btn {
    height: 45px;
    width: 45px;
  }
}
.testimonial-box2 .testimonial-btn:hover {
  background-color: var(--rt-primary-color);
  color: #ffffff;
  border-color: var(--rt-primary-color);
}
.testimonial-box2 .testimonial-btn:after {
  font-size: 16px;
  font-weight: 700;
}
.testimonial-box2 .swiper-button-prev {
  left: 29%;
}
@media only screen and (max-width: 767px) {
  .testimonial-box2 .swiper-button-prev {
    left: 0;
  }
}
.testimonial-box2 .swiper-button-next {
  right: 52%;
}
@media only screen and (max-width: 1199px) {
  .testimonial-box2 .swiper-button-next {
    right: 46%;
  }
}
@media only screen and (max-width: 991px) {
  .testimonial-box2 .swiper-button-next {
    right: 50%;
  }
}
@media only screen and (max-width: 767px) {
  .testimonial-box2 .swiper-button-next {
    right: 0;
  }
}
.testimonial-img-2 {
  background-color: #ffffff;
  border: none;
  border-radius: 130px 0px 130px 0px;
  padding: 12px;
  position: relative;
  z-index: 2;
}
.testimonial-img-2 img {
  border-radius: 130px 0px 130px 0px;
}
.test-slider-wrapper--style-1 {
  position: relative;
}
.test-slider-wrapper--style-1 .testimonial-btn {
  height: 60px;
  width: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #ffffff;
  color: #7e7e7e;
  border: none;
  border-radius: 50%;
  box-shadow: 0px 11px 29px 0px rgba(0, 0, 0, 0.15);
  position: absolute;
  top: 50%;
  transition: all 0.3s ease-in-out;
}
.test-slider-wrapper--style-1 .testimonial-btn:hover {
  background-color: var(--rt-primary-color);
  color: #ffffff;
}
.test-slider-wrapper--style-1 .testimonial-btn:after {
  font-size: 20px;
}
.test-slider-wrapper--style-1 .swiper-button-prev {
  left: 0px;
}
@media only screen and (min-width: 1400px) {
  .test-slider-wrapper--style-1 .swiper-button-prev {
    left: -30px;
  }
}
.test-slider-wrapper--style-1 .swiper-button-next {
  right: 0px;
}
@media only screen and (min-width: 1400px) {
  .test-slider-wrapper--style-1 .swiper-button-next {
    right: -30px;
  }
}
.testimonial-wrap3 {
  padding: 100px 0px;
  background-color: #fff;
  border-bottom: 1px solid #eee;
}
@media only screen and (max-width: 991px) {
  .testimonial-wrap3 {
    padding: 70px 0px;
  }
}
@media only screen and (max-width: 575px) {
  .testimonial-wrap3 {
    padding: 50px 0px;
  }
}
.testimonial-layout3 {
  text-align: center;
}
.testimonial-layout3 .item-img {
  margin-bottom: 10px;
}
.testimonial-layout3 .item-img img {
  border-radius: 50%;
}
.testimonial-layout3 .testimonial-content .item-title {
  font-family: "Roboto", Sans-serif;
  font-size: 20px;
  color: #000;
  margin-bottom: 0px;
}
.testimonial-layout3 .testimonial-content .item-subtitle {
  display: inline-block;
  font-size: 15px;
  color: #6D6D6D;
}
.testimonial-layout3 .testimonial-content .rtin-content {
  padding: 25px 0px 0px 0px;
  position: relative;
  z-index: 1;
}
@media only screen and (min-width: 768px) {
  .testimonial-layout3 .testimonial-content .rtin-content {
    width: 65%;
    margin: 0 auto;
  }
}
.testimonial-layout3 .testimonial-content .rtin-content span {
  font-size: 18px;
  font-style: italic;
  color: #000;
}
.testimonial-layout3 .testimonial-content .rtin-content .item-icon {
  font-size: 120px;
  color: #eee;
  position: absolute;
  top: 70px;
  right: 50%;
  transform: translateY(-50%) translateX(50%);
  z-index: -1;
}
.testimonial-layout3 .testimonial-btn {
  height: 60px;
  width: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #F3F3F3;
  color: var(--rt-primary-color);
  border: none;
  border-radius: 50%;
  box-shadow: none;
  position: absolute;
  top: 75%;
  transition: all 0.3s ease-in-out;
  pointer-events: visible;
  opacity: 1;
  cursor: pointer;
}
@media only screen and (max-width: 767px) {
  .testimonial-layout3 .testimonial-btn {
    top: 35%;
  }
}
@media only screen and (max-width: 479px) {
  .testimonial-layout3 .testimonial-btn {
    height: 45px;
    width: 45px;
  }
}
.testimonial-layout3 .testimonial-btn:hover {
  background-color: var(--rt-primary-color);
  color: #ffffff;
  border-color: var(--rt-primary-color);
}
.testimonial-layout3 .testimonial-btn:after {
  font-size: 16px;
  font-weight: 700;
}
.testimonial-layout3 .swiper-button-prev {
  left: 10%;
}
@media only screen and (max-width: 991px) {
  .testimonial-layout3 .swiper-button-prev {
    left: 0;
  }
}
.testimonial-layout3 .swiper-button-next {
  right: 10%;
}
@media only screen and (max-width: 991px) {
  .testimonial-layout3 .swiper-button-next {
    right: 0;
  }
}
/*------------------- 6.25 Why-Choose -------------------*/
.why-choose-wrap1 {
  padding: 100px 0px 110px;
  background-color: #eaf7f4;
  position: relative;
}
@media only screen and (max-width: 991px) {
  .why-choose-wrap1 {
    padding: 60px 0 30px;
  }
}
@media only screen and (max-width: 575px) {
  .why-choose-wrap1 {
    padding: 40px 0 10px;
  }
}
.why-choose-wrap1 .shape-img1 {
  position: absolute;
  bottom: 0;
  right: 55px;
}
@media only screen and (max-width: 1710px) {
  .why-choose-wrap1 .shape-img1 {
    display: none;
  }
}
.choose-box1 {
  text-align: center;
  padding-right: 50px;
  padding-left: 50px;
}
@media only screen and (max-width: 991px) {
  .choose-box1 {
    padding-left: 0px;
    padding-right: 0px;
    margin-bottom: 24px;
  }
}
.choose-box1:hover .choose-shape1 a:after {
  opacity: 1;
  visibility: visible;
  transition: all 0.3s ease-in-out;
}
.choose-box1:hover .choose-shape1 a img {
  filter: brightness(0) invert(1);
}
.choose-box1 .choose-shape1 {
  margin-bottom: 15px;
}
.choose-box1 .choose-shape1 a {
  display: inline-block;
  text-align: center;
  line-height: 110px;
  background-color: #fff;
  height: 110px;
  width: 110px;
  border: none;
  border-radius: 50%;
  background-color: transparent;
  background-image: linear-gradient(180deg, #ffffff 0%, #f5f7fb 100%);
  box-shadow: 0px -13px 24px 0px rgba(136, 156, 196, 0.08);
  transition: all 0.3s ease-in-out;
  position: relative;
  z-index: 1;
}
.choose-box1 .choose-shape1 a:after {
  content: "";
  height: 110px;
  width: 110px;
  background-color: transparent;
  background-image: linear-gradient(180deg, #009c14, 0%, #39d5b1 100%);
  position: absolute;
  bottom: 0;
  left: 0;
  opacity: 0;
  border: none;
  border-radius: 50%;
  visibility: hidden;
  transition: all 0.3s ease-in-out;
  z-index: -1;
}
.choose-box1 .choose-shape1 a img {
  transition: all 0.3s ease-in-out;
}
.choose-box1 .choose-shape2 a {
  padding-left: 13px;
}
.choose-box1 .item-title {
  font-size: 22px;
  line-height: 36px;
  font-weight: 500;
  margin-bottom: 10px;
}
.choose-box1 .item-title a {
  color: #212121;
  transition: all 0.3s ease-in-out;
}
.choose-box1 .item-title a:hover {
  color: var(--rt-primary-color);
}
.choose-box1 p {
  font-size: 16px;
  margin-bottom: 0;
  color: #70778b;
  line-height: 24px;
  font-weight: 400;
}
.choose-box2 {
  position: relative;
  z-index: 1;
  padding: 60px 40px;
}
.choose-box2:before {
  content: "";
  height: 100%;
  width: 100%;
  position: absolute;
  left: 0;
  bottom: 0;
  border-radius: 30px;
  background-image: -moz-linear-gradient(90deg, #f5f7fb 0%, #ffffff 100%);
  background-image: -webkit-linear-gradient(90deg, #f5f7fb 0%, #ffffff 100%);
  background-image: -ms-linear-gradient(90deg, #f5f7fb 0%, #ffffff 100%);
  box-shadow: 0px -13px 24px 0px rgba(136, 156, 196, 0.08);
  z-index: -1;
  visibility: hidden;
  opacity: 0;
  transition: all 0.3s ease-in-out;
}
.choose-box2:hover:before {
  visibility: visible;
  opacity: 1;
}
.choose-box2:hover .choose-shape1 a:after {
  opacity: 1;
  visibility: visible;
  box-shadow: 0 13px 21px 0 rgba(0, 193, 148, 0.5);
  bottom: 0;
  height: 100%;
  top: inherit;
}
.choose-box2:hover .choose-shape1 a:before {
  visibility: visible;
  opacity: 1;
  animation: rotataing 0.6s 0.3s linear forwards;
  width: 136px;
  height: 136px;
  bottom: -20px;
  left: -20px;
}
.choose-box2:hover .choose-shape1 a img {
  filter: brightness(0) invert(1);
}
.choose-box2:hover .choose-button {
  visibility: visible;
  opacity: 1;
  transition: all 0.3s ease-in-out;
}
.choose-box2 .choose-shape1 {
  margin-bottom: 25px;
}
.choose-box2 .choose-shape1 a {
  display: inline-block;
  text-align: center;
  line-height: 89px;
  background-color: #fff;
  height: 89px;
  width: 89px;
  border: none;
  border-radius: 25px;
  background-color: transparent;
  background-image: linear-gradient(180deg, #ffffff 0%, #f5f7fb 100%);
  transition: 0.4s ease-in-out;
  position: relative;
  z-index: 1;
}
.choose-box2 .choose-shape1 a:after {
  content: "";
  height: 89px;
  width: 89px;
  background-color: transparent;
  background-image: linear-gradient(180deg, #4ceac5 0%, var(--rt-primary-color) 100%);
  position: absolute;
  bottom: 0;
  left: 0;
  opacity: 0;
  border: none;
  border-radius: 25px;
  visibility: hidden;
  transition: 0.4s ease-in-out;
  z-index: -1;
  top: 0;
  height: 0;
}
.choose-box2 .choose-shape1 a:before {
  content: url("{{asset('assets/dashbord/img/figure/shape25.png')}}");
  width: 136px;
  height: 136px;
  background-color: transparent;
  position: absolute;
  bottom: 0px;
  left: 0px;
  z-index: -1;
  visibility: hidden;
  opacity: 0;
  transition: all 0.3s ease-in-out;
}
@keyframes rotataing {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.choose-box2 .choose-shape1 a img {
  transition: 0.4s ease-in-out;
}
.choose-box2 .choose-shape2 a {
  padding-left: 13px;
}
.choose-box2 .item-title {
  font-size: 22px;
  line-height: 36px;
  font-weight: 500;
  margin-bottom: 10px;
}
.choose-box2 .item-title a {
  color: #212121;
  transition: all 0.3s ease-in-out;
}
.choose-box2 .item-title a:hover {
  color: var(--rt-primary-color);
}
.choose-box2 p {
  font-size: 16px;
  margin-bottom: 20px;
  color: #70778b;
  line-height: 24px;
  font-weight: 400;
}
.choose-box2 .choose-button {
  transition: all 0.3s ease-in-out;
  visibility: hidden;
  opacity: 0;
}
.choose-box2 .choose-button .item-btn {
  display: inline-block;
  color: #70778b;
  font-size: 15px;
  padding: 12px 23px;
  border-radius: 26px;
  line-height: 23px;
  background-color: var(--rt-primary-color);
  transition: all 0.3s ease-in-out;
  color: #fff;
  font-weight: 500;
  position: relative;
  z-index: 1;
}
.choose-box2 .choose-button .item-btn:hover:after {
  visibility: visible;
  opacity: 1;
  width: 100%;
  left: 0;
}
.choose-box2 .choose-button .item-btn:hover:after i {
  color: #fff;
}
.choose-box2 .choose-button .item-btn:after {
  content: "";
  height: 100%;
  width: 0;
  background-color: rgba(0, 0, 0, 0.15);
  position: absolute;
  left: 0;
  bottom: 0;
  border: none;
  border-radius: 26px;
  visibility: hidden;
  opacity: 0;
  z-index: -1;
  transition: all 0.3s ease-in-out;
}
.choose-box2 .choose-button .item-btn i {
  color: #fff;
  font-size: 16px;
  margin-left: 7px;
  transition: all 0.3s ease-in-out;
  position: relative;
  top: 3px;
}
/*------------------- 6.26 Compare -------------------*/
.site-main {
  background-color: #eaf7f4;
  padding: 100px 0 70px;
}
@media only screen and (max-width: 991px) {
  .site-main {
    padding: 70px 0px 40px 0;
  }
}
@media only screen and (max-width: 575px) {
  .site-main {
    padding: 50px 0px 20px 0;
  }
}
.page-content-block {
  margin-bottom: 24px;
}
.site-main:not(.homlisti-myaccount) .main-content {
  background-color: #fff;
  padding: 30px;
}
.page-template-default .page-content-block .main-content {
  border-radius: 8px;
  border: 1px solid #dfe4ef;
}
.page-template-default .page-content-block .main-content .page-content-inner {
  margin-bottom: 25px;
}
.page-title-wrap .page-title,
.single-blog .single-blog-content .blog-content .post-title {
  font-size: 28px;
  line-height: 38px;
  margin-bottom: 15px;
  color: #212121;
  font-weight: 600;
}
@media only screen and (max-width: 575px) {
  .page-title-wrap .page-title,
  .single-blog .single-blog-content .blog-content .post-title {
    margin-bottom: 10px;
  }
}
@media only screen and (max-width: 479px) {
  .page-title-wrap .page-title,
  .single-blog .single-blog-content .blog-content .post-title {
    font-size: 26px;
  }
}
.page-content-block .type-page {
  display: inline-block;
  width: 100%;
}
/*------------------- 6.27 My Account -------------------*/
.rtcl-login-form-wrap {
  background-color: #fff;
  padding: 30px;
}
.rtcl-login-form-wrap h2 {
  font-weight: 600;
}
@media only screen and (max-width: 479px) {
  .rtcl-login-form-wrap h2 {
    font-size: 26px;
  }
}
.form-horizontal .form-group {
  margin-bottom: 15px;
}
.form-horizontal .form-group .form-control {
  color: #111;
  background-color: #fff;
  border-radius: 4px;
  height: 40px;
}
.form-horizontal .form-group .form-control:focus {
  outline: 0;
  box-shadow: none;
}
.form-horizontal .form-group .btn-primary {
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
  padding: 15px 20px;
  height: auto;
  line-height: 1;
  font-size: 16px;
  font-weight: 500;
  border-radius: 4px;
  transition: all 0.3s ease-in-out;
}
.form-horizontal .form-group .btn-primary:hover {
  background-color: var(--rt-primary-dark);
}
.form-horizontal .form-group .btn-primary:focus {
  outline: 0;
  box-shadow: none;
}
.form-horizontal .form-group .rtcl-forgot-password a {
  color: #07c196;
}
.form-horizontal .form-group .form-check {
  position: relative;
  padding-left: 30px;
}
.form-horizontal .form-group .advance-search-form .form-check {
  line-height: 2;
}
.form-horizontal .form-group .form-check label {
  display: inline-block;
  position: relative;
  padding-left: 30px;
  font-size: 14px;
  color: #878c9f;
  cursor: pointer;
}
.form-horizontal .form-group .form-check label i {
  color: #ffbc09;
  margin-right: 4px;
}
.form-horizontal .form-group .form-check label:before {
  content: "";
  display: inline-block;
  position: absolute;
  width: 18px;
  height: 18px;
  left: 0;
  top: 5px;
  background-color: transparent;
  border: 2px solid #b1b0b0;
  border-radius: 4px;
  transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
}
.form-horizontal .form-group .form-check label:hover:before {
  border-color: var(--rt-primary-color);
  animation: checkHover 0.3s ease-in-out forwards;
}
@-webkit-keyframes checkHover {
  0%,
  100% {
    transform: scale(1);
  }
  50% {
    transform: scale(0.7);
  }
}
@keyframes checkHover {
  0%,
  100% {
    transform: scale(1);
  }
  50% {
    transform: scale(0.7);
  }
}
.form-horizontal .form-group .form-check label:after {
  content: "";
  display: inline-block;
  position: absolute;
  left: 4px;
  top: 3px;
  font-size: 10px;
  line-height: 22px;
}
.form-horizontal .form-group .form-check input[type="checkbox"] {
  cursor: pointer;
  position: absolute;
  width: 20px;
  height: 20px;
  top: 4px;
  left: 20px;
  z-index: 1;
  opacity: 0;
  margin-top: 0;
}
.form-horizontal .form-group .form-check input[type="checkbox"]:checked + label {
  color: #000000;
}
.form-horizontal .form-group .form-check input[type="checkbox"]:checked + label:after {
  font-family: "Font Awesome 5 Free";
  content: "\f00c";
  font-weight: 600;
}
.form-horizontal .form-group .form-check input[type="checkbox"]:disabled + label {
  opacity: 0.65;
}
.form-horizontal .form-group .form-check input[type="checkbox"]:disabled + label:before {
  background-color: #eeeeee;
  cursor: not-allowed;
}
.form-horizontal .form-group .form-check label::before {
  border-radius: 4px;
}
.form-horizontal .form-group .form-check input[type="checkbox"]:checked + label:before {
  background-color: var(--rt-primary-color);
  border-color: var(--rt-primary-color);
}
.form-horizontal .form-group .form-check input[type="checkbox"]:checked + label:after {
  color: #ffffff;
}
.form-horizontal .form-group .form-check input[type="radio"] {
  height: auto;
}
.form-horizontal .form-group .form-check input[type="radio"] + label {
  padding-left: 10px;
  position: relative;
  top: -1px;
}
.form-horizontal .form-group .form-check input[type="radio"] + label:before {
  display: none;
}











/* :root{
  --mainblue: #097DBF;
  --textgray: #666666;
  --darkblue: #38628D;
  --primary: #fff;
  --second: #000000;
  --yellow: #FFD639;
  --cyanbg: #39ACFF;
} */
#mainLogo{
  width: 220px;
  height: 43px;

}
#carrousel{

}
.nav-link{
  font-weight: bold;
  text-transform: uppercase;
  color: var(--mainblue) !important;
}
.nav-link:hover {
  color: var(--yellow) !important
}
.MyButton{
  text-align: center;
  display: block;
  text-transform: initial;
  margin-top: 10px;
  padding: 0 30px !important;
  height: 50px;
  line-height: 50px;
  
}
.buttonYellow{
  color: var(--yellow) !important;
  border: 1px solid var(--yellow);
  background-color: rgba(0,0,0,0.3);
}
.buttonWhite{
  color: var(--primary) !important;
  border: 1px solid var(--primary);
}
.MyButton:hover {
  color: #FFF !important;
  border: 1px solid #FFF;
}


.show {
  padding: 50px;
  text-align: center;
  background-color: rgba(0,0,0,0.3);
}
.show ul li:hover {

  background-color: rgba(0,0,0,0.3);
}
.carousel-item{
transform: scale(1);
max-height: 100vh;
min-height: calc(100vh-180px);
overflow: hidden;

}
.sliderTitle{
font-family: Roboto;
font-size: 50px;
display: none;
top: calc(50vh - height);
left: -10vw;
color:white;
position: absolute;
transition: all 0.5s;
background-color: rgba(0,0,0,0.3);
padding: 5px 15px;
}
.active .sliderTitle{
display: block;
top: 50vh;
left: 10vw;
}
.sliderSubtitle{
display: none;
top: 50vh;
left: -10vw;
color:white;
position: absolute;
transition: all 0.5s;
background-color: rgba(0,0,0,0.3);
padding: 5px 15px;
}
.active .sliderSubtitle{
display: block;
top: 50vh;
margin-top: 100px;
left: 10vw;
}
#carouselExampleIndicators{
position: relative;
min-height: 32vh;

}
.containerVideobg {
background-color: var(--second);
position: absolute;
top: 0px;
left: 0px;
z-index: -2;
padding: 0 !important;
max-height: 100vh;
overflow: hidden;
}
.videoSliderBackground{
margin: 0px;
padding: 0px;
width: 100%;
height: 100%;
min-width: 100vh;
min-height: 100vh;
}
.videoSlider{
margin-left: auto;
margin-right: auto;
margin-top: 180px;
width: 40%;
transition: all 0.5s;
border: 10px solid var(--primary);
background-color: var(--primary);
box-shadow: 0px 3px 6px rgba(0,0,0,0.3);
}
.elVideo{
width: 100%;
height: 100%;
}
.active {

}
.active .videoSlider{
margin-top: 0;
width: 100%;
border: none;
box-shadow: none;
}
</style>
<body class="sticky-header">
  <div id="preloader"></div>
  <div class="wrapper" id="wrapper">
    <!--=====================================-->
 
    <div class="rt-header-menu mean-container position-relative" id="meanmenu">
      <div class="mean-bar">
        <a href="index.html">
          <img src='{{asset('assets/dashbord/img/logo-2.png')}}' alt='logo' width="50%" class='img-fluid' />
        </a>
        <div class="mean-bar--right">
          <div class="actions search">
            <a href="#template-search" class="item-icon" title="Search">
              <i class="fas fa-search"></i>
            </a>
          </div>
          <div class="actions user">
            <a href="account.html"><i class="flaticon-user"></i></a>
          </div>
          <span class="sidebarBtn">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </span>
        </div>
      </div>
      <div class="rt-slide-nav">
        <div class="offscreen-navigation">
          <nav class="menu-main-primary-container">
            <ul class="menu">
              <li class="list menu-item-parent">
                <a class="animation" href="index.html">Apple TV+</a>
              </li>
              <li class="list menu-item-parent">
                <a class="animation" href="index.html">MLS Season Pass</a>
              </li>

            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!--=====================================-->

    <div id="carouselExampleIndicators" class="slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3" class="active"></li>
      </ol>
      <div id="carrousel" class="carousel-inner">
        <div data-pause="true" data-interval="10000" class="carousel-item active">
          <div class="videoSlider">
            <video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted src="{{asset('assets/dashbord/video/Video-2.mp4')}}"
              id='video-slider-1'></video>
          </div>
        </div>

        <div data-pause="true" data-interval="10000" class="carousel-item active">
          <div class="videoSlider">
            <video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted src="Video-2.mp4"
              id='video-slider-1'></video>
          </div>
        </div>
        <div data-pause="true" data-interval="10000" class="carousel-item active">
          <div class="videoSlider">
            <video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted src="Video-2.mp4"
              id='video-slider-1'></video>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
      <div class="container-fluid containerVideobg">
        <video width="100%" class="videoSliderBackground" loop="loop" autoPlay playsInline muted src="Video-2.mp4"
          id="video-slider-background"></video>
      </div>
    </div>

    <!--=====================================-->
    <!--=====================================-->
    <section class="property-wrap-8" style="background-color: #eaf7f4;">
      <div class="container-fluid px-0">
        <div class="product-slider-style-4 owl-carousel owl-theme">
          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>


          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=====================================-->
    <section class="property-wrap-8" style="background-color: #ffffff;">
      <div class="container-fluid px-0">
        <div class="product-slider-style-4 owl-carousel owl-theme">
          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>


          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=====================================-->
    <section class="property-wrap-7">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-sm-7">
            <div class="item-heading-left">
              <h2 class="section-title">Lorem ipsum dolor sit.</h2>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-5">
            <div class="heading-button">
              <a href="#" class="heading-btn">See All</a>
            </div>
          </div>
        </div>
        <div class="slider-wrapper">
          <div class="swiper-container property-layout1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="property-box6 wow animated fadeInUp" data-wow-delay=".6s">
                  <div class="item-img">
                    <a href="#"><img src="{{asset('assets/dashbord/img/img-2.jpg')}}" alt="blog" width="385" height="259"></a>
                    <ul class="item-rating">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="item-content">
                    <div class="verified-area">
                      <h3 class="item-title"><a href="#">Brand New Shopping Mall for Sale</a></h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="property-box6 wow animated fadeInUp" data-wow-delay=".6s">
                  <div class="item-img">
                    <a href="#"><img src="{{asset('assets/dashbord/img/img-2.jpg')}}" alt="blog" width="385" height="259"></a>
                    <ul class="item-rating">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="item-content">
                    <div class="verified-area">
                      <h3 class="item-title"><a href="#">Lorem ipsum dolor sit.</a></h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="property-box6 wow animated fadeInUp" data-wow-delay=".6s">
                  <div class="item-img">
                    <a href="#"><img src="{{asset('assets/dashbord/img/img-2.jpg')}}" alt="blog" width="385" height="259"></a>
                    <ul class="item-rating">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="item-content">
                    <div class="verified-area">
                      <h3 class="item-title"><a href="#">Lorem ipsum dolor sit.</a></h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="property-box6 wow animated fadeInUp" data-wow-delay=".6s">
                  <div class="item-img">
                    <a href="#"><img src="{{asset('assets/dashbord/img/img-2.jpg')}}" alt="blog" width="385" height="259"></a>
                    <ul class="item-rating">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="item-content">
                    <div class="verified-area">
                      <h3 class="item-title"><a href="#">Lorem ipsum dolor sit.</a></h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="property-box6 wow animated fadeInUp" data-wow-delay=".6s">
                  <div class="item-img">
                    <a href="#"><img src="{{asset('assets/dashbord/img/img-2.jpg')}}" alt="blog" width="385" height="259"></a>
                    <ul class="item-rating">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="item-content">
                    <div class="verified-area">
                      <h3 class="item-title"><a href="#">Lorem ipsum dolor sit.</a></h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="property-box6 wow animated fadeInUp" data-wow-delay=".6s">
                  <div class="item-img">
                    <a href="#"><img src="{{asset('assets/dashbord/img/img-2.jpg')}}" alt="blog" width="385" height="259"></a>
                    <ul class="item-rating">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="item-content">
                    <div class="verified-area">
                      <h3 class="item-title"><a href="#">Lorem ipsum dolor sit.</a></h3>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=====================================-->
    <section class="property-wrap-8" style="background-color: #eaf7f4;">
      <div class="container-fluid px-0">
        <div class="product-slider-style-4 owl-carousel owl-theme">
          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>


          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=====================================-->
    <section class="property-wrap-8" style="background-color: #ffffff;">
      <div class="container-fluid px-0">
        <div class="product-slider-style-4 owl-carousel owl-theme">
          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="favourite.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>


          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
            <div class="item-img">
              <a href="#"><img src="{{asset('assets/dashbord/img/img-1.jpg')}}" alt="blog" width="510" height="340"></a>
              <div class="item-category-box1">
                <div class="item-category">1</div>
              </div>
              <div class="react-icon">
                <ul>
                  <li>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Favourites">
                      <i class="flaticon-heart"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!--=====================================-->
    <section class="banner-collection3">
      <div class="container">
        <div class="item-heading-center">
          <h2 class="section-title">Watch Here And On The Big Screen</h2><br>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, magni? Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Quas ipsum possimus, reprehenderit, necessitatibus quasi deserunt reiciendis
            omnis blanditiis accusantium atque est excepturi velit!</p>
          <div class="banner-button">
            <a href="#" class="banner-btn">See All</a>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================-->
    <!--=====================================-->
    <div class="brand-wrap1 brand-wrap2">
      <div class="container">
        <div class="brand-layout swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                <div class="item-img">
                  <a href="#"><img src="{{asset('assets/dashbord/img/icon-1.png')}}" alt="brand"></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                <div class="item-img">
                  <a href="#"><img src="{{asset('assets/dashbord/img/icon-2.png')}}" alt="brand"></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                <div class="item-img">
                  <a href="#"><img src="{{asset('assets/dashbord/img/icon-3.png')}}" alt="brand"></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                <div class="item-img">
                  <a href="#"><img src="{{asset('assets/dashbord/img/icon-4.png')}}" alt="brand"></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                <div class="item-img">
                  <a href="#"><img src="{{asset('assets/dashbord/img/icon-6.png')}}" alt="brand"></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                <div class="item-img">
                  <a href="#"><img src="{{asset('assets/dashbord/img/icon-5.png')}}" alt="brand"></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!--=====================================-->
    <!--=====================================-->
    <div class="footer-bottom footer-bottom-style-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6">
            <div class="copyright-area1">
              <ul>
                <li><a href="about-1.html">Terms of Use</a></li>
                <li><a href="about-1.html">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="copyright-area2">
              <p>2023© All rightre </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </footer>
    <a href="javascript:void(0)" id="back-to-top">
      <i class="fas fa-angle-double-up"></i>
    </a>
  </div>
  <div id="template-search" class="template-search">
    <button type="button" class="close">×</button>
    <form class="search-form">
      <input type="search" value="" placeholder="Search" />
      <button type="submit" class="search-btn btn-ghost style-1">
        <i class="flaticon-search"></i>
      </button>
    </form>
  </div>

</body>

<script src="{{asset('assets/dashbord/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/popper.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/wow.min.js')}}"></script>
<script src="{{asset('assets/dashbord/vendor/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/jquery.appear.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/parallaxie.js')}}"></script>
<script src="{{asset('assets/dashbord/js/tween-max.js')}}"></script>
<script src="{{asset('assets/dashbord/js/appear.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/dashbord/vendor/noUiSlider/nouislider.min.js')}}"></script>
<script src="{{asset('assets/dashbord/vendor/noUiSlider/wNumb.js')}}"></script>
<script src="{{asset('assets/dashbord/js/validator.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/pannellum.js')}}"></script>
<script src="{{asset('assets/dashbord/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('assets/dashbord/js/main.js')}}"></script>
@endsection