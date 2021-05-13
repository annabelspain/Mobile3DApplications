//JavaScript Document 
$(document).ready(function(){

    //AJAX service request to get the main text data from the json data store 
    $.getJSON('./model/data.json', function(jsonObj){
        //Comments for debugging
        console.log(jsonObj);
        //Get the home page main text data 
        $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '<h2>');
        $('#subTitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>');
        $('#description_home').html('<p>' + jsonObj.pageTextData[0].description + '</p>');

        //Get the home page left column text data 
        $('#title_left').html('<h2>' + jsonObj.pageTextData[1].title + '<h2>');
        $('#subTitle_left').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>');
        $('#description_left').html('<p>' + jsonObj.pageTextData[1].description + '</p>');

        //Get the home page centre colum text data 
        $('#title_centre').html('<h2>' + jsonObj.pageTextData[2].title + '<h2>');
        $('#subTitle_centre').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>');
        $('#description_centre').html('<p>' + jsonObj.pageTextData[2].description + '</p>');

        //Get the home page right colum text data 
        $('#title_right').html('<h2>' + jsonObj.pageTextData[3].title + '<h2>');
        $('#subTitle_right').html('<h3>' + jsonObj.pageTextData[3].subTitle + '</h3>');
        $('#description_right').html('<p>' + jsonObj.pageTextData[3].description + '</p>');

        //Get the coke main text data
		$('#x3dModelTitle_coke').html('<h2>' + jsonObj.pageTextData[4].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_coke').html('<p>' + jsonObj.pageTextData[4].x3dCreationMethod + '<p>');
		$('#title_coke').html('<h2>' + jsonObj.pageTextData[4].title + '<h2>');
		$('#subTitle_coke').html('<h3>' + jsonObj.pageTextData[4].subTitle + '</h3>');
		$('#description_coke').html('<p>' + jsonObj.pageTextData[4].description + '</p>');

        //Get the sprite main text data
		$('#x3dModelTitle_sprite').html('<h2>' + jsonObj.pageTextData[5].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_sprite').html('<p>' + jsonObj.pageTextData[5].x3dCreationMethod + '<p>');
		$('#title_sprite').html('<h2>' + jsonObj.pageTextData[5].title + '<h2>');
		$('#subTitle_sprite').html('<h3>' + jsonObj.pageTextData[5].subTitle + '</h3>');
		$('#description_sprite').html('<p>' + jsonObj.pageTextData[5].description + '</p>');		

		//Get the pepper main text data
		$('#x3dModelTitle_pepper').html('<h2>' + jsonObj.pageTextData[6].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_pepper').html('<p>' + jsonObj.pageTextData[6].x3dCreationMethod + '<p>');
 		$('#title_pepper').html('<h2>' + jsonObj.pageTextData[6].title + '<h2>');
		$('#subTitle_pepper').html('<h3>' + jsonObj.pageTextData[6].subTitle + '</h3>');
		$('#description_pepper').html('<p>' + jsonObj.pageTextData[6].description + '</p>');

        //Get the gallery contents data
		$('.title_gallery').html('<h2>' + jsonObj.pageTextData[7].galleryTitle + '<h2>');
		$('.description_gallery').html('<p>' + jsonObj.pageTextData[7].galleryDescription + '</p>');

        //Get camera contents data
		$('.x3dCameraTitle').html('<h2>' + jsonObj.pageTextData[8].CameraTitle + '<h2>');
		$('.x3dCameraSubtitle').html('<p>' + jsonObj.pageTextData[8].CameraSubtitle + '</p>');

        //Get the Fuze Tea card data
        $('#title_fuzeCard').html('<h5>' + jsonObj.pageTextData[9].title + '</h5>');
        $('#description_fuzeCard').html('<p>' + jsonObj.pageTextData[9].description + '</p>');
        
        //Get the Eleanor card data
        $('#description_eleanorCard').html('<p>' + jsonObj.pageTextData[10].description + '</p>');

        //Get the Coke Energy card data
        $('#title_cokeCard').html('<h5>' + jsonObj.pageTextData[11].title + '</h5>');
        $('#description_cokeCard').html('<p>' + jsonObj.pageTextData[11].description + '</p>');

        //Get the Aldous card data
        $('#description_aldousCard').html('<p>' + jsonObj.pageTextData[12].description + '</p>');

        //Get the Costa Coffee card data
        $('#title_costaCard').html('<h5>' + jsonObj.pageTextData[13].title + '</h5>');
        $('#description_costaCard').html('<p>' + jsonObj.pageTextData[13].description + '</p>');

        //Get the Coca Cola card data
        $('#title_cocaColaCard').html('<h5>' + jsonObj.pageTextData[14].title + '</h5>');
        $('#description_cocaColaCard').html('<p>' + jsonObj.pageTextData[14].description + '</p>');

        //Get the Dr Pepper card data
        $('#title_pepperCard').html('<h5>' + jsonObj.pageTextData[15].title + '</h5>');
        $('#description_pepperCard').html('<p>' + jsonObj.pageTextData[15].description + '</p>');

        //Get the Sprite card data
        $('#title_spriteCard').html('<h5>' + jsonObj.pageTextData[16].title + '</h5>');
        $('#description_spriteCard').html('<p>' + jsonObj.pageTextData[16].description + '</p>');

        //Get the description page centre colum text data 
        $('#title_references').html('<h2>' + jsonObj.pageTextData[17].title + '<h2>');
        $('#subTitle_references').html('<h5>' + jsonObj.pageTextData[17].subTitle + '</h5>');

        //Get the About card data
        $('#title_about').html('<h2>' + jsonObj.pageTextData[18].title + '</h2>');
        $('#description_about').html('<p>' + jsonObj.pageTextData[18].description + '</p>');
        $('#subTitle_about').html('<h5>' + jsonObj.pageTextData[18].subTitle + '</h5>');

        //Get the Download card data
        $('#title_download').html('<h5>' + jsonObj.pageTextData[19].title + '</h5>');
        $('#description_download').html('<p>' + jsonObj.pageTextData[19].description + '</p>');

    });
});