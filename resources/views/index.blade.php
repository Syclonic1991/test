<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
    <!--Critical-->
    <style>
    .col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-10,
.col-11,
.col-12,
.col,
.col-auto,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm,
.col-sm-auto,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md,
.col-md-auto,
.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg,
.col-lg-auto,
.col-xl-1,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  -ms-flex-preferred-size: 0;
      flex-basis: 0;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  max-width: 100%;
}

.col-auto {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: auto;
  max-width: none;
}

.col-1 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 8.33333333%;
          flex: 0 0 8.33333333%;
  max-width: 8.33333333%;
}

.col-2 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 16.66666667%;
          flex: 0 0 16.66666667%;
  max-width: 16.66666667%;
}

.col-3 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 25%;
          flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 33.33333333%;
          flex: 0 0 33.33333333%;
  max-width: 33.33333333%;
}

.col-5 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 41.66666667%;
          flex: 0 0 41.66666667%;
  max-width: 41.66666667%;
}

.col-6 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 58.33333333%;
          flex: 0 0 58.33333333%;
  max-width: 58.33333333%;
}

.col-8 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 66.66666667%;
          flex: 0 0 66.66666667%;
  max-width: 66.66666667%;
}

.col-9 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 75%;
          flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 83.33333333%;
          flex: 0 0 83.33333333%;
  max-width: 83.33333333%;
}

.col-11 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 91.66666667%;
          flex: 0 0 91.66666667%;
  max-width: 91.66666667%;
}

.col-12 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  max-width: 100%;
}

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }

  .col-sm-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }

  .col-sm-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.33333333%;
            flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }

  .col-sm-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16.66666667%;
            flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }

  .col-sm-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }

  .col-sm-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33333333%;
            flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }

  .col-sm-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.66666667%;
            flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }

  .col-sm-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }

  .col-sm-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.33333333%;
            flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }

  .col-sm-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.66666667%;
            flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }

  .col-sm-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }

  .col-sm-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.33333333%;
            flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }

  .col-sm-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.66666667%;
            flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }

  .col-sm-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
}

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }

  .col-md-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }

  .col-md-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.33333333%;
            flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }

  .col-md-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16.66666667%;
            flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }

  .col-md-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }

  .col-md-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33333333%;
            flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }

  .col-md-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.66666667%;
            flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }

  .col-md-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }

  .col-md-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.33333333%;
            flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }

  .col-md-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.66666667%;
            flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }

  .col-md-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }

  .col-md-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.33333333%;
            flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }

  .col-md-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.66666667%;
            flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }

  .col-md-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
}
@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }

  .col-lg-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }

  .col-lg-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.33333333%;
            flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }

  .col-lg-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16.66666667%;
            flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }

  .col-lg-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }

  .col-lg-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33333333%;
            flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }

  .col-lg-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.66666667%;
            flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }

  .col-lg-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }

  .col-lg-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.33333333%;
            flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }

  .col-lg-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.66666667%;
            flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }

  .col-lg-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }

  .col-lg-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.33333333%;
            flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }

  .col-lg-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.66666667%;
            flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }

  .col-lg-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }

  .col-xl-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }

  .col-xl-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.33333333%;
            flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }

  .col-xl-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16.66666667%;
            flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }

  .col-xl-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }

  .col-xl-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33333333%;
            flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }

  .col-xl-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.66666667%;
            flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }

  .col-xl-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }

  .col-xl-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.33333333%;
            flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }

  .col-xl-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.66666667%;
            flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }

  .col-xl-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }

  .col-xl-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.33333333%;
            flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }

  .col-xl-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.66666667%;
            flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }

  .col-xl-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
}
    .container-fluid {
  max-width: 1170px;
}
.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
        .header {
            position: fixed;
            width: 100%;
            top: -10px;
            z-index: 100;
        }

        .header__blur-wrap {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            -webkit-transition: opacity 400ms linear;
            transition: opacity 400ms linear;
        }

            .header__blur {
            position: absolute;
            top: -10px;
            bottom: -10px;
            width: 100%;
            -webkit-filter: blur(5px);
                    filter: blur(5px);
            overflow: hidden;
            }

            .header__blur iframe {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            }

            .header__content {
            position: relative;
            height: 100%;
            padding-top: 10px;
            background: rgba(184, 184, 184, 0.5);
            }

            .header__content::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 3px;
            bottom: -3px;
            background-color: rgba(99, 99, 99, 0.4);
            -webkit-box-shadow: 0 11px 16px 2px rgba(0, 0, 0, 0.16);
                    box-shadow: 0 11px 16px 2px rgba(0, 0, 0, 0.16);
            }

            .header__logo {
            display: block;
            width: 100%;
            max-width: 220px;
            height: 87px;
            background: url("/assets/images/logo.svg") no-repeat 15px 13px;
            }

            @media (max-width: 767.98px) {
            .header__logo {
                max-width: 140px;
                height: 49px;
                background: url("/assets/images/logo-mobile.svg") no-repeat 5px 10px;
            }
            }

            .header__contact {
            margin-top: 3px;
            color: #fff;
            font-family: "Open Sans", sans-serif;
            text-shadow: 0 3px 2px rgba(241, 241, 241, 0.43);
            }

            .header__contact-address {
            padding-left: 70px;
            padding-right: 10px;
            margin-top: -3px;
            font-size: 13px;
            font-weight: 300;
            line-height: 15px;
            letter-spacing: 0.1px;
            }

            .header__contact-phone {
            font-size: 30px;
            font-weight: 300;
            line-height: 24px;
            letter-spacing: -1.05px;
            }

            .header__menu-button {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
                -ms-flex-flow: column nowrap;
                    flex-flow: column nowrap;
            -webkit-box-pack: center;
                -ms-flex-pack: center;
                    justify-content: center;
            width: 48px;
            height: 48px;
            margin-top: -10px;
            margin-right: 23px;
            cursor: pointer;
            }

            @media (max-width: 767.98px) {
            .header__menu-button {
                margin-top: -5px;
                margin-right: -5px;
            }
            }

            .header__menu-button > div {
            width: 28px;
            height: 4px;
            margin: 2px auto;
            left: 0;
            right: 0;
            background-color: #fff;
            -webkit-box-shadow: 0 3px 2px rgba(210, 210, 210, 0.53);
                    box-shadow: 0 3px 2px rgba(210, 210, 210, 0.53);
            }

            .header__menu-button:hover > div {
            background-color: #05a5f8;
            }
            .bannerContainer {
  position: relative;
  background-color: #0494df;
  overflow: hidden;
}

.bannerBlockLine {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  overflow: hidden;
}

.bannerBlockLine-1 {
  margin-top: -100px;
}

@media (max-width: 768px) {
  .bannerBlockLine-1 {
    margin-top: -27px;
  }
}

.bannerImage {
  width: 256px;
  height: 190px;
  min-width: 256px;
  background-color: #0494df;
}

.bannerImage img {
  display: block;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  opacity: 0;
  -webkit-transition: all 900ms ease;
  transition: all 900ms ease;
}

.bannerImage.ready img {
  opacity: 1;
}

@media (max-width: 768px) {
  .bannerImage {
    width: 106px;
    height: 79px;
    min-width: 106px;
  }
}

.bannerText {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  top: 87px;
}

@media (max-width: 768px) {
  .bannerText {
    top: 49px;
  }

  .bannerText svg {
    max-width: 237px;
  }
}


    </style>
</head>
<body>
<header class="header">
    <div class="header__blur-wrap" id="blurWrap" style="opacity: 0">
        <div class="header__blur">
            <iframe id="blurClone" frameborder="0"></iframe>
        </div>
    </div>
    <div class="header__content">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="header__logo-container col-8 col-lg-3">
                    <a href="/" class="header__logo"></a>
                </div>
                <div class="header__contact d-none d-lg-flex col-lg-7 justify-content-center">
                    <div class="header__contact-address text-right">г. Москва м. Китай-город<br>Славянская пл., д. 2/5/4 c3</div>
                    <div class="header__contact-phone">+7 (495) 419-09-20</div>
                </div>
                <div class="header__menu col-4 col-lg-2">
                    <div class="header__menu-button ml-auto">
                        <div class="top"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="pageWrap" id="pageWrap">
    <section>
        <div>
            <div class="bannerContainer">
                <div class="bannerBlockLine bannerBlockLine-1">
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-21.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-22.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-23.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-24.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-25.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-21.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-22.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-23.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-24.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-25.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-26.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-27.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-28.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-29.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-30.jpg" class="image"></div>
                </div>
                <div class="bannerBlockLine bannerBlockLine-2">
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-1.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-2.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-3.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-4.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-5.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-1.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-2.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-3.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-4.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-5.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-6.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-7.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-8.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-9.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-10.jpg" class="image"></div>
                </div>
                <div class="bannerBlockLine bannerBlockLine-3">
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-11.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-12.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-13.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-14.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-15.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-11.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-12.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-13.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-14.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-15.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-16.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-17.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-18.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-19.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-20.jpg" class="image"></div>
                </div>
                <div class="bannerBlockLine bannerBlockLine-4">
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-1.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-21.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-22.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-23.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-24.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-25.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-26.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-28.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-29.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-30.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-1.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-21.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-22.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-23.jpg" class="image"></div>
                    <div class="bannerImage"><img data-src="/assets/images/banner/img-23.jpg" class="image"></div>
                </div>
                <div class="bannerText">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="578" height="152" viewBox="0 0 578 152"><defs><path id="wr7aa" d="M373.38 374.94v13.12h18.83c4.14 0 6.4-2.19 6.4-6.56 0-4.38-2.26-6.56-6.4-6.56zm18.83-10.78c11.71 0 20.77 5.3 20.77 17.34 0 12.03-9.06 17.34-20.77 17.34h-29.76a3.44 3.44 0 0 1-3.44-3.51v-47.58c0-2.03 1.56-3.6 3.6-3.6h42.95c1.96 0 3.6 1.57 3.6 3.6v3.6c0 1.95-1.57 3.59-3.52 3.59h-32.26v9.22zm71.6 34.68a3.64 3.64 0 0 1-3.59-3.6v-35.38l-19.91 35.39c-1.1 1.95-3.52 3.6-5.55 3.6H422.1a3.58 3.58 0 0 1-3.6-3.6v-47.5c0-2.03 1.56-3.6 3.6-3.6h6.71c1.96 0 3.6 1.57 3.6 3.52v38.2l21.71-38.12c1.1-1.87 3.36-3.6 5.23-3.6h11.25a3.57 3.57 0 0 1 3.52 3.6v47.5c0 1.95-1.64 3.6-3.6 3.6zm30.54-27.34c0 11.72 4.6 18.2 16.32 18.2S527 383.22 527 371.5c0-11.72-4.6-18.2-16.33-18.2-11.71 0-16.32 6.48-16.32 18.2zm16.32-28.51c19.53 0 30.7 8.2 30.7 28.51 0 20.31-11.17 28.51-30.7 28.51-19.52 0-30.7-8.2-30.7-28.51 0-20.31 11.18-28.51 30.7-28.51zm62.54.86h8.51c10.63 0 21.95 5.7 21.95 16.8a3.95 3.95 0 0 1-3.9 4.2h-4.53c-2.19 0-3.99-1-5.47-4.2-1.72-3.68-4.69-6.02-9.37-6.02h-6.8c-11.25 0-14.3 4.14-14.3 16.87s3.05 16.87 14.3 16.87h7.58c4.68 0 7.65-2.34 9.37-6.01 1.48-3.2 3.28-4.22 5.47-4.22h4.53c1.01 0 3.9.7 3.9 4.22 0 11.1-11.32 16.8-21.94 16.8h-9.3c-18.67 0-28.28-8.68-28.28-27.66s9.61-27.66 28.28-27.66zm82.6 55a3.64 3.64 0 0 1-3.58-3.6v-40.31h-27.89v40.3c0 1.96-1.64 3.6-3.6 3.6h-7.18a3.58 3.58 0 0 1-3.6-3.6v-47.49c0-2.03 1.57-3.6 3.52-3.6h49.53c1.95 0 3.59 1.57 3.59 3.6v47.5c0 1.95-1.64 3.6-3.67 3.6zm70.6-51.1v3.6c0 2.03-1.64 3.59-3.6 3.59h-33.2v11.1h28.6c1.95 0 3.59 1.63 3.59 3.59v3.59c0 1.95-1.64 3.6-3.6 3.6h-28.58v11.24h33.12a3.5 3.5 0 0 1 3.51 3.52v3.67c0 1.95-1.56 3.6-3.6 3.6h-43.81a3.6 3.6 0 0 1-3.6-3.68v-47.5a3.57 3.57 0 0 1 3.6-3.51h43.97c1.96 0 3.6 1.56 3.6 3.6zm9.09 51.1a3.64 3.64 0 0 1-3.6-3.6v-47.58a3.57 3.57 0 0 1 3.6-3.51h7.18c1.96 0 3.6 1.56 3.6 3.6v40.3h25.62v-40.39a3.57 3.57 0 0 1 3.6-3.51h7.18c1.95 0 3.59 1.56 3.59 3.6v40.3h4.14c1.95 0 3.6 1.56 3.6 3.6v3.59c0 1.95-1.65 3.6-3.6 3.6z"/><path id="wr7ab" d="M262.67 422.5a45.18 45.18 0 0 0 58.23-18.67 46.02 46.02 0 0 0-4.8-52.57l3.6-6.3 1.25-2.18 10.93-19.08 1.26-2.2a3.35 3.35 0 0 1 4.59-1.24l2.18 1.27 3.64 2.12c1.6.93 2.16 3 1.23 4.62l-1.26 2.2a3.35 3.35 0 0 1-4.6 1.24l-.72-.42-10.5 18.33c-.18.32-.4.59-.66.82a55.4 55.4 0 0 1 1.86 58.05c-15.08 26.32-48.47 35.34-74.59 20.14-26.11-15.2-35.06-48.85-19.98-75.18a54.48 54.48 0 0 1 51.21-27.37c.08-.27.18-.54.33-.8l10.5-18.33-.73-.43a3.4 3.4 0 0 1-1.23-4.62l1.26-2.2a3.35 3.35 0 0 1 4.6-1.24l3.63 2.11 2.18 1.27c1.61.94 2.16 3.01 1.23 4.63l-1.26 2.2-10.87 18.98-1.3 2.28-3.54 6.18a45.24 45.24 0 0 0-48 22 45.95 45.95 0 0 0 13.06 60.17s6.3 3.92 7.27 4.23z"/><path id="wr7ac" d="M307.78 351.72a38.39 38.39 0 0 1 7 47.48c-8.09 13.82-23.5 20.83-38.59 19.07a40.77 40.77 0 0 1-18.57-7.53 40.56 40.56 0 0 1-12.5-14.94 32.55 32.55 0 0 1-2.61-9.16h.05c-.03-.23-.07-.46-.07-.7a4.9 4.9 0 0 1 4.92-4.87h42.18a4.9 4.9 0 0 1 4.92 4.87 4.9 4.9 0 0 1-4.92 4.88H253.2A29.42 29.42 0 0 0 265.76 405l-.17.24c.1.06.19.08.3.14 14.28 8.15 32.56 3.32 40.8-10.8a29.23 29.23 0 0 0-3.75-34.6l-4.37 7.49a3.41 3.41 0 0 1-4.63 1.22l-9.91-5.65a3.33 3.33 0 0 1-1.24-4.57l17.37-29.73a3.41 3.41 0 0 1 4.63-1.23l9.91 5.66a3.33 3.33 0 0 1 1.24 4.57zm9.33-44.66a4.6 4.6 0 0 1 4.58 4.63 4.6 4.6 0 0 1-4.58 4.62 4.6 4.6 0 0 1-4.58-4.62 4.6 4.6 0 0 1 4.58-4.63zM337.19 294c5.09 0 9.22 4.15 9.22 9.27a9.24 9.24 0 0 1-9.22 9.26 9.24 9.24 0 0 1-9.22-9.26 9.24 9.24 0 0 1 9.22-9.27z"/><path id="wr7ad" d="M359 416.15h6.12c1.59.03 2.76.43 3.51 1.2.79.8 1.18 1.85 1.18 3.14.02.67-.14 1.3-.46 1.91-.16.3-.4.57-.72.83-.33.29-.7.53-1.15.74v.05c.86.23 1.51.69 1.95 1.39.42.7.63 1.48.63 2.34a4.64 4.64 0 0 1-1.29 3.33 4.18 4.18 0 0 1-3.11 1.27h-6.67zm6.08 13.88c.88-.01 1.53-.26 1.95-.74.42-.48.62-1.04.62-1.7 0-.66-.2-1.23-.62-1.7-.4-.46-1.06-.7-1.95-.73h-3.69v4.87zm-.23-7.06c.88 0 1.52-.23 1.94-.7.41-.43.62-.97.62-1.62a2.3 2.3 0 0 0-.62-1.66c-.4-.4-1.05-.63-1.94-.66h-3.46v4.64zm18.43 8.32c-1 .8-2.2 1.2-3.57 1.2-.62 0-1.19-.08-1.71-.24-.52-.16-.99-.4-1.4-.7a5.24 5.24 0 0 1-1.85-1.98l-.31-.7a4.93 4.93 0 0 1-.22-.86c-.1-.62-.16-1.88-.16-3.76 0-.96.01-1.75.04-2.37.02-.62.06-1.1.12-1.41.12-.65.3-1.17.53-1.54a5.6 5.6 0 0 1 1.85-2.02c.85-.6 1.88-.9 3.11-.9 1.52 0 2.76.46 3.74 1.38.97.96 1.58 2.1 1.82 3.43h-2.54a3.47 3.47 0 0 0-1.06-1.67 3.1 3.1 0 0 0-1.96-.68c-.56.03-1.04.14-1.44.33-.43.23-.77.51-1 .85-.3.33-.51.78-.63 1.34a38.01 38.01 0 0 0-.13 5.26c.03.53.07.95.13 1.23.12.58.32 1.04.62 1.37.24.35.58.62 1.01.81.38.25.86.37 1.44.37 1.35 0 2.35-.74 3.02-2.21h2.54c-.34 1.5-1 2.66-1.99 3.47zm5.89-15.14h10.1v2.32h-7.7v4.61h6.58v2.2h-6.58v4.75h7.7v2.32h-10.1zm21.25 0h6.13c1.58.03 2.75.43 3.5 1.2.8.8 1.19 1.85 1.19 3.14.01.67-.14 1.3-.47 1.91-.15.3-.39.57-.72.83-.32.29-.7.53-1.15.74v.05c.86.23 1.52.69 1.96 1.39.42.7.63 1.48.63 2.34a4.64 4.64 0 0 1-1.3 3.33 4.17 4.17 0 0 1-3.1 1.27h-6.67zm6.09 13.88c.87-.01 1.52-.26 1.95-.74.41-.48.62-1.04.62-1.7 0-.66-.2-1.23-.62-1.7-.41-.46-1.06-.7-1.95-.73h-3.7v4.87zm-.23-7.06c.87 0 1.52-.23 1.93-.7.42-.43.63-.97.63-1.62a2.3 2.3 0 0 0-.63-1.66c-.4-.4-1.04-.63-1.93-.66h-3.46v4.64zm9.62-6.82h2.4v11.75l6.84-11.75h2.2v16.2h-2.4v-11.77l-6.87 11.77h-2.17zm15.4 13.88h1.44a15.43 15.43 0 0 0 1.47-4.8c.17-1.05.29-2.3.36-3.76.08-1.46.12-3.23.12-5.32h9.04v13.88h1.86V436h-2.27v-3.65h-9.75V436h-2.27zm10.03 0v-11.56h-4.35c0 1.65-.04 3.07-.12 4.26a34.05 34.05 0 0 1-.32 3.12 15.22 15.22 0 0 1-1.23 4.18zm8.22-13.88h2.4v6.37h3.67c.75 0 1.44.12 2.05.36a4.43 4.43 0 0 1 2.62 2.56c.24.6.36 1.27.36 2s-.13 1.4-.37 2a4.46 4.46 0 0 1-2.6 2.56c-.62.24-1.3.35-2.06.35h-6.07zm5.93 13.88c.86 0 1.53-.23 2.01-.7.48-.48.72-1.12.72-1.93 0-.83-.24-1.48-.72-1.96a2.73 2.73 0 0 0-2.01-.71h-3.53v5.3zm7.08-13.88h2.4v16.2h-2.4zm14.62 0h2.26l4.54 10.56 4.45-10.56h2.26v16.2h-2.4v-10.1h-.04l-3.32 7.78h-2l-3.3-7.78h-.05v10.1h-2.4zm18.63 0h10.1v2.32h-7.7v4.61h6.58v2.2h-6.58v4.75h7.7v2.32h-10.1zm13.53 13.88h1.45a15.44 15.44 0 0 0 1.47-4.8c.16-1.05.28-2.3.36-3.76.07-1.46.11-3.23.11-5.32h9.04v13.88h1.87V436h-2.27v-3.65h-9.76V436h-2.27zm10.03 0v-11.56h-4.35c0 1.65-.04 3.07-.11 4.26a34 34 0 0 1-.33 3.12 15.2 15.2 0 0 1-1.23 4.18zm8.23-13.88h2.4v11.75l6.84-11.75h2.2v16.2h-2.4v-11.77l-6.87 11.77h-2.17zm27.13 16.2h-10.57v-16.2h2.4v13.88h6.17v-13.88h2.4v13.88H567V436h-2.27zm6.23-16.2h2.4v11.75l6.85-11.75h2.19v16.2H580v-11.77l-6.87 11.77h-2.17zm16.56 0h2.4v6.93h6.26v-6.93h2.41v16.2h-2.4v-7.08h-6.27v7.08h-2.4zm24.97 15.14c-1 .8-2.2 1.2-3.57 1.2-.63 0-1.2-.08-1.72-.24-.52-.16-.99-.4-1.4-.7a5.24 5.24 0 0 1-1.84-1.98l-.32-.7a4.86 4.86 0 0 1-.22-.86c-.1-.62-.16-1.88-.16-3.76 0-.96.01-1.75.04-2.37a11 11 0 0 1 .12-1.41 5.6 5.6 0 0 1 5.5-4.46c1.5 0 2.75.46 3.73 1.38.98.96 1.58 2.1 1.82 3.43h-2.54a3.47 3.47 0 0 0-1.06-1.67 3.1 3.1 0 0 0-1.95-.68c-.57.03-1.05.14-1.45.33-.43.23-.77.51-1 .85-.3.33-.51.78-.63 1.34a38 38 0 0 0-.13 5.26c.03.53.08.95.13 1.23.12.58.33 1.04.62 1.37.24.35.58.62 1.01.81.39.25.87.37 1.45.37 1.34 0 2.35-.74 3.01-2.21h2.54c-.34 1.5-1 2.66-1.98 3.47zm5.88-15.14h2.4v6.93h1.62a1.83 1.83 0 0 0 1.45-.65 6.5 6.5 0 0 0 .84-1.46l.74-1.82c.17-.45.35-.87.53-1.24.18-.38.4-.7.63-.96.25-.26.54-.46.89-.6.34-.14.79-.2 1.32-.2h.93v2.32h-.5c-.26 0-.46.01-.62.03a.9.9 0 0 0-.4.16c-.11.08-.2.2-.28.34a9.2 9.2 0 0 0-.26.58l-1 2.52a3.65 3.65 0 0 1-1.6 1.85c.52.13.93.38 1.22.76.3.37.55.8.75 1.3l1.16 2.82.25.54c.07.15.17.28.28.38.1.1.24.17.4.21.15.05.36.07.63.07h.65v2.32h-1.2c-.61 0-1.12-.09-1.53-.27-.41-.18-.76-.47-1.06-.88a6.14 6.14 0 0 1-.48-.88c-.15-.33-.29-.64-.41-.95l-1.04-2.6a2.2 2.2 0 0 0-1.64-1.42c-.21-.04-.41-.06-.6-.06h-1.67v7.06h-2.4zm16.07 0h2.4v11.75l6.84-11.75h2.2v16.2h-2.4v-11.77l-6.87 11.77h-2.17zm20.05 7.89l-4.53-7.9h2.7l3.17 5.63 3.16-5.62h2.7l-4.53 7.89 4.84 8.31h-2.71l-3.46-6.03-3.48 6.03h-2.7zm22.96 8.45c-.62 0-1.2-.08-1.71-.24-.52-.16-.99-.4-1.4-.7a5.24 5.24 0 0 1-1.85-1.98l-.31-.7a4.86 4.86 0 0 1-.22-.86c-.1-.62-.16-1.88-.16-3.76 0-.96.01-1.75.04-2.37.02-.62.06-1.1.12-1.41.12-.65.3-1.17.53-1.54a5.6 5.6 0 0 1 4.96-2.92 5.33 5.33 0 0 1 4.95 2.92c.26.36.44.87.57 1.54.08.64.13 1.9.13 3.78 0 1.85-.05 3.1-.13 3.76a4.2 4.2 0 0 1-.57 1.56 5.26 5.26 0 0 1-1.8 1.98c-.43.3-.9.54-1.42.7-.51.16-1.09.24-1.73.24zm-1.44-2.83c.38.25.86.37 1.44.37s1.08-.12 1.49-.37c.38-.19.7-.46.96-.8.32-.36.53-.81.64-1.38.1-.53.16-1.6.16-3.23 0-.8-.01-1.48-.03-2.02a7.34 7.34 0 0 0-.13-1.24c-.1-.55-.32-1-.64-1.34a2.98 2.98 0 0 0-.96-.85c-.43-.2-.93-.32-1.49-.33-.56.03-1.04.14-1.44.33-.43.23-.77.51-1.01.85-.3.33-.5.78-.62 1.34a38.03 38.03 0 0 0-.13 5.26c.03.53.07.95.13 1.23.12.58.32 1.04.62 1.37.24.35.58.62 1.01.81zm20.5 1.63c-1 .8-2.2 1.2-3.57 1.2-.62 0-1.2-.08-1.71-.24-.53-.16-1-.4-1.4-.7a5.24 5.24 0 0 1-1.85-1.98l-.31-.7a4.9 4.9 0 0 1-.22-.86c-.11-.62-.16-1.88-.16-3.76 0-.96 0-1.75.03-2.37.03-.62.07-1.1.13-1.41.11-.65.3-1.17.53-1.54a5.6 5.6 0 0 1 4.96-2.92c1.51 0 2.76.46 3.73 1.38.98.96 1.59 2.1 1.83 3.43h-2.54a3.47 3.47 0 0 0-1.07-1.67 3.1 3.1 0 0 0-1.95-.68c-.56.03-1.05.14-1.44.33-.44.23-.77.51-1.01.85-.3.33-.5.78-.62 1.34a38.03 38.03 0 0 0-.13 5.26c.03.53.07.95.13 1.23.11.58.32 1.04.62 1.37.24.35.57.62 1 .81.39.25.87.37 1.45.37 1.35 0 2.35-.74 3.02-2.21h2.54c-.34 1.5-1 2.66-1.99 3.47zm5.89-15.14h2.25l4.54 10.56 4.45-10.56h2.27v16.2h-2.4v-10.1h-.04l-3.32 7.78h-2l-3.31-7.78h-.04v10.1h-2.4zm23.83 16.34c-.62 0-1.19-.08-1.71-.24-.52-.16-.99-.4-1.4-.7a5.24 5.24 0 0 1-1.85-1.98l-.31-.7a4.93 4.93 0 0 1-.22-.86c-.1-.62-.16-1.88-.16-3.76 0-.96.01-1.75.04-2.37.02-.62.06-1.1.12-1.41.12-.65.3-1.17.53-1.54a5.6 5.6 0 0 1 1.85-2.02c.85-.6 1.88-.9 3.11-.9a5.33 5.33 0 0 1 4.95 2.92c.26.36.44.87.57 1.54.08.64.13 1.9.13 3.78 0 1.85-.05 3.1-.13 3.76a4.2 4.2 0 0 1-.57 1.56 5.26 5.26 0 0 1-1.8 1.98c-.43.3-.9.54-1.41.7-.52.16-1.1.24-1.74.24zm-1.44-2.83c.38.25.87.37 1.44.37.58 0 1.08-.12 1.5-.37.37-.19.7-.46.95-.8.32-.36.54-.81.64-1.38.1-.53.16-1.6.16-3.23 0-.8-.01-1.48-.03-2.02a7.34 7.34 0 0 0-.13-1.24c-.1-.55-.32-1-.64-1.34a2.99 2.99 0 0 0-.96-.85c-.43-.2-.93-.32-1.49-.33-.56.03-1.04.14-1.44.33-.43.23-.77.51-1 .85-.3.33-.51.78-.63 1.34a37.87 37.87 0 0 0-.13 5.26c.03.53.08.95.13 1.23.12.58.32 1.04.62 1.37.24.35.58.62 1.01.81zm14.7-11.2h-4.33v-2.31h11.07v2.32h-4.33v13.88h-2.41zm10.64-2.31h5.73a9.34 9.34 0 0 1 1.8.17 5.05 5.05 0 0 1 2.98 2.5c.32.66.49 1.44.49 2.33 0 1.2-.42 2.3-1.24 3.28a4.58 4.58 0 0 1-3.71 1.6h-3.65v6.32h-2.4zm5.95 7.55c.89-.02 1.56-.3 2-.84.43-.53.65-1.13.65-1.78 0-.54-.09-1-.26-1.37a2.01 2.01 0 0 0-.76-.78 3 3 0 0 0-1.72-.46h-3.46v5.23zm14.55 8.79c-.62 0-1.2-.08-1.72-.24-.52-.16-.98-.4-1.4-.7a5.24 5.24 0 0 1-1.84-1.98l-.32-.7a4.93 4.93 0 0 1-.21-.86c-.11-.62-.17-1.88-.17-3.76 0-.96.02-1.75.04-2.37a11 11 0 0 1 .13-1.41c.11-.65.29-1.17.53-1.54a5.6 5.6 0 0 1 1.84-2.02c.85-.6 1.89-.9 3.12-.9a5.33 5.33 0 0 1 4.95 2.92c.25.36.44.87.56 1.54.09.64.13 1.9.13 3.78 0 1.85-.04 3.1-.13 3.76a4.2 4.2 0 0 1-.56 1.56 5.26 5.26 0 0 1-1.8 1.98c-.43.3-.9.54-1.42.7-.52.16-1.1.24-1.73.24zm-1.44-2.83c.38.25.86.37 1.44.37s1.07-.12 1.49-.37c.38-.19.7-.46.95-.8.33-.36.54-.81.64-1.38.1-.53.16-1.6.16-3.23 0-.8 0-1.48-.03-2.02a7.34 7.34 0 0 0-.13-1.24c-.1-.55-.31-1-.64-1.34a2.99 2.99 0 0 0-.95-.85c-.44-.2-.93-.32-1.5-.33-.56.03-1.04.14-1.43.33-.44.23-.78.51-1.01.85-.3.33-.5.78-.62 1.34a38.03 38.03 0 0 0-.13 5.26c.03.53.07.95.13 1.23.11.58.32 1.04.62 1.37.23.35.57.62 1 .81zm11.75-13.51h6.13c1.59.03 2.75.43 3.5 1.2.8.8 1.19 1.85 1.19 3.14.01.67-.14 1.3-.47 1.91-.15.3-.39.57-.71.83-.33.29-.71.53-1.15.74v.05c.86.23 1.5.69 1.95 1.39.42.7.63 1.48.63 2.34a4.64 4.64 0 0 1-1.3 3.33 4.18 4.18 0 0 1-3.1 1.27h-6.67zm6.09 13.88c.87-.01 1.52-.26 1.95-.74.41-.48.62-1.04.62-1.7 0-.66-.2-1.23-.62-1.7-.41-.46-1.06-.7-1.95-.73h-3.7v4.87zm-.23-7.06c.88 0 1.52-.23 1.93-.7.42-.43.63-.97.63-1.62a2.3 2.3 0 0 0-.63-1.66c-.4-.4-1.04-.63-1.93-.66h-3.46v4.64z"/></defs><g><g transform="translate(-218 -293)"><g><use fill="#ffffff" xlink:href="#wr7aa"/></g><g><use fill="#ffffff" xlink:href="#wr7ab"/></g><g><use fill="#ffffff" xlink:href="#wr7ac"/></g><g><use fill="#ffffff" xlink:href="#wr7ad"/></g></g></g></svg>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="serviceWrap">
            <div class="posRel container-fluid">
                <div class="advantagesImageBack"><img src="/assets/images/a-image.svg"></div>
                <div class="serviceContainer">
                    <div class="row">
                        <div class="col-12">
                            <div class="title-2 blackColor">Услуги центра</div>
                        </div>
                        <div class="col-12">
                            <div class="paragraph-2 fontColor">
                                <p>Платные медосмотры и профосмотры могут проводиться на базе нашего медицинского центра, также мы предлагаем выездное медобслуживание.</p>
                                <p class="d-none d-sm-block">У нас можно сдать обязательные и дополнительные лабораторные анализы. Результаты будут готовы в сжатые сроки.</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="serviceBlocks">
                                <div class="row">
                                    <div class="col-md-3 col-6">
                                        <div class="serviceBlock">
                                            <a href="#" class="serviceBlockImage serviceBlockImage--1"><img src="/assets/images/service-1.svg"></a>
                                            <a href="#" class="serviceBlockText projectLink">Профосмотры</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="serviceBlock">
                                            <a href="#" class="serviceBlockImage serviceBlockImage--2"><img src="/assets/images/service-2.svg"></a>
                                            <a href="#" class="serviceBlockText projectLink">Медосмотры</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="serviceBlock">
                                            <a href="#" class="serviceBlockImage serviceBlockImage--3"><img src="/assets/images/service-3.svg"></a>
                                            <a href="#" class="serviceBlockText projectLink">Лабораторные анализы</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="serviceBlock">
                                            <a href="#" class="serviceBlockImage serviceBlockImage--4"><img src="/assets/images/service-4.svg"></a>
                                            <a href="#" class="serviceBlockText projectLink">Диагностика</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="serviceBlock">
                                            <a href="#" class="serviceBlockImage serviceBlockImage--5"><img src="/assets/images/service-5.svg"></a>
                                            <a href="#" class="serviceBlockText projectLink">Обследование</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="serviceBlock">
                                            <a href="#" class="serviceBlockImage serviceBlockImage--6"><img src="/assets/images/service-6.svg"></a>
                                            <a href="#" class="serviceBlockText projectLink">Оформление документов</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="serviceBlock">
                                            <a href="#" class="serviceBlockImage serviceBlockImage--7"><img src="/assets/images/service-7.svg"></a>
                                            <a href="#" class="serviceBlockText projectLink">Медкомиссии</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="serviceBlock">
                                            <a href="#" class="serviceBlockImage serviceBlockImage--8"><img src="/assets/images/service-8.svg"></a>
                                            <a href="#" class="serviceBlockText projectLink">Паспорт здоровья</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="blockPhoto blockPhoto--only-text questionsWrap">
        <div class="blockPhoto__bg">
            <div class="blockPhoto__img-wrap">
                <img src="/assets/images/main-photo-1.jpg" alt="">
            </div>
            <div class="blockPhoto__overlay"></div>
        </div>
        <div class="blockPhoto__content-wrap">
            <div class="container-fluid">
                <div class="blockPhoto__content">
                    <h2 class="title-2">Мы ответим <br>на все вопросы</h2>
                    <p class="paragraph-2">Если вы хотите записаться на прием или выяснить интересующие вас вопросы, просто нажмите на кнопку ниже и оставьте свои контактные данные. Наш менеджер свяжется с вами, и окажет помощь в течении одного часа.</p>
                    <button class="projectBtn projectBtn--1">Получить консультацию</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="confidenceWrap">
            <div class="container-fluid">
                <div class="confidenceContainer">
                    <div class="confidenceBack">
                        <img src="/assets/images/confidenceBack.svg">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="title-2 blackColor">Мы заслужили<br>доверие</div>
                        </div>
                        <div class="col-12">
                            <div class="paragraph-2 confidenceText fontColor">
                                <p class="d-block d-md-none">Среди наших пациентов не только отдельные люди, но и огромные компании, насчитывающие сотни сотрудником, которые с удовольствием пользуються услугами центра уже много лет.</p>
                                <p class="d-none d-md-block">Платные медосмотры и профосмотры могут проводиться на базе нашего медицинского центра, также мы предлагаем выездное медобслуживание.</p>
                                <p class="d-none d-md-block">У нас можно сдать обязательные и дополнительные лабораторные анализы. Результаты будут готовы в сжатые сроки.</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="confidenceClient d-flex d-md-none">
                                <div class="confidenceClientBlock"><img src="/assets/images/confidence-3.png" width="111"></div>
                                <div class="confidenceClientBlock"><img src="/assets/images/confidence-2.png" width="110"></div>
                            </div>
                            <div class="confidenceClient d-none d-md-flex">
                                <div class="confidenceClientBlock"><img src="/assets/images/confidence-1.png"></div>
                                <div class="confidenceClientBlock"><img src="/assets/images/confidence-2.png"></div>
                                <div class="confidenceClientBlock"><img src="/assets/images/confidence-3.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="promotionsAndOffers">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="title-2 blackColor">Акции и <br> спецпредложения </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="promotionBlock">
                            <div class="promotionBlockImage">
                                <img src="/assets/images/example-1.png" class="image">
                            </div>
                            <div class="promotionBlockContent">
                                <div class="promotionBlockContent__date paragraph-2">с 14 сентября 2017 по 22 сентября 2018</div>
                                <div class="promotionBlockContent__text title-5">Скидка 30% на профосмотры для работником сверы общественного питания</div>
                                <div class="promotionBlockContentBtn"><div class="flatButton">Узнать больше</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="promotionBlock">
                            <div class="promotionBlockImage">
                                <img src="/assets/images/example-2.png" class="image">
                            </div>
                            <div class="promotionBlockContent">
                                <div class="promotionBlockContent__date paragraph-2">с 14 сентября 2017 по 22 сентября 2018</div>
                                <div class="promotionBlockContent__text title-5">Специальное предложение для тех кто хочет получить справку для разрешения на оружие</div>
                                <div class="promotionBlockContentBtn"><div class="flatButton">Узнать больше</div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promotionsAndOffersBtn">
                    <div class="projectBtn projectBtn--2">Все акции и спецпредложения</div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="advantagesWrap">
            <div class="container-fluid">
                <div class="advantagesImageBack">
                    <img src="/assets/images/a-image.svg">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="title-2 blackColor">Преимущества</div>
                    </div>
                    <div class="col-12">
                        <div class="paragraph-2 fontColor d-none d-sm-block">
                            «Биоспец» - это современная профильная клиника для качественного и быстрого прохождения всех видов медицинских осмотров и оформления необходимой документации. Наш центр имеет всё необходимое оборудование, в том числе флюорографический аппарат, современные аппараты УЗИ и ЭКГ.
                        </div>
                        <div class="paragraph-2 fontColor d-block d-sm-none">
                            «Биоспец» - это современная профильная клиника для качественного и быстрого прохождения всех видов медицинских осмотров и оформления необходимой документации.
                        </div>
                    </div>
                </div>
                <div class="advantagesBlocks">
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <div class="advBlock">
                                <div class="advImage advImage--1"><img src="/assets/images/img-1.svg"></div>
                                <div class="advBlockText d-none d-sm-block">Профессиональная<br>команда врачей</div>
                                <div class="advBlockText d-block d-sm-none">Опытные<br>врачи</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="advBlock">
                                <div class="advImage advImage--2"><img src="/assets/images/img-2.svg"></div>
                                <div class="advBlockText d-none d-sm-block">Предоставление комплексных<br>услуг в одном месте</div>
                                <div class="advBlockText d-block d-sm-none">Комплексные<br>услуги</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="advBlock">
                                <div class="advImage advImage--3"><img src="/assets/images/img-3.svg"></div>
                                <div class="advBlockText d-none d-sm-block">Экономия вашего личного <br> или рабочего времени</div>
                                <div class="advBlockText d-block d-sm-none">Быстрое<br>обслуживание</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="advBlock">
                                <div class="advImage advImage--4"><img src="/assets/images/img-4.svg"></div>
                                <div class="advBlockText d-none d-sm-block">Передовое качественное <br> оборудование</div>
                                <div class="advBlockText d-block d-sm-none">Передовое<br> оборудование</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="advBlock">
                                <div class="advImage advImage--5"><img src="/assets/images/img-5.svg"></div>
                                <div class="advBlockText d-none d-sm-block">Отсутствие очередей</div>
                                <div class="advBlockText d-block d-sm-none">Отсутствие<br>очередей</div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="advBlock">
                                <div class="advImage advImage--6"><img src="/assets/images/img-6.svg"></div>
                                <div class="advBlockText d-none d-sm-block">Удобное расположение <br> центра</div>
                                <div class="advBlockText d-block d-sm-none">Удобное<br>расположение</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advantagesButton">
                    <div class="projectBtn projectBtn--1">Получить консультацию</div>
                </div>
            </div>
        </div>
    </section>
    <section class="blockPhoto blockPhoto--reviews">
        <div class="blockPhoto__bg">
            <div class="blockPhoto__img-wrap">
                <img src="/assets/images/main-photo-2.jpg" alt="">
            </div>
            <div class="blockPhoto__overlay"></div>
        </div>
        <div class="blockPhoto__content-wrap">
            <div class="container-fluid">
                <div class="blockPhoto__content">
                    <h2 class="title-2">Отзывы клиентов</h2>
                    <p class="paragraph-2">Мы ценим мнение наших пациентов, и стараемся прислушаться к каждому голосу, чтобы посещение нашего центра становилось еще более комфортным и приятным для них.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="review">
        <div class="review__container sliderContainer">
            <div class="review__content sliderContent">
                <div class="review__slide">
                    <div class="review__header">
                        <div class="review__photo">
                            <img src="/assets/images/reviewPhoto.png" alt="">
                        </div>
                        <div class="review__author">
                            <div class="review__name">Лилия З.</div>
                            <div class="review__date">13 февраля 2017</div>
                        </div>
                    </div>
                    <div class="review__text paragraph-3 reviewText">Делала здесь медкнижку, когда устроилась на работу в кафе.Не думала, что официантам тоже требуются медкнижки, мне надо было сделать ее как можно скорее. В этом медицинском центре мне ее сделали всего за 2 дня. Я быстро прошла все анализы, их результаты были готовы в короткие сроки. На работе книжку у меня приняли без проблем. Обошлась она не очень дорого, так что я удачно сюда обратилась.</div>
                </div>
                <div class="review__slide">
                    <div class="review__header">
                        <div class="review__photo">
                            <img src="/assets/images/reviewPhoto.png" alt="">
                        </div>
                        <div class="review__author">
                            <div class="review__name">Лилия З.</div>
                            <div class="review__date">13 февраля 2017</div>
                        </div>
                    </div>
                    <div class="review__text paragraph-3 reviewText">Делала здесь медкнижку, когда устроилась на работу в кафе.Не думала, что официантам тоже требуются медкнижки, мне надо было сделать ее как можно скорее. В этом медицинском центре мне ее сделали всего за 2 дня. Я быстро прошла все анализы, их результаты были готовы в короткие сроки. На работе книжку у меня приняли без проблем. Обошлась она не очень дорого, так что я удачно сюда обратилась.</div>
                </div>
                <div class="review__slide">
                    <div class="review__header">
                        <div class="review__photo">
                            <img src="/assets/images/reviewPhoto.png" alt="">
                        </div>
                        <div class="review__author">
                            <div class="review__name">Лилия З.</div>
                            <div class="review__date">13 февраля 2017</div>
                        </div>
                    </div>
                    <div class="review__text paragraph-3 reviewText">Делала здесь медкнижку, когда устроилась на работу в кафе.Не думала, что официантам тоже требуются медкнижки, мне надо было сделать ее как можно скорее. В этом медицинском центре мне ее сделали всего за 2 дня. Я быстро прошла все анализы, их результаты были готовы в короткие сроки. На работе книжку у меня приняли без проблем. Обошлась она не очень дорого, так что я удачно сюда обратилась.</div>
                </div>
            </div>
            <div class="review__controls">
                <div class="review__prev sliderPrevArrow"></div>
                <div class="review__next sliderNextArrow"></div>
            </div>
        </div>
    </section> -->
    <div class="pageBuffer"></div>
</div>
<footer class="footerWrap">
    <div class="container-fluid">
        <div class="footerContainer">
            <div class="footerInfoBlock">
                <div class="footerTelephone">+7 (495) 419-09-20</div>
                <div class="footerTextBlock">г. Москва м. Китай-город,<br>Славянская пл., д. 2/5/4 c3</div>
                <div class="footerTextBlock"><a href="mailto:box@biospets.ru">box@biospets.ru</a></div>
                <div class="footerTextBlock">Пн. - Пт. - 9:00 - 18:00<br>Сб. - 9:00 - 15:00, Вc. - выходной</div>
                <div class="footerCopyright d-md-none">
                    Лицензия № ЛО-77-01-004813 от 06.04.2012
                </div>
                <div class="footerSocialContainer">
                    <a href="#" class="footerSocialContainerLink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path id="google-plus" fill="#c2c2c2" fill-rule="evenodd" d="M682,5714h20a2,2,0,0,1,2,2v20a2,2,0,0,1-2,2H682a2,2,0,0,1-2-2v-20A2,2,0,0,1,682,5714Zm18,13v2h-2v-2h-2v-2h2v-2h2v2h2v2h-2Zm-11.928,5a5.934,5.934,0,0,1-6.072-6.07,6.092,6.092,0,0,1,6.072-5.93,5.95,5.95,0,0,1,4.165,1.59l-1.844,1.8a2.839,2.839,0,0,0-2.321-.91,3.614,3.614,0,0,0-3.53,3.52,3.669,3.669,0,0,0,3.671,3.59,3.247,3.247,0,0,0,3.177-2.42h-3.248v-2.34h5.719a7.579,7.579,0,0,1-.212,3.52A5.545,5.545,0,0,1,688.072,5732Z" transform="translate(-680 -5714)"/>
                        </svg>
                    </a>
                    <a href="#" class="footerSocialContainerLink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#c2c2c2" fill-rule="evenodd" class="cls-1" d="M716,5714h20a2,2,0,0,1,2,2v20a2,2,0,0,1-2,2H716a2,2,0,0,1-2-2v-20A2,2,0,0,1,716,5714Zm18,4s-3.365-.39-5.086.57a4.179,4.179,0,0,0-1.943,3.82c-0.008,1.03.029,2.61,0.029,2.61h-3v4h3l-0.032,9H731v-9h2l1-4h-3v-2a1.94,1.94,0,0,1,1-2h2v-3Z" transform="translate(-714 -5714)"/>
                        </svg>
                    </a>
                    <a href="#" class="footerSocialContainerLink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path id="pinterest" fill="#c2c2c2" fill-rule="evenodd" d="M750,5714h20a2,2,0,0,1,2,2v20a2,2,0,0,1-2,2H750a2,2,0,0,1-2-2v-20A2,2,0,0,1,750,5714Zm4.77,12.37a6.063,6.063,0,0,0,.362.53,0.548,0.548,0,0,1,.181.6,5.128,5.128,0,0,1-.422,1.3,1.289,1.289,0,0,1-1.266-.47c-0.643-.6-2.43-2.56-1.205-6.19s4.5-4.67,6.689-5.05,5.826,0.42,7.413,2.62a7.106,7.106,0,0,1,1.386,5.53,8.527,8.527,0,0,1-2.411,4.99,5.842,5.842,0,0,1-4.339,1.49,3.619,3.619,0,0,1-2.471-1.43l-0.723,2.86a11.745,11.745,0,0,1-.482,1.48c-0.221.48-.783,1.37-0.783,1.37l-0.844-.24a1.8,1.8,0,0,1-.542-0.29,15.2,15.2,0,0,1,.06-1.97c0.1-.65,1.185-4.85,1.265-5.35s0.362-1.72.362-1.72a4.668,4.668,0,0,1-.06-3.39,2.205,2.205,0,0,1,2.531-1.43,1.843,1.843,0,0,1,1.024,2.14c-0.16,1.33-1.084,3.43-1.084,4.28a1.865,1.865,0,0,0,1.446,1.67c0.643,0.12,2.41.02,3.435-2.26s1.024-4.9.181-6.37-3.154-2.28-5.062-2.02a5.644,5.644,0,0,0-4.4,2.86A4.719,4.719,0,0,0,754.77,5726.37Z" transform="translate(-748 -5714)"/>
                        </svg>
                    </a>
                    <a href="#" class="footerSocialContainerLink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path id="linkedin" fill="#c2c2c2" fill-rule="evenodd"  d="M784,5714h20a2,2,0,0,1,2,2v20a2,2,0,0,1-2,2H784a2,2,0,0,1-2-2v-20A2,2,0,0,1,784,5714Zm18.993,13.67V5735h-3.782v-6.16s0.371-2.85-1.871-2.87-2.281,2.4-2.281,2.4V5735h-3.743v-12.02H794.9v1.7s1.267-2.58,4.835-1.87S802.993,5727.67,802.993,5727.67Zm-15.829-6.33a2.17,2.17,0,1,1,2.164-2.17A2.166,2.166,0,0,1,787.164,5721.34Zm1.871,13.66h-3.743v-12.02h3.743V5735Z" transform="translate(-782 -5714)"/>
                        </svg>
                    </a>
                </div>
                <div class="footerCopyright d-md-none">©2017 <a href="/">biospets.ru</a></div>
            </div>
            <div class="footerMenuLinks">
                <div class="footerLinkBlock">
                    <div class="footerLinkBlockContainer">
                        <div>
                            <ul class="footerLinkContainer">
                                <li class="footerLinkContainer__li">
                                    <a href="#" class="footerLinkContainerLink">Мед.&nbsp;центр</a>
                                </li>
                                <li class="footerLinkContainer__li">
                                    <a href="#" class="footerLinkContainerLink">Медицинская&nbsp;книжка</a>
                                </li>
                                <li class="footerLinkContainer__li">
                                    <a href="#" class="footerLinkContainerLink">Профосмотр</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="footerLinkContainer">
                                <li class="footerLinkContainer__li">
                                    <a href="#" class="footerLinkContainerLink">Лабораторные&nbsp;анализы</a>
                                </li>
                                <li class="footerLinkContainer__li">
                                    <a href="#" class="footerLinkContainerLink">Паспорт&nbsp;здоровья</a>
                                </li>
                                <li class="footerLinkContainer__li">
                                    <a href="#" class="footerLinkContainerLink">Медицинские&nbsp;справки</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footerCopyright">
                        Лицензия № ЛО-77-01-004813 от 06.04.2012
                    </div>
                </div>
                <div class="footerLinkBlock">
                    <div>
                        <ul class="footerLinkContainer">
                            <li class="footerLinkContainer__li">
                                <a href="#" class="footerLinkContainerLink">Акции</a>
                            </li>
                            <li class="footerLinkContainer__li">
                                <a href="#" class="footerLinkContainerLink">Полезные&nbsp;статьи</a>
                            </li>
                            <li class="footerLinkContainer__li">
                                <a href="#" class="footerLinkContainerLink">Контакты</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footerCopyright">©2017 biospets.ru</div>
                </div>
            </div>
            <div></div>
        </div>
    </div>
</footer>
<noscript id="deferred-styles">
    <!--styles-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!---->
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!---->
</noscript>
<script>
    var loadDeferredStyles = function() {
    var addStylesNode = document.getElementById("deferred-styles");
    var replacement = document.createElement("div");
    replacement.innerHTML = addStylesNode.textContent;
    replacement.id = "deferred-styles";
    document.body.appendChild(replacement);
    addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
    window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);
</script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
