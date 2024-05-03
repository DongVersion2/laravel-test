<form action="/unicode" method="POST">
    <div>
        <input type="text" name="username" placeholder="nhập username...">
        <input type="text" name="_method" value="patch">
        <input type="hidden" name="_token" id="" value="<?php echo csrf_token(); ?>">
    </div>
    <button type="submit">submit</button>
</form>