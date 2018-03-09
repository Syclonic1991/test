<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>

    <!--styles-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!---->

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!---->
</head>
<body>
<div class="pageWrap">
    <section>
        <div class="container">
            <h1>Heading</h1>
            <div class="title-1">Heading 1</div>
            <br>
            <div class="title-2">Heading 2</div>
            <br>
            <div class="title-3">Heading 3</div>
            <br>
            <div class="title-4">Heading 4</div>
            <br>
            <div class="title-5">Heading 5</div>
        </div>
    </section>

    <section>
        <div class="container">
            <br>
            <h1>Paragraph</h1>
            <br>
            <div class="paragraph-1">Paragraph 1</div>
            <br>
            <div class="paragraph-2">Paragraph 2</div>
            <br>
            <div class="paragraph-3">Paragraph 3</div>
        </div>
    </section>

    <section>
        <div class="container">
            <br>
            <h1>Color palette</h1>
            <br>
            <div class="pallete-primary" style="height: 140px;border: 1px solid #d0d0d0;padding: 5px;"></div>
            <br>
            <div class="pallete-secondary-1" style="height: 140px;border: 1px solid #d0d0d0;padding: 5px;"></div>
            <br>
            <div class="pallete-secondary-2" style="height: 140px;border: 1px solid #d0d0d0;padding: 5px;"></div>
        </div>
    </section>
    <section>
        <div class="container">
            <br>
            <h1>Buttons and elements</h1>
            <br>
            <div class="row">
                <div class="col-3">
                    <h2>Button 1</h2>
                    <div>
                        <div class="projectBtn projectBtn--1">Button 1</div>
                    </div>
                </div>
                <div class="col-3">
                    <h2>Button 2</h2>
                    <div>
                        <div class="projectBtn projectBtn--2">Button 2</div>
                    </div>
                </div>
                <div class="col-3">
                    <h2>Flat button</h2>
                    <br>
                    <div>
                        <div class="flatButton">Normal Button</div>
                        <br>
                        <div class="flatButton disabled">Disabled Button</div>
                    </div>
                    <br>
                </div>
                <div class="col-3">
                    <h2>Float button</h2>
                    <br>
                    <div>
                        <div class="floatButton"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <h2>Link</h2>
                    <div>
                        <a href="" class="projectLink">Norma link</a>
                    </div>
                </div>
                <div class="col-3">
                    <h2>Checkbox</h2>
                    <div class="checkBoxWrap">
                        <input type="checkbox" id="example">
                        <label for="example">Check Box</label>
                    </div>
                </div>
                <div class="col-3">
                    <h2>Icons</h2>
                    <div>
                        <div class="projectIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="26" viewBox="0 0 30 26"><defs><path id="kxgfa" d="M640 6638h-21a1 1 0 0 1 0-2h21a1 1 0 1 1 0 2zm-4 10a1 1 0 0 1 0 2h-16l-.05-.01c-.37.03-.68-.11-.78-.38l-.06-.18-.05-.14-5.03-14.22c-.13-.35.17-.8.66-.98.5-.19 1-.05 1.13.3l4.82 13.61zm-12.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm9 0a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm-10.5-4a1 1 0 1 1 0-2h15a1 1 0 0 1 0 2zm-1-3a1 1 0 0 1 0-2h17a1 1 0 1 1 0 2zm-1-3a1 1 0 0 1 0-2h19a1 1 0 1 1 0 2z"/></defs><g><g transform="translate(-612 -6632)"><use fill="#3ec4f0" xlink:href="#kxgfa"/></g></g></svg>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="">
                <div class="col-12">
                    <br>
                    <h2>Alphabetical sorting</h2>
                    <br>
                </div>
                <div class="alphabeticalWrap">
                    <div class="alphabeticalBlock alphabeticalBlock--active">Все</div>
                    <div class="alphabeticalBlock">А</div>
                    <div class="alphabeticalBlock">Б</div>
                    <div class="alphabeticalBlock">В</div>
                    <div class="alphabeticalBlock">Г</div>
                    <div class="alphabeticalBlock">Д</div>
                    <div class="alphabeticalBlock">Е</div>
                    <div class="alphabeticalBlock">Ж</div>
                    <div class="alphabeticalBlock">З</div>
                    <div class="alphabeticalBlock">И</div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <br>
            <h1>Buttons and elements</h1>
            <h2>Text input</h2>
            <div class="row">
                <div class="col-6">
                    <div class="projectFormGroup">
                        <label>Label</label>
                        <input type="text" class="projectFormControl" placeholder="Placeholder">
                    </div>
                </div>
                <div class="col-6">
                    <div class="projectFormGroup projectFormGroup--active">
                        <label>Label</label>
                        <input type="text" class="projectFormControl" placeholder="Placeholder" value="Active">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="projectFormGroup">
                        <label>Label</label>
                        <input type="text" class="projectFormControl" placeholder="Placeholder" value="Active">
                    </div>
                </div>
                <div class="col-6">
                    <div class="projectFormGroup projectFormGroup--withError">
                        <label>Label</label>
                        <input type="text" class="projectFormControl" placeholder="Placeholder" value="123 4586 132">
                    </div>
                </div>
            </div>
            <h2>Text area</h2>
            <div class="row">
                <div class="col-6">
                    <div class="projectFormGroup">
                        <label>Label</label>
                        <div class="projectFormCounter">0/300</div>
                        <textarea class="projectFormControl"></textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="projectFormGroup projectFormGroup--active">
                        <label>Label</label>
                        <div class="projectFormCounter">0/300</div>
                        <textarea class="projectFormControl"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="projectFormGroup">
                        <label>Label</label>
                        <div class="projectFormCounter">0/300</div>
                        <textarea class="projectFormControl">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco
                            </textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="projectFormGroup projectFormGroup--withError">
                        <label>Label</label>
                        <div class="projectFormCounter">356/300</div>
                        <textarea class="projectFormControl"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="btn-group projectBtn-group">
                        <button type="button" class="dropDownBtn">Action</button>
                        <button type="button" class="dropDownArrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pageBuffer"></div>
</div>
<footer class="footerWrap">
    <div class="container">
        Footer
    </div>
</footer>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
