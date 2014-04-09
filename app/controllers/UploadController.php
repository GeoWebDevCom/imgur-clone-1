<?php

class UploadController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('uploads.index');
	}

	public function preview()
	{
		
		$file = Input::file('image'); // your file upload input field in the form should be named 'file'

		$destinationPath = 'uploads/'. Auth::user()->username;
		$filename = $file->getClientOriginalName();
		//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
		$uploadSuccess = Input::file('image')->move($destinationPath, $filename);

		$imgSrc = $destinationPath . '/' . $filename;
		

		$previewImgSrc = $destinationPath . '/' . 'preview_' . $filename;
		// open an image file
		$img = Image::make($imgSrc);
		// now you are able to resize the instance
		$img->resize(300, 200);
		// finally we save the image as a new image
		$img->save($previewImgSrc);

			$image = '<img src='. $imgSrc. '>';
			$previewimage = '<img src='. $previewImgSrc. '>';

		if( $uploadSuccess ) {
		   return View::make('imagePreview')->with('image',$image)
		   	->with('previewImgSrc',$previewImgSrc)
		   	->with('previewimage',$previewimage)
		   	->with('imgSrc', $imgSrc); // or do a redirect with some message that file was uploaded
		} else{
		   return Response::json('error', 400);
		}
		
		//return View::make('imagePreview')->with($path);

	}

	public function mypics(){

		return Auth::user()->getImages();
	}



}
