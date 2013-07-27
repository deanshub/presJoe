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
        exec('phantomjs '.public_path().'\screen_capture.js levral http://localhost/joePres/presJoe/public');
        return Redirect::to('/');
    }

}