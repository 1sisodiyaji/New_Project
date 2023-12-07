
<?php
?>
<div class="container "
     style="width: 100vw; height: 90vh; display:flex; justify-content: center; align-items: center; ">
    <div class="container border  border-success  rounded-8 bg-secondary " style=" padding:20px;  height:400px; width:600px; margin:auto">
        <h4 class="text-light text-center">Raise an issue…</h4>
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="email"
                       placeholder="Enter Your Email" style="background: rgb(124, 166, 208);">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Issue </label>
                <select class="form-control" id="exampleFormControlSelect1"
                        style="background: rgb(124, 166, 208);">
                    <option>Product</option>
                    <option>Logistic</option>
                    <option>Pricing</option>
                    <option>Feedback</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description :-</label>
                <textarea style="background: rgb(124, 166, 208);" class="form-control"
                          id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="text-center py-3">
                <button type="button" class="btn btn-primary" onclick="sendEmail()">Send</button>
            </div>

        </form>
    </div>
</div>
<script src="../js/Contact.js"></script>