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
        return Redirect::to('/');
    }

}