var tiposValidos=
[
  'image/jpeg',
  'imaege/png'
];
function validarTipos(files){
  for (var i = 0; i < tiposValidos.length; i++) {
    if(files.type===tiposValidos[i]){
      return true;
    }
  }
  return false;
}
function onChange(event){
  var file=event.target.files[0];
  if(validarTipos(file)){
    var tapaMiniatura=document.getElementById('tapaThumb');
    tapaMiniatura.src=window.URL.createObjectURL(file);
  }
}
