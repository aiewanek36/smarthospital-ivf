<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Barcode generator</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type='text/css' href="rangeslider.css">
    <link rel="stylesheet" type='text/css' href="style.css">

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="javascripts/JsBarcode.all.min.js"></script>
    <script src="javascripts/rangeslider.min.js"></script>
    <script src="javascripts/script.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="main">
        <div class="innermain inner-top">
            <div id="title">
                <h1>Barcode Generator</h1>Powered by <a href="https://github.com/lindell/JsBarcode">JsBarcode</a>
            </div>
            <br/>
            <div id="inputs" class="form-inline">
                <div class="row">
                    <div class="col-md-9 box">
                        <div class="input-group margin-bottom-sm" id="userInputGroup">
                            <span class="input-group-addon"><i class="fa fa-barcode fa-fw"></i></span>
                            <input class="form-control" id="userInput" type="text" value="JsBarcode" placeholder="Barcode" autofocus>
                        </div>
                    </div>
                    <div class="col-md-3 box">
                        <select class="form-control" id="barcodeType">
                            <option value="CODE128">CODE128</option>
                            <option value="EAN">EAN</option>
                            <option value="UPC">UPC</option>
                            <option value="CODE39">CODE39</option>
                            <option value="ITF14">ITF14</option>
                            <option value="ITF">ITF</option>
                            <option value="pharmacode">Pharmacode</option>
                        </select>
                    </div>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-3">Bar Width</div>
                <div class="col-md-8"><input id="bar-width" type="range" min="1" max="5" step="1" value="2"/></div>
                <div class="mod-md-1"><span id="bar-width-display"></span></div>
            </div>
            <div class="row">
                <div class="col-md-3">Height</div>
                <div class="col-md-8"><input id="bar-height" type="range" min="10" max="200" step="5" value="100"/></div>
                <div class="mod-md-1"><span id="bar-height-display"></span></div>
            </div>
            <div class="row">
                <div class="col-md-3">Font Size</div>
                <div class="col-md-8"><input id="bar-fontSize" type="range" min="8" max="36" step="1" value="16"/></div>
                <div class="mod-md-1"><span id="bar-fontSize-display"></span></div>
            </div>
            <div id="checkbox-options">
                <label><input type="radio" name="display-value" value="true" checked> Show Text</label>
                <label><input type="radio" name="display-value" value="false"> Hide Text</label>
            </div>
        </div>
        <div class="innermain">
            <div id="invalid">Not valid data for this barcode type!</div>
            <img id="barcode"/>
        </div>
    </div>

    <a href="https://github.com/lindell/JsBarcode"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/567c3a48d796e2fc06ea80409cc9dd82bf714434/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png"></a>
</body>
</html>
