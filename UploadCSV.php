<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <br />
    <br />
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Import CSV File Data</h3>
            </div>
            <div class="panel-body">
                <span id="message"></span>
                <form action="<?= site_url("demo/upload") ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Select CSV File</label>
                        <input type="file" id="fileInput" name="filename" id="filename" required="required"
                            accept=".csv,text/csv">
                        <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>"
                            value="<?= csrf_hash() ?>" />
                    </div>
                    <div class="form-group" align="center">
                        <input type="hidden" name="hidden_field" value="1" />
                        <input type="submit" name="import" id="import" class="btn btn-info" value="Import" />
                    </div>
                </form>
                <div class="form-group" id="preloaderdiv" style="display:none;">
                    <div class='progress' id='PreLoaderBar'>
                        <div class='indeterminate'>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center bd-highlight mb-3">
                        <center>
                            <label id="UploadingCSV"></label>
                        </center>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
       let file = document.getElementById("fileInput");
       let preloaderdiv = document.getElementById("preloaderdiv");
       let UploadingCSV = document.getElementById('UploadingCSV');
       function CheckFileIfEmpty() {
            if (file.files.length == 0) {
                down.innerHTML = "No CSV file selected";
            } else {
                preloaderdiv.style.display = "block";
                UploadingCSV.innerHTML = "Uploading CSV";
            }
        }

        document.querySelector("#import").addEventListener("click", () => {
             console.log("button was clicked");
             CheckFileIfEmpty();
        })

        // document.getElementById('import').addEventListener("click", function() {
        //     document.getElementById("PreLoaderBar").style.display = "block";
        //     alert("You clicked me");
        //     CheckFileIfEmpty();

        // }​);​

</script>

<style>
    .progress {
        position: relative;
        height: 7px;
        display: block;
        z-index: 9999;
        width: 100%;
        background-color: white;
        border-radius: 2px;
        background-clip: padding-box;
        /*margin: 0.5rem 0 1rem 0;*/
        overflow: hidden;
    }

    .progress .indeterminate {
        background-color: black;
    }

    .progress .indeterminate:before {
        content: '';
        position: absolute;
        background-color: #2C67B1;
        top: 0;
        left: 0;
        bottom: 0;
        will-change: left, right;
        -webkit-animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
        animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
    }

    .progress .indeterminate:after {
        content: '';
        position: absolute;
        background-color: #2C67B1;
        top: 0;
        left: 0;
        bottom: 0;
        will-change: left, right;
        -webkit-animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
        animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
        -webkit-animation-delay: 1.15s;
        animation-delay: 1.15s;
    }

    @-webkit-keyframes indeterminate {
        0% {
            left: -35%;
            right: 100%;
        }

        60% {
            left: 100%;
            right: -90%;
        }

        100% {
            left: 100%;
            right: -90%;
        }
    }

    @keyframes indeterminate {
        0% {
            left: -35%;
            right: 100%;
        }

        60% {
            left: 100%;
            right: -90%;
        }

        100% {
            left: 100%;
            right: -90%;
        }
    }

    @-webkit-keyframes indeterminate-short {
        0% {
            left: -200%;
            right: 100%;
        }

        60% {
            left: 107%;
            right: -8%;
        }

        100% {
            left: 107%;
            right: -8%;
        }
    }

    @keyframes indeterminate-short {
        0% {
            left: -200%;
            right: 100%;
        }

        60% {
            left: 107%;
            right: -8%;
        }

        100% {
            left: 107%;
            right: -8%;
        }
    }
</style>

</html>
