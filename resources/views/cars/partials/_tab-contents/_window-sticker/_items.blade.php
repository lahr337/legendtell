<a class="dashboard-media__item full-media-item" href="{{$sticker->filename}}">
    <?php if ($sticker->type == 'image') {

    ?>
        <img class="full-media-item__img" src="{{$sticker->filename}}" alt="alt" />
    <?php } else { ?>

        <video width="320" height="240" controls>
            <source src="{{$sticker->filename}}" type="video/mp4">
            <source src="{{$sticker->filename}}" type="video/ogg">
            Your browser does not support the video tag.
        </video>

    <?php } ?> <div class="dashboard-media__check custom-check custom-check--media">
        <div class="custom-check__field-wr">
            <input class="custom-check__field" type="checkbox" name="sticker" value="{{$sticker->id}}" />
            <div class="custom-check__customize">
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 8.17949L8.6 15L15 1" stroke="#272727" stroke-width="2" />
                </svg>
            </div>
        </div>
    </div>
</a>