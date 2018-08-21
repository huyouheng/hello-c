<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\utils\UploadFileUtil;
use App\Http\Requests\BannerRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
	private $breadcrumb = ['title' => "轮播图"];

    public function index()
    {
        return view('admin.banner.index')->with(['breadcrumb' => $this->breadcrumb]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('admin.banner.create')->with(['breadcrumb' => $this->breadcrumb]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        if (!is_null($isShow = $request->get('isShow')) && $isShow == 'on') {
			$isShow = 'y';
		} else {
			$isShow = 'n';
		}

		$file = $request->file('imgUrl');
		$result = UploadFileUtil::upload($file);

		if ($result['status'] == 1) {
			admin_toastr($result['msg'],'error');
			return back()->withInput();
		}

		$data = $request->except('s','_token');
		$data['isShow'] = $isShow;
		$data['imgUrl'] = '120';

		info($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
