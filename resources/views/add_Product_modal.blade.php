<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modal</title>
  <style>
    label {
      display: inline-block;
      width: 170px;
    }
  </style>
</head>

<body>
  <!-- Modal -->
  <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="addModalProduct" aria-hidden="true">
    <form action="" method="post" id="addProductForm">
      @csrf
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addModalProduct">Add Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="mb-2 errMsgContainer">
              <!-- <h5>Error msg here</h5> -->
            </div>
            <div class="mb-2">
              <label>Product Name</label>
              <input type="text" name="pName" id="pName" placeholder="Product name">
            </div>
            <div class="mb-2">
              <label>Product Price</label>
              <input type="number" name="pPrice" id="pPrice" placeholder="Product Price">
            </div>
            <div class="mb-2">
              <label>Producr Description</label>
              <textarea class="form-control" name="pDesc" id="pDesc" placeholder="Producr Description" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary saveProduct">Save Product</button>
          </div>
        </div>
      </div>
    </form>
  </div>

</body>

</html>