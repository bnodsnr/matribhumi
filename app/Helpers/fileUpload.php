<?php
if (! function_exists('fileUpload')) {
  function fileUpload($request) {
    $fileName = time().".".$request->getClientOriginalExtension();
    $filePath = $request->move(public_path('public/uploads'), $fileName);
    return $fileName;
  }
}