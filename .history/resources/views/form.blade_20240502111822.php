<form action="/unicode" method="POST">
    <div>
        <input type="text" name="username" placeholder="nhập username...">
        <input type="hidden" name="_token" id="" value="<?php echo cfrs_token(); ?>">
        <br>
        <button type="submit">submit</button>
    </div>
</form>