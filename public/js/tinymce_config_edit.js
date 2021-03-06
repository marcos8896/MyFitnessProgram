var editor_config = {
  media_live_embeds: true,
  media_poster: false,
  path_absolute : "/",
  selector : "#body",
  // valid_elements : 'a[href|target=_blank],strong/b,div[align],br'
  plugins: [
    "autoresize advlist autolink lists link image charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars code fullscreen",
    "insertdatetime media nonbreaking save table contextmenu directionality",
    "emoticons template paste textcolor colorpicker textpattern"
  ],

  setup: function(ed){
    ed.on("init",
    function(ed) {
      tinyMCE.get('body').setContent($('#body').val());
      tinyMCE.execCommand('mceRepaint');

    }
  );
},

toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
relative_urls: false,
file_picker_types: 'image',
file_browser_callback : function(field_name, url, type, win) {
  var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
  var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

  var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
  if (type == 'image') {
    cmsURL = cmsURL + "&type=Images";
  } else {
    cmsURL = cmsURL + "&type=Files";
  }

  // tinyMCE.activeEditor.setContent('<span>some</span> html');

  tinyMCE.activeEditor.windowManager.open({
    file : cmsURL,
    title : 'Filemanager',
    width : x * 0.8,
    height : y * 0.8,
    resizable : "yes",
    close_previous : "no"
  });
}

};
tinymce.init(editor_config);
