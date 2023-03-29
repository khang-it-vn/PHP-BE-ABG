<main class="content">
    <h2>Add Document</h2>
    <form id="add-doc-form">
        <label for="doc-title">Title:</label>
        <input type="text" id="doc-title" name="doc-title"><br><br>

        <label for="doc-content">Content:</label>
        <textarea class="ckeditor" name="doc-content"></textarea><br><br>

        <button type="submit">Save</button>
    </form>
    <form id="edit-doc-form" style="display:none">
        <label for="edit-doc-title">Title:</label>
        <input type="text" id="edit-doc-title" name="edit-doc-title"><br><br>

        <label for="edit-doc-content">Content:</label>
        <textarea class="ckeditor" name="edit-doc-content"></textarea><br><br>

        <button type="submit">Save Changes</button>
    </form>
</main>