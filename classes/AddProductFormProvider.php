<?php
  //require_once '../../admin_includes/header.php';
  class AddProductFormProvider{

    public function createAddProductForm(){
      
      $productNameInput = $this->createProductNameInput();
      $productPriceInput = $this->createProductPriceInput();
      $openingStockInput = $this->createOpeningStockInput();
      $productDescriptionInput = $this->createDescriptionInput();
      $productImageInput = $this->createProductImageInput();
      $productSubmitButton = $this->createProductSubmitButton();

      return "<form method='POST' action='#' enctype='multipart/form-data'>
                <div class='panel-body'>
                  <div class='row'>
                    <div class='col-lg-6'>
                      $productNameInput
                      $productPriceInput
                      $openingStockInput
                    </div>
                    <div class='col-lg-6'>
                      $productDescriptionInput
                      $productImageInput
                    </div>
                  </div>
                </div>
                  $productSubmitButton
              </form>";
    }

    private function createProductNameInput(){
      return '<div class="form-group">
        <label>Product Name</label>
        <input
          type="text"
          name="name"
          id="name"
          class="form-control"
          value=""
          placeholder="Enter product name"
        />
      </div>';
    }

    private function createProductPriceInput(){
      return '<div class="form-group">
        <label>Product Price</label>
        <input
          type="text"
          name="price"
          id="price"
          class="form-control"
          value=""
          placeholder="Enter product price"
        />
      </div>';
    }

    private function createOpeningStockInput(){
      return '<div class="form-group">
        <label>Opening Stock</label>
        <input
          type="text"
          name="stock"
          id="stock"
          class="form-control"
          value=""
          placeholder="Enter product stock"
        />
      </div>';
    }

    private function createDescriptionInput(){
      return '<div class="form-group">
        <label>Description</label>
        <textarea class="form-control"></textarea>
      </div>';
    }

    private function createProductImageInput(){
      return '<div class="form-group">
        <label>Product Image</label>
        <input
          type="file"
          name="image"
          id="image"
          class="form-control"
          value=""
          title="Select Product Image"
        />
      </div>';
    }

    private function createProductSubmitButton(){
      return '<div class="panel-footer">
        <button type="submit" class="btn btn-primary">
          <i class="glyphicon glyphicon-plus-sign"></i> Save Product
        </button>
      </div>';
    }
  }