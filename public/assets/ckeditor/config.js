
CKEDITOR.editorConfig = function( config ) {
	config.filebrowserBrowseUrl = document.location.origin+'/assets/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = document.location.origin+'/assets/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = document.location.origin+'/assets/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = document.location.origin+'/assets/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = document.location.origin+'/assets/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = document.location.origin+'/assets/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';
};
