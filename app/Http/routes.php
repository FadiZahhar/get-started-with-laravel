<?php

Route::get('redirect', function () {
    return redirect('done');
});

Route::get('done', function () {
    return 'redirection complete';
});

Route::get('json', function () {
    return response()->json(['name' => 'jason', 'age' => 25]);
});

Route::get('file', function () {
    return response()->file(storage_path('files/instructions.txt'));
});

Route::get('download', function () {
    return response()->download(storage_path('files/instructions.txt'));
});

Route::get('error', function () {
    abort(403);
});
