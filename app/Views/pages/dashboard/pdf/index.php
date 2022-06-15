<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif !important;
        }

        .page-break {
            page-break-after: always;
        }

        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        @page {
            margin: 10px;
        }
    </style>
    <title>Make you Resume as PDF</title>
</head>
<?php

$pdf = false;

if (strpos(current_url(), 'download')) {
    $pdf = true;
}

?>

<body>
    <div class="container ">
        <div class="main-content mt-4" style="border: 1px solid;padding:15px; margin:30px 0">
            <div class="justify-content-center">
                <div>
                    <h4 style="text-transform:uppercase;text-align:center">Curriculum Vitae</h4>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-11">
                    <table>
                        <tr>
                            <td>
                                <div class="name">
                                    <h5 style="font-weight:700" class="m-0 p-0"><?= $basic_info->first_name . " " . $basic_info->last_name ?></h5>
                                    <span class="m-0 p-0"><?= $basic_info->profession ?></span>
                                </div>
                                <span class="d-block"><?= $basic_info->post_code ?>,<?= $basic_info->address ?></span>
                                <span class="d-block"><?= $basic_info->division ?>,Bangladesh</span>
                            </td>
                            <td><span style="margin:0 50px"></span></td>
                            <td style="float:right;">
                                <h6><b>Email : </b> <?= $basic_info->email ?></h6>
                                <h6><b>Website : </b> <?= $basic_info->website ?></h6>
                                <h6><b>Phone : </b> <?= $basic_info->phone ?></h6>
                            </td>
                        </tr>

                    </table>

                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <h4>Objective</h4>
                    <p><?= $career->career_object ?></p>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <h4>Education</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Degree / Diploma</th>
                                <th scope="col">Institue</th>
                                <th scope="col">Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($educations) > 0) : ?>
                                <?php foreach ($educations as $field) : ?>
                                    <tr>
                                        <td><?= $field->degree ?></td>
                                        <td><?= $field->institute ?></td>
                                        <td><?= $field->year ?></td>
                                    </tr>
                                <?php endforeach; ?>

                            <?php else : ?>

                                <tr class="text-center">
                                    <td colspan="6" class="text-danger font-weight-bold">No data found</td>
                                </tr>

                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <h4>Work Experience</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Company Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Year</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php if (count($works) > 0) : ?>
                                <?php foreach ($works as $work) : ?>
                                    <tr>
                                        <td><?= $work->company_name ?></td>
                                        <td><?= $work->position ?></td>
                                        <td><?= $work->year ?></td>
                                    </tr>
                                <?php endforeach; ?>

                            <?php else : ?>

                                <tr class="text-center">
                                    <td colspan="6" class="text-danger font-weight-bold">No data found</td>
                                </tr>

                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <h4>Certification</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Certification</th>
                                <th scope="col">Institue</th>
                                <th scope="col">Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($certificates) > 0) : ?>
                                <?php foreach ($certificates as $cer) : ?>
                                    <tr>
                                        <td><?= $cer->certificate_name ?></td>
                                        <td><?= $cer->about ?></td>
                                        <td><?= $cer->year ?></td>
                                    </tr>
                                <?php endforeach; ?>

                            <?php else : ?>

                                <tr class="text-center">
                                    <td colspan="6" class="text-danger font-weight-bold">No data found</td>
                                </tr>

                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <?php if ($pdf === false) : ?>
                <div class="row">
                    <div class="col-6">
                        <a href="<?= route_to('career-objetcs', $career->id) ?>" class="btn btn-warning">Back</a>
                    </div>
                    <div class="col-6 text-right">
                        <a href="<?= route_to('pdf-download') ?>" class="btn btn-primary" onclick="return confirm('Are you Sure ?')">Download</a>
                    </div>
                </div>
            <?php endif; ?>
        </div> <!-- main-content -->
    </div> <!-- container -->
    <!-- ptional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>