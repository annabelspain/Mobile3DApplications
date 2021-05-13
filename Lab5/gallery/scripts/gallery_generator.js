//Javascript gallery generator 


$(document).ready(function(){

    //Create the XMLHTTPRequest object for communicating with the webserver 
    var xmlHttp = new XMLHttpRequest();
    //Stores number of horizonalColumns gallery has, if too large it wont fit in the browser window 
    //var numberOfColumns = 2;
    //Stores generated gallery HTML code 
    var htmlCode = "";
    //Temporarily stores server response while code is generated 
    var response;


    //Set up the path to the PHP function that reads the image directory to find the thumbnail file names 
    var send="scripts/hook.php";
    //Open the connection to the web server 
    xmlHttp.open("GET", send, true);
    //Tell the server that the client has no outgoing message, i.e. we are sending nothing to the server 
    xmlHttp.send(null);
    //Check we get a valid server response 
    xmlHttp.onreadystatechange = function(){
        if(xmlHttp.readyState == 4) {
            //response handler code 
            //alert(xmlHttp.responseText);
            //Tokenise the response
            response = xmlHttp.responseText.split("~");
            //Loop round the response array 
            for (var i=0;i<response.length;i++){
                //handler to build the HTML string 
                //Use this to provide link to the image 
                htmlCode += '<a href="assets/images/gallery_images' + response[i] + ' ">';
                htmlCode += '<img class="card-img-top img-thumbnail" src="assets/images/gallery_images' + response[i] + '"/>';
                htmlCode += '</a>'
            }
            //Return the HTML string to each of the 3 3D app element blocks, coke, sprite and pepper galleries 
            document.getElementById('gallery_coke').innerHTML = htmlCode;
            document.getElementById('gallery_sprite').innerHTML = htmlCode;
            document.getElementById('gallery_pepper').innerHTML = htmlCode;


            /*
            //Start to write the HTML code into the HTMLcoe string 
            htmlCode += '<tr>';
            //Loop round the response array of tokens, which are the image names..
            for (var i=0; i<response.length;i++){
                //and continue to build the HTML code for the gallery 
                htmlCode += '<td id="gallery_cell">';
                htmlCode += '<a href="' + 'images/' + response[i] + '">';
                htmlCode += '<img src="images/' + response[i] + '" class="img_thumbnail"/>';
                htmlCode += '</a>';
                htmlCode += '</td>';
                //Control the column layout for the gallery thumbnails
                if(((i+1)%numberOfColumns) == 0) {
                    htmlCode += '</tr><tr>';
                }
            }
            htmlCode += '</tr>';
            //Write the HTML code into the gallery
            document.getElementById('gallery').innerHTML = htmlCode;
            */
        }
    }
}); 