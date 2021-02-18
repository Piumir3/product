<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1>Product Details</h1>
        </div>

        <div class="row">
            <div class="col-md-12">

                @foreach($errors->all() as $errorsCatch)
                <div class="alert alert-danger" role="alert">   
                    {{$errorsCatch}}
                </div>
                @endforeach

                <form method="post" action="/AddProduct">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product ID </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Product_ID" placeholder="Enter Product ID  Here">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Name </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Product_Name " placeholder="Enter Product Name Here">
                        </div>
                    </div>


                    

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sales Price </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="SalesPrice" placeholder="Enter Sales Price  Here">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Weight </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="weight" placeholder="Enter Weight  Here">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Discount </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="discount" placeholder="Enter Discount Here">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Expire Date </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ExpireDate" placeholder="Enter Expire Date Here">
                        </div>
                    </div>

                   
                    <br>

                    <div class="">
                        <input type="submit" class="btn btn-warning" value="ADD">
                        <input type="submit" class="btn btn-primary" value="EDIT">
                        <input type="submit" class="btn btn-warning" value="DELETE">
                        <input type="submit" class="btn btn-primary" value="CLEAR">
                        <input type="submit" class="btn btn-warning" value="VIEW">
                    </div>

                </form>

                <br><br>
                <table class="table table-dark">
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Sales Price</th>
                        <th>Cost of product</th>
                        <th>Weight</th>
                        <th>Discount</th>
                        <th>Expire Date</th>
                        <th>User ID</th>
                        <th>Category ID</th>
                    </tr>
                    <tr>
                        <td>P00001</td>
                        <td>Chocolate wafer</td>
                        <td>142</td>
                        <td>150</td>
                        <td>100g</td>
                        <td>2%</td>
                        <td>22/10/2022</td>
                        <td>D00002</td>
                        <td>C00005</td>
                    </tr>

                    <tr>
                        <td>P00002</td>
                        <td>Cheese crackerr</td>
                        <td>73</td>
                        <td>80</td>
                        <td>50g</td>
                        <td>1.5%</td>
                        <td>22/10/2023</td>
                        <td>D00004</td>
                        <td>C00005</td>
                    </tr>

                    <tr>
                        <td>P00003</td>
                        <td>Apple juice</td>
                        <td>73</td>
                        <td>80</td>
                        <td>50g</td>
                        <td>1.5%</td>
                        <td>22/10/2023</td>
                        <td>D00004</td>
                        <td>C00005</td>
                    </tr>

                    <tr>
                        <td>P00004</td>
                        <td>0rrange juice</td>
                        <td>73</td>
                        <td>80</td>
                        <td>50g</td>
                        <td>1.5%</td>
                        <td>22/10/2023</td>
                        <td>D00004</td>
                        <td>C00005</td>
                    </tr>

                    <tr>
                        <td>P00005</td>
                        <td>Cheese crackerr</td>
                        <td>73</td>
                        <td>80</td>
                        <td>50g</td>
                        <td>1.5%</td>
                        <td>22/10/2023</td>
                        <td>D00004</td>
                        <td>C00005</td>
                    </tr>
                </table>

            </div>
        </div>

</body>

</html>