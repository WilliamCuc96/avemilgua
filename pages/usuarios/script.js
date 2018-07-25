

function tieneSoporteUserMedia() {
    return !!(navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
}
function _getUserMedia() {
    return (navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices.getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(navigator, arguments);
}

// Declaramos elementos del DOM
var $video = document.getElementById("video"),
	$canvas = document.getElementById("canvas"),
	$boton = document.getElementById("boton"),
	$estado = document.getElementById("estado");
if (tieneSoporteUserMedia()) {
    _getUserMedia(
        {video: true},
        function (stream) {
            console.log("Permiso concedido");
			$video.srcObject = stream;
			$video.play();

			//Escuchar el click
			$boton.addEventListener("click", function(){

				//Pausar reproducción
				$video.pause();

				//Obtener contexto del canvas y dibujar sobre él
				var contexto = $canvas.getContext("2d");
				$canvas.width = $video.videoWidth;
				$canvas.height = $video.videoHeight;
                contexto.drawImage($video, 0, 0, $canvas.width, $canvas.height);
                //contexto.drawImage($video, 0, 0, 200, 160);

				var foto = $canvas.toDataURL(); //Esta es la foto, en base 64
        var block = foto.split(";");
        // Get the content type of the image
        var contentType = block[0].split(":")[1];// In this case "image/png"
        // get the real base64 content of the file
        var realData = block[1].split(",")[1];
        var blob = b64toBlob(realData, "image/png");
        console.log(blob);
        // Create a FormData and append the file with "image" as parameter name
        var formdata = new FormData();
        formdata.append("image", blob);
        // foto = foto.replace(/^data:image\/(png|jpg);base64,/, "");
				// $estado.innerHTML = "Enviando foto. Por favor, espera...";
        jQuery.noConflict();
        jQuery.ajax({
            url: "../uploadPhoto.php",
            data: formdata,
            type: "POST",
            processData: false,
            contentType: false,
            success:function(data){
              console.log(data);
              var completeURL1 = "http://"+window.location.hostname + "/av/" + data;
              document.getElementById('im').src= completeURL1;
              openAviaryWC(completeURL1);
            }
        });
        // $.ajax({
        //   url:"../guardar_foto.php",
        //   type:"POST",
        //   data:{
        //     base64: foto
        //    },
        //   contentType:"application/json",
        //   // dataType:"json",
        //   success: function(data){
        //     console.log(data);
        //        var completeURL1 = "http://"+window.location.hostname + "/av/" + data;
        //        document.getElementById('im').src= completeURL1;
        //        openAviaryWC(completeURL1);
        //   }
        // })
        // $.post(,
        //  function(data){
        //    console.log(data);
        //    var completeURL1 = "http://"+window.location.hostname + "/av/" + data;
        //    document.getElementById('im').src= completeURL1;
        //    openAviaryWC(completeURL1);
        // },
        // {
        //   dataType: "json"
        // });

				//Reanudar reproducción
				$video.play();
			});
        }, function (error) {
            console.log("Permiso denegado o error: ", error);
            $estado.innerHTML = "No se puede acceder a la cámara, o no diste permiso.";
        });
} else {
    alert("Lo siento. Tu navegador no soporta esta característica");
    $estado.innerHTML = "Parece que tu navegador no soporta esta característica. Intenta actualizarlo.";
}

function b64toBlob(b64Data, contentType, sliceSize) {
        contentType = contentType || '';
        sliceSize = sliceSize || 512;

        var byteCharacters = atob(b64Data);
        var byteArrays = [];

        for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
            var slice = byteCharacters.slice(offset, offset + sliceSize);

            var byteNumbers = new Array(slice.length);
            for (var i = 0; i < slice.length; i++) {
                byteNumbers[i] = slice.charCodeAt(i);
            }

            var byteArray = new Uint8Array(byteNumbers);

            byteArrays.push(byteArray);
        }

      var blob = new Blob(byteArrays, {type: contentType});
      return blob;
}
