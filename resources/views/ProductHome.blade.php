<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <title>Laravel 9 CRUD Ajax</title>
    <style>
        .main {
            background-image: linear-gradient(to right bottom, #f1fcff, #a8defa, #68bbfc, #4b92f7, #6660e3);

        }

        th {
            font-size: 20px;
            font-weight: bold;
            color: #fff;
        }

        td {
            font-size: 17px;
            font-weight: 600;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }

        tr:nth-child(even) {
            background-color: #c1dee0;
        }
    </style>
</head>

<body>
    <div class="container my-3 main">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h3 class="my-3 text-center">Laravel 9 Ajax CRUD</h3>
                <a href="" class="btn btn-success" data-toggle="modal" data-target="#productModal">Add Product</a>
                <div class="table-data">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-primary">
                                <th scope="col">#</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-success"><i class="lar la-edit"></i></a>
                                    <a href="" class="btn btn-danger"><i class="las la-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-success"><i class="lar la-edit"></i></a>
                                    <a href="" class="btn btn-danger"><i class="las la-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('add_Product_modal')
    @include('ProductJs')
</body>

</html>