<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <page size="A4">
        <div class="container-fluid">
            <div class="row" style="padding: 40px 0 0;">
                <div class="col-md-6 mt-100">
                    <img src="{{asset('assets/images/brand/waslogo-3.png')}}">
                    <p>
                        บริษัท แลนเ์มาร์ค คอลซัลแทนทส์ จำกัด <br>
                        370/6 อาคารแฟร์ทาวเวอร์ ซอยสุขุมวิท 50 <br>
                        ถนนสุขุมวิท แขวงพระโขนง เขตคลองเตย กรุงเทพมหานคร 10260 <br>
                        เลขประจำตัวผู้เสียภาษี 015547070351 สำนักงานใหญ่
                    </p>
                </div>
                <div class="col-md-6">
                    สำเนาใบแจ้งหนี้/ใบวงบิล <br>
                    (ตันฉบับ)

                    Invoice No : LC-R-20/09/104 <br>
                    Date : 22-09-2020
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
</body>

</html>

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


