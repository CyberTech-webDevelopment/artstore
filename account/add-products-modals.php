
<!-- ----------------------modal add product------------------------------ -->

<div class="modal fade add-product-modal" tabindex="-1" id="add-product-modal" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between">
        <div class="modal-title text-strong" id="exampleModalLongTitle">Add Product</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="icons/close.png"></span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row pl-1 pr-0">
           <div class="d-flex col-4"> 
                <div><img src="images/andrijana1.png" class="modal-product-img"></div>
                <div class="pl-2">
                  <img src="icons/edit.png">
                  <p></p>
                  <img src="icons/close.png">
                </div>
           </div>
           <div class="d-flex col-4 ">
                <div class="modal-drag-photo pt-4">
                    <!-- <dir><img src="images/seller-images/1.png"></dir> -->
                    <div class="text-center"><img src="icons/upload.png"></div>
                    <div class="font-size-14 text-center pt-3">Drag photo to upload</div>
                    <div class="font-size-14 text-center">or</div>
                    <div class="text-center pt-2"><label class="browse font-size-12 text-strong"><input type='file'>Browse</label></div>
                </div>
                <div></div>
            </div>
       </div>
       <div class="row pl-3 pr-0 mt-3">
        <div class="inputs-group pl-0 pr-0">
             <input type="" name="" placeholder="Product Name" class="pt-3">
            <input type="" name="" placeholder="Description" class="pt-3">
            <input type="" name="" placeholder="Product Details" class="pt-3">
            <input type="" name="" placeholder="Detail 2" class="pt-3">
            <input type="" name="" placeholder="Detail 3" class="pt-3">
        </div>
        <div class="row pl-0 pr-0 mt-3 select-group-1">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-10">
              <label>Category</label>
              <select>
                  <option></option>
                  <option></option>
              </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-10">
              <label>Subcategory</label>
              <select>
                  <option></option>
                  <option></option>
              </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-10">
              <label>Type</label>
              <select>
                  <option></option>
                  <option></option>
              </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-10 text-center">
                <label>Quantity</label>
                <div class="d-flex text-center">
                  <div class="ml-auto mr-auto">
                       <button class="minus">-</button>
                       <span class="pl-2 pr-2 quantity">1</span>
                       <button class="plus">+</button>
                  </div>
                </div>
            </div>
        </div>
        <div class="row pl-0 pr-0 mt-4 select-group-2">
             <div class="col-lg-2 col-md-2 col-sm-6 col-xs-10">
                <label>Price</label>
                <div class="d-flex">
                    <span class="pr-2">$</span>
                    <select>
                        <option></option>
                        <option></option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-10">
                <label>Sale Price</label>
                <div class="d-flex">
                    <span class="pr-2">$</span>
                    <div>
                        <select>
                            <option></option>
                            <option></option>
                        </select>
                        <div><input type="radio" name=""><label class="pl-2">Hot Offer</label></div>
                        <div><input type="radio" name=""><label class="pl-2">Spetial Offer</label></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-10">
                <label>Size</label>

                <!-- --------------------select with checkbox------------ -->
                <!-- <div class="multiselect">
    <div class="selectBox" onclick="showCheckboxes()">
      <select>
      </select>
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes">
      <label for="one">
        <input type="checkbox" class="mr-2 ml-2" id="one" />Xs</label>
      <label for="two">
        <input type="checkbox" class="mr-2 ml-2" id="two" />S</label>
      <label for="three">
        <input type="checkbox" class="mr-2 ml-2" id="three" />M</label>
        <label for="for">
        <input type="checkbox" class="mr-2 ml-2" id="for" />L</label>
        <label for="five">
        <input type="checkbox" class="mr-2 ml-2" id="five" />XXL</label>
    </div>
  </div> -->

 
       <div class="">
     <div class="button-group">
        <button  class="dropdown-toggle" data-toggle="dropdown"></span> <span class="caret"></span></button>
<ul class="dropdown-menu">
  <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 1</a></li>
  <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 2</a></li>
  <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 3</a></li>
  <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 4</a></li>
  <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 5</a></li>
  <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox"/>&nbsp;Option 6</a></li>
</ul>
  </div>
    </div>


            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-10">
                <label>Color</label>
                <select>
                    <option></option>
                    <option></option>
                </select>
                
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-10">
                <label>Material</label>
                <select>
                    <option></option>
                    <option></option>
                </select>
            </div>
        </div>

       </div>
       <div class="d-flex justify-content-center mt-4 mb-5">
          <button id="add-product" class="text-strong" data-toggle="modal" data-target=".product-successfully-aded" data-dismiss="modal" aria-label="Close">Add Product</button>
       </div>
      </div>
    </div>
  </div>
</div>


<!-- -----------------product successfully aded store name------------ -->

<div class="modal fade product-successfully-aded" tabindex="-1" aria-labelledby="product-description" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="icons/close.png"></span>
        </button>
      </div>
      <div class="modal-body product-description-body ml-auto mr-auto pt-3 pb-3 text-center">
          <div class=" mt-2"><img src="icons/success.png"></div>
        <div class="text-center mt-4 text-in-modal text-strong">
           Dear user, the product has been added to the "store name" store. It will be for sale after checking the Artstore moderator. You will receive a message about that.
        </div>
        <div class="text-center mt-4 mb-4"><button class="again-add-product text-strong"  data-toggle="modal" data-target=".add-product-modal" data-dismiss="modal" aria-label="Close">Add Product</button></div>
        <div class="go-to-product text-strong" data-toggle="modal"  data-dismiss="modal" aria-label="Close">
           <a  class="nav-link d-flex go-to-product text-center justify-content-between acount-bar-item acount-bar-type-item" data-type="seller" data-name="products" id="v-pills-products-tab" data-toggle="pill" href="#v-pills-products" role="tab" aria-controls="v-pills-products" aria-selected="true"><div class="font-size-16">Go to Products</div></a>
       </div>
      </div>
    </div>
  </div>
</div>