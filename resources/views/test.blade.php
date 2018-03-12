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
<div class="pageWrap" id="pageWrap">
    <section class="blockPhoto blockPhoto--only-text questionsWrap">
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
</div>
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
