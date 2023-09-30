document.getElementById('note1').innerHTML = `
<form action="save.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" class="note-title form-control" placeholder="Title" aria-label="Title">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <textarea class="note-body form-control" placeholder="Note" aria-label="Note"></textarea>
        </div>
    </div>
    <button type="button" class="submit">Save</button>
</form>
`;