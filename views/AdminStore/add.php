<div class="card mx-auto text-center">
    <form method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" class="form-control" id="title" name='title' placeholder="Nhập tiêu đề bài viết" required>
            </div>
            <div class="form-group">
                <label for="content-ck">Nội dung</label>
                <div id="content-ck"></div>
                <input type="hidden" name="content" id="content-post" value="" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" onclick="addPost()">Đăng bài</button>
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