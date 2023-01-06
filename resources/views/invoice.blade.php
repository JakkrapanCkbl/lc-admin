<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
        body {
            background: rgb(204, 204, 204);
        }

        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
        }

        page[size="A4"] {
            width: 21cm;
            height: 29.7cm;
        }

        page[size="A4"][layout="landscape"] {
            width: 29.7cm;
            height: 21cm;
        }

        @media print {

            body,
            page {
                margin: 0;
                box-shadow: 0;
            }
        }

        .container {}

        #table {}

        #table td {
            width: auto;
            overflow: hidden;
            word-wrap: break-word;
        }
    </style>
</head>

<body>
    <page size="A4">
        <div class="container-fluid">
            <div class="row" style="padding: 40px 0 0;">
                <div class="col-md-6 mt-100">
                    <img src="{{asset('assets/images/brand/waslogo-3.png')}}">
                    <p>
                        บริษัท แลนด์มาร์ค คอลซัลแทนทส์ จำกัด <br>
                        370/6 อาคารแฟร์ทาวเวอร์ ซอยสุขุมวิท 50 <br>
                        ถนนสุขุมวิท แขวงพระโขนง เขตคลองเตย กรุงเทพมหานคร 10260 <br>
                        เลขประจำตัวผู้เสียภาษี 015547070351 สำนักงานใหญ่
                    </p>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center">
                        สำเนาใบแจ้งหนี้/ใบวางบิล <br>
                        (ตันฉบับ)
                    </h4>
                    <hr class="my-2" style="border: 0.5px solid black;">
                    <p>
                        Invoice No : LC-R-20/09/104 <br>
                        Date : 22-09-2020
                    </p>
                    <i class="fa fa-phone">0-2331-4580-2</i>
                    <i class="fa fa-car">www.landmarkcon.net</i>

                </div>
            </div>
            <div class="table-responsive">
                <table class="table border text-nowrap text-md-nowrap table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kevin Powell</td>
                            <td>Business Development Associator</td>
                            <td>$50,300</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Mark Ronson</td>
                            <td>Sales Manager</td>
                            <td>$45,500</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Katy Perry</td>
                            <td>Data Analyst</td>
                            <td>$425,500</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Pam Podrick</td>
                            <td>Python Developer</td>
                            <td>$415,900</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Sandy Orell</td>
                            <td>Backed Developer</td>
                            <td>$95,900</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </page>
    <i class="fa-regular fa-phone">www.landmarkcon.net</i>

</body>

</html>