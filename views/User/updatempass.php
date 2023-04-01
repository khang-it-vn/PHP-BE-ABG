<style>
    .form-control {
        width: 50px;
        height: 50px;
        font-size: 24px;
        text-align: center;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
<h1 class="text-center mb-3">Bootstrap Form</h1>
<form method="post" action="">
    <div class="form-row justify-content-center">
        <div class="form-group mx-2">
            <input type="number" class="form-control" id="input1" max="9" min="0" required pattern="[0-9]">
        </div>
        <div class="form-group mx-2">
            <input type="number" class="form-control" id="input2" max="9" min="0" required pattern="[0-9]">
        </div>
        <div class="form-group mx-2">
            <input type="number" class="form-control" id="input3" max="9" min="0" required pattern="[0-9]">
        </div>
        <div class="form-group mx-2">
            <input type="number" class="form-control" id="input4" max="9" min="0" required pattern="[0-9]">
        </div>
        <div class="form-group mx-2">
            <input type="number" class="form-control" id="input5" max="9" min="0" required pattern="[0-9]">
        </div>
        <div class="form-group mx-2">
            <input type="number" class="form-control" id="input6" max="9" min="0" required pattern="[0-9]">
        </div>
    </div>
    <div class="text-center"> <!-- Thêm lớp text-center để căn giữa nút "Submit" -->
        <button type="submit" class="btn btn-primary mt-3" id="btnSubmit">Submit</button>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    // Lấy giá trị của 6 ô input
    

    
    $("#btnSubmit").on('click', function(evt)  {
        var value1 = $('#input1').val();
        var value2 = $('#input2').val();
        var value3 = $('#input3').val();
        var value4 = $('#input4').val();
        var value5 = $('#input5').val();
        var value6 = $('#input6').val();
        evt.preventDefault();
        console.log("xin chào");
        // Kiểm tra xem mỗi ô input có giá trị dài đúng 1 ký tự không
        if(value1.length === 1 && value2.length === 1 && value3.length === 1 && value4.length === 1 && value5.length === 1 && value6.length === 1) {
            // Nếu tất cả đều thỏa mãn, nối lại thành chuỗi trong biến mpass
            var mpass = ""+ value1 + value2 + value3 + value4 + value5 + value6;
            //console.log(mpass);
            $.ajax({
                url: "<?php echo ROOT_URL . "user/updatempass"?>",
                data: {mpass},
                method: "POST",
                success: function(data) {
                    console.log(data);
                   if(data == true)
                    window.location.href = "<?php echo ROOT_URL. "user/index"?>";
                }
            })
            return;
        }
        alert("Please enter the m pass correct");
    })

</script>