<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <title>Facebook Video Downloader</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        html {
            font-size: 14px;
        }

        @media (min-width: 768px) {
            html {
                font-size: 16px;
            }
        }

        .container {
            max-width: 960px;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="title px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Facebook Video Downloader</h1>
            </div>
            <div class="input-group">
                <label class="sr-only" for="link">Facebook Video URL</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="link" placeholder="Facebook Video Link" name="link">
                <span class="input-group-btn">
                    <input type="button" name="download" id="download" value="Download!" class="btn btn-primary"
                        data-disable-with="Search" onclick="getDownloadLink();">
                </span>
            </div>
            <div id="bar" style="display:none;">
                <p class="text-center"><img src="{{ asset('asset/ajax.gif') }}"></p>
            </div>
            <div class="mt-3" id="result" style="display: none;">
                <div id="downloadUrl">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex p-2 bg-primary text-white">Title</div>
                            <div class="d-flex p-2 bg-dark text-white" id="title"></div>
                        </div>
                        <div class="col-md-12 mt-1">
                            <div class="d-flex p-2 bg-primary text-white">Source</div>
                            <div class="d-flex p-2 bg-dark text-white" id="source"></div>
                        </div>
                        <div class="col-md-12 mt-1">
                            <div class="d-flex p-2 bg-primary text-white">Download Links:</div>
                            <div class="p-2 bg-dark text-break" id="links"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('asset/app.js?v=5') }}"></script>
</body>

</html>
