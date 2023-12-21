<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabel">Detail Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="orderDetails">
                <div class="item-details" id="itemDetails1">
                    <p>Product    : <span id="itemName1"></span></p>
                    <p>Price      : <span id="itemPrice1"></span></p>
                    <p>Quantity   : <span id="itemQuantity1"></span></p>
                </div>
                <hr>
                <div class="item-details" id="itemDetails2">
                    <p>Product    : <span id="itemName2"></span></p>
                    <p>Price      : <span id="itemPrice2"></span></p>
                    <p>Quantity   : <span id="itemQuantity2"></span></p>
                </div>
                <hr>
                <div class="item-details" id="itemDetails3">
                    <p>Product    : <span id="itemName3"></span></p>
                    <p>Price      : <span id="itemPrice3"></span></p>
                    <p>Quantity   : <span id="itemQuantity3"></span></p>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <p>Total Price: <span id="modalTotalHargaKeseluruhan"></span></p>
                    <button type="button" class="btn btn-secondary confirm-btn" data-dismiss="modal">CONFIRM</button>
                </div>
            </div>
        </div>
    </div>
</div>