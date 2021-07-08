const video = document.getElementById("video");

function startVideo(){
    try {
        navigator.getUserMedia = (navigator.getUserMedia || 
            navigator.webkitGetUserMedia ||
            navigator.mozGetUserMedia ||
            navigator.msGetUserMedia ||
            navigator.oGetUserMedia);
    
        navigator.getUserMedia({video: {}}, 
            stream => video.srcObject = stream,
            err => console.log(err)
        );
    
        console.log("La camara se ha activado con exito");
    } catch (error) {
        console.log("Error");
    }
}
startVideo();