<div class="card mx-auto text-center">
    <form method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name='name' placeholder="Nhập tiêu đề bài viết"
                    required>

                <label for="title">price</label>
                <input type="text" class="form-control" id="price" name='price' placeholder="Nhập tiêu đề bài viết"
                    required>
                <label for="title">Category</label>
                <select name="mySelect" id="mySelect">
                    <?php foreach ($viewModel as $item): ?>
                    <option value="<?php echo $item['id']; ?>">
                        <?php echo $item['name']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="title">Image</label>
                <input type="file" class="form-control-file" id="image" name="image" accept=".jpg,.jpeg,.png" required>
            </div>
            <div class="form-group">
                <label for="content-ck">Description</label>
                <div id="content-ck"></div>
                <input type="hidden" name="content" id="content-post" value="" required>
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit" onclick="addPost()">Add Product</button>
        </div>
    </form>
</div>

<script type="text/javascript">
var editor = CKEDITOR.replace('content-ck');

editor.on('change', function(evt) {
    document.getElementById("content-post").value = evt.editor.getData();
});


function addPost(evt) {
    let title = document.getElementById('title').value;
    let content = document.getElementById('content-post').value;

    if (title.length <= 0 || content.length <= 0) {
        alert('Bạn vẫn chưa soạn thảo nội dung đầy đủ');
        return;
    }

}
</script>
<style>
.cke_contents {
    min-height: 500px;
}
</style>