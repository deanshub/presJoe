<?php

class FileController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function upload()
    {
        Input::file('hamin_file')->move(public_path()."/assets", "x.jpg");
        // die("phantomjs ".public_path()."\assets\screen_capture.js tmp http://localhost/joePres/presJoe/public");
        exec("phantomjs ".public_path()."\assets\screen_capture.js tmp http://localhost/joePres/presJoe/public");
        return Redirect::to('/');
    }

}