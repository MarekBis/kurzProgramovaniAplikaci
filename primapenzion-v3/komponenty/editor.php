<h2>Editor stranky <?php echo $aktualniInstance->id; ?></h2>
<form action="" method="post">
    <label for="">Id stranky</label>
    <input type="text" name="id-stranky" id="" value="<?php echo $aktualniInstance->id; ?>">
    <br>
    <label for="">Titulek stranky</label>
    <input type="text" name="titulek-stranky" id="" value="<?php echo $aktualniInstance->titulek; ?>">
    <br>
    <label for="">Menu stranky</label>
    <input type="text" name="menu-stranky" id="" value="<?php echo $aktualniInstance->menu; ?>">
    <br>
    <label for="">Obrazek</label>
    <input type="text" name="obrazek-stranky" id="" value="<?php echo $aktualniInstance->obrazek; ?>">
    <br>
    <label for="">Obsah stranky</label>
    <br>
    <textarea name="obsah-stranky" id="obsah" cols="30" rows="30"><?php
    echo htmlspecialchars($aktualniInstance->getObsah());
    ?></textarea>
    <br>
    <input type="submit" name="aktualizovat-submit" value="Aktualizovat obsah">
</form>

<!-- pripojime knihovnu -->
<script src="./vendor/tinymce/tinymce/tinymce.js"></script>
<!-- aktivovali knihovnu -->
<script>
    tinymce.init({
        selector: "#obsah",
        content_css: ["./css/style.css", "./css/all.min.css"],
        entity_encoding: "raw",
        verify_html: false,
        plugins: ["code", "responsivefilemanager", "image", "anchor", "autolink", "autoresize", "link", "media", "lists"],
        toolbar1: 'formatselect | bold italic strikethrough | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
        toolbar2: "| responsivefilemanager | link | image media | forecolor backcolor  | print preview code ",
        external_plugins: {
			'responsivefilemanager': '<?php echo dirname($_SERVER['PHP_SELF']); ?>/vendor/primakurzy/responsivefilemanager/tinymce/plugins/responsivefilemanager/plugin.min.js',
		},
		external_filemanager_path: "<?php echo dirname($_SERVER['PHP_SELF']); ?>/vendor/primakurzy/responsivefilemanager/filemanager/",
		filemanager_title: "File manager",
    });
</script>
