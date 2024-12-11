<?php
//what this code does is to avoid class conflict
namespace App\Http\Controllers;
//this code is imported for submitting and retrieving data from the database
use Illuminate\Http\Request;
//what this code does is that it is where the uploaded images/files are stored
use Illuminate\Support\Facades\Storage;

//what this code does is that fileUploadController inherit laravel functionalities like request handling when it extends the base controller
class UploadController extends Controller
{
    // what this code does is that it accepts all request object which contains input data from HTTP request including file data
    public function upload(Request $request)
{
    // what this code does is that it validate the incoming form data
    $request->validate([
        'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    //this check if a file has been uploaded, the $request retrieves the uploaded file
    if ($request->file('file')) {
        //what this code does is that it retrieves the uploaded file,
        $fileName = time().'_'.$request->file('file')->getClientOriginalName();
        //what this line of code does is that it saves an uploaded file to a specific directory, 
        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

        //return with a success message in the form or redirected page with the file name if the file upload is successful 
        return back()->with('success', 'File uploaded successfully')->with('file', $fileName);
    }
    // what this code does is that it displays an error message if the file is invalid, i.e if the file is too large
    return back()->withErrors(['file' => 'Please upload a valid file.']);
}
}
